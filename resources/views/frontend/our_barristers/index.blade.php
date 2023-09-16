@extends('frontend.master')

@section('frontend_title', 'Home')

@section('frontend_main_content')

<style type="text/css">
    section:first-of-type.section--breadcrumbs { display: none; }
    .hide-srch { display: none!important; }
    </style>

<main id="main-block" class="">
    <!-- Section start -->

<section class="section--breadcrumbs">

<div class="container">
<ul class="breadcrumbs">

            <li class="">
                <a href="https://www.kbwchambers.com/" title="Home">Home</a>

            </li>

    <li>
        <a id="MainContent_ucBreadcrumb_lnkCurrPage" class="active" title="Barristers">Barristers</a>
    </li>
</ul>
</div>
</section>


<!--Elements-->



<!--Forms-->

<section class="  removeSpacer image-slider-block compactSize"><div class="container-fluid"><div class="row grid_12">

        <div class="col-12 ">
        <div id="MainContent_ucFormControls_rptRows_rptElements_0_pnlElement_0" class="e_imageslide">

        <div id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_0_dvImage_0" class="ucImageSlide" style="background-image:url(https://www.kbwchambers.com/assets/media/ourbarristers_01.jpg); background-repeat: no-repeat; background-position:center; background-size:cover;">
<div class="container">
<div id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_0_ulStyle_0" class="row  cAlignLeft cAlignBot">
    <div id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_0_liStyle_0" class="col-6">
        <h2 id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_0_dvHeading_0" class="element-heading  ColorWH  ">Our Barristers</h2>
        <div id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_0_dvDesc_0" class="element-description p  ColorWH  ">Talented and trusted</div>

    </div>
</div>
</div>
</div>
<div id="MainContent_ucFormControls_rptRows_rptElements_0_ctl00_0_pnlControl_0">


</div>

</div>
        </div>

</div></div></section>

<section class=""><div class="container"><div class="row grid_12">

        <div class="col-12 ">
        <div id="MainContent_ucFormControls_rptRows_rptElements_1_pnlElement_0" class="e_profilelist">


<div class="ucProfileList profileBlock">

<div id="dvSearch" class="searchDrop">
<div class="row align-items-center">
    <div class="col-12">
        <h3><i class="icon-search-small"></i>Search Barristers...</h3>
    </div>

    <div class="col-3 col-sm-4 pl-0">
        <div class="whiteLine">
            <select name="ctl00$MainContent$ucFormControls$rptRows$ctl01$rptElements$ctl00$ctl00$ddlPracticeArea" id="ddlPracticeArea" tabindex="1" class="form-control">
<option value="all">All Practice Areas</option>
<option value="Police">Police</option>
<option value="Business &amp; Property">Business &amp; Property</option>
<option value="Employment &amp; Equality">Employment &amp; Equality</option>
<option value="Crime">Crime</option>
<option value="Family">Family</option>
<option value="Public &amp; Regulatory">Public &amp; Regulatory</option>
<option value="Personal Injury">Personal Injury</option>
<option value="Clinical Negligence">Clinical Negligence</option>
<option value="Court of Protection">Court of Protection</option>
<option value="Sports Law">Sports Law</option>

</select>
        </div>
    </div>
    <div class="col-3 col-sm-4 pl-0">
        <div class="whiteLine">
            <input name="ctl00$MainContent$ucFormControls$rptRows$ctl01$rptElements$ctl00$ctl00$txtProfilName" type="text" maxlength="50" id="txtProfilName" tabindex="2" class="input wide form-control" placeholder="Search By Name" autocomplete="firstname">
        </div>
    </div>
    <div class="col-6 col-sm-4 col-md-4 col-lg-4 text-right">
        <a id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_btnSearch_0" onclick="fnSearchByArea();" class="button--" tabindex="7">Search</a>
    </div>
</div>
</div>
<div id="filters" class="filtersNav dnone">
<a id="all" class="link filter all active" data-filter="all">All</a>

        <a id="police" class="link filter police" data-rel="Police" data-filter=".Police">Police</a>

        <a id="business_property" class="link filter business_property" data-rel="Business_Property" data-filter=".Business_Property">Business &amp; Property</a>

        <a id="employment_equality" class="link filter employment_equality" data-rel="Employment_Equality" data-filter=".Employment_Equality">Employment &amp; Equality</a>

        <a id="crime" class="link filter crime" data-rel="Crime" data-filter=".Crime">Crime</a>

        <a id="family" class="link filter family" data-rel="Family" data-filter=".Family">Family</a>

        <a id="public_regulatory" class="link filter public_regulatory" data-rel="Public_Regulatory" data-filter=".Public_Regulatory">Public &amp; Regulatory</a>

        <a id="personal_injury" class="link filter personal_injury" data-rel="Personal_Injury" data-filter=".Personal_Injury">Personal Injury</a>

        <a id="clinical_negligence" class="link filter clinical_negligence" data-rel="Clinical_Negligence" data-filter=".Clinical_Negligence">Clinical Negligence</a>

        <a id="court_of_protection" class="link filter court_of_protection" data-rel="Court_of_Protection" data-filter=".Court_of_Protection">Court of Protection</a>

        <a id="sports_law" class="link filter sports_law" data-rel="Sports_Law" data-filter=".Sports_Law">Sports Law</a>

</div>
<div id="portfolio" class="row no-gutters">

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_0" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime" data-rel="web" data-name="David Brooke KC" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/david-brooke-kc">
                        <img src="https://www.kbwchambers.com/assets/media/davidbrookekc_07.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_0" class="image--responsive" alt="David Brooke KC" title="David Brooke KC">
                        <div class="profile_name">
                            <h3>David Brooke KC</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_0" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;1990</span>
                        <a href="https://www.kbwchambers.com/barrister/david-brooke-kc" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_1" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm web bcards" data-rel="web" data-name="Anthony Berry KC" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/anthony-berry-kc">
                        <img src="https://www.kbwchambers.com/assets/media/anthonyberrykc_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_1" class="image--responsive" alt="Anthony Berry KC" title="Anthony Berry KC">
                        <div class="profile_name">
                            <h3>Anthony Berry KC</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_1" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;1985</span>
                        <a href="https://www.kbwchambers.com/barrister/anthony-berry-kc" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_2" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime" data-rel="web" data-name="Nicholas Campbell KC" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/nicholas-campbell-kc">
                        <img src="https://www.kbwchambers.com/assets/media/nicholascampbellkc_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_2" class="image--responsive" alt="Nicholas Campbell KC" title="Nicholas Campbell KC">
                        <div class="profile_name">
                            <h3>Nicholas Campbell KC</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_2" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;1978</span>
                        <a href="https://www.kbwchambers.com/barrister/nicholas-campbell-kc" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_3" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime Personal_Injury Public_Regulatory Police" data-rel="web" data-name="Adrian Waterman KC" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/adrian-waterman-kc">
                        <img src="https://www.kbwchambers.com/assets/media/adrianwatermankc_02.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_3" class="image--responsive" alt="Adrian Waterman KC" title="Adrian Waterman KC">
                        <div class="profile_name">
                            <h3>Adrian Waterman KC</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_3" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;1988</span>
                        <a href="https://www.kbwchambers.com/barrister/adrian-waterman-kc" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_4" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Business_Property Public_Regulatory" data-rel="web" data-name="Gregory Jones KC" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/gregory-jones-kc">
                        <img src="https://www.kbwchambers.com/assets/media/gregoryjoneskc_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_4" class="image--responsive" alt="Gregory Jones KC" title="Gregory Jones KC">
                        <div class="profile_name">
                            <h3>Gregory Jones KC</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_4" style="display:none;">Business &amp; Property</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;1991</span>
                        <a href="https://www.kbwchambers.com/barrister/gregory-jones-kc" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_5" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime" data-rel="web" data-name="Peter Glenser KC" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/peter-glenser-kc">
                        <img src="https://www.kbwchambers.com/assets/media/peterglenserkc_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_5" class="image--responsive" alt="Peter Glenser KC" title="Peter Glenser KC">
                        <div class="profile_name">
                            <h3>Peter Glenser KC</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_5" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;1993</span>
                        <a href="https://www.kbwchambers.com/barrister/peter-glenser-kc" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_6" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm web bcards" data-rel="web" data-name="Nicholas Rhodes KC" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/nicholas-rhodes-kc">
                        <img src="https://www.kbwchambers.com/assets/media/nicholasrhodeskc_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_6" class="image--responsive" alt="Nicholas Rhodes KC" title="Nicholas Rhodes KC">
                        <div class="profile_name">
                            <h3>Nicholas Rhodes KC</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_6" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;1981</span>
                        <a href="https://www.kbwchambers.com/barrister/nicholas-rhodes-kc" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_7" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Family" data-rel="web" data-name="June Venters KC" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/june-venters-kc">
                        <img src="https://www.kbwchambers.com/assets/media/juneventerskc_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_7" class="image--responsive" alt="June Venters KC" title="June Venters KC">
                        <div class="profile_name">
                            <h3>June Venters KC</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_7" style="display:none;">Family</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2006</span>
                        <a href="https://www.kbwchambers.com/barrister/june-venters-kc" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_8" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime Family Police" data-rel="web" data-name="Dafydd Enoch KC" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/dafydd-enoch-kc">
                        <img src="https://www.kbwchambers.com/assets/media/dafyddenochkc_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_8" class="image--responsive" alt="Dafydd Enoch KC" title="Dafydd Enoch KC">
                        <div class="profile_name">
                            <h3>Dafydd Enoch KC</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_8" style="display:none;">0</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;1985</span>
                        <a href="https://www.kbwchambers.com/barrister/dafydd-enoch-kc" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_9" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Business_Property Public_Regulatory" data-rel="web" data-name="Richard Honey KC" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/richard-honey-kc">
                        <img src="https://www.kbwchambers.com/assets/media/roberthoneyqc_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_9" class="image--responsive" alt="Richard Honey KC" title="Richard Honey KC">
                        <div class="profile_name">
                            <h3>Richard Honey KC</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_9" style="display:none;">Business &amp; Property</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2003</span>
                        <a href="https://www.kbwchambers.com/barrister/richard-honey-kc" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_10" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Personal_Injury Employment_Equality Police" data-rel="web" data-name="Simon Mallett" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/simon-mallett">
                        <img src="https://www.kbwchambers.com/assets/media/simonmallett_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_10" class="image--responsive" alt="Simon Mallett" title="Simon Mallett">
                        <div class="profile_name">
                            <h3>Simon Mallett</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_10" style="display:none;">Police</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;1986</span>
                        <a href="https://www.kbwchambers.com/barrister/simon-mallett" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_11" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime" data-rel="web" data-name="Richard Barradell" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/richard-barradell">
                        <img src="https://www.kbwchambers.com/assets/media/richardbarradell_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_11" class="image--responsive" alt="Richard Barradell" title="Richard Barradell">
                        <div class="profile_name">
                            <h3>Richard Barradell</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_11" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;1990</span>
                        <a href="https://www.kbwchambers.com/barrister/richard-barradell" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_12" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime" data-rel="web" data-name="Shaun Dodds" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/shaun-dodds">
                        <img src="https://www.kbwchambers.com/assets/media/shaundodds_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_12" class="image--responsive" alt="Shaun Dodds" title="Shaun Dodds">
                        <div class="profile_name">
                            <h3>Shaun Dodds</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_12" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;1990</span>
                        <a href="https://www.kbwchambers.com/barrister/shaun-dodds" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_13" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime" data-rel="web" data-name="Christine A Egerton" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/christine-a-egerton">
                        <img src="https://www.kbwchambers.com/assets/media/christineaegerton_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_13" class="image--responsive" alt="Christine A Egerton" title="Christine A Egerton">
                        <div class="profile_name">
                            <h3>Christine A Egerton</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_13" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;1992</span>
                        <a href="https://www.kbwchambers.com/barrister/christine-a-egerton" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_14" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Business_Property Employment_Equality" data-rel="web" data-name="Robert Toone" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/robert-toone">
                        <img src="https://www.kbwchambers.com/assets/media/roberttoone_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_14" class="image--responsive" alt="Robert Toone" title="Robert Toone">
                        <div class="profile_name">
                            <h3>Robert Toone</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_14" style="display:none;">Business &amp; Property</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;1993</span>
                        <a href="https://www.kbwchambers.com/barrister/robert-toone" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_15" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime" data-rel="web" data-name="Amanda Denton" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/amanda-denton">
                        <img src="https://www.kbwchambers.com/assets/media/amandadenton_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_15" class="image--responsive" alt="Amanda Denton" title="Amanda Denton">
                        <div class="profile_name">
                            <h3>Amanda Denton</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_15" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;1993</span>
                        <a href="https://www.kbwchambers.com/barrister/amanda-denton" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_16" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime" data-rel="web" data-name="Paul Cleasby" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/paul-cleasby">
                        <img src="https://www.kbwchambers.com/assets/media/paulcleasby_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_16" class="image--responsive" alt="Paul Cleasby" title="Paul Cleasby">
                        <div class="profile_name">
                            <h3>Paul Cleasby</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_16" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;1994</span>
                        <a href="https://www.kbwchambers.com/barrister/paul-cleasby" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_17" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime Public_Regulatory" data-rel="web" data-name="Rupert Doswell" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/rupert-doswell">
                        <img src="https://www.kbwchambers.com/assets/media/rupertdoswell_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_17" class="image--responsive" alt="Rupert Doswell" title="Rupert Doswell">
                        <div class="profile_name">
                            <h3>Rupert Doswell</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_17" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;1996</span>
                        <a href="https://www.kbwchambers.com/barrister/rupert-doswell" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_18" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime Police" data-rel="web" data-name="Matthew Bean" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/matthew-bean">
                        <img src="https://www.kbwchambers.com/assets/media/matthewbean_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_18" class="image--responsive" alt="Matthew Bean" title="Matthew Bean">
                        <div class="profile_name">
                            <h3>Matthew Bean</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_18" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;1997</span>
                        <a href="https://www.kbwchambers.com/barrister/matthew-bean" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_19" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm web bcards" data-rel="web" data-name="Zaiban Alam" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/zaiban-alam">
                        <img src="https://www.kbwchambers.com/assets/media/zaibanalam_01_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_19" class="image--responsive" alt="Zaiban Alam" title="Zaiban Alam">
                        <div class="profile_name">
                            <h3>Zaiban Alam</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_19" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;1998</span>
                        <a href="https://www.kbwchambers.com/barrister/zaiban-alam" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_20" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime" data-rel="web" data-name="Tony Dunne" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/tony-dunne">
                        <img src="https://www.kbwchambers.com/assets/media/tommydunne_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_20" class="image--responsive" alt="Tony Dunne" title="Tony Dunne">
                        <div class="profile_name">
                            <h3>Tony Dunne</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_20" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;1999</span>
                        <a href="https://www.kbwchambers.com/barrister/tony-dunne" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_21" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime" data-rel="web" data-name="Rebecca Stevens" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/rebecca-stevens">
                        <img src="https://www.kbwchambers.com/assets/media/rebeccastevens_02.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_21" class="image--responsive" alt="Rebecca Stevens" title="Rebecca Stevens">
                        <div class="profile_name">
                            <h3>Rebecca Stevens</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_21" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;1999</span>
                        <a href="https://www.kbwchambers.com/barrister/rebecca-stevens" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_22" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime Public_Regulatory Police" data-rel="web" data-name="Ian Mullarkey" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/ian-mullarkey">
                        <img src="https://www.kbwchambers.com/assets/media/ian-mullarkey_02.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_22" class="image--responsive" alt="Ian Mullarkey" title="Ian Mullarkey">
                        <div class="profile_name">
                            <h3>Ian Mullarkey</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_22" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2003</span>
                        <a href="https://www.kbwchambers.com/barrister/ian-mullarkey" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_23" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Employment_Equality Family Public_Regulatory Police" data-rel="web" data-name="Oliver Thorne" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/oliver-thorne">
                        <img src="https://www.kbwchambers.com/assets/media/oliverthorne_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_23" class="image--responsive" alt="Oliver Thorne" title="Oliver Thorne">
                        <div class="profile_name">
                            <h3>Oliver Thorne</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_23" style="display:none;">Police</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2003</span>
                        <a href="https://www.kbwchambers.com/barrister/oliver-thorne" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_24" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime Police" data-rel="web" data-name="Tamara Pawson" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/tamara-pawson">
                        <img src="https://www.kbwchambers.com/assets/media/tamarapawson_02.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_24" class="image--responsive" alt="Tamara Pawson" title="Tamara Pawson">
                        <div class="profile_name">
                            <h3>Tamara Pawson</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_24" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2003</span>
                        <a href="https://www.kbwchambers.com/barrister/tamara-pawson" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_25" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime" data-rel="web" data-name="Katy Rafter" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/katy-rafter">
                        <img src="https://www.kbwchambers.com/assets/media/katyrafter_01_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_25" class="image--responsive" alt="Katy Rafter" title="Katy Rafter">
                        <div class="profile_name">
                            <h3>Katy Rafter</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_25" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2005</span>
                        <a href="https://www.kbwchambers.com/barrister/katy-rafter" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_26" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime" data-rel="web" data-name="Ed Moss" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/ed-moss">
                        <img src="https://www.kbwchambers.com/assets/media/ed-moss_02.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_26" class="image--responsive" alt="Ed Moss" title="Ed Moss">
                        <div class="profile_name">
                            <h3>Ed Moss</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_26" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2005</span>
                        <a href="https://www.kbwchambers.com/barrister/ed-moss" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_27" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime Public_Regulatory Police" data-rel="web" data-name="Conor Quinn" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/conor-quinn">
                        <img src="https://www.kbwchambers.com/assets/media/conorquinn_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_27" class="image--responsive" alt="Conor Quinn" title="Conor Quinn">
                        <div class="profile_name">
                            <h3>Conor Quinn</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_27" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2007</span>
                        <a href="https://www.kbwchambers.com/barrister/conor-quinn" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_28" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Public_Regulatory Police" data-rel="web" data-name="Olivia Checa-Dover" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/olivia-checa-dover">
                        <img src="https://www.kbwchambers.com/assets/media/oliviacheca-dover_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_28" class="image--responsive" alt="Olivia Checa-Dover" title="Olivia Checa-Dover">
                        <div class="profile_name">
                            <h3>Olivia Checa-Dover</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_28" style="display:none;">Police</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2007</span>
                        <a href="https://www.kbwchambers.com/barrister/olivia-checa-dover" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_29" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime Public_Regulatory Police" data-rel="web" data-name="Deborah Smithies" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/deborah-smithies">
                        <img src="https://www.kbwchambers.com/assets/media/deborah-smithies_03.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_29" class="image--responsive" alt="Deborah Smithies" title="Deborah Smithies">
                        <div class="profile_name">
                            <h3>Deborah Smithies</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_29" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2008</span>
                        <a href="https://www.kbwchambers.com/barrister/deborah-smithies" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_30" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Family Public_Regulatory Court_of_Protection" data-rel="web" data-name="Manisha Marwaha" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/manisha-marwaha">
                        <img src="https://www.kbwchambers.com/assets/media/manishamarwaha_01_05.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_30" class="image--responsive" alt="Manisha Marwaha" title="Manisha Marwaha">
                        <div class="profile_name">
                            <h3>Manisha Marwaha</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_30" style="display:none;">Family</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2009</span>
                        <a href="https://www.kbwchambers.com/barrister/manisha-marwaha" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_31" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Clinical_Negligence Personal_Injury Police" data-rel="web" data-name="Joseph Wynn" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/joseph-wynn">
                        <img src="https://www.kbwchambers.com/assets/media/josephwynn_01_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_31" class="image--responsive" alt="Joseph Wynn" title="Joseph Wynn">
                        <div class="profile_name">
                            <h3>Joseph Wynn</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_31" style="display:none;">Personal Injury</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2011</span>
                        <a href="https://www.kbwchambers.com/barrister/joseph-wynn" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_32" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime Police" data-rel="web" data-name="Stephen Littlewood" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/stephen-littlewood">
                        <img src="https://www.kbwchambers.com/assets/media/stephenlittlewood_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_32" class="image--responsive" alt="Stephen Littlewood" title="Stephen Littlewood">
                        <div class="profile_name">
                            <h3>Stephen Littlewood</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_32" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2013</span>
                        <a href="https://www.kbwchambers.com/barrister/stephen-littlewood" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_33" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime Personal_Injury Family Police" data-rel="web" data-name="Becky Jane" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/becky-jane">
                        <img src="https://www.kbwchambers.com/assets/media/beckyjane_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_33" class="image--responsive" alt="Becky Jane" title="Becky Jane">
                        <div class="profile_name">
                            <h3>Becky Jane</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_33" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2013</span>
                        <a href="https://www.kbwchambers.com/barrister/becky-jane" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_34" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime Clinical_Negligence Personal_Injury Employment_Equality Public_Regulatory Police" data-rel="web" data-name="Daniel Penman" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/daniel-penman">
                        <img src="https://www.kbwchambers.com/assets/media/daniel-penman_02.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_34" class="image--responsive" alt="Daniel Penman" title="Daniel Penman">
                        <div class="profile_name">
                            <h3>Daniel Penman</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_34" style="display:none;">Police</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2014</span>
                        <a href="https://www.kbwchambers.com/barrister/daniel-penman" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_35" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime" data-rel="web" data-name="Stephen Welford" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/stephen-welford">
                        <img src="https://www.kbwchambers.com/assets/media/stephenwelford_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_35" class="image--responsive" alt="Stephen Welford" title="Stephen Welford">
                        <div class="profile_name">
                            <h3>Stephen Welford</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_35" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2014</span>
                        <a href="https://www.kbwchambers.com/barrister/stephen-welford" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_36" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime Personal_Injury Business_Property Police" data-rel="web" data-name="Adam Keenaghan" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/adam-keenaghan">
                        <img src="https://www.kbwchambers.com/assets/media/adamkeenaghan_02.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_36" class="image--responsive" alt="Adam Keenaghan" title="Adam Keenaghan">
                        <div class="profile_name">
                            <h3>Adam Keenaghan</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_36" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2015</span>
                        <a href="https://www.kbwchambers.com/barrister/adam-keenaghan" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_37" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime Family Public_Regulatory Police" data-rel="web" data-name="David Hewitt" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/david-hewitt">
                        <img src="https://www.kbwchambers.com/assets/media/david-hewitt_03.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_37" class="image--responsive" alt="David Hewitt" title="David Hewitt">
                        <div class="profile_name">
                            <h3>David Hewitt</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_37" style="display:none;">Family</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2016</span>
                        <a href="https://www.kbwchambers.com/barrister/david-hewitt" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_38" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Clinical_Negligence Personal_Injury Family" data-rel="web" data-name="Edward Johnson" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/edward-johnson">
                        <img src="https://www.kbwchambers.com/assets/media/edward-johnson_02.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_38" class="image--responsive" alt="Edward Johnson" title="Edward Johnson">
                        <div class="profile_name">
                            <h3>Edward Johnson</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_38" style="display:none;">Family</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2016</span>
                        <a href="https://www.kbwchambers.com/barrister/edward-johnson" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_39" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime Family Police" data-rel="web" data-name="Sarah Hopkinson" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/sarah-hopkinson">
                        <img src="https://www.kbwchambers.com/assets/media/sarahhopkinson_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_39" class="image--responsive" alt="Sarah Hopkinson" title="Sarah Hopkinson">
                        <div class="profile_name">
                            <h3>Sarah Hopkinson</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_39" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2016</span>
                        <a href="https://www.kbwchambers.com/barrister/sarah-hopkinson" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_40" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Court_of_Protection" data-rel="web" data-name="Susan McKendry" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/susan-mckendry">
                        <img src="https://www.kbwchambers.com/assets/media/susanmckendry_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_40" class="image--responsive" alt="Susan McKendry" title="Susan McKendry">
                        <div class="profile_name">
                            <h3>Susan McKendry</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_40" style="display:none;">Court of Protection</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2017</span>
                        <a href="https://www.kbwchambers.com/barrister/susan-mckendry" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_41" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Personal_Injury Family Police" data-rel="web" data-name="Lorena Veale" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/lorena-veale">
                        <img src="https://www.kbwchambers.com/assets/media/lorenaveale_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_41" class="image--responsive" alt="Lorena Veale" title="Lorena Veale">
                        <div class="profile_name">
                            <h3>Lorena Veale</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_41" style="display:none;">Personal Injury</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2017</span>
                        <a href="https://www.kbwchambers.com/barrister/lorena-veale" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_42" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime Personal_Injury Business_Property Family Police" data-rel="web" data-name="Andrew Pickin" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/andrew-pickin">
                        <img src="https://www.kbwchambers.com/assets/media/andrew-pickin_03.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_42" class="image--responsive" alt="Andrew Pickin" title="Andrew Pickin">
                        <div class="profile_name">
                            <h3>Andrew Pickin</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_42" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2017</span>
                        <a href="https://www.kbwchambers.com/barrister/andrew-pickin" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_43" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime Family Police" data-rel="web" data-name="Samuel Ponniah" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/samuel-ponniah">
                        <img src="https://www.kbwchambers.com/assets/media/samponniah_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_43" class="image--responsive" alt="Samuel Ponniah" title="Samuel Ponniah">
                        <div class="profile_name">
                            <h3>Samuel Ponniah</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_43" style="display:none;">Family</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2018</span>
                        <a href="https://www.kbwchambers.com/barrister/samuel-ponniah" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_44" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime Personal_Injury Family Police" data-rel="web" data-name="James Yearsley" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/james-yearsley">
                        <img src="https://www.kbwchambers.com/assets/media/james-yearsley_02.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_44" class="image--responsive" alt="James Yearsley" title="James Yearsley">
                        <div class="profile_name">
                            <h3>James Yearsley</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_44" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2018</span>
                        <a href="https://www.kbwchambers.com/barrister/james-yearsley" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_45" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime Family" data-rel="web" data-name="Jess Butterell" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/jess-butterell">
                        <img src="https://www.kbwchambers.com/assets/media/jessbutterell_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_45" class="image--responsive" alt="Jess Butterell" title="Jess Butterell">
                        <div class="profile_name">
                            <h3>Jess Butterell</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_45" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2018</span>
                        <a href="https://www.kbwchambers.com/barrister/jess-butterell" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_46" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime Family" data-rel="web" data-name="Damian Broadbent" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/damian-broadbent">
                        <img src="https://www.kbwchambers.com/assets/media/damien-broadbent_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_46" class="image--responsive" alt="Damian Broadbent" title="Damian Broadbent">
                        <div class="profile_name">
                            <h3>Damian Broadbent</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_46" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2019</span>
                        <a href="https://www.kbwchambers.com/barrister/damian-broadbent" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_47" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime Family Police" data-rel="web" data-name="Jennifer Coldham " style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/jennifer-coldham">
                        <img src="https://www.kbwchambers.com/assets/media/jennifercoldham_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_47" class="image--responsive" alt="Jennifer Coldham " title="Jennifer Coldham ">
                        <div class="profile_name">
                            <h3>Jennifer Coldham </h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_47" style="display:none;">Family</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2019</span>
                        <a href="https://www.kbwchambers.com/barrister/jennifer-coldham" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_48" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime Police" data-rel="web" data-name="Sam Sharp" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/sam-sharp">
                        <img src="https://www.kbwchambers.com/assets/media/samsharp_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_48" class="image--responsive" alt="Sam Sharp" title="Sam Sharp">
                        <div class="profile_name">
                            <h3>Sam Sharp</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_48" style="display:none;">Police</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2019</span>
                        <a href="https://www.kbwchambers.com/barrister/sam-sharp" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_49" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm Crime Personal_Injury Business_Property Sports_Law Police" data-rel="web" data-name="Daniel Ingham" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/daniel-ingham">
                        <img src="https://www.kbwchambers.com/assets/media/daniel-ingham_02.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_49" class="image--responsive" alt="Daniel Ingham" title="Daniel Ingham">
                        <div class="profile_name">
                            <h3>Daniel Ingham</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_49" style="display:none;">Crime</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2020</span>
                        <a href="https://www.kbwchambers.com/barrister/daniel-ingham" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_50" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm web bcards" data-rel="web" data-name="Ben Sayers" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/ben-sayers">
                        <img src="https://www.kbwchambers.com/assets/media/bensayers_01.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_50" class="image--responsive" alt="Ben Sayers" title="Ben Sayers">
                        <div class="profile_name">
                            <h3>Ben Sayers</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_50" style="display:block;">Pupil</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2023</span>
                        <a href="https://www.kbwchambers.com/barrister/ben-sayers" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_51" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm web bcards" data-rel="web" data-name="Louise Gillett" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/louise-gillett">
                        <img src="https://www.kbwchambers.com/assets/media/louisegillet_02.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_51" class="image--responsive" alt="Louise Gillett" title="Louise Gillett">
                        <div class="profile_name">
                            <h3>Louise Gillett</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_51" style="display:block;">Pupil</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2023</span>
                        <a href="https://www.kbwchambers.com/barrister/louise-gillett" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

        <div id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_dvProfile_52" class="dvProfile col-3 col-md-4 col-sm-6 tile scale-anm web bcards" data-rel="web" data-name="Mahdev Singh Sachdev" style="display: inline-block;" data-bound="">
            <div class="rptProfile mb-3">
                <div class="element-thumb">
                    <a href="https://www.kbwchambers.com/barrister/mahdev-singh-sachdev">
                        <img src="https://www.kbwchambers.com/assets/media/mahdevsachdev_02.jpg" id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ImgProfile_52" class="image--responsive" alt="Mahdev Singh Sachdev" title="Mahdev Singh Sachdev">
                        <div class="profile_name">
                            <h3>Mahdev Singh Sachdev</h3>
                            <span id="MainContent_ucFormControls_rptRows_rptElements_1_ctl00_0_rptProfiles_0_ltrAreaName_52" style="display:block;">Pupil</span>
                        </div>
                    </a>
                </div>
                <div class="element-textblock">
                    <p>
                        <span>Year of call:&nbsp;2023</span>
                        <a href="https://www.kbwchambers.com/barrister/mahdev-singh-sachdev" title="" class=" ">View Profile</a>
                    </p>
                    <p>
                        <span>Send an Email</span>
                        <a href="mailto:clerks@kbwchambers.com">
                            <svg>
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#arrow-right-thin"></use></svg></a>
                    </p>
                </div>
            </div>
        </div>

</div>
</div>



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
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.kbwchambers.com/barristers#closeRound"></use></svg>
        </span>
        <div class="container">

            <div class="form">
                <input type="hidden" name="ctl00$MainContent$ucFormControls$ctl00$hdnEPageValue" id="MainContent_ucFormControls_ctl00_hdnEPageValue">
                <input type="hidden" name="ctl00$MainContent$ucFormControls$ctl00$hdnEViewType" id="MainContent_ucFormControls_ctl00_hdnEViewType" value="Popup">
                <div class="row row--max2rem">
                    <div class="col-12">
                        <div class="mb-2">
                            <label for="txtFirstNameGE">First Name<span class="stk-req">*</span></label>
                            <input name="ctl00$MainContent$ucFormControls$ctl00$txtFirstNameGE" type="text" maxlength="50" id="txtFirstNameGE" tabindex="2" class="input wide form-control" placeholder="First Name" autocomplete="firstname">
                        </div>
                        <div class=" mb-2">
                            <label for="txtLastNameGE">Last Name<span class="stk-req">*</span></label>
                            <input name="ctl00$MainContent$ucFormControls$ctl00$txtLastNameGE" type="text" maxlength="50" id="txtLastNameGE" tabindex="3" class="input wide form-control" placeholder="Last Name" autocomplete="on">
                        </div>

                        <div class="mb-2">
                            <label for="txtEmailGE">Company Email<span class="stk-req">*</span></label>

                            <input name="ctl00$MainContent$ucFormControls$ctl00$txtEmailGE" type="text" maxlength="50" id="txtEmailGE" tabindex="4" class="input wide form-control" placeholder="Company Email" autocomplete="on">
                        </div>
                        <div class="mb-2">
                            <label for="txtPhoneNumberGE">Phone Number<span class="stk-req">*</span></label>
                            <input name="ctl00$MainContent$ucFormControls$ctl00$txtPhoneNumberGE" type="text" maxlength="12" id="txtPhoneNumberGE" tabindex="5" class="input wide form-control  numeric" placeholder="Phone Number" autocomplete="on">

                        </div>
                        <div class="mb-2">
                            <label for="txtCompanyGE">Company Name<span class="stk-req">*</span></label>
                            <input name="ctl00$MainContent$ucFormControls$ctl00$txtCompanyGE" type="text" maxlength="100" id="txtCompanyGE" class="input wide form-control" placeholder="Company Name">
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
                            <textarea name="ctl00$MainContent$ucFormControls$ctl00$txtMessageGE" rows="2" cols="20" id="txtMessageGE" tabindex="7" class="input wide form-control" maxlength="500" style="height: 64px;"></textarea>
                        </div>

                        <div class="mb-2">
                            <div class="row">
                                <div class="col-6 hide767">
                                    &nbsp;
                                </div>
                                <div class="col-6">
                                    <a onclick="return ValidateEnquiryStep();" id="MainContent_ucFormControls_ctl00_btnSaveEnquiry" tabindex="7" class="button--greenLight text-center wide" href="javascript:__doPostBack('ctl00$MainContent$ucFormControls$ctl00$btnSaveEnquiry','')">Submit</a>
                                    <div id="MainContent_ucFormControls_ctl00_divProcess" style="display: none; text-align: center" class="button--primary arrowButton wide">
                                        <img src="https://www.kbwchambers.com/images/btn-loader.gif" alt="Loading">
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
@endsection
