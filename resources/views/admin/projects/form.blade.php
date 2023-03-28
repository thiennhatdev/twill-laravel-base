@extends('layouts.admin-layout')

@section('contentFields')
@formField('medias', [
        'name' => 'thumbnail',
        'label' => 'Ảnh dự án',
    ])

    @formField('input', [
        'name' => 'title',
        'label' => 'Dự án',
        'maxlength' => 200
    ])

    @formField('input', [
        'name' => 'completion_time',
        'label' => 'Thời hạn hoàn thành',
        'maxlength' => 200,
        'note' => 'Ví dụ: 3 tháng',
    ])

    @formField('input', [
        'name' => 'acreage',
        'label' => 'Diện tích',
        'note' => 'Ví dụ: 200m2',
    ])

    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Mô tả',
        'toolbarOptions' => [
            ['header' => [2, 3, 4, 5, 6, false]],
            'bold',
            'italic',
            'underline',
            'strike',
            ["script" => "super"],
            ["script" => "sub"],
            "blockquote",
            "code-block",
            ['list' => 'ordered'],
            ['list' => 'bullet'],
            ['indent' => '-1'],
            ['indent' => '+1'],
            ["align" => []],
            ["direction" => "rtl"],
            'link',
            "clean",
        ],
    ])

@stop
