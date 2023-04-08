@extends('layouts.default')

@section('title')
Danh sách dự án
@endsection

@section('head')
  <link href="{{ asset('/css/projects.css') }}" rel="stylesheet" />
@endsection


@section('content')
  <div class="project-list">
    <div class="frame-div">
      <div class="crumb">
        <div class="crumb1">
          <div class="th-2-">
            <img alt='icon-home' src="{{ asset('images/icons/ic-home.svg') }}" />
            <div>
              <span>Trang chủ &gt; </span>
              <span>loại sơn &gt; </span>
              <span class="jotun-ngoi-tht"> Jotun ngoại thất cao cấp nhất</span>
            </div>
          </div>
        </div>
      </div>
      <div class="component-parent">
        <div class="rectangle-parent">
          <img
            class="component-child"
            alt=""
            src="./public/rectangle-48@2x.png"
          />
          <div class="cng-trnh-khu-vinpearl-nam-h-parent">
            <div class="cng-trnh-khu-container">
              <span class="cng-trnh">Công trình: </span
              ><b>Khu vinpearl Nam Hội an</b>
            </div>
            <div class="cng-trnh-khu-container">
              <span class="cng-trnh">Diện tích: </span><b>500m2</b>
            </div>
            <div class="thi-hn-hon">Thời hạn hoàn thành: 2 tháng</div>
            <div class="m-t-thc">
              Mô tả: Thực hiện sơn toàn bộ cho công trình Thực hiện sơn toàn
              bộ cho công trình Thực hiện sơn toàn bộ cho công trình
            </div>
          </div>
        </div>
        <div class="rectangle-parent">
          <div class="cng-trnh-khu-vinpearl-nam-h-group">
            <div class="logo">
              <span class="cng-trnh">Công trình: </span
              ><b>Khu vinpearl Nam Hội an</b>
            </div>
            <div class="logo">
              <span class="cng-trnh">Diện tích: </span><b>500m2</b>
            </div>
            <div class="th-2-">Thời hạn hoàn thành: 2 tháng</div>
            <div class="m-t-thc1">
              Mô tả: Thực hiện sơn toàn bộ cho công trình Thực hiện sơn toàn
              bộ cho công trình Thực hiện sơn toàn bộ cho công trình
            </div>
          </div>
          <img
            class="component-child"
            alt=""
            src="./public/rectangle-481@2x.png"
          />
        </div>
        <div class="rectangle-group">
          <img
            class="component-child"
            alt=""
            src="./public/rectangle-482@2x.png"
          />
          <div class="cng-trnh-khu-vinpearl-nam-h-parent">
            <div class="cng-trnh-khu-container">
              <span class="cng-trnh">Công trình: </span
              ><b>Khu vinpearl Nam Hội an</b>
            </div>
            <div class="cng-trnh-khu-container">
              <span class="cng-trnh">Diện tích: </span><b>500m2</b>
            </div>
            <div class="thi-hn-hon">Thời hạn hoàn thành: 2 tháng</div>
            <div class="m-t-thc">
              Mô tả: Thực hiện sơn toàn bộ cho công trình Thực hiện sơn toàn
              bộ cho công trình Thực hiện sơn toàn bộ cho công trình
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection