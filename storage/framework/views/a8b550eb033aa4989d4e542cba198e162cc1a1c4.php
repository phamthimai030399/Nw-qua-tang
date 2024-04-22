 <!-- START HOME SLIDER -->
 <div id="banner-container">
     <div class="container">
         <div class="banner-home">
             <div class="banner-category">
                 <div class="megamenu-wrapper">
                     <div class="megamenu-head text-center">
                         <span><i class="fa fa-bars" aria-hidden="true"></i> Danh mục
                             sản phẩm</span>
                     </div>
                     <div class="megamenu-body">
                         <ul class="dropdown-megamenu">
                             <?php $__currentLoopData = $taxonomy_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taxonomy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <?php if(empty($taxonomy->parent_id) && $taxonomy->taxonomy == 'san-pham'): ?>
                                     <li class="magamenu-item_category">
                                         <a href="<?php echo e(route('frontend.cms.product_category', $taxonomy->url_part)); ?>"
                                             class="magamenu-category_title">
                                             <img src="<?php echo e($taxonomy->json_params->image); ?>"
                                                 alt="<?php echo e($taxonomy->title); ?>" />
                                             <?php echo e($taxonomy->title); ?>

                                             <i class="fa fa-angle-right" aria-hidden="true"></i>
                                         </a>
                                         <ul class="no-bullets">
                                             <?php $__currentLoopData = $taxonomy_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taxonomy_child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                 <?php if($taxonomy_child->parent_id == $taxonomy->id): ?>
                                                     <li class="magamenu-subcategory">
                                                         <a
                                                             href="<?php echo e(route('frontend.cms.product_category', $taxonomy_child->url_part)); ?>"><?php echo e($taxonomy_child->title); ?>

                                                         </a>
                                                     </li>
                                                 <?php endif; ?>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                         </ul>
                                     </li>
                                 <?php endif; ?>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </ul>
                         <span class="readmore-menu">Xem thêm</span>
                         <script>
                             $(".readmore-menu").click(function() {
                                 $(".item-menu-readmore").slideToggle();
                             });
                         </script>
                     </div>
                 </div>
             </div>
             <div class="menu-banner">
                 <div class="header-nav">
                     <nav>
                         <ul class="nav-list">
                             <li>
                                 <a href="#" class="nav-item">TRANG CHỦ</a>
                             </li>
                             <li>
                                 <a href="#" class="nav-item">GIỚI THIỆU</a>
                             </li>
                             <li><a class="nav-item" href="#">SẢN PHẨM CÓ SẴN</a></li>
                             <li><a class="nav-item" href="#">TƯ VẤN SẢN PHẨM</a></li>
                             <li><a class="nav-item" href="#">TIN TỨC</a></li>
                             <li><a class="nav-item" href="#">VIDEO </a></li>
                             <li><a class="nav-item" href="#">LIÊN HỆ</a></li>
                         </ul>
                     </nav>
                 </div>

                 <div class="slider slider-banner">
                     <div class="swiper slider-container">
                         <div class="swiper-wrapper">
                             <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <?php if($item->block_code == 'banner_top' && $item->parent_id == null): ?>
                                     <div class="swiper-slide">
                                         <div class="slider-item">
                                             <img src="<?php echo e($item->image); ?>" alt="<?php echo e($item->title); ?>"
                                                 title="<?php echo e($item->title); ?>" />
                                             
                                         </div>
                                     </div>
                                 <?php endif; ?>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </div>
                         <div class="swiper-pagination slider-pagination"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- END HOME SLIDER -->
 <style>
    #banner-container {
        background: #f5f5f5;
    }
     .banner-home {
         display: flex;
         justify-content: space-between;
     }

     .banner-category {
         width: 25%;
         background: #fff;
     }

     .menu-banner {
         width: 75%;
     }

     #banner-container .banner-category .megamenu-wrapper .megamenu-head>span {
         height: 43px;
         line-height: 43px;
         padding: 0 15px;
         background: #f07d00;
         color: #fff;
         display: block;
     }

     .magamenu-item_category {
         position: relative;
     }

     .magamenu-item_category .no-bullets {
         margin: 0;
         position: absolute;
         top: 0;
         left: 100%;
         width: 100%;
         z-index: 9;
         background: #ffffff;
         display: none;
     }

     .magamenu-item_category .no-bullets .magamenu-subcategory {
         margin: 0;
         position: relative;
     }

     .magamenu-item_category .no-bullets .magamenu-subcategory a {
         display: block;
         height: 38px;
         line-height: 38px;
         padding: 0 15px;
         color: #606062;
         border-bottom: 1px solid #fafafa;
         -webkit-transition: all 0.3s ease;
         -moz-transition: all 0.3s ease;
         transition: all 0.3s ease;
     }

     .magamenu-item_category:hover ul.no-bullets {
         display: block;
     }

     #banner-container .magamenu-category_title i {
         position: absolute;
         top: 12px;
         right: 15px;
         color: #606062;
         -webkit-transition: all 0.3s ease;
         -moz-transition: all 0.3s ease;
         transition: all 0.3s ease;
     }

     #banner-container .dropdown-megamenu {
         position: relative;
     }

     #banner-container .dropdown-megamenu .magamenu-category_title {
         position: relative;
         display: block;
         height: 38px;
         line-height: 38px;
         padding: 0 15px;
         color: #606062;
         border-bottom: 1px solid #fafafa;
         -webkit-transition: all 0.3s ease;
         -moz-transition: all 0.3s ease;
         transition: all 0.3s ease;
     }
 </style>
<?php /**PATH F:\NEWWAY\Nw_Quatang\resources\views/frontend/element/banner_home.blade.php ENDPATH**/ ?>