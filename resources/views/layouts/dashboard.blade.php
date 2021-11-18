<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <title>Dashboard | Minia - Minimal Admin & Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard " name="description" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/dashboard/assets/images/favicon.ico') }}">

    <!-- plugin css -->
    <link href="{{ asset('assets/dashboard/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />

    <!-- preloader css -->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/assets/css/preloader.min.css') }}" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/dashboard/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/dashboard/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/dashboard/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/dashboard/assets/libs/choices.js/public/assets/styles/choices.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- color picker css -->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/assets/libs/%40simonwep/pickr/themes/classic.min.css') }}"/> <!-- 'classic' theme -->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/assets/libs/%40simonwep/pickr/themes/monolith.min.css') }}"/> <!-- 'monolith' theme -->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/assets/libs/%40simonwep/pickr/themes/nano.min.css') }}"/> <!-- 'nano' theme -->

    <!-- datepicker css -->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/assets/libs/flatpickr/flatpickr.min.css') }}">
</head>

<body>

<!-- <body data-layout="horizontal"> -->

<!-- Begin page -->
<div id="layout-wrapper">

@include('parts.header-top')
@include('parts.sidebar')

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">



                {{$slot}}

            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        @include('parts.footer')
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- Right Sidebar -->
@include('parts.right-sidebar')
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="{{ asset('assets/dashboard/assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/assets/libs/feather-icons/feather.min.js') }}"></script>
<!-- pace js -->
<script src="{{ asset('assets/dashboard/assets/libs/pace-js/pace.min.js') }}"></script>

<!-- apexcharts -->
<script src="{{ asset('assets/dashboard/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Plugins js-->
<script src="{{ asset('assets/dashboard/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- dashboard init -->
<script src="{{ asset('assets/dashboard/assets/js/pages/dashboard.init.js') }}"></script>

<script src="{{ asset('assets/dashboard/assets/js/app.js') }}"></script>


<script src="{{ asset('assets/dashboard/assets/libs/pace-js/pace.min.js') }}"></script>

<!-- choices js -->
<script src="{{ asset('assets/dashboard/assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

<!-- color picker js -->
<script src="{{ asset('assets/dashboard/assets/libs/%40simonwep/pickr/pickr.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/assets/libs/%40simonwep/pickr/pickr.es5.min.js') }}"></script>

<!-- datepicker js -->
<script src="{{ asset('assets/dashboard/assets/libs/flatpickr/flatpickr.min.js') }}"></script>

<!-- init js -->
<script src="{{ asset('assets/dashboard/assets/js/pages/form-advanced.init.js') }}"></script>

@livewireScripts

</body>

</html>
