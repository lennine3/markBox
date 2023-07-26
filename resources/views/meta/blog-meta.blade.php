@section('meta')
    <meta name="description" content="{{ @$blogData->seo->seo_description }}" />
    <meta name="keywords" content="{{ @$blogData->seo->seo_keywords }}">
    <meta name="author" content="{{ @$generals['SHOP']['web_name'] }}" />
    <meta name="generator" content="{{ @$generals['SHOP']['web_name'] }}" />
    <meta content="index,follow" name="googlebot">
    <meta name="copyright" content="{{ @$generals['SHOP']['coppyright'] }}">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="geo.placename" content="{{ @$generals['SHOP']['address'] }}" />
    <meta name="geo.position" content="{{ @$generals['SHOP']['position'] }}" />
    <meta name="geo.region" content="VN-Hồ Chí Minh" />
    <meta name="ICBM" content="{{ @$generals['SHOP']['position'] }}" />
    <meta name="DC.title" lang="vi" content="{{ @$blogData->seo->seo_description }}">
    <meta name="DC.creator" content="{{ @$generals['SHOP']['web_name'] }}" />
    <link rel="DCTERMS.replaces" hreflang="vi" href="{{ $current_link }}">
    <meta name="DCTERMS.abstract" content="{{ @$blogData->seo->seo_description }}">
    <link rel="alternate" href="{{ $current_link }}" hreflang="vi" />
    <link rel="alternate" href="{{ $current_link }}" hreflang="x-default" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:title" content="{{ @$blogData->seo->seo_title ? @$blogData->seo->seo_title : @$blogData->title }}">
    <meta property="og:description" content="{{ @$blogData->seo->seo_description }}">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ $current_link }}">
    @if ($blogData->image !== '')
        <meta property="og:image"
            content="{{ url('/') }}{{ @$blogData->image ? asset(config('blog.image.path') . $blogData->id . '/' . $blogData->image) : asset('admin/assets/img/no-image.jpeg') }}">
        <meta property="twitter:image"
            content="{{ url('/') }}{{ @$blogData->image ? asset(config('blog.image.path') . $blogData->id . '/' . $blogData->image) : asset('admin/assets/img/no-image.jpeg') }}">
    @endif
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="{{ '@' . @$getTwitter[3] }}">
    <meta name="twitter:title" content="{{ @$blogData->seo->seo_title ? @$blogData->seo->seo_title : @$blogData->title }}">
    <meta name="twitter:description" content="{{ @$blogData->seo->seo_description }}">
    <link rel="canonical" href="{{ $current_link }}" />
@endsection
