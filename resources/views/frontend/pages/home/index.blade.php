@extends('frontend.layouts.default')
@section('content')

    @include('frontend.element.home-policy')

    @include('frontend.element.home-collection')

    @include('frontend.element.home-articles')x

@endsection
<script src="../hstatic.net/0/0/global/api.jquery.js" type="text/javascript"></script>

<script src="../hstatic.net/0/0/global/option_selection.js" type="text/javascript"></script>
<script src="{{ asset('themes/frontend/js/fastclick.min4c33.js?v=32') }}" type="text/javascript"></script>
<script src="{{ asset('themes/frontend/js/owl.carousel.js') }}" type="text/javascript"></script>
<script src="{{ asset('themes/frontend/js/script4c33.js?v=32') }}" type="text/javascript"></script>
<script src="{{ asset('themes/frontend/js/timber4c33.js?v=32') }}" type="text/javascript"></script>
<script src="{{ asset('themes/frontend/js/owl.carousel4c33.js?v=32') }}" type="text/javascript"></script>
<script src="{{ asset('themes/frontend/js/owl.carousel.min4c33.js?v=32') }}" type="text/javascript"></script>
</script>

<script>
    $(".header-mobile-search > span").click(function() {
        $(".header-mobile-search .mobile-search-wrapper").toggle();
    });
</script>
<script>
    $("document").ready(function() {
        $(function() {
            $(".js-qty__num").keypress(function(event) {
                if (
                    event.which != 8 &&
                    event.which != 0 &&
                    (event.which < 48 || event.which > 57)
                ) {
                    return false;
                }
            });
        });
        setTimeout(function() {
            $("#ProductThumbs .thumbnail-item:first-child a").trigger("click");
        }, 10);
    });
</script>

<script>
    $(window).on("load", function() {
        var img_height_max = 0;
        $(".img-resize").each(function() {
            if (img_height_max < $(this).height()) {
                img_height_max = $(this).height();
            }
        });
        $(".img-resize").height(img_height_max);
    });
</script>

<script>
    $(document).ready(function() {
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].onclick = function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            };
        }
        if ($(window).width() > 769) {
            $(".accordion").trigger("click");
        }
    });
</script>

<script>
    $(document).ready(function() {
        $("#owl-home-main-banners-slider").owlCarousel({
            items: 1,
            itemsDesktop: [1000, 1],
            itemsDesktopSmall: [900, 1],
            itemsTablet: [600, 1],
            itemsMobile: false,
            navigation: false,
            pagination: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            autoPlay: 5000,
            navigationText: [
                '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                '<i class="fa fa-angle-right" aria-hidden="true"></i>',
            ],
        });

        $(
            "#owl-home-collection-slider1,#owl-home-collection-slider2,#owl-home-collection-slider3,#owl-home-collection-slider4,#owl-home-collection-slider5"
        ).owlCarousel({
            items: 4,
            itemsDesktop: [1060, 4],
            itemsDesktopSmall: [1050, 3],
            itemsTablet: [600, 2],
            itemsMobile: false,
            navigation: true,
            pagination: false,
            slideSpeed: 300,
            paginationSpeed: 400,
            autoPlay: 5000,
            navigationText: [
                '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                '<i class="fa fa-angle-right" aria-hidden="true"></i>',
            ],
        });
        $("#owl-home-articles-slider").owlCarousel({
            items: 3,
            itemsDesktop: [1000, 3],
            itemsDesktopSmall: [900, 2],
            itemsTablet: [600, 1],
            itemsMobile: false,
            navigation: true,
            pagination: false,
            slideSpeed: 300,
            paginationSpeed: 400,
            navigationText: [
                '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                '<i class="fa fa-angle-right" aria-hidden="true"></i>',
            ],
        });
        $("#owl-home-partners-slider").owlCarousel({
            items: 6,
            itemsDesktop: [1000, 6],
            itemsDesktopSmall: [900, 4],
            itemsTablet: [600, 2],
            itemsMobile: false,
            navigation: true,
            pagination: false,
            slideSpeed: 300,
            paginationSpeed: 400,
            autoPlay: 5000,
            navigationText: [
                '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                '<i class="fa fa-angle-right" aria-hidden="true"></i>',
            ],
        });

        $("#related-products-slider").owlCarousel({
            items: 4,
            itemsDesktop: [1000, 4],
            itemsDesktopSmall: [900, 3],
            itemsTablet: [600, 2],
            itemsMobile: false,
            navigation: true,
            pagination: false,
            slideSpeed: 300,
            paginationSpeed: 400,
            navigationText: [
                '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                '<i class="fa fa-angle-right" aria-hidden="true"></i>',
            ],
        });
    });
</script>
<script>
    jQuery(document).ready(function() {
        var offset = 220;
        var duration = 500;
        jQuery(window).scroll(function() {
            if (jQuery(this).scrollTop() > offset) {
                jQuery("#back-to-top").fadeIn(duration);
                jQuery("#IntroMenu").fadeIn();
            } else {
                jQuery("#back-to-top").fadeOut(duration);
                jQuery("#IntroMenu").fadeOut();
            }
        });

        jQuery("#back-to-top").click(function(event) {
            event.preventDefault();
            jQuery("html, body").animate({
                    scrollTop: 0,
                },
                duration
            );
            return false;
        });
        window.onscroll = changePos;

        function changePos() {
            var fixednavbar = $(".megamenu-wrapper1 > .wrapper > .inner");
            var headerheight = $("header").height();
            var megamenu_height = $("#megamenu-mainbanners").height();

            var header = $("#header");
            var headerheight = $("#header").height();
            if (window.pageYOffset > headerheight) {
                header.addClass("sticky-header");
            } else {
                header.removeClass("sticky-header");
            }

            if (window.pageYOffset > headerheight + megamenu_height) {
                fixednavbar.addClass("index-scroll-effect");
            } else {
                fixednavbar.removeClass("index-scroll-effect");
            }
        }
        $(".megamenu-wrapper").hover(
            function() {
                if (
                    $(".inner").hasClass("scroll-effect") ||
                    $(".inner").hasClass("index-scroll-effect")
                ) {
                    $(".hover-layout1").addClass("black");
                }
                $(".megamenu-body").addClass("show");
            },
            function() {
                $(".hover-layout1").removeClass("black");
                $(".megamenu-body").removeClass("show");
            }
        );
    });
</script>
<script src="{{ asset('themes/frontend/js/handlebars.min4c33.js?v=32') }}" type="text/javascript"></script>
<script id="AjaxQty" type="text/template">

  </script>
<script id="JsQty" type="text/template">

  </script>

<script>
    $("document").ready(function() {
        $(function() {
            $(".js-qty__num").keypress(function(event) {
                if (
                    event.which != 8 &&
                    event.which != 0 &&
                    (event.which < 48 || event.which > 57)
                ) {
                    return false;
                }
            });
        });
    });
</script>

<script src="{{ asset('themes/frontend/js/ajax-cart4c33.js?v=32') }}" type="text/javascript"></script>
<script></script>

<!--------------Custom script------------------------>
<!--------- product --------------->

<!--------------- collection filter, product variant--------->

<script>
    function openTab(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    //document.getElementById("defaultOpen").click();
    $(".fa-eraser").on("click", function() {
        alert("a");
        $(".ajaxcart__qty-num").val(0);
        console.log("#input_value");
    });
</script>

<!-- quick view -->
<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 999999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
        transtion: all 0.5s;
    }

    .modal-content {
        background-color: #fefefe;
        margin: 5% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 780px;
        transform: translatey(-30px);
        transition: all 0.5s;
    }

    .close {
        color: #aaa;
        font-size: 28px;
        font-weight: bold;
        position: absolute;
        right: 0;
        top: 0;
        width: 40px;
        text-align: center;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>
