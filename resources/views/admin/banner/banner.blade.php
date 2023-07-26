@extends('layouts.layout')
@section('style')
    <link rel="stylesheet" href="{{ asset('admin/assets/css/home/style.css') }}">
@endsection
@section('content')
    <div class="middle-content container-xxl p-0">
        <div class="row layout-top-spacing">
            <div class="col-xl-12">
                <div class="row mb-4">
                    <div class="card card-custom">
                        <div class="card-body my-auto">
                            @if ($banner->type == 'image')
                                <form id="upload-image-form" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" value="{{ @$banner->id }}" name="banner_id" hidden>
                                    <div class="banner-contain">
                                        <img src="{{ @$banner->image ? asset('storage/banner/image/' . $banner->image) : asset('admin/assets/img/no-image.jpeg') }}"
                                            alt="" id="image-preview">
                                    </div>
                                    <div class="d-flex justify-content-center mt-5">
                                        <div class="upload-btn-wrapper">
                                            <button class="btn-upload" for="image-upload">Choose image</button>
                                            <input type="file" id="image-upload" accept="image/*" name="image">
                                        </div>
                                        <div>
                                            <button class="btn-banner-save">Lưu thay đổi</button>
                                        </div>

                                    </div>
                                </form>
                            @else
                                <form id="upload-video-form" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" value="{{ @$banner->id }}" name="banner_id" hidden>
                                    <div class="videoContain">
                                        @if (@$banner->video != null)
                                            <video id="video-player" autoplay muted loop class="videoBanner" loading="lazy">
                                                <source src="{{ asset('storage/banner/videos/' . @$banner->video) }}"
                                                    type="video/mp4">
                                            </video>
                                        @endif
                                        <video id="preview-player" autoplay muted loop class="videoBanner"
                                            style="display:none;"></video>
                                    </div>
                                    <div class="d-flex justify-content-center mt-5">
                                        <div class="upload-btn-wrapper">
                                            <button class="btn-upload">Upload video</button>
                                            <input id="preview-upload" type="file" accept="video/*" name="video">
                                        </div>
                                        <div>
                                            <button class="btn-banner-save">Lưu thay đổi</button>
                                        </div>

                                    </div>
                                </form>
                            @endif

                            <div>
                                <div>
                                    hiển thị banner theo dạng
                                </div>
                                <div>
                                    <select name="" id="changeType" class="form-control">
                                        <option value="image" {{ $banner->type == 'image' ? 'selected' : '' }}>Ảnh</option>
                                        <option value="video" {{ $banner->type == 'video' ? 'selected' : '' }}>Video
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        const videoPlayer = document.getElementById('video-player');
        const previewUpload = document.getElementById('preview-upload');
        const previewPlayer = document.getElementById('preview-player');

        previewUpload.addEventListener('change', () => {
            const file = previewUpload.files[0];
            const fileURL = URL.createObjectURL(file);

            previewPlayer.src = fileURL;
            previewPlayer.style.display = "block"; // Show the preview player
            videoPlayer.style.display = "none";
            previewPlayer.play();
            videoPlayer.pause();
        });

        previewPlayer.addEventListener('play', () => {
            videoPlayer.pause();
        });

        previewPlayer.addEventListener('pause', () => {
            videoPlayer.play();
        });
    </script>
    <script>
        const imageUpload = document.getElementById("image-upload");
        const imagePreview = document.getElementById("image-preview");

        imageUpload.addEventListener("change", () => {
            const file = imageUpload.files[0];

            if (file) {
                const reader = new FileReader();

                reader.addEventListener("load", () => {
                    imagePreview.setAttribute("src", reader.result);
                });

                reader.readAsDataURL(file);
            } else {
                imagePreview.setAttribute("src", "");
            }
        });
    </script>
    <script>
        $('#upload-video-form').on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: '/admin/banner/upload-video',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log('pass');
                    toastr.success(response.message);
                    // handle success response
                },
                error: function(xhr, status, error) {
                    // handle error response
                    console.log(error);
                    toastr.error(error);
                }
            });
        });
        $('#upload-image-form').on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: '/admin/banner/upload-image',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log('pass');
                    toastr.success(response.message);
                    // handle success response
                },
                error: function(xhr, status, error) {
                    // handle error response
                    console.log(error);
                    toastr.error(error);
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Listen for the change event on the select element with id "mySelect"
            $('#changeType').on('change', function() {
                // Get the selected value
                var selectedValue = $(this).val();
                console.log(selectedValue);
                // Make the AJAX call
                $.ajax({
                    type: 'POST', // Change to 'GET' if appropriate
                    url: '/admin/banner/change-type', // Replace with the URL of your AJAX endpoint
                    data: {
                        selectedValue: selectedValue,
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.status === true) {
                            // Reload the page if the 'status' field is true
                            location.reload();
                        } else {
                            // Handle other conditions if needed
                            console.log('Response status is false.');
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle any error that occurs during the AJAX request
                        console.error(error);
                    }
                });
            });
        });
    </script>
@endsection
