<section class="home-collection collection2" id="home-collection2">
    <div class="wrapper">
        <div class="inner">
            <div class="home-collection-head clearfix">
                <div class="home-collection-title">
                    <h2>Sản phẩm mới</h2>
                </div>
                <div class="home-collection-actions text-right medium--hide small--hide">
                    <a href="collections/san-pham-moi.html">Xem thêm
                        <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="home-collection-body clearfix">
                <div class="collection-categories-wrapper">
                    @foreach ($blocksContent as $item)
                        @if ($item->block_code == 'banner_product_new' && $item->parent_id == null)
                            <img class="hide-small" src="{{ $item->image }}" alt="">
                        @endif
                    @endforeach
                </div>
                <div class="home-collection-slider-wrapper">
                    <div id="owl-home-collection-slider2" class="owl-carousel owl-theme">
                        @foreach ($new_products as $product)
                            <div class="item">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="{{ route('frontend.cms.product', $product->alias) }}"
                                            class="img-resize">
                                            <img src="{{ asset($product->image) }}" alt="{{ $product->title }}" />
                                        </a>
                                    </div>
                                    <div class="haravan-product-reviews-badge" data-id="{{ $product->id }}"></div>

                                    <div class="product-title text-center">
                                        <h2>
                                            <a
                                                href="{{ route('frontend.cms.product', $product->alias) }}">{{ $product->title }}</a>
                                        </h2>
                                    </div>

                                    <div class="product-price text-center">
                                        <span class="current-price"> {{ $product->gia }}</span>
                                    </div>

                                    <div class="product-actions clearfix">
                                        <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                            data-handle="{{ route('frontend.cms.product', $product->alias) }}">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btnBuynow buy-now" data-id="{{ $product->id }}">
                                            Mua ngay
                                        </button>
                                        <button type="button" class="btnAddtocart add-to-cart"
                                            data-id="{{ $product->id }}">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-collection collection3" id="home-collection3">
    <div class="wrapper">
        <div class="inner">
            <div class="home-collection-banners">
                <div class="grid mg-left-0"></div>
            </div>
            <div class="home-collection-head clearfix">
                <div class="home-collection-title">
                    <h2>Sản phẩm nổi bật</h2>
                </div>
                <div class="home-collection-actions text-right medium--hide small--hide">
                    <a href="collections/hot-products.html">Xem thêm
                        <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="home-collection-body clearfix">
                <div class="collection-categories-wrapper">
                    @foreach ($blocksContent as $item)
                        @if ($item->block_code == 'banner_product_outstand' && $item->parent_id == null)
                            <img class="hide-small" src="{{ $item->image }}" alt="">
                        @endif
                    @endforeach
                </div>
                <div class="home-collection-slider-wrapper">
                    <div id="owl-home-collection-slider3" class="owl-carousel owl-theme">
                        @foreach ($feature_products as $product)
                            <div class="item">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="{{ route('frontend.cms.product', $product->alias) }}"
                                            class="img-resize">
                                            <img src="{{ asset($product->image) }}" alt="{{ $product->title }}" />
                                        </a>
                                    </div>
                                    <div class="haravan-product-reviews-badge" data-id="{{ $product->id }}"></div>

                                    <div class="product-title text-center">
                                        <h2>
                                            <a
                                                href="{{ route('frontend.cms.product', $product->alias) }}">{{ $product->title }}</a>
                                        </h2>
                                    </div>

                                    <div class="product-price text-center">
                                        <span class="current-price"> {{ $product->gia }}</span>
                                    </div>

                                    <div class="product-actions clearfix">
                                        <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                            data-handle="{{ route('frontend.cms.product', $product->alias) }}">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btnBuynow buy-now" data-id="{{ $product->id }}">
                                            Mua ngay
                                        </button>
                                        <button type="button" class="btnAddtocart add-to-cart"
                                            data-id="{{ $product->id }}">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-collection collection4" id="home-collection4">
    <div class="wrapper">
        <div class="inner">
            <div class="home-collection-banners">
                <div class="grid mg-left-0"></div>
            </div>
            <div class="home-collection-head clearfix">
                <div class="home-collection-title">
                    <h2>Sản phẩm từng thực hiện</h2>
                </div>
                <div class="home-collection-actions text-right medium--hide small--hide">
                    <a href="collections/san-pham-tung-thuc-hien.html">Xem thêm
                        <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="home-collection-body clearfix">
                <div class="collection-categories-wrapper">
                    @foreach ($blocksContent as $item)
                        @if ($item->block_code == 'banner_product_made' && $item->parent_id == null)
                            <img class="hide-small" src="{{ $item->image }}" alt="">
                        @endif
                    @endforeach
                </div>
                <div class="home-collection-slider-wrapper">
                    <div id="owl-home-collection-slider4" class="owl-carousel owl-theme">
                        @foreach ($ever_made_products as $product)
                            <div class="item">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="{{ route('frontend.cms.product', $product->alias) }}"
                                            class="img-resize">
                                            <img src="{{ asset($product->image) }}" alt="{{ $product->title }}" />
                                        </a>
                                    </div>
                                    <div class="haravan-product-reviews-badge" data-id="{{ $product->id }}"></div>

                                    <div class="product-title text-center">
                                        <h2>
                                            <a
                                                href="{{ route('frontend.cms.product', $product->alias) }}">{{ $product->title }}</a>
                                        </h2>
                                    </div>

                                    <div class="product-price text-center">
                                        <span class="current-price"> {{ $product->gia }}</span>
                                    </div>

                                    <div class="product-actions clearfix">
                                        <button type="button"
                                            class="btnQuickview quick-view medium--hide small--hide"
                                            data-handle="{{ route('frontend.cms.product', $product->alias) }}">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btnBuynow buy-now"
                                            data-id="{{ $product->id }}">
                                            Mua ngay
                                        </button>
                                        <button type="button" class="btnAddtocart add-to-cart"
                                            data-id="{{ $product->id }}">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-collection collection5" id="home-collection5">
    <div class="wrapper">
        <div class="inner">
            <div class="home-collection-banners">
                <div class="grid mg-left-0"></div>
            </div>
            <div class="home-collection-head clearfix">
                <div class="home-collection-title">
                    <h2>Quà tặng thanh lý</h2>
                </div>
                <div class="home-collection-actions text-right medium--hide small--hide">
                    <a href="collections/qua-tang-thanh-ly.html">Xem thêm
                        <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="home-collection-body clearfix">
                <div class="collection-categories-wrapper">
                    @foreach ($blocksContent as $item)
                        @if ($item->block_code == 'banner_liquidation_gifts' && $item->parent_id == null)
                            <img class="hide-small" src="{{ $item->image }}" alt="">
                        @endif
                    @endforeach
                </div>
                <div class="home-collection-slider-wrapper">
                    <div id="owl-home-collection-slider5" class="owl-carousel owl-theme">
                        @foreach ($liquidation_gifts as $product)
                            <div class="item">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="{{ route('frontend.cms.product', $product->alias) }}"
                                            class="img-resize">
                                            <img src="{{ asset($product->image) }}" alt="{{ $product->title }}" />
                                        </a>
                                    </div>
                                    <div class="haravan-product-reviews-badge" data-id="{{ $product->id }}"></div>

                                    <div class="product-title text-center">
                                        <h2>
                                            <a
                                                href="{{ route('frontend.cms.product', $product->alias) }}">{{ $product->title }}</a>
                                        </h2>
                                    </div>

                                    <div class="product-price text-center">
                                        <span class="current-price"> {{ $product->gia }}</span>
                                    </div>

                                    <div class="product-actions clearfix">
                                        <button type="button"
                                            class="btnQuickview quick-view medium--hide small--hide"
                                            data-handle="{{ route('frontend.cms.product', $product->alias) }}">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btnBuynow buy-now"
                                            data-id="{{ $product->id }}">
                                            Mua ngay
                                        </button>
                                        <button type="button" class="btnAddtocart add-to-cart"
                                            data-id="{{ $product->id }}">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
