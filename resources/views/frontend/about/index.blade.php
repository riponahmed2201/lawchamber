@extends('frontend.master')

@section('frontend_title', 'About Us')

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
                                                    About us
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="backstretch"
                                    style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; z-index: -999998; position: absolute; width: 100%; height: 215px;">
                                    <img src="{{ asset('assets/frontend/images/practices-areas/banner.jpg') }}"
                                        style="position: absolute; margin: 0px; padding: 0px; border: none; max-height: none; max-width: none; z-index: -999999; width: 100%; height: 316.458px; left: 0px; top: -50.7292px;">
                                </div>
                            </div>

                            <div class="experience__wrapper row body__wrapper columns small-12 medium-12 large-12">
                                <div class="columns show-for-medium-up medium-12 large-12">
                                    <div class="row">
                                        <h3>About</h3>
                                        <p style="text-align: justify; text-justify: inter-word;">
                                            Established in 1990, 'The Law Counsel' is an international law firm based in
                                            Bangladesh which is widely recognized as one of leading chambers in the country.
                                            The firm is best known for its specializations in commercial, employment, labor
                                            and public law, having been involved in a number of landmark Supreme Court cases
                                            of profound jurisprudential significance. The firm also a substantial practice
                                            in telecommunications, intellectual property and securities and exchange laws.
                                            As a TRACE Partner firm, The Law Counsel frequently advises banks and financial
                                            institutions regarding application of anti-corruption and anti-mony laundering
                                            legislations.
                                        </p>
                                        <h3>Who Are We?</h3>
                                        <p style="text-align: justify; text-justify: inter-word;">
                                            The Law Counsel regularly collaborates with foreign firms in providing services
                                            in Bangladesh. It has worked extensively with Baker & Mckenzie LLP and Willkie
                                            Farr & Gallagher LLP in the United States. In the United Kingdom, it has
                                            provided legal assistance to Mayer Brown LLP, Field Fisher and Norton Rose
                                            Fulbright LLP. From 2011 to 2014, the firm collaborated with 9 Bedford Row of
                                            London, UK in providing legal services in Bangladesh. The firm’s associated
                                            office in London provides consultancy services regarding various aspects of UK
                                            and Bangladesh legislations. The firm’s senior partner, Mr. Abdur Razzaq,
                                            practices in both Bangladesh and the United Kingdom.
                                        </p>
                                        <p style="text-align: justify; text-justify: inter-word;">
                                            The areas of practice of the Law Counsel include Administrative Law, Admiralty
                                            and Maritime Law, Advertising and Marketing, Agency and Distributorship,
                                            Arbitration and Mediation, Aviation and Aerospace, Anti-Trust and Trade
                                            Regulation, Bankruptcy, International Banking, Business Law, Commercial Law,
                                            Telecommunication Contracts, Company Law, Computer Contracts, Constitutional
                                            Law, Construction, Copyright, Corporate Law, Criminal Law, Customs and Excise,
                                            Defense Contracts, Energy Law, Exchange Control, Environmental Law, Debtor and
                                            Creditor, Foreign Investment, Joint Ventures, Human and Civil Rights,
                                            International Finance, Insurance, Intellectual Property, International Trade,
                                            Investments, Insolvency, Immigration and Naturalisation, Labor Laws, Leases and
                                            Licensing, Libel and Defamation, Litigation, Mergers and Acquisitions, Petroleum
                                            Contracts, Oil Exploration, Oil and Gas Taxation, Patents, Design and
                                            Trademarks, Securities, Stock Exchange Regulation, Taxation, Shipping,
                                            Mortgages, Negligence, Product Liability, Transportation.
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
