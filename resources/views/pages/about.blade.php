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
            <img alt='icon-home' class='ic-home-breadcrum' src="{{ asset('images/icons/ic-home-breadcrum.svg') }}" />
            <div>
              <span>
                <a href="{{ URL::route('homepage') }}">
                  Trang chủ
                </a>  
              </span>
              <img alt='arrow-right' src="{{ asset('images/icons/ic-arrow-breadcrum.svg') }}" />
              <span class="jotun-ngoi-tht1"> Giới thiệu công ty</span>
            </div>
          </div>
        </div>
      </div>
      <div class="frame-parent8">
        <div class="frame-parent9">
          <div class="cty-trch-nhim-hu-hn-bqsoft-parent">
            <div class="cty-trch-nhim">{{ $abouts->title }}</div>
            <div class="chuyn-phn-sn">
              {{ $abouts->description }}
            </div>
            <div class="chuyn-phn-sn">
              Địa chỉ: {{ $abouts->address }}
            </div>
            <div class="chuyn-phn-sn">
              Email: {{ $abouts->email }} - Hotline: {{ $abouts->phone_number }}
            </div>
            <div class="chuyn-phn-sn">
              Fanpage: {{ $abouts->fanpage }}
            </div>
          </div>
          <div class="sn-jotun-cao-cp-jotashield-c-parent">
            {!! $abouts->renderBlocks() !!}
          </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.6762041967354!2d108.2351454!3d16.0822838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421820feb2509f%3A0x9121f9a30c886258!2zMTM0IFRo4bq_IEzhu68sIEFuIEjhuqNpIELhuq9jLCBTxqFuIFRyw6AsIMSQw6AgTuG6tW5nIDU1MDAwMA!5e0!3m2!1svi!2s!4v1681216674975!5m2!1svi!2s" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      
    </div>
  </div>
@endsection