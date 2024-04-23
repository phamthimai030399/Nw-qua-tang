@extends('frontend.layouts.default')

@php
    $page_title = $taxonomy->title ?? ($page->title ?? ($page->name ?? null));
    $image_background =
        $taxonomy->json_params->image_background ?? ($web_information->image->background_breadcrumbs ?? '');
@endphp

@section('content')
    <main id="fhm-list-product" class="position-relative">

       @include('frontend.element.banner_home')

       @include('frontend.element.banner_product')

        <!-- START BREADCRUMB -->
        <section class="breadcrumb">
            <div class="container">
                <div class="breadcrumb-list">
                    <a href="/" title="Trang chủ" class="breadcrumb-link">Trang chủ</a>
                    <a href="{{route('frontend.cms.product_all')}}" title="Tất cả sản phẩm" class="breadcrumb-link breadcrumb-link-current">Tất cả sản phẩm</a>
                </div>
            </div>
        </section>
        <!-- END BREADCRUMB -->

        <!-- ============================================= -->

        @include('frontend.element.list_product')

    </main>
    <style>
        #fhm-list-product #banner-container .banner-category .megamenu-wrapper {
           position: relative;
        }
        #fhm-list-product #banner-container .banner-category .megamenu-wrapper .megamenu-body {
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
        #fhm-list-product .menu-banner .slider-banner {
            display: none;
        }
        #fhm-list-product #banner-container .banner-category .megamenu-wrapper:hover .megamenu-body {
            display: block;
        }
    </style>
@endsection
