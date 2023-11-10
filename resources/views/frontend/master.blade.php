<!DOCTYPE html>
<html lang="en">

<head>

    @include('frontend.layouts.stylesheet')

</head>

<body
    style="font-family: 'Merriweather', serif; background-image: url({{ asset('assets/frontend/images/common-bg.png') }})">

    <!-- PRELOADER SPINNER
  ============================================= -->
    @include('frontend.layouts.preloader')

    <!-- PAGE CONTENT
  ============================================= -->
    <div id="page" class="page">

        <!-- HEADER -->
        @include('frontend.layouts.header')
        <!-- END HEADER -->

        @yield('frontend_main_content')


        <!-- FOOTER -->
        @include('frontend.layouts.footer')
        <!-- END FOOTER-1 -->

    </div>
    <!-- END PAGE CONTENT -->

    <!-- EXTERNAL SCRIPTS-->
    @include('frontend.layouts.script')

</body>

</html>
