<?php
function removeWhitespace($buffer)
{
    return preg_replace('/\s+/', ' ', $buffer);
}

?>

<?php ob_start("removeWhitespace");  ?>
   
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('/images/favicon-48x48.png') }}">
    <!-- <link rel="mask-icon" href="{{ asset('/images/ico/safari-pinned-tab.svg') }}" color="#5bbad5"> -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,200;0,300;0,400;0,600;0,700;1,300&display=swap"
    />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('/css/header.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/footer.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/global.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/common.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet" />
    @yield('head')
</head>

<body>
    @include('components.includes.header')    

    @yield('content')
    

    @include('components.includes.footer')
    

    <!-- phone call button  -->
    <a href="tel:0905439895">
        <button type="submit" class='btn-phone-call'>
            <img alt='phone-call' src="{{ asset('images/icons/ic-phone-white.svg') }}" />
        </button>
    </a>

    <!-- chat zalo -->
    <div class='zalome'><a href='https://zalo.me/0905439895' target='_blank'>
        <img alt='icon zalo' src="{{ asset('/images/img-zalo.png') }}"/>
    </a></div>

    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "421201775095904");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v17.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v16.0" nonce="ddMh2paa"></script> -->

    <!-- Google analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1PCTP4E9WC"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-1PCTP4E9WC');
    </script>
    @yield('script')
</body>

</html>
<?php ob_end_flush(); ?>