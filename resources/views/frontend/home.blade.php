@extends('frontend.home_master')

@section('frontend_title', 'Home')

@section('frontend_main_content')

    <!-- HERO-23-->
    @include('frontend.layouts.hero_section')
    <!-- END HERO-23 -->

    <!-- FOURTH SECTION -->

    @include('frontend.layouts.fourth_section')

    <!-- Start Our Clients -->
    @include('frontend.home_pages.our_client')
    <!-- End Our Clients -->

    <!-- BRANDS -->
    <div id="brands-1" class="wide-60 tabs-section division">
        <div class="container">

            <!-- BRANDS TITLE -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title mb-30">
                        <h2>Our Clients Around the World</h2>
                    </div>
                </div>
            </div>

            <!-- Brands Carousel -->
            <div class="row">
                <div class="col text-center">
                    <div class="owl-carousel brands-carousel">

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <img class="img-fluid" src="assets/frontend/images/brand-1.png" alt="brand-logo" />
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <img class="img-fluid" src="assets/frontend/images/brand-2.png" alt="brand-logo" />
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <img class="img-fluid" src="assets/frontend/images/brand-3.png" alt="brand-logo" />
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <img class="img-fluid" src="assets/frontend/images/brand-4.png" alt="brand-logo" />
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <img class="img-fluid" src="assets/frontend/images/brand-5.png" alt="brand-logo">
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <img class="img-fluid" src="assets/frontend/images/brand-6.png" alt="brand-logo" />
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <img class="img-fluid" src="assets/frontend/images/brand-7.png" alt="brand-logo" />
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <img class="img-fluid" src="assets/frontend/images/brand-8.png" alt="brand-logo" />
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <img class="img-fluid" src="assets/frontend/images/brand-9.png" alt="brand-logo" />
                        </div>


                    </div>
                </div>
            </div> <!-- End Brands Carousel -->


        </div> <!-- End container -->
    </div> <!-- END BRANDS-1 -->

    <!-- News & Updates -->
    <section id="faqs-2" class="mt-30 tabs-section division">
        <div class="container">

            <!-- SECTION TITLE -->
            <div class="row ">
                <div class="col-md-6">
                    <div class="section-title mb-30">
                        <h2>Pro Bono</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-title mb-30">
                        <h2>News & Updates</h2>
                    </div>
                </div>
            </div>

            <div class="faqs-2-questions">
                <div class="row">
                    <div class="col-md-6">
                        <div class="questions-holder pr-15">
                            <div class="question wow fadeInUp">
                                <p class="p-sm">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                                    molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                                    numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                                    optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                                    obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                                    nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                                    tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
                                    quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos
                                    sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="questions-holder">
                            <div class="question wow fadeInUp">
                                <p class="p-sm">
                                    <strong> 06.10.23</strong> <br>
                                    <a href="#" style="color: #5171fd">
                                        Cubilia laoreet augue egestas and luctus donec curabite diam
                                        vitae dapibus libero and quisque gravida donec and neque.
                                    </a>
                                </p>
                                <p class="p-sm">
                                    <strong> 06.10.23</strong> <br>
                                    <a href="#" style="color: #5171fd">
                                        Cubilia laoreet augue egestas and luctus donec curabite diam
                                        vitae dapibus libero and quisque gravida donec and neque.
                                    </a>
                                </p>
                                <p class="p-sm">
                                    <strong> 06.10.23</strong> <br>
                                    <a href="#" style="color: #5171fd">
                                        Cubilia laoreet augue egestas and luctus donec curabite diam
                                        vitae dapibus libero and quisque gravida donec and neque.
                                    </a>
                                </p>

                                <p class="p-sm">
                                    <a href="#" class="btn btn-tra-grey skyblue-hover">
                                        See more >
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End container -->
    </section> <!-- END FAQs-2 -->

@endsection
