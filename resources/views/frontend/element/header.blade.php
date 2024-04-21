<div id="CartDrawer" class="drawer drawer--right">
    <div class="drawer__header">
        <div class="drawer__title h3">Giỏ hàng</div>
        <div class="drawer__close js-drawer-close">
            <button type="button" class="icon-fallback-text">
                <span class="icon icon-x" aria-hidden="true"></span>
                <span class="fallback-text">"Đóng"</span>
            </button>
        </div>
    </div>
    <div id="CartContainer"></div>
</div>
<div class="cart-overlay"></div>
<div id="NavDrawer" class="drawer drawer--left">
    <div class="drawer__header">
        <div class="drawer__title h3">
            {{ $web_infomation->information->site_name ?? ""}}
        </div>
        <div class="drawer__close js-drawer-close">
            <button type="button" class="icon-fallback-text">
                <span class="icon icon-x" aria-hidden="true"></span>
                <span class="fallback-text">Đóng</span>
            </button>
        </div>
    </div>
    <!-- begin mobile-nav -->
    <ul class="mobile-nav">
        <li class="mobile-nav__item mobile-nav__item--active">
            <a href="index.html" class="mobile-nav__link">TRANG CHỦ</a>
        </li>

        <li class="mobile-nav__item">
            <a href="pages/about-us.html" class="mobile-nav__link">GIỚI THIỆU</a>
        </li>

        <li class="mobile-nav__item" aria-haspopup="true">
            <div class="mobile-nav__has-sublist">
                <a href="collections/all.html" class="mobile-nav__link">SẢN PHẨM QUÀ TẶNG</a>
                <div class="mobile-nav__toggle">
                    <button type="button" class="icon-fallback-text mobile-nav__toggle-open">
                        <span class="icon icon-plus" aria-hidden="true"></span>
                        <span class="fallback-text">See More</span>
                    </button>
                    <button type="button" class="icon-fallback-text mobile-nav__toggle-close">
                        <span class="icon icon-minus" aria-hidden="true"></span>
                        <span class="fallback-text">"Đóng"</span>
                    </button>
                </div>
            </div>
            <ul class="mobile-nav__sublist">
                <li class="mobile-nav__item" aria-haspopup="true">
                    <div class="mobile-nav__has-sublist">
                        <a href="collections/coc-binh-giu-nhiet-binh-nuoc-the-thao.html" class="mobile-nav__link">Cốc -
                            Bình giữ nhiệt - Bình nước TT</a>
                        <div class="mobile-nav__toggle">
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-open">
                                <span class="icon icon-plus" aria-hidden="true"></span>
                                <span class="fallback-text">See More</span>
                            </button>
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-close">
                                <span class="icon icon-minus" aria-hidden="true"></span>
                                <span class="fallback-text">"Đóng"</span>
                            </button>
                        </div>
                    </div>
                    <ul class="mobile-nav__sublist">
                        <li class="mobile-nav__item">
                            <a href="collections/binh-giu-nhiet-coc-giu-nhiet.html" class="mobile-nav__link">B&#236;nh
                                giữ nhiệt - Cốc giữ nhiệt</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/mut-giu-nhiet.html" class="mobile-nav__link">M&#250;t giữ nhiệt</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/coc-gap-coc-xep-coc-nhua.html" class="mobile-nav__link">Cốc gấp - Cốc
                                xếp - Cốc nhựa</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/coc-giay-bat-giay.html" class="mobile-nav__link">Cốc giấy - B&#225;t
                                giấy</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/coc-su.html" class="mobile-nav__link">Cốc sứ</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/coc-thuy-tinh.html" class="mobile-nav__link">Cốc thủy tinh</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/binh-nuoc-the-thao.html" class="mobile-nav__link">B&#236;nh nước thể
                                thao</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/bo-am-tra-su.html" class="mobile-nav__link">Bộ ấm tr&#224; sứ</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/binh-xit-bang-su.html" class="mobile-nav__link">B&#236;nh xịt bằng
                                sứ</a>
                        </li>
                    </ul>
                </li>

                <li class="mobile-nav__item" aria-haspopup="true">
                    <div class="mobile-nav__has-sublist">
                        <a href="collections/hop-dung-ruou.html" class="mobile-nav__link">Hộp đựng rượu vang</a>
                        <div class="mobile-nav__toggle">
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-open">
                                <span class="icon icon-plus" aria-hidden="true"></span>
                                <span class="fallback-text">See More</span>
                            </button>
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-close">
                                <span class="icon icon-minus" aria-hidden="true"></span>
                                <span class="fallback-text">"Đóng"</span>
                            </button>
                        </div>
                    </div>
                    <ul class="mobile-nav__sublist">
                        <li class="mobile-nav__item">
                            <a href="collections/hop-dung-ruou-da.html" class="mobile-nav__link">Hộp đựng rượu da</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/hop-dung-ruou-go.html" class="mobile-nav__link">Hộp đựng rượu gỗ</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/mo-bia-khui-bia.html" class="mobile-nav__link">Mở bia - Khui bia</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/hop-dung-ruou-giay.html" class="mobile-nav__link">Hộp đựng rượu
                                giấy</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/bom-ruou.html" class="mobile-nav__link">Bom rượu</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/xe-keo-ruou.html" class="mobile-nav__link">Xe k&#233;o rượu</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/ke-dung-ruou.html" class="mobile-nav__link">Kệ đựng rượu</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/phu-kien-ruou.html" class="mobile-nav__link">Phụ kiện rượu</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/hop-go-son-mai.html" class="mobile-nav__link">Hộp gỗ sơn m&#224;i</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/tu-bao-quan-ruou-vang.html" class="mobile-nav__link">Tủ bảo quản rượu
                                vang</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/decanter.html" class="mobile-nav__link">Decanter</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/ly-ruou-vang.html" class="mobile-nav__link">Ly rượu vang</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/tui-dung-ruou.html" class="mobile-nav__link">T&#250;i đựng rượu
                                vang</a>
                        </li>
                    </ul>
                </li>

                <li class="mobile-nav__item" aria-haspopup="true">
                    <div class="mobile-nav__has-sublist">
                        <a href="collections/bien-ten-huy-hieu-vinh-danh.html" class="mobile-nav__link">Biển tên - Huy
                            hiệu - Vinh danh</a>
                        <div class="mobile-nav__toggle">
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-open">
                                <span class="icon icon-plus" aria-hidden="true"></span>
                                <span class="fallback-text">See More</span>
                            </button>
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-close">
                                <span class="icon icon-minus" aria-hidden="true"></span>
                                <span class="fallback-text">"Đóng"</span>
                            </button>
                        </div>
                    </div>
                    <ul class="mobile-nav__sublist">
                        <li class="mobile-nav__item">
                            <a href="collections/bien-ten-nhan-vien.html" class="mobile-nav__link">Biển t&#234;n
                                nh&#226;n vi&#234;n</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/bien-chuc-danh.html" class="mobile-nav__link">Biển chức danh</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/huy-hieu.html" class="mobile-nav__link">Huy hiệu</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/bang-chung-nhan.html" class="mobile-nav__link">Bằng chứng nhận</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/cup-bieu-trung-pha-le.html" class="mobile-nav__link">C&#250;p - Biểu
                                trưng pha l&#234;</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/ky-niem-chuong.html" class="mobile-nav__link">Kỷ niệm chương</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/huan-chuong.html" class="mobile-nav__link">Hu&#226;n chương</a>
                        </li>
                    </ul>
                </li>

                <li class="mobile-nav__item" aria-haspopup="true">
                    <div class="mobile-nav__has-sublist">
                        <a href="collections/but-so.html" class="mobile-nav__link">Bút - Sổ - Hộp namecard</a>
                        <div class="mobile-nav__toggle">
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-open">
                                <span class="icon icon-plus" aria-hidden="true"></span>
                                <span class="fallback-text">See More</span>
                            </button>
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-close">
                                <span class="icon icon-minus" aria-hidden="true"></span>
                                <span class="fallback-text">"Đóng"</span>
                            </button>
                        </div>
                    </div>
                    <ul class="mobile-nav__sublist">
                        <li class="mobile-nav__item">
                            <a href="collections/but-chi-thuoc-ke.html" class="mobile-nav__link">B&#250;t ch&#236; -
                                Thước kẻ</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/but-bi-khuyen-mai.html" class="mobile-nav__link">B&#250;t bi khuyến
                                m&#227;i</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/but-ky-cao-cap.html" class="mobile-nav__link">B&#250;t k&#253; cao
                                cấp</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/but-ky-go.html" class="mobile-nav__link">B&#250;t k&#253; gỗ</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/but-usb.html" class="mobile-nav__link">B&#250;t USB</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/so-da.html" class="mobile-nav__link">Sổ da</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/hop-namecard.html" class="mobile-nav__link">Hộp namecard</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/vi-dung-namecard-da.html" class="mobile-nav__link">V&#237; đựng
                                namecard da</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/so-dung-namecard.html" class="mobile-nav__link">Sổ đựng namecard</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/trinh-ky-bia-so-cong.html" class="mobile-nav__link">Tr&#236;nh
                                k&#253; - B&#236;a sổ c&#242;ng</a>
                        </li>
                    </ul>
                </li>

                <li class="mobile-nav__item" aria-haspopup="true">
                    <div class="mobile-nav__has-sublist">
                        <a href="collections/qua-tang-it.html" class="mobile-nav__link">Quà tặng IT</a>
                        <div class="mobile-nav__toggle">
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-open">
                                <span class="icon icon-plus" aria-hidden="true"></span>
                                <span class="fallback-text">See More</span>
                            </button>
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-close">
                                <span class="icon icon-minus" aria-hidden="true"></span>
                                <span class="fallback-text">"Đóng"</span>
                            </button>
                        </div>
                    </div>
                    <ul class="mobile-nav__sublist">
                        <li class="mobile-nav__item">
                            <a href="collections/qua-tang-usb.html" class="mobile-nav__link">Qu&#224; tặng USB</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/ban-di-chuot.html" class="mobile-nav__link">B&#224;n di chuột</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/chuot-quang.html" class="mobile-nav__link">Chuột quang</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/pin-sac-du-phong.html" class="mobile-nav__link">Pin sạc dự
                                ph&#242;ng</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/loa-bluetooth.html" class="mobile-nav__link">Loa bluetooth</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/balo-laptop.html" class="mobile-nav__link">Balo Laptop</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/hop-usb.html" class="mobile-nav__link">Hộp USB</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/qua-tang-it-khac.html" class="mobile-nav__link">Qu&#224; tặng IT
                                kh&#225;c</a>
                        </li>
                    </ul>
                </li>

                <li class="mobile-nav__item" aria-haspopup="true">
                    <div class="mobile-nav__has-sublist">
                        <a href="collections/balo-tui-vi-cap.html" class="mobile-nav__link">Balo - Túi - Ví - Cặp</a>
                        <div class="mobile-nav__toggle">
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-open">
                                <span class="icon icon-plus" aria-hidden="true"></span>
                                <span class="fallback-text">See More</span>
                            </button>
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-close">
                                <span class="icon icon-minus" aria-hidden="true"></span>
                                <span class="fallback-text">"Đóng"</span>
                            </button>
                        </div>
                    </div>
                    <ul class="mobile-nav__sublist">
                        <li class="mobile-nav__item">
                            <a href="collections/cap-da.html" class="mobile-nav__link">Cặp da</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/balo-tui-xach.html" class="mobile-nav__link">Balo t&#250;i
                                x&#225;ch</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/vi-da.html" class="mobile-nav__link">V&#237; da</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/vi-dung-ho-chieu.html" class="mobile-nav__link">V&#237; đựng hộ
                                chiếu</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/tui-sinh-thai.html" class="mobile-nav__link">T&#250;i sinh
                                th&#225;i</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/tui-giay.html" class="mobile-nav__link">T&#250;i giấy</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/tui-y-te.html" class="mobile-nav__link">T&#250;i y tế</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/tui-giu-nhiet.html" class="mobile-nav__link">T&#250;i giữ nhiệt</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/tui-du-lich.html" class="mobile-nav__link">T&#250;i du lịch</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/tui-cam-tay.html" class="mobile-nav__link">T&#250;i cầm tay</a>
                        </li>
                    </ul>
                </li>

                <li class="mobile-nav__item" aria-haspopup="true">
                    <div class="mobile-nav__has-sublist">
                        <a href="collections/vong-deo-tay-quat-cam-tay.html" class="mobile-nav__link">Vòng tay - Quạt
                            - Móc khóa</a>
                        <div class="mobile-nav__toggle">
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-open">
                                <span class="icon icon-plus" aria-hidden="true"></span>
                                <span class="fallback-text">See More</span>
                            </button>
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-close">
                                <span class="icon icon-minus" aria-hidden="true"></span>
                                <span class="fallback-text">"Đóng"</span>
                            </button>
                        </div>
                    </div>
                    <ul class="mobile-nav__sublist">
                        <li class="mobile-nav__item">
                            <a href="collections/vong-deo-tay-cao-su.html" class="mobile-nav__link">V&#242;ng đeo tay
                                cao su</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/vong-mot-lan.html" class="mobile-nav__link">V&#242;ng một lần</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/quat-nhua-quang-cao.html" class="mobile-nav__link">Quạt nhựa quảng
                                c&#225;o</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/moc-khoa.html" class="mobile-nav__link">M&#243;c kh&#243;a</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/quat-giay.html" class="mobile-nav__link">Quạt giấy</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/quat-sac-mini.html" class="mobile-nav__link">Quạt sạc mini</a>
                        </li>
                    </ul>
                </li>

                <li class="mobile-nav__item" aria-haspopup="true">
                    <div class="mobile-nav__has-sublist">
                        <a href="collections/o-ao-mu.html" class="mobile-nav__link">Ô - Áo - Mũ - Thẻ hành lý</a>
                        <div class="mobile-nav__toggle">
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-open">
                                <span class="icon icon-plus" aria-hidden="true"></span>
                                <span class="fallback-text">See More</span>
                            </button>
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-close">
                                <span class="icon icon-minus" aria-hidden="true"></span>
                                <span class="fallback-text">"Đóng"</span>
                            </button>
                        </div>
                    </div>
                    <ul class="mobile-nav__sublist">
                        <li class="mobile-nav__item">
                            <a href="collections/o-quang-cao.html" class="mobile-nav__link">&#212; quảng c&#225;o</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/mu-luoi-trai.html" class="mobile-nav__link">Mũ lưỡi trai</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/mu-bao-hiem.html" class="mobile-nav__link">Mũ bảo hiểm</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/the-hanh-ly.html" class="mobile-nav__link">Thẻ h&#224;nh l&#253;</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/ao-phong.html" class="mobile-nav__link">&#193;o ph&#244;ng</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/ao-mua.html" class="mobile-nav__link">&#193;o mưa</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/day-deo-the.html" class="mobile-nav__link">D&#226;y đeo thẻ</a>
                        </li>
                    </ul>
                </li>

                <li class="mobile-nav__item" aria-haspopup="true">
                    <div class="mobile-nav__has-sublist">
                        <a href="collections/gat-tan-bat-lua-lot-ly.html" class="mobile-nav__link">Gạt tàn - Bật lửa -
                            Lót ly</a>
                        <div class="mobile-nav__toggle">
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-open">
                                <span class="icon icon-plus" aria-hidden="true"></span>
                                <span class="fallback-text">See More</span>
                            </button>
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-close">
                                <span class="icon icon-minus" aria-hidden="true"></span>
                                <span class="fallback-text">"Đóng"</span>
                            </button>
                        </div>
                    </div>
                    <ul class="mobile-nav__sublist">
                        <li class="mobile-nav__item">
                            <a href="collections/lot-ly-lot-coc.html" class="mobile-nav__link">L&#243;t ly - L&#243;t
                                cốc</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/bat-lua.html" class="mobile-nav__link">Bật lửa</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/gat-tan.html" class="mobile-nav__link">Gạt t&#224;n</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/xo-dung-da.html" class="mobile-nav__link">X&#244; đựng đ&#225;</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/mieng-dan-tu-lanh.html" class="mobile-nav__link">Miếng d&#225;n tủ
                                lạnh</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/hop-diem.html" class="mobile-nav__link">Hộp di&#234;m</a>
                        </li>
                    </ul>
                </li>

                <li class="mobile-nav__item" aria-haspopup="true">
                    <div class="mobile-nav__has-sublist">
                        <a href="collections/bo-qua-tang-bo-giftset.html" class="mobile-nav__link">Bộ quà tặng - Bộ
                            giftset</a>
                        <div class="mobile-nav__toggle">
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-open">
                                <span class="icon icon-plus" aria-hidden="true"></span>
                                <span class="fallback-text">See More</span>
                            </button>
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-close">
                                <span class="icon icon-minus" aria-hidden="true"></span>
                                <span class="fallback-text">"Đóng"</span>
                            </button>
                        </div>
                    </div>
                    <ul class="mobile-nav__sublist">
                        <li class="mobile-nav__item">
                            <a href="collections/bo-qua-tang.html" class="mobile-nav__link">Bộ qu&#224; tặng</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/hop-dung-qua-tang.html" class="mobile-nav__link">Hộp đựng qu&#224;
                                tặng</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/bo-bam-mong-tay.html" class="mobile-nav__link">Bộ bấm m&#243;ng
                                tay</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/hop-dung-tra.html" class="mobile-nav__link">Hộp đựng tr&#224;</a>
                        </li>
                    </ul>
                </li>

                <li class="mobile-nav__item" aria-haspopup="true">
                    <div class="mobile-nav__has-sublist">
                        <a href="collections/qua-tang-dong-ho.html" class="mobile-nav__link">Quà tặng đồng hồ</a>
                        <div class="mobile-nav__toggle">
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-open">
                                <span class="icon icon-plus" aria-hidden="true"></span>
                                <span class="fallback-text">See More</span>
                            </button>
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-close">
                                <span class="icon icon-minus" aria-hidden="true"></span>
                                <span class="fallback-text">"Đóng"</span>
                            </button>
                        </div>
                    </div>
                    <ul class="mobile-nav__sublist">
                        <li class="mobile-nav__item">
                            <a href="collections/dong-ho-de-ban.html" class="mobile-nav__link">Đồng hồ để b&#224;n</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/dong-ho-treo-tuong.html" class="mobile-nav__link">Đồng hồ treo
                                tường</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/dong-ho-thong-minh.html" class="mobile-nav__link">Đồng hồ th&#244;ng
                                minh</a>
                        </li>
                    </ul>
                </li>

                <li class="mobile-nav__item" aria-haspopup="true">
                    <div class="mobile-nav__has-sublist">
                        <a href="collections/qua-tang-danh-cho-tre-em.html" class="mobile-nav__link">Quà tặng dành cho
                            trẻ em</a>
                        <div class="mobile-nav__toggle">
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-open">
                                <span class="icon icon-plus" aria-hidden="true"></span>
                                <span class="fallback-text">See More</span>
                            </button>
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-close">
                                <span class="icon icon-minus" aria-hidden="true"></span>
                                <span class="fallback-text">"Đóng"</span>
                            </button>
                        </div>
                    </div>
                    <ul class="mobile-nav__sublist">
                        <li class="mobile-nav__item">
                            <a href="collections/ghep-hinh-xep-hinh.html" class="mobile-nav__link">Gh&#233;p h&#236;nh
                                - Xếp h&#236;nh</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/o-to-nhua.html" class="mobile-nav__link">&#212; t&#244; nhựa</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/balo-tre-em.html" class="mobile-nav__link">Balo trẻ em</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/qua-tang-chong-chong.html" class="mobile-nav__link">Qu&#224; tặng
                                chong ch&#243;ng</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/bong-bay.html" class="mobile-nav__link">B&#243;ng bay</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/but-chi-mau-but-sap-mau.html" class="mobile-nav__link">B&#250;t
                                ch&#236; m&#224;u - B&#250;t s&#225;p m&#224;u</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/got-but-chi-tay.html" class="mobile-nav__link">Gọt b&#250;t ch&#236;
                                - Tẩy</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/qua-tang-tre-em-khac.html" class="mobile-nav__link">Qu&#224; tặng trẻ
                                em kh&#225;c</a>
                        </li>
                    </ul>
                </li>

                <li class="mobile-nav__item" aria-haspopup="true">
                    <div class="mobile-nav__has-sublist">
                        <a href="collections/qua-tang-cao-cap.html" class="mobile-nav__link">Quà tặng cao cấp</a>
                        <div class="mobile-nav__toggle">
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-open">
                                <span class="icon icon-plus" aria-hidden="true"></span>
                                <span class="fallback-text">See More</span>
                            </button>
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-close">
                                <span class="icon icon-minus" aria-hidden="true"></span>
                                <span class="fallback-text">"Đóng"</span>
                            </button>
                        </div>
                    </div>
                    <ul class="mobile-nav__sublist">
                        <li class="mobile-nav__item">
                            <a href="collections/qua-tang-ma-vang-cao-cap.html" class="mobile-nav__link">Qu&#224; tặng
                                mạ v&#224;ng cao cấp</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/dong-ho-thong-minh.html" class="mobile-nav__link">Đồng hồ th&#244;ng
                                minh</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/bo-giftset-cong-nghe.html" class="mobile-nav__link">Bộ giftset
                                c&#244;ng nghệ</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/qua-tang-de-ban-cao-cap.html" class="mobile-nav__link">Qu&#224; tặng
                                để b&#224;n cao cấp</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/cigar.html" class="mobile-nav__link">Cigar</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/loa-bluetooth.html" class="mobile-nav__link">Loa bluetooth</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/tu-cigar.html" class="mobile-nav__link">Tủ cigar</a>
                        </li>
                    </ul>
                </li>

                <li class="mobile-nav__item" aria-haspopup="true">
                    <div class="mobile-nav__has-sublist">
                        <a href="collections/bo-san-pham-bom-hoi.html" class="mobile-nav__link">Bộ sản phẩm bơm
                            hơi</a>
                        <div class="mobile-nav__toggle">
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-open">
                                <span class="icon icon-plus" aria-hidden="true"></span>
                                <span class="fallback-text">See More</span>
                            </button>
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-close">
                                <span class="icon icon-minus" aria-hidden="true"></span>
                                <span class="fallback-text">"Đóng"</span>
                            </button>
                        </div>
                    </div>
                    <ul class="mobile-nav__sublist">
                        <li class="mobile-nav__item">
                            <a href="collections/goi-hoi-chu-u.html" class="mobile-nav__link">Gối hơi chữ U</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/ghe-hoi.html" class="mobile-nav__link">Ghế hơi</a>
                        </li>
                    </ul>
                </li>

                <li class="mobile-nav__item" aria-haspopup="true">
                    <div class="mobile-nav__has-sublist">
                        <a href="collections/qua-tang-khuyen-mai-su-kien.html" class="mobile-nav__link">Quà tặng
                            khuyến mãi - sự kiện</a>
                        <div class="mobile-nav__toggle">
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-open">
                                <span class="icon icon-plus" aria-hidden="true"></span>
                                <span class="fallback-text">See More</span>
                            </button>
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-close">
                                <span class="icon icon-minus" aria-hidden="true"></span>
                                <span class="fallback-text">"Đóng"</span>
                            </button>
                        </div>
                    </div>
                    <ul class="mobile-nav__sublist">
                        <li class="mobile-nav__item">
                            <a href="collections/o-ao-mu.html" class="mobile-nav__link">&#212; - &#193;o - Mũ - Thẻ
                                h&#224;nh l&#253;</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/gat-tan-bat-lua-lot-ly.html" class="mobile-nav__link">Gạt t&#224;n -
                                Bật lửa – L&#243;t ly</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/but-so.html" class="mobile-nav__link">B&#250;t – Sổ - Hộp
                                namecard</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/balo-tui-vi-cap.html" class="mobile-nav__link">Balo – T&#250;i –
                                V&#237; – Cặp</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/coc-binh-giu-nhiet-binh-nuoc-the-thao.html"
                                class="mobile-nav__link">Cốc – B&#236;nh giữ nhiệt – B&#236;nh nước</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/qua-tang-dong-ho.html" class="mobile-nav__link">Qu&#224; tặng đồng
                                hồ</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/bo-san-pham-bom-hoi.html" class="mobile-nav__link">Bộ sản phẩm bơm
                                hơi</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/vong-deo-tay-quat-cam-tay.html" class="mobile-nav__link">V&#242;ng
                                tay – Quạt – M&#243;c kh&#243;a</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/qua-tang-it.html" class="mobile-nav__link">Qu&#224; tặng IT</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/qua-tang-danh-cho-tre-em.html" class="mobile-nav__link">Qu&#224; tặng
                                d&#224;nh cho trẻ em</a>
                        </li>
                    </ul>
                </li>

                <li class="mobile-nav__item" aria-haspopup="true">
                    <div class="mobile-nav__has-sublist">
                        <a href="collections/qua-tang-phan-thuong.html" class="mobile-nav__link">Quà tặng phần
                            thưởng</a>
                        <div class="mobile-nav__toggle">
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-open">
                                <span class="icon icon-plus" aria-hidden="true"></span>
                                <span class="fallback-text">See More</span>
                            </button>
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-close">
                                <span class="icon icon-minus" aria-hidden="true"></span>
                                <span class="fallback-text">"Đóng"</span>
                            </button>
                        </div>
                    </div>
                    <ul class="mobile-nav__sublist">
                        <li class="mobile-nav__item">
                            <a href="collections/huy-hieu.html" class="mobile-nav__link">Huy hiệu</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/qua-tang-de-ban-cao-cap.html" class="mobile-nav__link">Biểu trưng để
                                b&#224;n</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/bang-chung-nhan.html" class="mobile-nav__link">Bằng chứng nhận</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/cup-bieu-trung-pha-le.html" class="mobile-nav__link">C&#250;p pha
                                l&#234;</a>
                        </li>
                    </ul>
                </li>

                <li class="mobile-nav__item" aria-haspopup="true">
                    <div class="mobile-nav__has-sublist">
                        <a href="collections/qua-tang-doi-ngoai.html" class="mobile-nav__link">Quà tặng đối ngoại</a>
                        <div class="mobile-nav__toggle">
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-open">
                                <span class="icon icon-plus" aria-hidden="true"></span>
                                <span class="fallback-text">See More</span>
                            </button>
                            <button type="button" class="icon-fallback-text mobile-nav__toggle-close">
                                <span class="icon icon-minus" aria-hidden="true"></span>
                                <span class="fallback-text">"Đóng"</span>
                            </button>
                        </div>
                    </div>
                    <ul class="mobile-nav__sublist">
                        <li class="mobile-nav__item">
                            <a href="collections/vi-dung-namecard-da.html" class="mobile-nav__link">B&#250;t – Sổ -
                                Hộp namecard</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/bo-qua-tang-bo-giftset.html" class="mobile-nav__link">Bộ qu&#224;
                                tặng – Bộ giftset</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/qua-tang-cao-cap.html" class="mobile-nav__link">Qu&#224; tặng cao
                                cấp</a>
                        </li>

                        <li class="mobile-nav__item">
                            <a href="collections/qua-tet.html" class="mobile-nav__link">Qu&#224; tết</a>
                        </li>
                    </ul>
                </li>

                <li class="mobile-nav__item">
                    <a href="collections/moc-khoa-o-to.html" class="mobile-nav__link">M&#243;c kh&#243;a &#244;
                        t&#244;</a>
                </li>

                <li class="mobile-nav__item">
                    <a href="collections/bien-chuc-danh.html" class="mobile-nav__link">Biển chức danh</a>
                </li>
            </ul>
        </li>

        <li class="mobile-nav__item" aria-haspopup="true">
            <div class="mobile-nav__has-sublist">
                <a href="collections/san-pham-co-san.html" class="mobile-nav__link">SẢN PHẨM CÓ SẴN</a>
                <div class="mobile-nav__toggle">
                    <button type="button" class="icon-fallback-text mobile-nav__toggle-open">
                        <span class="icon icon-plus" aria-hidden="true"></span>
                        <span class="fallback-text">See More</span>
                    </button>
                    <button type="button" class="icon-fallback-text mobile-nav__toggle-close">
                        <span class="icon icon-minus" aria-hidden="true"></span>
                        <span class="fallback-text">"Đóng"</span>
                    </button>
                </div>
            </div>
            <ul class="mobile-nav__sublist">
                <li class="mobile-nav__item">
                    <a href="collections/hop-dung-ruou.html" class="mobile-nav__link">Hộp đựng rượu, PKR</a>
                </li>

                <li class="mobile-nav__item">
                    <a href="collections/hop-namecard-co-san.html" class="mobile-nav__link">Hộp namecard</a>
                </li>

                <li class="mobile-nav__item">
                    <a href="collections/goi-hoi-chu-u.html" class="mobile-nav__link">Gối hơi</a>
                </li>

                <li class="mobile-nav__item">
                    <a href="collections/coc-gap-co-san.html" class="mobile-nav__link">Cốc gấp - Cốc xếp</a>
                </li>

                <li class="mobile-nav__item">
                    <a href="collections/binh-giu-nhiet-binh-nuoc-co-san.html" class="mobile-nav__link">B&#236;nh GN,
                        B&#236;nh nước</a>
                </li>

                <li class="mobile-nav__item">
                    <a href="collections/but-ky-but-bi-co-san.html" class="mobile-nav__link">B&#250;t k&#253;,
                        B&#250;t bi</a>
                </li>

                <li class="mobile-nav__item">
                    <a href="collections/bien-ten-huy-hieu-co-san.html" class="mobile-nav__link">Biển t&#234;n, Huy
                        hiệu</a>
                </li>

                <li class="mobile-nav__item">
                    <a href="collections/san-pham-khac-co-san.html" class="mobile-nav__link">Sản phẩm kh&#225;c</a>
                </li>
            </ul>
        </li>

        <li class="mobile-nav__item">
            <a href="blogs/tu-van-san-pham.html" class="mobile-nav__link">TƯ VẤN SẢN PHẨM</a>
        </li>

        <li class="mobile-nav__item">
            <a href="blogs/news.html" class="mobile-nav__link">TIN TỨC</a>
        </li>

        <li class="mobile-nav__item">
            <a href="blogs/video.html" class="mobile-nav__link">VIDEO</a>
        </li>

        <li class="mobile-nav__item">
            <a href="pages/lien-he.html" class="mobile-nav__link">LIÊN HỆ</a>
        </li>

        <li class="mobile-nav__item">
            <a href="account/login.html" id="customer_login_link">Đăng nhập</a>
        </li>
        <li class="mobile-nav__item">
            <a href="account/register.html" id="customer_register_link">Đăng kí</a>
        </li>
    </ul>
    <!-- //mobile-nav -->
</div>
<header>
    <div class="header-top medium--hide small--hide">
        <div class="wrapper">
            <div class="inner">
                <div class="grid">
                    <div class="grid__item large--six-twelfths mediumm--six-twelfths small--six-twelfths">
                        <div class="header-top-contact text-left">
                            <a href="tel:{{ $web_information->information->hotline}}"><i class="fa fa-phone-square" aria-hidden="true"></i>
                                Hotline: {{ $web_information->information->hotline}}</a>
                            <a href="mailto:{{ $web_information->information->email ?? ""}}"><i class="fa fa-envelope"
                                    aria-hidden="true"></i>
                                {{ $web_information->information->email ?? ""}}</a>
                        </div>
                    </div>
                    <div class="grid__item large--six-twelfths mediumm--six-twelfths small--six-twelfths">
                        <div class="header-top-account text-right">
                            <a href="pages/chinh-sach-quy-dinh-chung.html">Điều khoản chính sách</a>
                            <span> | </span>

                            <a href="account/login.html"><i class="fa fa-sign-in" aria-hidden="true"></i> Đăng
                                nhập</a>
                            <span> | </span>
                            <a href="account/register.html"><i class="fa fa-user-plus" aria-hidden="true"></i> Đăng
                                ký</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div>
        {{dd($web_information)}}
    </div> --}}
    <div class="header-main-content medium--hide small--hide">
        <div class="wrapper">
            <div class="inner">
                <div class="grid mg-left-0">
                    <div class="grid__item large--three-twelfths pd-left0">
                        <div class="header-logo text-left">
                            <h1>
                                <a href="/">
                                    <img src="{{ $web_information->image->logo ?? '' }}"
                                        alt="" />
                                </a>
                            </h1>
                        </div>
                    </div>
                    <div class="grid__item large--six-twelfths pd-left0">
                        <div class="search-form-wrapper">
                            <form id="search-collection-form" accept-charset="UTF-8"
                                action="https://quatangdoanhnghiep.com.vn/search" class="search-form" method="get">
                                <select class="select-collection">
                                    <option value="0">Tất cả</option>

                                    <option value="1003817372">SẢN PHẨM TIỆN DỤNG</option>

                                    <option value="1003750725">
                                        Huy hiệu nhựa đúc khuôn 2-3 cm
                                    </option>

                                    <option value="1003383304">Quà tết</option>

                                    <option value="1002806954">Túi du lịch</option>

                                    <option value="1002799678">Biển chức danh</option>

                                    <option value="1002693776">Quà tặng thanh lý</option>

                                    <option value="1002658233">Hộp đựng trà</option>

                                    <option value="1002658225">Ly rượu vang</option>

                                    <option value="1002658221">Decanter</option>

                                    <option value="1002580718">Huân chương</option>

                                    <option value="1002540800">Bình xịt bằng sứ</option>

                                    <option value="1002540471">Trình ký - Bìa sổ còng</option>

                                    <option value="1002367626">Tủ cigar</option>

                                    <option value="1002243790">
                                        Tủ rượu vang mini để bảo quản, đựng, ủ & ướp rượu vang
                                    </option>

                                    <option value="1002195000">Túi đựng rượu vang</option>

                                    <option value="1002108236">Quạt sạc mini</option>

                                    <option value="1001975488">Quạt giấy</option>

                                    <option value="1001966439">Hộp rượu sơn mài</option>

                                    <option value="1001661895">Mũ bảo hiểm</option>

                                    <option value="1001416826">Kỷ niệm chương</option>

                                    <option value="1001190921">Dây đeo thẻ</option>

                                    <option value="1001190573">Hộp diêm</option>

                                    <option value="1001190042">Bộ ấm trà sứ</option>

                                    <option value="1001170440">Bút ký, bút bi có sẵn</option>

                                    <option value="1001170429">Sản phẩm khác có sẵn</option>

                                    <option value="1001170422">
                                        Biển tên, Huy hiệu có sẵn
                                    </option>

                                    <option value="1001170421">
                                        Bình giữ nhiệt, bình nước có sẵn
                                    </option>

                                    <option value="1001170414">Hộp namecard có sẵn</option>

                                    <option value="1001170413">Cốc gấp có sẵn</option>

                                    <option value="1001163031">Quà tặng trẻ em khác</option>

                                    <option value="1001154414">Gọt bút chì - Tẩy</option>

                                    <option value="1001149664">
                                        Quà tặng khuyến mại - sự kiện
                                    </option>

                                    <option value="1001149663">Quà tặng phần thưởng</option>

                                    <option value="1001149599">Quà tặng đối ngoại</option>

                                    <option value="1001132602">
                                        Bút chì màu - Bút sáp màu
                                    </option>

                                    <option value="1001108852">
                                        Sản phẩm từng thực hiện
                                    </option>

                                    <option value="1001108850">Sản phẩm mới</option>

                                    <option value="1001100501">Balo túi xách</option>

                                    <option value="1001100500">Túi cầm tay</option>

                                    <option value="1001100278">Sản phẩm có sẵn</option>

                                    <option value="1001100261">Ghế hơi</option>

                                    <option value="1001100259">Gối hơi du lịch chữ U</option>

                                    <option value="1001100257">Bộ sản phẩm bơm hơi</option>

                                    <option value="1001100255">Loa bluetooth</option>

                                    <option value="1001100253">Cigar</option>

                                    <option value="1001100248">
                                        Quà tặng để bàn cao cấp
                                    </option>

                                    <option value="1001100246">
                                        Bộ quà tặng giftset công nghệ
                                    </option>

                                    <option value="1001100240">Đồng hồ thông minh</option>

                                    <option value="1001100239">
                                        Quà tặng mạ vàng cao cấp
                                    </option>

                                    <option value="1001100236">Quà tặng cao cấp</option>
                                </select>
                                <div class="input-group">
                                    <input type="text" value=""
                                        placeholder="Tìm sản phẩm, danh mục hay thương hiệu mong muốn..."
                                        name="q" />
                                    <input type="hidden" value="product" name="type" />
                                    <span class="input-group-btn">
                                        <button type="submit" class="btnType1">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                            <script>
                                $("#search-collection-form").submit(function(e) {
                                    e.preventDefault();
                                    if ($(".select-collection").val() == 0) {
                                        window.location =
                                            "/search?q=filter=(" +
                                            "(collectionid:product>=" +
                                            $(".select-collection").val() +
                                            ")" +
                                            "&&(title:product**" +
                                            $(this).find('input[name="q"]').val() +
                                            "))";
                                    } else {
                                        window.location =
                                            "/search?q=filter=(" +
                                            "(collectionid:product=" +
                                            $(".select-collection").val() +
                                            ")" +
                                            "&&(title:product**" +
                                            $(this).find('input[name="q"]').val() +
                                            "))";
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <div class="grid__item large--three-twelfths pd-left0">
                        <div class="header-cart-wrapper text-right">
                            <a href="cart.html" class="site-header__cart-toggle js-drawer-open-right"
                                aria-controls="CartDrawer" aria-expanded="false">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>Giỏ hàng</span>
                                <span id="CartCount" class="CartCount cart-item-count">0</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mobile-menu large--hide">
        <div class="wrapper">
            <div class="inner">
                <div class="grid">
                    <div class="grid__item medium--three-twelfths small--three-twelfths">
                        <div class="header-mobile-nav">
                            <button type="button"
                                class="mobile-bars icon-fallback-text site-nav__link js-drawer-open-left"
                                aria-controls="NavDrawer" aria-expanded="false">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    <div class="grid__item medium--six-twelfths small--six-twelfths">
                        <div class="header-mobile-logo text-center">
                            <a href="index.html">
                                <img src="{{ $web_information->image->logo ?? '' }}"
                                    alt="Công ty quà tặng doanh nghiệp cap cấp EPVINA lớn số #1 Việt Nam" />
                            </a>
                        </div>
                    </div>
                    <div class="grid__item medium--three-twelfths small--three-twelfths">
                        <div class="header-mobile-search text-right">
                            <span><i class="fa fa-search" aria-hidden="true"></i></span>
                            <div class="mobile-search-wrapper">
                                <form accept-charset="UTF-8" action="https://quatangdoanhnghiep.com.vn/search"
                                    class="search-form" method="get">
                                    <div class="input-group">
                                        <input type="text" value=""
                                            placeholder="Tìm sản phẩm, danh mục hay thương hiệu mong muốn..."
                                            name="q" />
                                        <input type="hidden" value="product" name="type" />
                                        <span class="input-group-btn">
                                            <button type="submit" class="btnType1">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
