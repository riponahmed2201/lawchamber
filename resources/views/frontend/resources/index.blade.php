@extends('frontend.master')

@section('frontend_title', 'Resources')

@section('frontend_main_content')

    <style>
        .custom_text_color_hover:hover {
            color: #a91d4d;
        }
    </style>

    <div class="col-lg-12">
        <img style="width: 100%; height:270px" src="{{ asset('assets/frontend/images/banner/2.jpg') }}" alt="image">
    </div>

    <!-- Resources LISTING -->
    <section id="blog-page" class="bg-snow division"
        style="padding-top: 35px; padding-bottom: 70px; background-color: #f1f2f2;">
        <div class="container">
            <!-- Resources CATEGORY -->
            <div class="row">
                <div class="col-md-12">
                    <h5 class="h5-lg posts-category">Resources</h5>
                </div>
            </div>

            <!-- Resources -->
            <div class="row">
                @foreach ($results as $value)
                    <div class="col-md-3">
                        <div class="card">
                            <a href="{{ route('frontend.viewResourcesDetails', $value->id) }}">
                                <img style="width: 100%; height:240px" class="card-img-top"
                                    src="{{ asset('uploads/resources/' . $value->image) }}" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title custom_text_color_hover">
                                        {{ date('F j, Y', strtotime($value->date)) }} </h6>
                                    <p class="card-text custom_text_color_hover">
                                        {{ \Illuminate\Support\Str::limit($value->title, 80) }}
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="row">
                <div class="col gallery-items-list">
                    <div class="masonry-wrap grid-loaded">

                        @foreach ($results as $value9
                            <div class="blog-3-post masonry-image">

                                <!-- BLOG POST IMAGE -->
                                <div class="blog-post-img">
                                    <div class="hover-overlay">
                                        <img class="img-fluid" style="width: 416px; height:364px"
                                            src="{{ asset('uploads/resources/' . $value->image) }}" alt="blog-post-image" />
                                        <div class="item-overlay"></div>
                                    </div>
                                </div>

                                <!-- BLOG POST TEXT -->
                                <div class="blog-post-txt">

                                    <!-- Post Tag -->
                                    <p class="p-md post-tag"> {{ date('F j, Y', strtotime($value->date)) }} </p>

                                    <!-- Post Link -->
                                    <h5>
                                        <a href="{{ route('frontend.viewResourcesDetails', $value->id) }}">
                                            {{ $value->title }}
                                        </a>
                                    </h5>
                                </div> <!-- END BLOG POST TEXT -->

                            </div>
                        @endforeach

                    </div>
                </div>
            </div> --}}
            <!-- END Resources -->

        </div> <!-- End container -->
    </section>
    <!-- END Resources LISTING -->

@endsection
