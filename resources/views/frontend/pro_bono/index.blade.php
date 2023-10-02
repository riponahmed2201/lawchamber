@extends('frontend.master')

@section('frontend_title', 'Pro Bono')

@section('frontend_main_content')
    <section class="container">
        <div class="animsition" data-animsition-in-class="fade-in" data-animsition-in-duration="800"
            data-animsition-out-class="fade-out" data-animsition-out-duration="800"
            style="animation-duration: 800ms; opacity: 1;">

            <div class="off-canvas-wrapper">
                <div class="off-canvas-wrapper-inner">
                    <div class="off-canvas-content">
                        <div id="page-full-width-homepage" class="full-width" role="main">
                            <div id="featuredImage" class="featured-image__header--image-wrapper"
                                style="position: relative; z-index: 0; background: none;">
                                <div class="featured-image__header--text-outer-wrapper row">
                                    <div class="featured-image__header--text-wrapper">
                                        <div class="featured-image__header--text-inner-wrapper">
                                            <div class="color__block vellum">
                                                <h1 class="page__header black">
                                                    Pro Bono
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="backstretch"
                                    style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; z-index: -999998; position: absolute; width: 100%; height: 215px;">
                                    <img src="{{ asset('assets/frontend/images/background-4.jpg') }}"
                                        style="position: absolute; margin: 0px; padding: 0px; border: none; max-height: none; max-width: none; z-index: -999999; width: 100%; height: 316.458px; left: 0px; top: -50.7292px;">
                                </div>
                            </div>

                            <div class="experience__wrapper row body__wrapper columns small-12 medium-12 large-12">
                                <div class="columns show-for-medium-up medium-12 large-12">
                                    <div class="row">
                                        <h3>Pro Bono</h3>
                                        <p style="text-align: justify; text-justify: inter-word;">
                                            Highlighting the chambers endeavor to uphold the rights of the underprivileged
                                            section of the people.

                                            <br> <br>

                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen
                                            book. It has survived not only five centuries, but also the leap into electronic
                                            typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                            with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                            recently with desktop publishing software like Aldus PageMaker including
                                            versions of Lorem Ipsum.

                                            <br> <br>

                                            It is a long established fact that a reader will be distracted by the readable
                                            content of a page when looking at its layout. The point of using Lorem Ipsum is
                                            that it has a more-or-less normal distribution of letters, as opposed to using
                                            'Content here, content here', making it look like readable English. Many desktop
                                            publishing packages and web page editors now use Lorem Ipsum as their default
                                            model text, and a search for 'lorem ipsum' will uncover many web sites still in
                                            their infancy. Various versions have evolved over the years, sometimes by
                                            accident, sometimes on purpose (injected humour and the like).
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
