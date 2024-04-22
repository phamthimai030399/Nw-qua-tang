<!-- START HOME BENEFITS -->
<section class="benefits">
    <div class="container">
        <div class="benefits-scroll row">
            <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item->block_code == 'service' && $item->parent_id == null): ?>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-3 benefits-box">
                        <div class="benefits-img">
                            <img src="<?php echo e($item->image); ?>" alt="">
                        </div>
                        <div class="vertical-line"></div>
                        <p>
                            <?php echo e($item->title); ?>

                        </p>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<!-- END HOME BENEFITS-->
<?php /**PATH C:\home\Nw-qua-tang\resources\views/frontend/element/home_benefits.blade.php ENDPATH**/ ?>