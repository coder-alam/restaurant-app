<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title inertia>{{ config('app.name', 'Laravel') }}</title>
    <!-- Bootstrap CSS file -->
    <link rel="stylesheet" href="{{ asset('backend_assets/bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend_assets/assets/custom.css') }}">
    {{-- <link rel="stylesheet" href="{{asset('backend_assets/assets/css/menu.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('backend_assets/assets/css/rangeslider.css')}}">
    <link rel="stylesheet" href="{{asset('backend_assets/assets/css/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('backend_assets/assets/fonts/remixicon.eot')}}">
    <link rel="stylesheet" href="{{asset('backend_assets/assets/fonts/remixicon.svg')}}">
    <link rel="stylesheet" href="{{asset('backend_assets/assets/fonts/remixicon.ttf')}}">
    <link rel="stylesheet" href="{{asset('backend_assets/assets/fonts/remixicon.woff')}}">
    <link rel="stylesheet" href="{{asset('backend_assets/assets/fonts/remixicon.woff2')}}"> --}}

    <link rel="stylesheet" href="{{ asset('backend_assets/assets/images/404.png') }}">

    <!-- CSS DataTables  & Plugins -->
    <link rel="stylesheet" href="{{ asset('backend_assets') }}/plugins/DataTables/datatables.min.css">

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body>

    @inertia
    <!-- jQuery -->
    <script src="{{ asset('backend_assets') }}/plugins/jquery/jquery.min.js"></script>

    <script src="{{ asset('backend_assets/bootstrap-5.0.2-dist/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend_assets/bootstrap-5.0.2-dist/js/bootstrap.min.js') }}"></script>

    <!-- DataTables  & Plugins -->
    <script src="{{ asset('backend_assets') }}/plugins/DataTables/datatables.min.js"></script>

</body>

</html>
