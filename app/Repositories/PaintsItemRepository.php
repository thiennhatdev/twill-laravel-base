<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\PaintsItem;

class PaintsItemRepository extends ModuleRepository
{

    public function __construct(PaintsItem $model)
    {
        $this->model = $model;
    }
}
