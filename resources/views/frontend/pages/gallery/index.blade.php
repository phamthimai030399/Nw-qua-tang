@extends('frontend.layouts.default')

@section('content')
    <main id="fhm-gallery" class="position-relative">
        @include('frontend.element.banner_home')
        <!-- START BANNER -->
        <section class="banner d-none d-lg-block">
            <div class="banner-img">
                @foreach ($blocksContent as $item)
                    @if ($item->block_code == 'banner_introduce' && $item->parent_id == null)
                        <img src="{{ $item->image }}" alt="{{ $item->title }}" title="{{ $item->title }}" />
                    @endif
                @endforeach
            </div>
        </section>
        <!-- END BANNER -->

        <!-- START BREADCRUMB -->
        <section class="breadcrumb">
            <div class="container">
                <div class="breadcrumb-list">
                    <a href="/" title="Trang chủ" class="breadcrumb-link">Trang chủ</a>
                    <a href="{{ route('frontend.gallery') }}" title="Thư viện hình ảnh"
                        class="breadcrumb-link breadcrumb-link-current">Thư viện hình ảnh</a>
                </div>
            </div>
        </section>
        <!-- END BREADCRUMB -->

        <section id="gallery-image">
            <div class="container">
                <div class="gallery-list">
                    @foreach ($blocksContent as $item)
                        @if ($item->block_code == 'gallery_image' && $item->parent_id == null)
                            @foreach ($blocksContent as $item_child)
                                @if ($item->block_code == 'gallery_image' && $item_child->parent_id == $item->id)
                                    <div class="item-image-gird">
                                        <img src="{{ $item_child->image }}" alt="">
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
    </main>
    <style>
        #fhm-gallery #banner-container .banner-category .megamenu-wrapper {
            position: relative;
        }

        #fhm-gallery #banner-container .banner-category .megamenu-wrapper .megamenu-body {
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

        #fhm-gallery .menu-banner .slider-banner {
            display: none;
        }

        #fhm-gallery #banner-container .banner-category .megamenu-wrapper:hover .megamenu-body {
            display: block;
        }
    </style>
@endsection
