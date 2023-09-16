


<!DOCTYPE html>
<html lang="en">
<head id="Head1"><meta charset="UTF-8" /><link rel="shortcut icon" href="../images/favicon.png" /><meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no" /><meta name="apple-mobile-web-app-capable" content="yes" /><meta property="og:title" content="About Us | Introduction | KBW Barristers Chambers" />
<meta property="og:description" content="Read more about our heritage at KBW Barristers Chambers. Located in Leeds our barristers provide the highest level of legal advice and advocacy." />
<meta property="og:image" content="https://www.kbwchambers.com/images/Share.jpg" />
<meta property="og:url" content="https://www.kbwchambers.com/about-us/introduction" />
<meta property="og:site_name" content="KBW" />
<meta property="twitter:title" content="About Us | Introduction | KBW Barristers Chambers" />
<meta property="twitter:description" content="Read more about our heritage at KBW Barristers Chambers. Located in Leeds our barristers provide the highest level of legal advice and advocacy." />
<meta property="twitter:image" content="https://www.kbwchambers.com/images/Share.jpg" />
<meta property="twitter:card" content="https://www.kbwchambers.com/images/Share.jpg" />
<meta property="twitter:image:alt" content="KBW" />
<link rel="canonical" href="https://www.kbwchambers.com/about-us/introduction" /><script type="application/ld+json">{"@type": "WebPage","name": "About Us | Introduction | KBW Barristers Chambers","url": "https://www.kbwchambers.com/about-us/introduction"}}</script>


   <!-- Styles -->
   <link href="/bundles/sitestyle?v=Lf35JuYR9tt5zdngKKXAlww7I_Q3whd_yO8Dm_cfgZw1" rel="stylesheet"/>


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
         }
         else {
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
         gtag('event', 'send', { 'event_category': 'header click to call - cta', 'event_action': 'click', 'event_label': 'header click to call' });
      }


      function isNumberKey(evt) {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57)) return false; return true;
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

      $(document).ready(function () {

         //fnOpenPopupById('dvThankMsgPop');
         checkCookie();

         $('.grpl05click').on('click', function () { $('#main-block').removeClass('slide'); });
         $('.gray_33').on('click', function () { $('#main-block').addClass('slide'); });

         //form cursor fixed for iphone
         $('a.popupTrigger').on('click', function () {
            $('body').css({ "position": "" });
         });
         $('.close').on('click', function () {
            $('body').css({ "position": "" });
            $('.overlaybg').removeClass('opendiv');
            $('.bgDark').removeClass('openBg');
            $('.modal-container').hide();
            $('.modal-container').addClass('out');
            $('body').removeClass('modal-active');
            $('body').addClass('scroll');

         });
         $('.close').on('tap', function () { $('body').css({ "position": "" }); $('.overlaybg').removeClass('opendiv'); });

         // Initialize Swiper Slider
         setTimeout(function () {
            $('.swiper-container').each(function () {
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
                     renderCustom: function (swiper, current, total) {
                        var out = ''
                        for (i = 1; i < total + 1; i++) {
                           if (i == current) {
                              out = out + '<span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex=' + i + ' role="button" aria-label="Go to slide ' + i + 1 + '"></span>';
                           }
                           else {
                              out = out + '<span class="swiper-pagination-bullet" tabindex=' + i + ' role="button" aria-label="Go to slide ' + i + 1 + '"></span>';
                           }
                        };
                        return out;
                     },
                  },
                  //navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
                  loop: isLoop,
                  autoplay: isLoop ? { delay: 5000, disableOnInteraction: false } : false,
               });
            }, 2500);
         });

         function equalHeight() {
            $('.grid').each(function () {
               var highestBox = 0;
               $('.e_promoblock .equalElement', this).each(function () {
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
      $(document).on("input", ".numeric", function () {
         this.value = this.value.replace(/\D/g, '');
      });
   </script>

    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-45WDEDQ2FV"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-45WDEDQ2FV');
</script>

<title>
	About Us | Introduction | KBW Barristers Chambers
</title><meta name="description" content="Read more about our heritage at KBW Barristers Chambers. Located in Leeds our barristers provide the highest level of legal advice and advocacy." /></head>
<body onmousemove="fnRobots();" class="">
   <form method="post" action="./introduction" id="Form1" style="display: flex; flex-direction: column;" autocomplete="off">
<div class="aspNetHidden">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="CP1l1VC7cN+TjZE2YlWvJmEXtsk9KHVl6DQJnYO8E11MdpGpiM2xkJdeyzVkPuqQQx243eltaYyIbUwNiCKwmxfPo2ZfbDX2ERaFQpdApAfm1yXqRfPuxe8/myc1n8o7NFUWd/9ghTZ0VjkYOG9H2y6wZb6FpMaMZfwoBsYoCdKc8ODHh4W+iLqCeMwpkZ7L3cLXBpQXFvLnLeTOUqDpV9InpVwYYPzJio0ACytI+h8IBAL/sHyBGGOIpSB9RNB4b70oO5brOMmG0FyJ5adGj/2DwQyCrZN5owqvL2xRby2muT8+iHmaUn7dXTqDDRreiw9nQY3UHJabRnxxYS/5Kk59Km+jbnOj15l0j4Xds1tqZl1ZWyefK/nkBWoJVeXG9DjRtg+LCWPvJkFuq+m81/sVoZlj6GVn9yIdvj4tfVeVNd4mPqkeMa+uY//AKsZcC1EcZCJhJ31WM5gwjk5uhhz6lWOeytAD0tE1qpDJA9SvDRjVMpWB/A6UFyOYay6gzJHBRGEcn8PpLJGaP0wnpNDKlmqVPRmy2IzRm5E5Evfu58WKCCOP4r9YKObnd1F0ekXvOby1GVwf67GgmGL6JCpKDCBlKDmuFlRgNr52mZ2MOZSAXFRvtu7rteCV5Xq6QH14UtBSkqOgGvuKjklX/yw6tidJ7UI0ZPPWjLrW8QTBkdAn6aA7ebAqRFQPLPnViWzQhlgQN2cvsY8B7+aQu0zXwN5K0Dv0l7SpEDgPsdgaoS5y0szNZsSKYNvB3hJBWugCv33+XcBJS2DVoEZyaFWwJ1pbsuuXPst7rDIYnPcmu4AoKIU3fbyEZE8oKhKXxGZuasOn/tFni7SvulChJECeqKRV2g2SaaxO+K6xRrDnHjEvDdGCdH7fMtFZwjj1sZsoAN0c94GlvKaEQ/mI2PEguPfx0BFDIkyaYGejd6T/JQHeZa4Mh1s1pe54KSkaDNGMi+5Lk0s3F3iWr3JIuxj9ejbNiD+Rpzpli10Wm/zVBI8lfz+C/DqJsAPnJDyWXMdCozsW/JLn3T5EP/4YmWe35abY3rkE78OJPBA0SnJDUWsut+jNDZriU0QnmDznFIYarxNC8LnWpjt7mJrOdxU/NNJq6BWKEcxx63BW8GSNs92Vo73E01gkcqz1u3KiovoeRKWq079pWIWG2np06jYb668QZUhsyBgbG0T0oD9g7VLw/eVTH9Krck8DskumEnNalRF6G0k05qf337+3weNIcXPtu27bhcdVPoIyHhxhUHVsf9PSS2uRltRcuk0gPp1cQmhaqqC84W6fzs6hzTJ6HWeMsuUV/wEZUysSjaNvlmsCvSSDVoVKoH8hjkYMJgobazndHvQKzC228ovrn9sQ6FIYkc8h72LCF1Jk57ov+NU6sJnNo9M3a8n5ILwVTuMAaGVgniYOi17eeeMAwqHzU1W6GDkU8aXJ4r/pT9yys8Og4GL4M0+ZcYs/xZZgJF0aY57LuE29AjKq9MLmyVABWPXPjsKNmQBK0P2WIgs+lnH9WvkZqHc6TulZZxaAhrgU/DjVifHbQk+j0CvMrKIGMb7CeGRBfOjsaSoJCRQiHMeoR3sV37DIPsQC4BrjdYcMnvswb9GrhMycq293zhQX9jF9i2k2VbL0Sw38ZVppB3mRutWtfDtO8wzFKqUdOgBPUClXuqq4NcMSHY8OZQVUNDiXgVsK8oO3y1AtroT+a8reqkuCLlTN3EANl0CaLW/LK0qY81/dZkiwACoCs/6MrbaMOcFJ9ryq2bGpZDUCatuS/qI0BcxE/aJgcUjzwzyDUUGsYIECvjbHVirPmrCWCpmWzh5QNoqpujeGp2g5fQAyGbpBhuZ4nqlDE3BYVctfAYr65bbdSZsckUmtwnLkRz/gql2xumJbJUDNpIPmrDhMoeLgRBJBdor7Cczy727nf8pCdMGjrB2aaWEsRIA0zMbhrN8+KQzLOZttoMGYbcYmM1gs2g0jBOwYt0Tmcj+U2skUyWX4TOQoZvc6kEBUMsk6W1xDRHGeHeyctWhPsQYwFulDYX8YzAN5bTd/8b3XQNN4pieZZHMl0t79CnFiuuQ4x9SLVuyUDz9ffWo6MYVIhFu1oXUGtiKgT3T7fgN8F8DmBfqF6xJT3CZewaxY23WzskK4c/jSwlMUUPrtbq/TAx0i4VCoOXc2YAXNmnlHsF/+gmL01HP8lcLfLr7ySH7VwsQJv4b8Q8ky+gQqDuYBh/UZY6lS6h8k3T0SJDWIgOpVOE4UzX3kr3YZ9LoVZomak6mDkvW87MK+8Yyzr9R9bKG8tz2500PGkR+X3IhPgoe2D+AVbLUzQPldS9ujmawwD4Vu0mdceufBfPKuGb3ckJV3/NezZN92HirIK+kZgxlv2lGh7te0rj0eAGnhzLMB0JmCsqEdZXYyNqqxSRe4BP0vn1+KuaA+jAS0IdbuUuMPgNMFddZGaqgJnrpfjTqG1rXgljLzIg1KV1eu+C8Vped1rSaVNmIFw+O5lOvaQI2B43MiavMjHgGjpB3r5RYd0jTDgR5WhHl1HHukflo5mnmERUDoepX8J7XKoS99BPKQatPnJaM1VrwxLVVvN7Z9S92VVx2Saz0Ok1lEe0QIFTcpw+YCxLKTAu8NZnMWqnsXPlp4v8eBEVz8GAFxcDGA16AImAXTVXxiyucEZEiqYv9d8BvdNnS3ZU/8NS8QREDfgWQ09aQdV812ZYFHQdbmlp3OvmND9OF1FtAqy2TTq4AdB67BWXvcDzvxaCy7v5Na16sLthvG3Cpwz60dFQIfegQqhvjUa7jLj0r9268vCwYLSE+w3JDiNRXa5+FiKel6P3lyKQYl8VA1aayQHhBybRgTdlIc10GwHkdwr9w+Y/fuNQSVei2a3jwrQheMJTFYz2Z+kBeag2Bx4tBIr5dDRYQzjFD3NldPh7hvs63CMnn2GEoCqekIabn3A0lhOyzG6GJgxnp0O36laIfqOCDmXASO0CG1j4vlO3Anr1op8FXCLnlXEFjPoDmv0MrxezCnN0PsB+JgNxCotqQEDfx6Q9HRx80aPhAi3piAOozeAnuMvKT64V1IuMJfhYOjtVUcS7/55CiUyfhq5rwrbcjENgML84Z6KEa4+jf0mUBNaeKnaGqCTW1+FVMqRLQiirFnoQIIM1BvXlshi9xKddnprF3+4/fzlLo7tf2h0LuuukFLilniZBM/GB4k528k96XaplDP5zRV1Op2dcBCDZR8EWt3BROhJALMAMiM77QRvaQo62xgueshelmWiaMChSZnUsynH7l0zQj7ySxyV0sf0iDr2pTTG63toEF4BuOnwDrOOXS9YWI+Ne6CR2zuz9dW4U/40VC2WgvwYUsSkg/YA2DigurO4LhwETdVoDaEOtGQ+YSu/EH0gtarsqHXFKHSnDTdXik2aaSpSQPMPRvYRCRMVoxP4Fu57CYYIL3o5VvmjzhcogF++VCO6N/0Ygv3JaMX2cOCL/KX+1eXiYSAnpVJj4kgRh+mxz4W+uG5UfxTWhqvl0PjL5zkjc28VMjt8RHWqGRQBG3zhBmu/fCX2hgjrHVPfQqhAaZRweur3JIvJ0WmS7WDaZUBoP4OWdWFPJpSfGwBvi56IWhcuMH8YpnF8G+30h9/C/x2Z3vI0CMtMTs3V1LyqcOJIaPsWXlg52rNQvCcdTRDb28EzvGWrfoc9uIAK3UCWdJEUjleBck30g1IpPFPPU08AnOFJfCVx5Eqyjx2szwueFbAhp3yDKyKJryes/eCI8JOAX+zu5WJi/8oM5KJwpEmM2qDk0D52w2DJNheIrdR16d1ifDdlc9Pvp3QotkW7qG67KSjHFifKUFbbvfLoIxDG8XGk/ioxUhlp5nL26JkXB2qjJIbiE8wTYkq1l1ElABkZdxJxs7Fd61lPypswXorYsTbN3p1fi8fY3FW8DdsfIIJVvxEcYjImnRIEQ5UPJl5MzMSLMyIG2n8bTQKlCm3LQ0CLmz29s/e53OBxSk+nbr18krMnIgYVkuOAaEeOTSDPlsROf8+dTsZuTW7mIM9V8Y/db145q2+L/bz4siwS+2fHDVvr/p2mxmlSi1oSoJ4agwz5EGuPHE1z8NYXF26I32JFCu6r0yW1Z2BzdOfs0Xji8VG5q/YD5nF+pwCNyh7n9PyfPtzi/Nh+yrLZlyuCNgvCDI9DApXDk/ELTKa05Q3xzxjfipteEbHjJLA+VDDqN9YQH+JXkocWul2XAIwE2E8wVHdd4NfkrAiP7l+0JE1YuXX5iAZNmVlOcZNQsW5SfpSM+Azp4J92aFq/WWNp6nUTcCW0Evvf0uwSkPKS5WIHEFp4zCN02hQ+zs+zjx0qIVmkwo7W75Wbl2wS85F5cVGsrt7Y2TOo9ohRF+DtVy6Z5fWpFBBvmuvrP2cH1mlKJNYkcQCrdPTKiR27AmMxIWNrce4dk9KZpL94ea1MINTv61zUfEIIfbVGbU4QzXXCbGOHI245IdS6BFKMM9rSOivaAdoX1+jwo/Rc1euGrvqiIHacnduIqpJA40IwwvSYpu+Y4ycqF3V7tZ9u9AZ8YWZ60AqkKBolE1qvF+yfotf8VFVvHQS0TguTMhxFkIcQsKDeAbsV1iC2FP8HN37yMWkRJCkTTq6YiFhzf+yq7wdhatHBgLhwmaDUZ/0s8nZAQA7R0FXxVzKaOUzAVJngvhZEWWJ2UIYDywffTNgQbdC8VDtL5X1ifgHruqhn/hOWcqml1Xlhetep4VyOmjNfT1AbatFgVXjwSknC7g8HxOwNvU1aM+16is6dJ9t6mSctgRgHd4zvQvpb5CxVK8VGOlDeNSbnJaPmA9fYYq2kKvvh32H6atxgJGpBq74Mebw2aDxlYg0A6F4LBT3Kl/7Gk3F1Qz5YjIffphzhYT3SqslHM03XD/wnvCzXX7/9wq3XTiRDSTnqU5dRetSNwkJrNBATBxarVB6EZGLyPaBLdC+ON3WKlQKAA5X7rR3jdig4vPLBP4ydl7dak/QefLnuyOIndkluXPX65D5YiMXIWiKjGjxDFCH7M/j7tgyzalOElVZ4HDOT9SRWDfw1k2ghpyHHkWqsJwhtYdVstyv5MFWIsKYKS630Fc69IBll8TMYeDTIYlpHDCYL8uksLnWtP1+siRqkQ96LH/9d4hLeso7rVMWHFcjpDZFXw+mj0LgwJcxRcT5pkrVWdO2ROsX4vaUV/D05z12tmT1NHnfF29VeY/A5CAwVxINVOJMFteOM/VJdMYJ15E63tHkHiyi9J13HqzW5CKUNze2HhnqHYDOqO46sIIlBYDobP6zsdIr+xl5AvCFNixcL2vX63evdUhIdRjJkOsAgKb7W12PVAM0HVsKI3daR0uRAA25X0ToBOvU/uH99o8+4NEj5tweQXFz34BUzvNlGhM2KPBPtPY+Yn79WtakF2Yqgmuw+FFgyfzPV1sdXWYWCesqHh6vHxivawB6eLntbRQ+L/AADykI1zV2RwlQtK+xMbL8X/XReOqBjzksIFtTMCJPY8Imn9Q+vJjPBHi2RNlej+djW6t9dfvRCHWQttX7yvDqesq9BzaOBaBr7OQAQU6+++ua9UQcmPneQdMwxK1uzNPmGDFFeDyfci+tsvmNgG41AleGlIz2JzSGmgVO+voDaYv934kfWcaqZ495YBP8sQWKQPA8xpW+O6Ffnb99CTe1Ku31gRY6mrzEJNbW0A9nKT2vylbiEvFG0wRonSDe+p8QW7C5QBI9Q51UgxjmUtrsaMKt3LueDx9Ra+Am778GVpVYj2idkoavlx8hoq1fFn8dpHcMse7NxmTnKx60kQ9nRvhjKtG461MiN8ZjE2cLWPBSf8mjzeQjvdsIG1taIvI6qT7ADXikFd45fsB2Wh3dYCu+vFr5FXsRDDPbWQ0M6MkxC/fiMU0PMLIE3zQoVGzlsuM7IEgSiOFVm/mrvHJDTlV/+XIfVaFPx+Iyv7NTRW/GonQPcU+rrTson+uOeLgl0PqqYNk6EyP++FxXkVvKNOXo2HJcCjUmjPq09OCg2NeMVYGKmF3X7WeO2osXrLQscTbHxHDOudbTnDnOq0F/2PVhjhy/oiCH3PtuNB8Abl6cL8UjB4YVnFann0NxtEde+D4vC2C3cc69OQCENk9Xkvqh1KN/JK5VIn+YSPbjtrGQqrp9tOeE2IRoX2gcR9CCNiqgmckT6pgf8bOMeq5Y08l6N0flZJfB44hzWHyJenXJysuSSOftb6JdrtFZIGJZdr/lLUKwg3JMwL8Ktje0/8JvKfMq8JQlzZEtPFGWjGlr/470K7DVFEeWAbbHzgYtTP6U3YS8EzMdKJXu2gFPy08/qMCjOERGaoX2VWIK4Nu6Zv/oX1JMLz2KinIHnKCqGUpOfGv/2SPwvr8/4Y54Huh55oT+FKfj5zDokssI0gMQkt/QvSF0Od+gZTPlhZLkE+gFfVu2N49owtS1lTzZSJu12r9OcpKG4rJILDXxjdS7SlUPxeNdEyS2FxtAZuu2LAqhDJHegdojL7ePYO3dNfJTveOd7LFDOrzM/q2wL+leFxoKSuRLQAmOfFa2s91VBdr317PXgsmFZabDyea23l7DH6usfiPXovgqpte2RCN9wRWTjRHsWC4Yo++PzlVWJh3TBNZIgtVm5zyofiqBIr1la5e5q/hU2QOUSihxTzvqFw7Hm3AR5sttx48P05w1dvMTQIl2vLN1/K8sIW3YFvLbeiUEn/WxSnOb+Et+eM1x41Zh4Ao6tJJqtoRRl/GmDkMNkXaKhrfhtR7kZ7BLEckEyLKtLFnTPLy2Yvi066+34xvCl50/Rfa6Ql805cUuAiyIndKqvYfR4KGG6Oc4SfgHCKAih8gpYP1fZsTDpE6Kpjb8HWLjBzMQtK5uti7AROIgCwjxsbIN+HwANYCQOC/NAW7Kb37kGhlqh43ELKvYRX63ts+LNQXo4BzF0qd2HYCwn5bUT+gylgi91aBppNlPKXHgIs/dR3nRPvXvEPIPGKMI9SrVLLipkdzGPW9V+4HnhDX6QV1S7OsZRfSBuc6ybxbMtCkvU//t4pFn6sPaR/maijx26ZOos4nGlRumtnWKkTXEoJEROGtuRz23oQCNAYiTxlnjW4TrJY5Sz5lSsEJaE+oTQDDHyXHUgHOX3DW7AdKde+9xVVHMV7wfSFQlNt2vRqB4kA2RPRsOt7F7vT9UJmS390fBIUh13PCBQvriWzl0tbxnxibJAx3vARGy9fGbjro6VsxOZtY4Lso73QEjBsIt06iSgGThVywMPN4Qt+ceNn5kM7eMT9/djMy/J0cNZ7V3iko32O3qeJG9IjEJjyN73FMcySuNblPs+jOSyBXJuggrwwPqdYTgfASTGUZArLYLj+u4XrdCjST5mC0D900awujm9lq71UsCZ8LA3LfqujTC0icDs9+FrkTQDxI6E1I19t0mDoGXhRKZNxaieVsXx0CafCErVyeDGrQOIUINXHdzcX68FSy/DZCVwEzCzEkxpuKmeI7/pYcdfaqlS4S8Ic9FaAhzRBdxefqDgTuuiinlZXogzQy2TUJazGE9F5CRUVjv/nlpjQoSF/MCLr8PbbFjU1mliJXDnuY2RXf195aLP02s1soXiJeRcqhii4kc1W/cMlOPkBvAAOteq6Z3Ivl4Ik8KvCBI8KcMpGQKfYI7V/zf9op3PtzdVZRS0xyf9M10MjNyqfrn9Mis8zE90sA4T3eth36FS4e0cJHQVIaWp4jCPXXK+lxAt5GJEF3IBzZENOWP63eD2SIuEGEt4BNirFCTBJuZl82YTPThV9iTGMvmsERWomYKqEm2kmphPGhU5KbExNYe58puSKfd9UinWXAoo7c3w7aFbkTNl5fAYLT0WfxPXT8SZhRgsvGoUGfNOKYFpbzkZg9VKMfxxCZTiJsWYIfjH74RPO3GqMg4bCDyYyt4dOPWcpKriI8p9aeuPI+s5tBKwCzEVnKjCgUGlsOFMQ1HIpBl+/dI2993BXFVWyT4mzQ8DBfIhHhtOAb2+1Q3wQ6z7QU3OFH2EF9ixo8Hr5uwM1Mi0NNUzVz/5WyFBuhn5v8tNQKPg9UcHFB7HJ+lBkMM5lBsaf7Id3dk+fj0AeNh8Hg8oU0kR2DpfFYOHAN4O58VH1VmzwqP/q9SQwjPENb+IFpwILc2WyJoN5PiMmhhhU6ZsqSgqsD7MPwowdJNh3WdRo2m/P4CdVeKMTtld0vELtTM9VHAmevTX9mESLHqdAZE4whgLmx5vYSlzZ9/EiUTsKLPGODx/8Ab9RlsOxMIiNqos/cfFGP5N0vZar7u+KCc7e4qVygZKqcOrZYmXNJ3WLc/H2wcoewAPVXNsKaYlGCl0trUoJHxLygZtORjn5ncJ7Z5sRWwR9iDElOm1P7zymlXUCiVpMu4+PShXJqPqsJV+rwU0cu9FDutZQ91BNSzKYSIvz6FUmdPc1MYCF/f0jGakGrHt8WUlwxm7eiTSR/A5XiaAAe6C1prSLRH8hUncdodT9gsYj4uRjuDKOPBjFEYhUEZKIrSolDVKRe8SuZZjHvHbS/mrzJYuuF0abqk15Oi+O+/llUjg2pjEc/8ll0ssntrI4Ua1PbVv5fHzUgMWTS+k02p4b0RdXwln2quggdKDr9j7J4OENLb3HFOKMKjtnowJcltRPHQ/srLSCHgk+bGFQJWXNtAR1bmL4vtj911eq5wvhjYzkgDQs5G/wO7DUBJlokp49LcuTDogSA81oI+xu+cNKwU7RoamQ0HvWbpXP0TQcYvTRCXN9qsvMRS9jrkU1xw9yWNyKxG4dLCUh8EzXL8WUvVLKKfYKZv6prxxrGBNxez76XcuRkRuwxtqHpOBy7RhIB7Nbi4p96zFPpnDBWLqU/rCNMVkzTdynZvuqF4f8S9oi94xotm+MsAEwZiDBfacihH414LePxk2rG6Umxa6AC0UeYOni5F8Xd7ugM05nTDRkJOzwHz3kxuqc9LOLqUfuMS+DmaB7CeIPUYdWxJYqeMcP7bYXXeSXeNdkb3HpoXwAjhWgfXdGQjBCvrFjMp6Na6zFkbSZeV+VYTakFP5WHjkGMal09s+vMbHY+0dRmSoXmaeyG54Ulge7GHNZNBHqap74YNLXTF+MhqdR9ViZyrmVK0G1vxBKSTS8Dul+O5pLUIyh4suBweK7C6d3SphOJXLUOietjMxickVpIVHC67ZbRexwT4ZysbpRYJoCg1CXixz2OoKYn0IEkvzhfzMp8uHn+bNhbXlTrRr9Coxc0HldDR4TNp+xc5m5ync83N9r+TrnkyAroLPURVDsgVfcAqA871oesJIq2f3B8VkBtLgM/3i7Yz7qgq58EsdwV7Sst8c1zFc8EhiImaF8oJhcdJBueETw6UZNUMkOcOalHALjC/kBLlZFbz/lXPwXaHNSqVJs63ogYi5uKlpf0OGy9JhGa6V/vEGHXi/+xFhu+GtDijDzAWWAFyT1ZBb53EBz6lMbCb0bZG+0m6pAcEdopN1lIKfN0dTMsvEAMxcDEnFzEe599cH+HwzRF/GFtYCbLubK8Kf4PVaT579B23Jli2a6i/uJqfRO0FHVqXDF2+9mEIThgPnezkwut+JNSvYn2ljFHV5ALIz39FSD1HNwsc6F7Q38zyl89LYSx6zuQ/Wpl/UIATFgygMOWi+SWIBcJSAb8IR15GYzqsgfQsxra1+yGfpDvvBnLo5zvh8JCtsSVZUiTPwsi3d4Oe98PEgAzH0oNE7dbtt4oAq6B/TpRhxs8BAowno8B6yYHLoj7WQ1eGw1O7rzLMUwZRk0QKusU/9Wn2QcVqYz6o7QnwYN8FaQy7kvDZzB69LT0t2OKssTS4lv1S9vsP5GTiazaN0m2AZsWTB4+KN8geGlSwo3wQxvmjZ9Lps9ksIVpAjFmoxg3k/uGPL6cUwbyXBdoIr5ZO5/Tdiyxb0TtQuvaQt/EOe79ZuTbQMz6U04M0PTKM2DoMTCzArlvbTd5PTTrP1cIiRc5lOQMsT4cz3A5dr119LFgrTHZzLI/L6sFBMR88d5FdLUabwLZJOZ3anrqL+Aj/L37XsUZhfJVjZjEUJf7YWE2nS8hOe93c3IZxMKGG/1FF11UC1KNqmsk5FaWfKWmDyDq/oRH33mmm0Ob4aEJO6+jezgacWB1uFKXq3vHjk2nm/z65Un8RcS+0lhz12V/PmgBV4iPJWw5TNnd5iYcjmzPhmAmBCechbkNOKUEFgva8K/6kbLYf7E6rwbwP4a7I/LZpJNLLF3kEan7wlg0fGBPz0OzyDXfHAjgA06H+2dJeJ1J92h7tU/yE46Ak1bmlaGN90rVj4yh+JeqMQFOSShMdAo88mY0sE39WAG33yLNA8YzBGnJyExGc9JziBZblT6X6NX1zW04d1dz3TyVDhH+KLC0RzlKrpLiJFEJdFdOtaVHN/PVepmQVb2s7cA8D0cjJgp/lcJ/vMLyOZElyt/yBVW6GcacfhPIEmX5eYaVVXkQxO7/rFo4wh3eQnrB2CgNOYgKCvgSo28ntXmoTMB5drDWyYlruLA80zlyr+CFZcODAOgEFV/jBpznz/Y9KqIux6E09xIrrtQpypOMvmk0pY4/xz7TtKkI0/4myIxXhiv+DjdCDcxjlfIr9h6w0HT+1jTUQ7/9wrAJWNYdBqAv5a1fEyyEtvOcOm/NZahNxuEhG4IYebVy5Bv5n+5SFe/+DOxRrdWyeTjtWbWcgHXOqSZQwobhx6OgsZxam+SssOkwVLV8kWTETF0j924ThwfjBGpYPhoe4T0JopVA5P2lMd+7fPr7NoSPxh6z95DDyHCcsHUL1lC9fqnr5DFP8iaSh1a7rUjcaWlrsJguFsTGODWg+sTlrrXtzg5LRraU4+AIPPttjBq12N/IYSkFwN5fR5NthGYKG8/0hmLjIorcZc41+fR1rAii+quedPK+IxiiMisQ1glHWvNwk+iUo/QRnrMtKv4RKggmvLECSl8eQrBvlRDMg1YXydvaiSRQJ6fuqHeWa+9ilZnW32JPcinttJsjCyAGUS4RimsDsdZ9YrLbW/921tVTrP3iDqWJq0vcQXWXsY81XXvxeDvMCbngK65oXgTH2ddsqqQCu5ThuvdUjk/4mKZFrMn4KUWr5TN4BFLWuzTdi4Wp/nBZ19v9Il26b15efy/Z2yLD4IcLvT8mdPativSauMQPFtgtzR+pDOMvhpwCKUTyBKJDKa2VDB7v3f0MU6bZBKk16u/0Ws9H7l5415RS4I3U6CKU1eRRHdph+c9P505kwDGXTvmsrdjipFwlo9n7G6Wt60YVfWHcp/fvIFFNFh77pCOVHbcSQnOdFCaL2BmAwBN9UeDyRWDYMtwcsqraX8KGxo7dzOjooQkpbrwitunEEaGusw465p04AkFCyf2NJA70hyjSyDT32QVAKT95P5hRfcXtqpXA36EFTf/H8zkWg71AT0RxHR9KTE4k8dn7jBhT8ja4oKBZigdAVKkkIefvZm50P4htYkgXDLu7/3iuCpfbuPmq5+3ORUweVUI4TLf53B6PQ7Wk8egFrHyklCe5yFxTTRbjL9ZbeZ0d42fuv1QdEyXnAfJlEbH50U9J3Yce7C/LtLUU3fQHiklZ1zBAuSLYCGjKthaifJfJ6FRtUdwXT/cK9kpJ1BXVq2FPg17qqAF/kuurKmYwlXXKI9B+xKDehC9N61Eo71TDLHnEcDZhMhqikx6iAk1ETXFYRxYN2SHpWisMPS2ZkE4NdcTMUk/IAEFEWGB6uZL3fwZi8At/Uy4HrsG5Dpe0zpi/tT56Mk+gzECvH6xByHZ7dDLjYLrgMGJUMddnmB/7ifMkZaWoVR8ujDHda2WR+7WLlOXNWuQmreAkR9rnrsvfUF6RiHDpGfX5QXuAE08Xa986hI0C9IZ6niRcXsUg7bansHZ0OHD+oO8fK8Ycx2hf1wD2vEx6H8RbtkJVW1dtn8MWBPDtyCqb8iT8ZnkVXrV8PAAgYxgxE0Z4FTDXsJmmAkliW5+C0VkTOhLSl4KSh0gWQu+w9coZHstE6hiu3tZiUB3ArsPcLCapdjXBK+e68lk3fJ4QmvxvCwKm6KnYlYzvtVmJ3Y2oXl0EqJh6ZG8kc+P0TuY/dK3NG1zCvGaM8+eLQkNpYbgcI9BfV4OPXhiISUHgS+kXGJmz3ybReZ6KP/LL47F9r/qJ2O57RTqA4K0brRdvVwXTWsHhTAu+KRARxNDjzMVmwu6YDNuwOPvPy7Q7dWL4likUzyqcfAHUKIahiGRU2VxnD/54cIwXpELukAIg6d/gQEBAV2AjWQjLl6gbio6FW88OOKFMhz9KQITAnLY3ihKD7DAWy3Il1z+JcKujI0HAtUUjdm4B/bHJK3VmzCnnODxHfc6B3+h4YqIFU87+9MsfZc7k4Bo4XS2R6L5AxJEvXzwrWPITUYdK5dFgNMOKGZf94HmqztC0J8ZFE9zkswtU9RjfQc9Ny4GCOmWLGd41B5ndDETGdfFDmEqAemYvUJJobf/al+ledmnFW6rPqoyd9C7XEpk3f/PKy+A6iNJza6P1K4n1mnvoPWP5pmbUW/85HP84mirZAvjRmfAFQGs0WsPkvm07kX2u/cnv5VroXTrLyrseCzxx05ddtmVbhLPO5j69qO/hSPVhG5FXxDaQvS0r5LsCB2AN7TxwEWV47mbVYyvr0OueJSNqAZgt8ewjhsVqu7TKMTTePXvK/CHtnwdntB8n1tTJXFRr+5KClZVTz7dF3cvf0E/xST1BwrCNSY0GfHxH07+MayhwuogUCi3eYx2Pr7ygWl0JWYZXHBHi3HZ5aFhhBYMDZATFHUs2IUA4dEwTk5mOPCh+Q96Zqc2l27K85ATaCn9TrohZxoiSMDU7fgCSJgiTrYErZ0Qg7ZhihK47lAG3NeImSpQK8vcmKvIXsdxILCTfxYVAJEQdTc/7o/rXZrpt22+hXFxAktdwb2xD79Fz/DTVezqwVDAhdWZZ/tgjomqb/rhuuLXKYARwNpUvDnJe3JTkruFBP+KxuqptUyd8305ipCyZp1/ZJONMGnLC5HyqNT+K/0OYzoPh686d5KVE5MUXEINxOdl/D5WoGIxJ4j9tYHz1YZbEofPbIEZ/JUSOPur7hcE22RDIUbVSLTJ5jXHxgkHdS0ZayBibufsMLYLnLCQtVFZfOhzsZZFrEUGjwLXEuDgqY0ALjnRFAaEiZ0m/AvpfKT01bBrvJMG3K2ZY2RYMxCiXt0+IzazRuQ6TyL36BTeFt0IbWFOo3qTmyOfS50aaarykjwpe6an6vdgw5GheXjbmr5CqOuYvpeFNDBWralmqghl15oH5wBdhtCmWRHIOWlZgs4YN2Fr1johw0UYrgJIBucynZGn8MEK+rCuqytEKsdwG43E5D3Cfc31t/5+oiaccMZnaE9e22ome/HNMxQj0qZ6BRFMNA9TFByKpzFDwXIE6G8XGHhxW5MyE0VoDZYfXrpcP5G0mRCTIeGjW7SkdITNtc4NbBFNC/RWcWQZ2cSdrGvyjKtDdcEBFRvYd56Iv7PkJh4SRflxoZsCx0bHCdMGkDi8M65tGyalEo3UsAq6Ld6FiVjh0kfESqRUlYF8ReGjIZ1uEig+8i9K+qJWc1mcRTbYFkCVAokrki+wFub1o3rOeAeCWMyapR+mjANJtuoW96AtiYlMEpwtNOLeFnZKDDa8bpbTSFG94gZAtnumVZBdCH/YwhAxI0pXJx88GyodGKp4WMh4yKHmUIu0/M3mpLZUXFGzkt03DYEweFA0A9mP39/QiDOlFzDmGZxC0AO7qmjr0s5cWMzOrlOsFfr9FuYUfkuzEm1dJKpd76IZgcmRxWk3YRffYmS4T1WJfx8/le8OKBjMnQFVC6S1gZrmoyuDEQqUa1JThy2xKd0DiMLIhjdPhJi8k5BLwr8v+RNi4NNKQyA+xCzBPD2Phje4EQu+ZCgJNX6ppIyV6jjDLM1eCHIy/4/1NCKcvqzQjgvQSF+a4RaffinxjR/2Rr4Prbh8Qo86M+fkSl280vXeTC6Yx2s7+rg2mv+xY7j6itu2rgE5nrUC6ryZ06sHcsVSLdJxF0EU8/Hmdpbfve9eJpCbK5jmc25rL/AV2d8ymm5Ler1SeSaq3Yf03SO1nW95QPW73LjeozHBW++Ez4JYUAVt04BDDOW12s9ZchuqnEY4rY4ZCJIjnhN0P9kQIiN7omNaB3EJKazopBn5tgCcDAYqFgvv+H2HYdY2AsOkyPHZ1mSEJmWvjCvXVwAt/MO27GJNLZCjFIuN/jKHJfEOBSW82D7V0fBCg3KDAvM0vyJbFYLKEXsTT/t0L7fXNEFbsZ3gd6MG8rg8/5Nh/JuaLAtwc65Swuk3dZg/oPSXKhuxp0vPRUVY2A8OvXz3A1jys3ENhwL8eISgXbEGcX7O/1Rxy4MPzjR9gKK+mlrLl4FypXQI3Y/+j1vfFsYdqFSm6RSEm5XwvwL62z98odHeFfdP18sy5OkNgFp8ollkpGcPv+N3+3+aVOEpBPAzdGnwe3cRLuT696YLO7jPRYiH3XKaeTX2WISQKFUAlAh7p/ydILy7yGLdu6JML+fzI1KQpqI25wyG5Pwvkf7j+s9K2W90b74Kzr8v9eIXzGGjP88bLC7K3OWhy2QjmHc4zOAeJtwKX0aRI/k1+Vi3jb6MUw3bmSmL3oOc7NAnWisdPMMTlzzZLk/7JOmelLsdAHfRWToEl043rk0eUrOyBSGbEtdT46Ds8deSnLFmxoDq3r67lf27DFsRaw+g7vJWCZX47iE9pZht2Bps2eCcKw1OjW1VuS+v1H+nj7mp9mOUSIuDu4svta83lCeNsitGZtakFnh9YxoS3P67wfnIrKcF8oF/r8c2JxOx9vNuSN0wyn4XTQ7u9dJBl4U5mYdOR8Hr0r/KdVzVZzd7G+MYPzMjHW1tQmM/wKP74H9nCSyy/KV+1biMGeB6JwxPOv7+6+ya/EJraTGtRoLDriTx41IKWI9c6HLFAuYarMTELS9VJtrNvNGT9aREywj756I/BmcJq7kXTsk5x9QcqP59MgY53uK3ko++4ttj104XLwgwV03i50KCnFjVSxBM499Eh2rpE3JcXLBRbHVZNxuaikhkZnF/TN2VnL/p0Vs1VegaGMyT74JokrmhPaQEEEK6jkGg6TjtbsYFc0CrLkaBpVpez4LjqP3uQYLlwelOEEEky/h8LmZ+UXUDdyTVO8JsSd9rxeTF0FMDxoCQHalRN0OKlZQfxawp41LN7pPugvcOvrBCjcye/tGnnmP1TJ6p6TtNGTBXmZ96o2eFn8lJLuUtRzlXBL9uLpr/SLIzWFrAKuf2jBHvOPUQxxUS3pQlUXhT66AcrGZEEDqHmKiXBu44g1bCWPrGt39cYaMRx3Z092/4tDI7am+Wa6Jf/pEPYsQby4pDbqb13RV62Zed2r8VDGCQ0pJJByORLfj8kafrOGh2+4BotDnkh0+U0UhCRqA8ktbf9tLv3imumUJ8vlO+qDPm4A+zY1UiTck79U2PKNFpIb+qoHsJb40jQD1nAyNm9xBkSfuHwqHCs4n+WdCJlqN5xB5mStUj+HOrk8BewKdp+JspNYBfahzDmZ5Awb8j3+pYLekPea8iMvv2yhCLoY7xqHXRi1+z0+YYtA/Df/sMenNXt3e45rtbkcV6aKUwX7Dn2nRFhwo2rOh3g/M1RzovPUDUGafP7rCTW+DTvbmWGHFRu3JHABjc7a9Fyhp3kDp7OAhOviBSQ/P0M9E3ho9/90Mqaga8mLgiue9jjN7P/b+vA4VT4n0pp5/xkcPi76PCwOvSPjz+BNLwV4x+CCJNH2QKr0idDhatufv5aE9Dou2x4N/iBbvLExcybJwtXDKzVKS+8nWLQWehX63nVvVkJWDJ51uvXC7QPRTn6LWCIfo9iYeF4fIU7eKePEoDaL623/JF/nm7dTp35reUNB4rozPtj+egRNBQ4gODvbwFYrFLMp8unXp5OLgNfRYIaDBZ1CdEI/4i0ZBlaZuSrgUe5RUtGxIiaRufM4V3NZ9ehAf8AY4Ijk3Di8XYaxobY+p+YJkIZpQH+hC19PPAFQ1QBSEeHk5u8+zg7NZkW9Ef9MjoAnvB1oTfuCXCJvyoP75Bc+A/XwezLTwqLC4itSLvnbiNz1IxxWpLWWS+IVzOCq6cTnqEKQfkcoozOEObaxPSmg9/3Vp33/zdQT4FZBT4T6Q+DoHs0b3+iX28zgyBd0MeOlOgQaolqiBlOwR8ZDXEQ23gDa9AlQri/iEupjZW0aDSLsbfNLPJSRmqU6zgzXOLTst/hfVcL8cHSecm6h6bsRzK5DGBXqJif7+P+gU82BMImp1fY1nzhKJ8Y+YUTPujGaHAvlNN/a2a/RriVwfodtgPxVMMTLQEIRhqjYR+qw3nv9jDLYRFLrnrEI7JVOW3pH/2A16X0yGSweGsHRkz5T65v2tl3uYNV+I+ydw6uKtQCmePWwLG2MfZaKJGzAPgLWdHhPu6ikb9wY8hj5NST5vHIhE128dRq+JKta1qgOUK9AbBvoJm5fGNa/v9qobqwVUGSIi8on4FqJAGBZor7CW26AKfmZFvKIOHc8c5xhZ0u8u7R+kEFja8r9tnYfTpo2nwNut3/2Caow5IFAwP9pvosfBJ3HVa3Njzb/ZbqGu8h2Nald3B1C+FRAFhmUf7c1fzmz3dvrsvmCVhnAr05YvxUq7WVp0KaUm7RLP8c9WW2U5AuemPt082z3XrlN06cVAyE/rGsLPotLpt4j58RWdQ9+vlZJdPMLbC2IRlST7gAiSjphpinlgfKFAQuo31VMDGXjckPRc6yzR6ubUDx6wveGrvQrwzs6W2vDosb1xfzDBo5grvIb+1ErZPQXq6K14t/+NGhDu+EzAfgxSmAtTe4OTsG0C9v69e68yDJPYblKKQdMVy6xBdNC1qtBMReXj6x47689dKLxWTUfpLCqFGJS37RUcgwsjk0Tnd8LuNog3uWGhMM9y760sFTg7EuSE0Gem7SSrcMkI73MpjgMruR2VJ3ElW98BM4QRzdlJb8vH1pgAEL7sHWN2j07VA4Jps6BiDKGH+bMAY15Tn+/o8wFpnqGtvye7bumpinEYRx6PJ6cy/WtuK6BGNb+zoEHmisZE7gx8IqKKK179ZEsTStbcIyGmKwprqfXn1i4fQhiII/2B+6V3paVSFmdiGB6uudoh5X7lAta8roN4ABaAOT/qbJTaMld08Feaa9F/oqHR6ejrbvthCBzbtQue1JxIJ5uw0NdjuAFo2Myux2pNS234tt7x4pf7b/rpBASV4aY/XiA5lGF0P8/AyxiWtQ/UP4E3aM9SNZVQs8RvdVydxHiEwVLzfJUs7EVcbUmt9PWd4EhN98TTFL6Ju3kMQqgW/hILzYWFFsBwkScNOckg8ea7Wa9lsj7Jpo7Oy9kZQu+BBRWN0Zopony1HC3m7ALeEtAeD4jzen35Ah1Bhfax4tOvfXNDbe0gAuZBaI9uvjedB6Kw2oCzeZ+eueljqwl21Tmp2fI8gztDL9ii02pSL4h/z2zc3Wqye/xz5X0VJOmfefjDgTEn8EGQx865L/bk5bGIsf/yNO305d9PbBGIKOTVu2UrZ8s29z4Jty5afHoD7OXLNRPFMCXOCFM3NzPlx77skev3tkTpcCZGdsDPXnvoZnxGKtnLXnurlNh/XAc0t+SK/tBz0IaZddK25Q0mFx1Zz0qCYETKnItbxrQfQDqHWKksgxm4Pw9tfNYK5vyR+wPTwPlFQ3omuCiTYnjjoKf5/Ts9zUlHZCn1qZQ0WKDSfCuqEdbgG+Wm391V3a1Cn2eO2CEzjd/hQzKPqyTGQph2ShywG14lOnUh/ewkzhOQqP4SLKO5O/GugRVlwkRhRf2dSfgwoO/cta1kJ9fEImRfBOW3ohjxAZ2nwdLacpejcfy/P4SaIuikOAfIZYqus+XE72eokAUyK39d1wWN1APAi+rX/B9QbYIUW+4T50smTqWHRkelyMIHzPtxOcfjGtccQ5lH7h3hk1zB0aKQ3qwW2rUsU+Kv4UiDyRcLrXzFIa1L8f+397dutzdEPrABpC5ulJB/Vg+SUYsCP8rYk7M75gOXUOVA5FAPOsAN1VsPLKrfMlCSuJSFk1B3c3m4+id/l2/hyVojacOQ+nQ+ue2Ht+Ny4GGGgk5cZFaHwSrc3chRlv5IrUVffoxFIEWNXnQLhDFvDQTYwW/XQtHk43EKcS39zQogIsVsOlQ/ibhCKeaIf56uEkYwwAtdGQBuXIjWUQFtw19/IuvnfUKlJeRZ/BCz5kp0G3Be1OBg2Gdug9Kq+N87CBkSSxMJGi5lbqnJfm2GEoxZE2y7bvNlR+BnJD4DlgK91u5HkXYYzV2r9CxhXtD/xlgXS8os2e4Fv3TPlPHmZtdsjJOHhMWNicoYzWx6F3k7KHp4pHuiAKuPo8x8A91YFUdJyvsO7fm0LYMBQgy5/kZV5lUxMDJj76HkVP8gYsYfWe/VEAtOUcHM4ODb23Wd1N7DkuliPpV0wrYGRo47D/3W58GK/POG5J2PdJ5vHlf0BY+9O0N2VM6at+v08R5Gw7aFl7u8RkXW2NuR5Saz2MKEbmL4Y0AxLayc1Ql5cV5KIiHCp/RWHbb3nS16WPMKdCF3XX1BT0A2w279tyTgD4Rbyf8rovCedmI/nSizlfrJ50I4Wa6IVmOLlvbDo5fhmqQxjdaDLlFmdccPXiFNM3Dylw8Lh0aSQ0GrQT+IGHF1RR+ACdG3ksrzouE7utj9KaqHi+ykhWVgv7vuhROc/fH3k7WquyFql4OGZ8KwP3amigFWaNdCquBD+1od3YmAzRlKFdpsXojQLNx9i9SMB5c5o9eT6CyrFEEf65fVywUCTE9ctCH9cI0wVqgx+Aacpw03w2zyDdeCuMziJ3E0ivCuUkgqxPrHQ/8mXeQ45I39O99b3IeKWpRimLYrllDw4WDUtX09dybOT6qIfw/X8iGvIOYhO87uvatyCer7+AJrOomKfYAffL6wiXSiuhS7+wju8yRwbbLv0SEKcCON8nmcsSr4HdwsoLlfQMNtmPQQ8t32Wzh2ju7N90Fqcno1dc093v78hW/2FmQGJ6IadUWhHRATD0BLSRPBVVzYeRsQhRKNr0IR41jlG0zY0b8p9lGzYsdNGuBnFPsA0Yt2jB4iYKFBK6gJsRQCgDh9l1psFEesi7XP5tpufivvHBdO1C6WLo2ZReOLprV4MpS8p3+oCxE/YZ8pB+xTkJ6HYN4Te5e/dLCn472K6zwlzmqMMjRE2IDBbCNnIidwxz/CleQFtTqa5DfjlLggF80L1cSsE2llefRKDQrVY2Xv2THzA5r+QnpyxKPXoQGaVjlHzd0t93dzNWWiWj3m4s9JsM3P9X64gdDONl336rCcLJqpWfmqB7AHbANA+mqZx77gucbaD2cB4BXPotxppxUcNVHPFt9n3lhvYqVajaLrKjlZxfVhR5YeySOhkS86w0dVXkmjsdLTiQ/oz6gpvN9aIiglpqlfLI/9CIraQAB5nJ5N0jQ/GviOjVq+Kl4EyYIv8cHqDqACTlnHBCOhYWcvRyNqAHZib+zAxAgZrCjC2jziMeaitT3Cz9Po+SqTC0hM3fIStlfEFEbyMNsSyNvDzI88F1FL6GtcctcRqD2F6rUvbpf3A+dK6i76qGQtK5t91ePrwxSLxw1ROZLUffzX5ra+zjJ9BDAxbiIkHKqx8R/4rF0WFgjZYptX4PWi9kOkSdiHj3BB83xRuc9IQcZ+R6/C8piHqPlIcdlUTPFYaJSmlLI02fvxbSdRdlBUCX48j/UDzw/6+8A5KwEsfsMxzohxFwIQZr4VkKI6VHU9hiGahsr+9uEEHL+UOkmfJwqQODHqtzS/+nKTBTtUY4UWMVaIpxus3byiXC2Km4ol2cFu3RmixQKdtNoH6yn8EAF0W3yv+LYtXkZsn+i8uQbASYwRUApkoi9nDuk9Jtk+Wj2tronWlsBrXM0mhAOzgPjwd/xgrZHZfCV012d2i1na0mUTuXcyaumR02AEtZ11nki83ugNasjzOKdakp0tEjXZzp7LboAV8EXdhHT3ZXiWDJl0wWtB+Jy29QEck+IBaImflnq+0q70W7SGvDJUa6BcwufldrA/Uvzuc9FzqvdlCVSp9Juxvy3R13gCk3ZboneOQnxO2aR4OdfiN8HDrj23D2S1KKeZ2/smYyhvfDfIP3LM8gS0KOyhiQOx2H4dUrVzrws2klDzg9vg18qymRdE+8ak0cubiv3Ws0mRfh99PoDs688gGtgpoo7TE7p3HZtT+FDmQh0L7o05k/y0kAq5INC4tlVpBoFE7omEznes2N8DAIUJM2kRv/ISFADWNIMyBMgFPPbhvMRWvDjAnTl0b7J1ZVXGnjDdbZ7xyExLQt/5oH80nMZmokmL8+BRc63YSVmSwyhaRLpxzbe50cKFY7oTJFvCo0220bJPXZ4E60b29wippWD6MD8fjs26zUvVu3X8tzQQi3F+8+stYLTa0f1JOGBuNgyNN82+C7r2KkHmeUxh1HUS1yPa0td36rXnUKj5gfVSX6Xo1P2cU6YBWaQ06jZzci+ipGfgKoiY6otgYY/Po3tR9voEoZlsOuH77WEJphusFhcejMoFXDOhadJ/X+O2cGz7b+BOwKH4VDTWQsP2i40acybKARd8IzS80nvJ9r3ChlO6/k5IQ8Xqi7MXqYkKLngrkXrzCinAjp6njP5oDei0JcRLgLx1/5Acjptovd9iD3OYOOZ98pTG9aH09KKbPVqbt+6idkQYZly9WevGBBALvbbprfrShZE73lrjt4IxehiHI/g0TYfLfDohWfyY6Jl3F/i+A0XuEHySlta3MuV4a6/Uu5orn2jrCSXb/mad2EtQzFRLHRdoaun0xpda7Z4TUF52zQMPe+AhakXWkgjpeFJyuIcctmTu/qH5NRdBv/yUQDryHqw0y7Dfjbhk8gxTwfttqX0vOK7RCGQY52v7zBZGqOkivkgRg4itA9VL3NkpIUxivh+nEWQJhg8ZlX2/onhHb17kj3ZSVgU6CBYS3e7JJaKt167rQIOQcYfe4R5z6zOPBYOJu3EDVRH8cIJ9khmlokG+9XHPf+VY60KYiBleMCCXBdHLXa2MJ9JnotIkODJ9YknHlmH++OLp2xfQtIpeVD6buFzU39Og+fbu45G6aBbHEFLB2fCVK2xJDlBgwFsU1JI9154snKPM5TyQxiG0VLUMoRP/qrOnrFmx+7n7YgoKxb8WhqaHKEdKH6kijzoXbgA9Msm8m8oI6NzaZ0ceveWWply0OnUyIFpMeVZA85Uu7goqLnLy4i8vVkcbYU238UfJG3ygreesR7o7qf6tjpOLAUAX2eeDIiW3mJZGUCFdJ8vMDtNg/GXuoIzYVQ4i0WfWo4XCwtwf6xeO9zwRNKnoubD+eNSfCe9Y32sPN3KRr9PrsEuSHMeYKalbXVNNxlIlJKoA/acMFb7d8kvBOMou2Pfk8YwzRtTzf4VMKhbMw0BXgubXMVmMirAyI1c7ReknAsMnG5bX8xLna78Cf4bZ8WYCGDJip9XepCd18vOPXMB/PxFzhV6Is6r4uGCbTRro1zFs6x3ec/tKbEdEZS3jFntJf35GZJIIpTzgs0YuNdBl3zc9SJC7IJLT5CCdUigic5eCUxGPHDmuyg1JG9tW12Zl8IJYP4+OWi5kn9EmpGGrOBmcabdh4iaDfP6j6l7fyL8j50yoQ7JZM+rIUkd2OLj+x4ClKsFjqyxQJZLqaJXSghDPfhJafwPVRpH/UI3tviz6PWg2W3mK2KbJ/0Md//MsOIsxWx+kzVDxVqrbUSP8KxjW7lfbWqI92eWXczfsw1WXTfX/xlqoEqYxNnoqMta4ypZ3xs4YPXKGrR9mv2toX01rHSm58zydj97sBW1eJRacDgVzkAjFLNEQMW8wrr9zOCaARf8hOeucXK/my4ggnZf73OmbibAFGE48Rc58G37cDljsAQBQapkiPbq8jh0hyy5ZM18mUncBnXYGA7EFJhCGeHJkfiPkTWd/qePICcW6QfGC1SNyI5dLRBYyXs/ySgUuhjG6nfq4u6znK93X/OBgyNelq1IDRvCeQqZO6jvqiQrTQVg/o8ZE+onLTcoZs5Fbgg5zRuAAE/SBPEFdYeHbbHkaBe30IUrVL1uIvG4o2PC2xT+8TTQy2qotqpe116qzwgU7AiaC2KrwYAe9ir3ubWuxPjTJzvhpnsrke7mh8Qq31uGo7A1zdXBe0I2A56AtUhKVaMWq50GhhAZJWD1M7KjPDn+8KsIFZ//dYMzcXkf8Q59BvcsE+4bGCoqmLRYoM1n8ze/HUEouvbzKeW/+0dxDaRwQnLu7DeL3XpPgCHXIWBL9tIm9w5H/g82QYm5agGB4SlOC0D6XdCmCf4A+RKZFnVOU/VQloMo0mQBphCI8vjZZKB+fwdZFpmuuSYM70NPxujOIUdI+1RqNmxPd6w5TJuN1/NiVyNgJMW7phT2GmnDF4QrQnABUJkvVAntr8Mr0XOtkrycvERZLyKJDaED7S+4KsBKHY66dcj6onPrtiA/8cixE8DIIjNRGxBbnyT+Oqk6h/kn/joSo7LFdD1iARVVhpDpUyIQqASiL32LUjQ3HbhN6l63vIKhwZyhOvERu9JjxFzcJfSm+Eir5SIkwIGj7sDTP3Azb673AxmPqe9uchFyQ6y/LZXRvM6U4kn9tr6B6mJ/s5gcZT73GKn/vsZPsGn5Yaq0gMp/F981s6lpIFvjuMSbsquq/Bsz877S0xZ+soQbPuF5CjYydfR31nD0/CuYmp/30HjGnaeOacEFlU8sHzmdMMqsdG9l2Rcou8c3xYOoX3D/Odb/nkskbWkRbrSdGJT9uQr3XgOBw7ldFH22yOz3zOSIROi5Rw7FqKbutS/QCu+oKAzDByM3UesBy6nEjfJIZXVGcBZVig+mYqaiWwKYQNOhk0pL+DCpGfORmJ+IegTZcz/1nMqW+o7M4xJRRc8WgocFh7f3wibWyGCtICCBqq1OT+GO1dHFHJISzHCyueB2e5zL//awSYafo6NO6jkD2gxNqo/cNcDDzy0mae/BXdpF4dTfdNhfHPhWU41iQQ4FemreC7psLyQZOAO9QtLGvfhzS0JTudNe6Me06Te7Cx9JSeECt6lPnBo7Rk5PnL/+duNFB8UIsXXNotFuG6Jqdvy9pOZQQ1h5rjpOY4AA9miqGlS2yUv6I9LzCOnw+Iit/fw//ptcFGv5HAKdljiLEt3718HJLN7vXGtsbvMpSnAAYwkm/ccLFQm6B3oWAVdyihnXttWle7e8+omORDWZM2FUWYNtDRpI+dru4SZna6oKtcyoWYRSQEDsYPCzcMeBJZGv/mxXVcXOfzBmqVOwYxk/GyMrL7sfY6BVNWyIVsE2Mzp8ndQRe8rigBRzer2n3PwccM3rByBVKKWMTeJAeS8rx3IpaEQ67ab4W8jjfXBA2+ZXe2i9nBWMmZ81ebcOvLS3h2ustNEQP9z7S0gS79rXhOxyxkGSg6SZEmURHM6wa6uwwhvSTotdjyKkQA9Qhtb2z5yZBWwuj86/XX6SjjHBhBk24+caXHU3Q48TCJ/7X4PFx3C11BcjkQM7JSawcVGYg0IAGt393Dgv8dQXZiDE8dqwvyxgFkj8Tk2sLAQ8gtm6mWcbI143PTcTCUxGcpX1dzsLebz2R5vb91crGPWfpfCyCdSNDd2s5V6/ckbfPY4CU7PpJo93Di+Wx38Gxava1Kxi/n9tdIl8OJHlZH/6AIiqK8LoQNNMmizbPcnwER1IRJ/YmLVf5RUHZKytpKRrYZ7HLQKJoK7JSUrq+9ymM5PLL881s21vIBWT1Z6lpqrGV3e9+ifG6k3tLyNJtCPQ0Px0PbP0oewTjNaDVumI7+i2WKOZPXm4pfSjvIk707mdZDk8q8+n0pSdNQgxdCvNU8w6JTdM2jQFNMV28QXfF/Kci4C9/NzKd7NcCKdBk1wZT/ONuYdaJXO28bAlPiL8JO5UzApaMzzmcIGZBg3pORgI7g9ZHMNdZmiNOXFLZQi370cpt0jGogOSRce1NhqykPnCuU6SnugtcG7DyQI/Igu0hk6NVeNszCVLk1KYMK/qdpJMla4oMksoiOpzHLSLNFW+dVRLSZOeEiQDTayZN6Lx2+Rr+XBgXZduNDiJ7LpNAMP0sZlwedkuQl8EltOtgl7/Wcq3mA4Gwj3m7Ag8IT1e0KASbSf/C1OqBNh5HntJl3fP7HcIxw1V0oW+hwSZu3UU+9LBDBzUNSMTh0gemRqKyoIcyqj3FQX43SSLS2PEm1LSxKMiRN/mi1tZor+5hDFR+nWvynTCgGTlFUOh1/0faQMo9wtY4BAX83rLPI9jJSKlM+3uLPapL4MUkvtTEVncLOfsX/wgFKCE7AQz4iBqcrXKlhDqROWwSpodGG5tRUXeWlUqOWWkGeBewpWlVuWdulmBGDbr+660Xnkg/OdW9W3h8YSk5qSjMYYoHE8nr2/1hK2HbzCERJuM+typP1/JdQKPLBFRxZVwEtTWS6eS5gM+/Wb1Q+YmxUWaOxT5+91A/CoWfOHwIbbJHh/Y7LvdParyUP5lUc7exVqDt6uICMiXLYxlIN/BU/LrXplHFwdjudFRCvdamKbdPO/4EvVUQXdfDhIRFK4e4ISH8rXwXW7BctlB46YRcuKXBS/6IznyaM4ScpnJgMZTHugMORttXDe1JzgGEf6vH1CQGI6ow3tRYKYCzJGLEa68mI3wWG2XKxxcTdZTJbyHMBgFtyUMxuvx9c3Tfv2HulyoTjPd1FHmpd37p10L9KspB0EHiknMK5kRBd450DvNR3kTsYJvbHJyZw48T7rGmPd/H/tK9tq220sFQSLzEektIcSHRNgjDp9DJyncZi/vKbGct86Y6TApwKuKIxBiWWXmFgj94FBGZEmiRJgEJwl9bOHH+BUKs46E3tCuvt6jlhNIqbB8WuDBZn8ZoX8bFdoNraBOXZIAR7wOIy9g8fArazgKSlyr9poPNrVQVcf+KDJpaZJUiscvmfZpTdXyNzXhH2rHRBd/n5gMN8dokKwEa41LR23a5RKgKMrkOnXiV5wvQlYPspDarhekoNhJ6dYhXofu8eSJzg/Nrtq0Is8wcTOdDrhakUyaAF/edNTzz96GOX4BGf77zeqveJ+NW3nSXgNP13bwgXu/BpOzW5I+1UlRFhCH9By0tx0waaRONI5tHxzcyI4ShQnRKRqb8iYfhPMLvX++wVBtJd2wOMTvxZdpFddgmaR8af2tN+UfP8WPHhNjBC5tWuKB8T6AO5KffmrhawWyk3iWdjyeMraa02Yeiwgs8A14QM0aZ35y0jbg0iOh8I7auilhZStJsKDjf9zpd3iquqnZUyZvt7ANdrbAHO+N3j8c4NnTcpSxlM8oHeZzKgcQw8mi59l+w2dt3ZT2auOTfHtiRx8FLdCOKXrkPbMhXmZuTLVWWiWJTw5U1rcBpHJom40hxvGghAqnKLETJo31RE6kjuaYas+oVJ7t1afV6AcDWGm1iuz5SuoZW2J6zNVBSxtXKbz1AO3Ep5U1lVXda4065d0HuopkClDUiKnndy+30ZB0I0gUG+zoEII+J+IKD6ySlfnyqKbRSWYNha41KnpaBooFtfRm/BhdMSGC4DjJ9+0SiyfEoHLayA/fLG0rY8DfXoFLc3omngVol/qqlxDzDeqxp8OoFf3Tij1VHCz/EKqzvUJs1brgbO9afYIoOUDnqeuIAVjfNugZoIjE+LmozuMnwr4QVbymms9gq//Kky4VdmHRRdIpYxjj5whhtCZJoUB0DAPJklkNMIJkWRRp2cY18dMHU77CJdmF0pSegJSgHuJGsXb7F2IHB6fJrQ0M8pNT18ZkdDuLagqXm27V85G6aNy+wFgQbFmUbKL6QIpqXqx0Q/4JBPxpTfFc0HXw12HkQSI53D6ZzOz5EmKc6F0gqN2qgRrs+0dULSxmf+655aIrw/x4xVDBmh+VTmClP0eD/c/xljAwrq4Bf9lIjcfyekaNQcrKajklbSmO76WVPkIGgfMVEurbSiPAOk14G33/P3o1Vwz00Ekwh1QWZz0cYj5Puea6zgUGdT9XfujBWSw/Pn/bOSTtHcLaiYz2SE88EjcjzVeNzI6u1Ii6LQFvLkS3buBHxf7TCinwG/rrVFm3bzAJcM8r55FJHXZQevhju2T8fqAyvBTJIPlhkQ6StOyKi+IaKVyMSxj6486MCubQaujU2ATJ2+5b+4+3K2NYUPXwp5upCo/Ykxag0ZCD1QOxxK80yt3cUYFKwS4lx9yNj26bIrSs5wg7u0JDMyuQWRqatvPMYlv+5KNOeTpNUk1DZUTzEkMQX/V+zx1eT6ASOTp3IO6cU23Jw3MUTqwapopY+UoxBXPQfIiHRRPEs1OI2ThMAyC6acbRyiXeUoDN86S8Dk0qirgXq7z+ogm2Rf/f63aFF1rULdL8bnNh746B1mXsB9w6yFAcmQKyJDIV5o1LaGn7UW3Eb5m5Qk9Nirmarht0Nv+krPupo/CuQw1fVhVW8qii8H9GW22bz1g5ei2oRaIRYhGQ1wpb2WOBVsvssKEkqUIST4M9fMsTmYi8SPGKWc1aLkXonuzW55WThkqLYJAdOd3ypNdVjvOoisqUDMfIlUN+onY7QbW20ry/bTJ73P9k37dMbeRpoTUdS7ayT15zk6OfLLPb+6U1OwW++r33qhKmv1Zg7no/ZPjnnKDMAfzxeFe0aAm79DpDnD/5PQPMB2t+5Fn1rwonkkOoPgRg0bzqGmq9A9sp25t5BA2MHWZ7IXzRUH2LS0U1S6DCv4zQIZPhzmqu0rZL/8jHTjjoHRDFp98J2iiO8kNopBzIYJb7pH6sXZM3gO7jJIGckre6CZfZQf1mbq2KZRlS1O62RMa5spzM9lL8UMSZS+vlygDbp7FpOwNClOpPJ03uYwB1kBXXvWelekhKodHcSDY1rZWUYLJR5dnS+57ZAJB5f2AbwNwKNU6R50/8sSX0/HZcuACBL/URGD+YQzZgAxiuKqYaOr7/eHJ+uCaF+nfSho2wJlbmUt9JDG4HVFQDMhHPGfRN9/Yzi51cm4i4gt/MF/VUBTjVx364SEozFNxlKpwwBvkWEHNnc7IX23Ye6hWfpUGLi4Nc6mg/qtJltmNHtmJMgCVWh/zGYMXqbCp+So/AV591/nkgSsPi7dg+swWDVfku63p3PzKHHMz1/XKtFSYUhTSkSInUIAjouOCkdlAm0ebnOjlNMdPcdeB81HnFoCz+D4AsTrrd2g1xXirbjjpDDzjuOinv43b+hqRy6ibeRO/MGneoKJuu4KauoIpv7QmGF+BiCsuFiL+/JEP71rDo4bpOGHap0AeJbPv6R5d26emUZvpX/HjZKVptAN9fOo/DcugetdK3R/Typ96NdOoQQ95oxE2un3LEjtTGJYVRG/VBzieHjLc3deysY+a4GRHlxu8/0qSlXHhgAsPY7f4EG/SoAKwW8/KVV838IShg8wzCSm5w8oNEqA7mkml/Rxl8KGCUFAHissPRfGqy4GZQKSo4F9IFuUVXLni3uC/L+8L+soTJxZRLB99IApXySnSv9TrRgiDTbVvxtfMWRXT499gIl76gBhPvYBo2Z1Z3eknanDyKvKNpne2eEy+nG+tuK4Vj8+CouMM9yO+8fcGshMnEhv4rLShQ44se3YxQ12/nhcbezXDkc9cbhP9RAFKYRWQJdaE6tBV78B4afcZPtfNikreAg/BwisztZHoFRC+hMN/kcv2xAy6wmmV09TiDd2YzfY6TV0g+dWZkQg2NQotBgRXK84jXtRaGkdVtDTjo0GPUY+fzHp4WshPCNRqtHyCa4o+7qMp+mtdYK7s7kVxpWjnCDjiS1sgAcA30sU8p7eYQ8dd0uLxOO1aNeCcuQB079oFIgCiuggZT8+oB2gvKvxShwtkeTdi/IfurLBLo5UFjyt5oinvnXwBEp9BKKMaRQCfBUuwe+USka08rN21TBMN8bFVJq6tghfL9R55ZKHPRoDuhwp9S2JMoyRU8KGvV3nsxSQAsB54B88LEnAMZJOKonTI/WfSQEBFpHfx4PHRBZn8njqmBlTFoFnG8ZQz11uCOKo2x2lGAFdkw57M6W7Mzj8fYe1WahmnG6Th67vDF2qk4b4jektzkUlUIdFjvze7bf9ZJu7iI0SFwUdrhpnFeqbmRw+VsQpLgHkLek3goz6tfJIGQYXtX2R4dZCSDwsQ2rZgvjDQ18XUctfazmMwHZtdZ/7OudJFXZSaR0CKmpIs2zGmQPg8+0A41pnhB4k/ZIG2Xl0Y/LSkE0nMvSZN9icYurpD7Wh0OiLjZD0GLsQXjYIVEuaGPfP6LuUZ86pPp7veElvHlrghOuzX7SuG9YqL1tcPaSXZku3y45IfmZ3pvf0NIDwuBUGPuBZHyU1/EeF7iLHmtpY1XCzOCjZLMJki6FN6PefB7npD8AJBqb+i8HibWyA0rxXBmhorXWkZpxY0RIeRCDj+Isw/+Dma7eFxx7SpuPXrGz8b2+oWHxogOZga51RX+mhYIA3OheN7uYS1ehxj6sJFTAbXiHUybS1AoL7RWOsKhCctIXVktwY2n1ViDpRZnXn5MNNCLu90u1elr3RpjcxLLaTvVUGqDa16etM6Un45khedzgOLQ7iPaUdycNYYTyS1il5PdLCIumyd9d7HBRlBHSsXxmQWOq4GVPu4ZLfbCgFqOJ1jw+d8k6slewSaDt1F7ksm5j3oRYGiWC0e+TvetOTpzUX9N0/ScoE8J5EFy85ZJNi8VqvNJ2uLfIZlbOvRiaPDXrM3C7LKlT5QBsTj4NkhEzGbpR5gKSfOvsKFFIPvDm3xiSgzcvUtexsmCwOBIjlDa77QLCxCvArksJYUL2TtxMXFlerZMSkEUcb+G7/jzPsLxOdZBLrkwgg9U0bOT8XzDR7WvQfoTNs1cEYVZMiBlmlO6PxRW8uRVOyPKgChuLYTRNTgy5w9ISfSIKpSpKwAXMwpwyMBEKdWO/B0P7uJPydWz4O0vDCnEQVhqH9eJk8ZkpwU+oG8nxDC3r1L+1wX14op83Db0UpxLWfpXpXVKbNKIft2hXXlUGlKcz541Bc1qmJQFAldTUPN4UBYvD6L4VEc79sVQJ/bbTc2qgZhkezK3ZF+fP8A6eEs17hrvsUdyv2ORl3I8YC6TbasIXL9LZBL8RdIhqaQTOIdhoSHWaIiof9BqB/qNyHek2+80t6mCP5g3d7ISqBAxj9cpK7Yg6w+46YlMhXS73QcaRPtG6GD5rG0ITq48kfFc1n7MWhx1dT1GQhn+fVrQYqS24fDjQdAkPhKKwXD2z3PJkZyTC+kFbHcWSE0czzCAfdokXJptYg0x9IX07Zk4tV21Q1aKUDDe/UskZ4aHE8ZpDovTi+tPgT8cQwxjlFrj2a6+8wdElx5x/nFXlFDyJ2QZbZU3JErdjn03UEfIzDmex77vyqIgCUHwJu4Yh7MvA7bGyvb172ygkI6c61OIxKt0O2wTdMmM1anso0m41Udgla3UUO51qYN/Ren62NlXS6lyG1c6SrAlkAbjYp8VBCpsbehOYyUbvNjPABY8pJkYHxYWFVfPeFnLz6GpnEND0kaKFS9ZDSa4G8u9YePU04nDrxfhHLWeLPJR3Ztyw2W2WbRa9Vj+yrsk5U29WOH4+tfS/FtQvw+tv+Hy0FxChpmF9GWOtEhPdXDXe5TytJE5XXCKus2QEZntt6n3XuolA+KWX1xwDed+qrChP2tFQx++xll33l9Phr2i8+gOQ0Dbei4W+afAc8l0yTEBfrf5T33rM+hNZZrKGEuk6erwGJ/vd0NCEzCF3pcYHKvE6TW2d/cdIdpgXfQ/XulYidkpH0gumimeNhOah3LIJnhXn4oDw0nD2qTParNyw7U6oFfCs9YCLOlmCNde97wUQl5+4b3e54Vo6dgKTcdLynfX3UlwFE191T7Wn+0PmUsNG4G3tQVN3cx8cUz1EJbZHVbnxROsRH1DBYadZgDqFTnqgh0Y/ZeDpbXl18h58IHbcxZPo1uqBxg6MkcvBJnr4F2hbzL+ZpaLk6y8Emw8b6AVymJi9TZHPxCchf5w6lB/6F0776PtkMF79XY+wFKxJa6/0WDbpuitaTvEGhFabIr+KV/dFqfAm3TASsc5Z5cMpZESoJKXrG4KBFysY2LoFNRf9IA1ZL0AxckfbJPVXqKqy6NSS0Ik7+mu6pTZGkrTPiez+Bzmkw9zOvhVdGTnlqVJd7KOP8/TUSRin1dAXG20HWFnEWEUlPDXBH81lsbMukx9IYNgGdVwYguyrznvURORk5XE5yCzx34fWC/sUn2DNq5S5W6Wd7Q3F6jkcSpZy/LVVM5dlxYus8L6JTmfJFc6ZmifP+u4fCeoSlS37oIGDekKikXWClLwR3WmTZ887uYQANbMpEtKgVb1xpXhok2IOMHHM7uvspprIt9Ckr7fNrHp0LbvcN1lZWtHCTrTcheqjLz8Wp3fP4V66CbWfbinu/RF8fVReGbTDjAcFwszPR13s6Oa0TZGPgHQc2jxPzjhBP7jqOLYo27lJn8wZr+1p7YvCk5FYLZ2J0EME2d6JpfUU5QbAAnkZ+nwWU3Rq/6Tp0grz8PygT2vstihf6ebB10SAMI6MtL2QDybvrFEv+UslZyXoVaUM5CzpVXhYcbVDMIss5bstidGU2n6JpNloIwqOf1J3gYGALtwZmsE3EDp9MaBFb1fIl+TyBjrVTQRPsB2ImEoxyFS8xihk5QKfAK12d58e1/A/4a6jywO/gDq92RAszdVMWRKrlFy+22W99SekGptYJxmvXGOePj5GCM9R1/0njcoHgTUWKIxEKBi5jCHw6aPdGw+XVIGjx/mpE4LB/wBXyjAEG999irktddiThOz8yyjEQDdmUcg9IbEyupy38OR6ePrEQpITm+gr5S3B4Q3c7J3xG5itYaSJsQADpGb4nIG9Q9rOzq2Z8PRHgWEFa3ilpO99zTgIfDSqe7Ot8GqqO8y/t8PdEjxLzxgauS4rYG/AsipZIzkbu1//qCofS1d8k7nF0bOUgFzE281qwWlQ4cYiAqo1+dL0fW0N5oZ8yPKrVYx09zlEO4ECUcIxSoDT6z5peaGhZ5OLWBAASTfn7XDxR5XtOLaOsVo3dDLXsaB1NExz2TIRbZqPIVYZUpCsEhl4R+Bg2Q6/F7fvHwVNEDgHNT3xU1L/sGvbOJNtiGpO9scUZrTC1ABA+yTdRdgWf0gd4EFnRBsnYGu6hKxSwqtuVUzDjBviITEZb9D8riatf8MhVhvXkcQwpqEYuy8r+pYBLMTCYUMVjzYFrIA6INPcEptUiueTVaUIalOTzmpsiLSFbpm8A4C5GIlte5mLaMJ0kgbJhbtRQA2CgY64gbDtwCs7ThAqfWOAAPQxgCTd8Z6EXuCXPno8eV68n1LAaQn5yYouywNA3chBsK71TuHMFBJ3d3gcaGyxo8aw303BThtGr/3InW3jN180yItF+5T17zKUKuxt0ZMjkmqSW9MfthfvoYrVBG0JuaoC1KZLKsO2YYDZ3SGjo9I4bVxilAnoAId3Obw74QAUzbecYJuTOtJ3R0v3TkdHeGLJHSoNszOgV9Lx6tuMDkqBDvDmImSH36YFHbhcszDsf/86T+anzQ+yXwmZfpQfp9KXYZbpYEGDaF+pT12QiQMfKmv8J2D/KkvzmVHIT8T0bqfceS7BlDxdC/NlHlbQZsf6Ah/YdW+EJApSYIvUnElCqDwLu1pFjtLdeOI6a5BgrD54BBNi+cYgu+WUMTNUcmuBW2Mfuc8ZkwbMJV0rijTBpDg8gSuaTw6WRDDLrsjhAdx5i3EXpfQ05Ak5mH+4GFEJHQnL4yZc2vqQU9+zSNr/4epKOT4eojwHryIt4znr0nmBu4XBqgaDHh9HwSuKVuABf0mmA/Lon2V3wnMxzJXs8YNuDEDQ4+ZVltQWgmlCI7ypY0ihTAkdtR9E6TWH0f49fZ0pdI2N4S8IqJLfew2/GHXBCVmJygIRYE9TegAfHMxslhWNs2k43I9/tVGkwISv6YNshGr0zGkfEXa2SBo9tHi7Y21jMrAOknFtcDjF1DXSwuN2Fdni6kjYYOoz+toBXIvhBV10kwt0AWtLGl66k1ITyjxLkmjZVjqOZuuCuo/2EirvLtRbiqR5bA5fWDEXCSEMUedVEduHG1LnXQhNkuebslj5k9UeqMm6WD64tPz2WKuEphhB7F2EOH+wtCy+Boq21uTs3nTAlH4RLGsfk4nrGsKEJHUYHS6As5MW0WF0yIgVYFmFToJPi65GIeuexlcgIG1bgvwDNtQdSf0TfX8mJXT+WL8J/jtxw86OW1NadTTPZTUCRcnpQG2OY9HbIMjrSXOBWSFHrFkRweNDitVE5gMEZX0zMY3a1jb2SHyfrMu2zixod5CANDNdSc9SRKSQkekPsmg1NK16/Ix8agprpD4rcSyAFzKswH/hqcR6hKsCoW6RVDYISEvzpYZLgd3Ccd7ATW5OBeYKMqHa9seFsUWg4i66tqi3IPhvSWsTMuOo/CjQhomTwtArMwQNZY5N/wMc25mQVxooGRuu+JleRjottcowoG1aroJ3Y91YaH6FoJoAXkryiNUrpNqAgT48OVcaiTd2qjQTvgEArpAba926El8d48/kCwkAyV8Xl4gsRENi51sOouE9jLZXaHHHf9XkJHsWIzVn+VPUQLgAh93B//2O3jUWOBlqR1J8vRIEYsS6byA4S10lZWmOc2x3AM1lQL++cmJA7kaM5NqhsIK4+Ut81Iyd0CkadWvnAFHQtbcPjPn7SUfNPSpLQTgD8S4qENTWGAoLLXwWGztbu7H4TWduvlhyBk/SwPMheUivUyELc5I4XIkIpejQ/lqnsou49Ueehk+Nc6xv9JtDQ4Ogw09nkjnNKELcnaN8wH0zOqLpAUq/PTfgudMbwH4ZEeFjpafpy4o/w4ZGjiZP/AXZeoeW1XfDuStNYv6ev5v74LSrMJafRIhCpIDhhe2nBUHw01qFHpb2XLETFHYiN23hlhmr8Us9ImT8xPN9GQSWSgbkKimfQPQgYpNSW70CNlitFOGfbdft92L2ZccFPtg6mdYYch0p2KEcFAb/8XPi11Q2ty+IHJQ7SkHaEYexji0LkwQr4ZVmPuzOnPsCYhrur4n/RXFJcquozexzxjBWj27pEt4QF5PQVS8aLR2ury8VA0MSRujw30KdrfYmZtjCglrbK0nIHKAvXPN7+mR8w1niJa6OHKAJQbnRVqoqasiWTI7E8NhsHzDWaidJfhUCjrWZKDADgyVBbWoDsYyYRthESq7fEvH5EMePpiHrFv4nx5shVamqRzlfr9LpLbRYmHzMhbMoeZtSWr7gyN0uhYsdTuvT2StsWhkKnSks0kpbdZs+jnpQ2FlMK2dYcdZ5V+b0Hm++2nhm0kp/qZr0ruAOhAfu992qrm+kQiS4LnwwUpcI4l9+9d9cbwYO86s4kuT+2no6OGUjT4MVi+KFbf/FeIRc/E4VVeuCjwGIc4TSMFB3GUWQK2r9dDuVedr/VyUpfCdTCflVyTaVcjYy9g+C2s1vxNVd+V1jinJ1ChpRvv00Qur5AgVVun0BlU74uUhVN+fBfENmaVjY2/0O7/3mVubqASb/8TeMjQhIppaD1WvwYCehz/GJUaEA0rU9tMTj3WUd369RxqHQPvdZfu1yZj+mq35OXQiFk6TGZlvPEAR8yQ/54c9DEBE6A28i1ML0VnR66tnxaZGOQ9NKSHBuNmvZETScFZPFn5hz85T5BcBdDtv1laCtc6FUfs0A9QmVgJoOkyoabHXJ5zUtDwEsQRkJl466qTPMVBUaNrnyWM6FqkmeKbZaZnTXkhe0mMfMnMT1Oqd6oFYxTZlr8NpHp5VYVOia0gVruvnYLSjEEa29iRkUJa4jjd6HlOA7j4Ou3iudWiTZKxiZ2R8rl6mrkZWa8nyO8Q/83hTcbG7qmFEtmmST6v3bKK+WEVnpsAt9dNxoyLCq4QDXblWFvhf4RnmWqcRBVkBgmOsXfv/7B9vOlaIx7SVaiQFXMGm4ILY7TM7O8Gu/IaBGUWAfk9qRHAN6HhnZibXaHV+HR0p9pqrqeQznfItcVgxO0hWpHL+BellhUf0h3pJRqVQmq0PoB98X5v3FEuKq+55LMZagcNv0ItDbbyudZPE9VuAymSQlk7SWWxZWgPmAq4XIVpr5nqtvvSQGdsC98toB84yfnWLai8iZ++WiJEt2RNntfK42iksjc1VW85bMMtqQ4xSKCnoy8NFZUGrHFVTTGOQSRm6iIby65UZF2Eh8mWP/Ub9pWk1mgnlZj7v58rS8rh6hXnW+q0l3XMdIORrm7lMRkBxXt3PuGoVFjnF3VIdkVN+Al1zEwX6XsjKCpBwkzYW0pTw2565lEzkEg/DTk1X95xlkHY7ZyXZ7wy86+rzQj7oF21QlZAn1u7p5TbyXDbQYNicOK3dpf6h1pdIMBrxwzGyuJyuQQuJE9ZzRBZHMFp5J7y+IO9Xy+gURhuP5iDHWsM2dk0CS6ehdgWT6+qypxiUC4AzD+PvbnyQnhv+vinh/alKIQQSfefDjzNVcvTupPR5djLucz987Uwe+ldR/fcq3Gy4M3Sj2fuut/CtwsGkt4mh8hlP1hDAIj3XUEyFOygHJv++eerfwIab+xisD8N1LTLPueWdjpYSjLtpyppFoXhdDKWdyNsDe6zHiYu4u8T+0UrkJviL4TMaDBgASER+C2Xhg4JX2BHqT7tKhMaQFeXAgX39FHNzi9UqWoJITWgmLik5wtxsEbguu5HrAIOfvvutSGLFuO7wod9n+x1qIPPbrFNeF5Q8eoSGh1FbYLsWTsnfHaiU+BdSY8eIbkkWGdD2b7ryK/zk1CASI4e9axoyLS3tVXfMVZdk4aqxh+DbEFSVEIWahLfj8UgdnK2v4IuyFMoRi7/Sh4biCYeM6hyUoQZrvTywehyqO120qbfnhf5uyk2DT/nov4qD+ib2aHJHWAU7WbTVw9kjX985qvdvu0v+v1hew1t+jRXCXBt6sHpaB+7F3HQIrC3ygr5EJAHlp0QJXdoaUjfI70MGD7+Ex51RdeyXCkzbIeIjSDulGgPckHCgI36RXK/I9A0oduvh0aX9DjqAfPj+m/RoVlT272a2hYTlbCbcgwHkoYHQ7GuIV00TKDVQbhCJxcbAryz9SIn8Pek6/yFfnr3xuCAXmt+fKoCE99ZmlcdK0ASXEfINVBOlfsEK8Nw+fO6Ke9hDKBlWID5Fm44JbB/zMtOPaIzZyaCxSQkLMFyfcR0EmQvlBWhJlAAUE36cjMDCmjqMygAQ6lrpw2amX5tHqVPeqk03TcOY4li2rNodI8vnNmg+Yqb4IiCz/BidKEBxRhZfC80UtMVgY9OWubTLAJ9lwICLw1Vhe+LkeGla7UFF3nvKSPOA6LV9bL7nn95YUo48m8leOHU29GznTD6qlOerBIk4LUnPwmF0cALLY4M53Sg21EFLFBEMsxwDuV8dSDXwqwnBGWeAGvdnq+ivaj7dBl/s9q9+H5BmaC9blY6kql3GZMMKjE5ynrqC6bhVAdtBjGc0D6/5Xe/kVGEbX1tUrwfMKNvyNx+6szY779PDuQrE7A9AmXwlxOdwvISBNTFHKVZgZSIueUgEUMyg8LNMmAhajLhYlr1/amoRRwoov6ZZ/72hb3C39BxurKivGnYGKajthyucuLMDVliBaVm1BI0SlD6Lq5ctsQKfuZ22TrirnWYYxEZ+3y8Vpr1WQ/7KXTDZ6y7DRy6iMMoo2VYi9QUwZjmvcOT6QD7Qfzvvpm3p4/0qGCldNz2ZLtqamXdV95X4nLmdxCDtkTi4MYnvo5S6aRb89R0RrGa2MsgC+Juj9HesFJmLXr1OCaTdKshT3fxnogIKESxt9GGobPwzWdD+7rkWg21e29yHa3dYDYaLXUgupT7Xqh6wNNs0rQjpAsjzef0kI/njEQvq1jnWFTyDQ/oiogiNu4QLjA5oEZDFU1k+dgTpFfKKjN4WG8xDSg5sfFZQ/lmJiKcYBMc6oiBxuLa+rHaq6DPWlwSj5O9p+4IqVMiu3OfFQmyQbOklM154WhgQ4X2D12esre4cSoZg7bg8A6lNLHV3WqecKMfo0/KbPV88x1HzIVbp/2hUQCuEVhA830SmYorwhIRnMN3bgrGiUlCza+r5xac/KE8ErFO1aDr++8s9qBvRBjOWWz0L/js+80GeYkjM+Guc8XUJUgMH0217FaatBTrQDnwFxz3NlvnHi1ljMZHMGYjBkv0JorO8yGnDJtiaPDSogtTQrGc1P/97+Hp7lMPl1IxwQxQwko3aY+LkwAmmOn+zegjkPw0atR/XlVuCWmtNBXdh9mNKr0iwZI07e3p7Uw+5NpY/6uuUBJlXoWR8t9SK35q8QTj6iQqNdIw3lY7cR3gJmn6aCY4WkJ6GqwAOVrVnDN4sxfBh2Qnpsz434Gk4qI7dqR6WN7a1TvzSexNbx2RwLKKCoZ897QTJK+Sf9oFLxEa7s4g/5djQHrglJzUUsOt7pYPWXs5HwxNnP8qUziN4M1uBx4VqAqflbwqMMdTmqthN7WEzedffkgCbZzce8GF7jaHzcesch6k2mGzZ2k7OSM4eioUxrRlawYghDkHP9VykDN/uyrPpW1qtB9dk5yP6wddnVSfa45G2K99GInXL3Nrqwb/gz3tDb2payf6E5dGHyHr5ekjlGURZDXCzYrgz/HBEODgXCpFaVFXGOiK4TLXe4BRna5eJWAvDwCY6UIcnWqRsz4jcabJHhY2ilmkh4rOaNUsd24zZgrcBaDozU2lqgbbCHBZZb8Q7684lShEqNiwB4ZkOQ5c0py1cqcxvsKEMW0mSWEZrMl0maa1tm/ZL/PYsb+AAy3D2NLS1jSF3TszW1xNgprkS0f0FjiwmREyrkHbAkxYDfGR+aFTouJLQu/HfAfqNFd4PGo3Ga1/UwbUFXzmOrH/bmYc6liepEnSuYpbN/eZ/AznvQA4rMJOAoNJ+9sz0/A27sOyMm0aUGRr/ywCMlJJHu9rauayiVWa4ej8fULhJEZcEAvWpceumoxjAeZCe2ZZRxCwvxFokEpmNXOuUFQIx06SoQFZzFKHMcuxY3mAfRGWhEgL/vO2qXXcKY8LLYiIRQjL3azlxR0/hwCetOPH5QWGrP6cb7L6bexxOZsc1QS5rCA3iIkVV7BNQ85Csdqr73vR0j9bcAW/vM8aSnAtd9zt/DwBrTvZpAbisE8QwBQPWU8KlpKzwfdeYQGZZgDC/0X16vzkg7BLKs6jopzjsAxQGFU3UAxY1Bavzzh0+c8xa0C8gdFJTsdc2qqKu0IXqVvMV4oB2vfcxo+3MFerD6C9P1zZeH/8866phl3BimuUaFy1g0ax22l6O9zdJgy73/glhNHfLVIbnzjc2IB2Vu3SCCJm0RlQnVBGr/o4D+09dFBugItTLhGVmUxgztjZ+j+X3zGErJxIizxni/w1m33haf4USlcX6Z8GnehEzJrVfWsPH9vedep0PizUQ5kPpfEDSOEbPLPDhbNRKZqH3i53XQVqxdAWpv7kukT3zLF3XgGpkDq5BiyHz4acAM+n3tUbGk3b7stWKPFBJfpmlSoUYr20m5G/gMgDzfLz9m7nIKGXcEmnVs4+FGbwiwtraD/fedXT7Tt4iKaKTNgd9xG0E8/N2TRCPnUEva5VpnNLmhWQ985STE0j1Dj+P9bh65QbpzMqz2WlNI2I8Rq1HIOzzz7B/l8w8CGRmohLQDOlFlb0ubZP5h/WMO4soIhqV3tKShiFffOCLPA5wTbW1pK53h3Epr/MPJpmEhn1BbMoJJspD5Z8YrU7R1y9pmq1x/wodgBwa18l7v+4SGTvu6WDfwxC9MTWoP5j7ec/rSwRuDmKyWmj1JZtbf68gTeComMhB3fuDwCqpjlgCwP9qOdUAlY6Anky2vDrPJOtecZs4rlNI4o0xG9SQJ/egiQ30iU/XEf6hWlEymQ0kfg9ZZuAuT2qcL1DWapNMFGpo1Qu3Dt0V3WvuulYZuzC9MC09tLSs+4qBJXcxyiAWXn0+yxMy95/7pQZ1ycaNUWd4295NLfg/9zv15SKIGPm3EIVQNEO/azfVINFT6xmVaH0e6sdaIrAdPr7Zm1wKj+UE3NKQInmUz7MaCGYqWemYONe9UCaOpXqcTDBrDpgL5IH0DuLfmQptizXxQoCUFOER2hQM3+q2nGhD5JkyvYR/c7eS2dOi2t0McnE1PWT4zyXDQObUcUTb4W9xIT7sSs/TUCvWwlygskbd3Ckrm1whc/3kuebBHwrMAGOAv4tOvzCLMp964ikfRIjGtzoyH3xjL7ZRXLiIQEU2oJOE4HxTmPEbn/Smgd4lZE6nu+Y3sT9cdEP0ArqT7U+q9BIgpO+gvY4IMqgZKmR8JgxN/YurqHxyXQ45SoMAU81hmNv3RZJ/gSvt6yJaIy+xavS3WMaDzQsYyhVL1YSZM2YHDuzSbmoZrFxuORAqiJGgoFt6e2xm6jytRSvwOwLENwWqeKF9yGoH+H3Tmco7YjtzfNA4mm2K0snNfavwZ6Ag1v8xWMemDFsTdguSOLeRBtpnh8R/N6H4QYkrfqt+GG2y4PhjDevCk8x5S0VnjqjCYQ/3x01ZVoECFH9TelX9FCyomtKmm6Io7JXFpXIOIedGk8F1uDl4ImJdXkM4S+lcOQ6f2ZtyPnaqAd/J1tPsXZzNGR2IWl7FPrrOzmRJB2X5KHS091sYTP8wrVOCYL8osZJ1A3BAWoto/jea6TsET6uas5vuD3+7YyOXUcniceOxhjRnIgSIAUivhCGidGP4pO/azvJX5FhY6Zqb3fKtf4ROiLg4ttO1+xoqK0OLHk62Lu5OtpStaE9sk3k/4N2+exGJEqkRjdXU32r0LfDOwGMO/DJOrYsONFsVTYYAgo8MwFGEpjmCy+/88SwsTuQiXwaRlQftJPu2eWi5wjv/xWVOLag9kkgob84zKdYqJwLO7vkL7s0iw4XDn8iQUypW9KXpkJQ/5HrtKofvG23Bh+J/ZZTA+/KvG6yZTo02FthED09bryRT4haoPwyKmllPEHUs0AA5gTkmgW6M2rzPeVOezSGXYCH3Vt0ptDV96S74GJBlZquhOBjE6/x0zCRjF1vHBGxHCTM9pPVzL56ubJT26IZMsv2oLyHxjyvCR1V9R+9dugKYGeaLJgzps+Kv4jKb2mdVvw4yJqLgpYPtAjEhXMxksm4WEOdBOVec3A5TPnlCoKic/3x2we0jAy08yyhURzEvC4yi3vu0+S02fFHvaHfm3BbvLdzBJyHN7BKflPT4RnunydFeBNLwzv6SJ3pcdvN6i9saeUxxW7hM6Eo2aA5glR7XVmqweMdKgrgnDhFEml+XZ9oOufRilVUS4p/1EyilkDyS8yL/HudPitBROBkh76AITYGF3P3tA6Po9SL5UCil/ao0V22QX0cQOfCba4HExa8qYR1rl63NnihjGRewnXsr+TK0yKJBYml8pFYL7JXo/bvlZnnXyMJTrgfIdR3CenidEfi1cz6QA9wZvdglgX3w3We+UY/MOkJ8wTbHm6S7xWBdp07JXDU0AuoTwgwR/pVRVTUFhwmH9IUAKScj9aLvgp8D5nTpf5HgIKwpyOveBRFNZ3GuYh6VryleJgpTtlgjRAPZlHJ6d8J403lhSBayxXZEB+V3Jbv2ZbSlsfj5FJoBuYMPDfKcRVMvAFkHOTXlobec0ZkUzgxtGxFqBzlWtDXXQtC2UzVqunfYAzqJRvULvQYIZHABSoEJT69B0P04/08rFsJhKfMjBj7AxBiprPspljn/C72+bIqtY0wjgNx4UZaDyHAYNb+F+Gl1zHmYBg9khp/md/HVSAV00sI7/3rFSzHa2v7Rv1e+9qxR/AiZ3J5+hlQnShwpqWLxvK465wN49i7PgT52KErXQxlHirsOCrtJcNxesYqYA0xJEXAxZK/aoUEPoOmw6byDsMRObCRUrJ9IaKqHeEHvt03UfnZD50cnRyn+r+NfMNyGdy0ZM87eYXAUIe92bh7gqUK4LFNdX23C39ZtA6KhIIXYmYPC5NfLbTDHCaHIEmasMNhVBOGXMWAOupyGaToZC39dmibLSiw5ZVA3T39Rkwh8ZCVO2BwEuyWI0an/RoKF0ic5IiS5TOiFAQbmmAng44BiMmniXG4cSt1Nb1qZhjrDVX3PZY7ibBD90cTwoR3OMPXs0q3i8GlZG15QABC6xSYyhuHUgEbSEZsWMU2LyFVx7v+tl1CQsSQgAoTcaOfboIHrJwTJyv4Elnt0bf0G3gugpY2D9wrd1dUwtL6hmDHVu2FDUsHGhkmCEy8ej3OfczwdZ9AZLvXAMrMq4aL1pFvPYFo+C75idBl4CN9WWvRzU6V+H6gzU7Q4NRDNbplINnjNZETG2TkEEh6xI0myvx1A/TeXCYTDSFmaahDNGSe9me4L2No+Y22CWjXkWpdtqltrQcJDPK1rMP840Q22O4FCb0aS7Dnv+hrtiARitLZ6cCRO+xVnMRPgMHQSvoNo5xT9e9kG48MiGMnIGuJOlaGrkXLh8/K5HpKtvTYBZQyXfD8dArbDQm6ET8Iz0+X49SfLvU1QZnEJnrG7bbfn54S0W74uzfLFojPLGPdtjJWcEDUBnkTQrcjB9k/U4WFk7QRYmk06v50ac0S9A4CEc8pQdgqJTctgvmhBtXLQecmlyvvM7ckGiNvnXf6FGp1suZ/+S5Fxenoc9nYuqNAGs+fWJ+KNZ6JtP29SKojgjBa4UX+nRvs/C5cNM8SLLmdEG9R6vnHS6trJjFQsAli8IghO7ufPlOOOaX5hJVp58Vvhz1WpCOitN0bFnHXtAbLJEQdZvV5xHlbib6QHLZ7PPgJXp6fOamYydHnNaFACXcGBLAaRNs0raByN+wBwS7DX5cHCSPAhD8i04zAF1A8FnN3jYhzCmDX3YNrhkQmWVkpE1Y6VxLoGI1AGJnhg+22p0T4LTjqtIgO2Jq18DrVMg2Xhww4mQY0HkMQJmC+3R2Bp18rFXfWWE+nqe7dgILDiH5XKasfX/xYbe+41R6OGd5j9F03YWuKs0drUY9oCyQ0SljVgCxqhnoxWadBdOvlI3ekFDPrIYP9VK2/APZeJMcDINK391EllgTlQij6t8IE+KeYFumgXXBWZU/oPk0AJf/oP+eNOvIy8ni3oUe5a3XtU+ZPiyA/xbTWvgj1AxHPGaLR+l5zKvLYRENtMj3SPLnnkEvc3xC32t9V13x2s8zKH7rhBE4YnaT0XYTccUdCYwmkC03jo2hWBGgvXOOfWaUe92osJo5Tb6bFOHbJJoEAZgj5vtLAy2+P2N71esRDQLV5eFpPB+s3yvrohcDzOj+jPoGzhzWnKtRc4TuS9G7yuS2hxU1OFMvc7xm7egJpCCwLLwHePSptBBxyF6uQR8Z+BBZjwr5f2cRXFgH+qnLdCEZtsMvxNgPlHMNrIs3rjj5TEfLQVAgWS1xzo9o2tvaskac9Pji8JZKEWDNYhB82o+JfwT3Poz+wZfpgxp+DeWLJVSvs58yMuRdW3KeqOVeTb4SPDkJ3rZuiNsPRrHJvhY1PgM8ispJd19yfMIMdYdO6fNFi2QoZyxc0+VCEkPeBAz4WKZop7vEBLocYNO+oeQnwy3PrjskE5YGenW3h9zex0KvrmlA1qcgpMbGqMJN17ssOz3352uHTRJP0Z9rTZt3cLsnBKxjXnz1iNQ9M6oLSrx8WxsDbsgLpMP8RknOza8i3n+rF+p1gkpi//YE94CJKcKmVtAfkqpDvKIXSM2zOagQjn0NsN9VYCQOLK8I7u3O8pcOyGEL0lRWhUPJv/ZL6RXHWpqvw/QOKZeKnwb3hAr2lO9OjfVZtKiaJeMeDY3NC9yAydAFBueVMoepUb7TWXCpyJVeAJOEKFG3SL7oIpslh3TEnC+cdXDw0b3UmjsHY4WFvHBmbK2l8kGCCac9uUOX7vErVjDuccwIyk++b9vo+jBptSPRAr8tXUL96oxhcDhJdAaviS8AEBFe5MO/SZBJ5KaSmjpmOPgyosuk+5BlZYerUq6fFIF2f35tdt8FI2cFlZttI/Ki+RyBPG1eb+sYrKy9lr72KKd2zzeRyZaWRvrslmvmcnbBra1Yv5qfx6KlXIyXt6XihfMW2RzSN1epN914CEyrKX41KsYdYAOW5wN+UgtF7H4/FF86aADol6/P+JjNqjb4F5TX95Q46xJFQJYQkL/MGypxhi7tWFmyELoPHbF3A6eYJlKU8i186XWNLXu35O54TsEsZ2y0qTOOFoWDs1cnBh4mFdP0CkCN/j9H2ypTmQ/imBIYv5x78BIN0g4IASBnvfiDzCIGrTXZzpntqfjx0UChx66IbphQ0L+MSFTp8/pjbNUDH3qI9FVBTpKb4XvMh43hn0KIQcbXGhaKjGIPF91/OsrTl36DSiGYaYKHUa5iVbGdI9dp11RUWpwGgif+tIYeOC4wEWec7D8asFuLxtf4kj8tghafbNZmdIJkEcb052ETfGLruU2Lhdu7k7r3qb6UzC/kydMc/X7DNVT4XURt3APHWtYmvsR1QoMO8OdH5SVkInmIOr6A+3AInedpySLqG07wdU5DLSDEIyvj98VS9BE1ac+/861it8iUAxZ2T+UL5O76GvOrzCPG0kdeBjBpZghnS92OadZcaqAbZ737qDfe5H9kNgoCSRgWzObQQMtOwNQ3zAl9WZIec3CFKDqyPTPlQz76H1rBt4d/tWnH/xjglGP8eveAWwox0jjZ5gHMhZNn9E9AkgTMVBEmQCJtNQphxd9q6TaTLjFJsToHe2Xhqg0tqdaUsaC40oCs15aiONlAna1fEi2JOC9Z6yQqDHW813pK1pEUxUtOFejKtAWgHvewQBvIfQf2yReQdtgLEjOonyZB+yzogfTtdaAY5nJ+ejWusjmVqHTl/ZKPPD8bnI8yIO7RK3F+MaVkkjVbdEyR2I+rhVwJ3QCZSxuUeo0yuriKu8KnumjAMtiiJM34TFv/zx/JeumDFxNWzu/mS0EdVLEApnjGPnoiuk+ma4sYHkTjYPh7m8zcWTtWSV+2wsFp5Ayrt0ZXw8o2TDOiyZklwbaU4oCnCjbEEhiQh+8qSRxtaczJCIbWNXmmbnwTk8WsFu/v4f5VJu1jsOgOzi7A9fEqlQTQGSPXWzEC6Fh8UQmxPmMcuaVsRSnMPvh4KaSJ89Bikmj6Tt0Vb7aJs/QdB9Hr5XjZBwZ+VxtrNn5Tr2M1bni0U7aYi0Dblxa8RZloJgmGH0tadc0AKMcpn4YGfA5aEp/3wbXcp6sL2Obyf5rwWtVgGQw1qswIYkTgsa2xolRKDh9cCYKSjwHgL7bFRTzHTt2H85t2nKi5FpdJ8DGNaRUhcmJmnFhDm77Npzxy6FlInKsDoQWoBwhDX7JY9H0KscGw6MbJnwrT+KbxKZe5oNggLI+u2OhvyfhWrjzsYzUqNKZi+h657A7kvUwCd7FnspM8Y8RskbV+sleOJCXV324OthGS9gTnG2C1D09DJe8qT0vA3u4tHAAHfUqyMp2akBPdehrxSb7T0xrm1CSSUkezT/DqqGBen93wCNZdva1HWfueiT5MfrYBrZU2FCn6q/NdERDvjOEIQaql+qPbNtVP0Zdjk2Qztpl+b0KdVPKrsqHh6mqe0zvZN50ePWc9+htvQ08sCWkCmT39R5lu8thbCyc7bCkGBZhK0mO7rw9EF/4dTvR8hzcH8NJ214SZqawu9R3iyqSwqJ08YQ63HS4F3Qzb6FxhT8zpQKe9+wsqI6rdFA+2iox6mzjUKcYRMRGfGo3Cne4Cax9Lw4gPq4zmHEdHa/LDdhZEQtSP19jqbRvyMoZJXR1aGa0muEwYVSE0L1yWsmpvD+To549IuKG23riuoV7SWQwjM+mp1Ylf1csY4FtycJcCd1UdH+OaZCcJVe87N2Y5JKbXWMBRrkF56fjfsB7Rjspa+YU9LB9tgA8xGK7Qru6O52FOs3ALp+tLzNDLlzVYu7cHI3FZYoWYpo/vcK6EQ5XwQrQ/cOBLvUmjeMutBJIbccy1ogURBZgl7gm1e1pCaXZIeZBeyH3bXS+xXRhQGHitWeipdNorIgPV4PwyhPXXyRkd6ojjL5SOcyGKGuF4XpBO3EnGRXTkjrWcPFdQTLzBEGPlWQHUhqpUiaoKvxfGi3kNCff7FU6zqhyMhxFNgTrHG5JcqY8rPlF6NONCPHvLsRRFgQlM+4Y2wpkQaW6Cz8DOFQltk64/9v+Q+eR5keoBNNVQ79j+Jd2zuR80fuTIg95hjLLFn26MnPsWDxFygQeCCa9DyueUh1GATPfVmViNt/AQDB0DKLNpWJQJqOi5wQlHWIM7/hvZnFVr++NQIRStmO43ts3QXvKnhPro1rDzOwI0vL2stvwEu+UWylYBMoBQv5HfSYbV/JuHYYUEAJ7hxj5cxp6XL8uB5WUlMPc1IeyHNHfc7nYv3/m7RAEoGV87OdUUccmkDNTU//2/YctRgOCYPTliyGXrU3EOgoC61cL7MlNi349eqeDODlFBM1jSO8FJcIXr4C8KLzk0dE1sHNdY54YDadWDhiAugon3m88HIYDbifghmf95/e4hH+UHvIoqzO/u1LrMzOfVbOyGRNnIFRlGILGzQu4H/Ci2S20wCgbHv/KJXs0vyHJ93rpZQx3pluTbQCnqwaBVov+/5YaKhcro7fktMOugzEHKdg6/CL9T0HQmw171bRgjch2zfsffBwFseqAJ7iAIOc6IAhITL5xV33QVmN2o4FqVKi5VUTlLP+rokY0TEYEcfkeAtOq0Q6IxVhC/kZkKVhhj01vG+96VmDt0nwkNOJP8Iq0p0n//lB+AtUw8vrLN0KsuMuVexxGk8zpOidIsT/ATtwHmwfzyhqGho+cfBGyxtxvF2RaDfewcbyP370trtcYr3Rehu/uIKmI543+lCfo1lpUU8/Xjt5kdgb05B/jnWoWSE+AkXmU/EzhYp7drIzx/eHs5dTpGYetmWLmo8MfRr7rvoWSKVzcOwAR4yQ+4Ul5q7Vq5OunsQOGbjBKzvIhO2tPpisHVUyuXfgNBkTKxJvF7tAPqe3Pwt3zqHfRIU8CyzYycJ1jzVatjtgXEKx4bUezUZTMkXPcUDmnWr2Mo+Nysj5a9qNy76YkhG0Jv7s8t6AZJvURnkzul5Kk+16sqa7i7nbdy4V6n5lAlKmig==" />
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
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="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" />
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
            <a class="trigger" href="https://www.linkedin.com/company/kbw-chambers" target="_blank"><i class="icon-linkedin2"></i></a>
            <a class="trigger show767" href="tel:+44(0)01132971200" target="_blank"><i class="fa fa-phone"></i></a>
            <a class="trigger show767" href="mailto:clerks@kbwchambers.com"><i class="fa fa-envelope"></i></a>
        </div>
        <ul class="menu-top">
            <li><a class="trigger" href="mailto:clerks@kbwchambers.com"><i class="fa fa-envelope mr-1"></i>&nbsp;clerks@kbwchambers.com</a></li>
            <li><a class="trigger callLink" href="tel:+441132971200"><span>tel:</span>&nbsp;0113 297 1200</a></li>
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
                                    <span id="ucHeader1_rptMenuTop2_spnArrow_0"><i class="fa fa-angle-right"></i></span>
                                </a>
                                <input type="hidden" name="ctl00$ucHeader1$rptMenuTop2$ctl00$hdnNavId" id="ucHeader1_rptMenuTop2_hdnNavId_0" value="1" />
                            </div>
                            <div id="ucHeader1_rptMenuTop2_divSubMenu_0" class="cbp-hrsub navSub" style="display: none;">
                                <ul id="ucHeader1_rptMenuTop2_dvSubMenu_0" class="list-none innerNavUl">

                                            <li id="ucHeader1_rptMenuTop2_rptSubMenu_0_liSuMenu_0">
                                                <a href="https://www.kbwchambers.com/about-us/introduction" id="ucHeader1_rptMenuTop2_rptSubMenu_0_lnkURL_0">
                                                    Introduction to KBW
                                                </a>
                                            </li>

                                            <li id="ucHeader1_rptMenuTop2_rptSubMenu_0_liSuMenu_1">
                                                <a href="https://www.kbwchambers.com/about-us/service-standards" id="ucHeader1_rptMenuTop2_rptSubMenu_0_lnkURL_1">
                                                    Service Standards
                                                </a>
                                            </li>

                                            <li id="ucHeader1_rptMenuTop2_rptSubMenu_0_liSuMenu_2">
                                                <a href="https://www.kbwchambers.com/about-us/price-transparency" id="ucHeader1_rptMenuTop2_rptSubMenu_0_lnkURL_2">
                                                    Price Transparency
                                                </a>
                                            </li>

                                            <li id="ucHeader1_rptMenuTop2_rptSubMenu_0_liSuMenu_3">
                                                <a href="https://www.kbwchambers.com/about-us/professional-governance" id="ucHeader1_rptMenuTop2_rptSubMenu_0_lnkURL_3">
                                                    Professional Governance
                                                </a>
                                            </li>

                                            <li id="ucHeader1_rptMenuTop2_rptSubMenu_0_liSuMenu_4">
                                                <a href="https://www.kbwchambers.com/about-us/complaints-procedure" id="ucHeader1_rptMenuTop2_rptSubMenu_0_lnkURL_4">
                                                    Complaints Procedure
                                                </a>
                                            </li>

                                            <li id="ucHeader1_rptMenuTop2_rptSubMenu_0_liSuMenu_5">
                                                <a href="https://www.kbwchambers.com/about-us/equality-and-diversity" id="ucHeader1_rptMenuTop2_rptSubMenu_0_lnkURL_5">
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
                                    <span id="ucHeader1_rptMenuTop2_spnArrow_1"><i class="fa fa-angle-right"></i></span>
                                </a>
                                <input type="hidden" name="ctl00$ucHeader1$rptMenuTop2$ctl01$hdnNavId" id="ucHeader1_rptMenuTop2_hdnNavId_1" value="55" />
                            </div>
                            <div id="ucHeader1_rptMenuTop2_divSubMenu_1" class="cbp-hrsub navSub" style="display: none;">
                                <ul id="ucHeader1_rptMenuTop2_dvSubMenu_1" class="list-none innerNavUl">

                                            <li id="ucHeader1_rptMenuTop2_rptSubMenu_1_liSuMenu_0">
                                                <a href="https://www.kbwchambers.com/practice-area/crime" id="ucHeader1_rptMenuTop2_rptSubMenu_1_lnkURL_0">
                                                    Crime
                                                </a>
                                            </li>

                                            <li id="ucHeader1_rptMenuTop2_rptSubMenu_1_liSuMenu_1">
                                                <a href="https://www.kbwchambers.com/practice-area/police" id="ucHeader1_rptMenuTop2_rptSubMenu_1_lnkURL_1">
                                                    Police
                                                </a>
                                            </li>

                                            <li id="ucHeader1_rptMenuTop2_rptSubMenu_1_liSuMenu_2">
                                                <a href="https://www.kbwchambers.com/practice-area/public-and-regulatory" id="ucHeader1_rptMenuTop2_rptSubMenu_1_lnkURL_2">
                                                    Public &amp; Regulatory
                                                </a>
                                            </li>

                                            <li id="ucHeader1_rptMenuTop2_rptSubMenu_1_liSuMenu_3">
                                                <a href="https://www.kbwchambers.com/practice-area/family" id="ucHeader1_rptMenuTop2_rptSubMenu_1_lnkURL_3">
                                                    Family
                                                </a>
                                            </li>

                                            <li id="ucHeader1_rptMenuTop2_rptSubMenu_1_liSuMenu_4">
                                                <a href="https://www.kbwchambers.com/practice-area/court-of-protection" id="ucHeader1_rptMenuTop2_rptSubMenu_1_lnkURL_4">
                                                    Court of Protection
                                                </a>
                                            </li>

                                            <li id="ucHeader1_rptMenuTop2_rptSubMenu_1_liSuMenu_5">
                                                <a href="https://www.kbwchambers.com/practice-area/business-and-property" id="ucHeader1_rptMenuTop2_rptSubMenu_1_lnkURL_5">
                                                    Business &amp; Property
                                                </a>
                                            </li>

                                            <li id="ucHeader1_rptMenuTop2_rptSubMenu_1_liSuMenu_6">
                                                <a href="https://www.kbwchambers.com/practice-area/clinical-negligence" id="ucHeader1_rptMenuTop2_rptSubMenu_1_lnkURL_6">
                                                    Clinical Negligence
                                                </a>
                                            </li>

                                            <li id="ucHeader1_rptMenuTop2_rptSubMenu_1_liSuMenu_7">
                                                <a href="https://www.kbwchambers.com/practice-area/employment-and-equality" id="ucHeader1_rptMenuTop2_rptSubMenu_1_lnkURL_7">
                                                    Employment &amp; Equality
                                                </a>
                                            </li>

                                            <li id="ucHeader1_rptMenuTop2_rptSubMenu_1_liSuMenu_8">
                                                <a href="https://www.kbwchambers.com/practice-area/personal-injury" id="ucHeader1_rptMenuTop2_rptSubMenu_1_lnkURL_8">
                                                    Personal Injury
                                                </a>
                                            </li>

                                            <li id="ucHeader1_rptMenuTop2_rptSubMenu_1_liSuMenu_9">
                                                <a href="https://www.kbwchambers.com/practice-area/sports-law" id="ucHeader1_rptMenuTop2_rptSubMenu_1_lnkURL_9">
                                                    Sports Law
                                                </a>
                                            </li>

                                </ul>
                            </div>
                        </li>

                        <li>
                            <div class="navClick">
                                <a href="https://www.kbwchambers.com/barristers" id="ucHeader1_rptMenuTop2_aNavLink_2" onclick="TrackAIGen(&#39;SideMenu&#39;, &#39;Click&#39;,&#39;Barristers&#39;);">
                                    Barristers

                                </a>
                                <input type="hidden" name="ctl00$ucHeader1$rptMenuTop2$ctl02$hdnNavId" id="ucHeader1_rptMenuTop2_hdnNavId_2" value="56" />
                            </div>
                            <div id="ucHeader1_rptMenuTop2_divSubMenu_2" class="cbp-hrsub" style="display: none;">
                                <ul id="ucHeader1_rptMenuTop2_dvSubMenu_2" class="list-none innerNavUl">

                                </ul>
                            </div>
                        </li>

                        <li>
                            <div class="navClick">
                                <a href="https://www.kbwchambers.com/clerks" id="ucHeader1_rptMenuTop2_aNavLink_3" onclick="TrackAIGen(&#39;SideMenu&#39;, &#39;Click&#39;,&#39;Clerks&#39;);">
                                    Clerks

                                </a>
                                <input type="hidden" name="ctl00$ucHeader1$rptMenuTop2$ctl03$hdnNavId" id="ucHeader1_rptMenuTop2_hdnNavId_3" value="57" />
                            </div>
                            <div id="ucHeader1_rptMenuTop2_divSubMenu_3" class="cbp-hrsub" style="display: none;">
                                <ul id="ucHeader1_rptMenuTop2_dvSubMenu_3" class="list-none innerNavUl">

                                </ul>
                            </div>
                        </li>

                        <li>
                            <div class="navClick">
                                <a href="https://www.kbwchambers.com/direct-access" id="ucHeader1_rptMenuTop2_aNavLink_4" onclick="TrackAIGen(&#39;SideMenu&#39;, &#39;Click&#39;,&#39;Direct Access&#39;);">
                                    Direct Access

                                </a>
                                <input type="hidden" name="ctl00$ucHeader1$rptMenuTop2$ctl04$hdnNavId" id="ucHeader1_rptMenuTop2_hdnNavId_4" value="107" />
                            </div>
                            <div id="ucHeader1_rptMenuTop2_divSubMenu_4" class="cbp-hrsub" style="display: none;">
                                <ul id="ucHeader1_rptMenuTop2_dvSubMenu_4" class="list-none innerNavUl">

                                </ul>
                            </div>
                        </li>

                        <li>
                            <div class="navClick">
                                <a href="https://www.kbwchambers.com/news" id="ucHeader1_rptMenuTop2_aNavLink_5" target="_self" onclick="TrackAIGen(&#39;SideMenu&#39;, &#39;Click&#39;,&#39;News&#39;);">
                                    News

                                </a>
                                <input type="hidden" name="ctl00$ucHeader1$rptMenuTop2$ctl05$hdnNavId" id="ucHeader1_rptMenuTop2_hdnNavId_5" value="7" />
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
                                    <span id="ucHeader1_rptMenuTop2_spnArrow_6"><i class="fa fa-angle-right"></i></span>
                                </a>
                                <input type="hidden" name="ctl00$ucHeader1$rptMenuTop2$ctl06$hdnNavId" id="ucHeader1_rptMenuTop2_hdnNavId_6" value="8" />
                            </div>
                            <div id="ucHeader1_rptMenuTop2_divSubMenu_6" class="cbp-hrsub navSub" style="display: none;">
                                <ul id="ucHeader1_rptMenuTop2_dvSubMenu_6" class="list-none innerNavUl">

                                            <li id="ucHeader1_rptMenuTop2_rptSubMenu_6_liSuMenu_0">
                                                <a href="https://www.kbwchambers.com/recruitment/tenancy" id="ucHeader1_rptMenuTop2_rptSubMenu_6_lnkURL_0">
                                                    Tenancy
                                                </a>
                                            </li>

                                            <li id="ucHeader1_rptMenuTop2_rptSubMenu_6_liSuMenu_1">
                                                <a href="https://www.kbwchambers.com/recruitment/probationary-tenancy-third-six-pupillage" id="ucHeader1_rptMenuTop2_rptSubMenu_6_lnkURL_1">
                                                    Probationary Tenancy / Third Six Pupillage
                                                </a>
                                            </li>

                                            <li id="ucHeader1_rptMenuTop2_rptSubMenu_6_liSuMenu_2">
                                                <a href="https://www.kbwchambers.com/recruitment/pupillage" id="ucHeader1_rptMenuTop2_rptSubMenu_6_lnkURL_2">
                                                    Pupillage
                                                </a>
                                            </li>

                                            <li id="ucHeader1_rptMenuTop2_rptSubMenu_6_liSuMenu_3">
                                                <a href="https://www.kbwchambers.com/recruitment/vacancies" id="ucHeader1_rptMenuTop2_rptSubMenu_6_lnkURL_3">
                                                    Vacancies
                                                </a>
                                            </li>

                                </ul>
                            </div>
                        </li>

                        <li>
                            <div class="navClick">
                                <a href="https://www.kbwchambers.com/contact-us" id="ucHeader1_rptMenuTop2_aNavLink_7" target="_self" onclick="TrackAIGen(&#39;SideMenu&#39;, &#39;Click&#39;,&#39;Contact us&#39;);">
                                    Contact us

                                </a>
                                <input type="hidden" name="ctl00$ucHeader1$rptMenuTop2$ctl07$hdnNavId" id="ucHeader1_rptMenuTop2_hdnNavId_7" value="9" />
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

    $(document).ready(function () {
        $(".navClick").on("click", function () {
            if ($(this).hasClass('open')) {
                $('.navClick').removeClass('open');
                $('.cbp-hrsub.navSub').slideUp();
            }
            else {
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

    $(document).ready(function () {
        $(".mobSearch").click(function () {
            $('.head-Search').addClass("shown");
        });
        $(".mobSearchCls").click(function () {
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




<section class="section--breadcrumbs">
    <script type="application/ld+json">
{
"@context": "http://schema.org/",
"@type": "BreadcrumbList",
"itemListElement": [
{
"@type": "ListItem",
"position": "1",
"name": "Home",
"item": "https://www.kbwchambers.com/"
},
{
"@type": "ListItem",
"position": "2",
"name": "introduction",
"item": "https://www.kbwchambers.com/about-us/introduction"
}
]
}
</script>

    <div class="container">
        <ul class="breadcrumbs">

                    <li class="">
                        <a href='https://www.kbwchambers.com/' title='Home'>Home</a>

                    </li>


            <li><a id="MainContent_ucBreadcrumb_lnkCurrPage" class="active" title="introduction">introduction</a></li>
        </ul>
    </div>
</section>


<!--Elements-->



<!--Forms-->

        <section class=' image-slider-block maxSize' ><div class='container-fluid'><div class='row grid_12'>

                <div class='col-12 '>
                <div id="MainContent_ucFormControls_rptRows_rptElements_0_pnlElement_0" class="e_imageslide">

                <div id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_0_dvImage_0" class="ucImageSlide" style="background-image:url(https://www.kbwchambers.com/assets/media/fullbanner_01_01_01.jpg); background-repeat: no-repeat; background-position:center; background-size:cover;">
    <div class="container">
        <div id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_0_ulStyle_0" class="row  cAlignLeft cAlignTop">
            <div id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_0_liStyle_0" class="col-6">
                <h2 id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_0_dvHeading_0" class="element-heading  ColorWH  "><h1 style='color: #fff'>Introduction to KBW</h1></h2>
                <div id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_0_dvDesc_0" class="element-description p  ColorWH  "><p>KBW is a multi-disciplinary set of Chambers with a long established reputation both on circuit and nationally. During 2014, we celebrated our 60 year anniversary.</p>
<p>Dedicated and professional, our barristers provide legal advice and advocacy at the highest level. Our commitment to client care means that barristers develop long-term relationships with those instructing them and have built a loyal client base.</p>
<p>Members have been involved in a number of high profile cases including terror offences Court of Appeal, Supreme Court and leading civil judgements. We pride ourselves on having members operating at the height of their specialist areas on both a national and international level.</p>
<p>Chambers is located in Leeds in the Round Foundry area; a distinctive cluster of newly refurbished listed buildings, our facilities operate in the same building where Matthew Murray built the world&rsquo;s first commercially successful steam engine. We now provide clients with modern, well equipped and highly accessible conferencing and lecture facilities.</p></div>

            </div>
        </div>
    </div>
</div>
<div id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_0_pnlControl_0">


	</div>

</div>
                </div>

        </div></div></section>

        <section class='' ><div class='container'><div class='row grid_4_4_4 align-items-center borderLayout'>

                <div class='col-4  cAlignMid  borderLayoutCol'>
                <div id="MainContent_ucFormControls_rptRows_rptElements_1_pnlElement_0" class="e_textwithbtn">

                <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_dvImgBlock_0" class="ucImage  cAlignLeft cAlignMid">

    <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_dvText_0" class="element-textblock">
        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_divTitle_0" class="element-textwrap">
            <h2 id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_dvHeading_0" class="element-heading">Our Barristers</h2>
        </div>
        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_dvDesc_0" class="element-description p">A breadth of specialist knowledge</div>
        <p id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_dvButton_0" class="dvButton mb-0" style="line-height: 1;">
            <a href="https://www.kbwchambers.com/barristers" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_btnPopUp_0" class="link arrowLink">View<svg><use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#right-long-arrow'></use></svg></a>
        </p>
    </div>


</div>


</div>
                </div>

                <div class='col-4  cAlignMid  borderLayoutCol'>
                <div id="MainContent_ucFormControls_rptRows_rptElements_1_pnlElement_1" class="e_textwithbtn">

                <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_1_dvImgBlock_1" class="ucImage  cAlignLeft cAlignMid">

    <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_1_dvText_1" class="element-textblock">
        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_1_divTitle_1" class="element-textwrap">
            <h2 id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_1_dvHeading_1" class="element-heading">Our Clerks</h2>
        </div>
        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_1_dvDesc_1" class="element-description p">Dedicated care and experience</div>
        <p id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_1_dvButton_1" class="dvButton mb-0" style="line-height: 1;">
            <a href="https://www.kbwchambers.com/clerks" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_1_btnPopUp_1" class="link arrowLink">View<svg><use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#right-long-arrow'></use></svg></a>
        </p>
    </div>


</div>


</div>
                </div>

                <div class='col-4  cAlignMid  borderLayoutCol'>
                <div id="MainContent_ucFormControls_rptRows_rptElements_1_pnlElement_2" class="e_textwithbtn">

                <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_2_dvImgBlock_2" class="ucImage  cAlignLeft cAlignMid">

    <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_2_dvText_2" class="element-textblock">
        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_2_divTitle_2" class="element-textwrap">
            <h2 id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_2_dvHeading_2" class="element-heading">Recruitment</h2>
        </div>
        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_2_dvDesc_2" class="element-description p">Modern chambers with a rich heritage</div>
        <p id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_2_dvButton_2" class="dvButton mb-0" style="line-height: 1;">
            <a href="https://www.kbwchambers.com/recruitment" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_2_btnPopUp_2" class="link arrowLink">View<svg><use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#right-long-arrow'></use></svg></a>
        </p>
    </div>


</div>


</div>
                </div>

        </div></div></section>

        <section class='' ><div class='container'><div class='row grid_12'>

                <div class='col-12 '>
                <div id="MainContent_ucFormControls_rptRows_rptElements_2_pnlElement_0" class="e_profileslider">

                <div id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_divProfileSlider_0" class="ucProfileSlider profileBlock">
    <h2><span id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_ltrTitle_0"></span></h2>
    <p id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_ltrSubTitle_0"></p>
    <div id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_dvCarousel_0" class="owl--carousel carousel" data-options="{&quot;autoHeight&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayHoverPause&quot;: true, &quot;smartSpeed&quot;: 400, &quot;margin&quot;: -1.5, &quot;responsive&quot;: {&quot;0&quot;: {&quot;items&quot;: 1}, &quot;550&quot;: {&quot;items&quot;: 2}, &quot;760&quot;: {&quot;items&quot;: 3}, &quot;1020&quot;: {&quot;items&quot;: 4}, &quot;1190&quot;: {&quot;items&quot;: 4}}}">

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/david-brooke-kc' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/davidbrookekc_07.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_0" class="image--responsive" alt="David Brooke KC" title="David Brooke KC" />
                            <div class="profile_name">
                                <h3>David Brooke KC</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;1990</span>
                            <a href='https://www.kbwchambers.com/barrister/david-brooke-kc' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/anthony-berry-kc' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/anthonyberrykc_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_1" class="image--responsive" alt="Anthony Berry KC" title="Anthony Berry KC" />
                            <div class="profile_name">
                                <h3>Anthony Berry KC</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;1985</span>
                            <a href='https://www.kbwchambers.com/barrister/anthony-berry-kc' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/nicholas-campbell-kc' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/nicholascampbellkc_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_2" class="image--responsive" alt="Nicholas Campbell KC" title="Nicholas Campbell KC" />
                            <div class="profile_name">
                                <h3>Nicholas Campbell KC</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;1978</span>
                            <a href='https://www.kbwchambers.com/barrister/nicholas-campbell-kc' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/adrian-waterman-kc' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/adrianwatermankc_02.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_3" class="image--responsive" alt="Adrian Waterman KC" title="Adrian Waterman KC" />
                            <div class="profile_name">
                                <h3>Adrian Waterman KC</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;1988</span>
                            <a href='https://www.kbwchambers.com/barrister/adrian-waterman-kc' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/gregory-jones-kc' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/gregoryjoneskc_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_4" class="image--responsive" alt="Gregory Jones KC" title="Gregory Jones KC" />
                            <div class="profile_name">
                                <h3>Gregory Jones KC</h3>
                                <span style='display:none;'>Business & Property</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;1991</span>
                            <a href='https://www.kbwchambers.com/barrister/gregory-jones-kc' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/peter-glenser-kc' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/peterglenserkc_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_5" class="image--responsive" alt="Peter Glenser KC" title="Peter Glenser KC" />
                            <div class="profile_name">
                                <h3>Peter Glenser KC</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;1993</span>
                            <a href='https://www.kbwchambers.com/barrister/peter-glenser-kc' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/nicholas-rhodes-kc' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/nicholasrhodeskc_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_6" class="image--responsive" alt="Nicholas Rhodes KC" title="Nicholas Rhodes KC" />
                            <div class="profile_name">
                                <h3>Nicholas Rhodes KC</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;1981</span>
                            <a href='https://www.kbwchambers.com/barrister/nicholas-rhodes-kc' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/june-venters-kc' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/juneventerskc_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_7" class="image--responsive" alt="June Venters KC" title="June Venters KC" />
                            <div class="profile_name">
                                <h3>June Venters KC</h3>
                                <span style='display:none;'>Family</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2006</span>
                            <a href='https://www.kbwchambers.com/barrister/june-venters-kc' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/dafydd-enoch-kc' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/dafyddenochkc_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_8" class="image--responsive" alt="Dafydd Enoch KC" title="Dafydd Enoch KC" />
                            <div class="profile_name">
                                <h3>Dafydd Enoch KC</h3>
                                <span style='display:none;'>0</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;1985</span>
                            <a href='https://www.kbwchambers.com/barrister/dafydd-enoch-kc' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/richard-honey-kc' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/roberthoneyqc_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_9" class="image--responsive" alt="Richard Honey KC" title="Richard Honey KC" />
                            <div class="profile_name">
                                <h3>Richard Honey KC</h3>
                                <span style='display:none;'>Business & Property</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2003</span>
                            <a href='https://www.kbwchambers.com/barrister/richard-honey-kc' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/simon-mallett' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/simonmallett_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_10" class="image--responsive" alt="Simon Mallett" title="Simon Mallett" />
                            <div class="profile_name">
                                <h3>Simon Mallett</h3>
                                <span style='display:none;'>Police</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;1986</span>
                            <a href='https://www.kbwchambers.com/barrister/simon-mallett' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/richard-barradell' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/richardbarradell_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_11" class="image--responsive" alt="Richard Barradell" title="Richard Barradell" />
                            <div class="profile_name">
                                <h3>Richard Barradell</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;1990</span>
                            <a href='https://www.kbwchambers.com/barrister/richard-barradell' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/shaun-dodds' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/shaundodds_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_12" class="image--responsive" alt="Shaun Dodds" title="Shaun Dodds" />
                            <div class="profile_name">
                                <h3>Shaun Dodds</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;1990</span>
                            <a href='https://www.kbwchambers.com/barrister/shaun-dodds' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/christine-a-egerton' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/christineaegerton_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_13" class="image--responsive" alt="Christine A Egerton" title="Christine A Egerton" />
                            <div class="profile_name">
                                <h3>Christine A Egerton</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;1992</span>
                            <a href='https://www.kbwchambers.com/barrister/christine-a-egerton' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/robert-toone' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/roberttoone_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_14" class="image--responsive" alt="Robert Toone" title="Robert Toone" />
                            <div class="profile_name">
                                <h3>Robert Toone</h3>
                                <span style='display:none;'>Business & Property</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;1993</span>
                            <a href='https://www.kbwchambers.com/barrister/robert-toone' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/amanda-denton' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/amandadenton_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_15" class="image--responsive" alt="Amanda Denton" title="Amanda Denton" />
                            <div class="profile_name">
                                <h3>Amanda Denton</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;1993</span>
                            <a href='https://www.kbwchambers.com/barrister/amanda-denton' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/paul-cleasby' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/paulcleasby_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_16" class="image--responsive" alt="Paul Cleasby" title="Paul Cleasby" />
                            <div class="profile_name">
                                <h3>Paul Cleasby</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;1994</span>
                            <a href='https://www.kbwchambers.com/barrister/paul-cleasby' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/rupert-doswell' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/rupertdoswell_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_17" class="image--responsive" alt="Rupert Doswell" title="Rupert Doswell" />
                            <div class="profile_name">
                                <h3>Rupert Doswell</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;1996</span>
                            <a href='https://www.kbwchambers.com/barrister/rupert-doswell' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/matthew-bean' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/matthewbean_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_18" class="image--responsive" alt="Matthew Bean" title="Matthew Bean" />
                            <div class="profile_name">
                                <h3>Matthew Bean</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;1997</span>
                            <a href='https://www.kbwchambers.com/barrister/matthew-bean' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/zaiban-alam' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/zaibanalam_01_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_19" class="image--responsive" alt="Zaiban Alam" title="Zaiban Alam" />
                            <div class="profile_name">
                                <h3>Zaiban Alam</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;1998</span>
                            <a href='https://www.kbwchambers.com/barrister/zaiban-alam' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/tony-dunne' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/tommydunne_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_20" class="image--responsive" alt="Tony Dunne" title="Tony Dunne" />
                            <div class="profile_name">
                                <h3>Tony Dunne</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;1999</span>
                            <a href='https://www.kbwchambers.com/barrister/tony-dunne' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/rebecca-stevens' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/rebeccastevens_02.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_21" class="image--responsive" alt="Rebecca Stevens" title="Rebecca Stevens" />
                            <div class="profile_name">
                                <h3>Rebecca Stevens</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;1999</span>
                            <a href='https://www.kbwchambers.com/barrister/rebecca-stevens' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/ian-mullarkey' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/ian-mullarkey_02.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_22" class="image--responsive" alt="Ian Mullarkey" title="Ian Mullarkey" />
                            <div class="profile_name">
                                <h3>Ian Mullarkey</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2003</span>
                            <a href='https://www.kbwchambers.com/barrister/ian-mullarkey' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/oliver-thorne' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/oliverthorne_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_23" class="image--responsive" alt="Oliver Thorne" title="Oliver Thorne" />
                            <div class="profile_name">
                                <h3>Oliver Thorne</h3>
                                <span style='display:none;'>Police</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2003</span>
                            <a href='https://www.kbwchambers.com/barrister/oliver-thorne' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/tamara-pawson' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/tamarapawson_02.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_24" class="image--responsive" alt="Tamara Pawson" title="Tamara Pawson" />
                            <div class="profile_name">
                                <h3>Tamara Pawson</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2003</span>
                            <a href='https://www.kbwchambers.com/barrister/tamara-pawson' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/katy-rafter' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/katyrafter_01_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_25" class="image--responsive" alt="Katy Rafter" title="Katy Rafter" />
                            <div class="profile_name">
                                <h3>Katy Rafter</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2005</span>
                            <a href='https://www.kbwchambers.com/barrister/katy-rafter' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/ed-moss' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/ed-moss_02.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_26" class="image--responsive" alt="Ed Moss" title="Ed Moss" />
                            <div class="profile_name">
                                <h3>Ed Moss</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2005</span>
                            <a href='https://www.kbwchambers.com/barrister/ed-moss' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/conor-quinn' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/conorquinn_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_27" class="image--responsive" alt="Conor Quinn" title="Conor Quinn" />
                            <div class="profile_name">
                                <h3>Conor Quinn</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2007</span>
                            <a href='https://www.kbwchambers.com/barrister/conor-quinn' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/olivia-checa-dover' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/oliviacheca-dover_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_28" class="image--responsive" alt="Olivia Checa-Dover" title="Olivia Checa-Dover" />
                            <div class="profile_name">
                                <h3>Olivia Checa-Dover</h3>
                                <span style='display:none;'>Police</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2007</span>
                            <a href='https://www.kbwchambers.com/barrister/olivia-checa-dover' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/deborah-smithies' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/deborah-smithies_03.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_29" class="image--responsive" alt="Deborah Smithies" title="Deborah Smithies" />
                            <div class="profile_name">
                                <h3>Deborah Smithies</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2008</span>
                            <a href='https://www.kbwchambers.com/barrister/deborah-smithies' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/manisha-marwaha' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/manishamarwaha_01_05.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_30" class="image--responsive" alt="Manisha Marwaha" title="Manisha Marwaha" />
                            <div class="profile_name">
                                <h3>Manisha Marwaha</h3>
                                <span style='display:none;'>Family</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2009</span>
                            <a href='https://www.kbwchambers.com/barrister/manisha-marwaha' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/joseph-wynn' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/josephwynn_01_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_31" class="image--responsive" alt="Joseph Wynn" title="Joseph Wynn" />
                            <div class="profile_name">
                                <h3>Joseph Wynn</h3>
                                <span style='display:none;'>Personal Injury</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2011</span>
                            <a href='https://www.kbwchambers.com/barrister/joseph-wynn' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/stephen-littlewood' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/stephenlittlewood_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_32" class="image--responsive" alt="Stephen Littlewood" title="Stephen Littlewood" />
                            <div class="profile_name">
                                <h3>Stephen Littlewood</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2013</span>
                            <a href='https://www.kbwchambers.com/barrister/stephen-littlewood' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/becky-jane' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/beckyjane_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_33" class="image--responsive" alt="Becky Jane" title="Becky Jane" />
                            <div class="profile_name">
                                <h3>Becky Jane</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2013</span>
                            <a href='https://www.kbwchambers.com/barrister/becky-jane' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/daniel-penman' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/daniel-penman_02.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_34" class="image--responsive" alt="Daniel Penman" title="Daniel Penman" />
                            <div class="profile_name">
                                <h3>Daniel Penman</h3>
                                <span style='display:none;'>Police</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2014</span>
                            <a href='https://www.kbwchambers.com/barrister/daniel-penman' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/stephen-welford' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/stephenwelford_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_35" class="image--responsive" alt="Stephen Welford" title="Stephen Welford" />
                            <div class="profile_name">
                                <h3>Stephen Welford</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2014</span>
                            <a href='https://www.kbwchambers.com/barrister/stephen-welford' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/adam-keenaghan' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/adamkeenaghan_02.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_36" class="image--responsive" alt="Adam Keenaghan" title="Adam Keenaghan" />
                            <div class="profile_name">
                                <h3>Adam Keenaghan</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2015</span>
                            <a href='https://www.kbwchambers.com/barrister/adam-keenaghan' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/david-hewitt' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/david-hewitt_03.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_37" class="image--responsive" alt="David Hewitt" title="David Hewitt" />
                            <div class="profile_name">
                                <h3>David Hewitt</h3>
                                <span style='display:none;'>Family</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2016</span>
                            <a href='https://www.kbwchambers.com/barrister/david-hewitt' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/edward-johnson' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/edward-johnson_02.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_38" class="image--responsive" alt="Edward Johnson" title="Edward Johnson" />
                            <div class="profile_name">
                                <h3>Edward Johnson</h3>
                                <span style='display:none;'>Family</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2016</span>
                            <a href='https://www.kbwchambers.com/barrister/edward-johnson' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/sarah-hopkinson' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/sarahhopkinson_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_39" class="image--responsive" alt="Sarah Hopkinson" title="Sarah Hopkinson" />
                            <div class="profile_name">
                                <h3>Sarah Hopkinson</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2016</span>
                            <a href='https://www.kbwchambers.com/barrister/sarah-hopkinson' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/susan-mckendry' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/susanmckendry_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_40" class="image--responsive" alt="Susan McKendry" title="Susan McKendry" />
                            <div class="profile_name">
                                <h3>Susan McKendry</h3>
                                <span style='display:none;'>Court of Protection</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2017</span>
                            <a href='https://www.kbwchambers.com/barrister/susan-mckendry' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/lorena-veale' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/lorenaveale_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_41" class="image--responsive" alt="Lorena Veale" title="Lorena Veale" />
                            <div class="profile_name">
                                <h3>Lorena Veale</h3>
                                <span style='display:none;'>Personal Injury</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2017</span>
                            <a href='https://www.kbwchambers.com/barrister/lorena-veale' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/andrew-pickin' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/andrew-pickin_03.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_42" class="image--responsive" alt="Andrew Pickin" title="Andrew Pickin" />
                            <div class="profile_name">
                                <h3>Andrew Pickin</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2017</span>
                            <a href='https://www.kbwchambers.com/barrister/andrew-pickin' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/samuel-ponniah' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/samponniah_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_43" class="image--responsive" alt="Samuel Ponniah" title="Samuel Ponniah" />
                            <div class="profile_name">
                                <h3>Samuel Ponniah</h3>
                                <span style='display:none;'>Family</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2018</span>
                            <a href='https://www.kbwchambers.com/barrister/samuel-ponniah' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/james-yearsley' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/james-yearsley_02.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_44" class="image--responsive" alt="James Yearsley" title="James Yearsley" />
                            <div class="profile_name">
                                <h3>James Yearsley</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2018</span>
                            <a href='https://www.kbwchambers.com/barrister/james-yearsley' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/jess-butterell' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/jessbutterell_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_45" class="image--responsive" alt="Jess Butterell" title="Jess Butterell" />
                            <div class="profile_name">
                                <h3>Jess Butterell</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2018</span>
                            <a href='https://www.kbwchambers.com/barrister/jess-butterell' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/damian-broadbent' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/damien-broadbent_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_46" class="image--responsive" alt="Damian Broadbent" title="Damian Broadbent" />
                            <div class="profile_name">
                                <h3>Damian Broadbent</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2019</span>
                            <a href='https://www.kbwchambers.com/barrister/damian-broadbent' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/jennifer-coldham' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/jennifercoldham_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_47" class="image--responsive" alt="Jennifer Coldham " title="Jennifer Coldham " />
                            <div class="profile_name">
                                <h3>Jennifer Coldham </h3>
                                <span style='display:none;'>Family</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2019</span>
                            <a href='https://www.kbwchambers.com/barrister/jennifer-coldham' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/sam-sharp' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/samsharp_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_48" class="image--responsive" alt="Sam Sharp" title="Sam Sharp" />
                            <div class="profile_name">
                                <h3>Sam Sharp</h3>
                                <span style='display:none;'>Police</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2019</span>
                            <a href='https://www.kbwchambers.com/barrister/sam-sharp' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/daniel-ingham' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/daniel-ingham_02.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_49" class="image--responsive" alt="Daniel Ingham" title="Daniel Ingham" />
                            <div class="profile_name">
                                <h3>Daniel Ingham</h3>
                                <span style='display:none;'>Crime</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2020</span>
                            <a href='https://www.kbwchambers.com/barrister/daniel-ingham' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/ben-sayers' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/bensayers_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_50" class="image--responsive" alt="Ben Sayers" title="Ben Sayers" />
                            <div class="profile_name">
                                <h3>Ben Sayers</h3>
                                <span style='display:block;'>Pupil</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2023</span>
                            <a href='https://www.kbwchambers.com/barrister/ben-sayers' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/louise-gillett' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/louisegillet_02.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_51" class="image--responsive" alt="Louise Gillett" title="Louise Gillett" />
                            <div class="profile_name">
                                <h3>Louise Gillett</h3>
                                <span style='display:block;'>Pupil</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2023</span>
                            <a href='https://www.kbwchambers.com/barrister/louise-gillett' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

                <div class="rptProfile">
                    <div class="element-thumb">
                        <a href='https://www.kbwchambers.com/barrister/mahdev-singh-sachdev' title='' class=" ">
                            <img src="https://www.kbwchambers.com/assets/media/mahdevsachdev_02.jpg" id="MainContent_ucFormControls_rptRows_rptElements_2_ctl00_0_rptProfile_0_ImgClerks_52" class="image--responsive" alt="Mahdev Singh Sachdev" title="Mahdev Singh Sachdev" />
                            <div class="profile_name">
                                <h3>Mahdev Singh Sachdev</h3>
                                <span style='display:block;'>Pupil</span>
                            </div>
                        </a>
                    </div>
                    <div class="element-textblock">
                        <p>
                            <span>Year of call:&nbsp;2023</span>
                            <a href='https://www.kbwchambers.com/barrister/mahdev-singh-sachdev' title='' class=" ">View Profile</a>
                        </p>
                        <p>
                            <span>Send an Email</span>
                            <a href="mailto:clerks@kbwchambers.com">
                                <svg>
                                    <use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg></a>
                        </p>
                    </div>
                </div>

    </div>
    <p class="swipeHand show555">Swipe to view all<svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#swipeHand"></use></svg></p>
</div>
<script type="text/javascript" src="https://www.kbwchambers.com/scripts/owl.carousel.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var carouselDefaultConfiguration = {
            dots: false,
            loop: false,
            nav: true,
            navText: ["<svg><use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-left-thin'></use></svg>", "<svg><use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#arrow-right-thin'></use></svg>"],
            lazyLoad: true,
            items: 1,
        };
        if ($('.ucProfileSlider .owl--carousel')) {
            $('.ucProfileSlider .owl--carousel').each(function () {
                if ($(this).attr('data-options') !== undefined) {
                    $(this).owlCarousel($.extend(carouselDefaultConfiguration, $(this).data('options')));
                } else {
                    $(this).owlCarousel(carouselDefaultConfiguration);
                }
            });
        }
    });


    //function fnInitCarousel()
    //{
    //    var owl = $('.owl--carousel');

    //    owl.owlCarousel();

    //}
</script>

</div>
                </div>

        </div></div></section>

        <section class='' ><div class='container'><div class='row grid_12'>

                <div class='col-12  '>
                <div id="MainContent_ucFormControls_rptRows_rptElements_3_pnlElement_0" class="e_texttype">

                <div id="MainContent_ucFormControls_rptRows_rptElements_3_ctl00_0_PText_0" class="ucText editorDiv"><div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<h3><strong>Our heritage</strong></h3>
</div>
</div></div>

</div>
                </div>

        </div></div></section>

        <section class='' ><div class='container'><div class='row grid_12'>

                <div class='col-12  '>
                <div id="MainContent_ucFormControls_rptRows_rptElements_4_pnlElement_0" class="e_texttype">

                <div id="MainContent_ucFormControls_rptRows_rptElements_4_ctl00_0_PText_0" class="ucText editorDiv"><p>KBW was established as 11 King&rsquo;s Bench Walk, Temple in 1954 by George Waller QC, who subsequently became leader of the North Eastern Circuit, a High Court Judge and finally a Lord Justice of Appeal.</p>
<p>Although Chambers was for many years based at this address in London, the members of 11 King&rsquo;s Bench Walk always had strong links to the North East where most predominantly practised.</p>
<p>From the early days, the quality of the legal knowledge and advocacy provided by 11 King&rsquo;s Bench Walk was such that it rapidly became the premier set of chambers in the North East, and one of the premier sets of chambers in the country. Former members of Chambers, Lord Taylor and Lord Justice Kennedy, went on to high judicial office as the Lord Chief Justice of England and Wales and the Vice-President of the Queen&rsquo;s Bench Division respectively. Over the years, many other members of Chambers have gone on to take judicial appointments.</p></div>

</div>
                </div>

        </div></div></section>

        <section class='' ><div class='container'><div class='row grid_6_6'>

                <div class='col-6  '>
                <div id="MainContent_ucFormControls_rptRows_rptElements_5_pnlElement_0" class="e_texttype">

                <div id="MainContent_ucFormControls_rptRows_rptElements_5_ctl00_0_PText_0" class="ucText editorDiv"><div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<h3><strong>Former members include:<br /><br /><br /></strong></h3>
</div>
</div>
<ul>
<li>Mr Justice Cobb</li>
<li>His Honour Judge David Savill QC, the Recorder of Leeds</li>
<li>His Honour Judge Angus Stroyan QC, the Recorder of Newcastle</li>
<li>His Honour Judge Geoffrey Baker QC</li>
<li>His Honour Judge Donald Herrod QC</li>
<li>His Honour Judge Peter Mason QC</li>
<li>His Honour Judge William Crawford QC</li>
<li>His Honour Judge Robert Moore</li>
<li>His Honour Judge Guy Whitburn QC</li>
<li>His Honour Judge James Spencer QC</li>
<li>His Honour Judge Roger Thorn QC</li>
<li>His Honour Judge Jeremy Richardson QC</li>
<li>Her Honour Judge Sarah Mallett</li>
</ul></div>

</div>
                </div>

                <div class='col-6 '>
                <div id="MainContent_ucFormControls_rptRows_rptElements_5_pnlElement_1" class="e_image">

                <div id="MainContent_ucFormControls_rptRows_rptElements_5_ctl00_1_dvImgBlock_1" class="ucImage">
    <div id="MainContent_ucFormControls_rptRows_rptElements_5_ctl00_1_dvElementThumb_1" class="element-thumb">
        <img src="https://www.kbwchambers.com/assets/media/kbwintroblock_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_5_ctl00_1_imgSrc_1" class="" alt="KBW Intro block" title="KBW Intro block" />
    </div>



</div>


</div>
                </div>

        </div></div></section>

        <section class='' ><div class='container'><div class='row grid_12'>

                <div class='col-12  '>
                <div id="MainContent_ucFormControls_rptRows_rptElements_6_pnlElement_0" class="e_texttype">

                <div id="MainContent_ucFormControls_rptRows_rptElements_6_ctl00_0_PText_0" class="ucText editorDiv">With the increasing importance of Circuits as regional centres of excellence, the decision was taken in 1982 to open an annex in Park Square, Leeds to offer facilities locally. This was a great success. There then followed the 22 years&rsquo; leadership of Franz Muller QC, during which time Chambers grew from strength to strength. As Chambers work was predominantly in the North East, and as all members of Chambers now lived in the region, the decision was taken in 2004 to move the whole administration of Chambers from London to the North East. Leeds was chosen as the leading legal centre and also as a place geographically central to the North Eastern Circuit. <br /><br />Chambers remains committed to the principles of excellence which have been a cornerstone of our ethos from the very beginning of 11 King&rsquo;s Bench Walk. Although no longer based at 11 King&rsquo;s Bench Walk, the link with this history has been preserved in the choice of our new name: KBW.</div>

</div>
                </div>

        </div></div></section>


<div id="MainContent_ucFormControls_pnlUserControl">


<style type="text/css">
    .htauto { height: auto!important; }
</style>


<div id="dvFormGeneral" class="modal fade dvGenEnqPop" style="display: none;">
    <div class="modal-dialog modal-dialog-centered container--medium">
        <div class="modal-content">
            <div class="modal-body">
                <span onclick="fnClosePopupById('dvFormGeneral')" class="close">
                    <svg>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#closeRound"></use></svg>
                </span>
                <div class="container">

                    <div class="form">
                        <input type="hidden" name="ctl00$MainContent$ucFormControls$ctl00$hdnEPageValue" id="MainContent_ucFormControls_ctl00_hdnEPageValue" />
                        <input type="hidden" name="ctl00$MainContent$ucFormControls$ctl00$hdnEViewType" id="MainContent_ucFormControls_ctl00_hdnEViewType" value="Popup" />
                        <div class="row row--max2rem">
                            <div class="col-12">
                                <div class="mb-2">
                                    <label for="txtFirstNameGE">First Name<span class="stk-req">*</span></label>
                                    <input name="ctl00$MainContent$ucFormControls$ctl00$txtFirstNameGE" type="text" maxlength="50" id="txtFirstNameGE" tabindex="2" class="input wide form-control" placeholder="First Name" name="firstname" autocomplete="firstname" />
                                </div>
                                <div class=" mb-2">
                                    <label for="txtLastNameGE">Last Name<span class="stk-req">*</span></label>
                                    <input name="ctl00$MainContent$ucFormControls$ctl00$txtLastNameGE" type="text" maxlength="50" id="txtLastNameGE" tabindex="3" class="input wide form-control" placeholder="Last Name" autocomplete="on" />
                                </div>

                                <div class="mb-2">
                                    <label for="txtEmailGE">Company Email<span class="stk-req">*</span></label>

                                    <input name="ctl00$MainContent$ucFormControls$ctl00$txtEmailGE" type="text" maxlength="50" id="txtEmailGE" tabindex="4" class="input wide form-control" placeholder="Company Email" autocomplete="on" />
                                </div>
                                <div class="mb-2">
                                    <label for="txtPhoneNumberGE">Phone Number<span class="stk-req">*</span></label>
                                    <input name="ctl00$MainContent$ucFormControls$ctl00$txtPhoneNumberGE" type="text" maxlength="12" id="txtPhoneNumberGE" tabindex="5" class="input wide form-control  numeric" placeholder="Phone Number" autocomplete="on" />

                                </div>
                                <div class="mb-2">
                                    <label for="txtCompanyGE">Company Name<span class="stk-req">*</span></label>
                                    <input name="ctl00$MainContent$ucFormControls$ctl00$txtCompanyGE" type="text" maxlength="100" id="txtCompanyGE" class="input wide form-control" placeholder="Company Name" />
                                </div>

                                <div class="mb-2">
                                    <label for="ddlCountryGE">Country<span class="stk-req">*</span></label>
                                    <select name="ctl00$MainContent$ucFormControls$ctl00$ddlCountryGE" id="ddlCountryGE" class="wide form-control inp-req">
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
		<option value="Antigua and Barbuda">Antigua and Barbuda</option>
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
		<option value="Bonaire, Saint Eustatius and Saba">Bonaire, Saint Eustatius and Saba</option>
		<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
		<option value="Botswana">Botswana</option>
		<option value="Bouvet Island">Bouvet Island</option>
		<option value="Brazil">Brazil</option>
		<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
		<option value="British Virgin Islands">British Virgin Islands</option>
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
		<option value="Central African Republic">Central African Republic</option>
		<option value="Chad">Chad</option>
		<option value="Chile">Chile</option>
		<option value="China">China</option>
		<option value="Christmas Island">Christmas Island</option>
		<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
		<option value="Colombia">Colombia</option>
		<option value="Comoros">Comoros</option>
		<option value="Cook Islands">Cook Islands</option>
		<option value="Costa Rica">Costa Rica</option>
		<option value="Croatia">Croatia</option>
		<option value="Cuba">Cuba</option>
		<option value="Curacao">Curacao</option>
		<option value="Cyprus">Cyprus</option>
		<option value="Czechia">Czechia</option>
		<option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
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
		<option value="Federated States of Micronesia">Federated States of Micronesia</option>
		<option value="Fiji">Fiji</option>
		<option value="Finland">Finland</option>
		<option value="France">France</option>
		<option value="French Guiana">French Guiana</option>
		<option value="French Polynesia">French Polynesia</option>
		<option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option>
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
		<option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
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
		<option value="Northern Mariana Islands">Northern Mariana Islands</option>
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
		<option value="Principality of Monaco">Principality of Monaco</option>
		<option value="Puerto Rico">Puerto Rico</option>
		<option value="Qatar">Qatar</option>
		<option value="Republic of the Congo">Republic of the Congo</option>
		<option value="Reunion">Reunion</option>
		<option value="Romania">Romania</option>
		<option value="Russia">Russia</option>
		<option value="Rwanda">Rwanda</option>
		<option value="Saint Barthelemy">Saint Barthelemy</option>
		<option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
		<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
		<option value="Saint Lucia">Saint Lucia</option>
		<option value="Saint Martin">Saint Martin</option>
		<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
		<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
		<option value="Samoa">Samoa</option>
		<option value="San Marino">San Marino</option>
		<option value="Sao Tome and Principe">Sao Tome and Principe</option>
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
		<option value="South Georgia and South Sandwich Islands">South Georgia and South Sandwich Islands</option>
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
		<option value="Trinidad and Tobago">Trinidad and Tobago</option>
		<option value="Tunisia">Tunisia</option>
		<option value="Turkey">Turkey</option>
		<option value="Turkmenistan">Turkmenistan</option>
		<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
		<option value="Tuvalu">Tuvalu</option>
		<option value="Uganda">Uganda</option>
		<option value="Ukraine">Ukraine</option>
		<option value="United Arab Emirates">United Arab Emirates</option>
		<option value="United Kingdom">United Kingdom</option>
		<option value="United States of America">United States of America</option>
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
                                    <label for="txtMessageGE">Your Enquiry<span class="stk-req">*</span></label>
                                    <textarea name="ctl00$MainContent$ucFormControls$ctl00$txtMessageGE" rows="2" cols="20" id="txtMessageGE" tabindex="7" class="input wide form-control" maxlength="500" style="height: 64px;">
</textarea>
                                </div>

                                <div class="mb-2">
                                    <div class="row">
                                        <div class="col-6 hide767">
                                            &nbsp;
                                        </div>
                                        <div class="col-6">
                                            <a onclick="return ValidateEnquiryStep();" id="MainContent_ucFormControls_ctl00_btnSaveEnquiry" tabindex="7" class="button--greenLight text-center wide" href="javascript:__doPostBack(&#39;ctl00$MainContent$ucFormControls$ctl00$btnSaveEnquiry&#39;,&#39;&#39;)">Submit</a>
                                            <div id="MainContent_ucFormControls_ctl00_divProcess" style="display: none; text-align: center" class="button--primary arrowButton wide">
                                                <img src="https://www.kbwchambers.com/images/btn-loader.gif" alt="Loading" />
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
        }
        else
            cName.removeClass("errorCSS");

        var cLName = $("#txtLastNameGE");
        if (cLName.val() == "" || cLName.val() == cLName.attr("placeholder")) {
            Msg += "Enter Last Name. \n";
            cLName.addClass("errorCSS");
            Valid = false;
        }
        else
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
        }
        else if (!reg.test(cEmail.val())) {
            Msg += "Invalid Email. \n";
            cEmail.addClass("errorCSS");
            Valid = false;
        }
        else
            cEmail.removeClass("errorCSS");

        if ((cPhone.val() == "" || cPhone.val() == cPhone.attr("placeholder"))) {
            Msg += "Enter Phone Number \n";
            cPhone.addClass("errorCSS");
            Valid = false;
        }
        else if (cPhone.val().length < 10) {
            Msg += "Invalid Phone Number. \n";
            cPhone.addClass("errorCSS");
            Valid = false;
        }
        else
            cPhone.removeClass("errorCSS");


        var cCompanyEnq = $("#txtCompanyGE");
        if (cCompanyEnq.val() == "" || cCompanyEnq.val() == cCompanyEnq.attr("placeholder")) {
            Msg += "Enter Company Name. \n";
            cCompanyEnq.addClass("errorCSS");
            Valid = false;
        }
        else
            cCompanyEnq.removeClass("errorCSS");

        var cCountry = $("#ddlCountryGE");
        if (cCountry.val() == "" || cCountry.val() == null || cCountry.val() == "0") {
            Msg += "Enter Country. \n";
            cCountry.addClass("errorCSS");
            Valid = false;
        }
        else
            cCountry.removeClass("errorCSS");

        var cMessageGE = $("#txtMessageGE");
        if (cMessageGE.val() == "" || cMessageGE.val() == cMessageGE.attr("placeholder")) {
            Msg += "Enter Your Enquiry. \n";
            cMessageGE.addClass("errorCSS");
            Valid = false;
        }
        else
            cMessageGE.removeClass("errorCSS");




        if (!Valid) {
            alert(Msg);
            $('#MainContent_ucFormControls_ctl00_divProcess').hide();
            $('#MainContent_ucFormControls_ctl00_btnSaveEnquiry').show();
        }
        else {

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
                data: "{FirstName:'" + cName.val() + "', LastName:'" + cLName.val() + "', Company:'" + cCompanyEnq.val() + "', Email:'" + cEmail.val() + "', Phone:'" + cPhone.val() + "', Address:'" + cCountry.val() + "',PageName:'" + page + "', PageUrl:'" + window.location.href + "',Message:'" + $("#txtMessageGE").val() + "',EnqType:" + enqType + "}",
                async: false,
                success: function (Result) {
                    if (Result.d == "OK") {
                        fnClearEnquiryPop();

                        if ($("#hdnEViewType").val() == "Popup")
                            fnClosePopupById('divEnquire');
                        fnOpenPopupById('dvThankMsgPop');
                    }
                    else {
                        alert(Result.d);
                        $('#MainContent_ucFormControls_ctl00_divProcess').hide();
                        $('#MainContent_ucFormControls_ctl00_btnSaveEnquiry').show();
                    }
                },
                error: function (Result) {
                }
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
        gtag('event', 'send', { 'event_category': 'general - cta', 'event_action': 'submit', 'event_label': 'mobile device enquiry form - submit' });
    }

    function gaCommonEnq() {
        gtag('event', 'send', { 'event_category': 'general - cta', 'event_action': 'submit', 'event_label': 'general enquiry form submitted [ILT]' });
    }


    function gaJobDetailEnq() {
        gtag('event', 'send', { 'event_category': 'home page - cta', 'event_action': 'submit', 'event_label': 'general enquiry form submitted' });
    }

    function gaCourseListEnq() {
        gtag('event', 'send', { 'event_category': 'course - cta', 'event_action': 'submit', 'event_label': 'make an enquiry submit [ILT]' });
    }


    function gaCategoryListEnq() {
        gtag('event', 'send', { 'event_category': 'category - cta', 'event_action': 'submit', 'event_label': 'make an enquiry submit [ILT]' });
    }
    function gaNewsListEnq() {
        gtag('event', 'send', { 'event_category': 'news - cta', 'event_action': 'submit', 'event_label': 'news - make an enquiry form submit [ILT]' });
    }
    function gaNewsDetailEnq() {
        gtag('event', 'send', { 'event_category': 'news - cta', 'event_action': 'submit', 'event_label': 'news - make an enquiry form submit [detail page] [ILT]' });
    }



</script>

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
                                    <span>To book a barrister or to discuss your case with one of our experienced clerks please <a class="" href="tel:+44(0)01132971200" target="_blank">call 0113 2971200</a> or...</span>
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
                        <img src="../images/logo.png" id="ucFooter_Img1" alt="KBW-logo" class="" height="49" />
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
                            <li>f:&nbsp;<a href="tel:+44(0)01132971201" target="_blank">0113 297 1201</a></li>
                            <li><a href="mailto:clerks@kbwchambers.com" target="_blank">clerks@kbwchambers.com</a></li>
                            <li class="viewMap"><a href="https://goo.gl/maps/hpGKeDVJQYUuGP1z9" target="_blank">View map</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-3 col-sm-6 xs-sm-mb-2">
                    <h3>Quick Links:</h3>
                    <ul class="list">

                                <li>
                                    <a href="https://www.kbwchambers.com/about-us" id="ucFooter_rptMenuBottom1_lnkURL_0">About Us</a>
                                </li>


                                <li>
                                    <a href="https://www.kbwchambers.com/practice-area" id="ucFooter_rptMenuBottom1_lnkURL_1">Practice Area</a>
                                </li>


                                <li>
                                    <a href="https://www.kbwchambers.com/barristers" id="ucFooter_rptMenuBottom1_lnkURL_2">Barristers</a>
                                </li>


                                <li>
                                    <a href="https://www.kbwchambers.com/clerks" id="ucFooter_rptMenuBottom1_lnkURL_3">Clerks</a>
                                </li>


                                <li>
                                    <a href="https://www.kbwchambers.com/news" id="ucFooter_rptMenuBottom1_lnkURL_4">News</a>
                                </li>


                                <li>
                                    <a href="https://www.kbwchambers.com/recruitment" id="ucFooter_rptMenuBottom1_lnkURL_5">Recruitment</a>
                                </li>


                    </ul>
                </div>
                <div class="col-3 col-sm-6">
                    <h3 class="hide767">&nbsp;</h3>
                    <ul class="list">

                                <li>
                                    <a href="https://www.kbwchambers.com/direct-access" id="ucFooter_rptMenuBottom2_lnkURL_0">Direct Access</a>
                                </li>

                                <li>
                                    <a href="https://www.kbwchambers.com/about-us/service-standards" id="ucFooter_rptMenuBottom2_lnkURL_1">Service Standards</a>
                                </li>

                                <li>
                                    <a href="https://www.kbwchambers.com/about-us/price-transparency" id="ucFooter_rptMenuBottom2_lnkURL_2">Price Transparency</a>
                                </li>

                                <li>
                                    <a href="https://www.kbwchambers.com/about-us/professional-governance" id="ucFooter_rptMenuBottom2_lnkURL_3">Professional Governance</a>
                                </li>

                                <li>
                                    <a href="https://www.kbwchambers.com/about-us/complaints-procedure" id="ucFooter_rptMenuBottom2_lnkURL_4">Complaints Procedure</a>
                                </li>

                                <li>
                                    <a href="https://www.kbwchambers.com/about-us/equality-and-diversity" id="ucFooter_rptMenuBottom2_lnkURL_5">Equality &amp; Diversity</a>
                                </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-copyright text-right">
                <p class="text-right"><a href="https://www.thewholecaboodle.com/intelligent-website" target="_blank" class="ml-1">Intelligent website by thewholecaboodle</a></p>
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
    $(document).ready(function () {
        $("#dvFtrPhone").click(function () {
            gtag('event', 'send', { 'event_category': 'footer click to call - cta', 'event_action': 'click', 'event_label': 'footer click to call' });
        });
    });
</script>



      <div id="divCookie" class="themeBgClr cookiesWrp">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-5 col-sm-5">
                  <h3>We use cookies</h3>
                  <p style="opacity: 0.8;">
                     This site uses Google Analytics to help us understand visitor trends. No personally identifiable information is recorded and no data is shared.
                  </p>
                  <p>
                     Please accept to continue on this basis or adjust your browser settings if you wish to disallow all cookies.
                  </p>
               </div>
               <div class="col-5 col-sm-5 mr-0">
                  <a class="button--white fw-600 themeClr accept wide mb-3_5" onclick="setCookie1('KBWCookie', 'KBW', 30);hidediv();">I accept cookies</a><br />
                  <a href="../cookie-policy" id="A1" class="button-- fw-600 reject wide" onclick="hidediv();">Browser settings</a>
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
                  <path transform="matrix(-.26398 -2.15 -2.15 .26398 166.05 -584.58)" d="m-741.43 159.51-8.5592 19.529-20.825-4.5789-13.935 16.138-18.55-10.514-18.073 11.314-14.627-15.514-20.605 5.4843-9.4042-19.136-21.306-0.83277-3.3458-21.058-20.114-7.0758 3.0098-21.109-17.135-12.69 9.098-19.284-12.633-17.177 14.378-15.745-7.0088-20.137 18.38-10.808-0.76176-21.309 20.749-4.9101 5.5529-20.587 21.275 1.4239 11.374-18.035 19.91 7.6315 16.185-13.881 16.776 13.161 19.557-8.494 12.151 17.521 21.192-2.352 6.447 20.324 20.944 3.999 0.1699 21.322 18.835 9.9946-6.1223 20.424 15.052 15.102-11.871 17.712 9.9318 18.868-16.564 13.427 3.9292 20.957-19.786 7.9478-2.4226 21.184z" />
               </g>
            </g>
         </symbol>
         <symbol id="hamburger" viewBox="0 0 448 512">
            <path d="M 20.443121,34.611729 H 190.46761 c 7.82112,0 14.16873,-6.347678 14.16873,-14.168793 0,-7.821132 -6.34761,-14.1685287 -14.16873,-14.1685287 H 20.443121 c -7.821127,0 -14.1687171,6.3473967 -14.1687171,14.1685287 0,7.821115 6.3475901,14.168793 14.1687171,14.168793 z M 190.46761,62.949051 H 20.443121 c -7.821127,0 -14.1687171,6.347684 -14.1687171,14.168789 0,7.821129 6.3475901,14.168788 14.1687171,14.168788 H 190.46761 c 7.82112,0 14.16873,-6.347659 14.16873,-14.168788 0,-7.821105 -6.34761,-14.168789 -14.16873,-14.168789 z m 0,56.674929 H 83.208921 c -7.821126,0 -14.168714,6.34765 -14.168714,14.16878 0,7.82113 6.347588,14.16852 14.168714,14.16852 H 190.46761 c 7.82112,0 14.16873,-6.34739 14.16873,-14.16852 0,-7.82113 -6.34761,-14.16878 -14.16873,-14.16878 z" />
         </symbol>

         <symbol id="shopping-bag" viewBox="0 0 448 512">
            <path fill="" d="M352 128C352 57.421 294.579 0 224 0 153.42 0 96 57.421 96 128H0v304c0 44.183 35.817 80 80 80h288c44.183 0 80-35.817 80-80V128h-96zM224 32c52.935 0 96 43.065 96 96H128c0-52.935 43.065-96 96-96zm192 400c0 26.467-21.533 48-48 48H80c-26.467 0-48-21.533-48-48V160h64v48c0 8.837 7.164 16 16 16s16-7.163 16-16v-48h192v48c0 8.837 7.163 16 16 16s16-7.163 16-16v-48h64v272z" class=""></path>
         </symbol>
         <symbol id="closeBold" viewBox="0 0 512.001 512.001">
            <path d="m512.001 84.853-84.853-84.853-171.147 171.147-171.148-171.147-84.853 84.853 171.148 171.147-171.148 171.148 84.853 84.853 171.148-171.147 171.147 171.147 84.853-84.853-171.148-171.148z" />
         </symbol>
         <symbol id="closeOutline" viewBox="0 0 413.348 413.348">
            <path d="m413.348 24.354-24.354-24.354-182.32 182.32-182.32-182.32-24.354 24.354 182.32 182.32-182.32 182.32 24.354 24.354 182.32-182.32 182.32 182.32 24.354-24.354-182.32-182.32z" />
         </symbol>
         <symbol id="close" viewBox="0 0 30 30">
            <path d="M15 0c-8.3 0-15 6.7-15 15s6.7 15 15 15 15-6.7 15-15-6.7-15-15-15zm5.7 19.3c.4.4.4 1 0 1.4-.2.2-.4.3-.7.3s-.5-.1-.7-.3l-4.3-4.3-4.3 4.3c-.2.2-.4.3-.7.3s-.5-.1-.7-.3c-.4-.4-.4-1 0-1.4l4.3-4.3-4.3-4.3c-.4-.4-.4-1 0-1.4s1-.4 1.4 0l4.3 4.3 4.3-4.3c.4-.4 1-.4 1.4 0s.4 1 0 1.4l-4.3 4.3 4.3 4.3z" />
         </symbol>
         <symbol id="googleG" viewBox="0 0 24 24">
            <g transform="matrix(1, 0, 0, 1, 27.009001, -39.238998)">
               <path fill="#4285F4" d="M -3.264 51.509 C -3.264 50.719 -3.334 49.969 -3.454 49.239 L -14.754 49.239 L -14.754 53.749 L -8.284 53.749 C -8.574 55.229 -9.424 56.479 -10.684 57.329 L -10.684 60.329 L -6.824 60.329 C -4.564 58.239 -3.264 55.159 -3.264 51.509 Z" />
               <path fill="#34A853" d="M -14.754 63.239 C -11.514 63.239 -8.804 62.159 -6.824 60.329 L -10.684 57.329 C -11.764 58.049 -13.134 58.489 -14.754 58.489 C -17.884 58.489 -20.534 56.379 -21.484 53.529 L -25.464 53.529 L -25.464 56.619 C -23.494 60.539 -19.444 63.239 -14.754 63.239 Z" />
               <path fill="#FBBC05" d="M -21.484 53.529 C -21.734 52.809 -21.864 52.039 -21.864 51.239 C -21.864 50.439 -21.724 49.669 -21.484 48.949 L -21.484 45.859 L -25.464 45.859 C -26.284 47.479 -26.754 49.299 -26.754 51.239 C -26.754 53.179 -26.284 54.999 -25.464 56.619 L -21.484 53.529 Z" />
               <path fill="#EA4335" d="M -14.754 43.989 C -12.984 43.989 -11.404 44.599 -10.154 45.789 L -6.734 42.369 C -8.804 40.429 -11.514 39.239 -14.754 39.239 C -19.444 39.239 -23.494 41.939 -25.464 45.859 L -21.484 48.949 C -20.534 46.099 -17.884 43.989 -14.754 43.989 Z" />
            </g>
         </symbol>
         <symbol id="arrowRight" viewBox="0 0 31.49 31.49">
            <path d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111C0.492,14.626,0,15.118,0,15.737c0,
                0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z" />
         </symbol>
         <symbol id="tickInsideCircle" viewBox="0 0 550 550">
            <path d="M150.45,206.55l-35.7,35.7L229.5,357l255-255l-35.7-35.7L229.5,285.6L150.45,206.55z M459,255c0,112.2-91.8,204-204,204
			S51,367.2,51,255S142.8,51,255,51c20.4,0,38.25,2.55,56.1,7.65l40.801-40.8C321.3,7.65,288.15,0,255,0C114.75,0,0,114.75,0,255
			s114.75,255,255,255s255-114.75,255-255H459z" />
         </symbol>
         <symbol id="back" viewBox="0 0 20 20">
            <path d="M2.3 10.7l5 5c.4.4 1 .4 1.4 0s.4-1 0-1.4l-3.3-3.3h11.6c.6 0 1-.4 1-1s-.4-1-1-1h-11.6l3.3-3.3c.4-.4.4-1 0-1.4-.2-.2-.4-.3-.7-.3s-.5.1-.7.3l-5 5c-.2.2-.3.5-.3.7 0 .2.1.5.3.7z" />
         </symbol>
         <symbol id="menu" viewBox="0 0 22 22">
            <path d="M1 5h20c.6 0 1-.4 1-1s-.4-1-1-1h-20c-.6 0-1 .4-1 1s.4 1 1 1zm20 5h-20c-.6 0-1 .4-1 1s.4 1 1 1h20c.6 0 1-.4 1-1s-.4-1-1-1zm0 7h-20c-.6 0-1 .4-1 1s.4 1 1 1h20c.6 0 1-.4 1-1s-.4-1-1-1z" />
         </symbol>
         <symbol id="share" viewBox="0 0 22 22">
            <path d="M21 10c-.6 0-1 .4-1 1v7h-18v-7c0-.6-.4-1-1-1s-1 .4-1 1v7c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2v-7c0-.6-.4-1-1-1zM5.5 7.5c.3 0 .5-.1.7-.3l3.8-3.8v9.6c0 .6.4 1 1 1s1-.4 1-1v-9.6l3.8 3.8c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4l-5.5-5.5c-.1-.1-.2-.2-.3-.2-.2-.1-.5-.1-.8 0l-.3.2-5.5 5.5c-.4.4-.4 1 0 1.4.2.2.4.3.7.3z" />
         </symbol>
         <symbol id="facebook" viewBox="0 0 24 24">
            <path d="M24 1.3v21.3c0 .7-.6 1.3-1.3 1.3h-6.1v-9.3h3.1l.5-3.6h-3.6v-2.2c0-1.1.3-1.8 1.8-1.8h1.9v-3.2c-.3 0-1.5-.1-2.8-.1-2.8 0-4.7 1.7-4.7 4.8v2.7h-3.1v3.6h3.1v9.2h-11.5c-.7 0-1.3-.6-1.3-1.3v-21.4c0-.7.6-1.3 1.3-1.3h21.3c.8 0 1.4.6 1.4 1.3z" />
         </symbol>
         <symbol id="fb-like" viewBox="0 0 20 20">
            <path d="M0 8v12h5v-12h-5zm2.5 10.8c-.4 0-.8-.3-.8-.8 0-.4.3-.8.8-.8s.8.3.8.8c0 .4-.4.8-.8.8zm3.5-.8h9.5c1.1 0 1.7-1 1.7-1.7 0-.3-.4-1-.4-1 1.4-.3 1.7-1.2 1.7-1.7-.1-.5-.3-.9-.5-1 1-.4 1.5-1.1 1.4-1.9-.1-.8-1-1.5-1-1.5 1-.6.9-1.5.9-1.5-.3-1.3-1.5-1.7-1.7-1.7h-5.6s.3-.5.3-2.4-1.3-3.6-2.6-3.6c0 0-.7.1-1 .3v3.5l-2.7 4.4v9.8z" />
         </symbol>
         <symbol id="twitter" viewBox="0 1 24 23">
            <path d="M21.5 7.6v.6c0 6.6-5 14.1-14 14.1-2.8 0-5.4-.8-7.6-2.2l1.2.1c2.3 0 4.4-.8 6.1-2.1-2.2 0-4-1.5-4.6-3.4.3.1.6.1.9.1.5 0 .9-.1 1.3-.2-2.1-.6-3.8-2.6-3.8-5 .7.4 1.4.6 2.2.6-1.3-.9-2.2-2.4-2.2-4.1 0-.9.2-1.8.7-2.5 2.4 3 6.1 5 10.2 5.2-.1-.4-.1-.7-.1-1.1 0-2.7 2.2-5 4.9-5 1.4 0 2.7.6 3.6 1.6 1-.3 2.1-.7 3-1.3-.4 1.2-1.1 2.1-2.2 2.7 1-.1 1.9-.4 2.8-.8-.6 1.1-1.4 2-2.4 2.7z" />
         </symbol>
         <symbol id="youtube" viewBox="0 0 24 24">
            <path d="M23.6 6.3c-.3-1.2-1.4-2.2-2.6-2.3-3-.3-6-.3-9-.3s-6 0-9 .3c-1.2.1-2.3 1.1-2.6 2.3-.4 1.8-.4 3.8-.4 5.7 0 1.9 0 3.9.4 5.7.3 1.2 1.4 2.2 2.6 2.3 3 .3 6 .3 9 .3s6 0 9-.3c1.3-.1 2.3-1.1 2.6-2.4.4-1.7.4-3.7.4-5.6 0-1.9 0-3.9-.4-5.7zm-14.1 9v-6.6l6.5 3.3-6.5 3.3z" />
         </symbol>
         <symbol id="pinterest" viewBox="0 0 24 24">
            <path d="M5.9 13.9c1.2-2-.4-2.5-.6-4-1-6.1 7.1-10.2 11.4-6 2.9 2.9 1 12-3.7 11-4.6-.9 2.2-8.1-1.4-9.5-3-1.1-4.6 3.6-3.2 5.9-.8 4-2.5 7.7-1.8 12.7 2.3-1.7 3.1-4.8 3.7-8.1 1.2.7 1.8 1.4 3.3 1.5 5.5.4 8.6-5.4 7.8-10.7-.7-4.7-5.5-7.1-10.6-6.6-4.1.4-8.1 3.7-8.3 8.3-.1 2.8.7 4.9 3.4 5.5z" />
         </symbol>
         <symbol id="googlePlus" viewBox="0 0 24 24">
            <path d="M7.8 13.5h4.6c-.6 2-2.5 3.4-4.6 3.4-2.7 0-4.9-2.2-4.9-4.9s2.2-4.9 4.9-4.9c1.1 0 2.1.3 3 1l1.8-2.4c-1.4-1.1-3-1.6-4.8-1.6-4.3 0-7.9 3.5-7.9 7.9s3.5 7.9 7.9 7.9 7.9-3.5 7.9-7.9v-1.5h-7.9v3zM21.7 11v-2.2h-2v2.2h-2.2v2h2.2v2.2h2v-2.2h2.2v-2z" />
         </symbol>
         <symbol id="stumbleupon" viewBox="0 0 24 24">
            <path d="M13.3 9.6l1.6.8 2.5-.8v-1.4c0-3-2.4-5.4-5.4-5.4s-5.4 2.4-5.4 5.4v7.5c0 .7-.6 1.3-1.3 1.3s-1.3-.6-1.3-1.3v-3.2h-4v3.2c0 3 2.4 5.4 5.4 5.4s5.4-2.4 5.4-5.4v-7.5c0-.7.6-1.3 1.3-1.3s1.3.6 1.3 1.3l-.1 1.4zm6.6 2.9v3.2c0 .7-.6 1.3-1.3 1.3s-1.3-.6-1.3-1.3v-3.2l-2.5.8-1.6-.8v3.2c0 3 2.4 5.4 5.4 5.4s5.4-2.4 5.4-5.4v-3.2h-4.1z" />
         </symbol>
         <symbol id="linkedin" viewBox="0 0 24 24">
            <path d="M22.2 0h-20.4c-1 0-1.8.8-1.8 1.7v20.7c0 1 .8 1.7 1.8 1.7h20.5c1 0 1.8-.8 1.8-1.7v-20.7c-.1-.9-.9-1.7-1.9-1.7zm-14.9 20.2h-3.6v-10.9h3.6v10.9zm-1.8-12.4c-1.2 0-2-.8-2-1.9 0-1.1.8-1.9 2.1-1.9 1.2 0 2 .8 2 1.9-.1 1.1-.9 1.9-2.1 1.9zm14.8 12.4h-3.6v-5.8c0-1.5-.5-2.5-1.8-2.5-1 0-1.6.7-1.9 1.3-.1.2-.1.6-.1.9v6.1h-3.6v-10.9h3.6v1.5c.5-.7 1.3-1.8 3.3-1.8 2.4 0 4.2 1.6 4.2 4.9v6.3z" />
         </symbol>
         <symbol id="apple" viewBox="-1 1 24 24">
            <path d="M17.6 13.8c0-3 2.5-4.5 2.6-4.6-1.4-2.1-3.6-2.3-4.4-2.4-1.9-.2-3.6 1.1-4.6 1.1-.9 0-2.4-1.1-4-1-2 0-3.9 1.2-5 3-2.1 3.7-.5 9.1 1.5 12.1 1 1.5 2.2 3.1 3.8 3 1.5-.1 2.1-1 3.9-1s2.4 1 4 1 2.7-1.5 3.7-2.9c1.2-1.7 1.6-3.3 1.7-3.4-.1-.1-3.2-1.3-3.2-4.9zm-3.1-9c.8-1 1.4-2.4 1.2-3.8-1.2 0-2.7.8-3.5 1.8-.8.9-1.5 2.3-1.3 3.7 1.4.1 2.8-.7 3.6-1.7z" />
         </symbol>
         <symbol id="tumblr" viewBox="0 0 23 23">
            <path d="M12.573 4.94v-4.94h-3.188c-.072.183-.11.4-.11.622-.034.107-.072.184-.072.293-.328 1.829-1.28 3.11-2.892 3.807-.476.218-.914.253-1.39.218v3.987h2.342c.039 5.603.039 8.493.039 8.64v.332c.294 2.449 1.573 3.914 3.843 4.463.914.257 1.901.366 2.892.366 1.279-.036 2.525-.256 3.771-.659v-4.685c-.731.22-1.395.402-1.977.583-1.135.333-2.087.113-2.857-.619-.073-.11-.183-.257-.221-.403-.106-.586-.178-1.206-.178-1.795v-6.222h5.083v-3.988h-5.085z" />
         </symbol>
         <symbol id="instagram" viewBox="0 0 24 24">
            <path d="M24,2.5C23.8,1.1,22.7,0,21.2,0C15.1,0,8.9,0,2.8,0C2.6,0,2.4,0,2.3,0C0.9,0.3,0,1.4,0,2.8C0,5.9,0,8.9,0,12c0,3.1,0,6.1,0,9.2c0,0.2,0,0.3,0,0.5C0.2,23,1.4,24,2.7,24c6.2,0,12.4,0,18.5,0c0.1,0,0.2,0,0.3,0c1.4-0.2,2.4-1.3,2.4-2.7c0-6.2,0-12.4,0-18.5C24,2.7,24,2.6,24,2.5z M12,7.4c2.5,0,4.6,2.1,4.6,4.6c0,2.6-2.1,4.6-4.6,4.6c-2.6,0-4.6-2.1-4.6-4.6C7.4,9.5,9.5,7.4,12,7.4z M21.2,10.3c0,3.3,0,6.6,0,9.9c0,0.6-0.4,1-1,1c-5.1,0-10.3,0-15.4,0c-0.4,0-0.7,0-1.1,0c-0.6,0-1-0.4-1-1c0-3.3,0-6.7,0-10c0,0,0-0.1,0-0.1c0.7,0,1.4,0,2.1,0c-0.5,1.9-0.3,3.7,0.7,5.4c0.7,1.2,1.6,2.2,2.9,2.9c2.4,1.4,5.5,1.2,7.8-0.3c1.3-0.9,2.2-2,2.8-3.5c0.5-1.5,0.6-2.9,0.2-4.4c0.7,0,1.4,0,2.1,0C21.2,10.2,21.2,10.2,21.2,10.3z M21.2,6.4c0,0.5-0.4,0.9-1,0.9c0,0,0,0,0,0c-0.4,0-0.9,0-1.3,0c-0.5,0-0.9,0-1.4,0c-0.5,0-0.9-0.4-0.9-0.9c0-0.9,0-1.9,0-2.8c0-0.5,0.4-0.9,0.9-0.9c0.9,0,1.8,0,2.7,0c0.5,0,0.9,0.4,0.9,0.9C21.2,4.6,21.2,5.5,21.2,6.4z" />
         </symbol>
         <symbol id="arrow-down" viewBox="0 0 24 24">
            <path d="M12 18c-.2 0-.5-.1-.7-.3l-11-10c-.4-.4-.4-1-.1-1.4.4-.4 1-.4 1.4-.1l10.4 9.4 10.3-9.4c.4-.4 1-.3 1.4.1.4.4.3 1-.1 1.4l-11 10c-.1.2-.4.3-.6.3z" />
         </symbol>
         <symbol id="arrow-up" viewBox="0 0 24 24">
            <path d="M11.9 5.9c.2 0 .5.1.7.3l11 10c.4.4.4 1 .1 1.4-.4.4-1 .4-1.4.1l-10.4-9.4-10.3 9.4c-.4.4-1 .3-1.4-.1-.4-.4-.3-1 .1-1.4l11-10c.1-.2.4-.3.6-.3z" />
         </symbol>
         <symbol id="arrow-left" viewBox="0 0 31 72">
            <path d="M30 72c-.3 0-.6-.1-.8-.4l-29-34c-.3-.4-.3-.9 0-1.3l29-36c.3-.4 1-.5 1.4-.2.4.3.5 1 .2 1.4l-28.5 35.5 28.5 33.4c.4.4.3 1.1-.1 1.4-.2.1-.5.2-.7.2z" />
         </symbol>
         <symbol id="arrow-right" viewBox="0 0 31 72">
            <path d="M1 0c.3 0 .6.1.8.4l29 34c.3.4.3.9 0 1.3l-29 36c-.3.4-1 .5-1.4.2-.4-.3-.5-1-.2-1.4l28.5-35.5-28.5-33.4c-.4-.4-.3-1.1.1-1.4.2-.1.5-.2.7-.2z" />
         </symbol>
         <symbol id="arrow-top" viewBox="0 0 24 24">
            <path d="M20.7 10.3l-8-8c-.4-.4-1-.4-1.4 0l-8 8c-.4.4-.4 1 0 1.4s1 .4 1.4 0l6.3-6.3v15.6c0 .6.4 1 1 1s1-.4 1-1v-15.6l6.3 6.3c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4z" />
         </symbol>
         <symbol id="play" viewBox="0 0 30 30">
            <path d="M7 30v-30l22 15z" />
         </symbol>
         <symbol id="drop-down" viewBox="0 0 16 16">
            <polyline stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
               points="1,5 8,12 15,5" fill="none" />
         </symbol>
         <symbol id="direction-horizontal" viewBox="-2 6 16 16">
            <path d="M13.7 13.3l-5-5c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4l3.3 3.3h-11.6c-.6 0-1 .4-1 1s.4 1 1 1h11.6l-3.3 3.3c-.4.4-.4 1 0 1.4.2.2.4.3.7.3s.5-.1.7-.3l5-5c.2-.2.3-.5.3-.7s-.1-.5-.3-.7z" />
         </symbol>
         <symbol id="direction-vertical" viewBox="-2 6 16 16">
            <path d="M6.7 21.7l5-5c.4-.4.4-1 0-1.4s-1-.4-1.4 0l-3.3 3.3v-11.6c0-.6-.4-1-1-1s-1 .4-1 1v11.6l-3.3-3.3c-.4-.4-1-.4-1.4 0-.2.2-.3.4-.3.7 0 .3.1.5.3.7l5 5c.2.2.4.3.7.3s.5-.1.7-.3z" />
         </symbol>
         <symbol id="right" viewBox="-2 6 16 16">
            <path d="M13.7 13.3l-5-5c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4l3.3 3.3h-11.6c-.6 0-1 .4-1 1s.4 1 1 1h11.6l-3.3 3.3c-.4.4-.4 1 0 1.4.2.2.4.3.7.3s.5-.1.7-.3l5-5c.2-.2.3-.5.3-.7s-.1-.5-.3-.7z" />
         </symbol>
         <symbol id="plus" viewBox="-0 0 512 512">
            <rect y="240" width="512" height="25" />
            <rect x="240" width="25" height="512" />
         </symbol>
         <symbol id="minus" viewBox="0 0 42 42">
            <rect y="20" width="42" height="2" />
         </symbol>
         <symbol id="right-long-arrow" viewBox="-0 0 512 512">
            <path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068
			c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557
			l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104
			c0.006-0.006,0.011-0.013,0.018-0.019C513.968,262.339,513.943,249.635,506.134,241.843z">
            </path>
         </symbol>
         <symbol id="closeRound" viewBox="0 0 24 24">
            <path d="M 4.9902344 3.9902344 A 1.0001 1.0001 0 0 0 4.2929688 5.7070312 L 10.585938 12 L 4.2929688 18.292969 A 1.0001 1.0001 0 1 0 5.7070312 19.707031 L 12 13.414062 L 18.292969 19.707031 A 1.0001 1.0001 0 1 0 19.707031 18.292969 L 13.414062 12 L 19.707031 5.7070312 A 1.0001 1.0001 0 0 0 18.980469 3.9902344 A 1.0001 1.0001 0 0 0 18.292969 4.2929688 L 12 10.585938 L 5.7070312 4.2929688 A 1.0001 1.0001 0 0 0 4.9902344 3.9902344 z" />
         </symbol>
         <symbol id="check1" viewBox="0 0 24 24">
            <path fill="none" d="M0 0h24v24H0V0z" />
            <path d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z" />
         </symbol>
         <symbol id="exclamation" viewBox="0 0 191.812 191.812">
            <path d="M95.906,121.003c6.903,0,12.5-5.597,12.5-12.5V51.511c0-6.904-5.597-12.5-12.5-12.5
		s-12.5,5.596-12.5,12.5v56.993C83.406,115.407,89.003,121.003,95.906,121.003z" />
            <path d="M95.909,127.807c-3.29,0-6.521,1.33-8.841,3.66c-2.329,2.32-3.659,5.54-3.659,8.83
		s1.33,6.52,3.659,8.84c2.32,2.33,5.551,3.66,8.841,3.66s6.51-1.33,8.84-3.66c2.319-2.32,3.66-5.55,3.66-8.84s-1.341-6.51-3.66-8.83
		C102.419,129.137,99.199,127.807,95.909,127.807z" />
            <path d="M95.906,0C43.024,0,0,43.023,0,95.906s43.023,95.906,95.906,95.906s95.905-43.023,95.905-95.906
		S148.789,0,95.906,0z M95.906,176.812C51.294,176.812,15,140.518,15,95.906S51.294,15,95.906,15
		c44.611,0,80.905,36.294,80.905,80.906S140.518,176.812,95.906,176.812z" />
         </symbol>

         <symbol id="arrow-up-thin" viewBox="0 0 110 210">
            <g transform="matrix(0,-5.0017864,-6.18666,0,5.7617045,130.08551)">
               <path d="m 23.539215,-7.4486886 -8.180755,7.20002183 0.699935,0.88340295 9.781691,-8.68506248 -9.781691,-8.6365557 -0.701021,0.882248 8.182928,7.2011701 h -39.307615 v 1.1547753 z" />
            </g>
         </symbol>

         <symbol id="arrow-down-thin" viewBox="0 0 110 210">
            <g transform="matrix(0,5.0017864,-6.18666,0,5.7617045,79.703651)">
               <path d="m 23.539215,-7.4486886 -8.180755,7.20002183 0.699935,0.88340295 9.781691,-8.68506248 -9.781691,-8.6365557 -0.701021,0.882248 8.182928,7.2011701 h -39.307615 v 1.1547753 z" />
            </g>
         </symbol>

         <symbol id="arrow-left-thin" viewBox="0 0 210 110">
            <g transform="matrix(-5.0017864,0,0,6.18666,130.27329,104.42953)">
               <path d="m 23.539215,-7.4486886 -8.180755,7.20002183 0.699935,0.88340295 9.781691,-8.68506248 -9.781691,-8.6365557 -0.701021,0.882248 8.182928,7.2011701 h -39.307615 v 1.1547753 z" />
            </g>
         </symbol>

         <symbol id="arrow-right-thin" viewBox="0 0 210 110">
            <g transform="matrix(5.0017864,0,0,6.18666,79.891435,104.42953)">
               <path d="m 23.539215,-7.4486886 -8.180755,7.20002183 0.699935,0.88340295 9.781691,-8.68506248 -9.781691,-8.6365557 -0.701021,0.882248 8.182928,7.2011701 h -39.307615 v 1.1547753 z" />
            </g>
         </symbol>
         <symbol id="swipeHand" viewBox="0 0 1024 1024">
            <path d="M538.88 162.56L608 37.12A1278.08 1278.08 0 0 0 110.4 160a42.56 42.56 0 0 0 35.2 77.76 1107.2 1107.2 0 0 1 393.28-75.2z m448 482.24a482.88 482.88 0 0 0-215.36-271.04l108.48-195.52a96 96 0 0 0-167.68-93.44l-243.2 436.48a49.6 49.6 0 0 1-82.88 5.76c-56.32-75.2-76.8-119.36-138.24-115.2A96 96 0 0 0 168.32 544a1159.68 1159.68 0 0 0 263.04 355.84c313.92 268.8 592.64-127.68 554.56-254.72z" />
         </symbol>
         <symbol id="twitter2023" viewBox="0 0 24 24">
            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path>
         </symbol>
      </svg>
   </form>
   <script type="text/javascript" src="https://www.kbwchambers.com/scripts/main.js"></script>
   <script type="text/javascript" src="https://www.kbwchambers.com/scripts/MegaMenu.js"></script>
   <script type="text/javascript">
      $(function () {
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
      $(document).ready(function () {

         $('.popupButton').click(function () {
            var buttonId = $(this).attr('id');
            fnOpenPopupById("dvForm" + buttonId);
         })

         $('.popupTrigger').click(function () {
            var buttonId = $(this).attr('data-popup-id');
            fnOpenPopupById("dvForm" + buttonId);
         })

      });

      //form cursor fixed for iphone
      function fnPosFixedClose() {
         $("body").css({ "position": "" });
      }
   </script>
   <script type="text/javascript">

      $(document).ready(function () {


         var highestBox = 0;
         $('.eqHeight').each(function () {
            if ($(this).height() > highestBox)
               highestBox = Math.round($(this).height());
         });
         $('.eqHeight').each(function () {
            $(this).css('height', highestBox);
         });

         var highestBox = 0;
         $('.eqHeadHeight').each(function () {
            if ($(this).height() > highestBox)
               highestBox = Math.round($(this).height());
         });
         $('.eqHeadHeight').each(function () {
            $(this).css('height', highestBox);
         });


         $('.clsAdvBox').click(function () {

            $('.overlaybg').removeClass('opendiv');
            $('html').removeClass('sidebarShown');
            $('.leftsidebar').removeClass('visible');
            $('#main-block').addClass('slide');
         });

         $('.srchAgn, .srchAg').click(function () {

            if ($('.leftsidebar').hasClass('advSrch_open visible')) {
               $('.overlaybg').removeClass('opendiv');
               $('html').removeClass('sidebarShown');
               $('.leftsidebar').removeClass('visible');
               $('#main-block').addClass('slide');
            }
            else {
               $('.overlaybg').addClass('opendiv');
               $('html').addClass('sidebarShown');
               $('.leftsidebar').addClass('advSrch_open visible');
               $('#main-block').removeClass('slide');
            }

         });

         // FOR BG COLOR
         $('.popbtn').on('click', function () {
            $('.bgDark').addClass('openBg');
            $('.fade .content').css('background', 'none');
         });

         $('.icn_close').click(function () {
            $('html').removeClass('sidebarShown');
            $('.modal-container').hide();
            $('.modal-container').addClass('out');
            $('body').removeClass('modal-active');
            $('body').addClass('scroll');
            $('.bgDark').removeClass('openBg');
            $('html').removeClass('popupShown');//test
         });

         // FOR BG COLOR
         $('#lnkBack').click(function () {
            parent.history.back();
            return false;
         });

         $(".tbAccord > .blrHead").on("click", function () {
            if ($(this).hasClass('active')) {
               $('.tbAccord > .blrHead').removeClass('active');
               $('.tbAccord .blrContent').hide();
            }
            else {
               var oCurr = $(this);
               $('.tbAccord > .blrHead').removeClass('active');
               $(oCurr).addClass('active');
               $(oCurr).siblings(".blrContent").slideDown();
               $('.tbAccord .blrContent').not($(oCurr).siblings(".blrContent")).slideUp();
            }
         });

         $(document).mouseup(function (e) {
            //if ($ ('.mdlEnq').css('display') == 'none') {
            if ($('.modal-container').is(':visible') || $('.usedPopFrm').is(':visible') || $('.ucImagePopup').is(':visible')) {
               var container = $(".popupContent");
               var dateContainer = $(".xdsoft_datetimepicker");

               if (!container.is(e.target) && container.has(e.target).length === 0 && !dateContainer.is(e.target) && dateContainer.has(e.target).length === 0) {
                  $('.modal-container').hide();
                  $('.modal-container').addClass('out');
                  $('body').removeClass('modal-active');
                  $('body').addClass('scroll');
                  $('.bgDark').removeClass('openBg');
                  $('html').removeClass('popupShown');//test
               }
            };
            $('.overlaybg').removeClass('opendiv');
         });
         $('.clsGtagPhn').on('click', function () { gtag('event', 'send', { 'event_category': 'dealership - cta', 'event_action': 'submit', 'event_label': 'dealer detail page - click to call' }); });

      });

      function CloseModal() {
         $('.modal-container').hide();
         $('.modal-container').addClass('out');
         $('body').removeClass('modal-active');
         $('body').addClass('scroll');
      }

      function gaEventCall(sCat, sAction, sLabel) {
         gtag('event', 'send', { 'event_category': sCat, 'event_action': sAction, 'event_label': sLabel });
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
                  setTimeout(function () {
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

            window.removeAnimationTimeout = setTimeout(function () {
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
         $(sElement).each(function () {
            if ($(this).height() > highestBox)
               highestBox = Math.round($(this).height());
         });
         $(sElement).css('height', highestBox);
      }
      $(window).resize(function () {
         fnAdjustHeight('.e_imagewithtext .titleTxt h3');
         fnAdjustHeight('.e_imagewithtext .descriptionTxt');
         fnAdjustHeight('.section--testimonial:not(.reviewSlider) .textimonial-content p');
         fnAdjustHeight('.e_courseblock .course-textblock .course-textwrap');
         fnAdjustHeight('.ucNews .card--article .headline');

      });
      $(document).ready(function () {
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
                     <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#closeRound"></use></svg>
               </span>
               <div class="text-center">
                  <span class="circleCheck">
                     <svg>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#tickInsideCircle"></use></svg>
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
                     <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#closeRound"></use></svg>
               </span>
               <p id="pPopMsgBody" class="text-center"></p>
            </div>
         </div>
      </div>
   </div>

   <div class="modal-backdrop fade hide"></div>
</body>
</html>
