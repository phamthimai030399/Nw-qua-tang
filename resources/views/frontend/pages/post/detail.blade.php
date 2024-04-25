@extends('frontend.layouts.default')

@section('content')
    <main id="fhm-post-detail-page" class="position-relative">

        @include('frontend.element.banner_home')

        @include('frontend.element.banner_product')

        <!-- START BREADCRUMB -->
        <section class="breadcrumb">
            <div class="container">
                <div class="breadcrumb-list">
                    <a href="/" title="Trang chủ" class="breadcrumb-link">Trang chủ</a>
                    <a href="{{ route('frontend.cms.post_category') }}" title="Tư vấn sản phẩm" class="breadcrumb-link">Tư vấn
                        sản phẩm</a>
                    <a href="{{ route('frontend.cms.post', ['alias_detail' => $detail->url_part]) }}"
                        title="{{ $detail->title }}"
                        class="breadcrumb-link breadcrumb-link-current">{{ $detail->title }}</a>
                </div>
            </div>
        </section>
        <!-- END BREADCRUMB -->

        <!-- START BLOG DETAIL -->
        <div class="container blog-space">
            <div class="row flex-lg-row-reverse">
                <div class="col-12 col-lg-9">
                    <div class="blog-detail">
                        <h1>
                            {{ $detail->title }}
                        </h1>
                        <div class="blog-info">
                            @if ($detail->author != null)
                                <p>
                                    {{ $detail->author }}
                                </p>
                            @else
                                <p>Admin</p>
                            @endif
                            <p>{{ date('Y-m-d', strtotime($detail->aproved_date)) }}</p>
                        </div>
                        <article class="blog-content">
                            {!! $detail->content !!}
                        </article>
                        <div class="blog-action">
                            <div class="blog-tag">
                            </div>
                            <div class="blog-share">
                                <p>Share</p>
                                <a class="btn-facebook fb"
                                    href="https://www.facebook.com/sharer/sharer.php?u={{ route('frontend.cms.post', ['alias_detail' => $detail->url_part]) }}&display=popup&ref=plugin"><i
                                        class="fab fa-facebook"></i></a>
                                <a class="btn-insta insta"
                                    href="https://www.instagram.com/create/story/?url={{ route('frontend.cms.post', ['alias_detail' => $detail->url_part]) }}"><i
                                        class="fab fa-instagram-square"></i></a>
                                <a class="share__twitter"
                                    href="https://twitter.com/intent/tweet?url={{ route('frontend.cms.post', ['alias_detail' => $detail->url_part]) }}&text=Check%20out%20this%20awesome%20post"><i
                                        class="fab fa-twitter"></i></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="blog-related">
                        <h2>Related Blogs</h2>
                        <div class="blog-related-list">
                            @foreach ($posts_relative as $item)
                            <div class="news news-full">
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
                    </div>
                </div>
            </div>
        </div>
        <!-- END BLOG DETAIL -->


    </main>
    <style>
        #fhm-post-detail-page #banner-container .banner-category .megamenu-wrapper {
            position: relative;
        }

        #fhm-post-detail-page #banner-container .banner-category .megamenu-wrapper .megamenu-body {
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

        #fhm-post-detail-page .menu-banner .slider-banner {
            display: none;
        }

        #fhm-post-detail-page #banner-container .banner-category .megamenu-wrapper:hover .megamenu-body {
            display: block;
        }
    </style>
@endsection
