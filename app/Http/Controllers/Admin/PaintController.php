<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use App\Repositories\PaintCategoryRepository;

class PaintController extends BaseModuleController
{
    protected $moduleName = 'paints';

    protected $indexOptions = [
        'reorder' => true,
    ];

    protected $indexColumns = [
        // 'thumbnail' => [
        //     'thumb' => true, // image column
        //     'variant' => [
        //         'role' => 'thumbnail',
        //         'crop' => 'thumbnail',
        //     ],
        // ],
        'title' => [
            'title' => 'Tên',
            'field' => 'title',
        ],
        // 'type' => [
        //     'title' => 'Loại',
        //     'field' => 'paint_categories_id',
        // ],
        'feature' => [
            'title' => 'Tính năng',
            'field' => 'feature',
        ],
    ];

    protected function formData($request)
    {
        return [
            'categoryList' => app(PaintCategoryRepository::class)->allCategorys()
        ];
    }

    protected $perPage = 10;

}
