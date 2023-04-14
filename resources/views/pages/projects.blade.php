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
            <img alt='icon-home' class='ic-home-breadcrum' src="{{ asset('images/icons/ic-home-breadcrum.svg') }}" />
            <div>
              <span>
                <a href="{{ URL::route('homepage') }}">
                  Trang chủ
                </a>  
              </span>
              <img alt='arrow-right' src="{{ asset('images/icons/ic-arrow-breadcrum.svg') }}" />
              <span class="jotun-ngoi-tht"> Tất cả dự án</span>
            </div>
          </div>
        </div>
      </div>
      <div class="component-parent">
        @foreach($projects as $project)
          <div class="rectangle-parent">
            <img
              class="component-child"
              alt="{{ $project->title }}"
              src="{{ $project->image('thumbnail', 'default') }}"
            />
            <div class="cng-trnh-khu-vinpearl-nam-h-parent">
              <div class="cng-trnh-khu-container">
                <span class="cng-trnh"><b>Công trình:</b> </span
                >{{ $project->title }}
              </div>
              <div class="cng-trnh-khu-container">
                <span class="cng-trnh"><b>Diện tích:</b> </span>{{ $project->acreage }}
              </div>
              <div class="thi-hn-hon"><b>Thời hạn hoàn thành:</b> {{ $project->completion_time }}</div>
              <div class="m-t-thc">
                <b>Mô tả:</b> {!! $project->description !!}
              </div>
            </div>
          </div>
        @endforeach
      </div>
      @include('components.pagination.default', ['paginator' => $projects, 'link_limit' => 10])
    </div>
  </div>
  
@endsection