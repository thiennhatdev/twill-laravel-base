<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class PaintController extends BaseModuleController
{
    protected $moduleName = 'paints';

    protected $indexOptions = [
        'reorder' => true,
    ];

    protected $indexColumns = [
        // 'thumbnail' => [
        //     'title' => 'Ảnh',
        //     'field' => 'thumbnail',
        // ],
        'title' => [
            'title' => 'Tên',
            'field' => 'title',
        ],
        'type' => [
            'title' => 'Loại',
            'field' => 'type',
        ],
        'origin_price' => [
            'title' => 'Giá gốc',
            'field' => 'origin_price',
        ],
        'sell_price' => [
            'title' => 'Giá bán',
            'field' => 'sell_price',
        ]
    ];
}
