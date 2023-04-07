@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'title',
        'label' => 'Tên danh mục',
        'required' => true,
        'maxlength' => 100
    ])
    @formField('input', [
        'name' => 'description',
        'label' => 'Mô tả',
        'type' => 'textarea',
        'rows' => 3
    ])
@stop
