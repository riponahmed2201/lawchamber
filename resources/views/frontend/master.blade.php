<!doctype html>
<html class="no-js" lang="en-US">

<head>

    @include('frontend.layouts.stylesheet')

</head>

<body>

    <!-- Start Mobile Menu  -->
    @include('frontend.layouts.mobilde_header')
    <!-- End Mobile Menu  -->

    <!-- Start Main Header Menu  -->
    @include('frontend.layouts.header')
    <!-- End Main Header Menu  -->

    <!--Start on scroll header menu -->
    @include('frontend.layouts.scroll_header')
    <!--End on scroll header menu -->

    <!-- Main Content -->
    @yield('frontend_main_content')

    <!--  Bottom Banner -->
    @include('frontend.layouts.bottom_banner')

    <!--  Footer -->
    @include('frontend.layouts.footer')

    <!--  Scripts -->
    @include('frontend.layouts.script')

</body>

</html>
