

<?php $__env->startSection('content'); ?>
    <main id="fhm-gallery" class="position-relative">
        <?php echo $__env->make('frontend.element.banner_home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- START BANNER -->
        <section class="banner d-none d-lg-block">
            <div class="banner-img">
                <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($item->block_code == 'banner_introduce' && $item->parent_id == null): ?>
                        <img src="<?php echo e($item->image); ?>" alt="<?php echo e($item->title); ?>" title="<?php echo e($item->title); ?>" />
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </section>
        <!-- END BANNER -->

        <!-- START BREADCRUMB -->
        <section class="breadcrumb">
            <div class="container">
                <div class="breadcrumb-list">
                    <a href="/" title="Trang chủ" class="breadcrumb-link">Trang chủ</a>
                    <a href="<?php echo e(route('frontend.gallery')); ?>" title="Thư viện hình ảnh"
                        class="breadcrumb-link breadcrumb-link-current">Thư viện hình ảnh</a>
                </div>
            </div>
        </section>
        <!-- END BREADCRUMB -->

        <section id="gallery-image">
            <div class="container">
                <div class="gallery-list">
                    <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($item->block_code == 'gallery_image' && $item->parent_id == null): ?>
                            <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($item->block_code == 'gallery_image' && $item_child->parent_id == $item->id): ?>
                                    <div class="item-image-gird">
                                        <img src="<?php echo e($item_child->image); ?>" alt="">
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\NEWWAY\Nw_Quatang\resources\views/frontend/pages/gallery/index.blade.php ENDPATH**/ ?>