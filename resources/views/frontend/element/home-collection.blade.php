a<!-- START HOME JUST IN -->
<div id="product-home">
    <section class="justin home-collection">
        <div class="container">
            <div class="home-collection-banners d-flex">
                @foreach ($blocksContent as $item)
                    @if ($item->block_code == 'banner_ads' && $item->parent_id == null)
                        <div class="home-collection-banner-img">
                            <a href="#"><img src="{{ $item->image }}" alt="{{ $item->title }}" /></a>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="title d-flex justify-content-between align-items-center">
                <div class="home-collection_title">
                    <h3>SẢN PHẨM MỚI</h3>
                </div>
                <div class="view-more">
                    <a href="{{route('frontend.cms.product_all')}}">
                        Xem thêm <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="d-flex">
                <div class="banner-product d-none d-lg-block">
                    @foreach ($blocksContent as $item)
                        @if ($item->block_code == 'banner_product_new' && $item->parent_id == null)
                            <img class="hide-small" src="{{ $item->image }}" alt="">
                        @endif
                    @endforeach
                </div>
                <div class="swiper main-slider justin-container">
                    <div class="container">
                        <div class="justin-slider main-slider-container">
                            <div class="swiper-wrapper">
                                @foreach ($new_products as $product)
                                    <div class="swiper-slide justin-item">
                                        <div class="product">
                                            <div class="product-img">
                                                <a href="{{ route('frontend.cms.product', ['alias_detail' => $product->alias]) }}">
                                                    <img class="product-img-default" src="{{ $product->image }}"
                                                        alt="{{ $product->title }}" title="{{ $product->title }}" />
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <span class="product-type">Denim</span>
                                                <a href="{{ route('frontend.cms.product', ['alias_detail' => $product->alias]) }}" class="product-name" title="{{ $product->title }}">
                                                    {{ $product->title }}
                                                </a>
                                                @if ($product->gia != null)
                                                    <div class="product-price">
                                                        <span class="product-price_detail product-price-current">{{ formatCurrency($product->gia) }}</span>
                                                        @if ($product->giakm != null)
                                                            <span class="product-price_detail product-price-old">{{ formatCurrency($product->giakm) }}</span>
                                                        @endif
                                                    </div>
                                                @else
                                                    <div class="product-price">
                                                        <span class="product-price-current">Liên hệ</span> 
                                                    </div>
                                                @endif
                                            </div>
                                            <button class="main-btn add-cart" data-id="{{$product->id}}">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.72117 1.54131C1.33081 1.54131 0.949755 1.54596 0.568694 1.54131C0.159752 1.53666 -0.109779 1.14631 0.0435745 0.77919C0.131869 0.560777 0.303811 0.435306 0.540812 0.430659C1.10776 0.426012 1.67935 0.421365 2.24629 0.430659C2.53906 0.435306 2.75282 0.649072 2.78535 0.946485C2.8597 1.62496 2.92941 2.30808 2.99912 2.98655C3.00841 3.05626 3.0177 3.12596 3.03165 3.21426C3.106 3.21426 3.18035 3.21426 3.2547 3.21426C7.11643 3.21426 10.9781 3.21426 14.8399 3.21426C15.4347 3.21426 15.9041 3.56279 15.9877 4.11579C16.0202 4.33885 15.9831 4.57585 15.9366 4.79891C15.5137 6.79251 15.0908 8.78611 14.654 10.7797C14.4774 11.5976 13.8175 12.1181 12.981 12.1181C10.1184 12.1181 7.25119 12.1181 4.38859 12.1181C3.45918 12.1181 2.77141 11.4768 2.67847 10.5566C2.51582 8.9534 2.33923 7.35016 2.17194 5.75156C2.02788 4.38068 1.88382 3.00979 1.7444 1.63425C1.73511 1.61566 1.73046 1.59243 1.72117 1.54131ZM3.13853 4.3342C3.20823 4.97085 3.27329 5.58427 3.33835 6.20233C3.48706 7.61969 3.63577 9.03705 3.78912 10.4544C3.83094 10.8262 4.03541 11.0074 4.41647 11.0074C7.26513 11.0074 10.1091 11.0074 12.9578 11.0074C13.311 11.0074 13.5062 10.8494 13.5805 10.5009C13.9383 8.83258 14.2962 7.15963 14.654 5.49133C14.7376 5.11027 14.8166 4.72456 14.9003 4.3342C10.9735 4.3342 7.06531 4.3342 3.13853 4.3342Z"
                                                        fill="white" />
                                                    <path
                                                        d="M3.34277 14.911C3.34277 13.9909 4.09095 13.238 5.00643 13.238C5.92655 13.238 6.67938 13.9862 6.67938 14.9017C6.67938 15.8218 5.9312 16.5746 5.01572 16.5746C4.10025 16.5793 3.34277 15.8265 3.34277 14.911ZM5.00643 15.4593C5.30849 15.4593 5.56408 15.213 5.56408 14.911C5.56872 14.6089 5.32243 14.3533 5.02037 14.3487C4.71366 14.344 4.45342 14.5996 4.45342 14.9063C4.45807 15.2084 4.70901 15.4593 5.00643 15.4593Z"
                                                        fill="white" />
                                                    <path
                                                        d="M11.6893 16.5746C10.7738 16.5746 10.021 15.8218 10.021 14.9017C10.021 13.9862 10.7738 13.2334 11.6939 13.2334C12.6141 13.2334 13.3622 13.9862 13.3622 14.9063C13.3622 15.8265 12.6094 16.5746 11.6893 16.5746ZM11.6893 14.3487C11.3872 14.3487 11.1363 14.5996 11.1363 14.9017C11.1363 15.2038 11.3826 15.4547 11.6846 15.4593C11.9914 15.464 12.2516 15.2038 12.2469 14.8971C12.2469 14.595 11.9914 14.3487 11.6893 14.3487Z"
                                                        fill="white" />
                                                </svg>

                                                Thêm vào giỏ hàng
                                            </button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev main-slider-prev justin-prev">
                        <svg width="11" height="16" viewBox="0 0 11 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.34363 6.98486L6.98426 0.344238C7.44324 -0.114746 8.18543 -0.114746 8.63953 0.344238L9.74304 1.44775C10.202 1.90674 10.202 2.64893 9.74304 3.10303L5.0409 7.81494L9.74793 12.522C10.2069 12.981 10.2069 13.7231 9.74793 14.1772L8.64441 15.2856C8.18543 15.7446 7.44324 15.7446 6.98914 15.2856L0.348513 8.64502C-0.115354 8.18604 -0.115354 7.44385 0.34363 6.98486Z"
                                fill="#969595" />
                        </svg>
                    </div>
                    <div class="swiper-button-next main-slider-next justin-next">
                        <svg width="11" height="16" viewBox="0 0 11 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.74865 6.98486L3.10803 0.344238C2.64905 -0.114746 1.90686 -0.114746 1.45276 0.344238L0.34924 1.44775C-0.109744 1.90674 -0.109744 2.64893 0.34924 3.10303L5.05139 7.81494L0.344357 12.522C-0.114627 12.981 -0.114627 13.7231 0.344357 14.1772L1.44787 15.2856C1.90686 15.7446 2.64904 15.7446 3.10315 15.2856L9.74377 8.64502C10.2076 8.18604 10.2076 7.44385 9.74865 6.98486Z"
                                fill="#969595" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="justin home-collection">
        <div class="container">
            <div class="title d-flex justify-content-between align-items-center">
                <div class="home-collection_title">
                    <h3>SẢN PHẨM NỔI BẬT</h3>
                </div>
                <div class="view-more">
                    <a href="{{route('frontend.cms.product_all')}}">
                        Xem thêm <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="d-flex">
                <div class="banner-product d-none d-lg-block">
                    @foreach ($blocksContent as $item)
                        @if ($item->block_code == 'banner_product_new' && $item->parent_id == null)
                            <img class="hide-small" src="{{ $item->image }}" alt="">
                        @endif
                    @endforeach
                </div>
                <div class="swiper main-slider justin-container">
                    <div class="container">
                        <div class="justin-slider main-slider-container">
                            <div class="swiper-wrapper">
                                @foreach ($feature_products as $product)
                                    <div class="swiper-slide justin-item">
                                        <div class="product">
                                            <div class="product-img">
                                                <a href="{{ route('frontend.cms.product', ['alias_detail' => $product->alias]) }}">
                                                    <img class="product-img-default" src="{{ $product->image }}"
                                                        alt="{{ $product->title }}" title="{{ $product->title }}" />
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <span class="product-type">Denim</span>
                                                <a href="{{ route('frontend.cms.product', ['alias_detail' => $product->alias]) }}" class="product-name" title="{{ $product->title }}">
                                                    {{ $product->title }}
                                                </a>
                                                @if ($product->gia != null)
                                                    <div class="product-price">
                                                        <span class="product-price_detail product-price-current">{{ formatCurrency($product->gia) }}</span>
                                                        @if ($product->giakm != null)
                                                            <span class="product-price_detail product-price-old">{{ formatCurrency($product->giakm) }}</span>
                                                        @endif
                                                    </div>
                                                @else
                                                    <div class="product-price">
                                                        <span class="product-price-current">Liên hệ</span> 
                                                    </div>
                                                @endif
                                            </div>
                                            <button class="main-btn add-cart" data-id="{{$product->id}}">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.72117 1.54131C1.33081 1.54131 0.949755 1.54596 0.568694 1.54131C0.159752 1.53666 -0.109779 1.14631 0.0435745 0.77919C0.131869 0.560777 0.303811 0.435306 0.540812 0.430659C1.10776 0.426012 1.67935 0.421365 2.24629 0.430659C2.53906 0.435306 2.75282 0.649072 2.78535 0.946485C2.8597 1.62496 2.92941 2.30808 2.99912 2.98655C3.00841 3.05626 3.0177 3.12596 3.03165 3.21426C3.106 3.21426 3.18035 3.21426 3.2547 3.21426C7.11643 3.21426 10.9781 3.21426 14.8399 3.21426C15.4347 3.21426 15.9041 3.56279 15.9877 4.11579C16.0202 4.33885 15.9831 4.57585 15.9366 4.79891C15.5137 6.79251 15.0908 8.78611 14.654 10.7797C14.4774 11.5976 13.8175 12.1181 12.981 12.1181C10.1184 12.1181 7.25119 12.1181 4.38859 12.1181C3.45918 12.1181 2.77141 11.4768 2.67847 10.5566C2.51582 8.9534 2.33923 7.35016 2.17194 5.75156C2.02788 4.38068 1.88382 3.00979 1.7444 1.63425C1.73511 1.61566 1.73046 1.59243 1.72117 1.54131ZM3.13853 4.3342C3.20823 4.97085 3.27329 5.58427 3.33835 6.20233C3.48706 7.61969 3.63577 9.03705 3.78912 10.4544C3.83094 10.8262 4.03541 11.0074 4.41647 11.0074C7.26513 11.0074 10.1091 11.0074 12.9578 11.0074C13.311 11.0074 13.5062 10.8494 13.5805 10.5009C13.9383 8.83258 14.2962 7.15963 14.654 5.49133C14.7376 5.11027 14.8166 4.72456 14.9003 4.3342C10.9735 4.3342 7.06531 4.3342 3.13853 4.3342Z"
                                                        fill="white" />
                                                    <path
                                                        d="M3.34277 14.911C3.34277 13.9909 4.09095 13.238 5.00643 13.238C5.92655 13.238 6.67938 13.9862 6.67938 14.9017C6.67938 15.8218 5.9312 16.5746 5.01572 16.5746C4.10025 16.5793 3.34277 15.8265 3.34277 14.911ZM5.00643 15.4593C5.30849 15.4593 5.56408 15.213 5.56408 14.911C5.56872 14.6089 5.32243 14.3533 5.02037 14.3487C4.71366 14.344 4.45342 14.5996 4.45342 14.9063C4.45807 15.2084 4.70901 15.4593 5.00643 15.4593Z"
                                                        fill="white" />
                                                    <path
                                                        d="M11.6893 16.5746C10.7738 16.5746 10.021 15.8218 10.021 14.9017C10.021 13.9862 10.7738 13.2334 11.6939 13.2334C12.6141 13.2334 13.3622 13.9862 13.3622 14.9063C13.3622 15.8265 12.6094 16.5746 11.6893 16.5746ZM11.6893 14.3487C11.3872 14.3487 11.1363 14.5996 11.1363 14.9017C11.1363 15.2038 11.3826 15.4547 11.6846 15.4593C11.9914 15.464 12.2516 15.2038 12.2469 14.8971C12.2469 14.595 11.9914 14.3487 11.6893 14.3487Z"
                                                        fill="white" />
                                                </svg>

                                                Thêm vào giỏ hàng
                                            </button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev main-slider-prev justin-prev">
                        <svg width="11" height="16" viewBox="0 0 11 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.34363 6.98486L6.98426 0.344238C7.44324 -0.114746 8.18543 -0.114746 8.63953 0.344238L9.74304 1.44775C10.202 1.90674 10.202 2.64893 9.74304 3.10303L5.0409 7.81494L9.74793 12.522C10.2069 12.981 10.2069 13.7231 9.74793 14.1772L8.64441 15.2856C8.18543 15.7446 7.44324 15.7446 6.98914 15.2856L0.348513 8.64502C-0.115354 8.18604 -0.115354 7.44385 0.34363 6.98486Z"
                                fill="#969595" />
                        </svg>
                    </div>
                    <div class="swiper-button-next main-slider-next justin-next">
                        <svg width="11" height="16" viewBox="0 0 11 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.74865 6.98486L3.10803 0.344238C2.64905 -0.114746 1.90686 -0.114746 1.45276 0.344238L0.34924 1.44775C-0.109744 1.90674 -0.109744 2.64893 0.34924 3.10303L5.05139 7.81494L0.344357 12.522C-0.114627 12.981 -0.114627 13.7231 0.344357 14.1772L1.44787 15.2856C1.90686 15.7446 2.64904 15.7446 3.10315 15.2856L9.74377 8.64502C10.2076 8.18604 10.2076 7.44385 9.74865 6.98486Z"
                                fill="#969595" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="justin home-collection">
        <div class="container">
            <div class="title d-flex justify-content-between align-items-center">
                <div class="home-collection_title">
                    <h3>SẢN PHẨM TỪNG THỰC HIỆN</h3>
                </div>
                <div class="view-more">
                    <a href="{{route('frontend.cms.product_all')}}">
                        Xem thêm <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="d-flex">
                <div class="banner-product d-none d-lg-block">
                    @foreach ($blocksContent as $item)
                        @if ($item->block_code == 'banner_product_new' && $item->parent_id == null)
                            <img class="hide-small" src="{{ $item->image }}" alt="">
                        @endif
                    @endforeach
                </div>
                <div class="swiper main-slider justin-container">
                    <div class="container">
                        <div class="justin-slider main-slider-container">
                            <div class="swiper-wrapper">
                                @foreach ($ever_made_products as $product)
                                    <div class="swiper-slide justin-item">
                                        <div class="product">
                                            <div class="product-img">
                                                <a href="{{ route('frontend.cms.product', ['alias_detail' => $product->alias]) }}">
                                                    <img class="product-img-default" src="{{ $product->image }}"
                                                        alt="{{ $product->title }}" title="{{ $product->title }}" />
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <span class="product-type">Denim</span>
                                                <a href="{{ route('frontend.cms.product', ['alias_detail' => $product->alias]) }}" class="product-name" title="{{ $product->title }}">
                                                    {{ $product->title }}
                                                </a>
                                                @if ($product->gia != null)
                                                    <div class="product-price">
                                                        <span class="product-price_detail product-price-current">{{ formatCurrency($product->gia) }}</span>
                                                        @if ($product->giakm != null)
                                                            <span class="product-price_detail product-price-old">{{ formatCurrency($product->giakm) }}</span>
                                                        @endif
                                                    </div>
                                                @else
                                                    <div class="product-price">
                                                        <span class="product-price-current">Liên hệ</span> 
                                                    </div>
                                                @endif
                                            </div>
                                            <button class="main-btn add-cart" data-id="{{$product->id}}">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.72117 1.54131C1.33081 1.54131 0.949755 1.54596 0.568694 1.54131C0.159752 1.53666 -0.109779 1.14631 0.0435745 0.77919C0.131869 0.560777 0.303811 0.435306 0.540812 0.430659C1.10776 0.426012 1.67935 0.421365 2.24629 0.430659C2.53906 0.435306 2.75282 0.649072 2.78535 0.946485C2.8597 1.62496 2.92941 2.30808 2.99912 2.98655C3.00841 3.05626 3.0177 3.12596 3.03165 3.21426C3.106 3.21426 3.18035 3.21426 3.2547 3.21426C7.11643 3.21426 10.9781 3.21426 14.8399 3.21426C15.4347 3.21426 15.9041 3.56279 15.9877 4.11579C16.0202 4.33885 15.9831 4.57585 15.9366 4.79891C15.5137 6.79251 15.0908 8.78611 14.654 10.7797C14.4774 11.5976 13.8175 12.1181 12.981 12.1181C10.1184 12.1181 7.25119 12.1181 4.38859 12.1181C3.45918 12.1181 2.77141 11.4768 2.67847 10.5566C2.51582 8.9534 2.33923 7.35016 2.17194 5.75156C2.02788 4.38068 1.88382 3.00979 1.7444 1.63425C1.73511 1.61566 1.73046 1.59243 1.72117 1.54131ZM3.13853 4.3342C3.20823 4.97085 3.27329 5.58427 3.33835 6.20233C3.48706 7.61969 3.63577 9.03705 3.78912 10.4544C3.83094 10.8262 4.03541 11.0074 4.41647 11.0074C7.26513 11.0074 10.1091 11.0074 12.9578 11.0074C13.311 11.0074 13.5062 10.8494 13.5805 10.5009C13.9383 8.83258 14.2962 7.15963 14.654 5.49133C14.7376 5.11027 14.8166 4.72456 14.9003 4.3342C10.9735 4.3342 7.06531 4.3342 3.13853 4.3342Z"
                                                        fill="white" />
                                                    <path
                                                        d="M3.34277 14.911C3.34277 13.9909 4.09095 13.238 5.00643 13.238C5.92655 13.238 6.67938 13.9862 6.67938 14.9017C6.67938 15.8218 5.9312 16.5746 5.01572 16.5746C4.10025 16.5793 3.34277 15.8265 3.34277 14.911ZM5.00643 15.4593C5.30849 15.4593 5.56408 15.213 5.56408 14.911C5.56872 14.6089 5.32243 14.3533 5.02037 14.3487C4.71366 14.344 4.45342 14.5996 4.45342 14.9063C4.45807 15.2084 4.70901 15.4593 5.00643 15.4593Z"
                                                        fill="white" />
                                                    <path
                                                        d="M11.6893 16.5746C10.7738 16.5746 10.021 15.8218 10.021 14.9017C10.021 13.9862 10.7738 13.2334 11.6939 13.2334C12.6141 13.2334 13.3622 13.9862 13.3622 14.9063C13.3622 15.8265 12.6094 16.5746 11.6893 16.5746ZM11.6893 14.3487C11.3872 14.3487 11.1363 14.5996 11.1363 14.9017C11.1363 15.2038 11.3826 15.4547 11.6846 15.4593C11.9914 15.464 12.2516 15.2038 12.2469 14.8971C12.2469 14.595 11.9914 14.3487 11.6893 14.3487Z"
                                                        fill="white" />
                                                </svg>

                                                Thêm vào giỏ hàng
                                            </button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev main-slider-prev justin-prev">
                        <svg width="11" height="16" viewBox="0 0 11 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.34363 6.98486L6.98426 0.344238C7.44324 -0.114746 8.18543 -0.114746 8.63953 0.344238L9.74304 1.44775C10.202 1.90674 10.202 2.64893 9.74304 3.10303L5.0409 7.81494L9.74793 12.522C10.2069 12.981 10.2069 13.7231 9.74793 14.1772L8.64441 15.2856C8.18543 15.7446 7.44324 15.7446 6.98914 15.2856L0.348513 8.64502C-0.115354 8.18604 -0.115354 7.44385 0.34363 6.98486Z"
                                fill="#969595" />
                        </svg>
                    </div>
                    <div class="swiper-button-next main-slider-next justin-next">
                        <svg width="11" height="16" viewBox="0 0 11 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.74865 6.98486L3.10803 0.344238C2.64905 -0.114746 1.90686 -0.114746 1.45276 0.344238L0.34924 1.44775C-0.109744 1.90674 -0.109744 2.64893 0.34924 3.10303L5.05139 7.81494L0.344357 12.522C-0.114627 12.981 -0.114627 13.7231 0.344357 14.1772L1.44787 15.2856C1.90686 15.7446 2.64904 15.7446 3.10315 15.2856L9.74377 8.64502C10.2076 8.18604 10.2076 7.44385 9.74865 6.98486Z"
                                fill="#969595" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="justin home-collection">
        <div class="container">
            <div class="title d-flex justify-content-between align-items-center">
                <div class="home-collection_title">
                    <h3>QUÀ TẶNG THANH LÝ</h3>
                </div>
                <div class="view-more">
                    <a href="{{route('frontend.cms.product_all')}}">
                        Xem thêm <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="d-flex">
                <div class="banner-product d-none d-lg-block">
                    @foreach ($blocksContent as $item)
                        @if ($item->block_code == 'banner_liquidation_gifts' && $item->parent_id == null)
                            <img class="hide-small" src="{{ $item->image }}" alt="">
                        @endif
                    @endforeach
                </div>
                <div class="swiper main-slider justin-container">
                    <div class="container">
                        <div class="justin-slider main-slider-container">
                            <div class="swiper-wrapper">
                                @foreach ($liquidation_gifts as $product)
                                    <div class="swiper-slide justin-item">
                                        <div class="product">
                                            <div class="product-img">
                                                <a href="{{ route('frontend.cms.product', ['alias_detail' => $product->alias]) }}">
                                                    <img class="product-img-default" src="{{ $product->image }}"
                                                        alt="{{ $product->title }}" title="{{ $product->title }}" />
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <span class="product-type">Denim</span>
                                                <a href="{{ route('frontend.cms.product', ['alias_detail' => $product->alias]) }}" class="product-name" title="{{ $product->title }}">
                                                    {{ $product->title }}
                                                </a>
                                                @if ($product->gia != null)
                                                    <div class="product-price">
                                                        <span class="product-price_detail product-price-current">{{ formatCurrency($product->gia) }}</span>
                                                        @if ($product->giakm != null)
                                                            <span class="product-price_detail product-price-old">{{ formatCurrency($product->giakm) }}</span>
                                                        @endif
                                                    </div>
                                                @else
                                                    <div class="product-price">
                                                        <span class="product-price-current">Liên hệ</span> 
                                                    </div>
                                                @endif
                                            </div>
                                            <button class="main-btn add-cart" data-id="{{$product->id}}">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.72117 1.54131C1.33081 1.54131 0.949755 1.54596 0.568694 1.54131C0.159752 1.53666 -0.109779 1.14631 0.0435745 0.77919C0.131869 0.560777 0.303811 0.435306 0.540812 0.430659C1.10776 0.426012 1.67935 0.421365 2.24629 0.430659C2.53906 0.435306 2.75282 0.649072 2.78535 0.946485C2.8597 1.62496 2.92941 2.30808 2.99912 2.98655C3.00841 3.05626 3.0177 3.12596 3.03165 3.21426C3.106 3.21426 3.18035 3.21426 3.2547 3.21426C7.11643 3.21426 10.9781 3.21426 14.8399 3.21426C15.4347 3.21426 15.9041 3.56279 15.9877 4.11579C16.0202 4.33885 15.9831 4.57585 15.9366 4.79891C15.5137 6.79251 15.0908 8.78611 14.654 10.7797C14.4774 11.5976 13.8175 12.1181 12.981 12.1181C10.1184 12.1181 7.25119 12.1181 4.38859 12.1181C3.45918 12.1181 2.77141 11.4768 2.67847 10.5566C2.51582 8.9534 2.33923 7.35016 2.17194 5.75156C2.02788 4.38068 1.88382 3.00979 1.7444 1.63425C1.73511 1.61566 1.73046 1.59243 1.72117 1.54131ZM3.13853 4.3342C3.20823 4.97085 3.27329 5.58427 3.33835 6.20233C3.48706 7.61969 3.63577 9.03705 3.78912 10.4544C3.83094 10.8262 4.03541 11.0074 4.41647 11.0074C7.26513 11.0074 10.1091 11.0074 12.9578 11.0074C13.311 11.0074 13.5062 10.8494 13.5805 10.5009C13.9383 8.83258 14.2962 7.15963 14.654 5.49133C14.7376 5.11027 14.8166 4.72456 14.9003 4.3342C10.9735 4.3342 7.06531 4.3342 3.13853 4.3342Z"
                                                        fill="white" />
                                                    <path
                                                        d="M3.34277 14.911C3.34277 13.9909 4.09095 13.238 5.00643 13.238C5.92655 13.238 6.67938 13.9862 6.67938 14.9017C6.67938 15.8218 5.9312 16.5746 5.01572 16.5746C4.10025 16.5793 3.34277 15.8265 3.34277 14.911ZM5.00643 15.4593C5.30849 15.4593 5.56408 15.213 5.56408 14.911C5.56872 14.6089 5.32243 14.3533 5.02037 14.3487C4.71366 14.344 4.45342 14.5996 4.45342 14.9063C4.45807 15.2084 4.70901 15.4593 5.00643 15.4593Z"
                                                        fill="white" />
                                                    <path
                                                        d="M11.6893 16.5746C10.7738 16.5746 10.021 15.8218 10.021 14.9017C10.021 13.9862 10.7738 13.2334 11.6939 13.2334C12.6141 13.2334 13.3622 13.9862 13.3622 14.9063C13.3622 15.8265 12.6094 16.5746 11.6893 16.5746ZM11.6893 14.3487C11.3872 14.3487 11.1363 14.5996 11.1363 14.9017C11.1363 15.2038 11.3826 15.4547 11.6846 15.4593C11.9914 15.464 12.2516 15.2038 12.2469 14.8971C12.2469 14.595 11.9914 14.3487 11.6893 14.3487Z"
                                                        fill="white" />
                                                </svg>

                                                Thêm vào giỏ hàng
                                            </button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev main-slider-prev justin-prev">
                        <svg width="11" height="16" viewBox="0 0 11 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.34363 6.98486L6.98426 0.344238C7.44324 -0.114746 8.18543 -0.114746 8.63953 0.344238L9.74304 1.44775C10.202 1.90674 10.202 2.64893 9.74304 3.10303L5.0409 7.81494L9.74793 12.522C10.2069 12.981 10.2069 13.7231 9.74793 14.1772L8.64441 15.2856C8.18543 15.7446 7.44324 15.7446 6.98914 15.2856L0.348513 8.64502C-0.115354 8.18604 -0.115354 7.44385 0.34363 6.98486Z"
                                fill="#969595" />
                        </svg>
                    </div>
                    <div class="swiper-button-next main-slider-next justin-next">
                        <svg width="11" height="16" viewBox="0 0 11 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.74865 6.98486L3.10803 0.344238C2.64905 -0.114746 1.90686 -0.114746 1.45276 0.344238L0.34924 1.44775C-0.109744 1.90674 -0.109744 2.64893 0.34924 3.10303L5.05139 7.81494L0.344357 12.522C-0.114627 12.981 -0.114627 13.7231 0.344357 14.1772L1.44787 15.2856C1.90686 15.7446 2.64904 15.7446 3.10315 15.2856L9.74377 8.64502C10.2076 8.18604 10.2076 7.44385 9.74865 6.98486Z"
                                fill="#969595" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- END HOME JUST IN -->
