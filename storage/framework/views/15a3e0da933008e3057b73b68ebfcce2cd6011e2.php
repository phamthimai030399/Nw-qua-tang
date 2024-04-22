<section id="home-policy">
    <div class="wrapper">
        <div class="inner">
            <div class="grid">
                <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($item->block_code == 'service' && $item->parent_id == null): ?>
                        <div class="grid__item large--three-twelfths">
                            <div class="policy-content text-center">
                                <i class="<?php echo e($item->icon); ?>" aria-hidden="true"></i> <?php echo e($item->title); ?>

                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>
        </div>
    </div>
</section>
<?php /**PATH F:\NEWWAY\Nw_Quatang\resources\views/frontend/element/home-policy.blade.php ENDPATH**/ ?>