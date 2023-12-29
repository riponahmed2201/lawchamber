<section class="wide-60 tabs-section division" style=" height: 440px; background-color: #12343b;">
    <div class="container">
        <div class="row wow fadeInUp">
            <div class="col-md-3">
                <div class="section-title">
                    <h2 style="color: white;"> Our Clients </h2>
                </div>
            </div>
            <div class="col-md-9">
                <p class="text-white p-sm">
                    The Law Counsel has been providing legal services to both national and international entities,
                    companies and corporations including airline companies, security and defense, oil and gas, banking
                    and financial institutions. <a href="/our-client-details"
                        style="text-decoration-line: none; text-decoration-color: white; color:#fff">
                        (see our Clients)
                    </a>
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
                            <div class="brand-logo" style="background-color: white; margin-left: 20px;">
                                {{-- <a href="/our-client-details?client={{ $value->category_id }}"> --}}
                                <img style="width: 191px; height: 96px; object-fit:contain" class="img-fluid"
                                    src="{{ asset('uploads/our_client/' . $value->logo) }}" alt="brand-logo" />
                                {{-- </a> --}}
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
