<div class="footer5">
    <img class="footer-top-icon5" alt="" src="{{ asset('images/footer-top-2.svg') }}" />
    <div class="footer-bottom5">
      <div class="frame-parent66">
        <div class="frame-parent67">
          <div class="frame-parent68">
            <div class="logo-parent3">
              <img class="logo" alt="son-nha-da-nang" src="{{ asset('images/logo-sonnhadanang.webp') }}" />
              <b class="cty-tnhh-icol5">{{ $about->title ?? "" }}</b>
            </div>
            <div class="frame-parent69">
              <div class="mail-parent3">
                <img
                  class="map-pin-icon5"
                  alt="icon-mail"
                  src="{{ asset('images/icons/ic-mail.svg') }}"
                />
                <div class="h00-17h005 mail-ft">{{ $about->email ?? "" }}</div>
              </div>
              <div class="phone-call-parent9">
                <img
                  class="map-pin-icon5"
                  alt="icon-phone"
                  src="{{ asset('images/icons/ic-phone-white.svg') }}"
                />
                <div class="h00-17h005">{{ $about->phone_number ?? "" }}</div>
              </div>
            </div>
          </div>
          <div class="h-tr-parent3">
            <b class="h-tr5">THÔNG TIN</b>
            <div class="khuyn-mi-parent3">
              <div class="h00-17h005"></div>
              <a href="{{ URL::route('projects') }}">Dự án</a>
            </div>
          </div>
          <div class="fanpage-parent3">
            <b class="fanpage5">FANPAGE</b>
            <div class="fb-page" data-href="https://www.facebook.com/hoctusach" data-tabs="timeline" data-width="250" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/hoctusach" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/hoctusach">Học Từ Sách</a></blockquote></div>
  
          </div>
        </div>
        <div class="website-c-thit-k-bi-cty-wrapper3">
          <i class="h00-17h005"
            ><span>Website được thiết kế bởi cty </span
            ><span class="bqsoft5"><a href="https://bqsoft.vn" target="_blank">Bqsoft</a></span></i
          >
        </div>
      </div>
    </div>
  </div>