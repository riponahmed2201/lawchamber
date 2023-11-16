@extends('frontend.master')

@section('frontend_title', 'About Us')

@section('frontend_main_content')

    <div class="col-lg-12">
        <img style="width: 100%; height:270px" src="{{ asset('assets/frontend/images/banner/2.jpg') }}" alt="image">
    </div>

    <section id="terms-page" class="bg-snow terms-section division"
        style="padding-top: 35px; padding-bottom:70px; background-color: #f1f2f2;">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="h5-lg practice_area_header">
                        About
                    </h5>
                </div>
            </div>

            <div class="row wow fadeInUp">
                <div class="team-members-wrapper">
                    <div class="row">
                        <p style="font-size:15px">
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
                        <h4>Who Are We?</h4>
                        <p style="font-size:15px">
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
                        <p style="font-size:15px">
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
        </div> <!-- End container -->
    </section>

@endsection
