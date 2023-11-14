<section class="wide-60 tabs-section division" style=" height: 440px; background-color: #e1b382;">
    <div class="container">
        <div class="row wow fadeInUp">
            <div class="col-md-4">
                <h2 style="font-size: 40px; color: white; margin-right: 40px; font-weight: bold;">
                    Our Client
                </h2>
            </div>
            <div class="col-md-8">
                <p class="text-white p-sm" style="margin-top: 30px">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi voluptatem nulla, tempore saepe,
                    eius doloribus autem, obcaecati reiciendis impedit nisi optio quisquam aut odit dolorum! Velit
                    impedit necessitatibus nihil consectetur.
                </p>
            </div>
        </div>
    </div>

    <div id="brands-1" class="wide-60 tabs-section division">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="owl-carousel brands-carousel">

                        @foreach ($clientList as $value)
                            <div class="brand-logo"
                                style="background-color: white; margin-left: 20px; object-fit:contain">
                                <a href="{{ route('frontend.ourClientDetails', $value->category_id) }}">
                                    <img style="width: 191px; height: 96px" class="img-fluid"
                                        src="{{ asset('uploads/our_client/' . $value->logo) }}" alt="brand-logo" />
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
