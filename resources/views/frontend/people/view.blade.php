@extends('frontend.master')

@section('frontend_title', 'People')

@section('frontend_main_content')
    <section class="container">
        <div class="off-canvas-content" data-off-canvas-content="">
            <div class="human-icon hidden" data-toggle="offCanvas" aria-expanded="false" aria-controls="offCanvas"></div>
            <div id="page-full-width-homepage" class="full-width single-people-page" role="main">
                <div id="featuredImage" class="person featured-image__header--image-wrapper">

                    <div class="featured-image__header--text-outer-wrapper row relative">
                        <div class="breadcrumb__wrapper black person-breadcrumb">
                            <a class="breadcrumb__link black" href="/people">BACK TO PEOPLE</a>
                        </div>
                        <div class="featured-image__header--text-wrapper person">
                            <div class="featured-image__header--text-inner-wrapper person">
                                <div class="people__details--outer-wrapper person">
                                    <div class="people__details--inner-wrapper">
                                        <div id="my-test-div" class="columns medium-12 large-12 small-12 relative">
                                            <div id="first--inline--wrapper"
                                                class="inline__wrapper person padding__right--50-desktop">
                                                <div class="table__wrapper person__wrapper">
                                                    <div class="table__inner">
                                                        <img style="width: 250px; height:232px"
                                                            class="people__details person"
                                                            src="{{ asset('uploads/people/' . $people->image) }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="second--inline--wrapper" class="inline__wrapper person">
                                                <div class="table__wrapper">
                                                    <div class="table__inner">
                                                        <p id="people--title" class="people__details title__text smaller">
                                                            {{ $people->name }}
                                                        </p>
                                                        <p class="people__details tag__text">
                                                            {{ $people->designation_name }}
                                                        </p>
                                                        <span class="people__details list-divider red"></span>
                                                        <a class="link inline__link" href="javascript:void(0)">
                                                            <p class="people__details inline__text body__text">
                                                                Dhaka, Bangladesh
                                                            </p>
                                                        </a>

                                                        @if (isset($people->phone_number))
                                                            <p class="people__details body__text">
                                                                {{ $people->phone_number }}
                                                            </p>
                                                        @endif

                                                        @if (isset($people->email))
                                                            <p class="people__details body__text">
                                                                <a href="mailto:{{ $people->email }}"
                                                                    class="email--people--link red link inline__link body__text people__details">
                                                                    {{ $people->email }}
                                                                </a>
                                                            </p>
                                                        @endif
                                                        {{-- <div class="margin-top-20">
                                                            <a class="sites-button" id="download--vcard"
                                                                href="https://brownrudnick.com/wp-content/uploads/2019/07/Vincent-Badolato.vcf"
                                                                download="Vincent_Badolato">
                                                                v Card
                                                            </a>
                                                            <a class="sites-button inverse" id="print--page">
                                                                Print
                                                            </a>
                                                        </div> --}}
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
                <div class="row">
                    <div class="experience__wrapper row body__wrapper columns small-12 medium-12 large-12">
                        <div class="padding__wrapper ten sides__only">
                            <div class="columns small-12 medium-12">
                                <div class="title__text">
                                    Biography
                                </div>
                                <div class="body__text ">
                                    <p id="person-biography"></p>
                                    <p>
                                        {!! $people->details !!}
                                    </p>

                                </div>
                                {{-- <span class="page__divider grey"></span> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
