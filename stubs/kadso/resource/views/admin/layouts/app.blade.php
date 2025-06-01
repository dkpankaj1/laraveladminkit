<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | AdminKit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />
    <meta name="author" content="Zoyothemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/backend/images/favicon.ico')}}">

    <!-- App css -->
    <link href="{{asset('assets/backend/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons -->
    <link href="{{asset('assets/backend/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/libs/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<!-- body start -->

<body data-menu-color="{{ Session::get('theme','dark') }}" data-sidebar="default">

    <!-- Begin page -->
    <div id="app-layout">


        <!-- Topbar Start -->
        @include('admin.layouts._app.topbar')
        <!-- end Topbar -->

        <!-- Left Sidebar Start -->
        @include('admin.layouts._app.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-xxl">

                    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                        <div class="flex-grow-1">
                            <h4 class="fs-18 fw-semibold m-0">Dashboard</h4>
                        </div>

                        <div class="text-end">
                            {{-- <ol class="breadcrumb m-0 py-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                <li class="breadcrumb-item active">dashboard</li>
                            </ol> --}}
                        </div>
                    </div>


                    {{$slot}}


                </div> <!-- container-fluid -->

            </div> <!-- content -->

            <!-- Footer Start -->
            @include('admin.layouts._app.footer')
            <!-- end Footer -->

        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- end page -->

    {{-- action::Begin --}}
    @include('admin.layouts._app.actions')
    {{-- action::End --}}

    <!-- Vendor -->
    <script src="{{asset('assets/backend/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/backend/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/backend/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/backend/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('assets/backend/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/backend/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/backend/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{ asset('assets/backend/libs/toastr/toastr.min.js') }}"></script>
    <x-toastr />

    <!-- App js-->
    <script src="{{asset('assets/backend/js/app.js')}}"></script>

</body>

</html>