@extends('layouts.default')

@section('title')
Danh sách tin
@endsection

@section('head')
  <link href="{{ asset('/css/news.css') }}" rel="stylesheet" />
@endsection

@section('content')
  <div class="news-list">
    <div class="frame-parent24">
      <div class="crumb6">
        <div class="crumb7">
          <div class="h00-17h003">
            <img alt='icon-home' class='ic-home-breadcrum' src="{{ asset('images/icons/ic-home-breadcrum.svg') }}" />
            <div>
              <span>
                <a href="{{ URL::route('homepage') }}">
                  Trang chủ
                </a>  
              </span>
              <img alt='arrow-right' src="{{ asset('images/icons/ic-arrow-breadcrum.svg') }}" />
              <span class="jotun-ngoi-tht3">Danh sách tin</span>
            </div>
          </div>
        </div>
      </div>
      <div class="frame-parent25">
        <div class="component-group">
          @foreach($news as $item)
            <div class="frame-wrapper">
              <div class="thi-cong-son-nha-4-1-parent">
                <div class="tiu-parent">
                  <div class="tiu">
                    <a href="{{ URL::route('news-detail', ['id' => $item->id, 'slug' => $item->slug]) }}" title="{{ $item->title }}">
                      {{ $item->title }}
                    </a>
                  </div>
                  <div class="b-trng-nguyn">
                    {{ $item->description }}
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
      @include('components.pagination.default', ['paginator' => $news, 'link_limit' => 10])
    </div>
    <div class="news-list-child"></div>
  </div>
@endsection
