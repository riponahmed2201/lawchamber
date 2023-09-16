@extends('frontend.master')

@section('frontend_title', 'Home')

@section('frontend_main_content')
    <main id="main-block" class="">
        <!--Forms-->
        <section class=''>
            <div class='container'>
                <div class='row grid_6_3_3_3_3'>
                    <div class='col-6 '>
                        <div id="MainContent_ucFormControls_rptRows_rptElements_0_pnlElement_0" class="e_bannerslider theme2">
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
                        </div>
                    </div>

                    <div class='col-3 '>
                        <div id="MainContent_ucFormControls_rptRows_rptElements_0_pnlElement_1" class="e_promoblock">

                            <div id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_1_lnk_1"
                                class="ucPromoBlock tintVisible "
                                style="background-image: url(https://www.kbwchambers.com/assets/media/expertiseblock_01.jpg);  background-size: cover;  background-position: center;background-color:#850000;">
                                <div class="element-thumb">
                                    <a href='https://www.kbwchambers.com/practice-area' runat='server' target='_self'><img
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
                                            style="color:#ffffff;fill:#ffffff;" class="link arrowLink  "><span>Read
                                                more<svg>
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
                        <div id="MainContent_ucFormControls_rptRows_rptElements_0_pnlElement_2" class="e_promoblock">
                            <div id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_2_lnk_2" class="ucPromoBlock"
                                style="background-image: url(https://www.kbwchambers.com/assets/media/ourheritageblock_01.jpg);  background-size: cover;  background-position: center;background-color:#000000;">
                                <div class="element-thumb">
                                    <a href="{{ route('frontend.aboutUsIntroduction') }}" runat='server' target='_self'><img
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
                                            style="color:#ffffff;fill:#ffffff;" class="link arrowLink  "><span>About us<svg>
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
                        <div id="MainContent_ucFormControls_rptRows_rptElements_0_pnlElement_3" class="e_promoblock">

                            <div id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_3_lnk_3" class="ucPromoBlock"
                                style="background-image: url(https://www.kbwchambers.com/assets/media/contactusblock_01.jpg);  background-size: cover;  background-position: center;background-color:#000000;">
                                <div class="element-thumb">
                                    <a href='https://www.kbwchambers.com/contact-us' runat='server' target='_self'><img
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
                                            style="color:#ffffff;fill:#ffffff;" class="link arrowLink  "><span>Contact
                                                us<svg>
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
                                <h2><span id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_4_ltrTitle_4">Latest
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

                                        <li id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_4_liOther_4">
                                            <a href='https://www.kbwchambers.com//?Page=3' rel='next'>...</a>
                                        </li>
                                        <li id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_4_liLastPage_4">
                                            <a href='https://www.kbwchambers.com//?Page=13'>13</a>
                                        </li>
                                    </ul>
                                    <a class='pg-nxt' href='https://www.kbwchambers.com//?Page=2'rel='prev'>Next<i
                                            class='icon-arrow-right'></i></a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class=''>
            <div class='container'>
                <div class='row grid_4_4_4 align-items-center borderLayout'>

                    <div class='col-4  cAlignMid  borderLayoutCol'>
                        <div id="MainContent_ucFormControls_rptRows_rptElements_1_pnlElement_0" class="e_textwithbtn">

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
                                        <a href="{{ route('frontend.our_barrister') }}"
                                            id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_btnPopUp_0"
                                            class="link arrowLink">View<svg>
                                                <use xmlns:xlink='http://www.w3.org/1999/xlink'
                                                    xlink:href='#right-long-arrow'></use>
                                            </svg>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class='col-4  cAlignMid  borderLayoutCol'>
                        <div id="MainContent_ucFormControls_rptRows_rptElements_1_pnlElement_1" class="e_textwithbtn">

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
                        <div id="MainContent_ucFormControls_rptRows_rptElements_1_pnlElement_2" class="e_textwithbtn">
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

        <!-- Practice Areas -->
        <section class=''>
            <div class='container'>
                <div class='row grid_12'>
                    <div class='col-12 '>
                        <div id="MainContent_ucFormControls_rptRows_rptElements_2_pnlElement_0" class="e_practiceslider">
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
                                        <a href='https://www.kbwchambers.com/practice-area/personal-injury' title=''
                                            class=" ">
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
                                        <a href='https://www.kbwchambers.com/practice-area/sports-law' title=''
                                            class=" ">
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


                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class=''>
            <div class='container'>
                <div class='row grid_12 align-items-center'>

                    <div class='col-12  cAlignMid '>
                        <div id="MainContent_ucFormControls_rptRows_rptElements_3_pnlElement_0" class="e_textwithbtn">

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
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>


        <div id="MainContent_ucFormControls_pnlUserControl">

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
                                    <input type="hidden" name="ctl00$MainContent$ucFormControls$ctl00$hdnEPageValue"
                                        id="MainContent_ucFormControls_ctl00_hdnEPageValue" />
                                    <input type="hidden" name="ctl00$MainContent$ucFormControls$ctl00$hdnEViewType"
                                        id="MainContent_ucFormControls_ctl00_hdnEViewType" value="Popup" />
                                    <div class="row row--max2rem">
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label for="txtFirstNameGE">First Name<span
                                                        class="stk-req">*</span></label>
                                                <input name="ctl00$MainContent$ucFormControls$ctl00$txtFirstNameGE"
                                                    type="text" maxlength="50" id="txtFirstNameGE" tabindex="2"
                                                    class="input wide form-control" placeholder="First Name"
                                                    name="firstname" autocomplete="firstname" />
                                            </div>
                                            <div class=" mb-2">
                                                <label for="txtLastNameGE">Last Name<span class="stk-req">*</span></label>
                                                <input name="ctl00$MainContent$ucFormControls$ctl00$txtLastNameGE"
                                                    type="text" maxlength="50" id="txtLastNameGE" tabindex="3"
                                                    class="input wide form-control" placeholder="Last Name"
                                                    autocomplete="on" />
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
                                                <input name="ctl00$MainContent$ucFormControls$ctl00$txtPhoneNumberGE"
                                                    type="text" maxlength="12" id="txtPhoneNumberGE" tabindex="5"
                                                    class="input wide form-control  numeric" placeholder="Phone Number"
                                                    autocomplete="on" />

                                            </div>
                                            <div class="mb-2">
                                                <label for="txtCompanyGE">Company Name<span
                                                        class="stk-req">*</span></label>
                                                <input name="ctl00$MainContent$ucFormControls$ctl00$txtCompanyGE"
                                                    type="text" maxlength="100" id="txtCompanyGE"
                                                    class="input wide form-control" placeholder="Company Name" />
                                            </div>

                                            <div class="mb-2">
                                                <label for="ddlCountryGE">Country<span class="stk-req">*</span></label>
                                                <select name="ctl00$MainContent$ucFormControls$ctl00$ddlCountryGE"
                                                    id="ddlCountryGE" class="wide form-control inp-req">
                                                    <option value="">Select Country</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Aland Islands">Aland Islands</option>
                                                </select>
                                            </div>
                                            <div class="mb-2">
                                                <label for="txtMessageGE">Your Enquiry<span
                                                        class="stk-req">*</span></label>
                                                <textarea name="ctl00$MainContent$ucFormControls$ctl00$txtMessageGE" rows="2" cols="20" id="txtMessageGE"
                                                    tabindex="7" class="input wide form-control" maxlength="500" style="height: 64px;"></textarea>
                                            </div>

                                            <div class="mb-2">
                                                <div class="row">
                                                    <div class="col-6 hide767">
                                                        &nbsp;
                                                    </div>
                                                    <div class="col-6">
                                                        <a onclick="return ValidateEnquiryStep();"
                                                            id="MainContent_ucFormControls_ctl00_btnSaveEnquiry"
                                                            tabindex="7" class="button--greenLight text-center wide"
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
        </div>

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
@endsection
