 <!-- START HEADER-->
 <header class="header">
     <div class="header-topbar">
         <div class="container">
             <div class="header-topbar-content row">
                 <div class="col-xl-4">
                     <div class="header-topbar-info">
                         <div class="header-topbar-info-item">
                             <div class="header-topbar-info-icon">
                                 <i class="fas fa-phone"></i>
                             </div>
                             <a href=""
                                 title="{{ $web_information->information->phone }}">{{ $web_information->information->phone }}</a>
                         </div>
                         <div class="header-topbar-info-item">
                             <div class="header-topbar-info-icon">
                                 <i class="fas fa-envelope"></i>
                             </div>
                             <a href=""
                                 title="{{ $web_information->information->email }}">{{ $web_information->information->email }}"</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-4">
                     <div class="header-topbar-notice">
                         <div class="swiper header-topbar-slider">
                             <div class="swiper-wrapper">
                                 <div class="swiper-slide header-topbar-slide">
                                     <p>
                                         {{ $web_information->information->site_name }}
                                     </p>
                                 </div>
                                 <div class="swiper-slide header-topbar-slide">
                                     <p>
                                         {{ $web_information->information->site_name }}
                                     </p>
                                 </div>
                                 <div class="swiper-slide header-topbar-slide">
                                     <p>
                                         {{ $web_information->information->site_name }}
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-4">
                     <div class="header-topbar-info justify-content-end">
                         <div class="header-topbar-info-item">
                             <div class="header-topbar-info-icon">
                                 <i class="fas fa-globe"></i>
                             </div>
                             <a href="#" title="Điều khoản chính sách">Điều khoản chính sách</a>
                         </div>
                         <div class="header-topbar-info-item">
                             <div class="header-topbar-info-icon">
                                 <i class="fas fa-headset"></i>
                             </div>
                             <a href="#" title="Liên hệ">Liên hệ</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="header-container">
         <div class="container">
             <div class="header-main">
                 <div class="header-left">
                     <div class="header-logo">
                         <a href="/" title="{{ $web_information->information->site_name }}">
                             <img src="{{ $web_information->image->logo }}"
                                 alt="{{ $web_information->information->site_name }}"
                                 title="{{ $web_information->information->site_name }}" />
                         </a>
                     </div>
                     {{-- <div class="header-nav">
                         <nav>
                             <ul class="nav-list">
                                 <li>
                                     <a href="#" class="nav-item">TRANG CHỦ</a>
                                     <div class="mega-menu">
                                         <div class="container">
                                             <div class="mega-menu-main">
                                                 <div class="mega-menu-list">
                                                     <div class="mega-menu-col">
                                                         <a href="#" class="nav-item-parent">Women’s Dress</a>
                                                         <ul>
                                                             <li>
                                                                 <a href="#" class="nav-item">Culotte dress</a>
                                                             </li>
                                                             <li>
                                                                 <a href="#" class="nav-item">Babydoll dress</a>
                                                             </li>
                                                             <li>
                                                                 <a href="#" class="nav-item">Wrap around
                                                                     dress</a>
                                                             </li>
                                                             <li>
                                                                 <a href="#" class="nav-item">Kimono dress</a>
                                                             </li>
                                                             <li>
                                                                 <a href="#" class="nav-item">Bubble dress</a>
                                                             </li>
                                                             <li>
                                                                 <a href="#" class="nav-item">Tutu dress</a>
                                                             </li>
                                                         </ul>
                                                     </div>

                                                     <div class="mega-menu-col">
                                                         <a href="#" class="nav-item-parent">Men’s Fashion</a>
                                                         <ul>
                                                             <li>
                                                                 <a href="#" class="nav-item">Suit</a>
                                                             </li>
                                                             <li>
                                                                 <a href="#" class="nav-item">Hawaiian shirt</a>
                                                             </li>
                                                             <li>
                                                                 <a href="#" class="nav-item">Singlet</a>
                                                             </li>
                                                             <li>
                                                                 <a href="#" class="nav-item">Business shoes</a>
                                                             </li>
                                                             <li>
                                                                 <a href="#" class="nav-item">Flip flops</a>
                                                             </li>
                                                             <li>
                                                                 <a href="#" class="nav-item">Shorts</a>
                                                             </li>
                                                         </ul>
                                                     </div>

                                                     <div class="mega-menu-col">
                                                         <a href="#" class="nav-item-parent">By Brands</a>
                                                         <ul>
                                                             <li>
                                                                 <a href="#" class="nav-item">Tiffany & Co</a>
                                                             </li>
                                                             <li>
                                                                 <a href="#" class="nav-item">Zara</a>
                                                             </li>
                                                             <li>
                                                                 <a href="#" class="nav-item">H&M</a>
                                                             </li>
                                                             <li>
                                                                 <a href="#" class="nav-item">Cartier</a>
                                                             </li>
                                                             <li>
                                                                 <a href="#" class="nav-item">Lululemon</a>
                                                             </li>
                                                         </ul>
                                                     </div>

                                                     <div class="mega-menu-col">
                                                         <a href="#" class="nav-item-parent">Accessories</a>
                                                         <ul>
                                                             <li>
                                                                 <a href="#" class="nav-item">Sunglasses</a>
                                                             </li>
                                                             <li>
                                                                 <a href="#" class="nav-item">Scarves</a>
                                                             </li>
                                                             <li>
                                                                 <a href="#" class="nav-item">Belts</a>
                                                             </li>
                                                             <li>
                                                                 <a href="#" class="nav-item">Shoes</a>
                                                             </li>
                                                         </ul>
                                                     </div>

                                                     <div class="mega-menu-col">
                                                         <a href="#" class="nav-item-parent">Swim</a>
                                                         <ul>
                                                             <li>
                                                                 <a href="#" class="nav-item">Aqua Apparel</a>
                                                             </li>
                                                             <li>
                                                                 <a href="#" class="nav-item">Go Exotic
                                                                     Swimwear</a>
                                                             </li>
                                                             <li>
                                                                 <a href="#" class="nav-item">Surf Goddess</a>
                                                             </li>
                                                         </ul>
                                                     </div>
                                                 </div>
                                                 <div class="mega-menu-side">
                                                     <div class="mega-menu-image">
                                                         <img src="./assets/image/mega-menu.png" alt="FHM" />
                                                     </div>
                                                     <a href="#" title="Shop Now"><span>Shop Now</span><svg
                                                             width="16" height="8" viewBox="0 0 16 8"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                             <g clip-path="url(#clip0_48_13374)">
                                                                 <path
                                                                     d="M11.937 7.99984C11.6858 7.88884 11.5797 7.75851 11.6323 7.56738C11.6617 7.46044 11.7406 7.35661 11.8217 7.27523C12.547 6.54688 13.2775 5.82383 14.0069 5.09954C14.2426 4.86569 14.4797 4.63309 14.7546 4.36183H14.5239C9.936 4.36183 5.34847 4.36183 0.760624 4.36183C0.641004 4.36183 0.52107 4.36557 0.40145 4.3609C0.16127 4.35092 -0.000624474 4.20032 1.81067e-06 3.99392C0.000628095 3.79437 0.155007 3.6472 0.387672 3.62787C0.43934 3.62351 0.491635 3.62631 0.54393 3.62631C5.19941 3.62631 9.8549 3.62631 14.5101 3.62631H14.7387C14.672 3.55585 14.6319 3.51095 14.5893 3.46886C13.6546 2.53878 12.7198 1.60901 11.7851 0.678615C11.6004 0.494969 11.5703 0.30571 11.6962 0.14233C11.8183 -0.016061 12.0328 -0.0472403 12.1934 0.0728002C12.2432 0.109904 12.289 0.152931 12.3331 0.196582C13.4936 1.34866 14.6541 2.50074 15.8124 3.655C15.8848 3.72702 15.938 3.81775 16 3.89975V4.08621C15.9264 4.17912 15.8616 4.28045 15.7783 4.3637C14.6422 5.49676 13.5046 6.62795 12.3635 7.75602C12.2667 7.85143 12.1424 7.91909 12.0309 7.99953H11.9373L11.937 7.99984Z"
                                                                     fill="black" />
                                                             </g>
                                                             <defs>
                                                                 <clipPath id="clip0_48_13374">
                                                                     <rect width="16" height="8"
                                                                         fill="white" />
                                                                 </clipPath>
                                                             </defs>
                                                         </svg>
                                                     </a>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                                 <li>
                                     <a href="#" class="nav-item">GIỚI THIỆU</a>
                                 </li>
                                 <li><a class="nav-item" href="#">SẢN PHẨM CÓ SẴN</a></li>
                                 <li><a class="nav-item" href="#">TƯ VẤN SẢN PHẨM</a></li>
                                 <li><a class="nav-item" href="#">TIN TỨC</a></li>
                                 <li><a class="nav-item" href="#">VIDEO </a></li>
                                 <li><a class="nav-item" href="#">LIÊN HỆ</a></li>
                             </ul>
                         </nav>
                     </div> --}}
                 </div>
                 <div class="header-wrapper">
                     <div class="header-right">
                         <div class="grid__item d-none d-lg-flex">
                             <div class="search-form-wrapper">
                                 <form id="search-collection-form" accept-charset="UTF-8"
                                     action="{{ route('frontend.cms.product_all') }}" class="search-form"
                                     method="get">
                                     <div class="input-group">
                                         <input type="text" value="{{ request()->input('keyword') ?? "" }}"
                                             placeholder="Tìm sản phẩm, danh mục hay thương hiệu mong muốn..."
                                             name="keyword" />
                                         <div class="input-group-btn">
                                             <button type="submit" class="btnType1">
                                                 <i class="fa fa-search" aria-hidden="true"></i>
                                             </button>
                                         </div>
                                     </div>
                                 </form>
                             </div>
                         </div>
                         <div class="header-account header-icon" data-bs-toggle="modal"
                             data-bs-target="#fhm-login-popup" aria-controls="fhm-login-popup">
                             <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                     d="M10.0136 17.9537C9.57237 17.9537 9.13113 17.9537 8.6943 17.9537C8.4472 17.9184 8.20011 17.8919 7.95742 17.8522C5.7821 17.4815 3.92447 16.502 2.52573 14.7899C0.209204 11.9528 -0.293812 8.7714 1.1314 5.40472C2.8346 1.385 7.05729 -0.706493 11.3241 0.215704C14.7437 0.952579 17.5191 3.79418 18.159 7.21381C18.2251 7.58004 18.2781 7.95069 18.3354 8.31692C18.3354 8.75816 18.3354 9.1994 18.3354 9.63623C18.3001 9.88333 18.2737 10.1304 18.234 10.3731C17.8589 12.5749 16.8352 14.4061 15.132 15.8533C14.0289 16.7888 12.767 17.4198 11.355 17.7286C10.9137 17.8257 10.4593 17.8786 10.0136 17.9537ZM7.07935 11.6439C4.8952 10.0951 4.80695 7.20499 6.38219 5.51062C7.90448 3.87361 10.4946 3.77653 12.1316 5.31647C12.9082 6.04452 13.3406 6.95348 13.3979 8.01687C13.4774 9.53033 12.8552 10.7261 11.6286 11.6395C13.1067 12.1778 14.2628 13.0956 15.1232 14.384C18.0001 11.3615 18.0884 6.34015 14.7879 3.21615C11.5183 0.118631 6.28953 0.356902 3.31996 3.85154C0.496012 7.1741 1.0608 11.8292 3.59353 14.3796C4.01272 13.7486 4.51132 13.1971 5.10258 12.7338C5.69826 12.266 6.3513 11.9086 7.07935 11.6439ZM4.38336 15.1076C7.19849 17.5212 11.6594 17.4374 14.3246 15.0988C13.1111 13.2721 11.4212 12.2837 9.21496 12.3278C7.12789 12.3763 5.52618 13.3647 4.38336 15.1076ZM12.3478 8.26838C12.3478 6.62255 10.9932 5.27234 9.35175 5.27234C7.71474 5.27676 6.36895 6.61813 6.36454 8.25514C6.35571 9.89657 7.71033 11.2556 9.35175 11.26C10.9888 11.2688 12.3478 9.91422 12.3478 8.26838Z"
                                     fill="black" />
                             </svg>
                         </div>

                         <a href="shopping-cart.html" title="cart" class="header-cart header-icon">
                             <div class="header-cart-img">
                                 <svg width="16" height="18" viewBox="0 0 16 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <path
                                         d="M11.1886 4.6742C11.8797 4.6742 12.5436 4.6742 13.2008 4.6742C13.7157 4.6742 13.8105 4.7555 13.8715 5.25007C14.3186 8.65109 14.7658 12.0453 15.2129 15.4464C15.2536 15.758 15.3213 16.0629 15.3349 16.3745C15.3417 16.5303 15.2875 16.7133 15.1994 16.8352C15.0639 17.0249 14.881 17.1875 14.698 17.3298C14.6032 17.4043 14.4541 17.4517 14.3254 17.4517C9.99622 17.4585 5.66704 17.4585 1.33785 17.4517C1.20235 17.4517 1.03298 17.384 0.931355 17.2959C0.267411 16.7133 0.28096 16.7133 0.396134 15.8664C0.714556 13.4952 1.01943 11.1172 1.33108 8.73916C1.4869 7.55355 1.64272 6.37471 1.79855 5.18909C1.85952 4.7555 1.96792 4.66742 2.41507 4.66742C3.07901 4.66742 3.73618 4.66065 4.40012 4.66065C4.41367 4.66065 4.42722 4.6471 4.47465 4.63355C4.47465 4.40997 4.47465 4.17963 4.47465 3.9425C4.48142 2.07939 5.77544 0.66343 7.625 0.507607C9.42713 0.351783 11.1209 1.86937 11.1818 3.69183C11.1954 4.00348 11.1886 4.31512 11.1886 4.6742ZM13.072 5.49396C12.984 5.48719 12.9501 5.48719 12.9162 5.48719C9.54908 5.48719 6.17516 5.48719 2.80801 5.48041C2.59122 5.48041 2.56412 5.58204 2.54379 5.75141C2.32022 7.49935 2.08309 9.24051 1.85275 10.9884C1.6224 12.7093 1.39883 14.4301 1.17525 16.1509C1.12783 16.4897 1.28365 16.6591 1.6224 16.6591C5.76189 16.6591 9.90138 16.6591 14.0409 16.6591C14.3593 16.6591 14.5287 16.4829 14.488 16.1713C14.3457 15.0873 14.2035 14.0101 14.0612 12.9261C13.797 10.941 13.5395 8.94919 13.2753 6.96413C13.2075 6.46956 13.1398 5.98176 13.072 5.49396ZM5.26732 4.6471C7.0017 4.6471 8.68189 4.6471 10.3756 4.6471C10.3756 4.3219 10.3892 4.01025 10.3756 3.6986C10.3282 2.44524 9.29163 1.4019 8.01117 1.31382C6.75103 1.22575 5.55186 2.14037 5.35539 3.37341C5.28764 3.78668 5.29442 4.20673 5.26732 4.6471Z"
                                         fill="black" />
                                 </svg>
                             </div>
                             <div class="header-cart-quantity">5</div>
                         </a>
                     </div>
                     <div class="show-menu-mobile" type="button" data-bs-toggle="offcanvas"
                         data-bs-target="#menumobile" aria-controls="menumobile">
                         <svg height="24" viewBox="0 0 16 16" width="24" xmlns="http://www.w3.org/2000/svg">
                             <g id="_31" data-name="31">
                                 <path d="m15.5 4h-15a.5.5 0 0 1 0-1h15a.5.5 0 0 1 0 1z" />
                                 <path d="m15.5 9h-15a.5.5 0 0 1 0-1h15a.5.5 0 0 1 0 1z" />
                                 <path d="m15.5 14h-15a.5.5 0 0 1 0-1h15a.5.5 0 0 1 0 1z" />
                             </g>
                         </svg>
                     </div>
                 </div>

                 <div class="offcanvas offcanvas-start" tabindex="-1" id="menumobile"
                     aria-labelledby="menumobileLabel">
                     <div class="offcanvas-body">
                         <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                             aria-label="Close"></button>
                         <nav class="nav-mobile">
                             <ul class="nav-list">
                                 <li>
                                     <a href="/" class="nav-item">TRANG CHỦ</a>
                                 </li>
                                 <li>
                                     <a href="{{ route('frontend.introduce') }}" class="nav-item">GIỚI THIỆU</a>
                                 </li>
                                 <li>
                                     <a class="nav-item" href="{{ route('frontend.cms.product_all') }}">SẢN PHẨM CÓ
                                         SẴN</a>

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
                                 <li><a class="nav-item" href="{{ route('frontend.gallery') }}">THƯ VIỆN HÌNH ẢNH
                                     </a></li>
                                 <li><a class="nav-item" href="{{ route('frontend.contact') }}">LIÊN HỆ</a></li>
                             </ul>
                         </nav>

                         <div class="mobile-row">
                             <div class="header-account header-icon" data-bs-toggle="modal"
                                 data-bs-target="#fhm-login-popup" aria-controls="fhm-login-popup">
                                 <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <path
                                         d="M10.0136 17.9537C9.57237 17.9537 9.13113 17.9537 8.6943 17.9537C8.4472 17.9184 8.20011 17.8919 7.95742 17.8522C5.7821 17.4815 3.92447 16.502 2.52573 14.7899C0.209204 11.9528 -0.293812 8.7714 1.1314 5.40472C2.8346 1.385 7.05729 -0.706493 11.3241 0.215704C14.7437 0.952579 17.5191 3.79418 18.159 7.21381C18.2251 7.58004 18.2781 7.95069 18.3354 8.31692C18.3354 8.75816 18.3354 9.1994 18.3354 9.63623C18.3001 9.88333 18.2737 10.1304 18.234 10.3731C17.8589 12.5749 16.8352 14.4061 15.132 15.8533C14.0289 16.7888 12.767 17.4198 11.355 17.7286C10.9137 17.8257 10.4593 17.8786 10.0136 17.9537ZM7.07935 11.6439C4.8952 10.0951 4.80695 7.20499 6.38219 5.51062C7.90448 3.87361 10.4946 3.77653 12.1316 5.31647C12.9082 6.04452 13.3406 6.95348 13.3979 8.01687C13.4774 9.53033 12.8552 10.7261 11.6286 11.6395C13.1067 12.1778 14.2628 13.0956 15.1232 14.384C18.0001 11.3615 18.0884 6.34015 14.7879 3.21615C11.5183 0.118631 6.28953 0.356902 3.31996 3.85154C0.496012 7.1741 1.0608 11.8292 3.59353 14.3796C4.01272 13.7486 4.51132 13.1971 5.10258 12.7338C5.69826 12.266 6.3513 11.9086 7.07935 11.6439ZM4.38336 15.1076C7.19849 17.5212 11.6594 17.4374 14.3246 15.0988C13.1111 13.2721 11.4212 12.2837 9.21496 12.3278C7.12789 12.3763 5.52618 13.3647 4.38336 15.1076ZM12.3478 8.26838C12.3478 6.62255 10.9932 5.27234 9.35175 5.27234C7.71474 5.27676 6.36895 6.61813 6.36454 8.25514C6.35571 9.89657 7.71033 11.2556 9.35175 11.26C10.9888 11.2688 12.3478 9.91422 12.3478 8.26838Z"
                                         fill="black" />
                                 </svg>
                             </div>
                             <form class="mobile-search">
                                 <input type="text" placeholder="search" name="search" />
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
 <!-- END HEADER-->
 <!-- ============================================= -->
