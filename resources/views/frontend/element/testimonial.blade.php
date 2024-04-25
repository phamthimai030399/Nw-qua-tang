a<section id="fhm-testimonial">
    <div class="container position-relative">
        <div class="section-content text-center">
            <div class="title d-flex justify-content-between align-items-center">
                <div class="home-collection_title">
                    <i class="fas fa-pen-square"></i>
                    <h3>TƯ VẤN SẢN PHẨM</h3>
                </div>
                <div class="view-more">
                    <a href="">
                        Xem thêm <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="swiper testimonials-slider">
            <div class="swiper-wrapper">
                @foreach($home_post as $item)
                <div class="swiper-slide">
                    {{-- <div class="testimonial-item">
                        <div class="testimonial-item-img">
                            <a href="{{ route('frontend.cms.post', ['alias_detail' => $post->url_part]) }}">
                                <img src="{{$post->image}}" alt="" />
                            </a>
                        </div>
                        <div class="testimonial-item-content">
                            <span>{{date("Y-m-d", strtotime($post->aproved_date))}}</span>
                            <a href="{{ route('frontend.cms.post', ['alias_detail' => $post->url_part]) }}">{{$post->title}}</a>
                        </div>
                    </div> --}}
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
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>


