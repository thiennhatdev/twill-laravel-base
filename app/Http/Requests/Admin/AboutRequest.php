<?php

namespace App\Http\Requests\Admin;

use A17\Twill\Http\Requests\Admin\Request;

class AboutRequest extends Request
{
    public function rulesForCreate()
    {
        return [];
    }

    public function rulesForUpdate()
    {
        return [
            'email' => 'email',
            'phone_number' => 'numeric',
            'fanpage' => 'url',
            'blocks' => 'validBlocks'
        ];
    }
}
