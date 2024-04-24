<?php $__env->startSection('content'); ?>
    <main id="fhm-introduce" class="position-relative">
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
                    <a href="<?php echo e(route('frontend.introduce')); ?>" title="Giới thiệu"
                        class="breadcrumb-link breadcrumb-link-current">Giới thiệu</a>
                </div>
            </div>
        </section>
        <!-- END BREADCRUMB -->

        <!-- ============================================= -->
        <!-- START INFORMATION -->
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <section id="fhm-information<?php echo e($item->id); ?>" class="information">
                <div class="container">
                    <div class="information-img">
                        <img src="<?php echo e($item->image); ?>" alt="" />
                    </div>
                    <div class="information-container">
                        <h3><?php echo e($item->title); ?></h3>
                        <?php echo $item->content; ?>

                    </div>
                </div>
            </section>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\NEWWAY\Nw_Quatang\resources\views/frontend/pages/post/introduce.blade.php ENDPATH**/ ?>