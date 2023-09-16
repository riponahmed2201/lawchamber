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

 <script type="text/javascript">
     document.addEventListener('touchstart', function(event) {
         if (typeof video !== "undefined")
             video.play();
     }, false);
 </script>

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
    "https://www.linkedin.com/company/kbw-chambers"]}]}
    </script>


 {{-- barristers page script --}}


 <script src="https://www.kbwchambers.com/scripts/jquery.quicksand.js"></script>
 <script>
     $(document).ready(function() {


         jQuery('#portfolio').mixItUp({
             selectors: {
                 target: '.tile',
                 filter: '.filter',
                 sort: '.sort-btn'
             },
             animation: {
                 animateResizeContainer: false,
                 effects: 'fade scale'
             }
         });

         var hash = window.location.hash.replace(/^#/g, '');
         hash = hash.trim("-").replace("&", "").replace("-", "_").replace("__", "_").toLowerCase();


         if ($('.filtersNav a').hasClass(hash)) {
             $('#' + hash).click();
         }

         $('.filter').click(function() {
             var oID = $(this).attr('id').replace("_", "-");

             fnSetUrl(oID);
         });

         $("body").keypress(function(e) {
             if (e.which == 13) {
                 fnSearchByName();
             }
         });

     });

     function fnSetUrl(oID) {
         var nextTitle = oID;
         var nextState = {
             additionalInformation: ''
         };
         var nextURL = 'https://www.kbwchambers.com/barristers/#' + oID;

         // This will create a new entry in the browser's history, without reloading
         window.history.pushState(nextState, nextTitle, nextURL);

         // This will replace the current entry in the browser's history, without reloading
         window.history.replaceState(nextState, nextTitle, nextURL);
     }
 </script>

 <script type="text/javascript">
     function fnSearchByArea() {
         // Filter by dropdown
         var oName = $('#ddlPracticeArea').val().replace(/ /g, "_").replace("&", "").replace("__", "_").replace("_ ",
             "_").toLowerCase();
         if ($('.filtersNav a').hasClass(oName)) {
             $('#' + oName).click();
         }
         fnSetUrl(oName.replace(/_/g, "-"));
         // Filter by textbox
         setTimeout(fnSearchProfile(), 200);
     }

     function fnSearchProfile() {
         var oTextVal = $('#txtProfilName').val().toLowerCase();

         $('.dvProfile').each(function(index) {
             $(this).removeClass("hide-srch");
             if ($(this).css("display") == "block" && oTextVal != "") {
                 var oTitle = $(this).attr('data-name').toLowerCase();
                 if (!oTitle.includes(oTextVal)) {
                     $(this).addClass("hide-srch");
                 }
             }
         });
     }
 </script>

 @yield('frontend_page_scripts')
