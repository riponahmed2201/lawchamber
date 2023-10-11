<link href="assets/frontend/css/custom_css.css" rel="stylesheet">

<section class="topic-selector">

    <div class="topic-selector__background">
        <div class="topic-selector__background-image" data-index="0"
            style="background-image: url({{ asset('assets/frontend/images/fourth_section/new-trending-content-image-march-2023.jpg') }});">
        </div>
        <div class="topic-selector__background-image" data-index="1"
            style="background-image: url({{ asset('assets/frontend/images/fourth_section/one.jpg') }});">
        </div>
        <div class="topic-selector__background-image" data-index="2"
            style="background-image: url({{ asset('assets/frontend/images/fourth_section/workforce_redesign_hero-image_1440x400px.png') }});">
        </div>
        <div class="topic-selector__background-image" data-index="3"
            style="background-image: url({{ asset('assets/frontend/images/fourth_section/whistleblowing_background_header_1440x400.png') }});">
        </div>
    </div>

    <div class="topic-selector__tiles topic-selector__tiles--four-grid">
        <div class="topic-selector__tile topic-selector__header justify-content-center" data-target="0">Featured Content</div>
        <a class="topic-selector__tile" data-target="1"
            data-src="{{ asset('assets/frontend/images/fourth_section/new-trending-content-image-march-2023.jpg') }}"
            href="#" target="_self">
            <div class="topic-selector__title">Practice Areas</div>
            <div class="topic-selector__card">
                <div class="topic-selector__card-inner">
                    <div class="topic-selector__card-title">Practice Areas</div>
                    <div class="topic-selector__card-content">The financial sector has exemplified the massive benefits
                        that come from embracing innovation and digital disruption, but staying on the cutting edge of
                        progress demands constant evolution.</div>

                    <div class="topic-selector__card-link">
                        <span class="link--bold link--bold-white">Learn More&nbsp;</span>
                    </div>
                </div>
            </div>
        </a>
        <a class="topic-selector__tile" data-target="2"
            data-src="{{ asset('assets/frontend/images/fourth_section/one.jpg') }}" href="#" target="_self">
            <div class="topic-selector__title">International Recognition</div>
            <div class="topic-selector__card">
                <div class="topic-selector__card-inner">
                    <div class="topic-selector__card-title">International Recognition</div>
                    <div class="topic-selector__card-content">Managing the impact of economic volatility on the
                        workforce.</div>

                    <div class="topic-selector__card-link">
                        <span class="link--bold link--bold-white">Learn More&nbsp;</span>
                    </div>
                </div>
            </div>
        </a>
        <a class="topic-selector__tile" data-target="3"
            data-src="{{ asset('assets/frontend/images/fourth_section/whistleblowing_background_header_1440x400.png') }}"
            href="#" target="_self">
            <div class="topic-selector__title">Resources</div>
            <div class="topic-selector__card">
                <div class="topic-selector__card-inner">
                    <div class="topic-selector__card-title">Resources</div>
                    <div class="topic-selector__card-content">Explore key developments and best practices in the
                        whistleblowing space.&nbsp;</div>

                    <div class="topic-selector__card-link">
                        <span class="link--bold link--bold-white">Learn More&nbsp;</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
</section>
