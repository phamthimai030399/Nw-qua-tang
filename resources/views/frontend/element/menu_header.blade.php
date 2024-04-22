<section id="megamenu-mainbanners" class="index_mg_bottom">
    <div class="megamenu-wrapper1 medium--hide small--hide">
        <div class="wrapper">
            <div class="inner">
                <div class="grid mg-left-0">
                    <div class="grid__item large--three-twelfths pd-left0 width285">
                        <div class="megamenu-wrapper">
                            <div class="megamenu-head text-center">
                                <span><i class="fa fa-bars" aria-hidden="true"></i> Danh mục
                                    sản phẩm</span>
                            </div>
                            <div class="megamenu-body">
                                <ul class="no-bullets">
                                    @foreach ($taxonomy_all as $taxonomy)
                                        @if (empty($taxonomy->parent_id) && $taxonomy->taxonomy == 'san-pham')
                                            <li class="dropdown-menu">
                                                <a
                                                    href="{{ route('frontend.cms.product_category', $taxonomy->url_part) }}">
                                                    <img src="{{ $taxonomy->json_params->image }}"
                                                        alt="{{ $taxonomy->title }}" />

                                                    {{ $taxonomy->title }}
                                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                </a>

                                                <ul class="no-bullets">
                                                    @foreach ($taxonomy_all as $taxonomy_child)
                                                        @if ($taxonomy_child->parent_id == $taxonomy->id)
                                                            <li class="">
                                                                <a
                                                                    href="{{ route('frontend.cms.product_category', $taxonomy_child->url_part) }}">{{ $taxonomy_child->title }}
                                                                </a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endif
                                    @endforeach



                                </ul>
                                <span class="readmore-menu">Xem thêm</span>
                                <script>
                                    $(".readmore-menu").click(function() {
                                        $(".item-menu-readmore").slideToggle();
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="grid__item large--nine-twelfths pd-left0 width-remain">
                        <div class="mini-navbar">
                            <ul class="no-bullets clearfix">
                                <li class="has-submenu">
                                    <a href="index.html">TRANG CHỦ</a>
                                </li>

                                <li class="has-submenu">
                                    <a href="pages/about-us.html">GIỚI THIỆU</a>
                                </li>

                                <li class="">
                                    <a href="collections/all.html">SẢN PHẨM QUÀ TẶNG</a>

                                    <div class="grid megamenu-main">
                                        <div class="grid__item large--four-twelfths">
                                            <h3 class="title-sub-menu">Quà tặng khuyến mãi</h3>
                                            <ul>
                                                <li>
                                                    <a href="collections/o-ao-mu.html">Ô - Áo - Mũ - Thẻ hành lý</a>
                                                </li>

                                                <li>
                                                    <a href="collections/gat-tan-bat-lua-lot-ly.html">Gạt tàn - Bật lửa
                                                        – Lót ly</a>
                                                </li>

                                                <li>
                                                    <a href="collections/but-so.html">Bút – Sổ - Hộp namecard</a>
                                                </li>

                                                <li>
                                                    <a href="collections/balo-tui-vi-cap.html">Balo – Túi – Ví –
                                                        Cặp</a>
                                                </li>

                                                <li>
                                                    <a href="collections/coc-binh-giu-nhiet-binh-nuoc-the-thao.html">Cốc
                                                        – Bình giữ nhiệt – Bình nước</a>
                                                </li>

                                                <li>
                                                    <a href="collections/qua-tang-dong-ho.html">Quà tặng đồng hồ</a>
                                                </li>

                                                <li>
                                                    <a href="collections/bo-san-pham-bom-hoi.html">Bộ sản phẩm bơm
                                                        hơi</a>
                                                </li>

                                                <li>
                                                    <a href="collections/vong-deo-tay-quat-cam-tay.html">Vòng tay –
                                                        Quạt – Móc khóa</a>
                                                </li>

                                                <li>
                                                    <a href="collections/qua-tang-it.html">Quà tặng IT</a>
                                                </li>

                                                <li>
                                                    <a href="collections/qua-tang-danh-cho-tre-em.html">Quà tặng dành
                                                        cho trẻ em</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="grid__item large--four-twelfths">
                                            <h3 class="title-sub-menu">Quà tặng phần thưởng</h3>
                                            <ul>
                                                <li>
                                                    <a href="collections/huy-hieu.html">Huy hiệu</a>
                                                </li>

                                                <li>
                                                    <a href="collections/qua-tang-de-ban-cao-cap.html">Biểu trưng để
                                                        bàn</a>
                                                </li>

                                                <li>
                                                    <a href="collections/bang-chung-nhan.html">Bằng chứng nhận</a>
                                                </li>

                                                <li>
                                                    <a href="collections/cup-bieu-trung-pha-le.html">Cúp pha lê</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="grid__item large--four-twelfths">
                                            <h3 class="title-sub-menu">Quà tặng đối ngoại</h3>
                                            <ul>
                                                <li>
                                                    <a href="collections/vi-dung-namecard-da.html">Bút – Sổ - Hộp
                                                        namecard</a>
                                                </li>

                                                <li>
                                                    <a href="collections/bo-qua-tang-bo-giftset.html">Bộ quà tặng – Bộ
                                                        giftset</a>
                                                </li>

                                                <li>
                                                    <a href="collections/qua-tang-cao-cap.html">Quà tặng cao cấp</a>
                                                </li>

                                                <li>
                                                    <a href="collections/qua-tet.html">Quà tết</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="has-submenu">
                                    <a href="collections/san-pham-co-san.html">SẢN PHẨM CÓ SẴN</a>

                                    <ul class="no-bullets clearfix submenu-1">
                                        <li>
                                            <a href="collections/hop-dung-ruou.html">Hộp đựng rượu, PKR</a>
                                        </li>

                                        <li>
                                            <a href="collections/hop-namecard-co-san.html">Hộp namecard</a>
                                        </li>

                                        <li>
                                            <a href="collections/goi-hoi-chu-u.html">Gối hơi</a>
                                        </li>

                                        <li>
                                            <a href="collections/coc-gap-co-san.html">Cốc gấp - Cốc xếp</a>
                                        </li>

                                        <li>
                                            <a href="collections/binh-giu-nhiet-binh-nuoc-co-san.html">Bình GN, Bình
                                                nước</a>
                                        </li>

                                        <li>
                                            <a href="collections/but-ky-but-bi-co-san.html">Bút ký, Bút bi</a>
                                        </li>

                                        <li>
                                            <a href="collections/bien-ten-huy-hieu-co-san.html">Biển tên, Huy hiệu</a>
                                        </li>

                                        <li>
                                            <a href="collections/san-pham-khac-co-san.html">Sản phẩm khác</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="blogs/tu-van-san-pham.html">TƯ VẤN SẢN PHẨM</a>
                                </li>

                                <li class="has-submenu">
                                    <a href="blogs/news.html">TIN TỨC</a>
                                </li>

                                <li class="has-submenu">
                                    <a href="blogs/video.html">VIDEO</a>
                                </li>

                                <li class="has-submenu">
                                    <a href="pages/lien-he.html">LIÊN HỆ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-banners-wrapper">
        <div class="wrapper">
            <div class="main-banners">
                <div class="main-banners-slider-wrapper">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach ($blocksContent as $item)
                                @if ($item->block_code == 'banner_top' && $item->parent_id == null)
                                    <div class="item swiper-slide">
                                        <div class="slide-img">
                                            <a href="index.html">
                                                <img src="{{ $item->image }}" alt="{{ $item->title }}" />
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
        },
    });
</script>
