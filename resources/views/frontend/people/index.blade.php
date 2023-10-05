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
                        <img src="{{ asset('assets/frontend/images/shutterstock_369682844-cropped.jpg') }}"
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
                                    <a class="hide-for-small-only link sidebar__link"
                                        @if (isset($getDesginationInfo) && $desktop_designation->id == $getDesginationInfo->id) class="active" @endif
                                        href="?designation={{ $desktop_designation->id }}">
                                        {{ $desktop_designation->designation_name }}
                                    </a>

                                    <!-- For Mobile Menu-->
                                    <a class=" show-for-small-only link sidebar__link mobile "
                                        href="?designation={{ $desktop_designation->id }}">
                                        {{ $desktop_designation->designation_name }}
                                    </a>
                                @endforeach
                                <!-- End Head Of Chambers -->

                            </div>

                        </div>

                        <div
                            class="columns no__pad small-12 medium-8 large-9 relative float--right people__details--container">
                            <div class="padding__wrapper forty sides__only">
                                <div class="columns small-12 medium-12 large-12 relative margin-bottom--20">

                                    <div class="columns small-12 medium-12 large-12 relative">
                                        <div class="columns small-4 medium-4 large-4 relative">
                                            <div class="letter__anchor--indicator">
                                                <div class="white letter__divider letter__anchor--inner-indicator">

                                                    @if (isset($getDesginationInfo))
                                                        {{ $getDesginationInfo->designation_name }}
                                                    @else
                                                        All People
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                        <div class="columns small-12 medium-8 large-8 relative">
                                            <span class="page__divider grey inline__block people">
                                            </span>
                                        </div>
                                    </div>
                                    @foreach ($peoples as $people)
                                        <div
                                            class="person__wrapper columns medium-12 large-6 small-12 min--height__225 end">
                                            <div class="columns medium-6 large-4 small-12">
                                                <div class="people__image__container">
                                                    <img class="people__details" style="width: 150px; height:139px"
                                                        src="{{ asset('uploads/people/' . $people->image) }}"
                                                        alt="Ahmed Razzaq ">
                                                </div>
                                            </div>
                                            <div class="columns medium-6 large-7 small-12">
                                                <div class="people__details--outer-wrapper">
                                                    <div class="people__details--inner-wrapper">
                                                        <a href="https://brownrudnick.com/people/razzaq-ahmed/"
                                                            class="people__details title__text smaller">
                                                            {{ $people->name }}
                                                        </a>

                                                        <p class="people__details tag__text">
                                                            {{ $people->designation_name }}
                                                        </p>

                                                        <span class="people__details list-divider red"></span>
                                                        <p class="people__details body__text">
                                                            Dhaka, Bangladesh </p>

                                                        @if (isset($people->phone_number))
                                                            <p class="people__details body__text">
                                                                {{ $people->phone_number }}
                                                            </p>
                                                        @endif

                                                        @if (isset($people->email))
                                                            <a href="mailto: {{ $people->email }}"
                                                                class="email--people--link red link inline__link"
                                                                style="font-size: 13px;">
                                                                {{ $people->email }}
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
