<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\Behaviors\HandleRepeaters;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Paint;

class PaintRepository extends ModuleRepository
{
    use HandleBlocks, HandleTranslations, HandleSlugs, HandleMedias, HandleFiles, HandleRevisions, HandleRepeaters;

    public function __construct(Paint $model)
    {
        $this->model = $model;
    }

    public function afterSave($object, $fields)
    {
        $this->updateRepeater($object, $fields, 'paints', 'PaintsItem', 'paints-item');
        parent::afterSave($object, $fields);
    }

    public function getFormFields($object)
    {
        $fields = parent::getFormFields($object);
        $fields = $this->getFormFieldsForRepeater($object, $fields, 'paints', 'PaintsItem', 'paints-item');
        return $fields;
    }

    public function allPaintsWithCategory() 
    {
        return $this->model
            ->rightJoin('paints_items','paints_items.paint_id','=','paints.id')
            ->select('paints_items.*','paints.*')
            ->leftJoin('paint_categories', 'paints.paint_categories_id', '=', 'paint_categories.id')
            ->select('paints_items.*', 'paints.*', 'paint_categories.title as categoriesName')
            ->published()
            ->get()
            ->groupBy('paint_categories_id')
            ->sortByDesc(function ($stats, $key) {
                return count($stats);
            });
    }

    public function paintDetail($id)
    {
        $paint = Paint::where('id', $id)
                ->where('deleted_at', '=', null)
                ->first()
                ->leftJoin('paint_categories', 'paints.paint_categories_id', '=', 'paint_categories.id')
                ->select('paints_items.*', 'paints.*', 'paint_categories.title as categoriesName')
                ->rightJoin('paints_items', 'paints.id', '=', 'paints_items.paint_id')
                ->where('paint_id', '=', $id)
                ->get();
        return $paint;
    }

    public function relatedPaintsByPaintId($id)
    {
        $paint_categories_id = Paint::where('id', $id)
                ->where('deleted_at', '=', null)
                ->first()
                ->paint_categories_id;
        $related_paints = Paint::where('paint_categories_id', $paint_categories_id)
                ->leftJoin('paint_categories', 'paints.paint_categories_id', '=', 'paint_categories.id')
                ->select('paints.*', 'paint_categories.title as categoriesName')                        
                ->get();
        return $related_paints;
    }

    public function searchPaints($slug)
    {
        $query = str_replace('-', ' ', $slug);
        $results = Paint::where('paints.title', 'LIKE', '%' . $query . '%')
                    ->where('paints.deleted_at', '=', null)
                    ->published()
                    ->rightJoin('paints_items','paints_items.paint_id','=','paints.id')
                    ->select('paints_items.*','paints.*')
                    ->leftJoin('paint_categories', 'paints.paint_categories_id', '=', 'paint_categories.id')
                    ->select('paints_items.*', 'paints.*', 'paint_categories.title as categoriesName')
                    ->paginate(10)
                    ;
        return $results;
    }
}
