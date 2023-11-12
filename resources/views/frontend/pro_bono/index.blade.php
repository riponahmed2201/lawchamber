@extends('frontend.master')

@section('frontend_title', 'Pro Bono')

@section('frontend_main_content')
    <div class="col-lg-12">
        <img style="width: 100%; height:270px" src="{{ asset('assets/frontend/images/banner/2.jpg') }}" alt="image">
    </div>

    <section id="terms-page" class="bg-snow terms-section division"
        style="padding-top: 35px; padding-bottom:70px; background-image: url({{ asset('assets/frontend/images/common-bg.png') }})">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="h5-lg practice_area_header">
                        Pro Bono
                    </h5>
                </div>
            </div>

            <div class="row wow fadeInUp">
                <div class="team-members-wrapper">
                    <div class="row">
                        <p style="font-size:15px">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora provident consectetur cumque
                            enim beatae, sapiente saepe, delectus dolore, cum rem dolorem doloribus voluptate fugit repellat
                            sint similique illum iusto magni.
                        </p>
                    </div>
                </div>
            </div>
        </div> <!-- End container -->
    </section>

@endsection
