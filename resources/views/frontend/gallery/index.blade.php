@extends('frontend.master')

@section('frontend_title', 'Photo Gallery')

@section('frontend_main_content')
    <div class="col-lg-12">
        <img style="width: 100%; height:270px" src="{{ asset('assets/frontend/images/banner/2.jpg') }}" alt="image">
    </div>

    <section id="blog-page" class="bg-snow division"
        style="padding-top: 35px; padding-bottom: 70px; background-image: url({{ asset('assets/frontend/images/common-bg.png') }})">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h5 class="h5-lg posts-category">Gallery</h5>
                </div>
            </div>

            <div class="row">
                <div class="col gallery-items-list">
                    <div class="masonry-wrap grid-loaded">
                        <div class="blog-3-post masonry-image">
                            <div class="blog-post-img">
                                <div class="hover-overlay">
                                    <img class="img-fluid" style="width: 416px; height:364px"
                                        src="assets/frontend/images/blog/post-1-img.jpg" alt="blog-post-image" />
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                            <div class="blog-post-txt">
                                <p class="p-md post-tag"> Lorem ipsum dolor, sit </p>
                            </div>
                        </div>
                        <div class="blog-3-post masonry-image">
                            <div class="blog-post-img">
                                <div class="hover-overlay">
                                    <img class="img-fluid" style="width: 416px; height:364px"
                                        src="assets/frontend/images/blog/post-1-img.jpg" alt="blog-post-image" />
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                            <div class="blog-post-txt">
                                <p class="p-md post-tag"> Lorem ipsum dolor, sit </p>
                            </div>
                        </div>
                        <div class="blog-3-post masonry-image">
                            <div class="blog-post-img">
                                <div class="hover-overlay">
                                    <img class="img-fluid" style="width: 416px; height:364px"
                                        src="assets/frontend/images/blog/post-1-img.jpg" alt="blog-post-image" />
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                            <div class="blog-post-txt">
                                <p class="p-md post-tag"> Lorem ipsum dolor, sit </p>
                            </div>
                        </div>
                        <div class="blog-3-post masonry-image">
                            <div class="blog-post-img">
                                <div class="hover-overlay">
                                    <img class="img-fluid" style="width: 416px; height:364px"
                                        src="assets/frontend/images/blog/post-1-img.jpg" alt="blog-post-image" />
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                            <div class="blog-post-txt">
                                <p class="p-md post-tag"> Lorem ipsum dolor, sit </p>
                            </div>
                        </div>
                        <div class="blog-3-post masonry-image">
                            <div class="blog-post-img">
                                <div class="hover-overlay">
                                    <img class="img-fluid" style="width: 416px; height:364px"
                                        src="assets/frontend/images/blog/post-1-img.jpg" alt="blog-post-image" />
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                            <div class="blog-post-txt">
                                <p class="p-md post-tag"> Lorem ipsum dolor, sit </p>
                            </div>
                        </div>
                        <div class="blog-3-post masonry-image">
                            <div class="blog-post-img">
                                <div class="hover-overlay">
                                    <img class="img-fluid" style="width: 416px; height:364px"
                                        src="assets/frontend/images/blog/post-1-img.jpg" alt="blog-post-image" />
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                            <div class="blog-post-txt">
                                <p class="p-md post-tag"> Lorem ipsum dolor, sit </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
