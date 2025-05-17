<!doctype html>
<html @if (session('locale') == 'ar') dir="rtl" lang="ar" @else dir="ltr" lang="en"  @endif>

<head>
    <!--=== Required meta tags ===-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--=== CSS Link ===-->
 
    @if (session('locale') == 'ar')
        <link rel="stylesheet" href="{{ asset('rtl/assets/css/bootstrap.rtl.min.css') }}">
        <link rel="stylesheet" href="{{ asset('rtl/assets/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('rtl/assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('rtl/assets/css/icofont.min.css') }}">
        <link rel="stylesheet" href="{{ asset('rtl/assets/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('rtl/assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('rtl/assets/css/magnific-popup.min.css') }}">
        <link rel="stylesheet" href="{{ asset('rtl/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('rtl/assets/css/responsive.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/icofont.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    @endif
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    <!--=== Favicon ===-->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    <!--=== Title ===-->
    <title>@yield('title')</title>
</head>

<body>
    @include('layouts.header')
     

    @yield('content')


    @include('layouts.footer')
</body>

</html>
