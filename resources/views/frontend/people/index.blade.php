@extends('frontend.master')

@section('frontend_title', 'People')

@section('frontend_main_content')
    <section class="container">
        <div class="animsition" data-animsition-in-class="fade-in" data-animsition-in-duration="800"
            data-animsition-out-class="fade-out" data-animsition-out-duration="800"
            style="animation-duration: 800ms; opacity: 1;">
            <div id="page-full-width-homepage" class="full-width person-detail" role="main">
                <div id="featuredImage" class="featured-image__header--image-wrapper"
                    style="position: relative; z-index: 0; background: none;">

                    <div class="featured-image__header--text-outer-wrapper row">
                        <div class="featured-image__header--text-wrapper">
                            <div class="featured-image__header--text-inner-wrapper">
                                <div class="color__block vellum">
                                    <h1 class="page__header black">
                                        People
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="backstretch"
                        style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; z-index: -999998; position: absolute; width: 100%; height: 215px;">
                        <img src="{{ asset('assets/frontend/images/people/banner-people.jpg') }}"
                            style="position: absolute; margin: 0px; padding: 0px; border: none; max-height: none; max-width: none; z-index: -999999; width: 100%; height: 234.52px; left: 0px; top: -9.75991px;">
                    </div>
                </div>

                <div class="row">
                    <div
                        class="columns no__pad small-12 medium-12 large-12 relative float--right people__details--container">
                        <div class="padding__wrapper forty sides__only">
                            <div class="columns small-12 medium-12 large-12 relative margin-bottom--20">
                                <div class="columns small-12 medium-12 large-12 relative">

                                    <div class="columns small-2 medium-2 large-2 relative">
                                        <div class="letter__anchor--indicator">
                                            <div class="white letter__divider letter__anchor--inner-indicator">
                                                All People
                                            </div>
                                        </div>
                                    </div>

                                    <div class="columns small-10 medium-10 large-10 relative">
                                        <span class="page__divider grey inline__block people">
                                        </span>
                                    </div>

                                </div>

                                <div class="person__wrapper columns medium-12 large-6 small-12 min--height__225 end">
                                    <div class="columns medium-6 large-4 small-12">
                                        <div class="people__image__container">
                                            <img class="people__details" style="width: 150px; height: 139px;"
                                                src="assets/frontend/images/people/Abdur-Razzaq.jpg"
                                                alt="Abdur Razzaq-Siddiq">
                                        </div>
                                    </div>
                                    <div class="columns medium-6 large-7 small-12">
                                        <div class="people__details--outer-wrapper">
                                            <div class="people__details--inner-wrapper">
                                                <a href="#" class="people__details title__text smaller">
                                                    Abdur Razzaq-Siddiq
                                                </a>

                                                <p class="people__details tag__text">
                                                    Head of Chamber
                                                </p>

                                                <span class="people__details list-divider red"></span>
                                                <p class="people__details body__text">
                                                    Dhaka, Bangladesh </p>
                                                <p class="people__details body__text">+8801700-000000
                                                </p>
                                                <a href="mailto:abdurrazzaq@thelawcounsel.com"
                                                    class="email--people--link red link inline__link"
                                                    style="font-size: 13px;">
                                                    abdurrazzaq@thelawcounsel.com
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="person__wrapper columns medium-12 large-6 small-12 min--height__225 end">
                                    <div class="columns medium-6 large-4 small-12">
                                        <div class="people__image__container">
                                            <img class="people__details" style="width: 150px; height: 139px;"
                                                src="assets/frontend/images/people/Ehsan-Abdullah-Siddiq-Partner-Law-Counsel-200x300-1.jpg"
                                                alt="Ehsan Abdullah Siddiq">
                                        </div>
                                    </div>
                                    <div class="columns medium-6 large-7 small-12">
                                        <div class="people__details--outer-wrapper">
                                            <div class="people__details--inner-wrapper">
                                                <a href="#" class="people__details title__text smaller">
                                                    Ehsan Abdullah Siddiq
                                                </a>

                                                <p class="people__details tag__text">
                                                    Partner
                                                </p>

                                                <span class="people__details list-divider red"></span>
                                                <p class="people__details body__text">
                                                    Dhaka, Bangladesh </p>
                                                <p class="people__details body__text">+8801700-000000
                                                </p>
                                                <a href="mailto:ehsan@thelawcounsel.com"
                                                    class="email--people--link red link inline__link"
                                                    style="font-size: 13px;">
                                                    ehsan@thelawcounsel.com
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="person__wrapper columns medium-12 large-6 small-12 min--height__225 end">
                                    <div class="columns medium-6 large-4 small-12">
                                        <div class="people__image__container">
                                            <img class="people__details" style="width: 150px; height: 139px;"
                                                src="assets/frontend/images/people/Imran-Siddiq-partner-the-law-counsel-bangladesh.jpeg"
                                                alt="Imran Siddiq">
                                        </div>
                                    </div>
                                    <div class="columns medium-6 large-7 small-12">
                                        <div class="people__details--outer-wrapper">
                                            <div class="people__details--inner-wrapper">
                                                <a href="#" class="people__details title__text smaller">
                                                    Imran Siddiq
                                                </a>

                                                <p class="people__details tag__text">
                                                    partner
                                                </p>

                                                <span class="people__details list-divider red"></span>
                                                <p class="people__details body__text">
                                                    Dhaka, Bangladesh </p>
                                                <p class="people__details body__text">+8801700-000000
                                                </p>
                                                <a href="mailto:imran@thelawcounsel.com"
                                                    class="email--people--link red link inline__link"
                                                    style="font-size: 13px;">
                                                    imran@thelawcounsel.com
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="person__wrapper columns medium-12 large-6 small-12 min--height__225 end">
                                    <div class="columns medium-6 large-4 small-12">
                                        <div class="people__image__container">
                                            <img class="people__details" style="width: 150px; height: 139px;"
                                                src="assets/frontend/images/people/Ariful-Huq-Associate-pavty6uk97ru5jqz8tj54hcefhppuif62055f3eydw.jpg"
                                                alt="Md. Ariful Haque">
                                        </div>
                                    </div>
                                    <div class="columns medium-6 large-7 small-12">
                                        <div class="people__details--outer-wrapper">
                                            <div class="people__details--inner-wrapper">
                                                <a href="#" class="people__details title__text smaller">
                                                    Md. Ariful Haque
                                                </a>

                                                <p class="people__details tag__text">
                                                    Associate
                                                </p>

                                                <span class="people__details list-divider red"></span>
                                                <p class="people__details body__text">
                                                    Dhaka, Bangladesh </p>
                                                <p class="people__details body__text">+8801700-000000
                                                </p>
                                                <a href="mailto:arif@thelawcounsel.com"
                                                    class="email--people--link red link inline__link"
                                                    style="font-size: 13px;">
                                                    arif@thelawcounsel.com
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="person__wrapper columns medium-12 large-6 small-12 min--height__225 end">
                                    <div class="columns medium-6 large-4 small-12">
                                        <div class="people__image__container">
                                            <img class="people__details" style="width: 150px; height: 139px;"
                                                src="assets/frontend/images/people/Dr.-Chowdhury-Ishrak-Ahmed-Siddiky-Senior-Associates-Law-Counsel-200x300-1.jpeg"
                                                alt="Dr. Chowdhury Ishrak Ahmed Siddiky">
                                        </div>
                                    </div>
                                    <div class="columns medium-6 large-7 small-12">
                                        <div class="people__details--outer-wrapper">
                                            <div class="people__details--inner-wrapper">
                                                <a href="#" class="people__details title__text smaller">
                                                    Dr. Chowdhury Ishrak Ahmed Siddiky
                                                </a>

                                                <p class="people__details tag__text">
                                                    Senior Associate
                                                </p>

                                                <span class="people__details list-divider red"></span>
                                                <p class="people__details body__text">
                                                    Dhaka, Bangladesh </p>
                                                <p class="people__details body__text">+8801700-000000
                                                </p>
                                                <a href="mailto:ishrak@thelawcounsel.com"
                                                    class="email--people--link red link inline__link"
                                                    style="font-size: 13px;">
                                                    ishrak@thelawcounsel.com
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-letter="A"
                                    class="person__wrapper columns medium-12 large-6 small-12 min--height__225 end">
                                    <div class="columns medium-6 large-4 small-12">
                                        <div class="people__image__container">
                                            <img class="people__details" style="width: 150px; height: 139px;"
                                                src="assets/frontend/images/people/Syed-Mohammad-Raihan-Uddin-200x300-2.jpeg"
                                                alt="Syed Mohammad Raihan Uddin">
                                        </div>
                                    </div>
                                    <div class="columns medium-6 large-7 small-12">
                                        <div class="people__details--outer-wrapper">
                                            <div class="people__details--inner-wrapper">
                                                <a href="#" class="people__details title__text smaller">
                                                    Syed Mohammad Raihan Uddin
                                                </a>

                                                <p class="people__details tag__text">
                                                    Senior Associate
                                                </p>

                                                <span class="people__details list-divider red"></span>
                                                <p class="people__details body__text">
                                                    Dhaka, Bangladesh </p>
                                                <p class="people__details body__text">+8801700-000000
                                                </p>
                                                <a href="mailto:raihan@thelawcounsel.com"
                                                    class="email--people--link red link inline__link"
                                                    style="font-size: 13px;">
                                                    raihan@thelawcounsel.com
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div data-letter="A"
                                    class="person__wrapper columns medium-12 large-6 small-12 min--height__225 end">
                                    <div class="columns medium-6 large-4 small-12">
                                        <div class="people__image__container">
                                            <img class="people__details" style="width: 150px; height: 139px;"
                                                src="assets/frontend/images/people/Syfullah-Al-Muzahid.jpg"
                                                alt="Syfullah Al Muzahid">
                                        </div>
                                    </div>
                                    <div class="columns medium-6 large-7 small-12">
                                        <div class="people__details--outer-wrapper">
                                            <div class="people__details--inner-wrapper">
                                                <a href="#" class="people__details title__text smaller">
                                                    Syfullah Al Muzahid
                                                </a>

                                                <p class="people__details tag__text">
                                                    Associate
                                                </p>

                                                <span class="people__details list-divider red"></span>
                                                <p class="people__details body__text">
                                                    Dhaka, Bangladesh </p>
                                                <p class="people__details body__text">+8801700-000000
                                                </p>
                                                <a href="mailto:muzahid@thelawcounsel.com"
                                                    class="email--people--link red link inline__link"
                                                    style="font-size: 13px;">
                                                    muzahid@thelawcounsel.com
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-letter="A"
                                    class="person__wrapper columns medium-12 large-6 small-12 min--height__225 end">
                                    <div class="columns medium-6 large-4 small-12">
                                        <div class="people__image__container">
                                            <img class="people__details" style="width: 150px; height: 139px;"
                                                src="assets/frontend/images/people/Najib-Momen-Associate-pavty25db1lejhxt09i0a0j3gkcvs0widcvq0plx90.jpg"
                                                alt="Md. Nazibur Rahman">
                                        </div>
                                    </div>
                                    <div class="columns medium-6 large-7 small-12">
                                        <div class="people__details--outer-wrapper">
                                            <div class="people__details--inner-wrapper">
                                                <a href="#" class="people__details title__text smaller">
                                                    Md. Nazibur Rahman
                                                </a>

                                                <p class="people__details tag__text">
                                                    Associates
                                                </p>

                                                <span class="people__details list-divider red"></span>
                                                <p class="people__details body__text">
                                                    Dhaka, Bangladesh </p>
                                                <p class="people__details body__text">+8801700-000000
                                                </p>
                                                <a href="mailto:nazibur@thelawcounsel.com"
                                                    class="email--people--link red link inline__link"
                                                    style="font-size: 13px;">
                                                    nazibur@thelawcounsel.com
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div data-letter="A"
                                    class="person__wrapper columns medium-12 large-6 small-12 min--height__225 end">
                                    <div class="columns medium-6 large-4 small-12">
                                        <div class="people__image__container">
                                            <img class="people__details" style="width: 150px; height: 139px;"
                                                src="assets/frontend/images/people/Moniruzzaman-pkqvkdgq649afhd4fkxzdpp6vl6az645ik5sv9xz10.jpg"
                                                alt="Md. Moniruzzaman">
                                        </div>
                                    </div>
                                    <div class="columns medium-6 large-7 small-12">
                                        <div class="people__details--outer-wrapper">
                                            <div class="people__details--inner-wrapper">
                                                <a href="#" class="people__details title__text smaller">
                                                    Md. Moniruzzaman
                                                </a>

                                                <p class="people__details tag__text">
                                                    Associate
                                                </p>

                                                <span class="people__details list-divider red"></span>
                                                <p class="people__details body__text">
                                                    Dhaka, Bangladesh </p>
                                                <p class="people__details body__text">+8801700-000000
                                                </p>
                                                <a href="mailto:moniruzzaman@thelawcounsel.com"
                                                    class="email--people--link red link inline__link"
                                                    style="font-size: 13px;">
                                                    moniruzzaman@thelawcounsel.com
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div data-letter="A"
                                    class="person__wrapper columns medium-12 large-6 small-12 min--height__225 end">
                                    <div class="columns medium-6 large-4 small-12">
                                        <div class="people__image__container">
                                            <img class="people__details" style="width: 150px; height: 139px;"
                                                src="assets/frontend/images/people/Shadia-Afrin-Jenny-law-counsel-207x300-1.jpeg"
                                                alt="Shadia Afrin Jeny">
                                        </div>
                                    </div>
                                    <div class="columns medium-6 large-7 small-12">
                                        <div class="people__details--outer-wrapper">
                                            <div class="people__details--inner-wrapper">
                                                <a href="#" class="people__details title__text smaller">
                                                    Shadia Afrin Jeny
                                                </a>

                                                <p class="people__details tag__text">
                                                    Associate
                                                </p>

                                                <span class="people__details list-divider red"></span>
                                                <p class="people__details body__text">
                                                    Dhaka, Bangladesh </p>
                                                <p class="people__details body__text">+8801700-000000
                                                </p>
                                                <a href="mailto:shadia@thelawcounsel.com"
                                                    class="email--people--link red link inline__link"
                                                    style="font-size: 13px;">
                                                    shadia@thelawcounsel.com
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div data-letter="A"
                                    class="person__wrapper columns medium-12 large-6 small-12 min--height__225 end">
                                    <div class="columns medium-6 large-4 small-12">
                                        <div class="people__image__container">
                                            <img class="people__details" style="width: 150px; height: 139px;"
                                                src="assets/frontend/images/people/Mohammad-Shahnewaz-pilqh9695tuudsswwsb9y34pv1t8s3tljnv7g01s44.jpeg"
                                                alt="Mohammad K Shahnewaz">
                                        </div>
                                    </div>
                                    <div class="columns medium-6 large-7 small-12">
                                        <div class="people__details--outer-wrapper">
                                            <div class="people__details--inner-wrapper">
                                                <a href="#" class="people__details title__text smaller">
                                                    Mohammad K Shahnewaz
                                                </a>

                                                <p class="people__details tag__text">
                                                    Associate
                                                </p>

                                                <span class="people__details list-divider red"></span>
                                                <p class="people__details body__text">
                                                    Dhaka, Bangladesh </p>
                                                <p class="people__details body__text">+8801700-000000
                                                </p>
                                                <a href="mailto:shahnewaz@thelawcounsel.com"
                                                    class="email--people--link red link inline__link"
                                                    style="font-size: 13px;">
                                                    shahnewaz@thelawcounsel.com
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div data-letter="A"
                                    class="person__wrapper columns medium-12 large-6 small-12 min--height__225 end">
                                    <div class="columns medium-6 large-4 small-12">
                                        <div class="people__image__container">
                                            <img class="people__details" style="width: 150px; height: 139px;"
                                                src="assets/frontend/images/people/Md.-Shabriar-Alam-Shafi-law-counsel-pilqh88eyztk26ua29wndld99nxvkepv7j7pyq36ac.jpeg"
                                                alt="Md. Shabriar Alam Shafi">
                                        </div>
                                    </div>
                                    <div class="columns medium-6 large-7 small-12">
                                        <div class="people__details--outer-wrapper">
                                            <div class="people__details--inner-wrapper">
                                                <a href="#" class="people__details title__text smaller">
                                                    Md. Shabriar Alam Shafi
                                                </a>

                                                <p class="people__details tag__text">
                                                    Associate
                                                </p>

                                                <span class="people__details list-divider red"></span>
                                                <p class="people__details body__text">
                                                    Dhaka, Bangladesh </p>
                                                <p class="people__details body__text">+8801700-000000
                                                </p>
                                                <a href="mailto:shafi@thelawcounsel.com"
                                                    class="email--people--link red link inline__link"
                                                    style="font-size: 13px;">
                                                    shafi@thelawcounsel.com
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div data-letter="A"
                                    class="person__wrapper columns medium-12 large-6 small-12 min--height__225 end">
                                    <div class="columns medium-6 large-4 small-12">
                                        <div class="people__image__container">
                                            <img class="people__details" style="width: 150px; height: 139px;"
                                                src="assets/frontend/images/people/Sunny-A.-Haque-law-counsel-200x300-1.jpeg"
                                                alt="Sunny A. Haque">
                                        </div>
                                    </div>
                                    <div class="columns medium-6 large-7 small-12">
                                        <div class="people__details--outer-wrapper">
                                            <div class="people__details--inner-wrapper">
                                                <a href="#" class="people__details title__text smaller">
                                                    Sunny A. Haque
                                                </a>

                                                <p class="people__details tag__text">
                                                    Associate
                                                </p>

                                                <span class="people__details list-divider red"></span>
                                                <p class="people__details body__text">
                                                    Dhaka, Bangladesh </p>
                                                <p class="people__details body__text">+8801700-000000
                                                </p>
                                                <a href="mailto:sunny@thelawcounsel.com"
                                                    class="email--people--link red link inline__link"
                                                    style="font-size: 13px;">
                                                    sunny@thelawcounsel.com
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div data-letter="A"
                                    class="person__wrapper columns medium-12 large-6 small-12 min--height__225 end">
                                    <div class="columns medium-6 large-4 small-12">
                                        <div class="people__image__container">
                                            <img class="people__details" style="width: 150px; height: 139px;"
                                                src="assets/frontend/images/people/Mahmud-Al-Mamun-law-counsel-200x300-1.jpeg"
                                                alt="Mahmud Al Mamun">
                                        </div>
                                    </div>
                                    <div class="columns medium-6 large-7 small-12">
                                        <div class="people__details--outer-wrapper">
                                            <div class="people__details--inner-wrapper">
                                                <a href="#" class="people__details title__text smaller">
                                                    Mahmud Al Mamun
                                                </a>

                                                <p class="people__details tag__text">
                                                    Associate
                                                </p>

                                                <span class="people__details list-divider red"></span>
                                                <p class="people__details body__text">
                                                    Dhaka, Bangladesh </p>
                                                <p class="people__details body__text">+8801700-000000
                                                </p>
                                                <a href="mailto:mamun@thelawcounsel.com"
                                                    class="email--people--link red link inline__link"
                                                    style="font-size: 13px;">
                                                    mamun@thelawcounsel.com
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div data-letter="A"
                                    class="person__wrapper columns medium-12 large-6 small-12 min--height__225 end">
                                    <div class="columns medium-6 large-4 small-12">
                                        <div class="people__image__container">
                                            <img class="people__details" style="width: 150px; height: 139px;"
                                                src="assets/frontend/images/people/Kaium-Khan-law-counsel-200x300-1.jpeg"
                                                alt="Kaium Khan">
                                        </div>
                                    </div>
                                    <div class="columns medium-6 large-7 small-12">
                                        <div class="people__details--outer-wrapper">
                                            <div class="people__details--inner-wrapper">
                                                <a href="#" class="people__details title__text smaller">
                                                    Kaium Khan
                                                </a>

                                                <p class="people__details tag__text">
                                                    Junior Associate
                                                </p>

                                                <span class="people__details list-divider red"></span>
                                                <p class="people__details body__text">
                                                    Dhaka, Bangladesh </p>
                                                <p class="people__details body__text">+8801700-000000
                                                </p>
                                                <a href="mailto:kaium@thelawcounsel.com"
                                                    class="email--people--link red link inline__link"
                                                    style="font-size: 13px;">
                                                    kaium@thelawcounsel.com
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div data-letter="A"
                                    class="person__wrapper columns medium-12 large-6 small-12 min--height__225 end">
                                    <div class="columns medium-6 large-4 small-12">
                                        <div class="people__image__container">
                                            <img class="people__details" style="width: 150px; height: 139px;"
                                                src="assets/frontend/images/people/Faran-Md.-Aaraf-law-counsel-200x300-1.jpg"
                                                alt="Faran Md. Aaraf">
                                        </div>
                                    </div>
                                    <div class="columns medium-6 large-7 small-12">
                                        <div class="people__details--outer-wrapper">
                                            <div class="people__details--inner-wrapper">
                                                <a href="#" class="people__details title__text smaller">
                                                    Faran Md. Aaraf
                                                </a>

                                                <p class="people__details tag__text">
                                                    Research Associate
                                                </p>

                                                <span class="people__details list-divider red"></span>
                                                <p class="people__details body__text">
                                                    Dhaka, Bangladesh </p>
                                                <p class="people__details body__text">+8801700-000000
                                                </p>
                                                <a href="mailto:faran@thelawcounsel.com"
                                                    class="email--people--link red link inline__link"
                                                    style="font-size: 13px;">
                                                    faran@thelawcounsel.com
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div data-letter="A"
                                    class="person__wrapper columns medium-12 large-6 small-12 min--height__225 end">
                                    <div class="columns medium-6 large-4 small-12">
                                        <div class="people__image__container">
                                            <img class="people__details" style="width: 150px; height: 139px;"
                                                src="assets/frontend/images/people/md-sajib-law-counsel-200x300-1.jpeg"
                                                alt="Md. Sajib">
                                        </div>
                                    </div>
                                    <div class="columns medium-6 large-7 small-12">
                                        <div class="people__details--outer-wrapper">
                                            <div class="people__details--inner-wrapper">
                                                <a href="#" class="people__details title__text smaller">
                                                    Md. Sajib
                                                </a>

                                                <p class="people__details tag__text">
                                                    Pupil
                                                </p>

                                                <span class="people__details list-divider red"></span>
                                                <p class="people__details body__text">
                                                    Dhaka, Bangladesh </p>
                                                <p class="people__details body__text">+8801700-000000
                                                </p>
                                                <a href="mailto:sajib@thelawcounsel.com"
                                                    class="email--people--link red link inline__link"
                                                    style="font-size: 13px;">
                                                    sajib@brownrudnick.com
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Start When click email then show the modal  -->
                <div id="emailModal" class="vellum black--vellum modal__background diversity hidden">
                    <div class="row">
                        <div class="diversity__modal--outer-wrapper table__wrapper relative">
                            <div class="diversity__modal--inner-wrapper table__innner">
                                <div class="diversity__modal--text-wrapper email__modal">
                                    <p class="title__text text-align__center">
                                        Notice
                                    </p>
                                    <p class="modal__text">
                                        You understand and agree that transmitting information to Brown Rudnick by e-mail
                                        does not establish an attorney-client relationship. By clicking the "Agree" link
                                        below, you acknowledge that (i) Brown Rudnick has no obligation to maintain the
                                        confidentiality of any information you submit to Brown Rudnick unless Brown Rudnick
                                        already represents you or Brown Rudnick later agrees to represent you; thus, if you
                                        are not a client, information you submit to Brown Rudnick by e-mail may be disclosed
                                        to others and (ii) you have read and understand the <a
                                            class="link red inline__link" href="/terms-of-use/" target="_blank">Brown
                                            Rudnick Terms of Use</a> and <a class="link red inline__link"
                                            href="/privacy-policy/" target="_blank">Privacy
                                            Policy</a> and that you agree to be bound by the terms and conditions of such
                                        Terms of Use and Privacy Policy.
                                    </p>
                                    <p class="modal__text">
                                        If you would like to discuss becoming a client, please contact one of Brown
                                        Rudnick's attorneys to arrange for a meeting or telephone conference. Thank you for
                                        your interest in Brown Rudnick.
                                    </p>

                                    <div class="text-align__center">
                                        <div class="small-6 medium-4 large-4" style="margin: 0 auto;">
                                            <a id="email-modal-close">
                                                <p class="sites-button modal-button">agree</p>
                                            </a>
                                        </div>
                                        <div class="small-6 medium-4 large-4" style="margin: 0 auto;">
                                            <a id="no-email-modal-close">
                                                <p class="sites-button modal-button">disagree</p>
                                            </a>
                                        </div>
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
