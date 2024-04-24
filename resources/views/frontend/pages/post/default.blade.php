@extends('frontend.layouts.default')

@section('content')
    <main id="fhm-post-category" class="position-relative">

        @include('frontend.element.banner_home')

        @include('frontend.element.banner_product')

        <!-- START BREADCRUMB -->
        <section class="breadcrumb">
            <div class="container">
                <div class="breadcrumb-list">
                    <a href="/" title="Trang chủ" class="breadcrumb-link">Trang chủ</a>
                    <a href="{{ route('frontend.cms.post_category') }}" title="Tư vấn sản phẩm"
                        class="breadcrumb-link breadcrumb-link-current">Tư vấn sản phẩm</a>
                </div>
            </div>
        </section>
        <!-- END BREADCRUMB -->

        <!-- START BLOG LIST -->
        <section class="blog-container">
            <div class="container">
                <div class="title">
                    <h1>Tin tức tư vấn sản phẩm</h1>
                    <div class="line"></div>
                </div>
                <div class="blog-list">
                    @foreach ($posts as $item)
                        <div class="news">
                            <div class="news-img">
                                <a href="{{ route('frontend.cms.post', ['alias_detail' => $item->url_part]) }}">
                                    <img src="{{ $item->image }}" alt="{{ $item->title }}" title="{{ $item->title }}" />
                                </a>
                            </div>
                            <div class="news-reference">
                                <span class="news-tag">
                                    @if ($item->author != null)
                                        <i class="fas fa-user-edit"></i>
                                        {{ $item->author }}
                                    @else
                                        <i class="fas fa-user-edit"></i> Admin
                                    @endif
                                </span>
                                <span class="news-date">
                                    <i class="fas fa-calendar-day"></i>
                                    {{ date('Y-m-d', strtotime($item->aproved_date)) }}</span>
                            </div>
                            <a href="{{ route('frontend.cms.post', ['alias_detail' => $item->url_part]) }}" class="news-title" title="{{ $item->title }}">{{ $item->title }}</a>
                            <div class="post-brief">
                                <p>{{ $item->brief }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $posts->withQueryString()->links('frontend.pagination.default') }}
            </div>
        </section>
        <!-- END BLOG LIST -->


    </main>
    <style>
        #fhm-post-category #banner-container .banner-category .megamenu-wrapper {
            position: relative;
        }

        #fhm-post-category #banner-container .banner-category .megamenu-wrapper .megamenu-body {
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

        #fhm-post-category .menu-banner .slider-banner {
            display: none;
        }

        #fhm-post-category #banner-container .banner-category .megamenu-wrapper:hover .megamenu-body {
            display: block;
        }
    </style>
@endsection
