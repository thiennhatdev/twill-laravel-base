@extends('layouts.admin-layout')

@section('contentFields')
    @formField('medias', [
        'name' => 'thumbnail',
        'label' => 'Ảnh sản phẩm',
    ])
    @formField('input', [
        'name' => 'title',
        'label' => 'Tên sản phẩm',
        'maxlength' => 200,
        'required' => true
    ])
    @formField('select', [
        'name' => 'type',
        'label' => 'Loại',
        'required' => true,
        'placeholder' => 'Chọn loại sơn',
        'options' => [
            [
                'value' => 1,
                'label' => 'New York'
            ],
            [
                'value' => 2,
                'label' => 'London'
            ],
            [
                'value' => 3,
                'label' => 'Berlin'
            ]
        ]
    ])

    @formField('input', [
        'name' => 'feature',
        'label' => 'Tính năng',
        'maxlength' => 200,
        'required' => true
    ])

    @formField('input', [
        'name' => 'specifications',
        'label' => 'Quy cách',
        'maxlength' => 200,
        'required' => true,
        'note' => 'Ví dụ: 4kg'
    ])

    @formField('input', [
        'name' => 'origin_price',
        'label' => 'Giá gốc',
        'required' => true,
        'type' => 'number',
        'note' => 'Ví dụ: 600000'
    ])

    @formField('input', [
        'name' => 'sell_price',
        'label' => 'Giá bán ra',
        'required' => true,
        'type' => 'number',
        'note' => 'Ví dụ: 600000'
    ])

    @formField('input', [
        'name' => 'color',
        'label' => 'Màu sơn',
        'note' => 'Ví dụ: Trắng - Xám - Xanh'
    ])

    @formField('block_editor', [
        'label' => 'Block',
        'blocks' => ['quote', 'paragraph', 'image']
    ])
@stop
