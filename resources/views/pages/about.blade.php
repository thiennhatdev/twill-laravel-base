@extends('layouts.default')

@section('title')
Giới thiệu công ty
@endsection

@section('head')
  <link href="{{ asset('/css/about.css') }}" rel="stylesheet" />
@endsection


@section('content')
  <div class="about-company">
    <div class="about-company-content">
      <div class="crumb2">
        <div class="crumb3">
          <div class="h00-17h001">
            <img alt='icon-home' src="{{ asset('images/icons/ic-home.svg') }}" />
            <div>
              <span>Trang chủ &gt; </span>
              <span>loại sơn &gt; </span>
              <span class="jotun-ngoi-tht1"> Jotun ngoại thất cao cấp nhất</span>
            </div>
          </div>
        </div>
      </div>
      <div class="frame-parent8">
        <div class="frame-parent9">
          <div class="cty-trch-nhim-hu-hn-bqsoft-parent">
            <div class="cty-trch-nhim">CTY TRÁCH NHIỆM HỮU HẠN BQSOFT</div>
            <div class="chuyn-phn-sn">
              Chuyên phấn sơn Jotun chính hãng uy tín cả nước
            </div>
            <div class="chuyn-phn-sn">
              Địa chỉ: 134 Nguỹen Hữu Thọ - Đà Nẵng
            </div>
            <div class="chuyn-phn-sn">
              Email: abc@gmail.com - Hotline: 0705.550.553
            </div>
            <div class="chuyn-phn-sn">
              Fanpage: http://facebook.com/sonjotun
            </div>
          </div>
          <div class="sn-jotun-cao-cp-jotashield-c-parent">
            <div class="sn-jotun-cao-container">
              <ul class="sn-jotun-cao-cp-jotashield-c">
                <li class="sn-jotun-cao">
                  Sơn Jotun cao cấp Jotashield có khả năng
                </li>
                <li class="sn-jotun-cao">
                  chống rong rêu và nấm mốc với công nghệ hoàn toàn khác các
                  sản phẩm sơn khác.
                </li>
                <li class="sn-jotun-cao">
                  Sản phẩm sử dụng công nghệ chất kháng khuẩn tiên tiến nhất
                  nên ngăn chặn hoàn toàn
                </li>
                <li class="sn-jotun-cao">
                  sự hình thành và phát triển của rong rêu,
                </li>
                <li>nấm mốc.</li>
              </ul>
            </div>
            <div class="vi-kinh-nghim">
              Với kinh nghiệm 16 năm trong nghề , chúng tôi chuyên cung cấp
              .....
            </div>
          </div>
        </div>
        <img class="frame-item" alt="" src="./public/rectangle-45@2x.png" />
      </div>
      
    </div>
  </div>
@endsection