@extends('frontend.master')

@section('frontend_title', 'Practices Areas')


@section('frontend_main_content')

<style>
    .custom_practice_area_hover:hover{

    }
</style>
    <div class="col-lg-12">
        <img style="width: 100%; height:270px" src="{{ asset('assets/frontend/images/banner/1.jpg') }}" alt="image">
    </div>

    <section id="terms-page" class="bg-snow terms-section division"
        style="padding-top: 35px; padding-bottom:70px; background-color: #f1f2f2;">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="h5-lg practice_area_header">Practices Areas</h5>
                </div>
            </div>

            <div class="row wow fadeInUp">

                @foreach ($results as $result)
                    <div class="col-md-4">
                        <div class="justify-content-center card mt-4" style="background-color: #dcdede; height:120px; align-items:center">
                            <a class="custom_practice_area_hover" href="{{ route('frontend.showPracticesAreasViewPage', $result->id) }}" style="color: black">
                                {{ $result->name }}
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div> <!-- End container -->
    </section>
@endsection
