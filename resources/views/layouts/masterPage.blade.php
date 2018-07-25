<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Đọc Truyện Online|Truyện Hay Nhất') }}</title>

    <!-- Favicon-->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Custom Css Js-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('css/common.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('css/themes/theme-teal.css') }}" rel="stylesheet" />

</head>

<body class="theme-teal">
    <!-- Page Loader -->
    @include('page.custumPage.pageLoader')
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    @include('page.custumPage.overlayForSidebars')
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    @include('page.custumPage.searchBar')
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    @include('page.custumPage.topBar')
    <!-- #Top Bar -->
    <!-- Alignments -->
    @include('page.custumPage.breadcrumb')
    <!-- #END  Alignments -->
    <section>
    <!-- Left Sidebar -->
    @include('page.custumPage.leftSidebar')
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    @include('page.custumPage.rightSidebar')
    <!-- #END# Right Sidebar -->
    </section>
    <!-- #END# Alignments -->
    <section class="content">
        <!-- Content -->
        @yield('content')
        <!-- #END# Content -->
    </section>

    <!-- Jquery Core Js -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    
    <!-- Bootstrap Core Js -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('plugins/node-waves/waves.js') }}"></script>

    <!-- Custom Js -->
    @yield('customJs')

    <!-- Demo Js -->
    <script src="{{ asset('js/page.js') }}"></script>

</body>

</html>
