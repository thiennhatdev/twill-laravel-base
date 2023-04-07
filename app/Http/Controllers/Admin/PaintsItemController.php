<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class PaintsItemController extends BaseModuleController
{
    protected $moduleName = 'paintsItems';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
