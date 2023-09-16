<!DOCTYPE html>
<html lang="en">

<head id="Head1">
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="../images/favicon.png" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta property="og:title" content="About Us | Introduction | KBW Barristers Chambers" />
    <meta property="og:description"
        content="Read more about our heritage at KBW Barristers Chambers. Located in Leeds our barristers provide the highest level of legal advice and advocacy." />
    <meta property="og:image" content="https://www.kbwchambers.com/images/Share.jpg" />
    <meta property="og:url" content="https://www.kbwchambers.com/about-us/introduction" />
    <meta property="og:site_name" content="KBW" />
    <meta property="twitter:title" content="About Us | Introduction | KBW Barristers Chambers" />
    <meta property="twitter:description"
        content="Read more about our heritage at KBW Barristers Chambers. Located in Leeds our barristers provide the highest level of legal advice and advocacy." />
    <meta property="twitter:image" content="https://www.kbwchambers.com/images/Share.jpg" />
    <meta property="twitter:card" content="https://www.kbwchambers.com/images/Share.jpg" />
    <meta property="twitter:image:alt" content="KBW" />
    <link rel="canonical" href="https://www.kbwchambers.com/about-us/introduction" />
    <script type="application/ld+json">{"@type": "WebPage","name": "About Us | Introduction | KBW Barristers Chambers","url": "https://www.kbwchambers.com/about-us/introduction"}}</script>


    <!-- Styles -->
    <link href="/bundles/sitestyle?v=Lf35JuYR9tt5zdngKKXAlww7I_Q3whd_yO8Dm_cfgZw1" rel="stylesheet" />


    <!-- Scripts -->
    <script src="/bundles/sitejs?v=dxefhjTtOyB-Kjril3irV-smFTA0zpa6s4-7YuyeiGY1"></script>

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

    <title>
        About Us | Introduction | KBW Barristers Chambers
    </title>
    <meta name="description"
        content="Read more about our heritage at KBW Barristers Chambers. Located in Leeds our barristers provide the highest level of legal advice and advocacy." />
</head>

<body onmousemove="fnRobots();" class="">
    <form method="post" action="./introduction" id="Form1" style="display: flex; flex-direction: column;"
        autocomplete="off">
        <div class="aspNetHidden">
            <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
            <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
            <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                value="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" />
        </div>

        <script type="text/javascript">
            //<![CDATA[
            var theForm = document.forms['Form1'];
            if (!theForm) {
                theForm = document.Form1;
            }

            function __doPostBack(eventTarget, eventArgument) {
                if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
                    theForm.__EVENTTARGET.value = eventTarget;
                    theForm.__EVENTARGUMENT.value = eventArgument;
                    theForm.submit();
                }
            }
            //]]>
        </script>


        <div class="aspNetHidden">

            <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="C0D1CBB7" />
            <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
                value="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" />
        </div>
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
                <a href="../" id="ucHeader1_lnkHome" title="Header Logo" class="logo">
                    <img src="../images/logo.png" class="logo-image hide555" alt="KBW Barristers Chambers" />
                    <img src="../images/logoSmall.png" class="logo-image show555" alt="KBW Barristers Chambers" />
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
                            <img src="../images/bar_icon.png" alt="bar" class="" /></a>
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
                            <div class="navClick"><a href="../" id="ucHeader1_lnkHomeSideBar">Home</a></div>
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
                                            <a href="../contact-us" class="button-- border-gray">Contact us now</a>
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
                            <a href="../" id="ucFooter_lnkHome" class="">
                                <img src="../images/logo.png" id="ucFooter_Img1" alt="KBW-logo" class=""
                                    height="49" />
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
                            <a href="../privacy-policy" class="">Privacy Policy</a>
                            <a href="../cookie-policy" class="">Cookie Policy</a>
                            <a href="../terms-and-conditions" class="">Terms and Conditions</a>
                            <a href="../sitemap" class="">Sitemap</a>
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
                        <a href="../cookie-policy" id="A1" class="button-- fw-600 reject wide"
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
