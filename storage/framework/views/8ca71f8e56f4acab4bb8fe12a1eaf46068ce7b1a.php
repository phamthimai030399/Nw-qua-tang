 <!-- START PRODUCT DETAIL -->
 <section class="detail detail-page">
     <div class="container">
         <div class="detail-container">
             
             <div class="product-image">
                 <img src="<?php echo e($detail->image); ?>" alt="Product Image" id="zoomImage" >
                    
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
                 </div>
                 <div class="detail-info_production">
                     <div class="detail-variant">
                         <h6>Thương hiệu:</h6>
                         
                     </div>
                     <div class="detail-variant">
                         <h6>Chất liệu:</h6>
                         
                     </div>
                     <div class="detail-variant">
                         <h6>Màu sắc:</h6>
                         
                     </div>
                 </div>
                 
                 <p class="detail-des">
                     <?php echo e($detail->mota); ?>

                 </p>
                 <div class="detail-cart cart-product">
                     <h6>Số lượng tồn kho: <span><?php echo e($detail->quantity); ?></span></h6>
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
                     Thêm vào giỏ hàng
                 </button>
                 <p class="detail-des">Hướng dẫn: <span>“ Với giá sỉ ”</span> số lượng càng tăng giá có thể sẽ càng
                     giảm. Nếu muốn thay đổi số lượng, khách hàng cần chỉnh sửa con số và ấn nút <span> “ Cập nhật
                         ”</span> hoặc xóa giỏ hàng đi và thao tác lại từ đầu.</p>
             </div>
         </div>
     </div>
 </section>
 <!-- END PRODUCT DETAIL -->
<?php /**PATH F:\NEWWAY\Nw_Quatang\resources\views/frontend/element/product_detail.blade.php ENDPATH**/ ?>