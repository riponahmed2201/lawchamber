@extends('frontend.master')

@section('frontend_title', 'News And Updates')

@section('frontend_main_content')

    <div class="col-lg-12">
        <div style="background-color: #a91d4d; width: 100%; height:270px"></div>
    </div>

    <!-- News And Updates LISTING -->
    <section id="blog-page" class="bg-snow division"
        style="padding-top: 35px; padding-bottom: 70px; background-color: #f1f2f2;">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h5 class="h5-lg posts-category"> {{ $news_data->title }} </h5>
                </div>
            </div>

            <!-- SINGLE POST CONTENT -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- SINGLE POST TITLE -->
                    <div style="margin-bottom: 35px;">
                        <!-- TITLE -->
                        {{-- <h4 class="h4-md">{{ $news_data->title }}</h4> --}}

                        <!-- POST DATA -->
                        <div class="post-data clearfix">
                            <!-- Author Data -->
                            <div class="post-author">
                                <p class="p-md">Posted on {{ date('F j, Y', strtotime($news_data->date)) }}</p>
                            </div>

                        </div> <!-- END POST DATA -->

                    </div>
                    <!-- END SINGLE POST TITLE -->

                    <!-- BLOG POST TEXT -->
                    <div>

                        <!-- Text -->
                        <p class="p-sm">
                            {!! $news_data->details !!}
                        </p>

                    </div>
                </div>
            </div> <!-- END SINGLE POST CONTENT -->
        </div>
    </section>
    <!-- END News And Updates LISTING -->
@endsection
