<footer id="footer">
    <div class="wrapper">
        <div class="inner">
            <div class="grid">
                <div class="grid__item large--three-twelfths">
                    <div class="footer-contact">
                        <div class="footer-contact-logo">
                            <a href="index.html"><img src="<?php echo e($web_information->image->logo_footer ?? ''); ?>"
                                    alt="" /></a>
                        </div>
                        <div class="footer-contact-address">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <?php echo e($web_information->information->address); ?>

                        </div>
                        <div class="footer-contact-hotline">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <a
                                href="tel:<?php echo e($web_information->information->phone); ?>"><?php echo e($web_information->information->phone); ?></a>
                        </div>
                        <div class="footer-contact-hotline">
                            Hotline: <a
                                href="tel:<?php echo e($web_information->information->hotline); ?>"><?php echo e($web_information->information->hotline); ?></a>
                        </div>
                        <div class="footer-contact-email">
                            Email:
                            <a
                                href="<?php echo e($web_information->information->email); ?>"><?php echo e($web_information->information->email); ?></a>
                        </div>
                    </div>
                    <div class="footer-confirmation">
                        <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($item->block_code == 'camket' && $item->parent_id == null): ?>
                                <a href="javascript:void(0)">
                                    <img src="<?php echo e($item->image); ?>" alt="<?php echo e($item->title); ?>" />
                                </a>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="grid__item large--nine-twelfths">
                    <div class="footer-social-subscribe">
                        <div class="grid">
                            <div class="grid__item large--five-twelfths">
                                <div class="footer-social-network">
                                    <a href="https://twitter.com/Qua_tang_EPVINA" class="socialTwitter"><i
                                            class="fa fa-twitter" aria-hidden="true"></i></a>

                                    <a href="https://plus.google.com/" class="socialGoogleplus"><i
                                            class="fa fa-google-plus" aria-hidden="true"></i></a>

                                    <a href="https://www.youtube.com/channel/UC6_r2mZn2S3NXGHRgiBNyCQ"
                                        class="socialYoutube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="grid__item large--seven-twelfths">
                                <div class="footer-subscribe-form">
                                    <form accept-charset="UTF-8"
                                        action="https://quatangdoanhnghiep.com.vn/account/contact" class="contact-form"
                                        method="post">
                                        <input name="form_type" type="hidden" value="customer" />
                                        <input name="utf8" type="hidden" value="✓" />

                                        <div class="input-group">
                                            <input type="email" value="" placeholder="Nhập email của bạn..."
                                                name="contact[email]" id="Email" class="input-group-field"
                                                aria-label="email@example.com" autocorrect="off" autocapitalize="off" />
                                            <input type="hidden" name="contact[tags]" value="newsletter" />
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btnType1" name="subscribe"
                                                    id="subscribe" value="GỬI">
                                                    Đăng ký
                                                </button>
                                            </span>
                                        </div>

                                        <input id="c12a38fc7ef54d8cb8dc6c61f4317727" name="g-recaptcha-response"
                                            type="hidden" />
                                        <script src="../www.google.com/recaptcha/api4d7a.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-"></script>
                                        <script>
                                            grecaptcha.ready(function() {
                                                grecaptcha
                                                    .execute(
                                                        "6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-", {
                                                            action: "submit"
                                                        }
                                                    )
                                                    .then(function(token) {
                                                        document.getElementById(
                                                            "c12a38fc7ef54d8cb8dc6c61f4317727"
                                                        ).value = token;
                                                    });
                                            });
                                        </script>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-navigation">
                        <div class="grid">
                            <div class="grid__item large--three-twelfths medium--six-twelfths small--one-whole">
                                <div class="footer-nav">
                                    <h3>Chi Nhánh HCM</h3>
                                    <div class="footer-contact-address">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> Số 2
                                        Lô A, Cư Xá Phú Lâm D, P.10, Quận 6, TP. Hồ Chí Minh
                                    </div>
                                    <div class="footer-contact-hotline">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        0936316006- <a href="tel:02437678914">02437678914</a>
                                    </div>
                                </div>
                            </div>

                            <div class="grid__item large--three-twelfths medium--six-twelfths small--one-whole">
                                <div class="footer-nav">
                                    <h3>Chính sách</h3>

                                    <ul class="no-bullets">
                                        <li>
                                            <a href="pages/hinh-thuc-thanh-toan.html">Hình thức thanh toán</a>
                                        </li>

                                        <li>
                                            <a href="pages/chinh-sach-bao-hanh.html">Chính sách bảo hành</a>
                                        </li>

                                        <li>
                                            <a href="pages/chinh-sach-doi-tra-dich-vu.html">Chính sách đổi - trả dịch
                                                vụ</a>
                                        </li>

                                        <li>
                                            <a href="pages/chinh-sach-bao-mat-thong-tin.html">Chính sách bảo mật thông
                                                tin</a>
                                        </li>

                                        <li>
                                            <a href="pages/chinh-sach-quy-dinh-chung.html">Chính sách - Quy định
                                                chung</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="grid__item large--three-twelfths medium--six-twelfths small--one-whole">
                                <div class="footer-nav">
                                    <h3>Tuyển Dụng</h3>

                                    <ul class="no-bullets">
                                        <li>
                                            <a href="blogs/tuyen-dung/tuyen-dung-nhan-vien-kinh-doanh-qua-tang.html">Tuyển
                                                dụng nhân viên kinh doanh quà tặng Cập nhật
                                                Xem Thử</a>
                                        </li>

                                        <li>
                                            <a href="blogs/tuyen-dung/tuyen-dung-nhan-vien-seo-marketing-online.html">Tuyển
                                                dụng nhân viên SEO – Marketing online</a>
                                        </li>

                                        <li>
                                            <a
                                                href="blogs/tuyen-dung/nhan-vien-hanh-chinh-van-phong-ho-tro-kinh-doanh.html">Nhân
                                                viên hành chính văn phòng – Hỗ trợ kinh
                                                doanh</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="grid__item large--three-twelfths medium--six-twelfths small--one-whole">
                                <div class="footer-nav">
                                    <h3>Fanpage</h3>
                                    <div class="fb-page" data-width="230" data-height="250"
                                        data-href="https://www.facebook.com/CongtyquatangEpvina/"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="copyright">
    <div class="wrapper">
        <div class="inner">
            <p class="text-center">
                Copyrights © 2018 by Công ty quà tặng doanh nghiệp EG.<br />

                <a href="http://www.dmca.com/Protection/Status.aspx?ID=c7992b6f-552c-4808-9e14-ec2a8b123e07"
                    title="DMCA.com Protection Status" class="dmca-badge">
                    <img src="../images.dmca.com/Badges/dmca_protected_sml_120n9325.png?ID=c7992b6f-552c-4808-9e14-ec2a8b123e07"
                        alt="DMCA.com Protection Status" />
                </a>
                <script src="../images.dmca.com/Badges/DMCABadgeHelper.min.js"></script>
            </p>
        </div>
    </div>
</div>
<?php /**PATH F:\NEWWAY\emogift\resources\views/frontend/element/footer.blade.php ENDPATH**/ ?>