<?php

namespace App\Http\Requests\Admin;

use A17\Twill\Http\Requests\Admin\Request;

class PaintRequest extends Request
{
    public function rulesForCreate()
    {
        return [
        ];
    }

    public function rulesForUpdate()
    {
        return [
            'title' => 'required',
            'feature' => 'required',
            'specifications' => 'required',
            'origin_price' => 'required',
            'sell_price' => 'required'
        ];
    }
}
