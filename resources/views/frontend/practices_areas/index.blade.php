@extends('frontend.master')

@section('frontend_title', 'People')

@section('frontend_main_content')
    <div class="animsition" data-animsition-in-class="fade-in" data-animsition-in-duration="800"
        data-animsition-out-class="fade-out" data-animsition-out-duration="800" style="animation-duration: 800ms; opacity: 1;">

        <div class="off-canvas-wrapper">
            <div class="off-canvas-wrapper-inner">
                <div class="off-canvas-content">
                    <div id="page-full-width-homepage" class="full-width" role="main">
                        <div id="featuredImage" class="featured-image__header--image-wrapper"
                            style="position: relative; z-index: 0; background: none;">
                            <div class="featured-image__header--text-outer-wrapper row">
                                <div class="featured-image__header--text-wrapper">
                                    <div class="featured-image__header--text-inner-wrapper">
                                        <div class="color__block vellum">
                                            <h1 class="page__header black">
                                                <img src="{{ asset('assets/frontend/images/practices-areas/openboxmark.png') }}"
                                                    style="height: 1.5em; float: left; padding-right: 10px">
                                                Practices Areas
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="backstretch"
                                style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; z-index: -999998; position: absolute; width: 1519px; height: 215px;">
                                <img src="{{ asset('assets/frontend/images/practices-areas/whit-banner.jpg') }}"
                                    style="position: absolute; margin: 0px; padding: 0px; border: none; max-height: none; max-width: none; z-index: -999999; width: 1519px; height: 316.458px; left: 0px; top: -50.7292px;">
                            </div>
                        </div>

                        <div class="experience__wrapper row body__wrapper columns small-12 medium-12 large-12">

                            <div class="medium-2 large-2 small-12 sidebar__on-scroll--fixed columns">
                                <a href="practices-areas.html"
                                    class=" title__text smaller hide-for-small-only list__header">
                                    Experience
                                </a>

                                <div class="padding__wrapper twenty sides__only">
                                    <a href="practices-areas.html" class="show-for-small-only  mobile list__header">
                                        Experience
                                    </a>
                                </div>

                                <span class="show-for-small-only mobile__sidebar--expander top__menu mobile__top"
                                    data-show-target="sidebarMobileAccordion"></span>
                                <span class="list-divider hide-for-small-only"></span>
                                <span class="list-divider mobile show-for-small-only"></span>

                                <div id="desktopMobileAccordion" class="sidebar-items__wrapper hide-for-small-only">
                                    <a class="medium__weight__spacing   link sidebar__link" href="practices-areas.html">
                                        PRACTICES AREAS
                                    </a>
                                </div>

                                <div id="sidebarMobileAccordion"
                                    class="sidebar-items__wrapper insights show-for-small-only">
                                    <a class="medium__weight__spacing  link mobile sidebar__link" href="#">
                                        PRACTICES AREAS
                                    </a>
                                </div>
                            </div>
                            <div class="columns show-for-medium-up medium-9 large-10">
                                <div class="row">
                                    <div class="columns large-6 medium-6 xlarge-4 small-12 ">
                                        <div class="color-block__experience">
                                            <div class="color-block__experience--inner-wrapper">
                                                <div class="experience__link--wrapper">
                                                    <a class="link experience__link text-align__center" href="#">
                                                        Aviation Law
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns large-6 medium-6 xlarge-4 small-12 ">
                                        <div class="color-block__experience">
                                            <div class="color-block__experience--inner-wrapper">
                                                <div class="experience__link--wrapper">
                                                    <a class="link experience__link text-align__center" href="#">
                                                        Banking & Insurance Law
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns large-6 medium-6 xlarge-4 small-12 ">
                                        <div class="color-block__experience">
                                            <div class="color-block__experience--inner-wrapper">
                                                <div class="experience__link--wrapper">
                                                    <a class="link experience__link text-align__center" href="#">
                                                        Business & Corporate Law
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns large-6 medium-6 xlarge-4 small-12 ">
                                        <div class="color-block__experience">
                                            <div class="color-block__experience--inner-wrapper">
                                                <div class="experience__link--wrapper">
                                                    <a class="link experience__link text-align__center" href="#">
                                                        Civil Law
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns large-6 medium-6 xlarge-4 small-12 ">
                                        <div class="color-block__experience">
                                            <div class="color-block__experience--inner-wrapper">
                                                <div class="experience__link--wrapper">
                                                    <a class="link experience__link text-align__center" href="#">
                                                        Civil Liberties & Human Rights
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns large-6 medium-6 xlarge-4 small-12 ">
                                        <div class="color-block__experience">
                                            <div class="color-block__experience--inner-wrapper">
                                                <div class="experience__link--wrapper">
                                                    <a class="link experience__link text-align__center" href="#">
                                                        Commercial Arbitration
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns large-6 medium-6 xlarge-4 small-12 ">
                                        <div class="color-block__experience">
                                            <div class="color-block__experience--inner-wrapper">
                                                <div class="experience__link--wrapper">
                                                    <a class="link experience__link text-align__center" href="#">
                                                        Constitutional & Administrative Law
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns large-6 medium-6 xlarge-4 small-12 ">
                                        <div class="color-block__experience">
                                            <div class="color-block__experience--inner-wrapper">
                                                <div class="experience__link--wrapper">
                                                    <a class="link experience__link text-align__center" href="#">
                                                        Criminal Law
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns large-6 medium-6 xlarge-4 small-12 ">
                                        <div class="color-block__experience">
                                            <div class="color-block__experience--inner-wrapper">
                                                <div class="experience__link--wrapper">
                                                    <a class="link experience__link text-align__center" href="#">
                                                        Data Protection & Privacy
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns large-6 medium-6 xlarge-4 small-12 ">
                                        <div class="color-block__experience">
                                            <div class="color-block__experience--inner-wrapper">
                                                <div class="experience__link--wrapper">
                                                    <a class="link experience__link text-align__center" href="#">
                                                        Cyber & Digital Security
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns large-6 medium-6 xlarge-4 small-12 ">
                                        <div class="color-block__experience">
                                            <div class="color-block__experience--inner-wrapper">
                                                <div class="experience__link--wrapper">
                                                    <a class="link experience__link text-align__center" href="#">
                                                        Employment Law
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns large-6 medium-6 xlarge-4 small-12 ">
                                        <div class="color-block__experience">
                                            <div class="color-block__experience--inner-wrapper">
                                                <div class="experience__link--wrapper">
                                                    <a class="link experience__link text-align__center" href="#">
                                                        Family Law
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns large-6 medium-6 xlarge-4 small-12 ">
                                        <div class="color-block__experience">
                                            <div class="color-block__experience--inner-wrapper">
                                                <div class="experience__link--wrapper">
                                                    <a class="link experience__link text-align__center" href="#">
                                                        Immigration Services
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns large-6 medium-6 xlarge-4 small-12 ">
                                        <div class="color-block__experience">
                                            <div class="color-block__experience--inner-wrapper">
                                                <div class="experience__link--wrapper">
                                                    <a class="link experience__link text-align__center" href="#">
                                                        Intellectual Property Law
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns large-6 medium-6 xlarge-4 small-12 ">
                                        <div class="color-block__experience">
                                            <div class="color-block__experience--inner-wrapper">
                                                <div class="experience__link--wrapper">
                                                    <a class="link experience__link text-align__center" href="#">
                                                        Land & Property Law
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns large-6 medium-6 xlarge-4 small-12 ">
                                        <div class="color-block__experience">
                                            <div class="color-block__experience--inner-wrapper">
                                                <div class="experience__link--wrapper">
                                                    <a class="link experience__link text-align__center" href="#">
                                                        Securities Law
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns large-6 medium-6 xlarge-4 small-12 ">
                                        <div class="color-block__experience">
                                            <div class="color-block__experience--inner-wrapper">
                                                <div class="experience__link--wrapper">
                                                    <a class="link experience__link text-align__center" href="#">
                                                        Media & Telecommunications
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns large-6 medium-6 xlarge-4 small-12 ">
                                        <div class="color-block__experience">
                                            <div class="color-block__experience--inner-wrapper">
                                                <div class="experience__link--wrapper">
                                                    <a class="link experience__link text-align__center" href="#">
                                                        VAT, Customs & Income Tax
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-off-canvas-exit"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
