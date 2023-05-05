<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.web.head')
@yield('style')

<body>
    @include('layouts.web.header-pc')
    @include('layouts.web.header-mobile')
    @yield('content')
    @include('layouts.web.global-script')
    @yield('script')
    @include('layouts.web.footer')
</body>


</html>
