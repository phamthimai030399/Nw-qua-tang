@extends('frontend.layouts.default')

@section('content')
    <main id="fhm-contact-page" class="position-relative">

        @include('frontend.element.banner_home')

        <!-- START BREADCRUMB -->
        <section class="breadcrumb">
            <div class="container">
                <div class="breadcrumb-list">
                    <a href="/" title="Trang chủ" class="breadcrumb-link">Trang chủ</a>
                    <a href="{{ route('frontend.contact') }}" title="Liên hệ"
                        class="breadcrumb-link breadcrumb-link-current">Liên hệ</a>
                </div>
            </div>
        </section>
        <!-- END BREADCRUMB -->

        <div class="map">
            <div class="container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.698056820641!2d105.8042031109451!3d21.00473728852228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac98b9327d87%3A0xad35bfc68d5b5bab!2zODIgTmcuIDExNiBQLiBOaMOibiBIw7JhLCBOaMOibiBDaMOtbmgsIFRoYW5oIFh1w6JuLCBIw6AgTuG7mWkgMTEwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1713951810749!5m2!1svi!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <!-- START CONTACT-->
        <section id="fhm-contact">
            <div class="container">
                <div class="contact-container row justify-content-between">
                    <div class="col-12 col-lg-6 box-content-right d-flex">
                        <div>
                            <h4>{{ $web_information->information->site_name }}</h4>
                            <p><span>Địa chỉ: </span>{{ $web_information->information->address }}</p>
                            <p><span>Email: </span>{{ $web_information->information->email }}</p>
                            <p><span>Hotline: </span>{{ $web_information->information->hotline }}</p>

                        </div>
                    </div>
                    <div class="col-12 col-lg-6 box-content-left">
                        <h4>Liên hệ</h4>
                        <p>
                            Nếu có bất cứ thắc mắc nào về sản phẩm và dịch vụ, Quý khách vui
                            lòng để lại thông tin theo form liên hệ bên dưới.
                        </p>
                        <form action="{{ route('frontend.contact.store') }}" method="post">
                            @csrf
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="form-control1" class="form-control" placeholder="Họ và tên *"
                                    name="name" />
                                    @error('name')
                                        <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                            </div>

                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="form-control2" class="form-control"
                                            placeholder="Số điện thoại *" name="phone" />
                                            @error('phone')
                                                <div class="error text-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="email" id="form-control3" class="form-control" placeholder="Email *"
                                            name="email" />
                                            @error('email')
                                                <div class="error text-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <textarea class="form-control" id="form-control4" rows="2" placeholder="Nội dung" name="content"></textarea>
                            </div>
                            @error('content')
                                <div class="error text-danger">{{ $message }}</div>
                            @enderror

                            <!-- Submit button -->
                            @if (Session::has('contactPostSuccessMessage'))
                            <p><i style="color: #f07d00">{{ Session::get('contactPostSuccessMessage') }}</i></p>
                        @endif
                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                Gửi yêu cầu
                            </button>
                        </form>
                        <span>“Cảm ơn Quý khách đã tin tưởng và sử dụng dịch vụ của chúng tôi!”</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CONTACT-->


    </main>
    <style>
        #fhm-contact-page #banner-container .banner-category .megamenu-wrapper {
            position: relative;
        }

        #fhm-contact-page #banner-container .banner-category .megamenu-wrapper .megamenu-body {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 999;
            background: #fff;
            width: 100%;
            max-height: unset;
            overflow: unset;
        }

        #fhm-contact-page .menu-banner .slider-banner {
            display: none;
        }

        #fhm-contact-page #banner-container .banner-category .megamenu-wrapper:hover .megamenu-body {
            display: block;
        }
    </style>
@endsection
