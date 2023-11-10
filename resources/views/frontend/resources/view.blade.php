@extends('frontend.master')

@section('frontend_title', 'Resources')

@section('frontend_main_content')
    <div class="col-lg-12">
        <img style="width: 100%; height:270px" src="{{ asset('assets/frontend/images/banner/2.jpg') }}" alt="image">
    </div>

    <!-- Resources LISTING -->
    <section id="blog-page" class="bg-snow division" style="padding-top: 35px; padding-bottom: 70px; background-image: url({{ asset('assets/frontend/images/common-bg.png') }})">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h5 class="h5-lg posts-category">Augue OLMO, luctus neque purus</h5>
                </div>
            </div>

            <!-- SINGLE POST CONTENT -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- BLOG POST INNER IMAGE -->
                    <div class="post-inner-img">
                        <img class="img-fluid" src="{{ asset('assets/frontend/images/blog/inner-img-1.png') }}"
                            alt="blog-post-image" />
                    </div>

                    <!-- SINGLE POST TITLE -->
                    <div class="single-post-title">
                        <!-- TITLE -->
                        <h2 class="h2-md">Augue OLMO, luctus neque purus and ipsum neque libero</h2>

                        <!-- POST DATA -->
                        <div class="post-data clearfix">


                            <!-- Author Data -->
                            <div class="post-author">
                                <p class="p-md">Posted on June 22, 2021</p>
                            </div>

                        </div> <!-- END POST DATA -->

                    </div>
                    <!-- END SINGLE POST TITLE -->

                    <!-- BLOG POST TEXT -->
                    <div class="single-post-txt">

                        <!-- Text -->
                        <p class="p-sm">Mauris donec ociis et magnis sapien etiam sapien sem sagittis congue tempor
                            gravida donec and ipsum aporta justo integer at odio velna. Maecenas gravida porttitor nunc
                            vehicula magna luctus tempor. Quisque vel laoreet turpis. An augue viverra a augue eget,
                            dictum tempor pulvinar donec ociis et magnis sapien imperdiet dui varius placerat imperdiet
                            ipsum varius viverra augue egestas luctus donec purus and blandit impedit ligula risus.
                            Mauris donec
                        </p>

                    </div> <!-- END BLOG POST TEXT -->

                    <!-- BLOG POST TEXT -->
                    <div class="single-post-txt">

                        <!-- Text -->
                        <p class="p-sm">Aliqum mullam blandit tempor sapien gravida donec ipsum, at porta justo. Velna
                            vitae auctor massa congue magna nihil impedit ligula risus. Mauris donec ociis and magnis
                            sapien etiam sapien sagittis congue tempor a gravida donec enim ipsum porta justo integer
                            undo odio velna. Maecenas gravida porttitor nunc, quis vehicula magna at luctus tempor.
                            Quisque vel
                            laoreet turpis. Urna augue, viverra a augue eget, dictum tempor diam. Sed pulvinar
                            consectetur
                            nibh, vel imperdiet dui varius viverra. Pellentesque ac massa lorem fusce eu tempor gravida
                            porttitor cursus fusce ugue egestas cursus magna nihil impedit
                        </p>
                    </div> <!-- END BLOG POST TEXT -->

                </div>
            </div> <!-- END SINGLE POST CONTENT -->
        </div>
    </section>
    <!-- END Resources LISTING -->
@endsection
