@extends('frontend.master')

@section('frontend_title', 'International Recognition')

@section('frontend_main_content')

    <style>
        .custom_list_active {
            background-color: #e1b382;
        }

        .custom_list_active_color {
            color: white;
        }

        .custom_list_active_color:hover {
            color: black;
        }
    </style>

    <div class="col-lg-12">
        <img style="width: 100%; height:270px" src="{{ asset('assets/frontend/images/banner/2.jpg') }}" alt="image">
    </div>

    <section id="terms-page" class="bg-snow terms-section division" style="padding-top: 35px; padding-bottom:70px">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="h5-lg practice_area_header">
                        International Recognition
                    </h5>
                </div>
            </div>

            <div class="row wow fadeInUp">

                <p style="margin-bottom: 40px">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non iusto earum, molestias eaque tempora
                    repellendus cupiditate deserunt? Aliquid mollitia a nisi, culpa delectus et veniam provident. Eaque illo
                    earum ipsum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam repellendus praesentium
                    esse quo nihil modi ratione corporis tempore.
                </p>

                <div class="col-md-1">
                    <ul class="list-group">

                        @foreach ($year_name_list as $year_name_value)
                            <li
                                class="list-group-item {{ $getRecognitionInfo->id == $year_name_value->id ? 'custom_list_active' : '' }}">
                                <a style="font-size: 14px"
                                    class="{{ $getRecognitionInfo->id == $year_name_value->id ? 'custom_list_active_color' : '' }}"
                                    href="/international-recognition?yearName={{ $year_name_value->year_name }}">{{ $year_name_value->year_name }}</a>
                            </li>
                        @endforeach

                    </ul>
                </div>

                <div class="col-md-11">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>The Legal 500, @if (isset($getRecognitionInfo->year_name))
                                        {{ $getRecognitionInfo->year_name }}
                                    @endif
                                </th>
                                <th>Chambers and Partners, @if (isset($getRecognitionInfo->year_name))
                                        {{ $getRecognitionInfo->year_name }}
                                    @endif
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                    {!! $getRecognitionInfo->legal_details !!}
                                </td>
                                <td>
                                    {!! $getRecognitionInfo->partner_chamber_details !!}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- End container -->
    </section>

@endsection
