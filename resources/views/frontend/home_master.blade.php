<!DOCTYPE html>
<html lang="en">

<head>

    @include('frontend.layouts.stylesheet')

</head>

{{-- <body style="font-family: 'Merriweather', serif; background-color: #f1f2f2;;"> --}}

<body style="font-family: 'Merriweather', serif; background-color: #f1f2f2;">

    <!-- PRELOADER SPINNER
  ============================================= -->
    @include('frontend.layouts.preloader')

    <!-- PAGE CONTENT
  ============================================= -->
    <div id="page" class="page">

        <!-- HEADER -->
        @include('frontend.layouts.home_header')
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
