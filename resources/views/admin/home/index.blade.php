@extends('layouts.layout')
@section('style')
    <link rel="stylesheet" href="{{ asset('admin/assets/css/home/style.css') }}">
@endsection
@section('content')
    <div class="middle-content container-xxl p-0">
        <div class="row layout-top-spacing">
            <div class="col-xl-12">
                <div class="mb-3">
                    <div class="card">
                        <div class="card-header">
                            Pricing list form
                        </div>
                        <div class="card-body">
                            <div>
                                <form action="#" method="POST">
                                    @csrf
                                    <div>
                                        <label for="title">Title</label>
                                        <input type="text" name="title" id="title">
                                    </div>
                                    <div id="description-fields">
                                        {{-- <div>
                                            <label for="description_1">Description 1</label>
                                            <input type="text" name="description_1" id="description_1">
                                        </div> --}}
                                    </div>
                                    <button type="button" id="add-description">Add Description</button>

                                    <!-- other form fields -->
                                    <button type="submit">Create Pricing Plan</button>
                                </form>
                            </div>
                        </div>
                    </div>
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
    <script>
        $(document).ready(function() {
            var descriptionCounter = 1;

            $("#add-description").click(function() {
                var newField = `
        <div>
            <label for="description_${descriptionCounter}">Description ${descriptionCounter}</label>
            <input type="text" name="description_${descriptionCounter}" id="description_${descriptionCounter}">
        </div>
        `;

                $("#description-fields").append(newField);

                descriptionCounter++;
            });
        });

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
