@extends('layouts.admin-layout')

@section('contentFields')
    @formField('input', [
        'name' => 'title',
        'label' => 'Tiêu đề',
        'maxlength' => 200
    ])

    @formField('input', [
        'name' => 'description',
        'label' => 'Mô tả ngắn',
        'maxlength' => 200
    ])

    @formField('block_editor', [
        'label' => 'Block',
        'blocks' => ['quote', 'paragraph', 'image']
    ])

@stop
