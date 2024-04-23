 <!-- START BANNER -->
 <section class="banner d-none d-lg-block">
    <div class="banner-img">
        <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($item->block_code == 'banner_product' && $item->parent_id == null): ?>
                <img src="<?php echo e($item->image); ?>" alt="<?php echo e($item->title); ?>" title="<?php echo e($item->title); ?>" />
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<!-- END BANNER --><?php /**PATH F:\NEWWAY\Nw_Quatang\resources\views/frontend/element/banner_product.blade.php ENDPATH**/ ?>