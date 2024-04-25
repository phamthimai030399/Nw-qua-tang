 <!-- START HOME SLIDER -->
 <div id="banner-container" class="d-none d-lg-block">
     <div class="container">
         <div class="banner-home">
             <div class="banner-category">
                 <div class="megamenu-wrapper">
                     <div class="megamenu-head text-center">
                         <span><i class="fa fa-bars" aria-hidden="true"></i> Danh mục
                             sản phẩm</span>
                     </div>
                     <div class="megamenu-body">
                         <ul class="dropdown-megamenu">
                             @foreach ($taxonomy_all as $taxonomy)
                                 @if (empty($taxonomy->parent_id) && $taxonomy->taxonomy == 'san-pham')
                                     <li class="magamenu-item_category">
                                         <a href="{{ route('frontend.cms.product_category', $taxonomy->url_part) }}"
                                             class="magamenu-category_title">
                                             <img src="{{ $taxonomy->json_params->image }}"
                                                 alt="{{ $taxonomy->title }}" />
                                             <p>
                                                 {{ $taxonomy->title }}
                                             </p>
                                             <i class="fa fa-angle-right" aria-hidden="true"></i>
                                         </a>
                                         <ul class="no-bullets">
                                             @foreach ($taxonomy_all as $taxonomy_child)
                                                 @if ($taxonomy_child->parent_id == $taxonomy->id)
                                                     <li class="magamenu-subcategory">
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
                     </div>
                 </div>
             </div>
             <div class="menu-banner">
                 <div class="header-nav">
                     <nav>
                         <ul class="nav-list">
                             <li>
                                 <a href="/" class="nav-item">TRANG CHỦ</a>
                             </li>
                             <li>
                                 <a href="{{ route('frontend.introduce') }}" class="nav-item">GIỚI THIỆU</a>
                             </li>
                             <li>
                                 <a class="nav-item" href="{{ route('frontend.cms.product_all') }}">SẢN PHẨM QUÀ
                                     TẶNG</a>
                                 <ul class="submenu-header">
                                     @foreach ($taxonomy_all as $taxonomy)
                                         @if (empty($taxonomy->parent_id) && $taxonomy->taxonomy == 'san-pham')
                                             <li>
                                                 <a
                                                     href="{{ route('frontend.cms.product_category', ['alias' => $taxonomy->url_part]) }}">{{ $taxonomy->title }}</a>
                                             </li>
                                         @endif
                                     @endforeach
                                 </ul>
                             </li>
                             <li><a class="nav-item" href="{{ route('frontend.cms.post_category') }}">TƯ VẤN SẢN
                                     PHẨM</a></li>
                             <li><a class="nav-item" href="{{ route('frontend.gallery') }}">THƯ VIỆN HÌNH ẢNH </a></li>
                             <li><a class="nav-item" href="{{ route('frontend.contact') }}">LIÊN HỆ</a></li>
                         </ul>
                     </nav>
                 </div>

                 <div class="slider slider-banner">
                     <div class="swiper slider-container">
                         <div class="swiper-wrapper">
                             @foreach ($blocksContent as $item)
                                 @if ($item->block_code == 'banner_top' && $item->parent_id == null)
                                     <div class="swiper-slide">
                                         <div class="slider-item">
                                             <img src="{{ $item->image }}" alt="{{ $item->title }}"
                                                 title="{{ $item->title }}" />
                                             {{-- <div class="slider-item-content position-absolute">
                                       <div class="container">
                                           <h6>Summer isn’t over</h6>
                                           <h2>
                                               Latest<br />
                                               Inspr Styles
                                           </h2>
                                           <a href="#" title="Shop Now">Shop Now</a>
                                       </div>
                                   </div> --}}
                                         </div>
                                     </div>
                                 @endif
                             @endforeach
                         </div>
                         <div class="swiper-pagination slider-pagination"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="slider slider-banner d-block d-lg-none">
     <div class="swiper slider-container">
         <div class="swiper-wrapper">
             @foreach ($blocksContent as $item)
                 @if ($item->block_code == 'banner_top' && $item->parent_id == null)
                     <div class="swiper-slide">
                         <div class="slider-item">
                             <img src="{{ $item->image }}" alt="{{ $item->title }}" title="{{ $item->title }}" />
                         </div>
                     </div>
                 @endif
             @endforeach
         </div>
         <div class="swiper-pagination slider-pagination"></div>
     </div>
 </div>
 <!-- END HOME SLIDER -->
 <style>
     #banner-container {
         background: #f5f5f5;
     }

     .banner-home {
         display: flex;
         justify-content: space-between;
     }

     .banner-category {
         width: 25%;
         background: #fff;
     }

     .menu-banner {
         width: 75%;
     }

     .menu-banner .slider-banner {
         display: block;
     }

     #banner-container .banner-category .megamenu-wrapper .megamenu-head>span {
         height: 43px;
         line-height: 43px;
         padding: 0 15px;
         background: #f07d00;
         color: #fff;
         display: block;
     }

     #banner-container .banner-category .megamenu-wrapper .megamenu-body {
         /* max-height: 400px;
         overflow-y: auto;
         scrollbar-width: none;
         -ms-overflow-style: none; */
     }

     #banner-container .banner-category .megamenu-wrapper .megamenu-body::-webkit-scrollbar {
         display: none;
     }

     .magamenu-item_category {
         position: relative;
     }

     .magamenu-item_category .no-bullets {
         margin: 0;
         position: absolute;
         top: 0;
         left: 100%;
         width: 100%;
         z-index: 9;
         background: #ffffff;
         display: none;
     }

     .magamenu-item_category .no-bullets .magamenu-subcategory {
         margin: 0;
         position: relative;
     }

     .magamenu-item_category .no-bullets .magamenu-subcategory a {
         display: block;
         height: 38px;
         line-height: 38px;
         padding: 0 15px;
         color: #606062;
         border-bottom: 1px solid #fafafa;
         -webkit-transition: all 0.3s ease;
         -moz-transition: all 0.3s ease;
         transition: all 0.3s ease;
     }

     .magamenu-item_category:hover ul.no-bullets {
         display: block;
     }

     #banner-container .magamenu-category_title i {
         position: absolute;
         top: 12px;
         right: 15px;
         color: #606062;
         -webkit-transition: all 0.3s ease;
         -moz-transition: all 0.3s ease;
         transition: all 0.3s ease;
     }

     #banner-container .dropdown-megamenu {
         position: relative;
     }

     #banner-container .dropdown-megamenu .magamenu-category_title {
         position: relative;
         display: flex;
         min-height: 38px;
         line-height: 38px;
         padding: 0 15px;
         color: #606062;
         border-bottom: 1px solid #fafafa;
         -webkit-transition: all 0.3s ease;
         -moz-transition: all 0.3s ease;
         transition: all 0.3s ease;
         align-items: center;
     }

     #banner-container .dropdown-megamenu .magamenu-category_title img {
         width: 20px;
         height: 20px;
         margin-right: 10px;
     }

     #banner-container .dropdown-megamenu .magamenu-category_title p {
         margin-right: 20px;
         font-size: 15px;
         transition: all 0.3s ease;
     }

     #banner-container .dropdown-megamenu .magamenu-category_title:hover p {
         color: #f07d00;
         transition: all 0.3s ease;
     }

     .header-container .grid__item .search-form-wrapper {
         width: 100%;
     }

     @media (max-width: 991.99px) {}
 </style>
