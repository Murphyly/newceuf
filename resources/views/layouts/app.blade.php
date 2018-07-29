<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    @section('head')
        @include('includes.head')
    @show

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CEUF | @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @section('navbar')
            @include('includes.navbar')
        @show

        @yield('content')
    </div>

    <!-- Scripts -->

    @section('script')
        @include('includes.script')
    @show

</body>
</html>
