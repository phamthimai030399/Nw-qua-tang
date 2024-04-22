<footer id="footer">
    <div class="wrapper">
        <div class="inner">
            <div class="grid">
                <div class="grid__item large--three-twelfths">
                    <div class="footer-contact">
                        <div class="footer-contact-logo">
                            <a href="index.html"><img src="{{ $web_information->image->logo_footer ?? '' }}"
                                    alt="" /></a>
                        </div>
                        <div class="footer-contact-address">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            {{ $web_information->information->address }}
                        </div>
                        <div class="footer-contact-hotline">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <a
                                href="tel:{{ $web_information->information->phone }}">{{ $web_information->information->phone }}</a>
                        </div>
                        <div class="footer-contact-hotline">
                            Hotline: <a
                                href="tel:{{ $web_information->information->hotline }}">{{ $web_information->information->hotline }}</a>
                        </div>
                        <div class="footer-contact-email">
                            Email:
                            <a
                                href="{{ $web_information->information->email }}">{{ $web_information->information->email }}</a>
                        </div>
                    </div>
                    <div class="footer-confirmation">
                        @foreach ($blocksContent as $item)
                            @if ($item->block_code == 'camket' && $item->parent_id == null)
                                <a href="javascript:void(0)">
                                    <img src="{{ $item->image }}" alt="{{ $item->title }}" />
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="grid__item large--nine-twelfths">
                    <div class="footer-social-subscribe">
                        <div class="grid">
                            <div class="grid__item large--five-twelfths">
                                <div class="footer-social-network">
                                    @foreach ($blocksContent as $item)
                                        @if ($item->block_code == 'social' && $item->parent_id == null)
                                            <a href="" class="socialTwitter d-flex justify-content-center align-items-center"><i
                                                    class="{{ $item->icon }}" aria-hidden="true"></i></a>
                                        @endif
                                    @endforeach
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
                            @foreach ($blocksContent as $item)
                                @if ($item->block_code == 'footer' && $item->parent_id == null)
                                    <div class="grid__item large--three-twelfths medium--six-twelfths small--one-whole">
                                        <div class="footer-nav">
                                            <h3>Chính sách</h3>

                                            <ul class="no-bullets">
                                                @foreach ($blocksContent as $item_child)
                                                    @if ($item->block_code == 'footer' && $item_child->parent_id == $item->id)
                                                        <li>
                                                            <a href="">{{ $item_child->title }}</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            <div class="grid__item large--three-twelfths medium--six-twelfths small--one-whole">
                                <div class="footer-nav">
                                    <h3>Fanpage</h3>
                                    <div class="fb-page fb_iframe_widget" data-width="230" data-height="250"
                                        data-href="{{ $web_information->social->facebook ?? 'https://www.facebook.com' }}">
                                    </div>
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
                {{ $web_information->information->copyright }}<br />

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
