@extends('layouts.layout')
@section('style')
    <link rel="stylesheet" href="{{ asset('admin/assets/css/home/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/src/splide/splide.min.css') }}">

    {{-- dark --}}
    <link rel="stylesheet" href="{{ asset('admin/plugins/css/dark/splide/custom-splide.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/css/light/splide/custom-splide.min.css') }}">
@endsection
@section('content')
    <div class="middle-content container-xxl p-0">
        <div class="row layout-top-spacing">
            <div class="col-xl-12">
                <div class="text-center">
                    <h3>Bảng báo giá</h3>
                </div>
                <div class="row mb-4">
                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-header">
                                Pricing list form
                            </div>
                            <div class="card-body">
                                @include('admin.home.pricingForm')
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <section class="splide" id="splide" aria-label="Splide Basic HTML Example">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    @foreach ($pricingTable as $item)
                                        <li class="splide__slide">@include('admin.home.prcing-list')</li>
                                    @endforeach
                                    <div class="splide__pagination"></div>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="text-center">
                    <h3>Câu hỏi thường gặp</h3>
                </div>
                <div class="mb-3">
                    @include('admin.home.faqForm')
                </div>
                <div class="mb-3">
                    <div class="card">
                        <div class="card-header">
                            Danh sách câu hỏi
                        </div>
                        <div class="card-body">
                            @include('admin.home.faqList')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('admin/plugins/src/splide/splide.min.js') }}"></script>
    <script>
        new Splide('.splide', {
            perPage: 3,
            pagination: true,
            arrows: false,
        }).mount();
    </script>
    <script>
        // pricing
        $(document).ready(function() {

            var descriptionCounter = parseInt($('#func_count').val()) + 1;

            $("#add-description").click(function() {
                var newField = `
                <div class="col-lg-12 mt-3">
                <div class="form-group">
                    <label for="description_${descriptionCounter}" class="form-label">quyền lợi</label>
                    <input type="text" class="form-control" name="pricing_func[]" id="description_${descriptionCounter}">
                </div>
            </div>
        `;

                $("#description-fields").append(newField);
                descriptionCounter++;
            });
        });

        $('#pricigTableSubmit').on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: '/admin/process-pricing-table',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    toastr.success(response.message);
                    $('#pricigTableSubmit')[0].reset();
                    // handle success response
                    // Restart the page
                    setTimeout(function() {
                        window.location.href = response.redirect;
                    }, 2000);
                },
                error: function(xhr, status, error) {
                    // handle error response
                    toastr.error(error);
                }
            });
        });

        // faq
        function benefitProcess(id) {
            var form = $('form#faqQuestionForm' + id);
            var formData = form.serialize(); // serialize form data
            $.ajax({
                type: 'POST', // get HTTP method from form attribute
                url: '/admin/process-faq', // get form action URL
                data: formData,
                success: function(response) {
                    // handle server response
                    toastr.success(response.message);
                    $('#faqQuestionBox').html(response.html)
                },
                error: function(xhr, status, error) {
                    toastr.error(error);
                    // handle errors
                }
            });
        }

        $('#faqForm_submit').on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: '/admin/process-faq',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    $('#faqQuestionBox').html(response.html);
                    toastr.success(response.message);
                    $('#faqForm_submit')[0].reset();
                    // handle success response
                },
                error: function(xhr, status, error) {
                    // handle error response
                    toastr.error(error);
                }
            });
        });
    </script>
@endsection
