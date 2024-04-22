<!-- START FOOTER -->
<footer id="fhm-footer" class="footer">
    <div class="container">
        <div class="footer-main">
            <div class="footer-element footer-element-info">
                <div class="logo-footer" style="margin-bottom: 15px">
                    <img src="<?php echo e($web_information->image->logo); ?>" alt="">
                </div>
                <ul>
                    <li>
                        <p>Địa chỉ: <?php echo e($web_information->information->address); ?></p>
                    </li>
                    <li>
                        <p>
                            Hotline:
                            <a href="tel:<?php echo e($web_information->information->phone); ?>"
                                title="<?php echo e($web_information->information->phone); ?>"><?php echo e($web_information->information->phone); ?></a>
                        </p>
                    </li>
                    <li>
                        <p>
                            Email:
                            <a href="mailto:<?php echo e($web_information->information->email); ?>"
                                title="<?php echo e($web_information->information->email); ?>"><?php echo e($web_information->information->email); ?></a>
                        </p>
                    </li>
                </ul>
            </div>
            <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item->block_code == 'footer' && $item->parent_id == null): ?>
                    <div class="footer-element">
                        <h5><?php echo e($item->title); ?></h5>
                        <ul class="footer-grid">
                            <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($item->block_code == 'footer' && $item_child->parent_id == $item->id): ?>
                                    <li><a href="#" title="<?php echo e($item_child->title); ?>"><?php echo e($item_child->title); ?></a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="footer-group">
                <div class="footer-element footer-element-center">
                    <h5>Theo dõi trang</h5>
                    <div class="footer-social">
                        <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($item->block_code == 'social' && $item->parent_id == null): ?>
                                <a href="#" title="<?php echo e($item->title); ?>" class="footer-social-icon">
                                    <img src="<?php echo e($item->image); ?>" alt="<?php echo e($item->title); ?>" title="<?php echo e($item->title); ?>" />
                                </a>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-end">
            <p>2023 © Copyright of FHM Vietnam. All Right Reserved.</p>
            <div class="footer-element-download footer-element-center">
                <h5></h5>
                <div class="download-group">
                    <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($item->block_code == 'camket' && $item->parent_id == null): ?>
                            <a href="#" class="download-icon" title="<?php echo e($item->title); ?>">
                                <img src="<?php echo e($item->image); ?>" alt="<?php echo e($item->title); ?>"
                                    title="<?php echo e($item->title); ?>" />
                            </a>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->
<?php /**PATH C:\home\Nw-qua-tang\resources\views/frontend/element/footer.blade.php ENDPATH**/ ?>