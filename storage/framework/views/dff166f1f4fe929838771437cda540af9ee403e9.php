<?php $__env->startSection('content'); ?>
    <main id="fhm-post-detail-page" class="position-relative">

        <?php echo $__env->make('frontend.element.banner_home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('frontend.element.banner_product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- START BREADCRUMB -->
        <section class="breadcrumb">
            <div class="container">
                <div class="breadcrumb-list">
                    <a href="/" title="Trang chủ" class="breadcrumb-link">Trang chủ</a>
                    <a href="<?php echo e(route('frontend.cms.post_category')); ?>" title="Tư vấn sản phẩm" class="breadcrumb-link">Tư vấn
                        sản phẩm</a>
                    <a href="<?php echo e(route('frontend.cms.post', ['alias_detail' => $detail->url_part])); ?>"
                        title="<?php echo e($detail->title); ?>"
                        class="breadcrumb-link breadcrumb-link-current"><?php echo e($detail->title); ?></a>
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
                            <?php echo e($detail->title); ?>

                        </h1>
                        <div class="">
                            <?php if($detail->author != null): ?>
                                <p>
									<?php echo e($detail->author); ?>

								</p>
                            <?php else: ?>
                                <p>Admin</p>
                            <?php endif; ?>
                            <p><?php echo e(date('Y-m-d', strtotime($detail->aproved_date))); ?></p>
                        </div>
                        <article class="blog-content">
                            <p>
                                Commodo labore ut nisi laborum amet eu qui magna ullamco ut
                                labore. Aliquip consectetur labore consectetur dolor
                                exercitation est minim quis. Magna non irure qui ex est
                                laborum nulla excepteur qui. Anim Lorem dolore cupidatat
                                pariatur ex tempor. Duis ea excepteur proident ex commodo
                                irure est.
                            </p>
                            <p>
                                Nisi commodo qui pariatur enim sint laborum consequat enim in
                                officia. Officia fugiat incididunt commodo et mollit aliqua
                                non aute. Enim dolor eiusmod aliqua amet ipsum in enim
                                eiusmod. Quis exercitation sit velit duis.
                            </p>
                            <p>
                                Est Lorem labore consectetur minim sit eu eiusmod mollit
                                velit. Consectetur voluptate ex amet id eiusmod laborum irure.
                                Aliquip ad qui id exercitation irure amet commodo nisi quis.
                                Occaecat minim incididunt eiusmod nostrud veniam quis culpa.
                            </p>
                            <p>
                                Nisi ipsum et consequat id deserunt excepteur. Cillum non
                                pariatur culpa ut occaecat laboris eu. Ullamco ad Lorem et
                                elit laboris eu qui irure nulla qui culpa et. Cupidatat sunt
                                ipsum proident aute exercitation do tempor aliqua cupidatat
                                quis non exercitation. Adipisicing do minim dolore nulla
                                mollit. Adipisicing incididunt irure ipsum et in esse ipsum
                                elit tempor.
                            </p>
                            <p>
                                Aliquip mollit sunt qui irure. Irure ullamco Lorem excepteur
                                dolor qui ea ad quis. Enim fugiat cillum enim ad occaecat sint
                                qui elit labore mollit sunt laborum fugiat consequat.
                                Voluptate labore sunt duis eu deserunt. Occaecat do ut ut
                                labore cillum enim dolore ad enim enim id. Aliquip do veniam
                                ad excepteur ad cillum qui deserunt nostrud sunt aliqua duis
                                sunt occaecat. Laborum incididunt commodo ullamco proident
                                quis.
                            </p>
                            <img src="assets/image/blog.png"
                                alt="What's different about Japan winter specialties year-end atmosphere "
                                title="What's different about Japan winter specialties year-end atmosphere " />
                            <blockquote>
                                Nisi commodo qui pariatur enim sint laborum consequat enim in
                                officia. Officia fugiat incididunt commodo et mollit aliqua
                                non aute. Enim dolor eiusmod aliqua amet ipsum in enim
                                eiusmod. Quis exercitation sit velit duis
                            </blockquote>
                            <h3>Your imagination, our creation</h3>
                            <p>
                                Complexion-perfecting natural foundation enriched with
                                antioxidant-packed superfruits, vitamins, and other
                                skin-nourishing nutrients. Creamy liquid formula sets with a
                                pristine matte finish for soft, velvety smooth skin. Made
                                using clean, non-toxic ingredients, our products are designed
                                for everyone…
                            </p>
                            <div class="blog-img-group">
                                <img src="assets/image/blog-2.png"
                                    alt="What's different about Japan winter specialties year-end atmosphere "
                                    title="What's different about Japan winter specialties year-end atmosphere " /><img
                                    src="assets/image/blog-3.png"
                                    alt="What's different about Japan winter specialties year-end atmosphere "
                                    title="What's different about Japan winter specialties year-end atmosphere " />
                            </div>
                            <p>
                                Complexion-perfecting natural foundation enriched with
                                antioxidant-packed superfruits, vitamins, and other
                                skin-nourishing nutrients. Creamy liquid formula sets with a
                                pristine matte finish for soft, velvety smooth skin. Made
                                using clean, non-toxic ingredients, our products are designed
                                for everyone…
                            </p>
                        </article>
                        <div class="blog-action">
                            <div class="blog-tag">
                                <a href="#" title="#Cleansing">#Cleansing</a>
                                <a href="#" title="#Coffee">#Coffee</a>
                                <a href="#" title="#Cream">#Cream</a>
                                <a href="#" title="#BeanEye">#BeanEye</a>
                            </div>
                            <div class="blog-share">
                                <p>Share</p>
                                <a href="#" title="facebook"><img src="assets/image/blog-fb.svg" alt="facebook"
                                        title="facebook" /></a>
                                <a href="#" title="instagram"><img src="assets/image/blog-ig.svg" alt="instagram"
                                        title="instagram" /></a>
                                <a href="#" title="pinterest"><img src="assets/image/blog-pin.svg" alt="pinterest"
                                        title="pinterest" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="blog-related">
                        <h2>Related Blogs</h2>
                        <div class="blog-related-list">
                            <div class="news news-full">
                                <div class="news-img">
                                    <img src="assets/image/news-full-1.png" alt="Spectacular photos the desert at sunset"
                                        title="Spectacular photos the desert at sunset" />
                                </div>
                                <div class="news-reference">
                                    <span class="news-date"> Sep 25.2022 - </span>
                                    <span class="news-tag">Fashion</span>
                                </div>
                                <a href="#" class="news-title"
                                    title="Spectacular photos the desert at sunset">Spectacular photos the desert at
                                    sunset</a>
                                <p class="news-des">
                                    Many years ago, I worked for my parents who own a video
                                    production company.
                                </p>
                            </div>
                            <div class="news news-full">
                                <div class="news-img">
                                    <img src="assets/image/news-full-2.png" alt="Spectacular photos the desert at sunset"
                                        title="Spectacular photos the desert at sunset" />
                                </div>
                                <div class="news-reference">
                                    <span class="news-date"> Sep 25.2022 - </span>
                                    <span class="news-tag">Fashion</span>
                                </div>
                                <a href="#" class="news-title"
                                    title="Spectacular photos the desert at sunset">Spectacular photos the desert at
                                    sunset</a>
                                <p class="news-des">
                                    Many years ago, I worked for my parents who own a video
                                    production company.
                                </p>
                            </div>
                            <div class="news news-full">
                                <div class="news-img">
                                    <img src="assets/image/news-full-3.png" alt="Spectacular photos the desert at sunset"
                                        title="Spectacular photos the desert at sunset" />
                                </div>
                                <div class="news-reference">
                                    <span class="news-date"> Sep 25.2022 - </span>
                                    <span class="news-tag">Fashion</span>
                                </div>
                                <a href="#" class="news-title"
                                    title="Spectacular photos the desert at sunset">Spectacular photos the desert at
                                    sunset</a>
                                <p class="news-des">
                                    Many years ago, I worked for my parents who own a video
                                    production company.
                                </p>
                            </div>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\NEWWAY\Nw_Quatang\resources\views/frontend/pages/post/detail.blade.php ENDPATH**/ ?>