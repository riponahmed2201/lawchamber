<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="/">
    <title> @yield('title') - The Law Counsel</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The Law Counsel, legally known as The Law Counsel, Established in 1990, ‘The Law Counsel’ is an internsational law firm based in Bangladesh which is widely recognized as one of the leading chambers in the country." />
    <meta name="keywords" content="The Law Counsel" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="The Law Counsel, legally known as The Law Counsel, Established in 1990, ‘The Law Counsel’ is an internsational law firm based in Bangladesh which is widely recognized as one of the leading chambers in the country." />
    <meta property="og:site_name" content="The Law Counsel" />

    @include('admin.layouts.stylesheet')

</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">

            <!--begin::Aside-->
            @include('admin.layouts.sidebar')
            <!--end::Aside-->

            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

                @include('admin.layouts.header')

                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Toolbar-->
                    @include('admin.layouts.toolbar')
                    <!--end::Toolbar-->

                    <!--begin::Post-->
                    @yield('main-content')
                    <!--end::Post-->

                </div>
                <!--end::Content-->

                <!--begin::Footer-->
                @include('admin.layouts.footer')
                <!--end::Footer-->

            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->

    @include('admin.layouts.script')

</body>
<!--end::Body-->

</html>
