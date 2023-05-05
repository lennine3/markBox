<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Shoex</title>
    <link rel="icon" type="image/x-icon" href="{{ show_favicon('favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('admin/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/slick/slick-theme.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('web/css/slick/slick.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('web/assets/css/fontawsome/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/config.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/footer.css') }}">
</head>
