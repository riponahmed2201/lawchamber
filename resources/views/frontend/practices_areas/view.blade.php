@extends('frontend.master')

@section('frontend_title', 'View Practices Areas')


@section('frontend_main_content')

    <style>
        .custom_list_active {
            background-color: #a91d4d;
        }

        .custom_list_active_color {
            color: white;
        }
        .custom_list_active_color:hover {
            color: black;
        }
    </style>

    <div class="col-lg-12">
        <div style="background-color: #a91d4d; width: 100%; height:270px"></div>
    </div>

    <section id="terms-page" class="bg-snow terms-section division" style="padding-top: 35px; padding-bottom:70px; background-color: #f1f2f2;">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="h5-lg practice_area_header text-center"> {{ $details->name }} </h5>
                </div>
            </div>

            <div class="row wow fadeInUp">
                <div class="col-md-3">
                    <ul class="list-group">

                        @foreach ($practiceAreasList as $practiceArea)
                            <li class="list-group-item {{ $details->id == $practiceArea->id ? 'custom_list_active' : '' }}">
                                <a style="font-size: 14px"
                                    class="{{ $details->id == $practiceArea->id ? 'custom_list_active_color' : '' }}"
                                    href="{{ route('frontend.showPracticesAreasViewPage', $practiceArea->id) }}">{{ $practiceArea->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-md-9">
                    <div style="text-align: justify; text-justify: inter-word; font-size: 14px">
                        {!! $details->details !!}
                    </div>
                </div>
            </div>
        </div> <!-- End container -->
    </section>
@endsection
