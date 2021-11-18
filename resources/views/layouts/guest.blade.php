<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | Minia - Minimal Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/dashboard/assets/images/favicon.ico') }}">

    <!-- preloader css -->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/assets/css/preloader.min.css') }}" type="text/css" />
    <!-- datepicker css -->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/assets/libs/flatpickr/flatpickr.min.css') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/dashboard/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/dashboard/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/dashboard/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>

{{$slot}}

<!-- JAVASCRIPT -->

<script src="{{ asset('assets/dashboard/assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/assets/libs/feather-icons/feather.min.js') }}"></script>
<!-- pace js -->
<script src="{{ asset('assets/dashboard/assets/libs/pace-js/pace.min.js') }}"></script>
<!-- password addon init -->
<script src="{{ asset('assets/dashboard/assets/js/pages/pass-addon.init.js') }}"></script>

<script src="{{ asset('assets/dashboard/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
@livewireScripts
@stack('guest-scripts')
</body>

</html>
