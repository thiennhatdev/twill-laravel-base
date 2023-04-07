<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\PaintCategory;

class PaintCategoryRepository extends ModuleRepository
{
    use HandleBlocks, HandleTranslations, HandleSlugs, HandleRevisions;

    public function __construct(PaintCategory $model)
    {
        $this->model = $model;
    }

    public function allCategorys() 
    {
        $list = $this->model
                ->published()
                ->get();
        $arr = [];
        foreach ($list as $value) {
            array_push($arr, [
                'value' => $value->id,
                'label' => $value->title
            ]);
        };
         return $arr;
    }
}
