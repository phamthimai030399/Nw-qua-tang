

<?php
    $page_title = $taxonomy->title ?? ($page->title ?? ($page->name ?? ''));
    $image_background =
        $taxonomy->json_params->image_background ?? ($web_information->image->background_breadcrumbs ?? '');

    // dd(session('cart'));
?>



<?php $__env->startSection('content'); ?>
    <section id="content">

        <div class="breadcrumb full-width">
            <div class="background-breadcrumb"></div>
            <div class="background">
                <div class="shadow"></div>
                <div class="pattern">
                    <div class="container">
                        <div class="clearfix">
                            <ul class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                                <li class="item"><a itemprop="url" title="Trang chủ"
                                        href="<?php echo e(route('frontend.home')); ?>"><span itemprop="title">Trang chủ</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content full-width inner-page">
            <div class="background-content"></div>
            <div class="background">
                <div class="shadow"></div>
                <div class="pattern">
                    <div class="container">
                        <?php if(session('error')): ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                <?php echo e(session('error')); ?>

                            </div>
                        <?php endif; ?>
                        <?php if(session('success')): ?>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                <?php echo e(session('success')); ?>

                            </div>
                        <?php endif; ?>
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>

                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <p><?php echo e($error); ?></p>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                        <?php endif; ?>

                        <?php if(session('cart')): ?>
                            <div class="row">
                                <div class="col-md-7 border-right">
                                    <h3>Giỏ hàng</h3>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Hình ảnh</th>
                                                <th scope="col">Tên sản phẩm</th>
                                                <th scope="col">Giá</th>
                                                <th scope="col">Số lượng</th>
                                                <th scope="col">Tổng</th>
                                                <th scope="col">Xóa</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php $total = 0 ?>
                                            <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                    $total += $details['price'] * $details['quantity'];
                                                    $alias_detail = Str::slug($details['title']);
                                                    $url_link =
                                                        route('frontend.cms.product', [
                                                            'alias_detail' => $alias_detail,
                                                        ]) . '.html';
                                                ?>
                                                <tr class="tr-border cart-item" data-product-id="<?php echo e($id); ?>">
                                                    <td>
                                                        <a href="<?php echo e($url_link); ?>">
                                                            <img src="<?php echo e($details['image_thumb'] ?? $details['image']); ?>"
                                                                alt="Product Image" style="width: 70px; height:70px;">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo e($url_link); ?>">
                                                            <span><?php echo e($details['title']); ?></span>
                                                        </a>
                                                    </td>
                                                    <td><span class="cart-price">
                                                            <?php echo e(isset($details['price']) && $details['price'] > 0 ? number_format($details['price']) : __('Contact')); ?>&#8363;
                                                        </span>
                                                    </td>
                                                    <td class="class-quantity">
                                                        <button class="minus">-</button>
                                                        <input type="number" class="quantity-input" min="1"
                                                            max="999" step="1" name="quantity"
                                                            id="quantity<?php echo e($id); ?>"
                                                            value="<?php echo e($details['quantity']); ?>"
                                                            onchange="updateCart(<?php echo e($id); ?>)">
                                                        <button class="plus">+</button>
                                                    </td>
                                                    <td>
                                                        <span class="price" id="price<?php echo e($id); ?>">
                                                            <?php echo e(number_format($details['price'] * $details['quantity'])); ?>

                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-delete" onclick="removecart(<?php echo e($id); ?>)">
                                                            <i class="fa-regular fa-trash-can"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-5">
                                    <div class="container container-border">
                                        <div class="row">
                                            <div class="col-md-12" style="padding: 0 15px 15px;">
                                                <h3>Cộng giỏ hàng</h3>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="card-total">
                                                            <span class="span-total">Tạm tính</span>
                                                            <span id="class-total1"><?php echo e(number_format($total)); ?></span>
                                                        </div>
                                                        <div class="card-total">
                                                            <span class="span-total">Tổng</span>
                                                            <span id="class-total2"><?php echo e(number_format($total)); ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3>Thông tin người dùng</h3>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <!-- Khung thông tin người dùng -->
                                                        <form action="<?php echo e(route('frontend.order.store.product')); ?>"
                                                            method="POST">
                                                            <?php echo csrf_field(); ?>

                                                            <div class="form-group">
                                                                <label for="name">Họ và tên:<small class="text-red">*</small></label>
                                                                <input type="text" class="form-control" id="name"
                                                                    name="name" placeholder="Nhập họ và tên" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email">Email:</label>
                                                                <input type="email" class="form-control" id="email"
                                                                    name="email" placeholder="Nhập địa chỉ email">
                                                            </div>
                                                            <div class="form-group" >
                                                                <label for="phone">Số điện thoại:<small class="text-red">*</small></label>
                                                                <input type="text" class="form-control" id="phone"
                                                                    name="phone" placeholder="Nhập số điện thoại" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="address">Địa chỉ:</label>
                                                                <input type="text" class="form-control" id="address"
                                                                    name="address" placeholder="Nhập địa chỉ">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="note">Ghi chú:</label>
                                                                <textarea name="customer_note" class="form-control" id="note" rows="3" placeholder="Nhập ghi chú"></textarea>
                                                            </div>

                                                            <?php if(Auth::user()): ?>
                                                                <input type="hidden" name="customer_id"
                                                                    value="<?php echo e(Auth::user()->id); ?>">
                                                            <?php endif; ?>
                                                            <button type="submit" class="btn-primary"
                                                                style="width: 100%">Thanh toán</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <?php else: ?>
                            <div class="woocommerce">
                                <div class="text-center pt pb">
                                    <div class="woocommerce-notices-wrapper"></div>
                                    <h3 class="cart-empty alert alert-warning">Chưa có sản phẩm nào trong giỏ hàng!</h3>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content full-width inner-page">
            <div class="background-content"></div>
            <div class="background">
                <div class="shadow"></div>
                <div class="pattern">
                    <div class="container">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <style>
        /* input[type=number]::-webkit-inner-spin-button,
                  input[type=number]::-webkit-outer-spin-button {
                      -webkit-appearance: none;
                      margin: 0;
                  } */

        .class-quantity {
            display: flex;
            border: unset !important;
        }

        .tr-border {
            border-bottom: 1px solid #ccc;
        }

        .card-total {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #ccc;
            margin-bottom: 20px;
        }

        .span-total {
            font-weight: 900;
            font-size: 18px;
        }

        .border-right {
            border-right: 1px solid #ccc;
            padding-right: 15px;
        }

        .container-border {
            border: 2px solid var(--primary-color);
            padding: 0 15px !important;
        }

        .table>tbody>tr>td {
            vertical-align: baseline;
        }

        .quantity {
            display: flex;
            align-items: center;
            margin: 5px 0 20px;
        }

        .minus,
        .plus {
            background-color: #ccc;
            border-radius: 6px;
            margin: 0 10px;
        }

        .minus {
            padding: 5px 14px;
        }

        .plus {
            padding: 5px 12px;

        }

        .quantity-input {
            text-align: center;
            width: 50px;
            border: none;
            outline: none;
        }

        .btn-delete:hover {
            cursor: pointer;
            opacity: 0.8;
            width: fit-content;
        }

        .btn-primary {
            width: 100%;
            border-radius: 20px;
        }

        .btn:hover {
            opacity: 0.8;
            background: unset;
        }

        .text-red {
            color: red;
        }
    </style>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var increaseButtons = document.querySelectorAll('.plus');
            var decreaseButtons = document.querySelectorAll('.minus');

            increaseButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var item = this.closest('.cart-item');
                    var quantityInput = item.querySelector('.quantity-input');
                    var quantity = parseInt(quantityInput.value);
                    quantityInput.value = quantity + 1;
                });
            });

            decreaseButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var item = this.closest('.cart-item');
                    var quantityInput = item.querySelector('.quantity-input');
                    var quantity = parseInt(quantityInput.value);
                    if (quantity > 1) {
                        quantityInput.value = quantity - 1;
                    }
                });
            });
        });
    </script>

    <script>
        document.querySelectorAll('.cart-item').forEach(function(item) {
            var quantityInput = item.querySelector('.quantity-input');
            var priceElement = item.querySelector('.price');
            var increaseButton = item.querySelector('.plus');
            var decreaseButton = item.querySelector('.minus');
            var totalPrice1 = document.getElementById('class-total1');
            var totalPrice2 = document.getElementById('class-total2');
            var productId = item.dataset.productId;

            increaseButton.addEventListener('click', function() {
                var newQuantity = parseInt(quantityInput.value) + 1;
                updateQuantity(productId, newQuantity);
            });

            decreaseButton.addEventListener('click', function() {
                var newQuantity = parseInt(quantityInput.value) - 1;
                if (newQuantity >= 1) {
                    updateQuantity(productId, newQuantity);
                }
            });

            function updateQuantity(productId, quantity) {
                var f = "?quantity=" + quantity + "&id=" + productId;
                var _url = "/update-cart" + f;
                jQuery.ajax({
                    type: "GET",
                    url: _url,
                    data: f,
                    cache: false,
                    context: document.body,
                    success: function(data) {
                        quantityInput.value = data.quantity;
                        priceElement.textContent = data.price;
                        console.log(data.totalPrice);
                        totalPrice1.textContent = formatNumber(data.totalPrice);
                        totalPrice2.textContent = formatNumber(data.totalPrice);
                    }
                });

                function formatNumber(number) {
                    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                }
            }
        });


        function updateCart(id) {
            const quantityInput = document.querySelector('.quantity-input');
            var priceElement = document.querySelector('.price');
            var quantity = document.getElementById('quantity' + id);
            var price = document.getElementById('price' + id);
            var totalPrice1 = document.getElementById('class-total1');
            var totalPrice2 = document.getElementById('class-total2');

            if (quantity.value * 1.0 < 1) {
                document.getElementById('quantity' + id).value = 1;
                return;
            }
            if (typeof quantity.value == "undefined") {
                quantity.value = 1;
            }

            var f = "?quantity=" + quantity.value + "&id=" + id;
            var _url = "/update-cart" + f;
            jQuery.ajax({
                type: "GET",
                url: _url,
                data: f,
                cache: false,
                context: document.body,
                success: function(data) {
                    quantity.value = data.quantity;
                    price.textContent = data.price;
                    console.log(data.totalPrice);
                    totalPrice1.textContent = formatNumber(data.totalPrice);
                    totalPrice2.textContent = formatNumber(data.totalPrice);
                }
            });

            function formatNumber(number) {
                return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
        }

        function removecart(id) {
            var f = "?id=" + id;
            var _url = "/remove-from-cart" + f;
            jQuery.ajax({
                type: "GET",
                url: _url,
                data: f,
                cache: false,
                context: document.body,
                success: function(data) {
                    window.location.reload();
                }
            });
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u745771642/domains/bibomart.thanhphung.com/public_html/resources/views/frontend/pages/cart/index.blade.php ENDPATH**/ ?>