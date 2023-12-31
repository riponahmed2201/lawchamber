@extends('frontend.master')

@section('frontend_title', 'People')

@section('frontend_main_content')

    <section id="terms-page" class="bg-snow terms-section division" style="padding-top: 35px; padding-bottom:70px;">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="h5-lg practice_area_header text-center">
                        People Details
                    </h5>
                </div>
            </div>

            <div class="row wow fadeInUp">
                <div class="col-md-12">
                    <div class="row">
                        <div class="d-flex justify-content-start">
                            <div>
                                <img style="width: 180px; height:200px" class="img-fluid"
                                    src="{{ asset('uploads/people/' . $people->image) }}" alt="team-member-foto">
                            </div>
                            <div style="margin-left: 40px">
                                <h2> {{ $people->name }} </h2>
                                <h6 style="font-size: 20px"> {{ $people->designation_name }} </h6>
                                <p> {{ $people->address }} <br> {{ $people->phone_number }} <br> {{ $people->email }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="margin-top: 20px">
                    <hr>
                </div>

                <div class="col-md-12">
                    <div class="row">
                        <p> {!! $people->details !!} </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
