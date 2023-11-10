@extends('frontend.master')

@section('frontend_title', 'Resources')

@section('frontend_main_content')
    <div class="col-lg-12">
        <img style="width: 100%; height:270px" src="{{ asset('assets/frontend/images/banner/2.jpg') }}" alt="image">
    </div>

    <!-- Resources LISTING -->
    <section id="blog-page" class="bg-snow division" style="padding-top: 35px; padding-bottom: 70px; background-image: url({{ asset('assets/frontend/images/common-bg.png') }})">
        <div class="container">
            <!-- Resources CATEGORY -->
            <div class="row">
                <div class="col-md-12">
                    <h5 class="h5-lg posts-category">Latest Resources</h5>
                </div>
            </div>

            <!-- Resources -->
            <div class="row">
                <div class="col gallery-items-list">
                    <div class="masonry-wrap grid-loaded">


                        <!-- BLOG POST #1 -->
                        <div class="blog-3-post masonry-image">

                            <!-- BLOG POST IMAGE -->
                            <div class="blog-post-img">
                                <div class="hover-overlay">
                                    <img class="img-fluid" style="width: 416px; height:364px"
                                        src="assets/frontend/images/blog/post-1-img.jpg" alt="blog-post-image" />
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                            <!-- BLOG POST TEXT -->
                            <div class="blog-post-txt">

                                <!-- Post Tag -->
                                <p class="p-md post-tag">JuLy 31, 2021</p>

                                <!-- Post Link -->
                                <h5 class="h5-md">
                                    <a href="{{ route('frontend.viewResourcesDetails', 1) }}">
                                        A ligula risus auctor and tempus sapien an augue integer turpis
                                    </a>
                                </h5>
                            </div> <!-- END BLOG POST TEXT -->

                        </div> <!-- END BLOG POST #1 -->


                        <!-- BLOG POST #2 -->
                        <div class="blog-3-post masonry-image">

                            <!-- BLOG POST IMAGE -->
                            <div class="blog-post-img">
                                <div class="hover-overlay">
                                    <img class="img-fluid" style="width: 416px; height:364px"
                                        src="assets/frontend/images/blog/post-5-img.jpg" alt="blog-post-image" />
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                            <!-- BLOG POST TEXT -->
                            <div class="blog-post-txt">

                                <!-- Post Tag -->
                                <p class="p-md post-tag">JuLy 24, 2021</p>

                                <!-- Post Link -->
                                <h5 class="h5-md">
                                    <a href="{{ route('frontend.viewResourcesDetails', 1) }}">
                                        Integer urna turpis donec ipsum a porta justo risus auctor
                                    </a>
                                </h5>

                            </div> <!-- END BLOG POST TEXT -->

                        </div> <!-- END BLOG POST #2 -->


                        <!-- BLOG POST #3 -->
                        <div class="blog-3-post masonry-image">

                            <!-- BLOG POST IMAGE -->
                            <div class="blog-post-img">
                                <div class="hover-overlay">
                                    <img class="img-fluid" style="width: 416px; height:364px"
                                        src="assets/frontend/images/blog/post-2-img.jpg" alt="blog-post-image" />
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                            <!-- BLOG POST TEXT -->
                            <div class="blog-post-txt">

                                <!-- Post Tag -->
                                <p class="p-md post-tag">JuLy 06, 2021</p>

                                <!-- Post Link -->
                                <h5 class="h5-md">
                                    <a href="{{ route('frontend.viewResourcesDetails', 1) }}">
                                        Donec sapien an augue integer turpis at cursus porta urna
                                    </a>
                                </h5>
                            </div> <!-- END BLOG POST TEXT -->

                        </div> <!-- END BLOG POST #3 -->


                        <!-- BLOG POST #4 -->
                        <div class="blog-3-post masonry-image">

                            <!-- BLOG POST IMAGE -->
                            <div class="blog-post-img">
                                <div class="hover-overlay">
                                    <img class="img-fluid" style="width: 416px; height:364px"
                                        src="assets/frontend/images/blog/post-6-img.jpg" alt="blog-post-image" />
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                            <!-- BLOG POST TEXT -->
                            <div class="blog-post-txt">

                                <!-- Post Tag -->
                                <p class="p-md post-tag">June 30, 2021</p>

                                <!-- Post Link -->
                                <h5 class="h5-md">
                                    <a href="{{ route('frontend.viewResourcesDetails', 1) }}">
                                        Mauris donec magnis and sapien ociis etiam sapien congue undo
                                    </a>
                                </h5>
                            </div> <!-- END BLOG POST TEXT -->

                        </div> <!-- END BLOG POST #4 -->


                        <!-- BLOG POST #5 -->
                        <div class="blog-3-post masonry-image">

                            <!-- BLOG POST IMAGE -->
                            <div class="blog-post-img">
                                <div class="hover-overlay">
                                    <img class="img-fluid" style="width: 416px; height:364px"
                                        src="assets/frontend/images/blog/post-7-img.jpg" alt="blog-post-image" />
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                            <!-- BLOG POST TEXT -->
                            <div class="blog-post-txt">

                                <!-- Post Tag -->
                                <p class="p-md post-tag">June 18, 2021</p>

                                <!-- Post Link -->
                                <h5 class="h5-md">
                                    <a href="{{ route('frontend.viewResourcesDetails', 1) }}">
                                        An augue cubilia laoreet undo magna and suscipit egestas
                                    </a>
                                </h5>
                            </div> <!-- END BLOG POST TEXT -->

                        </div> <!-- END BLOG POST #5 -->


                        <!-- BLOG POST #6 -->
                        <div class="blog-3-post masonry-image">

                            <!-- BLOG POST IMAGE -->
                            <div class="blog-post-img">
                                <div class="hover-overlay">
                                    <img class="img-fluid" style="width: 416px; height:364px"
                                        src="assets/frontend/images/blog/post-4-img.jpg" alt="blog-post-image" />
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                            <!-- BLOG POST TEXT -->
                            <div class="blog-post-txt">

                                <!-- Post Tag -->
                                <p class="p-md post-tag">June 25, 2021</p>

                                <!-- Post Link -->
                                <h5 class="h5-md">
                                    <a href="{{ route('frontend.viewResourcesDetails', 1) }}">
                                        Laoreet undo magna at suscipit undo egestas magna ipsum
                                    </a>
                                </h5>
                            </div> <!-- END BLOG POST TEXT -->

                        </div> <!-- END BLOG POST #6 -->
                    </div>
                </div>
            </div> <!-- END Resources -->

        </div> <!-- End container -->
    </section> <!-- END Resources LISTING -->

@endsection
