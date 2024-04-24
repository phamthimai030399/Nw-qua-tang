@extends('frontend.layouts.default')

@php
    $page_title = $taxonomy->title ?? ($page->title ?? ($page->name ?? null));
    $image_background =
        $taxonomy->json_params->image_background ?? ($web_information->image->background_breadcrumbs ?? '');
@endphp

@section('content')
    <main id="fhm-product-detail" class="position-relative">
        @include('frontend.element.banner_home')

        @include('frontend.element.banner_product')

        <!-- START BREADCRUMB -->
        <section class="breadcrumb">
            <div class="container">
                <div class="breadcrumb-list">
                    <a href="/" title="Trang chủ" class="breadcrumb-link">Trang chủ</a>
                    <a href="{{ route('frontend.cms.product_all') }}" title="Sản phẩm" class="breadcrumb-link">Sản phẩm</a>
                    <a href="{{ route('frontend.cms.product', ['alias_detail' => $detail->url_part]) }}"
                        title="{{ $detail->title }}"
                        class="breadcrumb-link breadcrumb-link-current">{{ $detail->title }}</a>
                </div>
            </div>
        </section>
        <!-- END BREADCRUMB -->

        <!-- ============================================= -->

        @include('frontend.element.product_detail')

        <!-- ============================================= -->

        @include('frontend.element.tab_product')
        <!-- ============================================= -->

        @include('frontend.element.product_related')
    </main>
    <style>
        #fhm-product-detail #banner-container .banner-category .megamenu-wrapper {
            position: relative;
        }

        #fhm-product-detail #banner-container .banner-category .megamenu-wrapper .megamenu-body {
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

        #fhm-product-detail .menu-banner .slider-banner {
            display: none;
        }

        #fhm-product-detail #banner-container .banner-category .megamenu-wrapper:hover .megamenu-body {
            display: block;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('#zoomImage').zoomLens({
                lensSize: 200 // Kích thước của lens, có thể điều chỉnh theo ý muốn
            });
        });
    </script>
@endsection
