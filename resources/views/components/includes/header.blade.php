<div class="header5">
    <div class="header-inner5">
      <div class="top-menu5">
        <div class="frame-parent41">
          <div class="clock-parent3">
            <img class="clock-icon5" alt="icon-clock" src="{{ asset('images/icons/ic-clock.svg') }}" />
            <div class="h00-17h005">8h:00 - 17h00</div>
          </div>
          <div class="calendar-parent3">
            <img class="clock-icon5" alt="icon-calendar" src="{{ asset('images/icons/ic-calendar.svg') }}" />
            <div class="h00-17h005">Thứ 2 - Chủ nhật</div>
          </div>
        </div>
        <div class="menu-item-parent3">
          <div class="menu-item15">
            <div class="xem-thm right-menu-item">
              <a href="#">Tin tức</a>
            </div>
          </div>
          <div class="menu-item17">
            <div class="xem-thm right-menu-item">
              <a href="#">Giới thiệu</a>
            </div>
          </div>
        </div>
      </div>
      <div class="menu5">
        <b class="logo10 logo-header">LOGO</b>
        <div class="menu-inner4">
          <div class="frame-parent42">
            <div class="bo-gi-thi-cng-sn-wrapper3">
              <div class="h00-17h005">Báo giá thi công sơn</div>
            </div>
            <div class="frame-parent43">
              <div class="map-pin-parent3">
                <img
                  class="map-pin-icon5"
                  alt="icon-map"
                  src="{{ asset('images/icons/ic-map.svg') }}"
                />
                <div class="h00-17h005">
                  <span>Địa chỉ</span>
                  <span class="th-l-5">: {{ $about->address }}</span>
                </div>
              </div>
              <div class="map-pin-parent3">
                <img
                  class="phone-call-icon10"
                  alt="icon-phone"
                  src="{{ asset('images/icons/ic-phone-red.svg') }}"
                />
                <div class="h00-17h005">
                  <span>Hotline</span
                  ><span class="th-l-5">: {{ $about->phone_number }}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>