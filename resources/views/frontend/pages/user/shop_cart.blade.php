@extends('frontend.layouts.default')

@section('content')
    <main id="fhm-shopping-cart">

        @include('frontend.element.banner_home')

        @include('frontend.element.banner_product')

        <!-- START BREADCRUMB -->
        <section class="breadcrumb">
            <div class="container">
                <div class="breadcrumb-list">
                    <a href="/" title="Trang chủ" class="breadcrumb-link">Trang chủ</a>
                    <a href="{{ route('frontend.user.shop_cart') }}" title="Giỏ hàng"
                        class="breadcrumb-link breadcrumb-link-current">Giỏ hàng</a>
                </div>
            </div>
        </section>
        <!-- END BREADCRUMB -->

        <!-- START SHOPPING CART -->
        <section class="shopping-cart">
            <div class="container">
                <div class="shopping-cart-heading title">
                    <h1>Giỏ hàng <span>(5)</span></h1>
                    <div class="line"></div>
                </div>
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="shopping-cart-table">
                            <table class="table">
                                <tbody>
                                    @foreach ($carts as $cart)
                                        <tr class="cart-product">
                                            <td class="cart-checkbox">
                                                <div class="checkbox">
                                                    <input type="checkbox"
                                                        value="Bfgoodrich® 84194 - Advantage T/A Sport LT (255/50R20 109H)" />
                                                    <span class="checkmark">
                                                        <svg width="12" height="9" viewBox="0 0 12 9" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11.9999 0.56561C11.9172 0.67643 11.8473 0.800397 11.7505 0.896191C9.20965 3.44004 6.66713 5.98248 4.12297 8.52351C4.03047 8.61601 3.93514 8.69842 3.79756 8.71486C3.61935 8.73622 3.48177 8.66626 3.35851 8.54276C2.29946 7.48199 1.23931 6.422 0.178071 5.36279C0.161635 5.34636 0.144965 5.32992 0.129469 5.31231C0.005032 5.17144 -0.0348819 5.01085 0.0308586 4.83475C0.0965992 4.65866 0.229254 4.55841 0.415441 4.53423C0.475718 4.52661 0.536922 4.53166 0.595138 4.54904C0.653355 4.56642 0.707304 4.59576 0.753535 4.63519C0.792327 4.66783 0.829321 4.70255 0.864355 4.7392C1.78691 5.66082 2.70908 6.58275 3.63086 7.505C3.65895 7.53747 3.68447 7.57209 3.70716 7.60854L3.7607 7.62262C3.78746 7.58013 3.80765 7.53035 3.84217 7.4956C6.27676 5.0607 8.71198 2.62626 11.1478 0.192297C11.2493 0.0906339 11.3568 0.00634509 11.5096 0.0004754C11.7679 -0.00938568 11.9099 0.135009 11.9999 0.35477V0.56561Z"
                                                                fill="white" />
                                                        </svg>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="cart-img">
                                                <img src="{{ asset($cart->product->image) }}"
                                                    title="{{ $cart->product->title }}" alt="{{ $cart->product->title }}" />
                                            </td>
                                            <td class="cart-info">
                                                <div class="cart-info-content">
                                                    <a href="#" title="{{ $cart->product->title }}">
                                                        {{ $cart->product->title }} </a>
                                                </div>
                                            </td>
                                            <td class="cart-quantity">
                                                <div class="cart-quantity-form">
                                                    <input type="button" value="-" class="qtyminus minus"
                                                        field="quantity" />
                                                    <input type="text" name="quantity" value="{{ $cart->quantity }}"
                                                        class="qty" />
                                                    <input type="button" value="+" class="qtyplus plus"
                                                        field="quantity" />
                                                </div>
                                            </td>
                                            <td class="cart-delete">
                                                <form method="POST" action="{{ route('frontend.order.cart.remove') }}">
                                                    <input type="hidden" name="id" value="{{ $cart->id }}">
                                                    @csrf
                                                    <button>
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="shopping-cart-label">
                            <div class="order">
                                <div class="order-bg"></div>
                                <div class="order-container">
                                    <h5>Đơn hàng</h5>
                                    <table class="table order-table">
                                        <tbody>
                                            <tr>
                                                <th>Bát giấy 13</th>
                                                <td>x 2</td>
                                            </tr>
                                            <tr>
                                                <th>Bình giữ nhiệt 49</th>
                                                <td>
                                                    x 3
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Móc khóa cao su 01</th>
                                                <td>x 1</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <th>Tổng sản phẩm</th>
                                            <td class="total-price">6</td>
                                        </tfoot>
                                    </table>
                                    <button class="main-btn">Gửi đơn hàng</button>
                                </div>
                            </div>
                            <div class="protection">
                                <div class="protection-content">
                                    <h6>
                                        <svg width="10" height="13" viewBox="0 0 10 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_233_15)">
                                                <path
                                                    d="M0.00214512 3.84353C0.00214512 3.35742 0.00546041 2.87131 3.57847e-05 2.38551C-0.00177242 2.21282 0.0648298 2.11066 0.226363 2.04074C1.76254 1.37773 3.2971 0.710302 4.83006 0.0384523C4.88403 0.012853 4.94302 -0.000427246 5.00275 -0.000427246C5.06248 -0.000427246 5.12146 0.012853 5.17543 0.0384523C6.70859 0.70749 8.24246 1.37492 9.77702 2.04074C9.93042 2.10704 10.0012 2.20439 10 2.37225C9.99341 3.27906 10.0112 4.18648 9.98436 5.0927C9.93524 6.77222 9.43226 8.31734 8.51429 9.72111C7.67619 11.004 6.57318 12.0019 5.22938 12.7366C5.07267 12.8222 4.94097 12.8303 4.78154 12.7411C2.27748 11.3373 0.729949 9.23561 0.157952 6.4154C-0.0147316 5.56555 -0.000265823 4.70454 0.00214512 3.84353ZM0.5208 3.89536C0.513869 4.70665 0.505731 5.51763 0.666963 6.31927C1.19014 8.91947 2.60597 10.8757 4.89124 12.2116C4.97984 12.2632 5.04193 12.2505 5.12119 12.2047C6.06669 11.6735 6.90207 10.9667 7.58246 10.1222C8.77347 8.63769 9.40393 6.93858 9.47324 5.03936C9.50338 4.22868 9.47776 3.41619 9.48198 2.6046C9.48198 2.51088 9.45486 2.46627 9.36656 2.4283C7.94531 1.81321 6.52647 1.19269 5.10461 0.579107C5.03748 0.553353 4.96319 0.553353 4.89606 0.579107C3.47511 1.19299 2.05657 1.81321 0.635922 2.4277C0.549128 2.46537 0.517184 2.50666 0.518389 2.60189C0.523512 3.03375 0.5208 3.46471 0.5208 3.89536Z"
                                                    fill="black" />
                                                <path
                                                    d="M4.01751 6.66292C4.04976 6.61199 4.07387 6.55322 4.11546 6.51223C4.99585 5.62822 5.87725 4.74592 6.75966 3.86532C6.95917 3.66581 7.07459 3.66611 7.2762 3.86743C7.53839 4.12861 7.80018 4.3909 8.06157 4.6543C8.23215 4.82638 8.23365 4.94753 8.06368 5.1178C6.77925 6.40485 5.49401 7.69129 4.20798 8.97713C4.04463 9.14017 3.91143 9.13685 3.74477 8.9705C3.14605 8.37218 2.54774 7.77286 1.94982 7.17253C1.76358 6.98568 1.76328 6.87297 1.94621 6.68884C2.21463 6.41881 2.48375 6.14959 2.75357 5.88117C2.92053 5.71572 3.04891 5.71662 3.21678 5.88298C3.46239 6.12588 3.7065 6.37059 3.95181 6.6138C3.96005 6.6191 3.96928 6.62269 3.97894 6.62434L4.01751 6.66292ZM7.01371 4.34962C6.96881 4.39211 6.92873 4.42858 6.89045 4.46685L4.29869 7.05862C4.01058 7.34672 3.94548 7.34672 3.65617 7.05651C3.43466 6.8344 3.21376 6.61138 2.99949 6.3953L2.48204 6.91969L3.98888 8.42653L7.53629 4.87852L7.01371 4.34962Z"
                                                    fill="black" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_233_15">
                                                    <rect width="10" height="12.8057" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        Thông tin bổ sung
                                    </h6>
                                    <p>
                                        Sau khi đơn hàng được gửi chúng tôi sẽ liên hệ với bạn sớm nhất có thể. Xin cảm ơn!
                                    </p>
                                </div>
                                <div class="protection-bg"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SHOPPING CART -->


    </main>
    <style>
        #fhm-shopping-cart #banner-container .banner-category .megamenu-wrapper {
            position: relative;
        }

        #fhm-shopping-cart #banner-container .banner-category .megamenu-wrapper .megamenu-body {
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

        #fhm-shopping-cart .menu-banner .slider-banner {
            display: none;
        }

        #fhm-shopping-cart #banner-container .banner-category .megamenu-wrapper:hover .megamenu-body {
            display: block;
        }
    </style>
    <script>
        @if(Session::has('successMessage'))
            alert("{{ Session::get('successMessage') }}");
        @endif
        @if(Session::has('errorMessage'))
            alert("{{ Session::get('errorMessage') }}");
        @endif
    </script>
@endsection
