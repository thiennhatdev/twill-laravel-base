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
            'paint_categories_id' => 'required',
            'repeaters.paints-item.*.origin_price' => 'required',
            'repeaters.paints-item.*.origin_price' => 'numeric',
            'repeaters.paints-item.*.sell_price' => 'required',
            'repeaters.paints-item.*.sell_price' => 'numeric',
            'repeaters.paints-item.*.specifications' => 'required',
            'repeaters.paints-item.*.color' => 'required'
        ];
    }

    public function messages() {
        return [
            'title.required' => "Tên là bắt buộc!",
            'feature.required' => "Tính năng là bắt buộc!",
            'paint_categories_id.required' => "Loại sản phẩm là bắt buộc!",
            'repeaters.paints-item.*.origin_price.required' => 'Giá ban đầu là bắt buộc!',
            'repeaters.paints-item.*.origin_price.numeric' => 'Giá ban đầu phải là số!',
            'repeaters.paints-item.*.sell_price.required' => 'Giá bán ra là bắt buộc!',
            'repeaters.paints-item.*.sell_price.numeric' => 'Giá bán ra phải là số!',
            'repeaters.paints-item.*.specifications.required' => 'Quy cách là bắt buộc!',
            'repeaters.paints-item.*.color.required' => 'Màu là bắt buộc!',
        ];
    }
}
