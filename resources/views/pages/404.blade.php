@extends('layouts.default')

@section('title')
Không tìm thấy
@endsection

@section('head')
  <link href="{{ asset('/css/404.css') }}" rel="stylesheet" />
@endsection


@section('content')
<section class="not-found">
    <div>
        <h1>
            <span>4</span>
            <span>0</span>
            <span>4</span>
        </h1>
        <h2>Trang không được tìm thấy</h2>
        <a href="{{ URL::route('homepage') }}">
            Quay về trang chủ
        </a>
    </div>    
</section>
@endsection

