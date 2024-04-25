@extends('frontend.layouts.default')

@section('content')
    <main id="acount-information-page">

        @include('frontend.element.banner_home')

        @include('frontend.element.banner_product')

        <!-- START BREADCRUMB -->
        <section class="breadcrumb">
            <div class="container">
                <div class="breadcrumb-list">
                    <a href="/" title="Trang chủ" class="breadcrumb-link">Trang chủ</a>
                    <a href="{{ route('frontend.user.index') }}" title="Tài khoản"
                        class="breadcrumb-link breadcrumb-link-current">Tài khoản</a>
                </div>
            </div>
        </section>
        <!-- END BREADCRUMB -->

        <!--Account Information-->
        <section id="fhm-information">
            <div class="container">
                <div class="information-container d-lg-flex justify-content-between">
                    <div class="information-left d-flex d-lg-block">
                        <ul class="tabs-list" role="tablist">
                            <li class="tab-title" data-content="acount-info" role="presentation">
                                <p class="text active" id="acount-info-tab" data-bs-toggle="tab"
                                    data-bs-target="#acount-info" type="button" role="tab" aria-controls="acount-info"
                                    aria-selected="true">
                                    Thông tin tài khoản
                                </p>
                            </li>
                            <li class="tab-title" data-content="order-info" role="presentation">
                                <p class="text" id="order-info-tab" data-bs-toggle="tab" data-bs-target="#order-info"
                                    type="button" role="tab" aria-controls="order-info" aria-selected="true">
                                    Đơn hàng
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="information-right">
                        <div class="tab-content tabs-content" id="tabs-content">
                            <div class="tab-pane fade show active" id="acount-info" role="tabpanel"
                                aria-labelledby="acount-info-tab">
                                <div class="account-information">
                                    <div class="title">
                                        <h3>Thông tin tài khoản</h3>
                                        <div class="line"></div>
                                    </div>
                                    <div class="account-information-container d-lg-flex justify-content-between">
                                        <div class="account-avt">
                                            <i class="fas fa-user-shield"></i>
                                        </div>
                                        <div class="form-account-information">
                                            <form class="form-info"action="{{ route('frontend.user.update') }}"
                                                method="post">
                                                @csrf
                                                <div class="mt-4 d-flex align-items-center">
                                                    <label class="form-label">Họ và tên: <span>*</span></label>
                                                    <input type="text" class="form-control" id="name"
                                                        value="{{ Auth::guard('web')->user()->name ?? '' }}" name="name"
                                                        placeholder="Họ và tên*" />
                                                </div>
                                                @error('name')
                                                    <div class="error text-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="mt-4 d-flex align-items-center">
                                                    <label class="form-label">Số điện thoại: <span>*</span></label>
                                                    <input type="text" class="form-control" id="phone"
                                                        value="{{ Auth::guard('web')->user()->phone ?? '' }}" name="phone"
                                                        placeholder="Số điện thoại*" />
                                                </div>
                                                @error('phone')
                                                    <div class="error text-danger">{{ $message }}
                                                    </div>
                                                @enderror
                                                <div class="mt-4 d-flex align-items-center">
                                                    <label class="form-label">Email: <span>*</span></label>
                                                    <input type="email" class="form-control" id="email"
                                                        value="{{ Auth::guard('web')->user()->email ?? '' }}" name="email"
                                                        placeholder="Email*" />
                                                </div>
                                                @error('email')
                                                    <div class="error text-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="mt-4 d-flex align-items-center">
                                                    <label class="form-label">Mật khẩu cũ: </label>
                                                    <input type="text" class="form-control" id="old_password"
                                                        value="" name="old_password" placeholder="Mật khẩu cũ" />
                                                </div>
                                                @error('old_password')
                                                    <div class="error text-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="mt-4 d-flex align-items-center">
                                                    <label class="form-label">Mật khẩu mới: </label>
                                                    <input type="text" class="form-control" id="new_password"
                                                        value="" name="new_password" placeholder="Mật khẩu mới" />
                                                </div>
                                                @error('new_password')
                                                    <div class="error text-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="mt-4 d-flex align-items-center">
                                                    <label class="form-label">Nhập lại mật khẩu mới: </label>
                                                    <input type="text" class="form-control" id="confirm_password"
                                                        value="" name="confirm_password"
                                                        placeholder="Nhập lại mật khẩu mới" />
                                                </div>
                                                @error('confirm_password')
                                                    <div class="error text-danger">{{ $message }}</div>
                                                @enderror
                                                @if (Session::has('updateSuccessMessage'))
                                                    <p><i
                                                            style="color: #f07d00">{{ Session::get('updateSuccessMessage') }}</i>
                                                    </p>
                                                @endif
                                                <button class="button-update button ">Cập nhật</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="order-info" role="tabpanel" aria-labelledby="order-info-tab">
                                <div class="account-information">
                                    <h3>Lịch sử mua hàng</h3>
                                    <div class="order-information-container d-lg-flex justify-content-between">
                                        <div class="form-order-info">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th>Ngày mua</th>
                                                        <th>Tên sản phẩm</th>
                                                        <th>Số lượng</th>
                                                        <th>Trạng thái đơn hàng</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>12:22</span>
                                                            <span>05-10-2023</span>
                                                        </td>
                                                        <td>
                                                            <div class="cart-item d-flex">
                                                                <div class="cart-item-image d-none d-lg-block">
                                                                    <img src="./assets/image/product2.png"
                                                                        alt="Air Purifier with True HEPA Filter" />
                                                                </div>

                                                                <div class="cart-item-info">
                                                                    <span class="product-type">Máy hút bụi</span>
                                                                    <a class="product-name" href="/"
                                                                        title="Máy hút bụi khô/ướt/thổi 16L 1400W nhựa cao cấp">Máy
                                                                        hút bụi khô/ướt/thổi 16L 1400W nhựa cao cấp</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>x1</td>
                                                        <td>Đã gửi đơn</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>12:22</span>
                                                            <span>05-10-2023</span>
                                                        </td>
                                                        <td>
                                                            <div class="cart-item d-flex">
                                                                <div class="cart-item-image d-none d-lg-block">
                                                                    <img src="./assets/image/product3.png"
                                                                        alt="Air Purifier with True HEPA Filter" />
                                                                </div>

                                                                <div class="cart-item-info">
                                                                    <span class="product-type">Máy hút bụi</span>
                                                                    <a class="product-name" href="/"
                                                                        title="Máy hút bụi khô/ướt/thổi 16L 1400W nhựa cao cấp">Máy
                                                                        hút bụi khô/ướt/thổi 16L 1400W nhựa cao cấp</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>x1</td>
                                                        <td>Hoàn thành</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>12:22</span>
                                                            <span>05-10-2023</span>
                                                        </td>
                                                        <td>
                                                            <div class="cart-item d-flex">
                                                                <div class="cart-item-image d-none d-lg-block">
                                                                    <img src="./assets/image/product1.png"
                                                                        alt="Air Purifier with True HEPA Filter" />
                                                                </div>

                                                                <div class="cart-item-info">
                                                                    <span class="product-type">Máy hút bụi</span>
                                                                    <a class="product-name" href="/"
                                                                        title="Máy hút bụi khô/ướt/thổi 16L 1400W nhựa cao cấp">Máy
                                                                        hút bụi khô/ướt/thổi 16L 1400W nhựa cao cấp</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>x1</td>
                                                        <td>Đang vận chuyển</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
    <style>
        #acount-information-page #banner-container .banner-category .megamenu-wrapper {
            position: relative;
        }

        #acount-information-page #banner-container .banner-category .megamenu-wrapper .megamenu-body {
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

        #acount-information-page .menu-banner .slider-banner {
            display: none;
        }

        #acount-information-page #banner-container .banner-category .megamenu-wrapper:hover .megamenu-body {
            display: block;
        }

        #fhm-information {
            margin-top: 80px;
            margin-bottom: 100px;
        }

        #fhm-information .information-container .information-left {
            width: 22%;
        }

        #fhm-information .information-container .information-right {
            width: 76%;
        }

        #fhm-information .information-left {
            gap: 40px;
        }

        #fhm-information .information-left .tab-title .text {
            color: #000;
            font-size: 16px;
            font-weight: 500;
            letter-spacing: 1.6px;
            margin-bottom: 30px;
            cursor: pointer;
            white-space: nowrap;
        }

        #fhm-information .information-left .tab-title:hover {
            color: #e02a26;
            transition: all 0.5s ease;
        }

        #fhm-information .information-left .tab-title .text.active {
            font-weight: 700;
            color: #f07d00
        }

        #fhm-information .information-right h3 {
            font-size: 32px;
            font-weight: 800;
            margin-bottom: 30px;
            line-height: 15px;
        }

        #fhm-information .information-right .title {
            margin-bottom: 40px;
        }

        #fhm-information .information-right .account-information-container {
            gap: 40px;
        }

        #fhm-information .information-right .account-information-container .account-avt {}

        #fhm-information .information-right .account-information-container .account-avt i {
            padding: 25px 20px;
            background: #f07d00;
            border-radius: 50%;
        }

        #fhm-information .information-right .account-information-container .account-avt i::before {
            font-size: 70px;
            color: #fff;
        }

        #fhm-information .information-right .account-information-container .form-account-information {
            width: 83%;
        }

        #fhm-information .information-right .account-information-container .account-avt img {
            width: 100%;
        }

        #fhm-information .form-account-information .form-label {
            width: 27%;
        }

        #fhm-information .form-account-information .form-label span {
            color: #e02a26;
        }

        #fhm-information .form-account-information .form-control {
            display: flex;
            gap: 40px;
            padding: 8px 8px 8px 20px;
            font-weight: 500
        }

        #fhm-information .form-account-information .form-control::placeholder {
            color: #dcdbdb
        }

        #fhm-information .form-account-information .form-control:focus {
            box-shadow: none;
            border: 1px solid #dcdbdb;
        }

        #fhm-information .form-account-information .form-control.radio {
            border: none;
        }

        #fhm-information .form-account-information .radio-item {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            font-size: 14px;
            font-weight: 500;
            line-height: 20px;
            color: #616161;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        #fhm-information .form-account-information .checkmark {
            position: absolute;
            top: 1px;
            left: 2px;
            height: 19px;
            width: 19px;
            border-radius: 300px;
            border: 1px solid #dedede;
        }

        #fhm-information .form-account-information .radio-item input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        #fhm-information .form-account-information .radio-item .checkmark::after {
            content: "";
            display: none;
            position: absolute;
            top: 52%;
            left: 53%;
            transform: translate(-55%, -50%);
            width: 12px;
            height: 12px;
            border-radius: 300px;
            background: #e02a26;
        }

        #fhm-information .form-account-information .radio-item input:checked~.checkmark::after {
            display: block;
        }

        #fhm-information .form-account-information .button.button-update {
            border-radius: 3px;
            padding: 8px 44px;
            margin-top: 30px;
            margin-left: 22%;
            background: #f07d00;
            color: #fff;
        }

        form.form-info .text-danger {
            margin-left: 22%;
        }

        @media (max-width: 991px) {
            form.form-info .text-danger {
                margin-left: 25%;
            }

            #fhm-information .information-container .information-left,
            #fhm-information .information-container .information-right {
                width: 100%;
                margin-top: 30px;
            }

            #fhm-information .information-right h3 {
                text-align: center;
            }

            #fhm-information .information-right .account-information-container .account-avt {
                width: 100%;
                padding: 0 30%;
                margin-bottom: 40px;
            }

            #fhm-information .information-right .account-information-container .form-account-information {
                width: 100%;
            }

            #fhm-information .form-account-information .form-label {
                width: 33%;
            }

            #fhm-information .form-account-information .button.button-update {
                margin-left: 25%;
            }
        }

        #fhm-information .information-right .order-information-container table {
            width: 100%;
        }

        #fhm-information .information-right .order-information-container table .cart-item-info .product-name {
            font-size: 14px;
        }

        #fhm-information .information-right .order-information-container table .cart-item-info .product-type {
            font-size: 11px;
        }

        #fhm-information .information-right .order-information-container .form-order-info {
            border-radius: 5px;
            border: 1px solid #d9d9d9;
            padding: 0 25px;
        }

        #fhm-information .information-right .order-information-container table th,
        #fhm-information .information-right .order-information-container table td {
            padding-left: 2.5%;
        }

        #fhm-information .information-right .order-information-container table tr:first-child {
            border-top: none;
        }

        #fhm-information .information-right .order-information-container table tr {
            border-top: 1px solid #d9d9d9;
        }

        #fhm-information .information-right .order-information-container table th:first-child,
        #fhm-information .information-right .order-information-container table td:first-child {
            padding-left: 0px;
        }

        #fhm-information .information-right .order-information-container table th:nth-child(2),
        #fhm-information .information-right .order-information-container table td:nth-child(2) {
            width: 41%;
        }

        #fhm-information .information-right .order-information-container table th:nth-child(5),
        #fhm-information .information-right .order-information-container table td:nth-child(5) {
            width: 13%;
        }

        #fhm-information .information-right .order-information-container table th,
        #fhm-information .information-right .order-information-container table td {
            width: 12%;
            padding: 25px 5px 20px 5px;
            text-align: center;
        }

        #fhm-information .information-right .order-information-container table td:nth-child(2) {
            text-align: start;
        }

        #fhm-information .information-right .order-information-container table td:first-child {
            white-space: pre-line;
            text-align: start;
        }

        #fhm-information .information-right .order-information-container table td .cart-item {
            padding: 0;
            border-bottom: none;
            gap: 10px;
        }

        @media (max-width: 480px) {
          form.form-info .text-danger {
                margin-left: 32%;
            }
            #fhm-information .form-account-information .form-label {
                width: 50%;
            }

            .cart-item .cart-item-info {
                flex: 0 0 calc(100%);
            }

            #fhm-information .information-right .order-information-container table th,
            #fhm-information .information-right .order-information-container table td {
                padding-left: 2%;
            }

            #fhm-information .information-right .order-information-container table th:nth-child(2),
            #fhm-information .information-right .order-information-container table td:nth-child(2) {
                width: 34%;
            }

            #fhm-information .information-right .order-information-container table th:nth-child(5),
            #fhm-information .information-right .order-information-container table td:nth-child(5) {
                display: none;
            }

            #fhm-information .information-right .order-information-container table th,
            #fhm-information .information-right .order-information-container table td {
                width: 20%;
            }

            #fhm-information .information-right .order-information-container .form-order-info {
                padding: 0 10px;
            }

            #fhm-information .information-right .order-information-container table th,
            #fhm-information .information-right .order-information-container table td {
                padding: 15px 0;
            }
        }

        @media (max-width: 991px) {
            #fhm-information .information-left .tabs-list {
                display: contents;
            }

            #fhm-information .information-right .order-information-container table th,
            #fhm-information .information-right .order-information-container table td {
                padding-left: 2%;
            }

            #fhm-information .information-right .order-information-container table th:nth-child(2),
            #fhm-information .information-right .order-information-container table td:nth-child(2) {
                width: 40%;
            }

            #fhm-information .information-right .order-information-container table th,
            #fhm-information .information-right .order-information-container table td {
                width: 13%;
            }
        }
    </style>
@endsection
