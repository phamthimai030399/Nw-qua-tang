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
                <?php $__currentLoopData = $home_post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="testimonial-item-img">
                            <img src="<?php echo e($post->image); ?>" alt="" />
                        </div>
                        <div class="testimonial-item-content">
                            <span><?php echo e(date("Y-m-d", strtotime($post->aproved_date))); ?></span>
                            <a href=""><?php echo e($post->title); ?></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
</section>


<?php /**PATH F:\NEWWAY\Nw_Quatang\resources\views/frontend/element/testimonial.blade.php ENDPATH**/ ?>