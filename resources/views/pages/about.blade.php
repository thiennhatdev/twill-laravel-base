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
            <div class="cty-trch-nhim">{{ $about->title ?? "" }}</div>
            <div class="chuyn-phn-sn company-description">
              {{ $about->description ?? "" }}
            </div>
            <div class="chuyn-phn-sn">
              <b>Địa chỉ:</b> {{ $about->address ?? "" }}
            </div>
            <div class="chuyn-phn-sn">
            <b>Email:</b> {{ $about->email ?? "" }} - Hotline: {{ $about->phone_number ?? "" }}
            </div>
            <div class="chuyn-phn-sn">
            <b>Fanpage:</b> {{ $about->fanpage ?? "" }}
            </div>
          </div>
          <div class="sn-jotun-cao-cp-jotashield-c-parent">
          @if($about)
            {!! $about->renderBlocks() !!}          
          @endif
          </div>
        </div>
        <div class="wrap-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.261306015248!2d108.13333589999999!3d16.103778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421f20df3de217%3A0xa35b51a077ab50d4!2zVFJVTkcgVMOCTSBQSEEgTcOAVSBEQU5BUFJPLCBOSMOAIFBIw4JOIFBI4buQSSBTxqBOIEpPVFVOLCBEVUxVWCwgSElOTy4uLg!5e0!3m2!1svi!2s!4v1685871186940!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      
    </div>
  </div>
@endsection