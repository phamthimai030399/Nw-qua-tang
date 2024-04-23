 <!-- START PRODUCT DETAIL -->
 <section class="detail detail-page">
     <div class="container">
         <div class="detail-container">
             
             <div class="product-image">
                 <img src="<?php echo e($detail->image); ?>" alt="Product Image" id="zoomImage" style="height: auto">
                 <p class="detail-des">
                     Es gibt viele Variationen der Passages des Lorem Ipsum, aber der
                     Hauptteil erlitt Änderungen in irgendeiner Form...
                 </p>
                 <div class="detail-download">
                     <h4>Get <span>15% OFF</span> your first in-app purchase</h4>
                     <div class="detail-download-group">
                         <a href="#" title="download on the app store" class="detail-download-item">
                             <img src="assets/image/detail-appstore.svg" alt="download on the app store"
                                 title="download on the app store" />
                         </a>
                         <a href="#" title="get it om google play" class="detail-download-item">
                             <img src="assets/image/detail-gg.svg" alt="get it om google play"
                                 title="get it om google play" />
                         </a>
                     </div>
                 </div>
             </div>
             <div class="detail-right">
                 <div class="detail-info product">
                     <div class="detail-info-heading product-info">
                         <div class="product-type">Dress</div>
                         <h2 class="product-name"><?php echo e($detail->title); ?></h2>
                     </div>
                     <div class="detail-rating">
                         <div class="detail-rating-item">
                             <p class="detail-id">Mã sản phẩm: <?php echo e($detail->masanpham); ?></p>
                         </div>
                         <a href="#" title="share" class="detail-info-share">
                             <svg width="14" height="17" viewBox="0 0 14 17" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                     d="M14.0002 3.31987C13.9593 3.50669 13.9303 3.69727 13.8756 3.88002C13.3137 5.75543 10.9412 6.37129 9.53274 5.00564C9.43175 4.90769 9.36914 4.91239 9.25966 4.98029C7.90779 5.81833 6.5531 6.65167 5.19903 7.48627C5.16379 7.50786 5.13013 7.53164 5.08797 7.5595C5.32361 8.18943 5.3233 8.81968 5.08671 9.45275C5.65772 9.8048 6.22087 10.1522 6.78433 10.4992C7.61898 11.0137 8.45489 11.5262 9.28734 12.0442C9.37764 12.1002 9.42734 12.102 9.5104 12.0241C10.2739 11.3066 11.1722 11.0731 12.1704 11.3973C13.1677 11.7212 13.7532 12.4378 13.9593 13.4608C13.9747 13.5365 13.9869 13.6129 14.0005 13.6892V14.0641C13.9901 14.1086 13.9766 14.1527 13.9699 14.1978C13.8233 15.2007 13.2781 15.9045 12.3478 16.3057C12.1361 16.3971 11.9017 16.4368 11.6777 16.5H11.0498C10.7959 16.4252 10.5304 16.3773 10.2906 16.2716C9.0517 15.7252 8.44388 14.3646 8.85633 13.0809C8.89377 12.9648 8.87395 12.911 8.7695 12.8471C7.41732 12.0191 6.06829 11.1861 4.71799 10.3543C4.67426 10.3274 4.62896 10.303 4.57799 10.2736C4.30555 10.5511 4.00038 10.7733 3.64361 10.9217C2.06051 11.5791 0.275748 10.5734 0.0284668 8.88289C-0.212207 7.23686 1.13274 5.77765 2.79701 5.88812C3.44604 5.93099 4.0095 6.18321 4.4748 6.63853C4.54811 6.71019 4.59372 6.7346 4.69503 6.6717C6.05539 5.82709 7.41889 4.9878 8.7846 4.15133C8.88087 4.09219 8.89157 4.04337 8.85885 3.94042C8.34541 2.33506 9.39997 0.718448 11.0882 0.516919C12.4727 0.351377 13.8249 1.42192 13.9687 2.79633C13.974 2.8464 13.9895 2.89553 14.0002 2.94497V3.31987ZM0.966939 8.50237C0.965995 9.42051 1.70564 10.1609 2.62523 10.1622C3.54325 10.1634 4.29516 9.42396 4.30083 8.51394C4.3068 7.5983 3.55238 6.84601 2.62869 6.84663C1.70721 6.84726 0.967568 7.58422 0.966624 8.50237H0.966939ZM9.69413 3.12084C9.69161 4.03555 10.4341 4.78377 11.3486 4.78815C12.267 4.79285 13.0283 4.03836 13.0277 3.1246C13.0268 2.21208 12.2805 1.47231 11.36 1.47105C10.435 1.47012 9.69665 2.20113 9.69413 3.12053V3.12084ZM11.3464 15.5377C12.2686 15.5421 13.0202 14.8086 13.0277 13.8973C13.0353 12.982 12.2815 12.2235 11.3622 12.2206C10.447 12.2178 9.69728 12.9614 9.69413 13.8745C9.6913 14.7955 10.424 15.5334 11.3464 15.5377Z"
                                     fill="black" />
                             </svg>
                             Share
                         </a>
                     </div>
                     <div class="detail-info-price product-info">
                         <div class="product-price">
                             <?php if($detail->gia != null): ?>
                                 <span class="product-price-current"><?php echo e(formatCurrency($detail->gia)); ?></span>
                                 <?php if($detail->giakm != null): ?>
                                     <span class="product-price-old"><?php echo e(formatCurrency($detail->giakm)); ?></span>
                                 <?php endif; ?>
                             <?php else: ?>
                                    <span class="product-price-current">Liên hệ</span>
                             <?php endif; ?>
                         </div>
                     </div>
                 </div>
                 <div>
                    <p class="detail-id">Thương hiệu: <?php echo e($detail->masanpham); ?></p>
                    <p class="detail-id">Chất liệu: <?php echo e($detail->masanpham); ?></p>
                 </div>
                 <div class="detail-variant">
                     <h6>Size: <a href="#" title="Size Guide">[Size Guide]</a></h6>
                     <ul class="detail-variant-list variant-size-list">
                         <li class="detail-variant-item">
                             <label>
                                 <input type="radio" name="size" value="XS" checked />
                                 XS
                             </label>
                         </li>
                         <li class="detail-variant-item">
                             <label>
                                 <input type="radio" name="size" value="S" />
                                 S
                             </label>
                         </li>
                         <li class="detail-variant-item">
                             <label>
                                 <input type="radio" name="size" value="M" />
                                 M
                             </label>
                         </li>
                         <li class="detail-variant-item">
                             <label>
                                 <input type="radio" name="size" value="L" />
                                 L
                             </label>
                         </li>
                         <li class="detail-variant-item">
                             <label>
                                 <input type="radio" name="size" value="XL" />
                                 XL
                             </label>
                         </li>
                     </ul>
                 </div>
                 <div class="detail-cart cart-product">
                     <h6>Quantity</h6>
                     <div class="cart-quantity detail-cart-quantity">
                         <div class="cart-quantity-form detail-cart-quantity-form">
                             <input type="button" value="-" class="qtyminus minus" field="quantity" />
                             <input type="text" name="quantity" value="0" class="qty" />
                             <input type="button" value="+" class="qtyplus plus" field="quantity" />
                         </div>
                     </div>
                 </div>
                 <button class="main-btn main-btn-full main-btn-16size detail-submit add-cart"
                     data-bs-toggle="offcanvas" data-bs-target="#cart-popup" aria-controls="cart-popup">
                     Add to Cart
                 </button>
             </div>
         </div>
     </div>
 </section>
 <!-- END PRODUCT DETAIL -->
<?php /**PATH F:\NEWWAY\Nw_Quatang\resources\views/frontend/element/product_detail.blade.php ENDPATH**/ ?>