@extends('frontend.master')

@section('frontend_title', 'People')


@section('frontend_main_content')

    <style>
        .practice_area_header {
            border-bottom: 1px solid #ddd;
            padding-bottom: 12px;
            margin-top: 4px;
            margin-bottom: 41px;
        }
    </style>
    <div class="col-lg-12">
        <img style="width: 100%" src="{{ asset('assets/frontend/images/banner/1.jpg') }}" alt="image">
    </div>

    <section id="terms-page" class="bg-snow terms-section division" style="padding-top: 35px; padding-bottom:70px">

        <div class="container">

            {{-- <div class="col-lg-12">
                <img style="width: 100%" src="{{ asset('assets/frontend/images/banner/1.jpg') }}" alt="image">
            </div> --}}

            <div class="row">
                <div class="col-md-12">
                    <h5 class="h5-lg practice_area_header">Practices Areas</h5>
                </div>
            </div>

            <div class="row wow fadeInUp">

                @foreach ($results as $result)
                    <div class="col-md-4">
                        <div class="justify-content-center card p-2 m-1"
                            style="background-color: #dcdede; height:90px; align-items:center">
                            <a href="#" style="color: black">
                                {{ $result->name }}
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div> <!-- End container -->
    </section>
@endsection
