<section class="home-collection collection2" id="home-collection2">
    <div class="wrapper">
        <div class="inner">
            <div class="home-collection-banners">
                <div class="grid mg-left-0">
                    <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($item->block_code == 'banner_ads' && $item->parent_id == null): ?>
                            <div class="grid__item large--six-twelfths pd-left0">
                                <div class="home-collection-banner-img">
                                    <a href="#"><img src="<?php echo e($item->image); ?>" alt="<?php echo e($item->title); ?>" /></a>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
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
                    <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($item->block_code == 'banner_product_new' && $item->parent_id == null): ?>
                            <img class="hide-small" src="<?php echo e($item->image); ?>" alt="">
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="home-collection-slider-wrapper">
                    <div id="owl-home-collection-slider2" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/ho-p-ruo-u-da-doi-rdwinery-265.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/z4738056927157_114c25e0097e53404e4f36ada8bd3e4c_cce2ed810fb24a41b0dc8a9333013d24_medium.jpg"
                                            alt="Hộp rượu da đôi Rdwinery HO4-265" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1050504504"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/ho-p-ruo-u-da-doi-rdwinery-265.html">Hộp rượu da đôi
                                            Rdwinery HO4-265</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 300,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/ho-p-ruo-u-da-doi-rdwinery-265">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1113370921">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1113370921">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/ao-phong-01.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_474437c5c9b04ad58abded6d213b68d2_medium.jpg"
                                            alt="Áo phông 01" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1012654080"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/ao-phong-01.html">Áo phông 01</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/ao-phong-01">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1024634119">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1024634119">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/moc-khoa-cao-su-07.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_745602fcd6cd42b8a67170d91c7bb14b_medium.jpg"
                                            alt="Móc khóa cao su 07" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1012740999"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/moc-khoa-cao-su-07.html">Móc khóa cao su 07</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/moc-khoa-cao-su-07">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1024807704">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1024807704">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/mu-luoi-trai-04.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_9a1ad4409555430d860f19414117e49c_medium.jpg"
                                            alt="Mũ lưỡi trai 04" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1012768337"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/mu-luoi-trai-04.html">Mũ lưỡi trai 04</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/mu-luoi-trai-04">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1024848097">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1024848097">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/bong-bay-02.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_c2590593e5334f3bb6e4ee3ac35513d2_medium.jpg"
                                            alt="Bóng bay 02" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1013511839"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/bong-bay-02.html">Bóng bay 02</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 632₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/bong-bay-02">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1025924280">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1025924280">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/quat-cam-tay-19.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_dc7eb759589645b6b820733cd1d3afab_medium.jpg"
                                            alt="Quạt nhựa xòe-019" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1012850314"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/quat-cam-tay-19.html">Quạt nhựa xòe-019</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/quat-cam-tay-19">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1024969589">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1024969589">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/hop-ruou-da-043.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_e8fecb4331f94de0afbcc853804f1c3b_medium.jpg"
                                            alt="Hộp rượu da đôi-043" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1013606333"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/hop-ruou-da-043.html">Hộp rượu da đôi-043</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 228,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/hop-ruou-da-043">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1026186287">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1026186287">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/hop-ruou-giay-102.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_00d408287e264feca29c37133b356bb7_medium.jpg"
                                            alt="Túi đựng hộp rượu đơn-102" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1013609461"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/hop-ruou-giay-102.html">Túi đựng hộp rượu đơn-102</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 21,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/hop-ruou-giay-102">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1026191823">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1026191823">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/qua-tang-ma-vang-21.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_f8f77083dac04063b286f55c24ff7aba_medium.jpg"
                                            alt="Quà tặng mạ vàng 21" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1012821959"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/qua-tang-ma-vang-21.html">Quà tặng mạ vàng 21</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/qua-tang-ma-vang-21">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1024930748">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1024930748">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
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
                    <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($item->block_code == 'banner_product_outstand' && $item->parent_id == null): ?>
                        <img class="hide-small" src="<?php echo e($item->image); ?>" alt="">
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="home-collection-slider-wrapper">
                    <div id="owl-home-collection-slider3" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/binh-thuy-tinh-tu-dien.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/z4780091807336_b94fa9a74a25bfe1b957c1ae53d68069_8eff102a42df43669e054cf8b7ead524_medium.jpg"
                                            alt="Bình thủy tinh tứ diện" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1050798368"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/binh-thuy-tinh-tu-dien.html">Bình thủy tinh tứ diện</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 5,500₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/binh-thuy-tinh-tu-dien">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1114160003">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1114160003">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/binh-thuy-tinh-luc-nang-bi10-001.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/z4779256193387_6511c070377f7990be43a1ceba6cef56_c8382e38950044f7b99e06f51018a41c_medium.jpg"
                                            alt="Bình thủy tinh lục năng" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1050793994"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/binh-thuy-tinh-luc-nang-bi10-001.html">Bình thủy tinh lục
                                            năng</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 9,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/binh-thuy-tinh-luc-nang-bi10-001">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1114148908">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1114148908">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/bo-2-ly-thuy-tinh-350ml.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/z4779224520479_2d5da3c5b17035fab3e00b670322e1e4_d1dbb980ace14c97a2235b2654ec7f55_medium.jpg"
                                            alt="Bộ 2 ly thủy tinh 350ML MS BO3-095" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1050793867"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/bo-2-ly-thuy-tinh-350ml.html">Bộ 2 ly thủy tinh 350ML MS
                                            BO3-095</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 108,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/bo-2-ly-thuy-tinh-350ml">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1114148101">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1114148101">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/bo-6-ly-nhua-cao-cap-400ml-bo3-097.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/z4779148972990_24e30faa8eab03475159887ecda355a5_162a7a42b3c143db821e76aaf0ad14ad_medium.jpg"
                                            alt="BỘ 6 LY NHỰA CAO CẤP 400ML BO3-097" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1050793336"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/bo-6-ly-nhua-cao-cap-400ml-bo3-097.html">BỘ 6 LY NHỰA CAO CẤP
                                            400ML BO3-097</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 388,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/bo-6-ly-nhua-cao-cap-400ml-bo3-097">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1114144924">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1114144924">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/bo-6-ly-240ml-bo3-096.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/z4779142382834_53cfda1c769078a15bb80d30d7c06768_3d06190020f1476398fad941df83f126_medium.jpg"
                                            alt="BỘ 6 LY NHỰA CAO CẤP 240ML BO3-096" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1050793215"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/bo-6-ly-240ml-bo3-096.html">BỘ 6 LY NHỰA CAO CẤP 240ML
                                            BO3-096</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 355,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/bo-6-ly-240ml-bo3-096">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1114144425">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1114144425">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/loc-va-tao-khi-ruou-vang-ma-sp-bo3-086.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/z4778914111995_efecb68fb863126067c2061db259df48_058565b9cd7448ad8bd9fd2b2f5eb6e4_medium.jpg"
                                            alt="LỌC VÀ TẠO KHÍ RƯỢU VANG - Mã sp : BO3-086" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1050792030"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/loc-va-tao-khi-ruou-vang-ma-sp-bo3-086.html">LỌC VÀ TẠO KHÍ
                                            RƯỢU VANG - Mã sp : BO3-086</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 140,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/loc-va-tao-khi-ruou-vang-ma-sp-bo3-086">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1114141679">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1114141679">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/thap-loc-ruou-vang-bo3-032.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/z4778897249818_01effe69a4aed2bc7ade880514eb57d1_4345bb55df704474b6367ce66d1a3f94_medium.jpg"
                                            alt="THÁP LỌC RƯỢU VANG BO3-032" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1050791987"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/thap-loc-ruou-vang-bo3-032.html">THÁP LỌC RƯỢU VANG
                                            BO3-032</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 540,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/thap-loc-ruou-vang-bo3-032">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1114141589">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1114141589">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/nhan-ban-tu-hop-ruou-da-don-ms-286.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/z4731254227801_c0c36050607cd9ba0474f4bc34520365_992a64f8a7c94fa59728c5c9b20e8591_medium.jpg"
                                            alt="Hộp rượu da sơn mài đôi HO4-258-M03" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1050442938"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/nhan-ban-tu-hop-ruou-da-don-ms-286.html">Hộp rượu da sơn mài
                                            đôi HO4-258-M03</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 193,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/nhan-ban-tu-hop-ruou-da-don-ms-286">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1113186645">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1113186645">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/hop-ruou-da-don-ms-111.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/z4716206770626_cc98547fe0df99f5afff202b568a10ba_676170155de14ce5abff87c38cef9fd6_medium.jpg"
                                            alt="Hộp rượu da đơn MS 111" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1050240701"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/hop-ruou-da-don-ms-111.html">Hộp rượu da đơn MS 111</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 170,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/hop-ruou-da-don-ms-111">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1112721682">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1112721682">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/nhan-ban-tu-hop-ruou-da-don-009.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/z4715849970542_d2c2fb9d85930742e9b710ceabeeff55_763d84955b784649bf57761e8ba13846_medium.jpg"
                                            alt="Hộp rượu da đơn MS 285" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1050238953"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/nhan-ban-tu-hop-ruou-da-don-009.html">Hộp rượu da đơn MS
                                            285</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 167,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/nhan-ban-tu-hop-ruou-da-don-009">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1112717166">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1112717166">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/ly-ruou-vang-074.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/ly-ruou-vang-074_94f25f155b0942bebda78efd7806350e_medium.png"
                                            alt="Bộ ly rượu vang pha lê 6 ly 074" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1033450273"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/ly-ruou-vang-074.html">Bộ ly rượu vang pha lê 6 ly 074</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/ly-ruou-vang-074">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1073642708">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1073642708">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/ly-ruou-vang-075.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/bo3-075-6-ly_2e13276252a943a48842c68953ef6e15_medium.jpg"
                                            alt="Bộ ly rượu vang pha lê 6 ly 075" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1033450324"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/ly-ruou-vang-075.html">Bộ ly rượu vang pha lê 6 ly 075</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 526,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/ly-ruou-vang-075">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1073643043">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1073643043">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/ly-ruou-vang-077.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/bo3-077-6-ly_53bd8869fd8440daba8c647a0288205e_medium.jpg"
                                            alt="Bộ 6 ly rượu vang pha lê 077 - 380ml" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1033450641"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/ly-ruou-vang-077.html">Bộ 6 ly rượu vang pha lê 077 -
                                            380ml</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 305,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/ly-ruou-vang-077">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1073644138">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1073644138">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/ly-ruou-vang-350ml-023.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/bo3-023-6-ly_9a53b7f84c5e496eb7c0e0362f935ebb_medium.jpg"
                                            alt="Bộ 6 ly rượu vang pha lê 023 - 350ml" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1032621588"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/ly-ruou-vang-350ml-023.html">Bộ 6 ly rượu vang pha lê 023 -
                                            350ml</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/ly-ruou-vang-350ml-023">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1071134667">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1071134667">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/ly-ruou-vang-350ml-070.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/bo3-070-6-ly_cb7f612646db487db1e149c2b1128703_medium.jpg"
                                            alt="Bộ 6 ly rượu vang pha lê 070 - 350ml" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1032621604"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/ly-ruou-vang-350ml-070.html">Bộ 6 ly rượu vang pha lê 070 -
                                            350ml</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 380,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/ly-ruou-vang-350ml-070">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1071134697">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1071134697">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/decander-pha-le-064.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/bo3-064_3f2a9b7e307e47fb88395c36fb8b2656_medium.jpg"
                                            alt="Decanter pha lê 064 (Có sẵn)" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1033147992"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/decander-pha-le-064.html">Decanter pha lê 064 (Có sẵn)</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 776,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/decander-pha-le-064">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1072775033">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1072775033">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/decanter-pha-le-044-m02.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/bo3-044-m02_ebf83c2c193a4933a57bcc5c6be7518f_medium.jpg"
                                            alt="Decanter pha lê 044-M02 (Có sẵn)" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1032621653"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/decanter-pha-le-044-m02.html">Decanter pha lê 044-M02 (Có
                                            sẵn)</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 340,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/decanter-pha-le-044-m02">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1071134791">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1071134791">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/decanter-pha-le-044-m05.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/bo3-044-m05_995157e212f84f318fcab210faf390ee_medium.jpg"
                                            alt="Decanter pha lê 044-M05 (Có sẵn)" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1032621674"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/decanter-pha-le-044-m05.html">Decanter pha lê 044-M05 (Có
                                            sẵn)</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 416,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/decanter-pha-le-044-m05">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1071134838">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1071134838">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/decanter-pha-le-1100ml-067.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/decanter-pha-le-067_f191a128e5cb41a2a662b5badafff8c4_medium.jpg"
                                            alt="Decanter pha lê 067 (Có sẵn)" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1032636682"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/decanter-pha-le-1100ml-067.html">Decanter pha lê 067 (Có
                                            sẵn)</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/decanter-pha-le-1100ml-067">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1071197272">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1071197272">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/decanter-pha-le-1500ml-057.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/decanter-pha-le-057_56354d9a0db54979bdd81c57371e3068_medium.jpg"
                                            alt="Decanter pha lê 057 (Có sẵn)" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1032651882"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/decanter-pha-le-1500ml-057.html">Decanter pha lê 057 (Có
                                            sẵn)</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/decanter-pha-le-1500ml-057">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1071222354">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1071222354">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/bang-chung-nhan-03.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_55ddff972b8847729f646f4bb57e9d93_medium.jpg"
                                            alt="Bằng chứng nhận 03" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1012659438"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/bang-chung-nhan-03.html">Bằng chứng nhận 03</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/bang-chung-nhan-03">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1024659421">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1024659421">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/so-dung-namecard-05.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_6252a7a1b7e847f099cdc856468cf637_medium.jpg"
                                            alt="Sổ đựng card visit 05" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1013132213"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/so-dung-namecard-05.html">Sổ đựng card visit 05</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/so-dung-namecard-05">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1025365856">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1025365856">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/huy-hieu-25.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_baf9bf16120246a091566920ef2be5ac_medium.jpg"
                                            alt="Huy hiệu 25" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1012721677"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/huy-hieu-25.html">Huy hiệu 25</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 35,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/huy-hieu-25">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1029464888">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1029464888">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/sac-du-phong-11.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_c6188a0ef0c24476ae627b5c31278718_medium.jpg"
                                            alt="Sạc dự phòng 11" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1012815145"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/sac-du-phong-11.html">Sạc dự phòng 11</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/sac-du-phong-11">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1024919733">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1024919733">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/hop-ruou-giay-051.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_a41c0950c9ba479ab0978008ebb85a0a_medium.jpg"
                                            alt="Hộp rượu đơn bằng giấy -051" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1013609450"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/hop-ruou-giay-051.html">Hộp rượu đơn bằng giấy -051</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 90,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/hop-ruou-giay-051">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1026191812">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1026191812">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/coc-thuy-tinh-01.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_bc44bc85104440228d5d72f1cb69e303_medium.jpg"
                                            alt="Cốc thủy tinh 01" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1012671537"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/coc-thuy-tinh-01.html">Cốc thủy tinh 01</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/coc-thuy-tinh-01">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1024689577">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1024689577">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/binh-giu-nhiet-05.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_e53a447c631149dfa1120dfbabe016b0_medium.jpg"
                                            alt="Bình giữ nhiệt 05" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1013467707"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/binh-giu-nhiet-05.html">Bình giữ nhiệt 05</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/binh-giu-nhiet-05">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1025870410">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1025870410">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/coc-su-14.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_7327931207ed4a6faa3371c0317f9254_medium.jpg"
                                            alt="Cốc sứ 14" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1012660951"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/coc-su-14.html">Cốc sứ 14</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/coc-su-14">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1024664576">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1024664576">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/bien-ten-nhan-vien-02.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_96f9a6e538594878bbfe752e608ba1bf_medium.jpg"
                                            alt="Bảng tên nhân viên 02" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1013465549"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/bien-ten-nhan-vien-02.html">Bảng tên nhân viên 02</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/bien-ten-nhan-vien-02">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1025867023">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1025867023">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/quat-cam-tay-02.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_d51c18baa61e49ef99df71f32995ad54_medium.jpg"
                                            alt="Quạt nhựa PP cán đinh tán-002" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1012850297"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/quat-cam-tay-02.html">Quạt nhựa PP cán đinh tán-002</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 10,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/quat-cam-tay-02">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1024969572">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1024969572">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/hop-ruou-da-009.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_5f09c974b89a42078d9693ddbd5783fa_medium.jpg"
                                            alt="Hộp rượu da đơn-009" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1013606315"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/hop-ruou-da-009.html">Hộp rượu da đơn-009</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 137,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/hop-ruou-da-009">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1026186263">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1026186263">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/vong-tay-cao-su-03.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_1658ef14271441f88c7ae7eb3bd346bd_medium.jpg"
                                            alt="Vòng tay cao su VO2-003 dập nổi" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1013624833"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/vong-tay-cao-su-03.html">Vòng tay cao su VO2-003 dập nổi</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 17,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/vong-tay-cao-su-03">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1026218379">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1026218379">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-tags text-center">-55%</div>

                                <div class="product-img">
                                    <a href="products/coc-gap-nhua.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/coc-xep-nhua-002_dd3e91adc219485fa84b88ed4634d329_medium.jpg"
                                            alt="Cốc gấp nhựa 002 (Có sẵn)" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1012614819"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/coc-gap-nhua.html">Cốc gấp nhựa 002 (Có sẵn)</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 9,000₫</span>

                                    <span class="original-price"><s>20,000₫</s></span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/coc-gap-nhua">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1024537049">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1024537049">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
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
                    <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($item->block_code == 'banner_product_made' && $item->parent_id == null): ?>
                        <img class="hide-small" src="<?php echo e($item->image); ?>" alt="">
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="home-collection-slider-wrapper">
                    <div id="owl-home-collection-slider4" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/vong-tay-cao-su-tre-em-vo2-001.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/z4748597201028_a7c823883aa147ac789700b784583b73_f5d9785d682a4a60943fa60b40cd69bb_medium.jpg"
                                            alt="Vòng tay cao su trẻ em  VO2-001" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1050627614"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/vong-tay-cao-su-tre-em-vo2-001.html">Vòng tay cao su trẻ em
                                            VO2-001</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 2,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/vong-tay-cao-su-tre-em-vo2-001">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1113709000">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1113709000">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/vong-tay-cao-su-01.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_ed8b8f7ecb0a436a80051cdcc1cda8ed_medium.jpg"
                                            alt="Vòng tay cao su VO2-001" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1013624831"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/vong-tay-cao-su-01.html">Vòng tay cao su VO2-001</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 2,200₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/vong-tay-cao-su-01">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1026440329">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1026440329">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/vi-dung-ho-chieu-02.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_5a1547045d3e4aa684545ac33b79aa22_medium.jpg"
                                            alt="Ví đựng hộ chiếu 02" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1013445969"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/vi-dung-ho-chieu-02.html">Ví đựng hộ chiếu 02</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/vi-dung-ho-chieu-02">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1025843910">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1025843910">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/binh-nuoc-the-thao-07.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_f11eaaac60bd45c7a7cf6aa703d193d5_medium.jpg"
                                            alt="Bình nước sport 07" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1013481437"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/binh-nuoc-the-thao-07.html">Bình nước sport 07</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/binh-nuoc-the-thao-07">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1025886544">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1025886544">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/tui-sinh-thai-02.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_187a1ade5343403ea7359c974c9f62ff_medium.jpg"
                                            alt="Túi sinh thái 02" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1013401060"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/tui-sinh-thai-02.html">Túi sinh thái 02</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/tui-sinh-thai-02">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1025759858">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1025759858">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/dong-ho-treo-tuong-da-quang-01.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/do3-007_medium.jpg"
                                            alt="Đồng hồ treo tường dạ quang 01" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1016569513"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/dong-ho-treo-tuong-da-quang-01.html">Đồng hồ treo tường dạ
                                            quang 01</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/dong-ho-treo-tuong-da-quang-01">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1031572137">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1031572137">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/but-chi-23.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_af30435b68884ab8b5ad90291b35f7d9_medium.jpg"
                                            alt="Bút chì 23" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1013523410"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/but-chi-23.html">Bút chì 23</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 4,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/but-chi-23">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1029466007">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1029466007">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/o-quang-cao-20.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_ce2cdc69bbec4615819bee30dabe31de_medium.jpg"
                                            alt="Ô THÔNG MINH - MS 19" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1012802929"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/o-quang-cao-20.html">Ô THÔNG MINH - MS 19</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 140,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/o-quang-cao-20">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1024905016">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1024905016">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/ao-phong-02.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_cc49c07bd8cd43b2ac9b4b7ae8ffb28c_medium.jpg"
                                            alt="Áo phông 02" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1012654081"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/ao-phong-02.html">Áo phông 02</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/ao-phong-02">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1024634120">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1024634120">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
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
                    <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($item->block_code == 'banner_liquidation_gifts' && $item->parent_id == null): ?>
                        <img class="hide-small" src="<?php echo e($item->image); ?>" alt="">
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="home-collection-slider-wrapper">
                    <div id="owl-home-collection-slider5" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/bong-bay-mau-cam-size-25-30cm.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/bong-bay_a56d167004f140f1a21c86859b9e9cad_medium.jpg"
                                            alt="Bóng bay màu cam size 25-30cm" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1034131478"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/bong-bay-mau-cam-size-25-30cm.html">Bóng bay màu cam size
                                            25-30cm</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/bong-bay-mau-cam-size-25-30cm">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1075223660">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1075223660">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/bong-bay-mau-vang-size-25-30cm.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/bong-bay-1_ef5ec19d1596431fb225c78f7f0edbcf_medium.jpg"
                                            alt="Bóng bay màu vàng size 25-30cm" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1034131525"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/bong-bay-mau-vang-size-25-30cm.html">Bóng bay màu vàng size
                                            25-30cm</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/bong-bay-mau-vang-size-25-30cm">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1075223746">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1075223746">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/bong-bay-mau-xanh-tim-size-30cm.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/bong-bay-2_31e51ff306544e64a27f231b6e666eb2_medium.jpg"
                                            alt="Bóng bay màu xanh tím size 30cm" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1034131550"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/bong-bay-mau-xanh-tim-size-30cm.html">Bóng bay màu xanh tím
                                            size 30cm</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/bong-bay-mau-xanh-tim-size-30cm">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1075223781">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1075223781">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-tags text-center">-100%</div>

                                <div class="product-img">
                                    <a href="products/vi-namecard-da-that-03.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_48deaccf1b2c4c58babfec37f076353b_medium.jpg"
                                            alt="Bóp đựng Name Card da thật 03" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1012677564"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/vi-namecard-da-that-03.html">Bóp đựng Name Card da thật
                                            03</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>

                                    <span class="original-price"><s>300,000₫</s></span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/vi-namecard-da-that-03">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1024702951">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1024702951">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/but-bi-01.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_66e30189f70f4190a9d27fad12323e38_medium.jpg"
                                            alt="Bút bi 01" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1013503592"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/but-bi-01.html">Bút bi 01</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 3,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/but-bi-01">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1025915218">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1025915218">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/but-bi-03.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_2c3116115e99483f86ed552a75cc8075_medium.jpg"
                                            alt="Bút bi 03" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1013503594"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/but-bi-03.html">Bút bi 03</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/but-bi-03">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1025915220">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1025915220">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/but-bi-04.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_32b974a500044d5d86628a73a5f0d519_medium.jpg"
                                            alt="Bút bi 04" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1013503596"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/but-bi-04.html">Bút bi 04</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 2,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/but-bi-04">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1025915222">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1025915222">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/but-bi-05.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_96c3e2a9d7e744a7851916e4c17f2d10_medium.jpg"
                                            alt="Bút bi 05" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1013503597"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/but-bi-05.html">Bút bi 05</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 2,500₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/but-bi-05">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1025915223">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1025915223">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/but-bi-07.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_cd796d92eff74f92b4afe467bbe237a7_medium.jpg"
                                            alt="Bút bi 07" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1013503601"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/but-bi-07.html">Bút bi 07</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/but-bi-07">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1025915227">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1025915227">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/but-bi-111.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/bu1-111_medium.jpg"
                                            alt="Bút bi 111" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1013503731"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/but-bi-111.html">Bút bi 111</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 8,200₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/but-bi-111">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1025915357">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1025915357">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/but-bi-123.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_fb13588fac6e491f8662f563d1ed9b27_medium.jpg"
                                            alt="Bút bi 123" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1018767448"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/but-bi-123.html">Bút bi 123</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 1,800₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/but-bi-123">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1037196218">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1037196218">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/but-bi-124.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_9db52470b758413dad81a648a756cc88_medium.jpg"
                                            alt="Bút bi 124" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1018767449"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/but-bi-124.html">Bút bi 124</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 4,600₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/but-bi-124">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1037196219">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1037196219">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/but-bi-125.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_ade698d912fb4630aeff334b7b7b7297_medium.jpg"
                                            alt="Bút bi 125" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1018767450"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/but-bi-125.html">Bút bi 125</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 2,600₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/but-bi-125">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1037196220">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1037196220">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/but-bi-128.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/bu1-128_81ec02282bce44d186ac700e16b426db_medium.jpg"
                                            alt="Bút bi 128" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1033146598"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/but-bi-128.html">Bút bi 128</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 3,100₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/but-bi-128">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1072764074">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1072764074">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/but-bi-131.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/bu1-131_b16d1b4007004264a81b66160a493d9a_medium.jpg"
                                            alt="Bút bi 131" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1033146644"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/but-bi-131.html">Bút bi 131</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 4,600₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/but-bi-131">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1072765059">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1072765059">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/but-bi-144.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/z4818969939268_ee2a1067be558f370f6348ebccd6f968_792050b46c8e437b94b26aceab70d10f_medium.jpg"
                                            alt="Bút bi 144" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1050957397"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/but-bi-144.html">Bút bi 144</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 13,200₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/but-bi-144">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1114601951">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1114601951">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/but-bi-145.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/z4819028840014_0c6656633f50ecc7cb95abebcc3ade8d_35d047f933d442f39f0ecec020312cc5_medium.jpg"
                                            alt="Bút bi 145" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1050957443"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/but-bi-145.html">Bút bi 145</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 11,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/but-bi-145">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1114602082">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1114602082">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/but-chi-31.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_35df13e6fe2f4c56a53b96db13bfd774_medium.jpg"
                                            alt="Bút chì 31" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1018766465"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/but-chi-31.html">Bút chì 31</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 2,800₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/but-chi-31">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1114896605">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1114896605">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/but-chi-32.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_f2a8d235991b42ffa5cbd95f85495f3a_medium.jpg"
                                            alt="Bút chì 32" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1018766466"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/but-chi-32.html">Bút chì 32</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 2,800₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/but-chi-32">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1114896606">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1114896606">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/but-chi-33.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_602c38dfc11d48c991fb8c9c6edea3f4_medium.jpg"
                                            alt="Bút chì 33" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1018766467"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/but-chi-33.html">Bút chì 33</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 2,800₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/but-chi-33">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1114896607">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1114896607">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/but-chi-34.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_3ebc26a941d34759804562fe59eee094_medium.jpg"
                                            alt="Bút chì 34" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1018766468"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/but-chi-34.html">Bút chì 34</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 2,800₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/but-chi-34">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1114896608">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1114896608">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/but-chi-35.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_f4762a6f9f0c4dc8ba3b60d72fcb8ac7_medium.jpg"
                                            alt="Bút chì 35" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1018766469"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/but-chi-35.html">Bút chì 35</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 2,500₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/but-chi-35">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1114896609">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1114896609">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/but-chi-36.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_d8df8b24304d48bc9f8f0de1dbf83921_medium.jpg"
                                            alt="Bút chì 36" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1018766470"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/but-chi-36.html">Bút chì 36</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 2,800₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/but-chi-36">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1114896610">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1114896610">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/hop-namecard-da-04.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_0776f518ca45467f9dd72ef871385136_medium.jpg"
                                            alt="Hộp Card da HO1-004" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1012677565"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/hop-namecard-da-04.html">Hộp Card da HO1-004</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 32,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/hop-namecard-da-04">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1114685659">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1114685659">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/hop-namecard-da-09.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_048a92ef08574c948a8bc2ea056091f9_medium.jpg"
                                            alt="Hộp Card da HO1-009" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1012677570"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/hop-namecard-da-09.html">Hộp Card da HO1-009</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 24,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/hop-namecard-da-09">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1114685682">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1114685682">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/hop-namecard-da-12.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_399120eaedcb4cd9a721e345f629849a_medium.jpg"
                                            alt="Hộp Card da HO1-012" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1012677574"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/hop-namecard-da-12.html">Hộp Card da HO1-012</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 28,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/hop-namecard-da-12">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1114685688">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1114685688">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/hop-namecard-da-15.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_55152caf32f943258a3384e190f22288_medium.jpg"
                                            alt="Hộp Card da HO1-015" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1012677578"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/hop-namecard-da-15.html">Hộp Card da HO1-015</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 33,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/hop-namecard-da-15">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1114685707">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1114685707">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/hop-namecard-da-25.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/ho1-025_medium.jpg"
                                            alt="Hộp Card da HO1-025" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1013671588"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/hop-namecard-da-25.html">Hộp Card da HO1-025</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 27,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/hop-namecard-da-25">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1114685728">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1114685728">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/hop-namecard-da-26.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/ho1-026_medium.jpg"
                                            alt="Hộp Card da HO1-026" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1013925215"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/hop-namecard-da-26.html">Hộp Card da HO1-026</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 28,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/hop-namecard-da-26">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1114685740">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1114685740">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/hop-namecard-da-01.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_fb2a7d7b1a9d4d429b9f47de4efccff7_medium.jpg"
                                            alt="Hộp Card HO1-001" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1012677562"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/hop-namecard-da-01.html">Hộp Card HO1-001</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> 28,000₫</span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/hop-namecard-da-01">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1114685631">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1114685631">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/hop-namecard-kim-loai-06.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/upload_a3d6fc483f344698a0819a226a0587e8_medium.jpg"
                                            alt="Hộp Card kim loại HO1-006" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1012677567"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/hop-namecard-kim-loai-06.html">Hộp Card kim loại HO1-006</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/hop-namecard-kim-loai-06">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1024702954">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1024702954">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/hop-dung-do-trong-o-to-001.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/hop-dung-do-o-to-001_8132a4cb30ef4c87a998036471edfd64_medium.jpg"
                                            alt="Hộp đựng đồ trong ô tô 001" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1030960636"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/hop-dung-do-trong-o-to-001.html">Hộp đựng đồ trong ô tô
                                            001</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/hop-dung-do-trong-o-to-001">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1067889087">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1067889087">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/hop-dung-do-trong-o-to-002.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/ho13-002_70a108231354417d9c6a0638a66d234d_medium.jpg"
                                            alt="Hộp đựng đồ trong ô tô 002" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1034131379"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/hop-dung-do-trong-o-to-002.html">Hộp đựng đồ trong ô tô
                                            002</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/hop-dung-do-trong-o-to-002">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1075223441">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1075223441">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/hop-dung-trang-suc-001.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/hop-dung-trang-suc-001_364c7b9070584510ae52de00e3b0bf5a_medium.jpg"
                                            alt="Hộp đựng trang sức 001" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1030960567"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/hop-dung-trang-suc-001.html">Hộp đựng trang sức 001</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/hop-dung-trang-suc-001">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1067888824">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1067888824">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="products/vi-dung-the-001.html" class="img-resize">
                                        <img src="../product.hstatic.net/1000252872/product/vi-dung-the-001_a951fd9dd0a9412e960b03f124c63f32_medium.jpg"
                                            alt="Ví đựng thẻ 001" />
                                    </a>
                                </div>
                                <div class="haravan-product-reviews-badge" data-id="1030960771"></div>

                                <div class="product-title text-center">
                                    <h2>
                                        <a href="products/vi-dung-the-001.html">Ví đựng thẻ 001</a>
                                    </h2>
                                </div>

                                <div class="product-price text-center">
                                    <span class="current-price"> Liên hệ </span>
                                </div>

                                <div class="product-actions clearfix">
                                    <button type="button" class="btnQuickview quick-view medium--hide small--hide"
                                        data-handle="/products/vi-dung-the-001">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btnBuynow buy-now" data-id="1067889360">
                                        Mua ngay
                                    </button>
                                    <button type="button" class="btnAddtocart add-to-cart" data-id="1067889360">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH F:\NEWWAY\emogift\resources\views/frontend/element/home-collection.blade.php ENDPATH**/ ?>