@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'title',
        'label' => 'Title',
        'maxlength' => 200
    ])

    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'maxlength' => 200
    ])

    @formField('input', [
        'name' => 'address',
        'label' => 'Địa chỉ',
        'maxlength' => 200
    ])

    @formField('input', [
        'name' => 'email',
        'label' => 'Email',
        'type' => 'email',
        'maxlength' => 200
    ])

    @formField('input', [
        'name' => 'phone_number',
        'label' => 'Số điện thoại',
        'type' => 'number',
        'maxlength' => 200
    ])

    @formField('input', [
        'name' => 'fanpage',
        'label' => 'Fanpage',
        'type' => 'url',
        'maxlength' => 200
    ])

    @formField('block_editor', [
        'label' => 'Block',
        'blocks' => ['quote', 'information', 'paragraph']
    ])

    
@stop
