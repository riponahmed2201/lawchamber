@extends('frontend.master')

@section('frontend_title', 'People')

@section('frontend_main_content')

    <style>
        .custom_list_active {
            background-color: #a91d4d;
        }

        .custom_list_active_color {
            color: white;
        }
    </style>

    <div class="col-lg-12">
        <img style="width: 100%; height:270px" src="{{ asset('assets/frontend/images/banner/2.jpg') }}" alt="image">
    </div>

    <section id="terms-page" class="bg-snow terms-section division"
        style="padding-top: 35px; padding-bottom:70px; background-color: #f1f2f2;">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="h5-lg practice_area_header text-center">
                        @if (isset($getDesginationInfo))
                            {{ $getDesginationInfo->designation_name }}
                        @else
                            People
                        @endif
                    </h5>
                </div>
            </div>

            <div class="row wow fadeInUp">
                <div class="col-md-3">
                    <ul class="list-group">

                        @foreach ($designations as $designation_value)
                            <li
                                class="list-group-item {{ $getDesginationInfo->id == $designation_value->id ? 'custom_list_active' : '' }}">

                                <a style="font-size: 14px"
                                    class="{{ $getDesginationInfo->id == $designation_value->id ? 'custom_list_active_color' : '' }}"
                                    href="/people?designation={{ $designation_value->id }}">{{ $designation_value->designation_name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-md-9">
                    <div class="row">

                        @if (isset($peoples) && count($peoples) > 0)

                            @foreach ($peoples as $people)
                                <div class="col-md-6" style="margin-bottom: 50px">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img style="width: 150px; height:139px" class="img-fluid"
                                                src="{{ asset('uploads/people/' . $people->image) }}"
                                                alt="team-member-foto">
                                        </div>
                                        <div class="col-md-7">
                                            <h6 style="font-size: 20px"> <a
                                                    href="{{ route('frontend.showPeopleViewPage', $people->id) }}">
                                                    {{ $people->name }} </a>
                                            </h6>
                                            <h6 style="font-size: 14px"> {{ $people->designation_name }} </h6>
                                            <p> {{ $people->address }} <br> {{ $people->phone_number }} <br>
                                                {{ $people->email }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p class="text-center text-danger">Not Found!</p>
                        @endif
                    </div>
                </div>
            </div>

            {{-- <div class="row wow fadeInUp">
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
            </div> --}}
        </div> <!-- End container -->
    </section>
@endsection
