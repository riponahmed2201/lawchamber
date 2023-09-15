<!DOCTYPE html>
<html lang="en">

<head id="Head1">

    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="images/favicon.png" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta property="og:title" content="Barristers | Legal Practice Leeds | KBW Barristers Chambers" />
    <meta property="og:description"
        content="At KBW Chambers we specialize in business &amp; property, crime, employment &amp; equality, family, immigration, police, personal injury, public &amp; regulatory." />
    <meta property="og:image" content="https://www.kbwchambers.com/images/Share.jpg" />
    <meta property="og:url" content="https://www.kbwchambers.com/" />
    <meta property="og:site_name" content="KBW" />
    <meta property="twitter:title" content="Barristers | Legal Practice Leeds | KBW Barristers Chambers" />
    <meta property="twitter:description"
        content="At KBW Chambers we specialize in business &amp; property, crime, employment &amp; equality, family, immigration, police, personal injury, public &amp; regulatory." />
    <meta property="twitter:image" content="https://www.kbwchambers.com/images/Share.jpg" />
    <meta property="twitter:card" content="https://www.kbwchambers.com/images/Share.jpg" />
    <meta property="twitter:image:alt" content="KBW" />
    <link rel="canonical" href="https://www.kbwchambers.com" />
    <script type="application/ld+json">{"@type": "WebPage","name": "Barristers | Legal Practice Leeds | KBW Barristers Chambers","url": "https://www.kbwchambers.com/"}}</script>

    <!-- Styles -->
    <link href="{{ asset('assets/frontend/bundles/sitestyle.css') }}" rel="stylesheet" />


    <!-- Scripts -->
    <script src="{{ asset('assets/frontend/bundles/site.js') }}"></script>

    <script src="https://www.kbwchambers.com/scripts/Geeks.Scripts.js?v=1.8"></script>
    <script type="text/javascript" src="https://www.kbwchambers.com/scripts/owl.carousel.min.js"></script>

    <script type="text/javascript">
        function fnRobots() {
            var cKName = "CC_IsReal";
            var cKValue = getCookie(cKName);
            if (cKValue == "") {
                setCookie1(cKName, '1', 365);
            }
        }

        function setCookie1(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + "; path=/";
        }

        function getCookie(cname) {
            var data = "";
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1);
                if (c.indexOf(name) == 0) {
                    data = decodeURI(c.substring(name.length, c.length));
                }
            }
            return data;
        }

        function checkCookie() {
            var user = getCookie("KBWCookie");

            if (user != "") {
                $('#divCookie').removeClass('showCookie');
            } else {
                $('#divCookie').addClass('showCookie');
            }
        }

        function hidediv() {
            $('#divCookie').removeClass('showCookie');
        }

        function AIUpdateURL(oldURL, newURL) {
            if (window.location.href === oldURL) {
                window.history.pushState("object or string", "Title", newURL);
            }
        }

        function fnHdrPhnTrack() {
            gtag('event', 'send', {
                'event_category': 'header click to call - cta',
                'event_action': 'click',
                'event_label': 'header click to call'
            });
        }


        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57)) return false;
            return true;
        }
    </script>

    <script type="text/javascript">
        function fnOpenPopupForm(sUrl) {
            $('html').addClass('popupShown');
            $('body').addClass('modal-open');
            var cls = "pop-form";
            OpenModalCSpinner(sUrl, 'FAST', '500', $(window).width(), cls);
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {

            //fnOpenPopupById('dvThankMsgPop');
            checkCookie();

            $('.grpl05click').on('click', function() {
                $('#main-block').removeClass('slide');
            });
            $('.gray_33').on('click', function() {
                $('#main-block').addClass('slide');
            });

            //form cursor fixed for iphone
            $('a.popupTrigger').on('click', function() {
                $('body').css({
                    "position": ""
                });
            });
            $('.close').on('click', function() {
                $('body').css({
                    "position": ""
                });
                $('.overlaybg').removeClass('opendiv');
                $('.bgDark').removeClass('openBg');
                $('.modal-container').hide();
                $('.modal-container').addClass('out');
                $('body').removeClass('modal-active');
                $('body').addClass('scroll');

            });
            $('.close').on('tap', function() {
                $('body').css({
                    "position": ""
                });
                $('.overlaybg').removeClass('opendiv');
            });

            // Initialize Swiper Slider
            setTimeout(function() {
                $('.swiper-container').each(function() {
                    var isLoop = $(this).find('.swiper-slide').length > 1 ? true : false;
                    var swiper = new Swiper(this, {
                        speed: 800,
                        spaceBetween: 0,
                        observer: true,
                        observeParents: true,
                        centeredSlides: true,
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                            type: 'custom',
                            renderCustom: function(swiper, current, total) {
                                var out = ''
                                for (i = 1; i < total + 1; i++) {
                                    if (i == current) {
                                        out = out +
                                            '<span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex=' +
                                            i +
                                            ' role="button" aria-label="Go to slide ' +
                                            i + 1 + '"></span>';
                                    } else {
                                        out = out +
                                            '<span class="swiper-pagination-bullet" tabindex=' +
                                            i +
                                            ' role="button" aria-label="Go to slide ' +
                                            i + 1 + '"></span>';
                                    }
                                };
                                return out;
                            },
                        },
                        //navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
                        loop: isLoop,
                        autoplay: isLoop ? {
                            delay: 5000,
                            disableOnInteraction: false
                        } : false,
                    });
                }, 2500);
            });

            function equalHeight() {
                $('.grid').each(function() {
                    var highestBox = 0;
                    $('.e_promoblock .equalElement', this).each(function() {
                        if ($(this).height() > highestBox) {
                            highestBox = $(this).height();
                        }
                    });
                    $('.e_promoblock .equalElement', this).height(highestBox);
                });
            }

            equalHeight();
        });

        function fnOpenPopup() {
            $('html').addClass('popupShown');
            $('body').addClass('modal-open');
            $(".modal-backdrop").removeClass('hide');
            $(".modal-backdrop").addClass('show');
        }

        function fnClosePopup() {
            $('html').removeClass('popupShown');
            $('body').removeClass('modal-open');
            $(".modal-backdrop").removeClass('show');
            $(".modal-backdrop").addClass('hide');
        }

        function fnMessagePop(msg) {
            $("#pPopMsgBody").html(msg);
            fnOpenPopup();

            $("#dvMsgPop").addClass('show');
            $("#dvMsgPop").css("display", "block");
        }

        function fnOpenPopupById(popId) {

            if (popId == "dvThankMsgPop")
                fnClosePopupById("dvFormGeneral");

            fnOpenPopup();
            $("#" + popId).addClass('show');
            $("#" + popId).css("display", "block");
        }

        function fnClosePopupById(popId) {
            fnClosePopup();
            $("#" + popId).removeClass('show');
            $("#" + popId).css("display", "none");

            //var sCurrUrl = window.location.href;
            //if ($(sCurrUrl + ":contains(contact-us)"))
            //{
            //    window.location.href= window.location.href;
            //}

            var sCurrUrl = window.location.href;

            if ((sCurrUrl).indexOf('contact-us') > -1 && popId == "dvThankMsgPop") {
                window.location.href = sCurrUrl;
            }
        }
    </script>
    <script type="text/javascript">
        //$(document).ready(function () {
        //    $(".numeric").bind("paste", function (e) {
        //        e.preventDefault();
        //    });
        //});
        $(document).on("input", ".numeric", function() {
            this.value = this.value.replace(/\D/g, '');
        });
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-45WDEDQ2FV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-45WDEDQ2FV');
    </script>

    <style type="text/css">
        @media screen and (max-width: 767px) {
            body {
                background: #fff;
            }
        }
    </style>
    <title>
        Barristers | Legal Practice Leeds | KBW Barristers Chambers
    </title>
    <meta name="description"
        content="At KBW Chambers we specialize in business &amp;amp; property, crime, employment &amp;amp; equality, family, immigration, police, personal injury, public &amp;amp; regulatory." />
</head>

<body onmousemove="fnRobots();" class="">
    <form method="post" action="./" id="Form1" style="display: flex; flex-direction: column;"
        autocomplete="off">
        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
            value="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" />

        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334" />
        <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
            value="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" />
        <input type="hidden" id="hfWebURL" value='https://www.kbwchambers.com/' />

        <!-- Header start -->

        <script type="text/jscript">
    $(document).ready(function () {
        fnCheckJobRoleFltr();
        $('.hdrMobNum').click(function () {
            $('.dvCall').slideToggle(200);
        });
        $('.navRecentView').click(function () {
            gtag('event', 'send', { 'event_category': 'general', 'event_action': 'click', 'event_label': 'recently viewed - top nav link clicked' });
        });
    });

    function fnCheckJobRoleFltr() {
        if ($(".head-slctJobRole").length) {
            $('body').addClass("head-slctJobRole-Shown");
        }
        else {
            $('body').removeClass("head-slctJobRole-Shown");
        }
    }
</script>
        <header>
            <div class="container align-items-center navHead">
                <a href="./" id="ucHeader1_lnkHome" title="Header Logo" class="logo">
                    <img src="{{ asset('assets/frontend/images/logo.png') }}" class="logo-image hide555"
                        alt="KBW Barristers Chambers" />
                    <img src="{{ asset('assets/frontend/images/logoSmall.png') }}" class="logo-image show555"
                        alt="KBW Barristers Chambers" />
                </a>
                <div class="headSocial">
                    <a class="trigger" href="https://twitter.com/kbwchambers" target="_blank">
                        <i class="icon" style="line-height: 0;">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter2023"></use>
                            </svg>
                        </i>
                    </a>
                    <a class="trigger" href="https://www.linkedin.com/company/kbw-chambers" target="_blank"><i
                            class="icon-linkedin2"></i></a>
                    <a class="trigger show767" href="tel:+44(0)01132971200" target="_blank"><i
                            class="fa fa-phone"></i></a>
                    <a class="trigger show767" href="mailto:clerks@kbwchambers.com"><i class="fa fa-envelope"></i></a>
                </div>
                <ul class="menu-top">
                    <li><a class="trigger" href="mailto:clerks@kbwchambers.com"><i
                                class="fa fa-envelope mr-1"></i>&nbsp;clerks@kbwchambers.com</a></li>
                    <li><a class="trigger callLink" href="tel:+441132971200"><span>tel:</span>&nbsp;0113 297 1200</a>
                    </li>
                    <li>
                        <a class="trigger navToggle sidebarTrigger" data-sidebar-id="sidebarMenu">
                            <img src="{{ asset('assets/frontend/images/bar_icon.png') }}" alt="bar"
                                class="" /></a>
                    </li>
                </ul>
            </div>
        </header>
        <nav class="sidebar right sidebarMenu" data-sidebar-id="sidebarMenu">
            <span class="close">
                <svg>
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#closeOutline"></use>
                </svg>
            </span>
            <div class="content">
                <div class="container">
                    <ul class="list-none headNavUl">
                        <li>
                            <div class="navClick"><a href="./" id="ucHeader1_lnkHomeSideBar">Home</a></div>
                        </li>

                        <li>
                            <div class="navClick">
                                <a id="ucHeader1_rptMenuTop2_aNavLink_0">
                                    About Us
                                    <span id="ucHeader1_rptMenuTop2_spnArrow_0"><i
                                            class="fa fa-angle-right"></i></span>
                                </a>
                                <input type="hidden" name="ctl00$ucHeader1$rptMenuTop2$ctl00$hdnNavId"
                                    id="ucHeader1_rptMenuTop2_hdnNavId_0" value="1" />
                            </div>
                            <div id="ucHeader1_rptMenuTop2_divSubMenu_0" class="cbp-hrsub navSub"
                                style="display: none;">
                                <ul id="ucHeader1_rptMenuTop2_dvSubMenu_0" class="list-none innerNavUl">

                                    <li id="ucHeader1_rptMenuTop2_rptSubMenu_0_liSuMenu_0">
                                        <a href="https://www.kbwchambers.com/about-us/introduction"
                                            id="ucHeader1_rptMenuTop2_rptSubMenu_0_lnkURL_0">
                                            Introduction to KBW
                                        </a>
                                    </li>

                                    <li id="ucHeader1_rptMenuTop2_rptSubMenu_0_liSuMenu_1">
                                        <a href="https://www.kbwchambers.com/about-us/service-standards"
                                            id="ucHeader1_rptMenuTop2_rptSubMenu_0_lnkURL_1">
                                            Service Standards
                                        </a>
                                    </li>

                                    <li id="ucHeader1_rptMenuTop2_rptSubMenu_0_liSuMenu_2">
                                        <a href="https://www.kbwchambers.com/about-us/price-transparency"
                                            id="ucHeader1_rptMenuTop2_rptSubMenu_0_lnkURL_2">
                                            Price Transparency
                                        </a>
                                    </li>

                                    <li id="ucHeader1_rptMenuTop2_rptSubMenu_0_liSuMenu_3">
                                        <a href="https://www.kbwchambers.com/about-us/professional-governance"
                                            id="ucHeader1_rptMenuTop2_rptSubMenu_0_lnkURL_3">
                                            Professional Governance
                                        </a>
                                    </li>

                                    <li id="ucHeader1_rptMenuTop2_rptSubMenu_0_liSuMenu_4">
                                        <a href="https://www.kbwchambers.com/about-us/complaints-procedure"
                                            id="ucHeader1_rptMenuTop2_rptSubMenu_0_lnkURL_4">
                                            Complaints Procedure
                                        </a>
                                    </li>

                                    <li id="ucHeader1_rptMenuTop2_rptSubMenu_0_liSuMenu_5">
                                        <a href="https://www.kbwchambers.com/about-us/equality-and-diversity"
                                            id="ucHeader1_rptMenuTop2_rptSubMenu_0_lnkURL_5">
                                            Equality &amp; Diversity
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li>
                            <div class="navClick">
                                <a id="ucHeader1_rptMenuTop2_aNavLink_1">
                                    Practice Area
                                    <span id="ucHeader1_rptMenuTop2_spnArrow_1"><i
                                            class="fa fa-angle-right"></i></span>
                                </a>
                                <input type="hidden" name="ctl00$ucHeader1$rptMenuTop2$ctl01$hdnNavId"
                                    id="ucHeader1_rptMenuTop2_hdnNavId_1" value="55" />
                            </div>
                            <div id="ucHeader1_rptMenuTop2_divSubMenu_1" class="cbp-hrsub navSub"
                                style="display: none;">
                                <ul id="ucHeader1_rptMenuTop2_dvSubMenu_1" class="list-none innerNavUl">

                                    <li id="ucHeader1_rptMenuTop2_rptSubMenu_1_liSuMenu_0">
                                        <a href="https://www.kbwchambers.com/practice-area/crime"
                                            id="ucHeader1_rptMenuTop2_rptSubMenu_1_lnkURL_0">
                                            Crime
                                        </a>
                                    </li>

                                    <li id="ucHeader1_rptMenuTop2_rptSubMenu_1_liSuMenu_1">
                                        <a href="https://www.kbwchambers.com/practice-area/police"
                                            id="ucHeader1_rptMenuTop2_rptSubMenu_1_lnkURL_1">
                                            Police
                                        </a>
                                    </li>

                                    <li id="ucHeader1_rptMenuTop2_rptSubMenu_1_liSuMenu_2">
                                        <a href="https://www.kbwchambers.com/practice-area/public-and-regulatory"
                                            id="ucHeader1_rptMenuTop2_rptSubMenu_1_lnkURL_2">
                                            Public &amp; Regulatory
                                        </a>
                                    </li>

                                    <li id="ucHeader1_rptMenuTop2_rptSubMenu_1_liSuMenu_3">
                                        <a href="https://www.kbwchambers.com/practice-area/family"
                                            id="ucHeader1_rptMenuTop2_rptSubMenu_1_lnkURL_3">
                                            Family
                                        </a>
                                    </li>

                                    <li id="ucHeader1_rptMenuTop2_rptSubMenu_1_liSuMenu_4">
                                        <a href="https://www.kbwchambers.com/practice-area/court-of-protection"
                                            id="ucHeader1_rptMenuTop2_rptSubMenu_1_lnkURL_4">
                                            Court of Protection
                                        </a>
                                    </li>

                                    <li id="ucHeader1_rptMenuTop2_rptSubMenu_1_liSuMenu_5">
                                        <a href="https://www.kbwchambers.com/practice-area/business-and-property"
                                            id="ucHeader1_rptMenuTop2_rptSubMenu_1_lnkURL_5">
                                            Business &amp; Property
                                        </a>
                                    </li>

                                    <li id="ucHeader1_rptMenuTop2_rptSubMenu_1_liSuMenu_6">
                                        <a href="https://www.kbwchambers.com/practice-area/clinical-negligence"
                                            id="ucHeader1_rptMenuTop2_rptSubMenu_1_lnkURL_6">
                                            Clinical Negligence
                                        </a>
                                    </li>

                                    <li id="ucHeader1_rptMenuTop2_rptSubMenu_1_liSuMenu_7">
                                        <a href="https://www.kbwchambers.com/practice-area/employment-and-equality"
                                            id="ucHeader1_rptMenuTop2_rptSubMenu_1_lnkURL_7">
                                            Employment &amp; Equality
                                        </a>
                                    </li>

                                    <li id="ucHeader1_rptMenuTop2_rptSubMenu_1_liSuMenu_8">
                                        <a href="https://www.kbwchambers.com/practice-area/personal-injury"
                                            id="ucHeader1_rptMenuTop2_rptSubMenu_1_lnkURL_8">
                                            Personal Injury
                                        </a>
                                    </li>

                                    <li id="ucHeader1_rptMenuTop2_rptSubMenu_1_liSuMenu_9">
                                        <a href="https://www.kbwchambers.com/practice-area/sports-law"
                                            id="ucHeader1_rptMenuTop2_rptSubMenu_1_lnkURL_9">
                                            Sports Law
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li>
                            <div class="navClick">
                                <a href="https://www.kbwchambers.com/barristers" id="ucHeader1_rptMenuTop2_aNavLink_2"
                                    onclick="TrackAIGen(&#39;SideMenu&#39;, &#39;Click&#39;,&#39;Barristers&#39;);">
                                    Barristers

                                </a>
                                <input type="hidden" name="ctl00$ucHeader1$rptMenuTop2$ctl02$hdnNavId"
                                    id="ucHeader1_rptMenuTop2_hdnNavId_2" value="56" />
                            </div>
                            <div id="ucHeader1_rptMenuTop2_divSubMenu_2" class="cbp-hrsub" style="display: none;">
                                <ul id="ucHeader1_rptMenuTop2_dvSubMenu_2" class="list-none innerNavUl">

                                </ul>
                            </div>
                        </li>

                        <li>
                            <div class="navClick">
                                <a href="https://www.kbwchambers.com/clerks" id="ucHeader1_rptMenuTop2_aNavLink_3"
                                    onclick="TrackAIGen(&#39;SideMenu&#39;, &#39;Click&#39;,&#39;Clerks&#39;);">
                                    Clerks

                                </a>
                                <input type="hidden" name="ctl00$ucHeader1$rptMenuTop2$ctl03$hdnNavId"
                                    id="ucHeader1_rptMenuTop2_hdnNavId_3" value="57" />
                            </div>
                            <div id="ucHeader1_rptMenuTop2_divSubMenu_3" class="cbp-hrsub" style="display: none;">
                                <ul id="ucHeader1_rptMenuTop2_dvSubMenu_3" class="list-none innerNavUl">

                                </ul>
                            </div>
                        </li>

                        <li>
                            <div class="navClick">
                                <a href="https://www.kbwchambers.com/direct-access"
                                    id="ucHeader1_rptMenuTop2_aNavLink_4"
                                    onclick="TrackAIGen(&#39;SideMenu&#39;, &#39;Click&#39;,&#39;Direct Access&#39;);">
                                    Direct Access

                                </a>
                                <input type="hidden" name="ctl00$ucHeader1$rptMenuTop2$ctl04$hdnNavId"
                                    id="ucHeader1_rptMenuTop2_hdnNavId_4" value="107" />
                            </div>
                            <div id="ucHeader1_rptMenuTop2_divSubMenu_4" class="cbp-hrsub" style="display: none;">
                                <ul id="ucHeader1_rptMenuTop2_dvSubMenu_4" class="list-none innerNavUl">

                                </ul>
                            </div>
                        </li>

                        <li>
                            <div class="navClick">
                                <a href="https://www.kbwchambers.com/news" id="ucHeader1_rptMenuTop2_aNavLink_5"
                                    target="_self"
                                    onclick="TrackAIGen(&#39;SideMenu&#39;, &#39;Click&#39;,&#39;News&#39;);">
                                    News

                                </a>
                                <input type="hidden" name="ctl00$ucHeader1$rptMenuTop2$ctl05$hdnNavId"
                                    id="ucHeader1_rptMenuTop2_hdnNavId_5" value="7" />
                            </div>
                            <div id="ucHeader1_rptMenuTop2_divSubMenu_5" class="cbp-hrsub" style="display: none;">
                                <ul id="ucHeader1_rptMenuTop2_dvSubMenu_5" class="list-none innerNavUl">

                                </ul>
                            </div>
                        </li>

                        <li>
                            <div class="navClick">
                                <a id="ucHeader1_rptMenuTop2_aNavLink_6">
                                    Recruitment
                                    <span id="ucHeader1_rptMenuTop2_spnArrow_6"><i
                                            class="fa fa-angle-right"></i></span>
                                </a>
                                <input type="hidden" name="ctl00$ucHeader1$rptMenuTop2$ctl06$hdnNavId"
                                    id="ucHeader1_rptMenuTop2_hdnNavId_6" value="8" />
                            </div>
                            <div id="ucHeader1_rptMenuTop2_divSubMenu_6" class="cbp-hrsub navSub"
                                style="display: none;">
                                <ul id="ucHeader1_rptMenuTop2_dvSubMenu_6" class="list-none innerNavUl">

                                    <li id="ucHeader1_rptMenuTop2_rptSubMenu_6_liSuMenu_0">
                                        <a href="https://www.kbwchambers.com/recruitment/tenancy"
                                            id="ucHeader1_rptMenuTop2_rptSubMenu_6_lnkURL_0">
                                            Tenancy
                                        </a>
                                    </li>

                                    <li id="ucHeader1_rptMenuTop2_rptSubMenu_6_liSuMenu_1">
                                        <a href="https://www.kbwchambers.com/recruitment/probationary-tenancy-third-six-pupillage"
                                            id="ucHeader1_rptMenuTop2_rptSubMenu_6_lnkURL_1">
                                            Probationary Tenancy / Third Six Pupillage
                                        </a>
                                    </li>

                                    <li id="ucHeader1_rptMenuTop2_rptSubMenu_6_liSuMenu_2">
                                        <a href="https://www.kbwchambers.com/recruitment/pupillage"
                                            id="ucHeader1_rptMenuTop2_rptSubMenu_6_lnkURL_2">
                                            Pupillage
                                        </a>
                                    </li>

                                    <li id="ucHeader1_rptMenuTop2_rptSubMenu_6_liSuMenu_3">
                                        <a href="https://www.kbwchambers.com/recruitment/vacancies"
                                            id="ucHeader1_rptMenuTop2_rptSubMenu_6_lnkURL_3">
                                            Vacancies
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li>
                            <div class="navClick">
                                <a href="https://www.kbwchambers.com/contact-us" id="ucHeader1_rptMenuTop2_aNavLink_7"
                                    target="_self"
                                    onclick="TrackAIGen(&#39;SideMenu&#39;, &#39;Click&#39;,&#39;Contact us&#39;);">
                                    Contact us

                                </a>
                                <input type="hidden" name="ctl00$ucHeader1$rptMenuTop2$ctl07$hdnNavId"
                                    id="ucHeader1_rptMenuTop2_hdnNavId_7" value="9" />
                            </div>
                            <div id="ucHeader1_rptMenuTop2_divSubMenu_7" class="cbp-hrsub" style="display: none;">
                                <ul id="ucHeader1_rptMenuTop2_dvSubMenu_7" class="list-none innerNavUl">

                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <script type="text/javascript">
            //$(document).ready(function () {
            //   $(".navClick").click(function () {

            //      var IsVisible = $(this).next('.navSub').is(":visible");

            //      if (!IsVisible) {
            //         // SHOW
            //         $('.navClick').removeClass("open");
            //         $('.navClick .fa').removeClass("open");
            //         $('.navSub').hide();

            //         $(this).addClass('open');
            //         $(this).find('.fa-angle-right').addClass("open");
            //         $(this).next('.navSub').slideToggle();
            //      }
            //      else {
            //         // HIDE
            //         $(this).removeClass('open');
            //         $('.navClick').removeClass("open");
            //         $('.navSub').slideToggle();
            //         $('.navClick .fa').removeClass("open");
            //      }

            //      //$(this).find('.fa-angle-right').toggleClass("open");

            //   });
            //});

            $(document).ready(function() {
                $(".navClick").on("click", function() {
                    if ($(this).hasClass('open')) {
                        $('.navClick').removeClass('open');
                        $('.cbp-hrsub.navSub').slideUp();
                    } else {
                        var oCurr = $(this);
                        $('.navClick').removeClass('open');
                        $(oCurr).addClass('open');
                        $(oCurr).siblings(".cbp-hrsub.navSub").slideDown();
                        $('.cbp-hrsub.navSub').not($(oCurr).siblings(".cbp-hrsub.navSub")).slideUp();
                    }
                });
            });




            function fnRedirctPage(url, target) {
                window.open(url, target);
            }

            $(document).ready(function() {
                $(".mobSearch").click(function() {
                    $('.head-Search').addClass("shown");
                });
                $(".mobSearchCls").click(function() {
                    $('.head-Search').removeClass("shown");
                });
            });

            //var txtSearchHeader = document.getElementById("txtSearchHeader");
            //txtSearchHeader.addEventListener("keydown", function (e) {
            //    if (e.code === "Enter") {
            //        fnSearch('FreeSearch', 'txtSearchHeader');
            //    }
            //});
        </script>

        <!-- Main start -->
        <main id="main-block" class="">
            <!-- Section start -->

            <script type="text/javascript">
                $(document).ready(function() {
                    $('.topMenuBarBtn').click(function() {
                        $('.topBar').addClass('visible');
                    });
                    $('.topBarClose').click(function() {
                        $('.topBar').removeClass('visible');
                    });
                });

                $(window).resize(function() {
                    if ($(window).width() > 767)
                        $('#ele_999999').hide();
                });
            </script>


            <!--Elements-->



            <!--Forms-->

            <section class=''>
                <div class='container'>
                    <div class='row grid_6_3_3_3_3'>

                        <div class='col-6 '>
                            <div id="MainContent_ucFormControls_rptRows_rptElements_0_pnlElement_0"
                                class="e_bannerslider theme2">


                                <div class="ucBanner">
                                    <div class="swiper-container">
                                        <ul class="swiper-wrapper">

                                            <li class='selected promoSlider swiper-slide slideWithNone'
                                                style='background:  #fff url(https://www.kbwchambers.com/assets/media/homebannergrey.jpg);'>
                                                <div class='bannerContent cAlignLeft cAlignTop'>
                                                    <div class="justify-content wide">
                                                        <div class="container">
                                                            <h2>
                                                                <span class="ColorWH ">Welcome to KBW Chambers</span>
                                                            </h2>
                                                            <h3>
                                                                <span class=" ColorWH ">KBW Barristers Chambers in
                                                                    Leeds is a widely respected set of barristers with a
                                                                    rich heritage that stems back 60 years</span>
                                                            </h3>



                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="ucBannerAfter"></span>
                                                <span class="ucBannerHover" style="background-color: ;"></span>

                                                </a>
                                            </li>

                                            <li class='promoSlider swiper-slide slideWithlnk'
                                                style='background: #fff url(https://www.kbwchambers.com/assets/media/slider3_01.jpg);'>
                                                <div class='bannerContent cAlignLeft cAlignTop'>
                                                    <div class="justify-content wide">
                                                        <div class="container">
                                                            <h2>
                                                                <span class="ColorWH ">Welcome to KBW Chambers</span>
                                                            </h2>
                                                            <h3>
                                                                <span class=" ColorWH ">KBW Barristers Chambers in
                                                                    Leeds is a widely respected set of barristers with a
                                                                    rich heritage that stems back 60 years</span>
                                                            </h3>



                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="ucBannerAfter"></span>
                                                <span class="ucBannerHover" style="background-color: ;"></span>

                                                </a>
                                            </li>

                                        </ul>
                                        <!-- Add Pagination -->

                                    </div>
                                </div>
                                <script type="text/javascript">
                                    document.addEventListener('touchstart', function(event) {
                                        if (typeof video !== "undefined")
                                            video.play();
                                    }, false);
                                </script>

                            </div>
                        </div>

                        <div class='col-3 '>
                            <div id="MainContent_ucFormControls_rptRows_rptElements_0_pnlElement_1"
                                class="e_promoblock">

                                <div id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_1_lnk_1"
                                    class="ucPromoBlock tintVisible "
                                    style="background-image: url(https://www.kbwchambers.com/assets/media/expertiseblock_01.jpg);  background-size: cover;  background-position: center;background-color:#850000;">
                                    <div class="element-thumb">
                                        <a href='https://www.kbwchambers.com/practice-area' runat='server'
                                            target='_self'><img
                                                src='https://www.kbwchambers.com/assets/media/expertiseblock_01.jpg'
                                                alt='Expertise Block' class='wide' /></a>
                                    </div>
                                    <div class="element-textblock">
                                        <div class="element-textwrap">
                                            <h2 id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_1_dvHeading_1"
                                                class="element-heading" style="color:#ffffff;">KBW Expertise</h2>
                                        </div>
                                        <div id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_1_dvDescMain_1"
                                            class="element-description p">
                                            <div id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_1_dvDesc_1"
                                                style="color:#ffffff;">KBW Barristers Chambers in Leeds is widely
                                                respected with a rich heritage </div>

                                        </div>
                                        <p id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_1_dvButton_1"
                                            class="dvButton mb-0 BxLink " style="line-height: 1;">
                                            <a href="https://www.kbwchambers.com/practice-area"
                                                id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_1_btnPopUp_1"
                                                style="color:#ffffff;fill:#ffffff;"
                                                class="link arrowLink  "><span>Read more<svg>
                                                        <use xmlns:xlink='http://www.w3.org/1999/xlink'
                                                            xlink:href='#right-long-arrow'></use>
                                                    </svg></span></a>
                                        </p>
                                    </div>
                                    <span id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_1_spnImgTint_1"
                                        class="imgBlockTint" style="background-color:#850000!important;"></span>
                                    <span id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_1_spnImgHovr_1"
                                        class="imgBlockHover" style="background-color:#850000!important;"></span>
                                </div>


                            </div>
                        </div>

                        <div class='col-3 '>
                            <div id="MainContent_ucFormControls_rptRows_rptElements_0_pnlElement_2"
                                class="e_promoblock">

                                <div id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_2_lnk_2"
                                    class="ucPromoBlock"
                                    style="background-image: url(https://www.kbwchambers.com/assets/media/ourheritageblock_01.jpg);  background-size: cover;  background-position: center;background-color:#000000;">
                                    <div class="element-thumb">
                                        <a href='https://www.kbwchambers.com/about-us/introduction' runat='server'
                                            target='_self'><img
                                                src='https://www.kbwchambers.com/assets/media/ourheritageblock_01.jpg'
                                                alt='Our Heritage block' class='wide' /></a>
                                    </div>
                                    <div class="element-textblock">
                                        <div class="element-textwrap">
                                            <h2 id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_2_dvHeading_2"
                                                class="element-heading" style="color:#ffffff;">Our Heritage</h2>
                                        </div>
                                        <div id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_2_dvDescMain_2"
                                            class="element-description p">
                                            <div id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_2_dvDesc_2"
                                                style="color:#ffffff;">KBW Barristers Chambers in Leeds is widely
                                                respected with a rich heritage.</div>

                                        </div>
                                        <p id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_2_dvButton_2"
                                            class="dvButton mb-0 BxLink " style="line-height: 1;">
                                            <a href="https://www.kbwchambers.com/about-us/introduction"
                                                id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_2_btnPopUp_2"
                                                style="color:#ffffff;fill:#ffffff;"
                                                class="link arrowLink  "><span>About us<svg>
                                                        <use xmlns:xlink='http://www.w3.org/1999/xlink'
                                                            xlink:href='#right-long-arrow'></use>
                                                    </svg></span></a>
                                        </p>
                                    </div>
                                    <span id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_2_spnImgTint_2"
                                        class="imgBlockTint" style="visibility:hidden;"></span>
                                    <span id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_2_spnImgHovr_2"
                                        class="imgBlockHover" style="background-color:#570000!important;"></span>
                                </div>


                            </div>
                        </div>

                        <div class='col-3 '>
                            <div id="MainContent_ucFormControls_rptRows_rptElements_0_pnlElement_3"
                                class="e_promoblock">

                                <div id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_3_lnk_3"
                                    class="ucPromoBlock"
                                    style="background-image: url(https://www.kbwchambers.com/assets/media/contactusblock_01.jpg);  background-size: cover;  background-position: center;background-color:#000000;">
                                    <div class="element-thumb">
                                        <a href='https://www.kbwchambers.com/contact-us' runat='server'
                                            target='_self'><img
                                                src='https://www.kbwchambers.com/assets/media/contactusblock_01.jpg'
                                                alt='Contact us block' class='wide' /></a>
                                    </div>
                                    <div class="element-textblock">
                                        <div class="element-textwrap">
                                            <h2 id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_3_dvHeading_3"
                                                class="element-heading" style="color:#ffffff;">Contact KBW Chambers
                                            </h2>
                                        </div>
                                        <div id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_3_dvDescMain_3"
                                            class="element-description p">
                                            <div id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_3_dvDesc_3"
                                                style="color:#ffffff;">KBW Barristers Chambers in Leeds is widely
                                                respected with a rich heritage.</div>

                                        </div>
                                        <p id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_3_dvButton_3"
                                            class="dvButton mb-0 BxLink " style="line-height: 1;">
                                            <a href="https://www.kbwchambers.com/contact-us"
                                                id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_3_btnPopUp_3"
                                                style="color:#ffffff;fill:#ffffff;"
                                                class="link arrowLink  "><span>Contact us<svg>
                                                        <use xmlns:xlink='http://www.w3.org/1999/xlink'
                                                            xlink:href='#right-long-arrow'></use>
                                                    </svg></span></a>
                                        </p>
                                    </div>
                                    <span id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_3_spnImgTint_3"
                                        class="imgBlockTint" style="visibility:hidden;"></span>
                                    <span id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_3_spnImgHovr_3"
                                        class="imgBlockHover" style="background-color:#570000!important;"></span>
                                </div>


                            </div>
                        </div>

                        <div class='col-3 '>
                            <div id="MainContent_ucFormControls_rptRows_rptElements_0_pnlElement_4" class="e_news">



                                <div class="ucNews articleList">
                                    <h2><span
                                            id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_4_ltrTitle_4">Latest
                                            News:</span><a href="news">See all</a></h2>
                                    <div class="row justify-content-start">
                                        <div class="owl--carousel carousel"
                                            data-options='{"dots": false, "loop": false, "autoHeight": true, "nav": true, "autoplay": true, "autoplayHoverPause": true, "smartSpeed": 400, "margin": 0, "responsive": {"0": {"items": 1}, "767": {"items": 1}, "1020": {"items": 1}}}'>

                                            <div class="col-12">
                                                <div class="card card--article p-2_5 ">
                                                    <div class="content">
                                                        <span class="date">08 Sep 2023</span>
                                                        <h3 class="headline">Damian Broadbent successful in fact
                                                            finding hearing. </h3>

                                                        <a href='https://www.kbwchambers.com/damian-broadbent-successful-in-fact-finding-hearing-'
                                                            title="Read full story" class="link">Read full story</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="card card--article p-2_5 ">
                                                    <div class="content">
                                                        <span class="date">25 Aug 2023</span>
                                                        <h3 class="headline">Dr. Fuad Matthew Caswell </h3>

                                                        <a href='https://www.kbwchambers.com/dr-fuad-matthew-caswell'
                                                            title="Read full story" class="link">Read full story</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="card card--article p-2_5 ">
                                                    <div class="content">
                                                        <span class="date">04 Aug 2023</span>
                                                        <h3 class="headline">Defendant acquitted of allegedly
                                                            exploiting and raping a young woman </h3>

                                                        <a href='https://www.kbwchambers.com/defendant-acquitted-of-allegedly-exploiting-and-raping-a-young-woman'
                                                            title="Read full story" class="link">Read full story</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="card card--article p-2_5 ">
                                                    <div class="content">
                                                        <span class="date">04 Aug 2023</span>
                                                        <h3 class="headline">Conor Quinn secures a Not Guilty verdict
                                                            in respect of an allegation of attempting to pervert the
                                                            course of a murder investigation </h3>

                                                        <a href='https://www.kbwchambers.com/conor-quinn-secures-a-not-guilty-verdict-in-respect-of-an-allegation-of-attempting-to-pervert-the-course-of-a-murder-investigation'
                                                            title="Read full story" class="link">Read full story</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="card card--article p-2_5 ">
                                                    <div class="content">
                                                        <span class="date">03 Aug 2023</span>
                                                        <h3 class="headline">Damian Broadbent successful in serious
                                                            non-accidental injury case </h3>

                                                        <a href='https://www.kbwchambers.com/damian-broadbent-successful-in-serious-non-accidental-injury-case'
                                                            title="Read full story" class="link">Read full story</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="card card--article p-2_5 ">
                                                    <div class="content">
                                                        <span class="date">27 Jul 2023</span>
                                                        <h3 class="headline">Daniel Ingham successfully defends
                                                            teenager accused of GBH before Leeds Crown Court. </h3>

                                                        <a href='https://www.kbwchambers.com/daniel-ingham-successfully-defends-teenager-accused-of-gbh-before-leeds-crown-court-'
                                                            title="Read full story" class="link">Read full story</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="card card--article p-2_5 ">
                                                    <div class="content">
                                                        <span class="date">25 May 2023</span>
                                                        <h3 class="headline">Donald Herrod </h3>

                                                        <a href='https://www.kbwchambers.com/donald-herrod'
                                                            title="Read full story" class="link">Read full story</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="card card--article p-2_5 ">
                                                    <div class="content">
                                                        <span class="date">15 May 2023</span>
                                                        <h3 class="headline">KBW is proud to announce that the Bar
                                                            Council has awarded us its Certificate of Recognition for
                                                            our work in the field of wellbeing. </h3>

                                                        <a href='https://www.kbwchambers.com/kbw-is-proud-to-announce-that-the-bar-council-has-awarded-us-its-certificate-of-recognition-for-our-work-in-the-field-of-wellbeing-'
                                                            title="Read full story" class="link">Read full story</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="card card--article p-2_5 ">
                                                    <div class="content">
                                                        <span class="date">08 May 2023</span>
                                                        <h3 class="headline">Manisha Marwaha appointed by His Majesty
                                                            The King as a Recorder </h3>

                                                        <a href='https://www.kbwchambers.com/manisha-marwaha-appointed-by-his-majesty-the-king-as-a-recorder'
                                                            title="Read full story" class="link">Read full story</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="card card--article p-2_5 ">
                                                    <div class="content">
                                                        <span class="date">03 May 2023</span>
                                                        <h3 class="headline">Father succeeds in Court of Appeal case
                                                            represented by June Venters KC </h3>

                                                        <a href='https://www.kbwchambers.com/father-succeeds-in-court-of-appeal-case-represented-by-june-venters-kc'
                                                            title="Read full story" class="link">Read full story</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="card card--article p-2_5 ">
                                                    <div class="content">
                                                        <span class="date">29 Apr 2023</span>
                                                        <h3 class="headline">Simon Mallett and Richard Honey KC have
                                                            just returned from Sierra Leone having completed advocacy
                                                            training </h3>

                                                        <a href='https://www.kbwchambers.com/simon-mallett-and-richard-honey-kc-have-just-returned-from-sierra-leone-having-completed-advocacy-training'
                                                            title="Read full story" class="link">Read full story</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="card card--article p-2_5 ">
                                                    <div class="content">
                                                        <span class="date">27 Apr 2023</span>
                                                        <h3 class="headline">Sad Announcement </h3>

                                                        <a href='https://www.kbwchambers.com/sad-announcement'
                                                            title="Read full story" class="link">Read full story</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="card card--article p-2_5 ">
                                                    <div class="content">
                                                        <span class="date">26 Apr 2023</span>
                                                        <h3 class="headline">Olivia Checa-Dover successfully presents
                                                            complex misconduct case involving racist messages </h3>

                                                        <a href='https://www.kbwchambers.com/olivia-checa-dover-successfully-presents-complex-misconduct-case-involving-racist-messages'
                                                            title="Read full story" class="link">Read full story</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="card card--article p-2_5 ">
                                                    <div class="content">
                                                        <span class="date">20 Apr 2023</span>
                                                        <h3 class="headline">Re EF (Abduction: Hague Convention
                                                            (Slovakia) [2023] EWHC 505 (Fam) </h3>

                                                        <a href='https://www.kbwchambers.com/re-ef-abduction-hague-convention-slovakia-2023-ewhc-505-fam-'
                                                            title="Read full story" class="link">Read full story</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="card card--article p-2_5 ">
                                                    <div class="content">
                                                        <span class="date">03 Apr 2023</span>
                                                        <h3 class="headline">KBW Pupil, Mahdev Singh Sachdev, was
                                                            invited to speak at a diversity event </h3>

                                                        <a href='https://www.kbwchambers.com/kbw-pupil-mahdev-singh-sachdev-was-invited-to-speak-at-a-diversity-event'
                                                            title="Read full story" class="link">Read full story</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <input type="hidden"
                                        name="ctl00$MainContent$ucFormControls$rptRows$ctl00$rptElements$ctl04$ctl00$hfCount"
                                        id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_4_hfCount_4"
                                        value="20" />
                                    <div id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_4_divPaging_4"
                                        class="col-12 text-right pagination" style="display: none!important">

                                        <ul>

                                            <li>
                                                <a class='active'>1</a>
                                            </li>

                                            <li>
                                                <a href='https://www.kbwchambers.com//?Page=2' 2>2</a>
                                            </li>

                                            <li
                                                id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_4_liOther_4">
                                                <a href='https://www.kbwchambers.com//?Page=3' rel='next'>...</a>
                                            </li>
                                            <li
                                                id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_4_liLastPage_4">
                                                <a href='https://www.kbwchambers.com//?Page=13'>13</a>
                                            </li>
                                        </ul>
                                        <a class='pg-nxt'
                                            href='https://www.kbwchambers.com//?Page=2'rel='prev'>Next<i
                                                class='icon-arrow-right'></i></a>
                                    </div>

                                </div>
                                <script type="text/javascript" src="https://www.kbwchambers.com/scripts/owl.carousel.min.js"></script>
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        var carouselDefaultConfiguration = {
                                            dots: false,
                                            loop: false,
                                            nav: true,
                                            navText: ["<i class='icon-chevron-thin-left'></i>", "<i class='icon-chevron-thin-right'></i>"],
                                            lazyLoad: true,
                                            items: 1,
                                        };
                                        if ($('.ucNews .owl--carousel')) {
                                            $('.ucNews .owl--carousel').each(function() {
                                                if ($(this).attr('data-options') !== undefined) {
                                                    $(this).owlCarousel($.extend(carouselDefaultConfiguration, $(this).data(
                                                        'options')));
                                                } else {
                                                    $(this).owlCarousel(carouselDefaultConfiguration);
                                                }
                                            });
                                        }
                                    });
                                </script>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class=''>
                <div class='container'>
                    <div class='row grid_4_4_4 align-items-center borderLayout'>

                        <div class='col-4  cAlignMid  borderLayoutCol'>
                            <div id="MainContent_ucFormControls_rptRows_rptElements_1_pnlElement_0"
                                class="e_textwithbtn">

                                <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_dvImgBlock_0"
                                    class="ucImage  cAlignLeft cAlignMid">

                                    <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_dvText_0"
                                        class="element-textblock">
                                        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_divTitle_0"
                                            class="element-textwrap">
                                            <h2 id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_dvHeading_0"
                                                class="element-heading">Our Barristers</h2>
                                        </div>
                                        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_dvDesc_0"
                                            class="element-description p">A breadth of specialist knowledge</div>
                                        <p id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_dvButton_0"
                                            class="dvButton mb-0" style="line-height: 1;">
                                            <a href="https://www.kbwchambers.com/barristers"
                                                id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_btnPopUp_0"
                                                class="link arrowLink">View<svg>
                                                    <use xmlns:xlink='http://www.w3.org/1999/xlink'
                                                        xlink:href='#right-long-arrow'></use>
                                                </svg></a>
                                        </p>
                                    </div>


                                </div>


                            </div>
                        </div>

                        <div class='col-4  cAlignMid  borderLayoutCol'>
                            <div id="MainContent_ucFormControls_rptRows_rptElements_1_pnlElement_1"
                                class="e_textwithbtn">

                                <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_1_dvImgBlock_1"
                                    class="ucImage  cAlignLeft cAlignMid">

                                    <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_1_dvText_1"
                                        class="element-textblock">
                                        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_1_divTitle_1"
                                            class="element-textwrap">
                                            <h2 id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_1_dvHeading_1"
                                                class="element-heading">Our Clerks</h2>
                                        </div>
                                        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_1_dvDesc_1"
                                            class="element-description p">Dedicated care and experience</div>
                                        <p id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_1_dvButton_1"
                                            class="dvButton mb-0" style="line-height: 1;">
                                            <a href="https://www.kbwchambers.com/clerks"
                                                id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_1_btnPopUp_1"
                                                class="link arrowLink">View<svg>
                                                    <use xmlns:xlink='http://www.w3.org/1999/xlink'
                                                        xlink:href='#right-long-arrow'></use>
                                                </svg></a>
                                        </p>
                                    </div>


                                </div>


                            </div>
                        </div>

                        <div class='col-4  cAlignMid  borderLayoutCol'>
                            <div id="MainContent_ucFormControls_rptRows_rptElements_1_pnlElement_2"
                                class="e_textwithbtn">

                                <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_2_dvImgBlock_2"
                                    class="ucImage  cAlignLeft cAlignMid">

                                    <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_2_dvText_2"
                                        class="element-textblock">
                                        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_2_divTitle_2"
                                            class="element-textwrap">
                                            <h2 id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_2_dvHeading_2"
                                                class="element-heading">Recruitment</h2>
                                        </div>
                                        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_2_dvDesc_2"
                                            class="element-description p">Modern chambers with a rich heritage</div>
                                        <p id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_2_dvButton_2"
                                            class="dvButton mb-0" style="line-height: 1;">
                                            <a href="https://www.kbwchambers.com/recruitment"
                                                id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_2_btnPopUp_2"
                                                class="link arrowLink">View<svg>
                                                    <use xmlns:xlink='http://www.w3.org/1999/xlink'
                                                        xlink:href='#right-long-arrow'></use>
                                                </svg></a>
                                        </p>
                                    </div>


                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class=''>
                <div class='container'>
                    <div class='row grid_12'>

                        <div class='col-12 '>
                            <div id="MainContent_ucFormControls_rptRows_rptElements_2_pnlElement_0"
                                class="e_practiceslider">


                                <div class="practiceBlock ucPracticeSlider">
                                    <h2 id="">Practice Areas</h2>
                                    <div class="owl--carousel carousel"
                                        data-options='{"dots": false, "loop": false, "autoHeight": true, "nav": true, "autoplay": true, "autoplayHoverPause": true, "smartSpeed": 400, "margin": 20, "responsive": {"0": {"items": 1}, "550": {"items": 3}, "760": {"items": 3}, "1020": {"items": 4}, "1190": {"items": 5}}}'>

                                        <div class="rptPractice" style='display:block;'>
                                            <a href='https://www.kbwchambers.com/practice-area/crime' title=''
                                                class=" ">
                                                <img src="https://www.kbwchambers.com/assets/media/crime_02.jpg"
                                                    id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptPractice_0_ImgClerks_0"
                                                    class="image--responsive" alt="Crime" title="Crime" />
                                                <span>Crime</span>
                                            </a>
                                        </div>

                                        <div class="rptPractice" style='display:block;'>
                                            <a href='https://www.kbwchambers.com/practice-area/clinical-negligence'
                                                title='' class=" ">
                                                <img src="https://www.kbwchambers.com/assets/media/clinicalnegligence_02.jpg"
                                                    id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptPractice_0_ImgClerks_1"
                                                    class="image--responsive" alt="Clinical Negligence"
                                                    title="Clinical Negligence" />
                                                <span>Clinical Negligence</span>
                                            </a>
                                        </div>

                                        <div class="rptPractice" style='display:block;'>
                                            <a href='https://www.kbwchambers.com/practice-area/personal-injury'
                                                title='' class=" ">
                                                <img src="https://www.kbwchambers.com/assets/media/personalinjury_02.jpg"
                                                    id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptPractice_0_ImgClerks_2"
                                                    class="image--responsive" alt="Personal Injury"
                                                    title="Personal Injury" />
                                                <span>Personal Injury</span>
                                            </a>
                                        </div>

                                        <div class="rptPractice" style='display:block;'>
                                            <a href='https://www.kbwchambers.com/practice-area/business-and-property'
                                                title='' class=" ">
                                                <img src="https://www.kbwchambers.com/assets/media/business&propertypracticearea_01_01.jpg"
                                                    id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptPractice_0_ImgClerks_3"
                                                    class="image--responsive" alt="Business &amp; Property"
                                                    title="Business &amp; Property" />
                                                <span>Business & Property</span>
                                            </a>
                                        </div>

                                        <div class="rptPractice" style='display:block;'>
                                            <a href='https://www.kbwchambers.com/practice-area/employment-and-equality'
                                                title='' class=" ">
                                                <img src="https://www.kbwchambers.com/assets/media/employmentandequalitypa.jpg"
                                                    id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptPractice_0_ImgClerks_4"
                                                    class="image--responsive" alt="Employment &amp; Equality"
                                                    title="Employment &amp; Equality" />
                                                <span>Employment & Equality</span>
                                            </a>
                                        </div>

                                        <div class="rptPractice" style='display:block;'>
                                            <a href='https://www.kbwchambers.com/practice-area/family' title=''
                                                class=" ">
                                                <img src="https://www.kbwchambers.com/assets/media/familypa.jpg"
                                                    id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptPractice_0_ImgClerks_5"
                                                    class="image--responsive" alt="Family" title="Family" />
                                                <span>Family</span>
                                            </a>
                                        </div>

                                        <div class="rptPractice" style='display:block;'>
                                            <a href='https://www.kbwchambers.com/practice-area/public-and-regulatory'
                                                title='' class=" ">
                                                <img src="https://www.kbwchambers.com/assets/media/publicandregulatorypa.jpg"
                                                    id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptPractice_0_ImgClerks_6"
                                                    class="image--responsive" alt="Public &amp; Regulatory"
                                                    title="Public &amp; Regulatory" />
                                                <span>Public & Regulatory</span>
                                            </a>
                                        </div>

                                        <div class="rptPractice" style='display:block;'>
                                            <a href='https://www.kbwchambers.com/practice-area/court-of-protection'
                                                title='' class=" ">
                                                <img src="https://www.kbwchambers.com/assets/media/courtofprotectionpa.jpg"
                                                    id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptPractice_0_ImgClerks_7"
                                                    class="image--responsive" alt="Court of Protection"
                                                    title="Court of Protection" />
                                                <span>Court of Protection</span>
                                            </a>
                                        </div>

                                        <div class="rptPractice" style='display:block;'>
                                            <a href='https://www.kbwchambers.com/practice-area/sports-law'
                                                title='' class=" ">
                                                <img src="https://www.kbwchambers.com/assets/media/sportslawpa.jpg"
                                                    id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptPractice_0_ImgClerks_8"
                                                    class="image--responsive" alt="Sports Law" title="Sports Law" />
                                                <span>Sports Law</span>
                                            </a>
                                        </div>

                                        <div class="rptPractice" style='display:block;'>
                                            <a href='https://www.kbwchambers.com/practice-area/police' title=''
                                                class=" ">
                                                <img src="https://www.kbwchambers.com/assets/media/policemen_03.jpg"
                                                    id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptPractice_0_ImgClerks_9"
                                                    class="image--responsive" alt="Police" title="Police" />
                                                <span>Police</span>
                                            </a>
                                        </div>

                                    </div>
                                    <p class="swipeHand show555">Swipe to view all<svg>
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#swipeHand">
                                            </use>
                                        </svg></p>
                                </div>
                                <script type="text/javascript" src="https://www.kbwchambers.com/scripts/owl.carousel.min.js"></script>
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        var carouselDefaultConfiguration = {
                                            dots: false,
                                            loop: false,
                                            nav: true,
                                            navText: [
                                                "<svg><use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-left-thin'></use></svg>",
                                                "<svg><use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg>"
                                            ],
                                            lazyLoad: true,
                                            items: 1,
                                        };
                                        if ($('.ucPracticeSlider .owl--carousel')) {
                                            $('.ucPracticeSlider .owl--carousel').each(function() {
                                                if ($(this).attr('data-options') !== undefined) {
                                                    $(this).owlCarousel($.extend(carouselDefaultConfiguration, $(this).data(
                                                        'options')));
                                                } else {
                                                    $(this).owlCarousel(carouselDefaultConfiguration);
                                                }
                                            });
                                        }
                                    });
                                </script>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class=''>
                <div class='container'>
                    <div class='row grid_12 align-items-center'>

                        <div class='col-12  cAlignMid '>
                            <div id="MainContent_ucFormControls_rptRows_rptElements_3_pnlElement_0"
                                class="e_textwithbtn">

                                <div id="MainContent_ucFormControls_rptRows_rptElements_3_ctl00_0_dvImgBlock_0"
                                    class="ucImage  cAlignLeft cAlignMid">

                                    <div id="MainContent_ucFormControls_rptRows_rptElements_3_ctl00_0_dvText_0"
                                        class="element-textblock">
                                        <div id="MainContent_ucFormControls_rptRows_rptElements_3_ctl00_0_divTitle_0"
                                            class="element-textwrap">
                                            <h2 id="MainContent_ucFormControls_rptRows_rptElements_3_ctl00_0_dvHeading_0"
                                                class="element-heading">KBW Chambers</h2>
                                        </div>
                                        <div id="MainContent_ucFormControls_rptRows_rptElements_3_ctl00_0_dvDesc_0"
                                            class="element-description p">
                                            <p>KBW Barristers Chambers in Leeds is a widely respected set of barristers
                                                with a rich heritage that stems back over 60 years. KBW is a
                                                multi-disciplinary set which has a strong reputation for quality work.
                                                Our cases range from the lowest Courts and Tribunals right up to the
                                                Supreme Court and at every level our barristers pride themselves on
                                                their attention to detail and breadth of specialist knowledge.</p>
                                            <p>Head of Chambers, <strong><a
                                                        href="https://www.kbwchambers.com/barrister/david-brooke-kc">David
                                                        Brooke KC</a></strong>, leads a strong team of over 46
                                                barristers, who have both a regional and national reputation in their
                                                practice areas. Many members of chambers have gone on to take up
                                                important judicial roles including a former Lord Chief Justice of
                                                England and Wales. Our barristers receive recognition in both the Legal
                                                500 and Chambers &amp; Partners guides to the Bar. KBW Barristers
                                                Chambers have also been awarded the <strong>&lsquo;Chambers of the
                                                    Year&rsquo;</strong> award in the <strong>Yorkshire Lawyer
                                                    Awards</strong> in both 2013 and 2014.</p>
                                            <div id="drum-screenshare-extension" style="display: none;">1.0.0.20</div>
                                            <div id="drum-screenshare-extension" style="display: none;">1.0.0.20</div>
                                            <div id="drum-screenshare-extension" style="display: none;">1.0.0.20</div>
                                            <div id="drum-screenshare-extension" style="display: none;">1.0.0.20</div>
                                        </div>
                                        <p id="MainContent_ucFormControls_rptRows_rptElements_3_ctl00_0_dvButton_0"
                                            class="dvButton mb-0" style="line-height: 1;">
                                            <a href="https://www.kbwchambers.com/about-us/introduction"
                                                id="MainContent_ucFormControls_rptRows_rptElements_3_ctl00_0_btnPopUp_0"
                                                class="link arrowLink">Read more<svg>
                                                    <use xmlns:xlink='http://www.w3.org/1999/xlink'
                                                        xlink:href='#right-long-arrow'></use>
                                                </svg></a>
                                        </p>
                                    </div>


                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class=''>
                <div class='container'>
                    <div class='row grid_12'>

                        <div class='col-12  '>
                            <div id="MainContent_ucFormControls_rptRows_rptElements_4_pnlElement_0" class="e_html">

                                <div id="MainContent_ucFormControls_rptRows_rptElements_4_ctl00_0_PText_0"
                                    class="ucHtml editorDiv">
                                    <style>
                                        .col-12 .e_textwithbtn {
                                            padding-left: 2.875rem;
                                            padding-right: 2.875rem;
                                        }
                                    </style>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class=''>
                <div class='container'>
                    <div class='row grid_12'>

                        <div class='col-12  '>
                            <div id="MainContent_ucFormControls_rptRows_rptElements_5_pnlElement_0" class="e_html">

                                <div id="MainContent_ucFormControls_rptRows_rptElements_5_ctl00_0_PText_0"
                                    class="ucHtml editorDiv">
                                    <script type="application/ld+json">
{"@context":"http:\/\/schema.org",
"@graph":[{"@type":"WebSite",
"name":"KBW Barristers Chambers",
"url":"https://www.kbwchambers.com/",
"potentialAction":
[{"@type":"SearchAction",
"target":"https://www.kbwchambers.com/?s={search_term_string}",
"query-input":"required name=search_term_string"}]},
{"@type":"WebPage","name":"Barristers | Legal Practice Leeds | KBW Barristers Chambers/",
"url":"https://www.kbwchambers.com/"},
{"@type":"Organization",
"name":"KBW Barristers Chambers",
"url":"https://www.kbwchambers.com/",
"logo":"https://www.kbwchambers.com/images/logo.png",
"sameAs":["https://twitter.com/kbwchambers",
"https://www.linkedin.com/company/kbw-chambers"]}]}</script>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <div id="MainContent_ucFormControls_pnlUserControl">


                <style type="text/css">
                    .htauto {
                        height: auto !important;
                    }
                </style>


                <div id="dvFormGeneral" class="modal fade dvGenEnqPop" style="display: none;">
                    <div class="modal-dialog modal-dialog-centered container--medium">
                        <div class="modal-content">
                            <div class="modal-body">
                                <span onclick="fnClosePopupById('dvFormGeneral')" class="close">
                                    <svg>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#closeRound">
                                        </use>
                                    </svg>
                                </span>
                                <div class="container">

                                    <div class="form">
                                        <input type="hidden"
                                            name="ctl00$MainContent$ucFormControls$ctl00$hdnEPageValue"
                                            id="MainContent_ucFormControls_ctl00_hdnEPageValue" />
                                        <input type="hidden"
                                            name="ctl00$MainContent$ucFormControls$ctl00$hdnEViewType"
                                            id="MainContent_ucFormControls_ctl00_hdnEViewType" value="Popup" />
                                        <div class="row row--max2rem">
                                            <div class="col-12">
                                                <div class="mb-2">
                                                    <label for="txtFirstNameGE">First Name<span
                                                            class="stk-req">*</span></label>
                                                    <input name="ctl00$MainContent$ucFormControls$ctl00$txtFirstNameGE"
                                                        type="text" maxlength="50" id="txtFirstNameGE"
                                                        tabindex="2" class="input wide form-control"
                                                        placeholder="First Name" name="firstname"
                                                        autocomplete="firstname" />
                                                </div>
                                                <div class=" mb-2">
                                                    <label for="txtLastNameGE">Last Name<span
                                                            class="stk-req">*</span></label>
                                                    <input name="ctl00$MainContent$ucFormControls$ctl00$txtLastNameGE"
                                                        type="text" maxlength="50" id="txtLastNameGE"
                                                        tabindex="3" class="input wide form-control"
                                                        placeholder="Last Name" autocomplete="on" />
                                                </div>

                                                <div class="mb-2">
                                                    <label for="txtEmailGE">Company Email<span
                                                            class="stk-req">*</span></label>

                                                    <input name="ctl00$MainContent$ucFormControls$ctl00$txtEmailGE"
                                                        type="text" maxlength="50" id="txtEmailGE" tabindex="4"
                                                        class="input wide form-control" placeholder="Company Email"
                                                        autocomplete="on" />
                                                </div>
                                                <div class="mb-2">
                                                    <label for="txtPhoneNumberGE">Phone Number<span
                                                            class="stk-req">*</span></label>
                                                    <input
                                                        name="ctl00$MainContent$ucFormControls$ctl00$txtPhoneNumberGE"
                                                        type="text" maxlength="12" id="txtPhoneNumberGE"
                                                        tabindex="5" class="input wide form-control  numeric"
                                                        placeholder="Phone Number" autocomplete="on" />

                                                </div>
                                                <div class="mb-2">
                                                    <label for="txtCompanyGE">Company Name<span
                                                            class="stk-req">*</span></label>
                                                    <input name="ctl00$MainContent$ucFormControls$ctl00$txtCompanyGE"
                                                        type="text" maxlength="100" id="txtCompanyGE"
                                                        class="input wide form-control" placeholder="Company Name" />
                                                </div>

                                                <div class="mb-2">
                                                    <label for="ddlCountryGE">Country<span
                                                            class="stk-req">*</span></label>
                                                    <select name="ctl00$MainContent$ucFormControls$ctl00$ddlCountryGE"
                                                        id="ddlCountryGE" class="wide form-control inp-req">
                                                        <option value="">Select Country</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Aland Islands">Aland Islands</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="American Samoa">American Samoa</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Anguilla">Anguilla</option>
                                                        <option value="Antarctica">Antarctica</option>
                                                        <option value="Antigua and Barbuda">Antigua and Barbuda
                                                        </option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Aruba">Aruba</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bermuda">Bermuda</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bolivia">Bolivia</option>
                                                        <option value="Bonaire, Saint Eustatius and Saba">Bonaire,
                                                            Saint Eustatius and Saba</option>
                                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                                        </option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Bouvet Island">Bouvet Island</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="British Indian Ocean Territory">British Indian
                                                            Ocean Territory</option>
                                                        <option value="British Virgin Islands">British Virgin Islands
                                                        </option>
                                                        <option value="Brunei">Brunei</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burma">Burma</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Cape Verde">Cape Verde</option>
                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                        <option value="Central African Republic">Central African
                                                            Republic</option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="China">China</option>
                                                        <option value="Christmas Island">Christmas Island</option>
                                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands
                                                        </option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Cook Islands">Cook Islands</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Curacao">Curacao</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czechia">Czechia</option>
                                                        <option value="Democratic Republic of the Congo">Democratic
                                                            Republic of the Congo</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="East Timor">East Timor</option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Eswatini">Eswatini</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Falkland Islands">Falkland Islands</option>
                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                        <option value="Federated States of Micronesia">Federated States
                                                            of Micronesia</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="French Guiana">French Guiana</option>
                                                        <option value="French Polynesia">French Polynesia</option>
                                                        <option value="French Southern and Antarctic Lands">French
                                                            Southern and Antarctic Lands</option>
                                                        <option value="Gabon">Gabon</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Gibraltar">Gibraltar</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Greenland">Greenland</option>
                                                        <option value="Grenada">Grenada</option>
                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                        <option value="Guam">Guam</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guernsey">Guernsey</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Heard Island and McDonald Islands">Heard Island
                                                            and McDonald Islands</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran">Iran</option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Isle of Man">Isle of Man</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Ivory Coast">Ivory Coast</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jersey">Jersey</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Kosovo">Kosovo</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Laos">Laos</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libya">Libya</option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macao">Macao</option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Mali">Mali</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                        <option value="Martinique">Martinique</option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Mayotte">Mayotte</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Moldova">Moldova</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montenegro">Montenegro</option>
                                                        <option value="Montserrat">Montserrat</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Namibia">Namibia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherlands">Netherlands</option>
                                                        <option value="New Caledonia">New Caledonia</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="Niue">Niue</option>
                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                        <option value="North Korea">North Korea</option>
                                                        <option value="North Macedonia">North Macedonia</option>
                                                        <option value="Northern Mariana Islands">Northern Mariana
                                                            Islands</option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau">Palau</option>
                                                        <option value="Palestine">Palestine</option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="Philippines">Philippines</option>
                                                        <option value="Pitcairn Islands">Pitcairn Islands</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Principality of Monaco">Principality of Monaco
                                                        </option>
                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Republic of the Congo">Republic of the Congo
                                                        </option>
                                                        <option value="Reunion">Reunion</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russia">Russia</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="Saint Barthelemy">Saint Barthelemy</option>
                                                        <option value="Saint Helena, Ascension and Tristan da Cunha">
                                                            Saint Helena, Ascension and Tristan da Cunha</option>
                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                        </option>
                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                        <option value="Saint Martin">Saint Martin</option>
                                                        <option value="Saint Pierre and Miquelon">Saint Pierre and
                                                            Miquelon</option>
                                                        <option value="Saint Vincent and the Grenadines">Saint Vincent
                                                            and the Grenadines</option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome and Principe">Sao Tome and Principe
                                                        </option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Serbia">Serbia</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Sint Maarten">Sint Maarten</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="South Georgia and South Sandwich Islands">South
                                                            Georgia and South Sandwich Islands</option>
                                                        <option value="South Korea">South Korea</option>
                                                        <option value="South Sudan">South Sudan</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Svalbard">Svalbard</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syria">Syria</option>
                                                        <option value="Taiwan">Taiwan</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania">Tanzania</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tokelau">Tokelau</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad and Tobago">Trinidad and Tobago
                                                        </option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Turks and Caicos Islands">Turks and Caicos
                                                            Islands</option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">United Arab Emirates
                                                        </option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States of America">United States of
                                                            America</option>
                                                        <option value="Uruguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Vatican City">Vatican City</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Vietnam">Vietnam</option>
                                                        <option value="Virgin Islands">Virgin Islands</option>
                                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                        <option value="Western Sahara">Western Sahara</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>

                                                    </select>
                                                </div>
                                                <div class="mb-2">
                                                    <label for="txtMessageGE">Your Enquiry<span
                                                            class="stk-req">*</span></label>
                                                    <textarea name="ctl00$MainContent$ucFormControls$ctl00$txtMessageGE" rows="2" cols="20"
                                                        id="txtMessageGE" tabindex="7" class="input wide form-control" maxlength="500" style="height: 64px;">
</textarea>
                                                </div>

                                                <div class="mb-2">
                                                    <div class="row">
                                                        <div class="col-6 hide767">
                                                            &nbsp;
                                                        </div>
                                                        <div class="col-6">
                                                            <a onclick="return ValidateEnquiryStep();"
                                                                id="MainContent_ucFormControls_ctl00_btnSaveEnquiry"
                                                                tabindex="7"
                                                                class="button--greenLight text-center wide"
                                                                href="javascript:__doPostBack(&#39;ctl00$MainContent$ucFormControls$ctl00$btnSaveEnquiry&#39;,&#39;&#39;)">Submit</a>
                                                            <div id="MainContent_ucFormControls_ctl00_divProcess"
                                                                style="display: none; text-align: center"
                                                                class="button--primary arrowButton wide">
                                                                <img src="https://www.kbwchambers.com/images/btn-loader.gif"
                                                                    alt="Loading" />
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
                    </div>
                </div>


                <script type="text/javascript">
                    function ValidateEnquiryStep() {
                        var Valid = true;
                        var Msg = "";

                        //Valid = fnValidateCaptcha('dvCaptchaEnq');
                        //if (!Valid) {
                        //    return false;
                        //}

                        var cName = $("#txtFirstNameGE");
                        if (cName.val() == "" || cName.val() == cName.attr("placeholder")) {
                            Msg += "Enter First Name. \n";
                            cName.addClass("errorCSS");
                            Valid = false;
                        } else
                            cName.removeClass("errorCSS");

                        var cLName = $("#txtLastNameGE");
                        if (cLName.val() == "" || cLName.val() == cLName.attr("placeholder")) {
                            Msg += "Enter Last Name. \n";
                            cLName.addClass("errorCSS");
                            Valid = false;
                        } else
                            cLName.removeClass("errorCSS");





                        var cEmail = $("#txtEmailGE");
                        var cPhone = $("#txtPhoneNumberGE");
                        var reg = /^[A-Z0-9._+-]+@[A-Z0-9.-]+\.[A-Z]{2,6}$/i;;
                        cEmail.removeClass("errorCSS");
                        cPhone.removeClass("errorCSS");


                        if ((cEmail.val() == "" || cEmail.val() == cEmail.attr("placeholder"))) {
                            Msg += "Enter Company Email. \n";
                            cEmail.addClass("errorCSS");
                            Valid = false;
                        } else if (!reg.test(cEmail.val())) {
                            Msg += "Invalid Email. \n";
                            cEmail.addClass("errorCSS");
                            Valid = false;
                        } else
                            cEmail.removeClass("errorCSS");

                        if ((cPhone.val() == "" || cPhone.val() == cPhone.attr("placeholder"))) {
                            Msg += "Enter Phone Number \n";
                            cPhone.addClass("errorCSS");
                            Valid = false;
                        } else if (cPhone.val().length < 10) {
                            Msg += "Invalid Phone Number. \n";
                            cPhone.addClass("errorCSS");
                            Valid = false;
                        } else
                            cPhone.removeClass("errorCSS");


                        var cCompanyEnq = $("#txtCompanyGE");
                        if (cCompanyEnq.val() == "" || cCompanyEnq.val() == cCompanyEnq.attr("placeholder")) {
                            Msg += "Enter Company Name. \n";
                            cCompanyEnq.addClass("errorCSS");
                            Valid = false;
                        } else
                            cCompanyEnq.removeClass("errorCSS");

                        var cCountry = $("#ddlCountryGE");
                        if (cCountry.val() == "" || cCountry.val() == null || cCountry.val() == "0") {
                            Msg += "Enter Country. \n";
                            cCountry.addClass("errorCSS");
                            Valid = false;
                        } else
                            cCountry.removeClass("errorCSS");

                        var cMessageGE = $("#txtMessageGE");
                        if (cMessageGE.val() == "" || cMessageGE.val() == cMessageGE.attr("placeholder")) {
                            Msg += "Enter Your Enquiry. \n";
                            cMessageGE.addClass("errorCSS");
                            Valid = false;
                        } else
                            cMessageGE.removeClass("errorCSS");




                        if (!Valid) {
                            alert(Msg);
                            $('#MainContent_ucFormControls_ctl00_divProcess').hide();
                            $('#MainContent_ucFormControls_ctl00_btnSaveEnquiry').show();
                        } else {

                            //ONLY ON MOBILE
                            if ($(window).width() < 767) {
                                gaMobileEnq();
                            }

                            $('#MainContent_ucFormControls_ctl00_divProcess').show();
                            $('#MainContent_ucFormControls_ctl00_btnSaveEnquiry').hide();


                            var enqType = '1';


                            var oServiceURL = 'https://www.kbwchambers.com/WebService.asmx/RegisterGeneralEnquiry';
                            var WebURL = 'https://www.kbwchambers.com/';
                            var path = window.location.pathname;
                            var page = path.split("/").pop();
                            $.ajax({
                                type: "POST",
                                contentType: "application/json; charset=utf-8",
                                url: oServiceURL,
                                dataType: "json",
                                data: "{FirstName:'" + cName.val() + "', LastName:'" + cLName.val() + "', Company:'" +
                                    cCompanyEnq.val() + "', Email:'" + cEmail.val() + "', Phone:'" + cPhone.val() +
                                    "', Address:'" + cCountry.val() + "',PageName:'" + page + "', PageUrl:'" + window.location
                                    .href + "',Message:'" + $("#txtMessageGE").val() + "',EnqType:" + enqType + "}",
                                async: false,
                                success: function(Result) {
                                    if (Result.d == "OK") {
                                        fnClearEnquiryPop();

                                        if ($("#hdnEViewType").val() == "Popup")
                                            fnClosePopupById('divEnquire');
                                        fnOpenPopupById('dvThankMsgPop');
                                    } else {
                                        alert(Result.d);
                                        $('#MainContent_ucFormControls_ctl00_divProcess').hide();
                                        $('#MainContent_ucFormControls_ctl00_btnSaveEnquiry').show();
                                    }
                                },
                                error: function(Result) {}
                            });
                        }


                        return false;
                    }


                    function fnClearEnquiryPop() {




                        $("#txtFirstNameGE").val("");
                        $("#txtLastNameGE").val("");
                        $("#txtEmailGE").val("");
                        $("#txtPhoneNumberGE").val("");
                        $("#txtMessageGE").val("");
                        $("#txtCompanyGE").val("");
                        $("#ddlCountryGE").val("");

                        $('#MainContent_ucFormControls_ctl00_divProcess').hide();
                        $('#MainContent_ucFormControls_ctl00_btnSaveEnquiry').show();
                    }

                    function gaMobileEnq() {
                        gtag('event', 'send', {
                            'event_category': 'general - cta',
                            'event_action': 'submit',
                            'event_label': 'mobile device enquiry form - submit'
                        });
                    }

                    function gaCommonEnq() {
                        gtag('event', 'send', {
                            'event_category': 'general - cta',
                            'event_action': 'submit',
                            'event_label': 'general enquiry form submitted [ILT]'
                        });
                    }


                    function gaJobDetailEnq() {
                        gtag('event', 'send', {
                            'event_category': 'home page - cta',
                            'event_action': 'submit',
                            'event_label': 'general enquiry form submitted'
                        });
                    }

                    function gaCourseListEnq() {
                        gtag('event', 'send', {
                            'event_category': 'course - cta',
                            'event_action': 'submit',
                            'event_label': 'make an enquiry submit [ILT]'
                        });
                    }


                    function gaCategoryListEnq() {
                        gtag('event', 'send', {
                            'event_category': 'category - cta',
                            'event_action': 'submit',
                            'event_label': 'make an enquiry submit [ILT]'
                        });
                    }

                    function gaNewsListEnq() {
                        gtag('event', 'send', {
                            'event_category': 'news - cta',
                            'event_action': 'submit',
                            'event_label': 'news - make an enquiry form submit [ILT]'
                        });
                    }

                    function gaNewsDetailEnq() {
                        gtag('event', 'send', {
                            'event_category': 'news - cta',
                            'event_action': 'submit',
                            'event_label': 'news - make an enquiry form submit [detail page] [ILT]'
                        });
                    }
                </script>

            </div>


            <script type="text/javascript" src="https://www.kbwchambers.com/scripts/owl.carousel.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    var carouselDefaultConfiguration = {
                        dots: false,
                        loop: false,
                        nav: true,
                        navText: [
                            "<svg><use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-left-thin'></use></svg>",
                            "<svg><use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg>"
                        ],
                        lazyLoad: true,
                        items: 1,
                    };
                    if ($('.owl--carousel')) {
                        $('.owl--carousel').each(function() {
                            if ($(this).attr('data-options') !== undefined) {
                                $(this).owlCarousel($.extend(carouselDefaultConfiguration, $(this).data(
                                    'options')));
                            } else {
                                $(this).owlCarousel(carouselDefaultConfiguration);
                            }
                        });
                    }
                });
            </script>


            <div id="dvWCPopup" class="modal fade welcomebackModal" style="display: none;">
                <div class="modal-dialog modal-dialog-centered container--large">
                    <div class="modal-content">
                        <div class="modal-body p-4">
                            <span onclick="fnClosePopupById('dvWCPopup')" class="close">
                                <svg>
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#closeRound"></use>
                                </svg>
                            </span>
                            <div class="container text-left px-3">
                                <h2>Welcome back
                                </h2>
                                <h6 id="MainContent_hWCRecViewtitle1">Here are the courses you were last looking at:
                                </h6>


                                <h5 id="MainContent_hWCRecViewBlocktitle">Recently viewed courses:</h5>
                                <div class="recentlyViewed">
                                    <div id="MainContent_pnlUCRecentlyViewed">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        <section id="secRequestMain" class="pb-0">
            <div class="container-fluid">
                <div class="row grid_12">
                    <div class="col-12 ">
                        <div class="e_barwithbutton">
                            <div class="ucBarWithButton">
                                <div class="container">
                                    <div class="row--max1rem">
                                        <div class="barDivText element-description">
                                            <p class="resquestP">
                                                <strong>Have a request?</strong>
                                                <span>To book a barrister or to discuss your case with one of our
                                                    experienced clerks please <a class=""
                                                        href="tel:+44(0)01132971200" target="_blank">call 0113
                                                        2971200</a> or...</span>
                                            </p>
                                        </div>
                                        <div class="barDivButton">
                                            <a href="contact-us" class="button-- border-gray">Contact us now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer start -->

        <footer>
            <div class="footer-top">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-3 hide555 footerLogoCol">
                            <a href="./" id="ucFooter_lnkHome" class="">
                                <img src="{{ asset('assets/frontend/images/logo.png') }}" id="ucFooter_Img1"
                                    alt="KBW-logo" class="" height="49" />
                            </a>
                            <p>Barristers regulated by the Bar Standards Board</p>
                        </div>
                        <div class="col-3 col-sm-6 xs-sm-mb-5">
                            <div class="findUs">
                                <div class="mapPin show555">
                                    <i class="icon-map-pin"></i>
                                </div>
                                <h3>Find us at:</h3>
                                <ul class="list">
                                    <li class="addressLi">The Engine House,<br />
                                        No 1 Foundry Square,<br />
                                        Leeds, LS11 5DL</li>
                                </ul>
                                <ul class="list footerCallLinks">
                                    <li>t:&nbsp;<a href="tel:+441132971200" target="_blank">0113 297 1200</a></li>
                                    <li>f:&nbsp;<a href="tel:+44(0)01132971201" target="_blank">0113 297 1201</a>
                                    </li>
                                    <li><a href="mailto:clerks@kbwchambers.com"
                                            target="_blank">clerks@kbwchambers.com</a></li>
                                    <li class="viewMap"><a href="https://goo.gl/maps/hpGKeDVJQYUuGP1z9"
                                            target="_blank">View map</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-3 col-sm-6 xs-sm-mb-2">
                            <h3>Quick Links:</h3>
                            <ul class="list">

                                <li>
                                    <a href="https://www.kbwchambers.com/about-us"
                                        id="ucFooter_rptMenuBottom1_lnkURL_0">About Us</a>
                                </li>


                                <li>
                                    <a href="https://www.kbwchambers.com/practice-area"
                                        id="ucFooter_rptMenuBottom1_lnkURL_1">Practice Area</a>
                                </li>


                                <li>
                                    <a href="https://www.kbwchambers.com/barristers"
                                        id="ucFooter_rptMenuBottom1_lnkURL_2">Barristers</a>
                                </li>


                                <li>
                                    <a href="https://www.kbwchambers.com/clerks"
                                        id="ucFooter_rptMenuBottom1_lnkURL_3">Clerks</a>
                                </li>


                                <li>
                                    <a href="https://www.kbwchambers.com/news"
                                        id="ucFooter_rptMenuBottom1_lnkURL_4">News</a>
                                </li>


                                <li>
                                    <a href="https://www.kbwchambers.com/recruitment"
                                        id="ucFooter_rptMenuBottom1_lnkURL_5">Recruitment</a>
                                </li>


                            </ul>
                        </div>
                        <div class="col-3 col-sm-6">
                            <h3 class="hide767">&nbsp;</h3>
                            <ul class="list">

                                <li>
                                    <a href="https://www.kbwchambers.com/direct-access"
                                        id="ucFooter_rptMenuBottom2_lnkURL_0">Direct Access</a>
                                </li>

                                <li>
                                    <a href="https://www.kbwchambers.com/about-us/service-standards"
                                        id="ucFooter_rptMenuBottom2_lnkURL_1">Service Standards</a>
                                </li>

                                <li>
                                    <a href="https://www.kbwchambers.com/about-us/price-transparency"
                                        id="ucFooter_rptMenuBottom2_lnkURL_2">Price Transparency</a>
                                </li>

                                <li>
                                    <a href="https://www.kbwchambers.com/about-us/professional-governance"
                                        id="ucFooter_rptMenuBottom2_lnkURL_3">Professional Governance</a>
                                </li>

                                <li>
                                    <a href="https://www.kbwchambers.com/about-us/complaints-procedure"
                                        id="ucFooter_rptMenuBottom2_lnkURL_4">Complaints Procedure</a>
                                </li>

                                <li>
                                    <a href="https://www.kbwchambers.com/about-us/equality-and-diversity"
                                        id="ucFooter_rptMenuBottom2_lnkURL_5">Equality &amp; Diversity</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-copyright text-right">
                        <p class="text-right"><a href="https://www.thewholecaboodle.com/intelligent-website"
                                target="_blank" class="ml-1">Intelligent website by thewholecaboodle</a></p>
                        <p class="text-left">
                            <a href="privacy-policy" class="">Privacy Policy</a>
                            <a href="cookie-policy" class="">Cookie Policy</a>
                            <a href="terms-and-conditions" class="">Terms and Conditions</a>
                            <a href="sitemap" class="">Sitemap</a>
                            <strong class="">Copyright © 2023 All Rights Reserved.</strong>
                        </p>

                    </div>
                </div>
            </div>
        </footer>
        <button class="scroll-top"><i class="icon-chevron-up"></i></button>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#dvFtrPhone").click(function() {
                    gtag('event', 'send', {
                        'event_category': 'footer click to call - cta',
                        'event_action': 'click',
                        'event_label': 'footer click to call'
                    });
                });
            });
        </script>



        <div id="divCookie" class="themeBgClr cookiesWrp">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-5 col-sm-5">
                        <h3>We use cookies</h3>
                        <p style="opacity: 0.8;">
                            This site uses Google Analytics to help us understand visitor trends. No personally
                            identifiable information is recorded and no data is shared.
                        </p>
                        <p>
                            Please accept to continue on this basis or adjust your browser settings if you wish to
                            disallow all cookies.
                        </p>
                    </div>
                    <div class="col-5 col-sm-5 mr-0">
                        <a class="button--white fw-600 themeClr accept wide mb-3_5"
                            onclick="setCookie1('KBWCookie', 'KBW', 30);hidediv();">I accept cookies</a><br />
                        <a href="cookie-policy" id="A1" class="button-- fw-600 reject wide"
                            onclick="hidediv();">Browser settings</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="dvAssist" style="display: none;" data-sidebar-id="dvAssist">
            <script type="text/javascript">
                function closeAssistModel() {
                    closeSidebar('dvAssist');
                }
            </script>
            <div class="topSidebarContent deeper">
                <div class="fix-12-12">
                    <div class="col-12-12 fuller left pn relative">
                        <div class="fix-12-12 homebacker">
                            <div id="dvAsstblk" class="barStep bar_yes-carry">
                                <div class="barStepImg">
                                    <img id="imgAssist" alt="KBW" class="barImg" />
                                </div>
                                <div class="barStepInfo">
                                    <div id="ltrAssistMessage" class="title-77">
                                    </div>
                                    <div class="yesNoBtn barStepCheck">
                                        <a id="lnkAssistYes" class="yesbutton">Yes</a>
                                        <a id="lnkAssistNo" class="nobutton">No</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="divStyle"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>




        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
            <symbol id="twentyFiveStar" viewBox="0 0 140.42 140.3">
                <g transform="translate(-3.1165 -3.0697)">
                    <g transform="matrix(.26458 0 0 .26458 12.79 -235.03)">
                        <path transform="matrix(-.26398 -2.15 -2.15 .26398 166.05 -584.58)"
                            d="m-741.43 159.51-8.5592 19.529-20.825-4.5789-13.935 16.138-18.55-10.514-18.073 11.314-14.627-15.514-20.605 5.4843-9.4042-19.136-21.306-0.83277-3.3458-21.058-20.114-7.0758 3.0098-21.109-17.135-12.69 9.098-19.284-12.633-17.177 14.378-15.745-7.0088-20.137 18.38-10.808-0.76176-21.309 20.749-4.9101 5.5529-20.587 21.275 1.4239 11.374-18.035 19.91 7.6315 16.185-13.881 16.776 13.161 19.557-8.494 12.151 17.521 21.192-2.352 6.447 20.324 20.944 3.999 0.1699 21.322 18.835 9.9946-6.1223 20.424 15.052 15.102-11.871 17.712 9.9318 18.868-16.564 13.427 3.9292 20.957-19.786 7.9478-2.4226 21.184z" />
                    </g>
                </g>
            </symbol>
            <symbol id="hamburger" viewBox="0 0 448 512">
                <path
                    d="M 20.443121,34.611729 H 190.46761 c 7.82112,0 14.16873,-6.347678 14.16873,-14.168793 0,-7.821132 -6.34761,-14.1685287 -14.16873,-14.1685287 H 20.443121 c -7.821127,0 -14.1687171,6.3473967 -14.1687171,14.1685287 0,7.821115 6.3475901,14.168793 14.1687171,14.168793 z M 190.46761,62.949051 H 20.443121 c -7.821127,0 -14.1687171,6.347684 -14.1687171,14.168789 0,7.821129 6.3475901,14.168788 14.1687171,14.168788 H 190.46761 c 7.82112,0 14.16873,-6.347659 14.16873,-14.168788 0,-7.821105 -6.34761,-14.168789 -14.16873,-14.168789 z m 0,56.674929 H 83.208921 c -7.821126,0 -14.168714,6.34765 -14.168714,14.16878 0,7.82113 6.347588,14.16852 14.168714,14.16852 H 190.46761 c 7.82112,0 14.16873,-6.34739 14.16873,-14.16852 0,-7.82113 -6.34761,-14.16878 -14.16873,-14.16878 z" />
            </symbol>

            <symbol id="shopping-bag" viewBox="0 0 448 512">
                <path fill=""
                    d="M352 128C352 57.421 294.579 0 224 0 153.42 0 96 57.421 96 128H0v304c0 44.183 35.817 80 80 80h288c44.183 0 80-35.817 80-80V128h-96zM224 32c52.935 0 96 43.065 96 96H128c0-52.935 43.065-96 96-96zm192 400c0 26.467-21.533 48-48 48H80c-26.467 0-48-21.533-48-48V160h64v48c0 8.837 7.164 16 16 16s16-7.163 16-16v-48h192v48c0 8.837 7.163 16 16 16s16-7.163 16-16v-48h64v272z"
                    class=""></path>
            </symbol>
            <symbol id="closeBold" viewBox="0 0 512.001 512.001">
                <path
                    d="m512.001 84.853-84.853-84.853-171.147 171.147-171.148-171.147-84.853 84.853 171.148 171.147-171.148 171.148 84.853 84.853 171.148-171.147 171.147 171.147 84.853-84.853-171.148-171.148z" />
            </symbol>
            <symbol id="closeOutline" viewBox="0 0 413.348 413.348">
                <path
                    d="m413.348 24.354-24.354-24.354-182.32 182.32-182.32-182.32-24.354 24.354 182.32 182.32-182.32 182.32 24.354 24.354 182.32-182.32 182.32 182.32 24.354-24.354-182.32-182.32z" />
            </symbol>
            <symbol id="close" viewBox="0 0 30 30">
                <path
                    d="M15 0c-8.3 0-15 6.7-15 15s6.7 15 15 15 15-6.7 15-15-6.7-15-15-15zm5.7 19.3c.4.4.4 1 0 1.4-.2.2-.4.3-.7.3s-.5-.1-.7-.3l-4.3-4.3-4.3 4.3c-.2.2-.4.3-.7.3s-.5-.1-.7-.3c-.4-.4-.4-1 0-1.4l4.3-4.3-4.3-4.3c-.4-.4-.4-1 0-1.4s1-.4 1.4 0l4.3 4.3 4.3-4.3c.4-.4 1-.4 1.4 0s.4 1 0 1.4l-4.3 4.3 4.3 4.3z" />
            </symbol>
            <symbol id="googleG" viewBox="0 0 24 24">
                <g transform="matrix(1, 0, 0, 1, 27.009001, -39.238998)">
                    <path fill="#4285F4"
                        d="M -3.264 51.509 C -3.264 50.719 -3.334 49.969 -3.454 49.239 L -14.754 49.239 L -14.754 53.749 L -8.284 53.749 C -8.574 55.229 -9.424 56.479 -10.684 57.329 L -10.684 60.329 L -6.824 60.329 C -4.564 58.239 -3.264 55.159 -3.264 51.509 Z" />
                    <path fill="#34A853"
                        d="M -14.754 63.239 C -11.514 63.239 -8.804 62.159 -6.824 60.329 L -10.684 57.329 C -11.764 58.049 -13.134 58.489 -14.754 58.489 C -17.884 58.489 -20.534 56.379 -21.484 53.529 L -25.464 53.529 L -25.464 56.619 C -23.494 60.539 -19.444 63.239 -14.754 63.239 Z" />
                    <path fill="#FBBC05"
                        d="M -21.484 53.529 C -21.734 52.809 -21.864 52.039 -21.864 51.239 C -21.864 50.439 -21.724 49.669 -21.484 48.949 L -21.484 45.859 L -25.464 45.859 C -26.284 47.479 -26.754 49.299 -26.754 51.239 C -26.754 53.179 -26.284 54.999 -25.464 56.619 L -21.484 53.529 Z" />
                    <path fill="#EA4335"
                        d="M -14.754 43.989 C -12.984 43.989 -11.404 44.599 -10.154 45.789 L -6.734 42.369 C -8.804 40.429 -11.514 39.239 -14.754 39.239 C -19.444 39.239 -23.494 41.939 -25.464 45.859 L -21.484 48.949 C -20.534 46.099 -17.884 43.989 -14.754 43.989 Z" />
                </g>
            </symbol>
            <symbol id="arrowRight" viewBox="0 0 31.49 31.49">
                <path
                    d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111C0.492,14.626,0,15.118,0,15.737c0,
                0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z" />
            </symbol>
            <symbol id="tickInsideCircle" viewBox="0 0 550 550">
                <path
                    d="M150.45,206.55l-35.7,35.7L229.5,357l255-255l-35.7-35.7L229.5,285.6L150.45,206.55z M459,255c0,112.2-91.8,204-204,204
			S51,367.2,51,255S142.8,51,255,51c20.4,0,38.25,2.55,56.1,7.65l40.801-40.8C321.3,7.65,288.15,0,255,0C114.75,0,0,114.75,0,255
			s114.75,255,255,255s255-114.75,255-255H459z" />
            </symbol>
            <symbol id="back" viewBox="0 0 20 20">
                <path
                    d="M2.3 10.7l5 5c.4.4 1 .4 1.4 0s.4-1 0-1.4l-3.3-3.3h11.6c.6 0 1-.4 1-1s-.4-1-1-1h-11.6l3.3-3.3c.4-.4.4-1 0-1.4-.2-.2-.4-.3-.7-.3s-.5.1-.7.3l-5 5c-.2.2-.3.5-.3.7 0 .2.1.5.3.7z" />
            </symbol>
            <symbol id="menu" viewBox="0 0 22 22">
                <path
                    d="M1 5h20c.6 0 1-.4 1-1s-.4-1-1-1h-20c-.6 0-1 .4-1 1s.4 1 1 1zm20 5h-20c-.6 0-1 .4-1 1s.4 1 1 1h20c.6 0 1-.4 1-1s-.4-1-1-1zm0 7h-20c-.6 0-1 .4-1 1s.4 1 1 1h20c.6 0 1-.4 1-1s-.4-1-1-1z" />
            </symbol>
            <symbol id="share" viewBox="0 0 22 22">
                <path
                    d="M21 10c-.6 0-1 .4-1 1v7h-18v-7c0-.6-.4-1-1-1s-1 .4-1 1v7c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2v-7c0-.6-.4-1-1-1zM5.5 7.5c.3 0 .5-.1.7-.3l3.8-3.8v9.6c0 .6.4 1 1 1s1-.4 1-1v-9.6l3.8 3.8c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4l-5.5-5.5c-.1-.1-.2-.2-.3-.2-.2-.1-.5-.1-.8 0l-.3.2-5.5 5.5c-.4.4-.4 1 0 1.4.2.2.4.3.7.3z" />
            </symbol>
            <symbol id="facebook" viewBox="0 0 24 24">
                <path
                    d="M24 1.3v21.3c0 .7-.6 1.3-1.3 1.3h-6.1v-9.3h3.1l.5-3.6h-3.6v-2.2c0-1.1.3-1.8 1.8-1.8h1.9v-3.2c-.3 0-1.5-.1-2.8-.1-2.8 0-4.7 1.7-4.7 4.8v2.7h-3.1v3.6h3.1v9.2h-11.5c-.7 0-1.3-.6-1.3-1.3v-21.4c0-.7.6-1.3 1.3-1.3h21.3c.8 0 1.4.6 1.4 1.3z" />
            </symbol>
            <symbol id="fb-like" viewBox="0 0 20 20">
                <path
                    d="M0 8v12h5v-12h-5zm2.5 10.8c-.4 0-.8-.3-.8-.8 0-.4.3-.8.8-.8s.8.3.8.8c0 .4-.4.8-.8.8zm3.5-.8h9.5c1.1 0 1.7-1 1.7-1.7 0-.3-.4-1-.4-1 1.4-.3 1.7-1.2 1.7-1.7-.1-.5-.3-.9-.5-1 1-.4 1.5-1.1 1.4-1.9-.1-.8-1-1.5-1-1.5 1-.6.9-1.5.9-1.5-.3-1.3-1.5-1.7-1.7-1.7h-5.6s.3-.5.3-2.4-1.3-3.6-2.6-3.6c0 0-.7.1-1 .3v3.5l-2.7 4.4v9.8z" />
            </symbol>
            <symbol id="twitter" viewBox="0 1 24 23">
                <path
                    d="M21.5 7.6v.6c0 6.6-5 14.1-14 14.1-2.8 0-5.4-.8-7.6-2.2l1.2.1c2.3 0 4.4-.8 6.1-2.1-2.2 0-4-1.5-4.6-3.4.3.1.6.1.9.1.5 0 .9-.1 1.3-.2-2.1-.6-3.8-2.6-3.8-5 .7.4 1.4.6 2.2.6-1.3-.9-2.2-2.4-2.2-4.1 0-.9.2-1.8.7-2.5 2.4 3 6.1 5 10.2 5.2-.1-.4-.1-.7-.1-1.1 0-2.7 2.2-5 4.9-5 1.4 0 2.7.6 3.6 1.6 1-.3 2.1-.7 3-1.3-.4 1.2-1.1 2.1-2.2 2.7 1-.1 1.9-.4 2.8-.8-.6 1.1-1.4 2-2.4 2.7z" />
            </symbol>
            <symbol id="youtube" viewBox="0 0 24 24">
                <path
                    d="M23.6 6.3c-.3-1.2-1.4-2.2-2.6-2.3-3-.3-6-.3-9-.3s-6 0-9 .3c-1.2.1-2.3 1.1-2.6 2.3-.4 1.8-.4 3.8-.4 5.7 0 1.9 0 3.9.4 5.7.3 1.2 1.4 2.2 2.6 2.3 3 .3 6 .3 9 .3s6 0 9-.3c1.3-.1 2.3-1.1 2.6-2.4.4-1.7.4-3.7.4-5.6 0-1.9 0-3.9-.4-5.7zm-14.1 9v-6.6l6.5 3.3-6.5 3.3z" />
            </symbol>
            <symbol id="pinterest" viewBox="0 0 24 24">
                <path
                    d="M5.9 13.9c1.2-2-.4-2.5-.6-4-1-6.1 7.1-10.2 11.4-6 2.9 2.9 1 12-3.7 11-4.6-.9 2.2-8.1-1.4-9.5-3-1.1-4.6 3.6-3.2 5.9-.8 4-2.5 7.7-1.8 12.7 2.3-1.7 3.1-4.8 3.7-8.1 1.2.7 1.8 1.4 3.3 1.5 5.5.4 8.6-5.4 7.8-10.7-.7-4.7-5.5-7.1-10.6-6.6-4.1.4-8.1 3.7-8.3 8.3-.1 2.8.7 4.9 3.4 5.5z" />
            </symbol>
            <symbol id="googlePlus" viewBox="0 0 24 24">
                <path
                    d="M7.8 13.5h4.6c-.6 2-2.5 3.4-4.6 3.4-2.7 0-4.9-2.2-4.9-4.9s2.2-4.9 4.9-4.9c1.1 0 2.1.3 3 1l1.8-2.4c-1.4-1.1-3-1.6-4.8-1.6-4.3 0-7.9 3.5-7.9 7.9s3.5 7.9 7.9 7.9 7.9-3.5 7.9-7.9v-1.5h-7.9v3zM21.7 11v-2.2h-2v2.2h-2.2v2h2.2v2.2h2v-2.2h2.2v-2z" />
            </symbol>
            <symbol id="stumbleupon" viewBox="0 0 24 24">
                <path
                    d="M13.3 9.6l1.6.8 2.5-.8v-1.4c0-3-2.4-5.4-5.4-5.4s-5.4 2.4-5.4 5.4v7.5c0 .7-.6 1.3-1.3 1.3s-1.3-.6-1.3-1.3v-3.2h-4v3.2c0 3 2.4 5.4 5.4 5.4s5.4-2.4 5.4-5.4v-7.5c0-.7.6-1.3 1.3-1.3s1.3.6 1.3 1.3l-.1 1.4zm6.6 2.9v3.2c0 .7-.6 1.3-1.3 1.3s-1.3-.6-1.3-1.3v-3.2l-2.5.8-1.6-.8v3.2c0 3 2.4 5.4 5.4 5.4s5.4-2.4 5.4-5.4v-3.2h-4.1z" />
            </symbol>
            <symbol id="linkedin" viewBox="0 0 24 24">
                <path
                    d="M22.2 0h-20.4c-1 0-1.8.8-1.8 1.7v20.7c0 1 .8 1.7 1.8 1.7h20.5c1 0 1.8-.8 1.8-1.7v-20.7c-.1-.9-.9-1.7-1.9-1.7zm-14.9 20.2h-3.6v-10.9h3.6v10.9zm-1.8-12.4c-1.2 0-2-.8-2-1.9 0-1.1.8-1.9 2.1-1.9 1.2 0 2 .8 2 1.9-.1 1.1-.9 1.9-2.1 1.9zm14.8 12.4h-3.6v-5.8c0-1.5-.5-2.5-1.8-2.5-1 0-1.6.7-1.9 1.3-.1.2-.1.6-.1.9v6.1h-3.6v-10.9h3.6v1.5c.5-.7 1.3-1.8 3.3-1.8 2.4 0 4.2 1.6 4.2 4.9v6.3z" />
            </symbol>
            <symbol id="apple" viewBox="-1 1 24 24">
                <path
                    d="M17.6 13.8c0-3 2.5-4.5 2.6-4.6-1.4-2.1-3.6-2.3-4.4-2.4-1.9-.2-3.6 1.1-4.6 1.1-.9 0-2.4-1.1-4-1-2 0-3.9 1.2-5 3-2.1 3.7-.5 9.1 1.5 12.1 1 1.5 2.2 3.1 3.8 3 1.5-.1 2.1-1 3.9-1s2.4 1 4 1 2.7-1.5 3.7-2.9c1.2-1.7 1.6-3.3 1.7-3.4-.1-.1-3.2-1.3-3.2-4.9zm-3.1-9c.8-1 1.4-2.4 1.2-3.8-1.2 0-2.7.8-3.5 1.8-.8.9-1.5 2.3-1.3 3.7 1.4.1 2.8-.7 3.6-1.7z" />
            </symbol>
            <symbol id="tumblr" viewBox="0 0 23 23">
                <path
                    d="M12.573 4.94v-4.94h-3.188c-.072.183-.11.4-.11.622-.034.107-.072.184-.072.293-.328 1.829-1.28 3.11-2.892 3.807-.476.218-.914.253-1.39.218v3.987h2.342c.039 5.603.039 8.493.039 8.64v.332c.294 2.449 1.573 3.914 3.843 4.463.914.257 1.901.366 2.892.366 1.279-.036 2.525-.256 3.771-.659v-4.685c-.731.22-1.395.402-1.977.583-1.135.333-2.087.113-2.857-.619-.073-.11-.183-.257-.221-.403-.106-.586-.178-1.206-.178-1.795v-6.222h5.083v-3.988h-5.085z" />
            </symbol>
            <symbol id="instagram" viewBox="0 0 24 24">
                <path
                    d="M24,2.5C23.8,1.1,22.7,0,21.2,0C15.1,0,8.9,0,2.8,0C2.6,0,2.4,0,2.3,0C0.9,0.3,0,1.4,0,2.8C0,5.9,0,8.9,0,12c0,3.1,0,6.1,0,9.2c0,0.2,0,0.3,0,0.5C0.2,23,1.4,24,2.7,24c6.2,0,12.4,0,18.5,0c0.1,0,0.2,0,0.3,0c1.4-0.2,2.4-1.3,2.4-2.7c0-6.2,0-12.4,0-18.5C24,2.7,24,2.6,24,2.5z M12,7.4c2.5,0,4.6,2.1,4.6,4.6c0,2.6-2.1,4.6-4.6,4.6c-2.6,0-4.6-2.1-4.6-4.6C7.4,9.5,9.5,7.4,12,7.4z M21.2,10.3c0,3.3,0,6.6,0,9.9c0,0.6-0.4,1-1,1c-5.1,0-10.3,0-15.4,0c-0.4,0-0.7,0-1.1,0c-0.6,0-1-0.4-1-1c0-3.3,0-6.7,0-10c0,0,0-0.1,0-0.1c0.7,0,1.4,0,2.1,0c-0.5,1.9-0.3,3.7,0.7,5.4c0.7,1.2,1.6,2.2,2.9,2.9c2.4,1.4,5.5,1.2,7.8-0.3c1.3-0.9,2.2-2,2.8-3.5c0.5-1.5,0.6-2.9,0.2-4.4c0.7,0,1.4,0,2.1,0C21.2,10.2,21.2,10.2,21.2,10.3z M21.2,6.4c0,0.5-0.4,0.9-1,0.9c0,0,0,0,0,0c-0.4,0-0.9,0-1.3,0c-0.5,0-0.9,0-1.4,0c-0.5,0-0.9-0.4-0.9-0.9c0-0.9,0-1.9,0-2.8c0-0.5,0.4-0.9,0.9-0.9c0.9,0,1.8,0,2.7,0c0.5,0,0.9,0.4,0.9,0.9C21.2,4.6,21.2,5.5,21.2,6.4z" />
            </symbol>
            <symbol id="arrow-down" viewBox="0 0 24 24">
                <path
                    d="M12 18c-.2 0-.5-.1-.7-.3l-11-10c-.4-.4-.4-1-.1-1.4.4-.4 1-.4 1.4-.1l10.4 9.4 10.3-9.4c.4-.4 1-.3 1.4.1.4.4.3 1-.1 1.4l-11 10c-.1.2-.4.3-.6.3z" />
            </symbol>
            <symbol id="arrow-up" viewBox="0 0 24 24">
                <path
                    d="M11.9 5.9c.2 0 .5.1.7.3l11 10c.4.4.4 1 .1 1.4-.4.4-1 .4-1.4.1l-10.4-9.4-10.3 9.4c-.4.4-1 .3-1.4-.1-.4-.4-.3-1 .1-1.4l11-10c.1-.2.4-.3.6-.3z" />
            </symbol>
            <symbol id="arrow-left" viewBox="0 0 31 72">
                <path
                    d="M30 72c-.3 0-.6-.1-.8-.4l-29-34c-.3-.4-.3-.9 0-1.3l29-36c.3-.4 1-.5 1.4-.2.4.3.5 1 .2 1.4l-28.5 35.5 28.5 33.4c.4.4.3 1.1-.1 1.4-.2.1-.5.2-.7.2z" />
            </symbol>
            <symbol id="arrow-right" viewBox="0 0 31 72">
                <path
                    d="M1 0c.3 0 .6.1.8.4l29 34c.3.4.3.9 0 1.3l-29 36c-.3.4-1 .5-1.4.2-.4-.3-.5-1-.2-1.4l28.5-35.5-28.5-33.4c-.4-.4-.3-1.1.1-1.4.2-.1.5-.2.7-.2z" />
            </symbol>
            <symbol id="arrow-top" viewBox="0 0 24 24">
                <path
                    d="M20.7 10.3l-8-8c-.4-.4-1-.4-1.4 0l-8 8c-.4.4-.4 1 0 1.4s1 .4 1.4 0l6.3-6.3v15.6c0 .6.4 1 1 1s1-.4 1-1v-15.6l6.3 6.3c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4z" />
            </symbol>
            <symbol id="play" viewBox="0 0 30 30">
                <path d="M7 30v-30l22 15z" />
            </symbol>
            <symbol id="drop-down" viewBox="0 0 16 16">
                <polyline stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    points="1,5 8,12 15,5" fill="none" />
            </symbol>
            <symbol id="direction-horizontal" viewBox="-2 6 16 16">
                <path
                    d="M13.7 13.3l-5-5c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4l3.3 3.3h-11.6c-.6 0-1 .4-1 1s.4 1 1 1h11.6l-3.3 3.3c-.4.4-.4 1 0 1.4.2.2.4.3.7.3s.5-.1.7-.3l5-5c.2-.2.3-.5.3-.7s-.1-.5-.3-.7z" />
            </symbol>
            <symbol id="direction-vertical" viewBox="-2 6 16 16">
                <path
                    d="M6.7 21.7l5-5c.4-.4.4-1 0-1.4s-1-.4-1.4 0l-3.3 3.3v-11.6c0-.6-.4-1-1-1s-1 .4-1 1v11.6l-3.3-3.3c-.4-.4-1-.4-1.4 0-.2.2-.3.4-.3.7 0 .3.1.5.3.7l5 5c.2.2.4.3.7.3s.5-.1.7-.3z" />
            </symbol>
            <symbol id="right" viewBox="-2 6 16 16">
                <path
                    d="M13.7 13.3l-5-5c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4l3.3 3.3h-11.6c-.6 0-1 .4-1 1s.4 1 1 1h11.6l-3.3 3.3c-.4.4-.4 1 0 1.4.2.2.4.3.7.3s.5-.1.7-.3l5-5c.2-.2.3-.5.3-.7s-.1-.5-.3-.7z" />
            </symbol>
            <symbol id="plus" viewBox="-0 0 512 512">
                <rect y="240" width="512" height="25" />
                <rect x="240" width="25" height="512" />
            </symbol>
            <symbol id="minus" viewBox="0 0 42 42">
                <rect y="20" width="42" height="2" />
            </symbol>
            <symbol id="right-long-arrow" viewBox="-0 0 512 512">
                <path
                    d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068
			c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557
			l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104
			c0.006-0.006,0.011-0.013,0.018-0.019C513.968,262.339,513.943,249.635,506.134,241.843z">
                </path>
            </symbol>
            <symbol id="closeRound" viewBox="0 0 24 24">
                <path
                    d="M 4.9902344 3.9902344 A 1.0001 1.0001 0 0 0 4.2929688 5.7070312 L 10.585938 12 L 4.2929688 18.292969 A 1.0001 1.0001 0 1 0 5.7070312 19.707031 L 12 13.414062 L 18.292969 19.707031 A 1.0001 1.0001 0 1 0 19.707031 18.292969 L 13.414062 12 L 19.707031 5.7070312 A 1.0001 1.0001 0 0 0 18.980469 3.9902344 A 1.0001 1.0001 0 0 0 18.292969 4.2929688 L 12 10.585938 L 5.7070312 4.2929688 A 1.0001 1.0001 0 0 0 4.9902344 3.9902344 z" />
            </symbol>
            <symbol id="check1" viewBox="0 0 24 24">
                <path fill="none" d="M0 0h24v24H0V0z" />
                <path
                    d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z" />
            </symbol>
            <symbol id="exclamation" viewBox="0 0 191.812 191.812">
                <path
                    d="M95.906,121.003c6.903,0,12.5-5.597,12.5-12.5V51.511c0-6.904-5.597-12.5-12.5-12.5
		s-12.5,5.596-12.5,12.5v56.993C83.406,115.407,89.003,121.003,95.906,121.003z" />
                <path
                    d="M95.909,127.807c-3.29,0-6.521,1.33-8.841,3.66c-2.329,2.32-3.659,5.54-3.659,8.83
		s1.33,6.52,3.659,8.84c2.32,2.33,5.551,3.66,8.841,3.66s6.51-1.33,8.84-3.66c2.319-2.32,3.66-5.55,3.66-8.84s-1.341-6.51-3.66-8.83
		C102.419,129.137,99.199,127.807,95.909,127.807z" />
                <path
                    d="M95.906,0C43.024,0,0,43.023,0,95.906s43.023,95.906,95.906,95.906s95.905-43.023,95.905-95.906
		S148.789,0,95.906,0z M95.906,176.812C51.294,176.812,15,140.518,15,95.906S51.294,15,95.906,15
		c44.611,0,80.905,36.294,80.905,80.906S140.518,176.812,95.906,176.812z" />
            </symbol>

            <symbol id="arrow-up-thin" viewBox="0 0 110 210">
                <g transform="matrix(0,-5.0017864,-6.18666,0,5.7617045,130.08551)">
                    <path
                        d="m 23.539215,-7.4486886 -8.180755,7.20002183 0.699935,0.88340295 9.781691,-8.68506248 -9.781691,-8.6365557 -0.701021,0.882248 8.182928,7.2011701 h -39.307615 v 1.1547753 z" />
                </g>
            </symbol>

            <symbol id="arrow-down-thin" viewBox="0 0 110 210">
                <g transform="matrix(0,5.0017864,-6.18666,0,5.7617045,79.703651)">
                    <path
                        d="m 23.539215,-7.4486886 -8.180755,7.20002183 0.699935,0.88340295 9.781691,-8.68506248 -9.781691,-8.6365557 -0.701021,0.882248 8.182928,7.2011701 h -39.307615 v 1.1547753 z" />
                </g>
            </symbol>

            <symbol id="arrow-left-thin" viewBox="0 0 210 110">
                <g transform="matrix(-5.0017864,0,0,6.18666,130.27329,104.42953)">
                    <path
                        d="m 23.539215,-7.4486886 -8.180755,7.20002183 0.699935,0.88340295 9.781691,-8.68506248 -9.781691,-8.6365557 -0.701021,0.882248 8.182928,7.2011701 h -39.307615 v 1.1547753 z" />
                </g>
            </symbol>

            <symbol id="arrow-right-thin" viewBox="0 0 210 110">
                <g transform="matrix(5.0017864,0,0,6.18666,79.891435,104.42953)">
                    <path
                        d="m 23.539215,-7.4486886 -8.180755,7.20002183 0.699935,0.88340295 9.781691,-8.68506248 -9.781691,-8.6365557 -0.701021,0.882248 8.182928,7.2011701 h -39.307615 v 1.1547753 z" />
                </g>
            </symbol>
            <symbol id="swipeHand" viewBox="0 0 1024 1024">
                <path
                    d="M538.88 162.56L608 37.12A1278.08 1278.08 0 0 0 110.4 160a42.56 42.56 0 0 0 35.2 77.76 1107.2 1107.2 0 0 1 393.28-75.2z m448 482.24a482.88 482.88 0 0 0-215.36-271.04l108.48-195.52a96 96 0 0 0-167.68-93.44l-243.2 436.48a49.6 49.6 0 0 1-82.88 5.76c-56.32-75.2-76.8-119.36-138.24-115.2A96 96 0 0 0 168.32 544a1159.68 1159.68 0 0 0 263.04 355.84c313.92 268.8 592.64-127.68 554.56-254.72z" />
            </symbol>
            <symbol id="twitter2023" viewBox="0 0 24 24">
                <path
                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z">
                </path>
            </symbol>
        </svg>
    </form>
    <script type="text/javascript" src="https://www.kbwchambers.com/scripts/main.js"></script>
    <script type="text/javascript" src="https://www.kbwchambers.com/scripts/MegaMenu.js"></script>
    <script type="text/javascript">
        $(function() {
            cbpHorizontalMenu.init();
        });
    </script>
    <script type="text/javascript" src="https://www.kbwchambers.com/scripts/jquery.mobile.custom.min.js"></script>
    <script type="text/javascript" src="https://www.kbwchambers.com/scripts/jquery.flexslider.js"></script>
    <script type="text/javascript">
        // DEFER IMAGE BY CLASS NAME
        function init() {
            // FOR BANNERS
            var imgBanner = document.getElementsByClassName('defBanner');
            for (var i = 0; i < imgBanner.length; i++) {
                if (imgBanner[i].getAttribute('data-src')) {
                    imgBanner[i].setAttribute('style', imgBanner[i].getAttribute('data-src'));
                }
            }
            // FOR DESKTOP ONLY
            var imgDefer = document.getElementsByClassName('defer');
            for (var i = 0; i < imgDefer.length; i++) {
                if (imgDefer[i].getAttribute('data-src')) {
                    imgDefer[i].setAttribute('src', imgDefer[i].getAttribute('data-src'));
                }
            }
            // FOR RESPONSIVE
            var imgUsed = document.getElementsByClassName('deferM');
            var isMob = ($(window).width() <= 435);
            for (var i = 0; i < imgUsed.length; i++) {
                var imgFullURL = imgUsed[i].getAttribute('data-src');
                if (imgFullURL) {
                    if (isMob) {
                        var oIndex = imgFullURL.lastIndexOf("/") + 1;
                        var startURL = imgFullURL.substring(0, oIndex)
                        var endURL = imgFullURL.substring(imgFullURL.lastIndexOf("/") + 1);
                        imgUsed[i].setAttribute('src', startURL + 'mobile/' + endURL);
                        imgUsed[i].setAttribute('onerror', "this.src='" + imgFullURL + "'");

                    } else {
                        imgUsed[i].setAttribute('src', imgFullURL);
                    }
                }
            }
        }
        window.onload = init;
    </script>
    <script src="https://www.kbwchambers.com/scripts/Validation.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('.popupButton').click(function() {
                var buttonId = $(this).attr('id');
                fnOpenPopupById("dvForm" + buttonId);
            })

            $('.popupTrigger').click(function() {
                var buttonId = $(this).attr('data-popup-id');
                fnOpenPopupById("dvForm" + buttonId);
            })

        });

        //form cursor fixed for iphone
        function fnPosFixedClose() {
            $("body").css({
                "position": ""
            });
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {


            var highestBox = 0;
            $('.eqHeight').each(function() {
                if ($(this).height() > highestBox)
                    highestBox = Math.round($(this).height());
            });
            $('.eqHeight').each(function() {
                $(this).css('height', highestBox);
            });

            var highestBox = 0;
            $('.eqHeadHeight').each(function() {
                if ($(this).height() > highestBox)
                    highestBox = Math.round($(this).height());
            });
            $('.eqHeadHeight').each(function() {
                $(this).css('height', highestBox);
            });


            $('.clsAdvBox').click(function() {

                $('.overlaybg').removeClass('opendiv');
                $('html').removeClass('sidebarShown');
                $('.leftsidebar').removeClass('visible');
                $('#main-block').addClass('slide');
            });

            $('.srchAgn, .srchAg').click(function() {

                if ($('.leftsidebar').hasClass('advSrch_open visible')) {
                    $('.overlaybg').removeClass('opendiv');
                    $('html').removeClass('sidebarShown');
                    $('.leftsidebar').removeClass('visible');
                    $('#main-block').addClass('slide');
                } else {
                    $('.overlaybg').addClass('opendiv');
                    $('html').addClass('sidebarShown');
                    $('.leftsidebar').addClass('advSrch_open visible');
                    $('#main-block').removeClass('slide');
                }

            });

            // FOR BG COLOR
            $('.popbtn').on('click', function() {
                $('.bgDark').addClass('openBg');
                $('.fade .content').css('background', 'none');
            });

            $('.icn_close').click(function() {
                $('html').removeClass('sidebarShown');
                $('.modal-container').hide();
                $('.modal-container').addClass('out');
                $('body').removeClass('modal-active');
                $('body').addClass('scroll');
                $('.bgDark').removeClass('openBg');
                $('html').removeClass('popupShown'); //test
            });

            // FOR BG COLOR
            $('#lnkBack').click(function() {
                parent.history.back();
                return false;
            });

            $(".tbAccord > .blrHead").on("click", function() {
                if ($(this).hasClass('active')) {
                    $('.tbAccord > .blrHead').removeClass('active');
                    $('.tbAccord .blrContent').hide();
                } else {
                    var oCurr = $(this);
                    $('.tbAccord > .blrHead').removeClass('active');
                    $(oCurr).addClass('active');
                    $(oCurr).siblings(".blrContent").slideDown();
                    $('.tbAccord .blrContent').not($(oCurr).siblings(".blrContent")).slideUp();
                }
            });

            $(document).mouseup(function(e) {
                //if ($ ('.mdlEnq').css('display') == 'none') {
                if ($('.modal-container').is(':visible') || $('.usedPopFrm').is(':visible') || $(
                        '.ucImagePopup').is(':visible')) {
                    var container = $(".popupContent");
                    var dateContainer = $(".xdsoft_datetimepicker");

                    if (!container.is(e.target) && container.has(e.target).length === 0 && !dateContainer
                        .is(e.target) && dateContainer.has(e.target).length === 0) {
                        $('.modal-container').hide();
                        $('.modal-container').addClass('out');
                        $('body').removeClass('modal-active');
                        $('body').addClass('scroll');
                        $('.bgDark').removeClass('openBg');
                        $('html').removeClass('popupShown'); //test
                    }
                };
                $('.overlaybg').removeClass('opendiv');
            });
            $('.clsGtagPhn').on('click', function() {
                gtag('event', 'send', {
                    'event_category': 'dealership - cta',
                    'event_action': 'submit',
                    'event_label': 'dealer detail page - click to call'
                });
            });

        });

        function CloseModal() {
            $('.modal-container').hide();
            $('.modal-container').addClass('out');
            $('body').removeClass('modal-active');
            $('body').addClass('scroll');
        }

        function gaEventCall(sCat, sAction, sLabel) {
            gtag('event', 'send', {
                'event_category': sCat,
                'event_action': sAction,
                'event_label': sLabel
            });
        }

        function OpenSideBar(sidebarID) {
            var element = $('.sidebar[data-sidebar-id="' + sidebarID + '"]'),
                isAnimated = $(element).hasClass('animated');

            $('.overlaybg').addClass('opendiv');
            if (!window.sidebarShown) {

                if (element.length > 0) {
                    window.sidebarShown = 1;
                    window.allowSlide = 0;
                    $(element).removeClass('animate active').addClass('visible');
                    $html.addClass('sidebarShown');
                    $(element).find('.content').scrollTop(0);

                    if (isAnimated) {
                        clearTimeout(window.removeAnimationTimeout);
                        setTimeout(function() {
                            $(element).addClass('animate active');
                        }, 100);
                    }
                }
            } else {
                hideSidebar();
            }
            //clean up
            //hideShare();
        }

        function CloseSideBar() {
            if (window.sidebarShown) {
                $html.removeClass('sidebarShown');
                var $sidebar = $('.sidebar.visible');
                $sidebar.removeClass('visible');

                window.removeAnimationTimeout = setTimeout(function() {
                    $sidebar.removeClass('animate active');
                }, 500);
                window.sidebarShown = 0;
                window.allowSlide = 1;
            }
            $("#main-block").addClass("slide");
            $('.overlaybg').removeClass('opendiv');
        }
    </script>
    <script type="text/javascript">
        /*MATCH HEIGHT*/
        function fnAdjustHeight(sElement) {
            $(sElement).css('height', 'auto');
            var highestBox = 0;
            $(sElement).each(function() {
                if ($(this).height() > highestBox)
                    highestBox = Math.round($(this).height());
            });
            $(sElement).css('height', highestBox);
        }
        $(window).resize(function() {
            fnAdjustHeight('.e_imagewithtext .titleTxt h3');
            fnAdjustHeight('.e_imagewithtext .descriptionTxt');
            fnAdjustHeight('.section--testimonial:not(.reviewSlider) .textimonial-content p');
            fnAdjustHeight('.e_courseblock .course-textblock .course-textwrap');
            fnAdjustHeight('.ucNews .card--article .headline');

        });
        $(document).ready(function() {
            fnAdjustHeight('.e_imagewithtext .titleTxt h3');
            fnAdjustHeight('.e_imagewithtext .descriptionTxt');
            fnAdjustHeight('.section--testimonial:not(.reviewSlider) .textimonial-content p');
            fnAdjustHeight('.e_courseblock .course-textblock .course-textwrap');
            fnAdjustHeight('.ucNews .card--article .headline');
        });
    </script>


    <div id="dvThankMsgPop" class="modal fade thankYouModal" style="display: none;">
        <div class="modal-dialog modal-dialog-centered container--small">
            <div class="modal-content">
                <div class="modal-body p-4" style="min-height: auto;">
                    <span class="close" onclick="fnClosePopupById('dvThankMsgPop')">
                        <svg>
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#closeRound"></use>
                        </svg>
                    </span>
                    <div class="text-center">
                        <span class="circleCheck">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#tickInsideCircle">
                                </use>
                            </svg>
                        </span>
                        <h2>Thank you for your enquiry</h2>
                        <p>A member of the team will be in touch shortly.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="dvMsgPop" class="modal fade msgModal" style="display: none;">
        <div class="modal-dialog modal-dialog-centered container--small">
            <div class="modal-content">
                <div class="modal-body p-4" style="min-height: auto;">
                    <span class="close" onclick="fnClosePopupById('dvMsgPop')">
                        <svg>
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#closeRound"></use>
                        </svg>
                    </span>
                    <p id="pPopMsgBody" class="text-center"></p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-backdrop fade hide"></div>
</body>

</html>
