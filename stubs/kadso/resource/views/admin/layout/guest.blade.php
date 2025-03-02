<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Log In | AdminKit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />
    <meta name="author" content="Zoyothemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/kadso/images/favicon.ico')}}">
    <!-- App css -->
    <link href="{{asset('assets/kadso/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />
    <!-- Icons -->
    <link href="{{asset('assets/kadso/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<body class="bg-color">

    <!-- Begin page -->
    {{$slot}}
    <!-- END wrapper -->

    <!-- Vendor -->
    <script src="{{asset('assets/kadso/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/kadso/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/kadso/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/kadso/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('assets/kadso/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/kadso/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/kadso/libs/feather-icons/feather.min.js')}}"></script>

    <!-- App js-->
    <script src="{{asset('assets/kadso/js/app.js')}}"></script>

</body>

</html>