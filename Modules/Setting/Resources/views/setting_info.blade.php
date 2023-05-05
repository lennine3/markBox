<div class="card">
    <div class="card-body">
        <div>
            <div class="d-flex justify-content-start">
                <div class="position-relative">
                    <div class="position-absolute labelIcon">
                        <div class="logo-box">
                            <label for="shopLogo"
                                class="btn btn-xs btn-icon-logo btn-circle btn-white btn-hover-text-primary btn-shadow">
                                <i data-feather="edit"></i>
                            </label>
                            <input type="file" id="shopLogo" hidden name="image">
                        </div>
                    </div>
                    <div class="logoImgContain">
                        {{-- <img src="{{ asset('admin/assets/img/blank.png') }}" alt=""> --}}
                        <img src="{{ $logo }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <p>Favicon</p>
            <div class="d-flex justify-content-start">
                <div class="position-relative">
                    <div class="position-absolute labelIcon">
                        <div class="logo-box">
                            <label for="shopFavicon"
                                class="btn btn-xs btn-icon-logo btn-circle btn-white btn-hover-text-primary btn-shadow">
                                <i data-feather="edit"></i>
                            </label>
                            <input type="file" id="shopFavicon" hidden name="favicon">
                        </div>
                    </div>
                    <div class="favIconContain">
                        <img src="{{ show_favicon('favicon.ico') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
