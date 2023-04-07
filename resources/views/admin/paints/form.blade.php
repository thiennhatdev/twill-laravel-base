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

    @formField('input', [
        'name' => 'feature',
        'label' => 'Tính năng',
        'maxlength' => 200,
        'required' => true
    ])

    @formField('select', [
        'name' => 'paint_categories_id',
        'label' => 'Loại sơn',
        'required' => true,
        'placeholder' => 'Chọn loại sơn',
        'options' => $categoryList
    ])

    @formField('repeater', [
        'type' => 'paints-item',
    ])

    @formField('block_editor', [
        'label' => 'Block',
        'blocks' => ['quote', 'paragraph', 'image']
    ])
@stop
