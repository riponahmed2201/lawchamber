@php
    $designations = \DB::table('designations')->get();
@endphp

<header id="header" class="header white-menu navbar-dark">
    <div class="header-wrapper">

        <!-- MOBILE HEADER -->
        <div class="wsmobileheader clearfix">
            <span class="smllogo">
                {{-- <img src="assets/frontend/images/logo-01.png" alt="mobile-logo" /> --}}
                <a href="/" style="font-size: 27px; font-weight: 900; color: black;"> The Law Counsel</a>
            </span>
            <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
        </div>

        <!-- NAVIGATION MENU -->
        <div class="wsmainfull menu clearfix" style="height: 96px">
            <div class="container clearfix">

                <!-- HEADER LOGO -->
                <div class="desktoplogo" style="margin-top: 20px">
                    <a href="/" class="logo-black" style="font-size: 27px; font-weight: 900; color: black;">
                        {{-- <img src="assets/frontend/images/logo-01.png" alt="header-logo"> --}}
                        The Law Counsel
                    </a>
                </div>

                <div class="desktoplogo" style="margin-top: 20px">
                    <a href="/" class="logo-white" style="font-size: 27px; font-weight: 900; color: white;">
                        {{-- <img src="assets/frontend/images/logo-02.png" alt="header-logo"> --}}
                        The Law Counsel
                    </a>
                </div>


                <!-- MAIN MENU -->
                <nav class="wsmenu clearfix">
                    <ul class="wsmenu-list nav-skyblue-hover" style="margin-top: 20px">

                        <!-- SIMPLE NAVIGATION LINK -->
                        <li class="nl-simple" aria-haspopup="true"><a href="/about">About</a></li>

                        <!-- DROPDOWN MENU -->
                        <li aria-haspopup="true"><a href="javascript:void(0)">People <span class="wsarrow"></span></a>
                            <div class="wsmegamenu clearfix halfmenu">
                                <div class="container-fluid">
                                    <div class="row">

                                        <!-- Links -->
                                        <ul class="col-lg-6 link-list">

                                            @foreach ($designations as $designation)
                                                <li>
                                                    <a
                                                        href="/people?designation={{ $designation->id }}">{{ $designation->designation_name }}</a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li> <!-- END DROPDOWN MENU -->

                        <!-- SIMPLE NAVIGATION LINK -->
                        <li class="nl-simple" aria-haspopup="true"><a href="/practices-areas">Practice Areas</a></li>

                        <!-- SIMPLE NAVIGATION LINK -->
                        <li class="nl-simple" aria-haspopup="true"><a href="/resources">Resources</a></li>

                        <!-- SIMPLE NAVIGATION LINK -->
                        <li class="nl-simple" aria-haspopup="true"><a href="/contact-us">Contact</a></li>
                    </ul>
                </nav> <!-- END MAIN MENU -->


            </div>
        </div> <!-- END NAVIGATION MENU -->


    </div> <!-- End header-wrapper -->
</header>
