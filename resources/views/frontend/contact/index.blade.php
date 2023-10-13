@extends('frontend.master')

@section('frontend_title', 'Contact Us')


@section('frontend_main_content')

    <div class="col-lg-12">
        <img style="width: 100%; height:270px" src="{{ asset('assets/frontend/images/banner/2.jpg') }}" alt="image">
    </div>

    <section id="terms-page" class="bg-snow terms-section division" style="padding-top: 35px; padding-bottom:70px">

        <div class="container">
            <div class="row">
                <div class="col-md-12 practice_area_header">
                    <h5 class="h5-lg">Contact Us</h5>
                    <div>
                        <span class="flaticon-phone-call"></span>
                        +880 1712020233, +880 1713302963
                    </div>
                    <div>
                        <span class="flaticon-email"></span>
                        info@thelcounsel.com
                    </div>
                </div>
            </div>

            <div class="row wow fadeInUp">
                <div class="col-md-4">
                    <div class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div>
                            <h5 class="h5-md">Office Address </h5>
                            <p>
                                Suite No. A-12, Green City Square <br>
                                750 Sajmasjid Road, Dhanmondi-1209
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div>
                            <h5 class="h5-md">
                                Supreme Court Address
                            </h5>
                            <p>
                                Room No. 352 <br>
                                Supreme Court Bar Association Building (Old) <br>
                                Ramna, Dhaka-1212, Bangladesh
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div>
                            <h5 class="h5-md"> UK Office </h5>
                            <p>
                                10, Alderman Avenue, Barking <br>
                                Essex IG11 0LX <br>
                                Tel: +44 (0) 741 968 3470
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row wow fadeInUp">
                <div class="col-md-5">
                    <h5>Leave your query to us
                    </h5>
                    <form action="">

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Enter name">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="Enter email">
                        </div>

                        <div class="mb-3">
                            <label for="mobile_number" class="form-label">Mobile Number</label>
                            <input type="text" name="mobile_number" class="form-control" id="mobile_number"
                                placeholder="Enter mobile number">
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Your Text</label>
                            <textarea class="form-control" name="message" id="message" rows="4" placeholder="Enter your text"></textarea>
                        </div>

                        <div class="mb-3">
                            <button type="submit" style="background-color: #444c5f; color:white"
                                class="btn">Send</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-7">
                    <div class="mt-3 card-body">
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe
                                    src="https://maps.google.com/maps?q=Suite%20No.%20A-12,%20Green%20City%20Square%20750%20Sajmasjid%20Road,%20Dhanmondi-1209&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                                    frameborder="0" scrolling="no" style="width: 770px; height: 400px;"></iframe>
                                <style>
                                    .mapouter {
                                        position: relative;
                                        height: 400px;
                                        width: 770px;
                                        background: #fff;
                                    }
                                </style><a href="https://www.eireportingonline.com/ircc-login/"
                                    style="color:#fff !important; position:absolute !important; top:0 !important; z-index:0 !important;">ircc
                                    login</a>
                                <style>
                                    .gmap_canvas {
                                        overflow: hidden;
                                        height: 400px;
                                        width: 770px
                                    }

                                    .gmap_canvas iframe {
                                        position: relative;
                                        z-index: 2
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
