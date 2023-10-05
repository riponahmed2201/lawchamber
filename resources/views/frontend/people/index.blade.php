@extends('frontend.master')

@section('frontend_title', 'People')

@section('frontend_main_content')
    <section class="container">
        <div class="animsition" data-animsition-in-class="fade-in" data-animsition-in-duration="800"
            data-animsition-out-class="fade-out" data-animsition-out-duration="800"
            style="animation-duration: 800ms; opacity: 1;">
            <div id="page-full-width-homepage" class="full-width person-detail" role="main">
                <div id="featuredImage" class="featured-image__header--image-wrapper"
                    style="position: relative; z-index: 0; background: none;">

                    <div class="featured-image__header--text-outer-wrapper row">
                        <div class="featured-image__header--text-wrapper">
                            <div class="featured-image__header--text-inner-wrapper">
                                <div class="color__block vellum">
                                    <h1 class="page__header black">
                                        People
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="backstretch"
                        style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; z-index: -999998; position: absolute; width: 100%; height: 215px;">
                        <img src="{{ asset('assets/frontend/images/people/banner-people.jpg') }}"
                            style="position: absolute; margin: 0px; padding: 0px; border: none; max-height: none; max-width: none; z-index: -999999; width: 100%; height: 234.52px; left: 0px; top: -9.75991px;">
                    </div>
                </div>
                <div class="row">
                    <div class="experience__wrapper row body__wrapper columns small-12 medium-12 large-12">
                        <div class="columns medium-3 large-2 small-12 sidebar__on-scroll--fixed">

                            <a class="header-link" href="/people">
                                <h4 class=" title__text hide-for-small-only">
                                    People
                                </h4>
                            </a>


                            <a class="header-link" href="/people">
                                <h4 class=" show-for-small-only  list__header mobile">
                                    People
                                </h4>
                            </a>

                            <span class="show-for-small-only mobile__sidebar--expander top__menu"
                                data-show-target="sidebarMobileAccordion"></span>
                            <span class="list-divider hide-for-small-only"></span>
                            <span class="list-divider mobile show-for-small-only"></span>

                            <div id="sidebarMobileAccordion" class="sidebar-items__wrapper">

                                <!-- Start Head Of Chambers -->
                                @foreach ($designations as $desktop_designation)
                                    <a class=" hide-for-small-only link sidebar__link"
                                        href="?designation={{ $desktop_designation->slug }}">
                                        {{ $desktop_designation->designation_name }}
                                    </a>

                                    <!-- For Mobile Menu-->
                                    <a class=" show-for-small-only link sidebar__link mobile "
                                        href="?designation={{ $desktop_designation->slug }}">
                                        {{ $desktop_designation->designation_name }}
                                    </a>
                                @endforeach
                                <!-- End Head Of Chambers -->

                            </div>

                        </div>
                        <div class="columns small-12 medium-9 large-10">
                            <p class="title__text mobile__centered">
                                Head Of Chambers
                            </p>
                            <div class="inline-block full__width">
                                {{-- <div class="row">
                                    <div class="columns large-6 medium-6 x-large-6 small-12 ">
                                        <div class="portrait__wrapper text person">
                                            <div class="table__wrapper">
                                                <div class="table__inner">
                                                    <div class="columns large-6 medium-6 x-large-6 small-12">
                                                        <div class="portrait__wrapper director">
                                                            <div class="table__wrapper">
                                                                <div class="table__inner">
                                                                    <img class="people-grid"
                                                                        src="https://www.brownrudnickcenter.com/wp-content/uploads/2022/06/Guglielmotti_Vincent_Bio.jpg">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="columns large-6 medium-6 x-large-6 small-12 people__grid--text-container">
                                                        <div class="table__wrapper">
                                                            <div class="table__inner">

                                                                <a target="_blank"
                                                                    href="https://brownrudnick.com/people/vincent-j-guglielmotti/"
                                                                    class="text-align__left mobile__centered people__details title__text smaller">
                                                                    Vincent J. Guglielmotti
                                                                </a>

                                                                <p
                                                                    class="text-align__left mobile__centered people__details tag__text">
                                                                    BOARD CHAIR
                                                                </p>
                                                                <span
                                                                    class="about__deatils mobile__centered list-divider red"></span>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    P: +1.212.209.4880
                                                                </p>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    F: +1.212.938.2905
                                                                </p>

                                                                <a class="email--people--link text-align__left mobile__centered red link tag__text thin"
                                                                    href="mailto:vguglielmotti@brownrudnick.com">
                                                                    vguglielmotti@brownrudnick.com
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div> --}}
                                <div class="row">
                                    <div class="columns large-12 medium-12 x-large-6 small-12 ">
                                        <div class="portrait__wrapper text person">
                                            <div class="table__wrapper">
                                                <div class="table__inner">
                                                    <div class="columns large-7 medium-7 x-large-6 small-12">
                                                        <div class="portrait__wrapper director">
                                                            <div class="table__wrapper">
                                                                <div class="table__inner">
                                                                    <img class="people-grid"
                                                                        src="https://www.brownrudnickcenter.com/wp-content/uploads/2016/12/Jonas_Jeff_Bio.jpg">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="columns large-5 medium-5 x-large-6 small-12 people__grid--text-container">
                                                        <div class="table__wrapper">
                                                            <div class="table__inner">

                                                                <a target="_blank"
                                                                    href="https://brownrudnick.com/people/jeffrey-l-jonas/"
                                                                    class="text-align__left mobile__centered people__details title__text smaller">
                                                                    Jeffrey L. Jonas
                                                                </a>

                                                                <p
                                                                    class="text-align__left mobile__centered people__details tag__text">
                                                                    PRESIDENT
                                                                </p>
                                                                <span
                                                                    class="about__deatils mobile__centered list-divider red"></span>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    P: +1.617.856.8577
                                                                </p>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    F: +1.617.289.0434
                                                                </p>

                                                                <a class="email--people--link text-align__left mobile__centered red link tag__text thin"
                                                                    href="mailto:jjonas@brownrudnick.com">
                                                                    jjonas@brownrudnick.com
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="columns large-12 medium-12 x-large-6 small-12 ">
                                        <div class="portrait__wrapper text person">
                                            <div class="table__wrapper">
                                                <div class="table__inner">
                                                    <div class="columns large-7 medium-7 x-large-6 small-12">
                                                        <div class="portrait__wrapper director">
                                                            <div class="table__wrapper">
                                                                <div class="table__inner">
                                                                    <img class="people-grid"
                                                                        src="https://www.brownrudnickcenter.com/wp-content/uploads/2023/03/Katy-Gardner.png">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="columns large-5 medium-5 x-large-6 small-12 people__grid--text-container">
                                                        <div class="table__wrapper">
                                                            <div class="table__inner">

                                                                <a target="_blank"
                                                                    href="https://brownrudnick.com/people/catherine-katy-gardner/"
                                                                    class="text-align__left mobile__centered people__details title__text smaller">
                                                                    Catherine Gardner
                                                                </a>

                                                                <p
                                                                    class="text-align__left mobile__centered people__details tag__text">
                                                                    VICE PRESIDENT
                                                                </p>
                                                                <span
                                                                    class="about__deatils mobile__centered list-divider red"></span>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    P: +1.212.209.4922
                                                                </p>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    F: +1.617.289.0691
                                                                </p>

                                                                <a class="email--people--link text-align__left mobile__centered red link tag__text thin"
                                                                    href="mailto:cgardner@brownrudnick.com">
                                                                    cgardner@brownrudnick.com
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="columns large-12 medium-12 x-large-6 small-12 ">
                                        <div class="portrait__wrapper text person">
                                            <div class="table__wrapper">
                                                <div class="table__inner">
                                                    <div class="columns large-7 medium-7 x-large-6 small-12">
                                                        <div class="portrait__wrapper director">
                                                            <div class="table__wrapper">
                                                                <div class="table__inner">
                                                                    <img class="people-grid"
                                                                        src="https://www.brownrudnickcenter.com/wp-content/uploads/2023/03/Wasserman_Steve_Bio.jpg">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="columns large-5 medium-5 x-large-6 small-12 people__grid--text-container">
                                                        <div class="table__wrapper">
                                                            <div class="table__inner">

                                                                <a target="_blank"
                                                                    href="https://brownrudnick.com/people/steven-f-wasserman/"
                                                                    class="text-align__left mobile__centered people__details title__text smaller">
                                                                    Steven F. Wasserman
                                                                </a>

                                                                <p
                                                                    class="text-align__left mobile__centered people__details tag__text">
                                                                    TREASURER
                                                                </p>
                                                                <span
                                                                    class="about__deatils mobile__centered list-divider red"></span>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    P: +1.212.209.4999
                                                                </p>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    F: +1.212.938.2999
                                                                </p>

                                                                <a class="email--people--link text-align__left mobile__centered red link tag__text thin"
                                                                    href="mailto:swasserman@brownrudnick.com">
                                                                    swasserman@brownrudnick.com
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="columns large-12 medium-12 x-large-6 small-12 ">
                                        <div class="portrait__wrapper text person">
                                            <div class="table__wrapper">
                                                <div class="table__inner">
                                                    <div class="columns large-7 medium-7 x-large-6 small-12">
                                                        <div class="portrait__wrapper director">
                                                            <div class="table__wrapper">
                                                                <div class="table__inner">
                                                                    <img class="people-grid"
                                                                        src="https://www.brownrudnickcenter.com/wp-content/uploads/2023/03/Andreas-Andromalos.png">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="columns large-5 medium-5 x-large-6 small-12 people__grid--text-container">
                                                        <div class="table__wrapper">
                                                            <div class="table__inner">

                                                                <a target="_blank"
                                                                    href="https://brownrudnick.com/people/andreas-p-andromalos/"
                                                                    class="text-align__left mobile__centered people__details title__text smaller">
                                                                    Andreas Andromalos
                                                                </a>

                                                                <p
                                                                    class="text-align__left mobile__centered people__details tag__text">

                                                                </p>
                                                                <span
                                                                    class="about__deatils mobile__centered list-divider red"></span>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    P: +1.617.856.9229
                                                                </p>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    F: +1.617.289.0495
                                                                </p>

                                                                <a class="email--people--link text-align__left mobile__centered red link tag__text thin"
                                                                    href="mailto:aandromalos@brownrudnick.com">
                                                                    aandromalos@brownrudnick.com
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="columns large-12 medium-12 x-large-6 small-12 ">
                                        <div class="portrait__wrapper text person">
                                            <div class="table__wrapper">
                                                <div class="table__inner">
                                                    <div class="columns large-7 medium-7 x-large-6 small-12">
                                                        <div class="portrait__wrapper director">
                                                            <div class="table__wrapper">
                                                                <div class="table__inner">
                                                                    <img class="people-grid"
                                                                        src="https://www.brownrudnickcenter.com/wp-content/uploads/2023/02/Iden-Asl.png">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="columns large-5 medium-5 x-large-6 small-12 people__grid--text-container">
                                                        <div class="table__wrapper">
                                                            <div class="table__inner">

                                                                <a target="_blank"
                                                                    href="https://brownrudnick.com/people/iden-asl/"
                                                                    class="text-align__left mobile__centered people__details title__text smaller">
                                                                    Iden Asl
                                                                </a>

                                                                <p
                                                                    class="text-align__left mobile__centered people__details tag__text">

                                                                </p>
                                                                <span
                                                                    class="about__deatils mobile__centered list-divider red"></span>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    P: +44.20.7851.6029
                                                                </p>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    F: +44.20.7851.6100
                                                                </p>

                                                                <a class="email--people--link text-align__left mobile__centered red link tag__text thin"
                                                                    href="mailto:iasl@brownrudnick.com">
                                                                    iasl@brownrudnick.com
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="columns large-12 medium-12 x-large-6 small-12 ">
                                        <div class="portrait__wrapper text person">
                                            <div class="table__wrapper">
                                                <div class="table__inner">
                                                    <div class="columns large-7 medium-7 x-large-6 small-12">
                                                        <div class="portrait__wrapper director">
                                                            <div class="table__wrapper">
                                                                <div class="table__inner">
                                                                    <img class="people-grid"
                                                                        src="https://www.brownrudnickcenter.com/wp-content/uploads/2023/03/Lydell-Benson.png">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="columns large-5 medium-5 x-large-6 small-12 people__grid--text-container">
                                                        <div class="table__wrapper">
                                                            <div class="table__inner">

                                                                <a target="_blank"
                                                                    href="https://brownrudnick.com/people/w-lydell-benson-jr/"
                                                                    class="text-align__left mobile__centered people__details title__text smaller">
                                                                    W. Lydell Benson, Jr.
                                                                </a>

                                                                <p
                                                                    class="text-align__left mobile__centered people__details tag__text">

                                                                </p>
                                                                <span
                                                                    class="about__deatils mobile__centered list-divider red"></span>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    P: +1.212.209.4983
                                                                </p>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    F: +1.212.938.2933
                                                                </p>

                                                                <a class="email--people--link text-align__left mobile__centered red link tag__text thin"
                                                                    href="mailto:wlbenson@brownrudnick.com">
                                                                    wlbenson@brownrudnick.com
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="columns large-12 medium-12 x-large-6 small-12 ">
                                        <div class="portrait__wrapper text person">
                                            <div class="table__wrapper">
                                                <div class="table__inner">
                                                    <div class="columns large-7 medium-7 x-large-6 small-12">
                                                        <div class="portrait__wrapper director">
                                                            <div class="table__wrapper">
                                                                <div class="table__inner">
                                                                    <img class="people-grid"
                                                                        src="https://www.brownrudnickcenter.com/wp-content/uploads/2023/03/Nicole-Bouchard.jpg">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="columns large-5 medium-5 x-large-6 small-12 people__grid--text-container">
                                                        <div class="table__wrapper">
                                                            <div class="table__inner">

                                                                <a target="_blank"
                                                                    href="http://www.brownrudnick.com/people/nicole-bouchard/"
                                                                    class="text-align__left mobile__centered people__details title__text smaller">
                                                                    Nicole Bouchard
                                                                </a>

                                                                <p
                                                                    class="text-align__left mobile__centered people__details tag__text">

                                                                </p>
                                                                <span
                                                                    class="about__deatils mobile__centered list-divider red"></span>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    P: +1 212.209.4858
                                                                </p>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    F: +1.212.938.2858
                                                                </p>

                                                                <a class="email--people--link text-align__left mobile__centered red link tag__text thin"
                                                                    href="mailto:nbouchard@brownrudnick.com">
                                                                    nbouchard@brownrudnick.com
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="columns large-12 medium-12 x-large-6 small-12 ">
                                        <div class="portrait__wrapper text person">
                                            <div class="table__wrapper">
                                                <div class="table__inner">
                                                    <div class="columns large-7 medium-7 x-large-6 small-12">
                                                        <div class="portrait__wrapper director">
                                                            <div class="table__wrapper">
                                                                <div class="table__inner">
                                                                    <img class="people-grid"
                                                                        src="https://www.brownrudnickcenter.com/wp-content/uploads/2023/03/Alvin-Carter-1.png">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="columns large-5 medium-5 x-large-6 small-12 people__grid--text-container">
                                                        <div class="table__wrapper">
                                                            <div class="table__inner">

                                                                <a target="_blank"
                                                                    href="https://brownrudnick.com/people/alvin-carter/"
                                                                    class="text-align__left mobile__centered people__details title__text smaller">
                                                                    Alvin B. Carter III
                                                                </a>

                                                                <p
                                                                    class="text-align__left mobile__centered people__details tag__text">

                                                                </p>
                                                                <span
                                                                    class="about__deatils mobile__centered list-divider red"></span>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    P: +1.617.856.8289
                                                                </p>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    F: +1.617.289.0578
                                                                </p>

                                                                <a class="email--people--link text-align__left mobile__centered red link tag__text thin"
                                                                    href="mailto:acarter@brownrudnick.com">
                                                                    acarter@brownrudnick.com
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="columns large-12 medium-12 x-large-6 small-12 ">
                                        <div class="portrait__wrapper text person">
                                            <div class="table__wrapper">
                                                <div class="table__inner">
                                                    <div class="columns large-7 medium-7 x-large-6 small-12">
                                                        <div class="portrait__wrapper director">
                                                            <div class="table__wrapper">
                                                                <div class="table__inner">
                                                                    <img class="people-grid"
                                                                        src="https://www.brownrudnickcenter.com/wp-content/uploads/2023/03/Castaldi_Cathrine_Bio.jpg">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="columns large-5 medium-5 x-large-6 small-12 people__grid--text-container">
                                                        <div class="table__wrapper">
                                                            <div class="table__inner">

                                                                <a target="_blank"
                                                                    href="https://brownrudnick.com/people/cathrine-m-castaldi/"
                                                                    class="text-align__left mobile__centered people__details title__text smaller">
                                                                    Cathrine Castaldi
                                                                </a>

                                                                <p
                                                                    class="text-align__left mobile__centered people__details tag__text">

                                                                </p>
                                                                <span
                                                                    class="about__deatils mobile__centered list-divider red"></span>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    P: +1.949.752.7100
                                                                </p>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    F: +1.949.252.1514
                                                                </p>

                                                                <a class="email--people--link text-align__left mobile__centered red link tag__text thin"
                                                                    href="mailto:ccastaldi@brownrudnick.com">
                                                                    ccastaldi@brownrudnick.com
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="columns large-12 medium-12 x-large-6 small-12 ">
                                        <div class="portrait__wrapper text person">
                                            <div class="table__wrapper">
                                                <div class="table__inner">
                                                    <div class="columns large-7 medium-7 x-large-6 small-12">
                                                        <div class="portrait__wrapper director">
                                                            <div class="table__wrapper">
                                                                <div class="table__inner">
                                                                    <img class="people-grid"
                                                                        src="https://www.brownrudnickcenter.com/wp-content/uploads/2023/03/Crawford_Andrew_Bio.jpg">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="columns large-5 medium-5 x-large-6 small-12 people__grid--text-container">
                                                        <div class="table__wrapper">
                                                            <div class="table__inner">

                                                                <a target="_blank"
                                                                    href="http://www.brownrudnick.com/people/andrew-c-crawford/"
                                                                    class="text-align__left mobile__centered people__details title__text smaller">
                                                                    Andrew Crawford
                                                                </a>

                                                                <p
                                                                    class="text-align__left mobile__centered people__details tag__text">

                                                                </p>
                                                                <span
                                                                    class="about__deatils mobile__centered list-divider red"></span>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    P: +1 202.536.1731
                                                                </p>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    F: +1.212.938.2953
                                                                </p>

                                                                <a class="email--people--link text-align__left mobile__centered red link tag__text thin"
                                                                    href="mailto:acrawford@brownrudnick.com">
                                                                    acrawford@brownrudnick.com
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="columns large-12 medium-12 x-large-6 small-12 ">
                                        <div class="portrait__wrapper text person">
                                            <div class="table__wrapper">
                                                <div class="table__inner">
                                                    <div class="columns large-7 medium-7 x-large-6 small-12">
                                                        <div class="portrait__wrapper director">
                                                            <div class="table__wrapper">
                                                                <div class="table__inner">
                                                                    <img class="people-grid"
                                                                        src="https://www.brownrudnickcenter.com/wp-content/uploads/2016/12/Dash-Andy.jpg">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="columns large-5 medium-5 x-large-6 small-12 people__grid--text-container">
                                                        <div class="table__wrapper">
                                                            <div class="table__inner">
                                                                <p
                                                                    class="text-align__left mobile__centered people__details title__text smaller">
                                                                    Andrew Dash
                                                                </p>

                                                                <p
                                                                    class="text-align__left mobile__centered people__details tag__text">

                                                                </p>
                                                                <span
                                                                    class="about__deatils mobile__centered list-divider red"></span>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    P: +1.617.856.8200
                                                                </p>

                                                                <a class="email--people--link text-align__left mobile__centered red link tag__text thin"
                                                                    href="mailto:">

                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="columns large-12 medium-12 x-large-6 small-12 ">
                                        <div class="portrait__wrapper text person">
                                            <div class="table__wrapper">
                                                <div class="table__inner">
                                                    <div class="columns large-7 medium-7 x-large-6 small-12">
                                                        <div class="portrait__wrapper director">
                                                            <div class="table__wrapper">
                                                                <div class="table__inner">
                                                                    <img class="people-grid"
                                                                        src="https://www.brownrudnickcenter.com/wp-content/uploads/2023/03/Tim-Davison.png">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="columns large-5 medium-5 x-large-6 small-12 people__grid--text-container">
                                                        <div class="table__wrapper">
                                                            <div class="table__inner">

                                                                <a target="_blank"
                                                                    href="https://brownrudnick.com/people/tim-davison/"
                                                                    class="text-align__left mobile__centered people__details title__text smaller">
                                                                    Tim Davison
                                                                </a>

                                                                <p
                                                                    class="text-align__left mobile__centered people__details tag__text">

                                                                </p>
                                                                <span
                                                                    class="about__deatils mobile__centered list-divider red"></span>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    P: +44.20.7851.6143
                                                                </p>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    F: +44.20.7851.6100
                                                                </p>

                                                                <a class="email--people--link text-align__left mobile__centered red link tag__text thin"
                                                                    href="mailto:tdavison@brownrudnick.com">
                                                                    tdavison@brownrudnick.com
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="columns large-12 medium-12 x-large-6 small-12 ">
                                        <div class="portrait__wrapper text person">
                                            <div class="table__wrapper">
                                                <div class="table__inner">
                                                    <div class="columns large-7 medium-7 x-large-6 small-12">
                                                        <div class="portrait__wrapper director">
                                                            <div class="table__wrapper">
                                                                <div class="table__inner">
                                                                    <img class="people-grid"
                                                                        src="https://www.brownrudnickcenter.com/wp-content/uploads/2023/03/Wayne-Dennison.png">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="columns large-5 medium-5 x-large-6 small-12 people__grid--text-container">
                                                        <div class="table__wrapper">
                                                            <div class="table__inner">

                                                                <a target="_blank"
                                                                    href="https://brownrudnick.com/people/wayne-f-dennison/"
                                                                    class="text-align__left mobile__centered people__details title__text smaller">
                                                                    Wayne F. Dennison
                                                                </a>

                                                                <p
                                                                    class="text-align__left mobile__centered people__details tag__text">

                                                                </p>
                                                                <span
                                                                    class="about__deatils mobile__centered list-divider red"></span>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    P: +1.617.856.8247
                                                                </p>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    F: +1.617.289.0438
                                                                </p>

                                                                <a class="email--people--link text-align__left mobile__centered red link tag__text thin"
                                                                    href="mailto:wdennison@brownrudnick.com">
                                                                    wdennison@brownrudnick.com
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="columns large-12 medium-12 x-large-6 small-12 last float-left">
                                        <div class="portrait__wrapper text person">
                                            <div class="table__wrapper">
                                                <div class="table__inner">
                                                    <div class="columns large-7 medium-7 x-large-6 small-12">
                                                        <div class="portrait__wrapper director">
                                                            <div class="table__wrapper">
                                                                <div class="table__inner">
                                                                    <img class="people-grid"
                                                                        src="https://www.brownrudnickcenter.com/wp-content/uploads/2023/03/Ed-Pare.png">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="columns large-5 medium-5 x-large-6 small-12 people__grid--text-container">
                                                        <div class="table__wrapper">
                                                            <div class="table__inner">

                                                                <a target="_blank"
                                                                    href="https://brownrudnick.com/people/edward-d-pare/"
                                                                    class="text-align__left mobile__centered people__details title__text smaller">
                                                                    Edward D. Pare, Jr.
                                                                </a>

                                                                <p
                                                                    class="text-align__left mobile__centered people__details tag__text">

                                                                </p>
                                                                <span
                                                                    class="about__deatils mobile__centered list-divider red"></span>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    P: +1.401.276.2601
                                                                </p>
                                                                <p
                                                                    class="text-align__left mobile__centered people__details body__text">
                                                                    F: +1.401.276.6239
                                                                </p>

                                                                <a class="email--people--link text-align__left mobile__centered red link tag__text thin"
                                                                    href="mailto:epare@brownrudnick.com">
                                                                    epare@brownrudnick.com
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
