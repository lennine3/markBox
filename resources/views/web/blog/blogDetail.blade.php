@extends('layouts.web.app')
@section('title')
    {{ @$blogData->title }}
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('web/assets/css/web/blogDetail.css') }}">
@endsection

@section('meta')
@endsection

@section('content')
    <section>
        <div class="blogDetailHeadBanner">
            <img class="imgBannerBlogDetail" data-src="/public/storage/editor/blog/toyota-fortuner.webp"
                alt="{{ @$blogData->title }}"
                src="{{ @$blogData->image ? asset(config('blog.image.path') . $blogData->id . '/' . $blogData->image) : asset('admin/assets/img/no-image.jpeg') }}">
        </div>
    </section>
    <section>
        <div class="blog-detail-wrapper">
            <h1 class="titleText text-center px-3 blogDetailTitle">{{ $blogData->title }}</h1>
            <article class="mx-auto blog-detail-article">
                <div class="infoBox">
                    <div>Biên tập viên: {{ $blogData->user->name }}</div>
                    <div>Ngày đăng: {{ Carbon\Carbon::parse($blogData->created_at)->format('d-m-Y') }}</div>
                </div>
                <div>
                    <div class="short-description">{!! $blogData->description !!}</div>
                </div>

                <div id="post-content">

                    <div class="bg-light py-3 px-3 tableOfContent" id="toc-content" data-bs-toggle="collapse"
                        data-bs-target="#tocAccordion">
                        <div class="mb-0 d-flex justify-content-between align-items-center">
                            <div>
                                <b>Nội dung tiêu điểm:</b>
                            </div>
                            <button class="toc-accordion-btn">
                                <span id="tocText">Thu gọn</span><i class="fa fa-angle-up"></i>
                            </button>

                        </div>
                        <div class="collapse show" id="tocAccordion">
                            <ul data-toc="#post-content" data-toc-headings="h1,h2,h3" id="toc-blog" class="ml-3">
                            </ul>
                        </div>
                    </div>
                    <div class="blogDetailContent">
                        {!! $blogData->content !!}
                    </div>
                </div>
            </article>
        </div>
    </section>
@endsection
@section('script')
<script src="{{ asset('web/assets/js/toc/jquery.toc.js') }}"></script>
<script type="text/javascript">
    $("#toc-blog").toc();
</script>
@endsection
