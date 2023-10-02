@extends('frontend.master')

@section('frontend_title', 'Home')

@section('frontend_main_content')

    @include('frontend.layouts.slider')

    <div style="background-color: #f4f3f1;">

        <div class="homepage__tiles--wrapper">
            <div class="stay-current">
                <!-- <h4>Stay Current</h4> -->
            </div>

            <div class="row sr">
                <!-- row-->
                <div class="no__pad medium-6 large-4 columns homepage-grid-element relative">
                    <div class="no__pad homepage__image--wrapper medium-12 large-12 columns"></div>
                    <div class="no__pad medium-12 large-12 columns relative">
                        <span class="black__border--top"></span>
                        <div class="homepage_post-text-container">
                            <div class="homepage-header-container">
                                <p class="homepage-header-text">Practice Area</p>
                            </div>
                            <a href="#">
                                <!-- <h4 class="homepage-element-body">
                                                            Associate Martha Baselga Named a ‘Distinguished
                                                            Adviser’ in Financier Worldwide’s 2023 Power Players
                                                        </h4> -->
                                <img style="height: 255px;" src="assets/frontend/images/slider/4.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <a href="#">
                        <span class="tile__arrow home__page">
                            <svg class="long__arrow--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 57 18">
                                <title>long arrow</title>
                                <line class="long__arrow red" x1="1" y1="9" x2="56" y2="9">
                                </line>
                                <polyline class="long__arrow red" points="48 1 56 9 48 17"></polyline>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="no__pad medium-6 large-4 columns homepage-grid-element relative">
                    <div class="no__pad homepage__image--wrapper medium-12 large-12 columns"></div>
                    <div class="no__pad medium-12 large-12 columns relative">
                        <span class="red__border--top"></span>
                        <div class="homepage_post-text-container">
                            <div class="homepage-header-container">
                                <p class="homepage-header-text">Our Clients</p>
                            </div>

                            <a class="link" href="#">
                                <img style="height: 255px;" src="assets/frontend/images/slider/2.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <a href="#">
                        <span class="tile__arrow home__page">
                            <svg class="long__arrow--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 57 18">
                                <title>long arrow</title>
                                <line class="long__arrow red" x1="1" y1="9" x2="56" y2="9">
                                </line>
                                <polyline class="long__arrow red" points="48 1 56 9 48 17"></polyline>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="no__pad medium-6 float__left large-4 columns homepage-grid-element relative">
                    <div class="no__pad homepage__image--wrapper medium-12 large-12 columns"></div>
                    <div class="no__pad medium-12 large-12 columns relative">
                        <span class="black__border--top"></span>
                        <div class="homepage_post-text-container">
                            <div class="homepage-header-container">
                                <p class="homepage-header-text">Resources</p>
                            </div>

                            <a class="link" href="#">
                                <img style="height: 255px;" src="assets/frontend/images/slider/3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <a href="#">
                        <span class="tile__arrow home__page">
                            <svg class="long__arrow--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 57 18">
                                <title>long arrow</title>
                                <line class="long__arrow red" x1="1" y1="9" x2="56" y2="9">
                                </line>
                                <polyline class="long__arrow red" points="48 1 56 9 48 17"></polyline>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Start practice area, our Clients and Resources -->

        <!-- Start Separator  -->
        <div style="background: #ffffff; height: 50px"></div>
        <!-- End Separator  -->

        <!-- Start International Recognition -->
        <div class="homepage-full auto" style="background-image: url(assets/frontend/images/home-parallax-one.jpg);">
            <div class="row">
                <div class="slide__content--outer-wrapper">
                    <div class="slide__content--inner-wrapper">
                        <div class="color-block__wrapper large-12 medium-12 small-12">
                            <div class="color-block vellum homepage__section--three">
                                <div class="slide-description homepage__lower__section">
                                    <h4 class="homepage-section-3-title">
                                        International Recognition
                                    </h4>
                                    <span class="slide-description-heading red section-3"></span>
                                    <p class="body-text hero title__text smaller">
                                    <p> The Law Counsel has a highly reputable banking practice headed by senior
                                        partner Abdur
                                        Razzaq. It remains one of the
                                        premier firms in Bangladesh for Islamic banking and shari’ah-compliant
                                        financing work.
                                        It is the firm of choice for Islamic
                                        Bank Bangladesh, notably for commercial, corporate finance and project
                                        financing work;
                                        Ehsan Abdullah Siddiq is the
                                        contact here. Associate, Syed Mohammad Raihan Uddin is experienced in
                                        drafting complex
                                        financial contracts for local
                                        and foreign banks.</p>
                                </div>

                                <a href="#">
                                    <button class="home-button sites-button" href="#">
                                        Learn More
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End International Recognition -->

        <!-- Start Separator  -->
        <div style="background: #ffffff; height: 50px"></div>
        <!-- End Separator  -->

        <!-- Start Pro Bono -->
        <div class="homepage-full auto" style="background-image: url(assets/frontend/images/slider-one.jpg);">
            <div class="row">
                <div class="slide__content--outer-wrapper">
                    <div class="slide__content--inner-wrapper">
                        <div class="color-block__wrapper large-12 medium-12 small-12">
                            <div class="color-block vellum homepage__section--three">
                                <div class="slide-description homepage__lower__section">
                                    <h4 class="homepage-section-3-title">
                                        Pro Bono
                                    </h4>
                                    <span class="slide-description-heading red section-3"></span>
                                    <p class="body-text hero title__text smaller">
                                    <p>
                                        Highlighting the chambers endeavor to uphold the rights of the underprivileged
                                        section
                                        of the people.
                                        Highlighting the chambers endeavor to uphold the rights of the underprivileged
                                        section
                                        of the people.
                                    </p>
                                </div>

                                <a href="#">
                                    <button class="home-button sites-button" href="#">
                                        Learn More
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Pro Bon -->

        <!-- Start Separator  -->
        <div style="background: #ffffff; height: 50px"></div>
        <!-- End Separator  -->

        <!-- Start Our Commitment -->
        <div class="grey__background">
            <div class="homepage-section-2--wrapper">
                <div class="row">
                    <img class="hide-for-small-only hide-for-medium-only homepage-section-2-image" src="">

                    <img class="homepage-section-2-image-mobile" src="assets/frontend/images/slider-one.jpg">

                    <div class="white-on-gray-wrapper homepage-section-2">
                        <a href="pro-bono/index.html">
                            <div class="table__wrapper margin__auto">
                                <div class="table__inner">
                                    <p class="title__text mobile__centered">
                                        Our Commitment
                                    </p>
                                    <span class="slide-description-heading red"></span>
                                    <div class="mobile__centered">
                                        <p class="body-text hero mobile__centered">
                                        <p>
                                            Throughout Brown Rudnick's history, the Firm has actively encouraged
                                            all of its professionals to provide legal services pro bono publico
                                            to persons or causes in need of quality legal representation. The
                                            resolution of the American Bar Association House of Delegates
                                            expresses our point of view succinctly: "It is the basic
                                            responsibility of each lawyer engaged in the practice of law to
                                            provide public interest legal services without fee or at a
                                            substantially reduced fee."
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="pro-bono/index.htm">
                            <span class="tile__arrow home__page">
                                <svg class="long__arrow--svg" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 57 18">
                                    <title>long arrow</title>
                                    <line class="long__arrow red" x1="1" y1="9" x2="56"
                                        y2="9"></line>
                                    <polyline class="long__arrow red" points="48 1 56 9 48 17"></polyline>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Our Commitment -->

        <!-- Start Separator  -->
        <div style="background: #ffffff; height: 50px"></div>
        <!-- End Separator  -->
    </div>
@endsection
