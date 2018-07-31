<!DOCTYPE html>
<html>
<head>

    @section('head')
        @include('includes.head')
    @show

    <title>CEUF | @yield('title')</title>
    
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
