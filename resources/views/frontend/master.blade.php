<!DOCTYPE html>
<html lang="en">

<head>

    @include('frontend.layouts.stylesheet')

</head>

<body style="font-family: 'Merriweather', serif; background-color: #f1f2f2;">

    <!-- PRELOADER SPINNER
  ============================================= -->
    @include('frontend.layouts.preloader')

    <!-- PAGE CONTENT
  ============================================= -->
    <div id="page" class="page">

        <!-- HEADER -->
        @include('frontend.layouts.header')
        <!-- END HEADER -->

        <div class="col-lg-12">
            <img style="width: 100%; height:300px; object-fit:cover"
                src="{{ asset('assets/frontend/images/banner/2.jpg') }}" alt="image">
        </div>

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
