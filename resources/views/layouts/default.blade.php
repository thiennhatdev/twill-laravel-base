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
    <link rel="shortcut icon" href="{{ asset('source/img/logo.png') }}" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,200;0,300;0,400;0,600;0,700;1,300&display=swap"
    />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('/css/header.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/footer.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/global.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/common.css') }}" rel="stylesheet" />
    @yield('head')
</head>

<body>
    @include('components.includes.header')    

    @yield('content')
    

    @include('components.includes.footer')
    
</body>

</html>
<?php ob_end_flush(); ?>