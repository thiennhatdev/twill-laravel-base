@extends('layouts.default')

@section('title')
{{ $news_detail->title }}
@endsection

@section('head')
  <meta name="description" content="{!! Str::words($news_detail->description, 150)  !!}"/>
  <meta property="og:title" content="{{ $news_detail->title }}" />
  <meta property="og:description" content="{!! Str::words($news_detail->description, 150)  !!}" />
  <meta property="og:site_name" content="{{ $news_detail->title }}" />

  <link href="{{ asset('/css/news-detail.css') }}" rel="stylesheet" />
@endsection

@section('content')
  <div class="news-detail">
    <div class="news-detail-content-parent">
      <div class="crumb4">
        <div class="crumb5">
          <div class="h00-17h002">
            <img alt='icon-home' class='ic-home-breadcrum' src="{{ asset('images/icons/ic-home-breadcrum.svg') }}" />
            <div>
              <span>
                <a href="{{ URL::route('homepage') }}">
                  Trang chủ
                </a>  
              </span>
              <img alt='arrow-right' src="{{ asset('images/icons/ic-arrow-breadcrum.svg') }}" />
              <span class="jotun-ngoi-tht3">
                <a href="{{ URL::route('news') }}">
                  Tin tức
                </a>
              </span>
              <img alt='arrow-right' src="{{ asset('images/icons/ic-arrow-breadcrum.svg') }}" />
              <span class="jotun-ngoi-tht2"> {{ $news_detail->title }}</span>
            </div>
          </div>
        </div>
      </div>
      <div class="news-detail-content">
        <div class="news-detail-content-inner">
          <div class="cng-ngh-cht-to-mu-tin-ti-parent">
            <div class="cng-ngh-cht">
              {{ $news_detail->title }}
            </div>
            <div class="tashield-l-mt-container">
              {!! $news_detail->renderBlocks() !!}
            </div>
          </div>
        </div>
        <div class="title-sp-cungloai-parent">
          <div class="title-sp-cungloai">
            <div class="cc-sn-phm">Các tin gần đây</div>
          </div>
          <div class="group-parent">
            @foreach($recent_news as $item)
              <div class="rectangle-container">
                <div class="group-container">
                  <div class="sn-jotun-cht-lng-vt-tri-parent">
                    <div class="sn-jotun-cht">
                      {{ $item->description }}
                    </div>
                    <div class="sn-jotun-p">
                      <a href="{{ URL::route('news-detail', ['id' => $item->id, 'slug' => $item->slug]) }}" title="{{ $item->title }}">
                        {{ $item->title }}
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection