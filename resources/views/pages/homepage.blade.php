@extends('layouts.default')

@section('title')
Trang chủ
@endsection

@section('head')
  <link href="{{ asset('/css/homepage.css') }}" rel="stylesheet" />
@endsection

@section('content')
  <div class="homepage" id="home-page">
    <div class="homepage-inner">
      <div class="banner-parent">
        <div class="img-comp-container">
          <picture>
            <source media="(min-width:576px)" srcset="{{ asset('images/bg-banner.svg') }}">
            <source media="(min-width:280px)" srcset="{{ asset('images/bg-banner-mobile.webp') }}">
            <img src="{{ asset('images/bg-banner.svg') }}" alt="màu nha dep">
          </picture>
        </div>
        
        <form class='form-search-paint' action="{{ URL::route('action-search') }}" method="POST">
          {{ csrf_field() }}
          <div class='wrap-search-product'>
            <div class='search-product'>
                <input type='text' name='paint-name' placeholder="Tìm kiếm sản phẩm sơn" />
                <img alt='icon-search' src="{{ asset('images/icons/ic-search.svg') }}" />
              </form>
            </div>
            <button type='submit'>Tìm</button>
          </div>
        </form>

        @foreach($paints as $key => $paint)
          {{-- group slider --}}
          <div class="group-parent5">
            <div class="vector-parent">
              <div class="rectangle-parent10">
                <div class='rectangle-parent10-inner'>
                  <div class='paint-category-title'>
                    <img alt='star' src="{{ asset('images/icons/ic-star-white.svg') }}" />
                    <div class="sn-ngoi-tht">{{ $paint[0]->categoriesName }}</div>
                  </div>
                </div>
              </div>
              <div class="category-right-head"> </div>
            </div>
            <div class="instance-container">
              <div class='carousel parent-carasel-{{ $key }}'>
                <div class=" carousel-content">
                  @foreach($paint as $paintProduct)
                    <div class="product-list__item slide">
                      <div class="product frame-parent44 ">
                        <div class="rectangle-parent11">
                          <img
                            class="frame-child12"
                            alt="{{ $paintProduct->title }}"
                            src="{{ $paintProduct->image('thumbnail', 'default', ['fm' => 'png']) }}"
                          />
                        </div>
                        <a href="{{ URL::route('paint-detail', ['id' => $paintProduct->id, 'slug' => $paintProduct->slug]) }}" class="sn-alex-ngoi4" title="{{ $paintProduct->title }}">
                          {{ $paintProduct->title }}
                        </a>
                        <div class='product-specifications-color'>
                          <div class='product-specifications'>{{ $paintProduct->specifications }}</div>
                          <div class='product-color'>{{ $paintProduct->color }}</div>
                        </div>
                        <div class="frame4">
                          <div class="logo10">{{ number_format($paintProduct->sell_price, 0, '.', '.') }} vnđ</div>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              
                <div class='wrap-navigate-slide'>
                  <div>
                    <img class="nav-left" alt='icon-arrow-left' src="{{ asset('images/icons/ic-arrow-left.svg') }}" />
                  </div>
                  <div>
                    <img class="nav-right" alt='icon-arrow-right' src="{{ asset('images/icons/ic-arrow-right.svg') }}" />
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          {{-- group slider --}}
        @endforeach
       
        <div class='paint-appendix'>
          <div>
            {{-- <img alt='star' src="{{ asset('images/icons/ic-star.svg') }}" /> --}}
            <p>* Bảng giá sơn đã bao gồm 10% thuế VAT & áp dụng cho sơn trắng.</p>
          </div>
          
          <div>
            {{-- <img alt='star' src="{{ asset('images/icons/ic-star.svg') }}" /> --}}
            <p>* Sơn pha màu sẽ được tính theo giá thực tế dựa trên máy pha màu.</p>
          </div>
        </div>
        <div class="frame-wrapper7">
          <picture>
            <source media="(min-width:576px)" srcset="{{ asset('images/bg-banner-middle.webp') }}">
            <source media="(min-width:320px)" srcset="{{ asset('images/bg-banner-middle-mobile.svg') }}">
            <img src="{{ asset('images/bg-banner-middle.webp') }}" alt="Flowers">
          </picture>
        </div>
      </div>
    </div>
    <div class="price-table">
      <div class="real-image-list">
        <div class="real-image-list-child"></div>
        <div class="image-list">
          <div class="instance-parent4">
            <div class="frame-parent60">
              <div class="cc-loi-sn-jotun-wrapper">
                <div class="cc-loi-sn-1">Dự án đã hoàn thành</div>
              </div>
            </div>
            <div class="mt-s-hnh">
              Một số hình ảnh công trình tiêu biểu đã thi công
            </div>
          </div>
          <div class="frame-parent61">
            <div class="frame-parent62">
              <div class="rectangle-parent31">
                <img
                  class="frame-child46"
                  alt="thi-cong-son-tai-da-nang"
                  src="{{ asset('images/thi-cong-son-tai-da-nang-1.jpg') }}"
                />
                <div class="frame-parent63">
                  <div class="rectangle-parent32">
                    <img
                      class="frame-child47"
                      alt="thi-cong-son-tai-da-nang"
                      src="{{ asset('images/thi-cong-son-tai-da-nang-2.jpg') }}"
                    /><img
                      class="frame-child47"
                      alt="thi-cong-son-tai-da-nang"
                      src="{{ asset('images/thi-cong-son-tai-da-nang-3.jpg') }}"
                    />
                  </div>
                  <div class="rectangle-parent32">
                    <img
                      class="frame-child46"
                      alt="thi-cong-son-tai-da-nang"
                      src="{{ asset('images/thi-cong-son-tai-da-nang-4.jpg') }}"
                    /><img
                      class="frame-child46"
                      alt="thi-cong-son-tai-da-nang"
                      src="{{ asset('images/thi-cong-son-tai-da-nang-5.jpg') }}"
                    />
                  </div>
                </div>
              </div>
              <div class="frame-parent64">
                <div class="rectangle-parent34">
                  <img
                    class="frame-child47"
                    alt="thi-cong-son-tai-da-nang"
                    src="{{ asset('images/thi-cong-son-tai-da-nang-6.jpg') }}"
                  /><img
                    class="frame-child47"
                    alt="thi-cong-son-tai-da-nang"
                    src="{{ asset('images/thi-cong-son-tai-da-nang-1.jpg') }}"
                  />
                </div>
                <div class="rectangle-parent34">
                  <img
                    class="frame-child47"
                    alt="thi-cong-son-tai-da-nang"
                    src="{{ asset('images/thi-cong-son-tai-da-nang-2.jpg') }}"
                  /><img
                    class="frame-child47"
                    alt="thi-cong-son-tai-da-nang"
                    src="{{ asset('images/thi-cong-son-tai-da-nang-3.jpg') }}"
                  />
                </div>
              </div>
            </div>
            <div>
              <a class="xem-thm-parent" href="{{ URL::route('projects') }}">
                <div class="xem-thm">Xem thêm</div>
                <img
                  class="arrow-right-icon"
                  alt=""
                  src="{{ asset('images/icons/ic-view-more.svg') }}"
                />
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="polygon-parent" id="paint-price-table">
        <div class='price-table-content'>
          <h3>Báo giá</h3>
          <p>Sứ mệnh của chúng tôi là đem đến sự hài lòng tuyệt đối cho khách hàng</p>
        </div>
        <div class="frame-wrapper8">
          <div class="frame-wrapper9">
            <div class="group-parent9">
              <div class="baogia1-2-parent">
                <div class="bng-bo-gi-thi-cng-sn-v-t-parent">
                  <div class="frame-parent60">
                    <div class="cc-loi-sn-jotun-wrapper">
                      <div class="cc-loi-sn">Bảng giá thi công thạch cao</div>
                    </div>
                  </div>
                  
                </div>
                <img
                  class="baogia1-1-icon"
                  alt=""
                  src="{{ asset('images/bao-gia-son-1.png') }}"
                />
              </div>
              
              <div class="baogia1-1-parent">
                <div class="bng-bo-gi-thi-cng-sn-v-t-parent">
                  <div class="frame-parent60">
                    <div class="cc-loi-sn-jotun-wrapper">
                      <div class="cc-loi-sn">Bảng giá thi công sơn</div>
                    </div>
                  </div>
                </div>
                <img
                  class="baogia1-2-icon"
                  alt=""
                  src="{{ asset('images/bao-gia-son-2.png') }}"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <a id='btn-to-top' class="btn-to-top" onclick="scrollToTop()">
    <img alt='icon-to-top' src="{{ asset('images/icons/ic-arrow-up.svg') }}" />
  </a>
@endsection

@section('script')
  <script src="{{ asset('js/slider.js') }}"></script>
@endsection




