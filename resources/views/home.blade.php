@extends('layouts.web.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('web/assets/css/home.css') }}">
@endsection

@section('content')
    <section>
        <div class="bannerContain">
            <img src="{{ asset('web/assets/image/home/banner.png') }}" alt="">
        </div>
    </section>
    <section class="aboutUsSection" id="aboutUsSection">
        <div class="aboutUsContain container">
            <h2 class="titleText">Xin chào bạn</h2>
            <div class="aboutUsBox">
                <div class="descText">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                    into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                    software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>
        </div>
    </section>
    <section class="container homeServiceSection" id="WebsiteDesignService">
        <h2 class="titleText homeServiceHeadTitle"> Thiết kế website chuẩn SEO, <br>Tối ưu chi phí đầu tư của doanh nghiệp
        </h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 homeServiceDesc">
                <div class="homeServiceBox">
                    <h3 class="homeServiceBoxTitle"> Chi phí thấp nhất, lợi ích tối đa </h3>
                    <div class="homeServiceBoxDesc"> Thiết kế website chuẩn SEO trọn gói giúp doanh nghiệp dễ dàng chọn
                        giải pháp xây dựng website với chi phí tối ưu nhưng vẫn đảm bảo tiêu chuẩn cao </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 homeServiceDesc">
                <div class="homeServiceBox">
                    <h3 class="homeServiceBoxTitle"> Giao diện chuẩn SEO </h3>
                    <div class="homeServiceBoxDesc"> Giao diện được thiết kế tối ưu theo hành trình của người dùng, đảm
                        bảo mang lại trải nghiệm thực tế, thân thiện, dễ thao tác cho khách hàng của bạn </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 homeServiceDesc">
                <div class="homeServiceBox">
                    <h3 class="homeServiceBoxTitle"> Tối ưu technical SEO </h3>
                    <div class="homeServiceBoxDesc"> Tối ưu các yếu tố như: tốc độ tải trang, URL, bảo mật, sitemaps,
                        robot.txt,... giúp website của bạn thân thiện hơn với các công cụ tìm kiếm như Google </div>
                </div>
            </div>
        </div>
    </section>
    <section class="no-horizontal-scroll">
        <div class="row">
            <div class="col-lg-4 seoServiceLeftBg px-0 d-flex col-sm-12">
                <div class="d-flex align-items-center">
                    <div class="seoServiceLeftBox">
                        <h2 class="seoServiceLeftTitle"> Chuyển đổi traffic thành doanh thu </h2>
                        <div class="seoServiceLeftDesc"> Một website thấu hiểu người dùng và đáp ứng được nhu cầu của người
                            dùng, sẽ trở thành một kênh bán hàng trực tuyến tạo ra hiệu quả doanh số bền vững. </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 px-0 col-sm-12">
                <div class="d-flex justify-content-center seoServiceRightContain">
                    {{-- <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="bigFrameContain">
                                <div class="bigFrame">
                                    <div class="bigFrameBox">
                                        <img src="{{ asset('web/assets/image/home/seoImage.png') }}"
                                            alt="First big frame image" loading="lazy">
                                    </div>
                                    <div class="d-flex justify-content-between bigFrameBtnBox">
                                        <button type="button" class="btn btnAddCard">Thêm vào giỏ hàng</button>
                                        <button type="button" class="btn btnBuyNow">Mua ngay</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="row homeMarketingRow">
                                <div class="col-lg-12 px-0">
                                    <div class="secondFrame"> <img src="{{ asset('web/assets/image/home/seoImage_2.png') }}"
                                            alt="Second frame image" loading="lazy"> </div>
                                </div>
                                <div class="col-lg-12 px-0">
                                    <div class="thirdFrame">
                                        <div class="d-flex">
                                            <div class="thirdFrameBox">
                                                <img src="{{ asset('web/assets/image/home/seoImage.png') }}"
                                                    alt="Third frame image" loading="lazy">
                                            </div>
                                            <div class="thirdFrameRightBox">
                                                <div class="thirdFrameTitle">
                                                    Bikini 1 mảnh
                                                </div>
                                                <div>
                                                    550,000 đ
                                                </div>
                                                <div class="thirdFrameBtnBox">
                                                    <button type="button" class="btn btnAddCardThirdFrame">Thêm vào
                                                        giỏ</button>
                                                    <button type="button" class="btn btnBuyNowThirdFrame">Mua ngay</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-lg-6 col-6">
                            <div class="d-flex justify-content-end">
                                <div class="bigFrame">
                                    <img src="{{ asset('web/assets/image/home/seoService/firstFrame.webp') }}"
                                        alt="First big frame image" loading="lazy">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-6">
                            <div class="row serviceCategoryRow">
                                <div class="col-lg-12 px-0">
                                    <div class="secondFrame">
                                        <img src="{{ asset('web/assets/image/home/seoService/secondFrame.webp') }}"
                                            alt="Second frame image" loading="lazy">
                                    </div>
                                </div>
                                <div class="col-lg-12 px-0">
                                    <div class="thirdFrame">
                                        <img src="{{ asset('web/assets/image/home/seoService/thirdFrame.webp') }}"
                                            alt="Third frame image" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="homeMarketingSection">
        <div class="homeMarketingContainer container">
            <div class=" text-center">
                <div class="d-flex justify-content-center">
                    <h2 class="titleText homeMarketingTitle"> Dịch vụ marketing
                        đáp ứng đa dạng nhu cầu của bạn </h2>
                </div>
                <div class="d-flex justify-content-center">
                    <span class="descText homeMarketingDesc"> Lựa chọn thể loại website mà
                        bạn mong muốn, chúng tôi sẽ giúp bạn xây dựng một kênh bán hàng và kênh truyền thông doanh nghiệp
                        đạt hiệu quả cao nhất.
                    </span>
                </div>
                <div class="d-flex justify-content-center">
                    <hr class="homeMarketingSeparateLine">
                </div>
            </div>
            @php
                $homeMarketingData = [
                    'name' => 'Dịch vụ marketing demo',
                    'desc' => 'Đây là mô tả ngắn của dịch vụ marketing demo',
                ];
            @endphp
            <div class="row">
                @for ($i = 0; $i < 6; $i++)
                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex justify-content-center homeMarketingBoxContain">
                        <div class="homeMarketingBox">
                            <div class="homeMarketingBoxImg"> <img src="{{ asset('web/assets/image/home/seoImage.png') }}"
                                    alt="Website bán hàng (E-commerce)" loading="lazy"> </div>
                            <div>
                                <h3 class="homeMarketingBoxTitle"> {{ $homeMarketingData['name'] }} </h3>
                                <div class="homeMarketingBoxDesc"> {{ $homeMarketingData['desc'] }} </div>
                                <div class="homeMarketingBoxLink">
                                    <a target="_blank" href="javascript:0" class="homeMarketLink">
                                        Bấm vào để xem chi tiết <i class="far fa-chevron-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
    <section id="pricingTableSetion">
        <div class="quotationContain">
            <div class=" text-center">
                <h2 class="quotationTitle titleText"> Bảng giá dịch vụ marketing </h2>
                <div class="d-flex justify-content-center"> <span class="quotationDesc"> Bảng giá được thiết kế dựa trên
                        nhu cầu tùy chọn của từng khách hàng
                        Áp dụng đến 31/12/2023 </span> </div>
                <div class="d-flex justify-content-center">
                    <hr class="quotationSeparateLine">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="pricingContain">
                <div class="pricingContainer">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 pricingMobileContain">
                            <div class="pricingTable">
                                <div class="pricingHeadingContainer">
                                    <div class="pricingTableHeading">
                                        <h3 class="pricingTableTitle"> Marketing khởi nghiệp </h3>
                                    </div>
                                    <div class="pricingTablePrice"> <span class="pricingTablePriceValueTitle"> Gói:
                                        </span> <span class="pricingTablePriceValue"> 8,000,000 đ </span> </div>
                                    <div class="text-center" style="font-size:14px"> (Không phát sinh chi phí) </div>
                                </div>
                                <div class="pricingSaleContain">
                                    <div class="pricingSaleText"> Tư vấn chiến lược marketing miễn phí 2h </div>
                                </div>
                                <div class="pricingTableFeatures" id="pricingTableFeatures_0">
                                    <div>
                                        <ul class="pricingList">
                                            <li>Social media: Facebook, instagram</li>
                                            <li>Tặng: Google maps, Linkedin</li>
                                        </ul>
                                        <hr class="pricingHr">
                                        <div class="pricingTitle"> Mô tả gói: </div>
                                        <ul class="pricingList">
                                            <li>Block giới thiệu sản phẩm bán chạy/ hàng mới về</li>
                                            <li>Slider banner</li>
                                            <li>Hộp tìm kiếm thông tin sản phẩm</li>
                                            <li>Gallery hình ảnh, Video</li>
                                            <li>ChatBox</li>
                                            <li>Nút gọi( bản mobile)</li>
                                            <li>Zalo</li>
                                            <li>Đăng ký nhận tin</li>
                                            <li>kết nối mạng xã hội</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 pricingMobileContain">
                            <div class="pricingTable">
                                <div class="pricingHeadingContainer">
                                    <div class="pricingTableHeading">
                                        <h3 class="pricingTableTitle"> Sáng tạo nội dung </h3>
                                    </div>
                                    <div class="pricingTablePrice"> <span class="pricingTablePriceValueTitle"> Gói:
                                        </span> <span class="pricingTablePriceValue"> 4,800,000 đ </span> </div>
                                    <div class="text-center" style="font-size:14px"> (Không phát sinh chi phí) </div>
                                </div>
                                <div class="pricingSaleContain">
                                    <div class="pricingSaleText"> Miễn phí demo 2 nội dung </div>
                                </div>
                                <div class="pricingTableFeatures pricingExpand" id="pricingTableFeatures_1">
                                    <div>
                                        <ul class="pricingList">
                                            <li>Facebook</li>
                                            <li>Instagram: Hỗ trợ cập nhật</li>
                                        </ul>
                                        <hr class="pricingHr">
                                        <div class="pricingTitle"> Chức năng Homepage </div>
                                        <ul class="pricingList">
                                            <li>Block giới thiệu sản phẩm bán chạy/ hàng mới về</li>
                                            <li>Slider banner</li>
                                            <li>Hộp tìm kiếm thông tin sản phẩm</li>
                                            <li>Gallery hình ảnh, Video</li>
                                            <li>ChatBox</li>
                                            <li>Nút gọi( bản mobile)</li>
                                            <li>Zalo</li>
                                            <li>Đăng ký nhận tin</li>
                                            <li>kết nối mạng xã hội</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 pricingMobileContain">
                            <div class="pricingTable">
                                <div class="pricingHeadingContainer">
                                    <div class="pricingTableHeading">
                                        <h3 class="pricingTableTitle"> Hồ sơ năng lực </h3>
                                    </div>
                                    <div class="pricingTablePrice"> <span class="pricingTablePriceValueTitle"> Trọn gói:
                                        </span> <span class="pricingTablePriceValue"> 4,800,000 đ </span> </div>
                                    <div class="text-center" style="font-size:14px"> (Không phát sinh chi phí) </div>
                                </div>
                                <div class="pricingSaleContain">
                                    <div class="pricingSaleText"> Trang tiếp theo: 250k/ Trang </div>
                                </div>
                                <div class="pricingTableFeatures" id="pricingTableFeatures_2">
                                    <div>
                                        <ul class="pricingList">
                                            <li>Giao diện chuyên nghiệp có sẵn</li>
                                            <li>Hosting: 12 tháng đầu tiên</li>
                                        </ul>
                                        <hr class="pricingHr">
                                        <div class="pricingTitle"> Chức năng Homepage </div>
                                        <ul class="pricingList">
                                            <li>Block giới thiệu sản phẩm bán chạy/ hàng mới về</li>
                                            <li>Slider banner</li>
                                            <li>Hộp tìm kiếm thông tin sản phẩm</li>
                                            <li>Gallery hình ảnh, Video</li>
                                            <li>ChatBox</li>
                                            <li>Nút gọi( bản mobile)</li>
                                            <li>Zalo</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 pricingMobileContain hidden" id="pricingHid_1">
                            <div class="pricingTable">
                                <div class="pricingHeadingContainer">
                                    <div class="pricingTableHeading">
                                        <h3 class="pricingTableTitle"> Marketing khởi nghiệp </h3>
                                    </div>
                                    <div class="pricingTablePrice"> <span class="pricingTablePriceValueTitle"> Gói:
                                        </span> <span class="pricingTablePriceValue"> 8,000,000 đ </span> </div>
                                    <div class="text-center" style="font-size:14px"> (Không phát sinh chi phí) </div>
                                </div>
                                <div class="pricingSaleContain">
                                    <div class="pricingSaleText"> Tư vấn chiến lược marketing miễn phí 2h </div>
                                </div>
                                <div class="pricingTableFeatures" id="pricingTableFeatures_0">
                                    <div>
                                        <ul class="pricingList">
                                            <li>Social media: Facebook, instagram</li>
                                            <li>Tặng: Google maps, Linkedin</li>
                                        </ul>
                                        <hr class="pricingHr">
                                        <div class="pricingTitle"> Mô tả gói: </div>
                                        <ul class="pricingList">
                                            <li>Block giới thiệu sản phẩm bán chạy/ hàng mới về</li>
                                            <li>Slider banner</li>
                                            <li>Hộp tìm kiếm thông tin sản phẩm</li>
                                            <li>Gallery hình ảnh, Video</li>
                                            <li>ChatBox</li>
                                            <li>Nút gọi( bản mobile)</li>
                                            <li>Zalo</li>
                                            <li>Đăng ký nhận tin</li>
                                            <li>kết nối mạng xã hội</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 pricingMobileContain hidden" id="pricingHid_2">
                            <div class="pricingTable">
                                <div class="pricingHeadingContainer">
                                    <div class="pricingTableHeading">
                                        <h3 class="pricingTableTitle"> Sáng tạo nội dung </h3>
                                    </div>
                                    <div class="pricingTablePrice"> <span class="pricingTablePriceValueTitle"> Gói:
                                        </span> <span class="pricingTablePriceValue"> 4,800,000 đ </span> </div>
                                    <div class="text-center" style="font-size:14px"> (Không phát sinh chi phí) </div>
                                </div>
                                <div class="pricingSaleContain">
                                    <div class="pricingSaleText"> Miễn phí demo 2 nội dung </div>
                                </div>
                                <div class="pricingTableFeatures pricingExpand" id="pricingTableFeatures_1">
                                    <div>
                                        <ul class="pricingList">
                                            <li>Facebook</li>
                                            <li>Instagram: Hỗ trợ cập nhật</li>
                                        </ul>
                                        <hr class="pricingHr">
                                        <div class="pricingTitle"> Chức năng Homepage </div>
                                        <ul class="pricingList">
                                            <li>Block giới thiệu sản phẩm bán chạy/ hàng mới về</li>
                                            <li>Slider banner</li>
                                            <li>Hộp tìm kiếm thông tin sản phẩm</li>
                                            <li>Gallery hình ảnh, Video</li>
                                            <li>ChatBox</li>
                                            <li>Nút gọi( bản mobile)</li>
                                            <li>Zalo</li>
                                            <li>Đăng ký nhận tin</li>
                                            <li>kết nối mạng xã hội</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 pricingMobileContain hidden" id="pricingHid_3">
                            <div class="pricingTable">
                                <div class="pricingHeadingContainer">
                                    <div class="pricingTableHeading">
                                        <h3 class="pricingTableTitle"> Hồ sơ năng lực </h3>
                                    </div>
                                    <div class="pricingTablePrice"> <span class="pricingTablePriceValueTitle"> Trọn gói:
                                        </span> <span class="pricingTablePriceValue"> 4,800,000 đ </span> </div>
                                    <div class="text-center" style="font-size:14px"> (Không phát sinh chi phí) </div>
                                </div>
                                <div class="pricingSaleContain">
                                    <div class="pricingSaleText"> Trang tiếp theo: 250k/ Trang </div>
                                </div>
                                <div class="pricingTableFeatures" id="pricingTableFeatures_2">
                                    <div>
                                        <ul class="pricingList">
                                            <li>Giao diện chuyên nghiệp có sẵn</li>
                                            <li>Hosting: 12 tháng đầu tiên</li>
                                        </ul>
                                        <hr class="pricingHr">
                                        <div class="pricingTitle"> Chức năng Homepage </div>
                                        <ul class="pricingList">
                                            <li>Block giới thiệu sản phẩm bán chạy/ hàng mới về</li>
                                            <li>Slider banner</li>
                                            <li>Hộp tìm kiếm thông tin sản phẩm</li>
                                            <li>Gallery hình ảnh, Video</li>
                                            <li>ChatBox</li>
                                            <li>Nút gọi( bản mobile)</li>
                                            <li>Zalo</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btnPricing" id="show-more">
                    Xem thêm bảng giá
                </button>
            </div>
        </div>
    </section>
    <section class="container blogContainer blogContain" id="blogMarketing">
        <h2 class="titleText blogHeadTitle">Blog marketing </h2>
        <div class="descText"> Chia sẻ kinh nghiệm chọn mua xe ô tô và hướng dẫn cách chăm sóc xế yêu của bạn </div>

        @php
            $blogData = [
                'name' => 'Lorem Ipsum is simply dummy text of the printing and typesetting',
                'desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry text of the printing and typesetting industry',
            ];
        @endphp
        <div class="blogContainBox">
            <div class="blog-slider">
                @for ($y = 0; $y < 6; $y++)
                    <div class=" blogContainMobile">
                        <div class="blogBox">
                            <img src="{{ asset('web/assets/image/home/blog.png') }}" alt="car 1 image" loading="lazy">
                        </div>
                        <div class="blogTitle"> {{ $blogData['name'] }} </div>
                        <div class="blogSubTitle">{{ $blogData['desc'] }}</div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
    <section id="formContactSection">
        <div class="homeFormContain d-flex homeBlock">
            <div class="homeBlock d-flex align-items-center justify-content-center">
                <div class="homeFormBox">
                    <h2 class="homeFormTitle titleText"> Điền thông tin tư vấn </h2>
                    <div class="homeBlock formContainInputMobile d-flex justify-content-center">
                        <form id="formContact" name="formContact" method="POST" class="form validate">
                            @csrf
                            <div class="homeFormInputContain position-relative">
                                <input type="text" placeholder="Tên của bạn" name="full_name"
                                    class="homeFormInput form-control">
                                <span class="homeFormInputIcon">(*)</span>
                            </div>
                            <div class="homeFormInputContain position-relative">
                                <input type="text" placeholder="Số điện thoại liên hệ"
                                    class="homeFormInput form-control" name="phone" id="phone-Input"
                                    autocomplete="off">
                                <span class="homeFormInputIcon" id="phone-required">(*)</span>
                                <span class="invalid-feedback invalid-home" id="phone-error">lỗi</span>
                            </div>
                            <div class="position-relative">
                                <input type="email" placeholder="Email nhận thông tin"
                                    class="homeFormInput form-control" name="email">
                                <span class="homeFormInputIcon">(*)</span>
                            </div>
                            <div class="homeFormNoteContain">
                                <div class="homeFormNote"> Vui lòng chọn dịch vụ mà bạn cần tư vấn </div>
                                <div class="select-wrapper">
                                    <select name="service" class="iconSelect homeFormSelect">
                                        <option value="Kế hoạch marketing thương hiệu tổng thể">
                                            Tư vấn chiến lược marketing thương hiệu
                                        </option>
                                        <option value="Kế hoạch marketing thương hiệu tổng thể">
                                            Dịch vụ sáng tạo nội dung mạng xã hội
                                        </option>
                                        <option value="Kế hoạch marketing thương hiệu tổng thể">
                                            Dịch vụ thiết kế nhận diện thương hiệu
                                        </option>
                                        <option value="Kế hoạch marketing thương hiệu tổng thể">
                                            Dịch vụ thiết kế web
                                        </option>
                                        <option value="Kế hoạch marketing thương hiệu tổng thể">
                                            Dịch vụ SEO content
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="homeFormNote">
                                Chúng tôi sẽ liên hệ với quý khách trong vòng 24h sau khi nhận yêu cầu.
                            </div>
                            <div class="homeFormButtonContain">
                                <button class="btn homeFormButton" type="submit"> Gửi thông tin </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faqBackground" id="FAQ">
        <div class="container faqContainer">
            <div class="homeFormBox">
                <h2 class="faqTitle"> Câu hỏi thường gặp (FAQ) </h2>
                @php
                    $faqData = [
                        'question' => 'What are your areas of focus as a UI/UX and web design agency?',
                        'answer' => 'User experience is more than a capability for us. It’s at the core of everything we do here at
            Clay. We started in San Francisco as a UI/UX design agency and website design company focused on mobile apps
            but quickly expanded our offering to web applications, enterprise software, and emerging technologies such
            as AR/VR and wearable. The UX UI and web design projects we take on range from building a new product to
            redesigning an existing mobile app, website, or enterprise software. We do everything you might need to
            bring a successful digital product to life: user research, product strategy, user interface, and user
            experience design, usability testing, prototyping, web design and development.',
                    ];
                @endphp
                <div class="faqCollapseContain">
                    <div id="accordion">
                        @for ($u = 0; $u < 5; $u++)
                            <div data-bs-toggle="collapse" data-bs-target="#myCollapse{{ $u }}"
                                class="collapsed faqCollapseBox" data-id="{{ $u }}"
                                aria-expanded="{{ $u != 0 ? 'false' : 'true' }}">
                                <div class="d-flex justify-content-between faqCollapseContain">
                                    <h3 class="faqCollapseTitle">{{ $faqData['question'] }}</h3>
                                    <i class="fa-sharp fa-solid fa-chevron-down fa-lg"></i>
                                </div>
                            </div>
                            <div id="myCollapse{{ $u }}"
                                class="collapse faqCollapseBody {{ $u != 0 ? '' : 'show' }}" data-bs-parent="#accordion">
                                {{ $faqData['answer'] }}
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script src="{{ asset('web/assets/js/home.js') }}"></script>
@endsection
