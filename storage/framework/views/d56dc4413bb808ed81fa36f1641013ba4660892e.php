<?php
    // Lấy sản phẩm nổi bật trang chủ
    $sanPhamNoiBat = App\Models\CmsProduct::danhSachSanPham($param = ['hienthi' => '1'])->get();
?>
<div class="col-md-12">
    <div class="hst fadeIn">
        <div class="box clearfix box-with-products ">

            <h3 class="title_product"><?php echo e($array_translate[strtolower('Nổi bật')]->$locale ?? 'Sản phẩm nổi bật'); ?></h3>

            <div class="box-content products">
                <div class="box-product">
                    <div id="myCarousel30733470">
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="active item">
                                <div class="product-grid">
                                    <div class="row">
                                        <?php foreach($sanPhamNoiBat as $sanpham){ 
										$url_link = route('frontend.cms.product', ['alias_detail'=>$sanpham->alias]) . '.html';
										?>
                                        <div class="block col-sm-3 col-xs-6 col-mobile-12  ">
                                            <!-- Product -->
                                            <div id="idpr_<?php echo e($sanpham->id); ?>"
                                                class="product product_wg clearfix product-hover">
                                                <div class="left">
                                                    <div class="image ">
                                                        <a class="sss" href="<?php echo e($url_link); ?>"
                                                            title="<?php echo e($sanpham->title); ?>">
                                                            <img src="<?php echo e($sanpham->image); ?>"
                                                                title="<?php echo e($sanpham->title); ?>"
                                                                alt="<?php echo e($sanpham->title); ?>" class="" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="right">
                                                    <div class="name product-name">
                                                        <div class="label-discount green saleclear"></div>
                                                        <a href="<?php echo e($url_link); ?>"
                                                            title="<?php echo e($sanpham->title); ?>"><?php echo e($sanpham->title); ?></a>
                                                    </div>
                                                    <p style="width: 50%;float: left;">
                                                        <?php if($sanpham->giakm > 0){ ?>
                                                        <span class="product-price-km"><?php echo number_format($sanpham->gia, 0, ',', '.'); ?></span>
                                                        <span class="product-price"><?php echo number_format($sanpham->giakm, 0, ',', '.'); ?></span>
                                                        <span class="money">đ</span>
                                                        <?php }else if($sanpham->gia > 0){ ?>
                                                        <span class="product-price"><?php echo number_format($sanpham->gia, 0, ',', '.'); ?></span>
                                                        <span class="money">đ</span>
                                                        <?php }else{ ?>
                                                        <span class="product-price">Liên hệ</span>
                                                        <?php } ?>
                                                    </p>
                                                    <p class="shopping-cart" style="width: 50%; float: left" onclick="addToCart(<?php echo e($sanpham->id); ?>)">
                                                        <i class="fa-solid fa-shopping-cart"></i>
                                                    </p>
													<div class="rw-ui-container"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function addToCart(id) {
        var f = "?id=" + id;
        var _url = "/add-to-cart" + f;

        jQuery.ajax({
            type: "GET",
            url: _url,
            data: f,
            cache: false,
            context: document.body,
            success: function(data) {
                if (data == 1) {
                    alert('Số lượng còn lại không đủ để đặt hàng! Vui lòng chọn số lượng thấp hơn !');
                } else {
                    alert('Đặt hàng thành công');
                }
            }
        });
    }
</script>
<?php /**PATH /home/u745771642/domains/bibomart.thanhphung.com/public_html/resources/views/frontend/element/noibat.blade.php ENDPATH**/ ?>