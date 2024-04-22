<section id="fhm-testimonial">
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
                @foreach($home_post as $post)
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="testimonial-item-img">
                            <img src="{{$post->image}}" alt="" />
                        </div>
                        <div class="testimonial-item-content">
                            <span>{{date("Y-m-d", strtotime($post->aproved_date))}}</span>
                            <a href="">{{$post->title}}</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>


