<?php
    $page_title = $taxonomy->title ?? ($page->title ?? ($page->name ?? null));
    $image_background =
        $taxonomy->json_params->image_background ?? ($web_information->image->background_breadcrumbs ?? '');
?>

<?php $__env->startSection('content'); ?>
    <main id="fhm-product-detail" class="position-relative">
        <?php echo $__env->make('frontend.element.banner_home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('frontend.element.banner_product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- START BREADCRUMB -->
        <section class="breadcrumb">
            <div class="container">
                <div class="breadcrumb-list">
                    <a href="/" title="Trang chủ" class="breadcrumb-link">Trang chủ</a>
                    <a href="<?php echo e(route('frontend.cms.product_all')); ?>" title="Sản phẩm" class="breadcrumb-link">Sản phẩm</a>
                    <a href="<?php echo e(route('frontend.cms.product', ['alias_detail' => $detail->url_part])); ?>"
                        title="<?php echo e($detail->title); ?>"
                        class="breadcrumb-link breadcrumb-link-current"><?php echo e($detail->title); ?></a>
                </div>
            </div>
        </section>
        <!-- END BREADCRUMB -->

        <!-- ============================================= -->

        <?php echo $__env->make('frontend.element.product_detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- ============================================= -->

        <?php echo $__env->make('frontend.element.tab_product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- ============================================= -->

        <?php echo $__env->make('frontend.element.product_related', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </main>
    <style>
        #fhm-product-detail #banner-container .banner-category .megamenu-wrapper {
            position: relative;
        }

        #fhm-product-detail #banner-container .banner-category .megamenu-wrapper .megamenu-body {
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

        #fhm-product-detail .menu-banner .slider-banner {
            display: none;
        }

        #fhm-product-detail #banner-container .banner-category .megamenu-wrapper:hover .megamenu-body {
            display: block;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('#zoomImage').zoomLens({
                lensSize: 200 // Kích thước của lens, có thể điều chỉnh theo ý muốn
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\NEWWAY\Nw_Quatang\resources\views/frontend/pages/product/detail.blade.php ENDPATH**/ ?>