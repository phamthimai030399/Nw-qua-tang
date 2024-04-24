@extends('frontend.layouts.default')

@section('content')
    <main id="fhm-introduce" class="position-relative">
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
                    <a href="{{ route('frontend.introduce') }}" title="Giới thiệu"
                        class="breadcrumb-link breadcrumb-link-current">Giới thiệu</a>
                </div>
            </div>
        </section>
        <!-- END BREADCRUMB -->

        <!-- ============================================= -->
        <!-- START INFORMATION -->
        @foreach ($posts as $item)
            <section id="fhm-information{{ $item->id }}" class="information">
                <div class="container">
                    <div class="information-img">
                        <img src="{{ $item->image }}" alt="" />
                    </div>
                    <div class="information-container">
                        <h3>{{ $item->title }}</h3>
                        {!! $item->content !!}
                    </div>
                </div>
            </section>
        @endforeach
        <!-- END INFORMATION -->
    </main>
    <style>
        #fhm-introduce #banner-container .banner-category .megamenu-wrapper {
            position: relative;
        }

        #fhm-introduce #banner-container .banner-category .megamenu-wrapper .megamenu-body {
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

        #fhm-introduce .menu-banner .slider-banner {
            display: none;
        }

        #fhm-introduce #banner-container .banner-category .megamenu-wrapper:hover .megamenu-body {
            display: block;
        }
    </style>
@endsection
