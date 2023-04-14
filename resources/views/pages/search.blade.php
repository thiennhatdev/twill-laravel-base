@extends('layouts.default')

@section('title')
Tìm kiếm
@endsection

@section('head')
  <link href="{{ asset('/css/search.css') }}" rel="stylesheet" />
@endsection


@section('content')
    <div class='search-outer'>
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
                <span class="jotun-ngoi-tht3">Tìm kiếm: {{ request()->route('slug') }}</span>
                </div>
            </div>
            </div>
        </div>
        <div>
            <div>
                @if($results->isEmpty())
                    <h1 class='result-empty'>Không tìm thấy kết quả</h1>
                @else
                    <div class='wrap-search'>
                        @foreach($results as $paint)
                            <div class="product-list__item ">
                                <div class="product frame-parent44 ">
                                <div class="rectangle-parent11">
                                    <img
                                    class="frame-child12"
                                    alt="{{ $paint->title }}"
                                    src="{{ $paint->image('thumbnail', 'default') }}"
                                    />
                                </div>
                                <a href="{{ URL::route('paint-detail', ['id' => $paint->id, 'slug' => $paint->slug]) }}" class="sn-alex-ngoi4" title="{{ $paint->title }}">
                                    {{ $paint->title }}
                                </a>
                                <div class='product-specifications-color'>
                                    <div class='product-specifications'>{{ $paint->specifications }}</div>
                                    <div class='product-color'>{{ $paint->color }}</div>
                                </div>
                                <div class="frame4">
                                    <div class="logo10">{{ number_format($paint->sell_price, 0, '.', '.') }} vnđ</div>
                                </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                </div>
        </div>
        @include('components.pagination.default', ['paginator' => $results, 'link_limit' => 10])
    </div>
@endsection