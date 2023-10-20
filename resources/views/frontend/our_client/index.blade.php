@extends('frontend.master')

@section('frontend_title', 'View Practices Areas')


@section('frontend_main_content')

    <style>
        .custom_list_active {
            background-color: #444c5f;
        }

        .custom_list_active_color {
            color: white;
        }
    </style>

    <div class="col-lg-12">
        <img style="width: 100%; height:270px" src="{{ asset('assets/frontend/images/banner/2.jpg') }}" alt="image">
    </div>

    <section id="terms-page" class="bg-snow terms-section division" style="padding-top: 35px; padding-bottom:70px">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="h5-lg practice_area_header"> {{ $client_category->name }} </h5>
                </div>
            </div>

            <div class="row wow fadeInUp">
                <div class="col-md-3">
                    <ul class="list-group">

                        @foreach ($client_categories as $category_value)
                            <li
                                class="list-group-item {{ $client_category->id == $category_value->id ? 'custom_list_active' : '' }}">
                                <a style="font-size: 14px"
                                    class="{{ $client_category->id == $category_value->id ? 'custom_list_active_color' : '' }}"
                                    href="{{ route('frontend.ourClientDetails', $category_value->id) }}">{{ $category_value->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-md-9">
                    <div style="text-align: justify; text-justify: inter-word; font-size: 14px">
                        {{ $client_category->details }}
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-md-3 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('assets/frontend/images/brand-2.png') }}"
                                    alt="Client">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('assets/frontend/images/brand-2.png') }}"
                                    alt="Client">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('assets/frontend/images/brand-2.png') }}"
                                    alt="Client">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('assets/frontend/images/brand-2.png') }}"
                                    alt="Client">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('assets/frontend/images/brand-2.png') }}"
                                    alt="Client">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('assets/frontend/images/brand-2.png') }}"
                                    alt="Client">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('assets/frontend/images/brand-2.png') }}"
                                    alt="Client">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('assets/frontend/images/brand-2.png') }}"
                                    alt="Client">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- End container -->
    </section>
@endsection
