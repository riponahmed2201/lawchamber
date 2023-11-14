@extends('frontend.master')

@section('frontend_title', 'View Our Client')

@section('frontend_main_content')

    <style>
        .custom_list_active {
            background-color: #e1b382;
        }

        .custom_list_active_color {
            color: white;
        }

        .custom_text_color_hover:hover {
            color: #e1b382;
        }
    </style>

    <div class="col-lg-12">
        <img style="width: 100%; height:270px" src="{{ asset('assets/frontend/images/banner/2.jpg') }}" alt="image">
    </div>

    <section id="terms-page" class="bg-snow terms-section division" style="padding-top: 35px; padding-bottom:70px">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="h5-lg practice_area_header text-center"> {{ $client_category->name }} </h5>
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

                        @if (isset($our_clients) && count($our_clients) > 0)

                            @foreach ($our_clients as $our_client)
                                <div class="col-md-3 mt-4">
                                    <div class="card">
                                        <img style="height:150px; object-fit:contain; padding:20px" class="card-img-top"
                                            src="{{ asset('uploads/our_client/' . $our_client->logo) }}" alt="Image">
                                        <div class="card-body">
                                            <h6 class="card-title custom_text_color_hover text-center">
                                                {{ $our_client->name }}
                                            </h6>
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
        </div> <!-- End container -->
    </section>
@endsection
