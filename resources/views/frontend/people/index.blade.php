@extends('frontend.master')

@section('frontend_title', 'People')

@section('frontend_main_content')
    <div class="col-lg-12">
        <img style="width: 100%; height:270px" src="{{ asset('assets/frontend/images/banner/2.jpg') }}" alt="image">
    </div>

    <section id="terms-page" class="bg-snow terms-section division" style="padding-top: 35px; padding-bottom:70px">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="h5-lg practice_area_header">
                        @if (isset($getDesginationInfo))
                            {{ $getDesginationInfo->designation_name }}
                        @else
                            All People
                        @endif
                    </h5>
                </div>
            </div>

            <div class="row wow fadeInUp">
                <div class="team-members-wrapper text-center">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">

                        @foreach ($peoples as $people)
                            <div class="col-md-3">
                                <div class="team-member wow fadeInUp"
                                    style="visibility: visible; animation-name: fadeInUp;">
                                    <a href="#">
                                        <div class="team-member-photo">
                                            <img style="width: 306px; height:306px" class="img-fluid"
                                                src="{{ asset('uploads/people/' . $people->image) }}"
                                                alt="team-member-foto">
                                        </div>
                                    </a>

                                    <div class="team-member-data">
                                        <h5 class="h5-sm">
                                            {{ $people->name }}
                                        </h5>
                                        <p class="p-lg">
                                            {{ $people->designation_name }}
                                        </p>
                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div> <!-- End row -->
                </div>
            </div>
        </div> <!-- End container -->
    </section>
@endsection
