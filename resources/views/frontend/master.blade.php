<!DOCTYPE html>
<html lang="en">

<head>

    @include('frontend.layouts.stylesheet')

</head>



<body>

    <!-- PRELOADER SPINNER
  ============================================= -->
    {{-- @include('frontend.layouts.preloader') --}}

    <!-- PAGE CONTENT
  ============================================= -->
    <div id="page" class="page">

        <!-- HEADER
   ============================================= -->
        @include('frontend.layouts.header')
        <!-- END HEADER -->


        <!-- HERO-23
   ============================================= -->
        @include('frontend.layouts.hero_section')
        <!-- END HERO-23 -->



        <!-- FOURTH SECTION =========== -->

        @include('frontend.layouts.fourth_section')


        <!-- FEATURES-8
   ============================================= -->
        <section id="features-8" class="pb-60 features-section division">
            <div class="container">


                <!-- SECTION TITLE -->
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-8">
                        <div class="section-title title-01 mb-70">

                            <!-- Title -->
                            <h2 class="h2-md">Get Ready to Be Surprised</h2>

                            <!-- Text -->
                            <p class="p-xl">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis a
                                libero
                                tempus, blandit and cursus varius and magnis sapien
                            </p>

                        </div>
                    </div>
                </div>


                <!-- FEATURES-8 WRAPPER -->
                <div class="fbox-8-wrapper text-center">
                    <div class="row row-cols-1 row-cols-md-3">


                        <!-- FEATURE BOX #1 -->
                        <div class="col">
                            <div class="fbox-8 mb-40 wow fadeInUp">

                                <!-- Image -->
                                <div class="fbox-img bg-whitesmoke-gradient">
                                    <img class="img-fluid" src="assets/frontend/images/img-21.png" alt="feature-icon" />
                                </div>

                                <!-- Title -->
                                <h5 class="h5-md">Friendly Interface</h5>

                                <!-- Text -->
                                <p class="p-lg">Feugiat primis ultrice semper lacus cursus feugiat undo primis
                                    ultrice a
                                    ligula an auctor tempus magnis
                                </p>

                            </div>
                        </div>


                        <!-- FEATURE BOX #2 -->
                        <div class="col">
                            <div class="fbox-8 mb-40 wow fadeInUp">

                                <!-- Image -->
                                <div class="fbox-img bg-whitesmoke-gradient">
                                    <img class="img-fluid" src="assets/frontend/images/img-22.png" alt="feature-icon" />
                                </div>

                                <!-- Title -->
                                <h5 class="h5-md">Extremely Flexible</h5>

                                <!-- Text -->
                                <p class="p-lg">Feugiat primis ultrice semper lacus cursus feugiat undo primis
                                    ultrice a
                                    ligula an auctor tempus magnis
                                </p>

                            </div>
                        </div>


                        <!-- FEATURE BOX #3 -->
                        <div class="col">
                            <div class="fbox-8 mb-40 wow fadeInUp">

                                <!-- Image -->
                                <div class="fbox-img bg-whitesmoke-gradient">
                                    <img class="img-fluid" src="assets/frontend/images/img-24.png" alt="feature-icon" />
                                </div>

                                <!-- Title -->
                                <h5 class="h5-md">Extensions & Addons</h5>

                                <!-- Text -->
                                <p class="p-lg">Feugiat primis ultrice semper lacus cursus feugiat undo primis
                                    ultrice a
                                    ligula an auctor tempus magnis
                                </p>

                            </div>
                        </div>


                    </div> <!-- End row -->
                </div> <!-- END FEATURES-8 WRAPPER -->


            </div> <!-- End container -->
        </section> <!-- END FEATURES-8 -->

        <!-- FAQs-2
   ============================================= -->
        <section id="faqs-2" class="wide-60 faqs-section division">
            <div class="container">


                <!-- SECTION TITLE -->
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-8">
                        <div class="section-title title-01 mb-80">

                            <!-- Title -->
                            <h2 class="h2-md">Got Questions? Look Here</h2>

                            <!-- Text -->
                            <p class="p-xl">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis a
                                libero
                                tempus, blandit and cursus varius and magnis sapien
                            </p>

                        </div>
                    </div>
                </div>


                <!-- FAQs-2 QUESTIONS -->
                <div class="faqs-2-questions">
                    <div class="row row-cols-1 row-cols-lg-2">


                        <!-- QUESTIONS HOLDER -->
                        <div class="col">
                            <div class="questions-holder pr-15">


                                <!-- QUESTION #1 -->
                                <div class="question wow fadeInUp">

                                    <!-- Question -->
                                    <h5 class="h5-md">Can I see OLMO in action before purchasing?</h5>

                                    <!-- Answer -->
                                    <p class="p-lg">Etiam amet mauris suscipit in odio integer congue metus vitae
                                        arcu mollis
                                        blandit ultrice ligula egestas and magna suscipit lectus magna suscipit luctus
                                        blandit
                                        vitae
                                    </p>

                                </div>


                                <!-- QUESTION #2 -->
                                <div class="question wow fadeInUp">

                                    <!-- Question -->
                                    <h5 class="h5-md">What are the requirements for using OLMO?</h5>

                                    <!-- Answer -->
                                    <p class="p-lg">An enim nullam tempor sapien gravida a donec ipsum enim an porta
                                        justo
                                        integer at velna vitae auctor integer congue undo magna at pretium purus pretium
                                    </p>

                                </div>


                                <!-- QUESTION #3 -->
                                <div class="question wow fadeInUp">

                                    <!-- Question -->
                                    <h5 class="h5-md">Can I use OLMO on different devices?</h5>

                                    <!-- Answer -->
                                    <ul class="simple-list">

                                        <li class="list-item">
                                            <p class="p-lg">Fringilla risus, luctus mauris orci auctor purus ligula
                                                euismod
                                                pretium purus pretium rutrum tempor sapien
                                            </p>
                                        </li>

                                        <li class="list-item">
                                            <p class="p-lg">Nemo ipsam egestas volute turpis dolores ut aliquam
                                                quaerat sodales
                                                sapien undo pretium a purus
                                            </p>
                                        </li>

                                    </ul>

                                </div>


                            </div>
                        </div> <!-- END QUESTIONS HOLDER -->


                        <!-- QUESTIONS HOLDER -->
                        <div class="col">
                            <div class="questions-holder pl-15">


                                <!-- QUESTION #4 -->
                                <div class="question wow fadeInUp">

                                    <!-- Question -->
                                    <h5 class="h5-md">Do you have a free trial?</h5>

                                    <!-- Answer -->
                                    <p class="p-lg">Cubilia laoreet augue egestas and luctus donec curabite diam
                                        vitae dapibus
                                        libero and quisque gravida donec and neque. Blandit justo aliquam molestie nunc
                                        sapien
                                    </p>

                                </div>


                                <!-- QUESTION #5 -->
                                <div class="question wow fadeInUp">

                                    <!-- Question -->
                                    <h5 class="h5-md">How does OLMO handle my privacy?</h5>

                                    <!-- Answer -->
                                    <p class="p-lg">Etiam amet mauris suscipit sit amet in odio. Integer congue leo
                                        metus.
                                        Vitae arcu mollis blandit ultrice ligula
                                    </p>

                                    <!-- Answer -->
                                    <p class="p-lg">An enim nullam tempor sapien gravida donec congue leo metus.
                                        Vitae arcu
                                        mollis blandit integer at velna
                                    </p>

                                </div>


                                <!-- QUESTION #6 -->
                                <div class="question wow fadeInUp">

                                    <!-- Question -->
                                    <h5 class="h5-md">I have an issue with my account</h5>

                                    <!-- Answer -->
                                    <ul class="simple-list">

                                        <li class="list-item">
                                            <p class="p-lg">Fringilla risus, luctus mauris orci auctor purus</p>
                                        </li>

                                        <li class="list-item">
                                            <p class="p-lg">Quaerat sodales sapien euismod blandit purus and ipsum
                                                primis in
                                                cubilia laoreet augue luctus
                                            </p>
                                        </li>

                                    </ul>

                                </div>


                            </div>
                        </div> <!-- END QUESTIONS HOLDER -->


                    </div> <!-- End row -->
                </div> <!-- END FAQs-2 QUESTIONS -->


                <!-- MORE QUESTIONS BUTTON -->
                <div class="row">
                    <div class="col">
                        <div class="more-questions">
                            <h5 class="h5-sm">Have more questions? <a href="contacts.html">Ask your question here</a>
                            </h5>
                        </div>
                    </div>
                </div>


            </div> <!-- End container -->
        </section> <!-- END FAQs-2 -->




        <!-- CALL TO ACTION-11
   ============================================= -->
        <section id="cta-11" class="cta-section division">
            <div class="container">
                <div class="bg-tra-purple cta-11-wrapper">
                    <div class="row d-flex align-items-center">


                        <!-- CALL TO ACTION TEXT -->
                        <div class="col-lg-7 col-lg-7">
                            <div class="cta-11-txt">

                                <!-- Title -->
                                <h2 class="h2-xs">Ready to Join OLMO?</h2>

                                <!-- Text -->
                                <p class="p-lg">Donec vel sapien augue integer urna vel turpis cursus porta, mauris
                                    augue luctus dolor velna auctor congue tempus
                                </p>

                                <!-- Button -->
                                <a href="pricing.html" class="btn btn-violet-red tra-violet-red-hover">Get Started
                                    Now</a>

                            </div>
                        </div>


                        <!-- CALL TO ACTION BUTTON -->
                        <div class="col-lg-5">
                            <div class="text-end">
                                <div class="cta-11-img text-center">
                                    <img class="img-fluid" src="assets/frontend/images/img-25.png" alt="cta-image">
                                </div>
                            </div>
                        </div>


                    </div>
                </div> <!-- End row -->
            </div> <!-- End container -->
        </section> <!-- END CALL TO ACTION-11 -->




        <!-- FOOTER-1
   ============================================= -->
        @include('frontend.layouts.footer')
        <!-- END FOOTER-1 -->

    </div>
    <!-- END PAGE CONTENT -->




    <!-- EXTERNAL SCRIPTS
  ============================================= -->
    @include('frontend.layouts.script')

</body>

</html>
