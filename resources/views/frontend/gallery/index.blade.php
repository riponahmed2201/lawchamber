@extends('frontend.master')

@section('frontend_title', 'Photo Gallery')

@section('frontend_main_content')

    <section id="blog-page" class="bg-snow division"
        style="padding-top: 35px; padding-bottom: 70px; background-color: #f1f2f2;">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h5 class="h5-lg posts-category">Gallery</h5>
                </div>
            </div>

            <div class="row">
                <div class="col gallery-items-list">
                    <div class="masonry-wrap grid-loaded">

                        @foreach ($results as $value)
                            <div class="blog-3-post masonry-image">
                                <div class="blog-post-img">
                                    <div class="hover-overlay">
                                        <img class="img-fluid" style="width: 416px; height:364px"
                                            src="{{ asset('uploads/gallery/' . $value->image) }}" alt="blog-post-image" />
                                        <div class="item-overlay"></div>
                                    </div>
                                </div>

                                <div class="blog-post-txt">
                                    <p class="p-md post-tag"> {{ $value->caption }} </p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
