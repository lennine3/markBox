<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.web.head')
@yield('style')

<body id="bodyContent">
    {{-- header --}}
    @include('layouts.web.header-pc')
    @include('layouts.web.header-mobile')
    {{-- content --}}
    @yield('content')

    {{-- modal --}}
    @include('layouts.web.success-modal')
    @include('layouts.web.errors-modal')
    {{-- script --}}
    @include('layouts.web.global-script')
    @yield('script')

    {{-- footer --}}
    @include('layouts.web.footer')
</body>


</html>
