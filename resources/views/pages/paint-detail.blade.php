@extends('layouts.default')

@section('title')
{{ $paint->title }}
@endsection

@section('head')
  <meta name="description" content="{!! Str::words($paint->feature, 150)  !!}"/>
  <meta property="og:title" content="{{ $paint->title }}" />
  <meta property="og:description" content="{!! Str::words($paint->feature, 150)  !!}" />
  <meta property="og:site_name" content="{{ $paint->title }}" />

  <link href="{{ asset('/css/paint-detail.css') }}" rel="stylesheet" />
@endsection


@section('content')
  <div class="paint-detail">
    <div class="paint-detail-content">
      <div class="crumb8">
        <div class="quy-cch-45kg">
          <img alt='icon-home' class='ic-home-breadcrum' src="{{ asset('images/icons/ic-home-breadcrum.svg') }}" />
          <div>
            <span>
              <a href="{{ URL::route('homepage') }}">
                Trang chủ
              </a>  
            </span>
            <img alt='arrow-right' src="{{ asset('images/icons/ic-arrow-breadcrum.svg') }}" />
            <span> {{ $paint->categoriesName }} </span>
            <img alt='arrow-right' src="{{ asset('images/icons/ic-arrow-breadcrum.svg') }}" />
            <span class="vn4"> {{ $paint->title }}</span>
          </div>
        </div>
      </div>
      <div class="rectangle-parent9">
        <div class='wrap-img-product'>
          <img
            class="frame-child10"
            alt="{{ $paint->title }}"
            src="{{ $paint->image('thumbnail', 'default', ['fm' => 'png']) }}"
          />
        </div>
        
        <div class="thongtin-sanpham">
          <div class="vn">
            <span class="tn-sn-phm">Tên sản phẩm: </span
            ><span class="jotun-interior-putty">{{ $paint->title }}</span>
          </div>
          <div class="vn">
            <span class="tn-sn-phm">Tính năng: </span
            ><span class="jotun-interior-putty"
              >{{ $paint->feature }}</span
            >
          </div>
          <table>
            <thead>
              <tr>
                <th>Quy cách</th>
                <th>Đơn giá</th>
                <th>Màu</th>
              </tr>
            </thead>
            <tbody>
              @foreach($paints as $item)
                <tr>
                  <td>{{ $item->specifications }}</td>
                  <td>{{ number_format($item->sell_price, 0, '.', '.') }} vnđ</td>
                  <td>{{ $item->color }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="th-trng-vit-container">
        <div class='paint-more-info'>Thông tin thêm</div>
        {!! $paint->renderBlocks() !!}
      </div>
      <div class="paint-detail-content-child"></div>
      
      @if(count($related_paints))
        <div class="sp-cungloai">
          <div class="title-sp-cungloai1">
            <div class="cc-sn-phm1">Các sản phẩm cùng loại</div>
          </div>
          <div class="sp-cungloai-inner">
            <div class="instance-group">
              @foreach($related_paints as $product)
                <div class="frame-parent33">
                  <div class="rectangle-parent5">
                    <img
                      class="frame-child3"
                      alt="{{ $product->title }}"
                      src="{{ $product->image('thumbnail', 'default') }}"
                    />
                  </div>
                  <div class="sn-alex-ngoi">
                    <a href="{{ URL::route('paint-detail', ['id' => $product->id, 'slug' => $product->slug]) }}" title="{{ $product->title }}">
                      {{ $product->title }}
                    </a>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      @endif
    </div>
    <div class="paint-detail-child"></div>
  </div>
@endsection