@extends('frontend.master')

@section('frontend_title', 'International Recognition')

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

    <section id="terms-page" class="bg-snow terms-section division" style="padding-top: 35px; padding-bottom:70px">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="h5-lg practice_area_header">
                        International Recognition
                    </h5>
                </div>
            </div>

            <div style="margin-bottom: 40px">

                <p>
                    The Law Counsel has consistently been featured on international legal directories including The Legal
                    500 and the Chambers and Partners.
                </p>

                <div>
                    <ul class="list-group list-group-horizontal">
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
            </div>
            <div class="row wow fadeInUp">
                <div class="col-md-12">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 50%">The Legal 500, @if (isset($getRecognitionInfo->year_name))
                                        {{ $getRecognitionInfo->year_name }}
                                    @endif
                                </th>
                                <th style="width: 50%">Chambers and Partners, @if (isset($getRecognitionInfo->year_name))
                                        {{ $getRecognitionInfo->year_name }}
                                    @endif
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td style="width: 50%">
                                    {!! $getRecognitionInfo->legal_details !!}
                                </td>
                                <td style="width: 50%">
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
