<script async src="https://www.googletagmanager.com/gtag/js?id=UA-90264717-2"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-796491450"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-250134661-1"></script>
<script defer src="<?php echo e(asset('themes/frontend/js/beacon.min.js')); ?>"  hrv-beacon-t="1000252872"></script>
<script src="<?php echo e(asset('themes/frontend/js/sdk.js')); ?>"></script>
<script src="<?php echo e(asset('themes/frontend/js/jquery.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('themes/frontend/js/modernizr.min4c33.js')); ?>" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script type="text/javascript">
    //<![CDATA[
    if (typeof Haravan === "undefined") {
        Haravan = {};
    }
    Haravan.culture = "vi-VN";
    Haravan.shop = "quatangepvina.myharavan.com";
    Haravan.theme = {
        name: "08/04/2022 Mai 367124",
        id: 1000849440,
        role: "main",
    };
    Haravan.domain = "quatangdoanhnghiep.com.vn";
    //]]>

    //<![CDATA[
    (function() {
        function asyncLoad() {
            var urls = [
                "//static.zotabox.com/7/e/7ee59c35dcc1aa746d285ca533a043a5/widgets.js",
                "https://wholesale.haravan.com/js/script_tag_production.js",
            ];
            for (var i = 0; i < urls.length; i++) {
                var s = document.createElement("script");
                s.type = "text/javascript";
                s.async = true;
                s.src = urls[i];
                var x = document.getElementsByTagName("script")[0];
                x.parentNode.insertBefore(s, x);
            }
        }
        window.attachEvent ?
            window.attachEvent("onload", asyncLoad) :
            window.addEventListener("load", asyncLoad, false);
    })();
    //]]>

    window.HaravanAnalytics = window.HaravanAnalytics || {};
    window.HaravanAnalytics.meta = window.HaravanAnalytics.meta || {};
    window.HaravanAnalytics.meta.currency = "VND";
    var meta = {
        page: {
            pageType: "home"
        }
    };
    for (var attr in meta) {
        window.HaravanAnalytics.meta[attr] = meta[attr];
    }
    window.HaravanAnalytics.AutoTrack = true;

    //<![CDATA[
    window.HaravanAnalytics.ga = "UA-250134661-1";
    window.HaravanAnalytics.enhancedEcommerce = false;
    (function(i, s, o, g, r, a, m) {
        i["GoogleAnalyticsObject"] = r;
        (i[r] =
            i[r] ||
            function() {
                (i[r].q = i[r].q || []).push(arguments);
            }),
        (i[r].l = 1 * new Date());
        (a = s.createElement(o)), (m = s.getElementsByTagName(o)[0]);
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m);
    })(
        window,
        document,
        "script",
        "../www.google-analytics.com/analytics.js",
        "ga"
    );
    ga("create", window.HaravanAnalytics.ga, "auto", {
        allowLinker: true
    });
    ga("send", "pageview");
    ga("require", "linker");
    try {
        <
        meta
        name = "google-site-verification"
        content = "2kyfwney7iuNssgoWySJiWHre0MYitkrrHluj8Hy2d0" /
            >
        ;
    } catch (e) {}
    //]]>

    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            "gtm.start": new Date().getTime(),
            event: "gtm.js"
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "../www.googletagmanager.com/gtm5445.html?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, "script", "dataLayer", "GTM-MLGP4HW");

    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());
    gtag("config", "UA-250134661-1");

    window.file_url = "http://file.hstatic.net/1000252872/file/";
    window.asset_url =
        "http://theme.hstatic.net/1000252872/1000849440/14/?v=32";
    var check_variant = true;
    var check_variant_quickview = true;

    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "AW-796491450");

    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "UA-90264717-2");
</script>
<?php /**PATH F:\NEWWAY\emogift\resources\views/frontend/panels/scripts.blade.php ENDPATH**/ ?>