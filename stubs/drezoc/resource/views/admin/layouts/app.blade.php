<!DOCTYPE html>
<html lang="en" data-bs-theme="{{ Session::get('theme', 'light') }}" data-menu-color="dark" data-topbar-color="{{ Session::get('theme', 'light') }}">

<head>
    <meta charset="utf-8" />
    <title>Starter | Drezoc - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Drezoc - Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/backend/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('assets/backend/css/style.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/backend/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/backend/libs/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets/backend/js/config.js') }}"></script>

</head>

<body>

    <!-- Begin page -->
    <div class="layout-wrapper">

        <!-- ========== Left Sidebar ========== -->
        <div class="main-menu">
            <!-- Brand Logo -->
            @include('admin.layouts._app.logo')

            <!--- Menu -->

            <!-- Left Sidebar Start -->
            @include('admin.layouts._app.sidebar')
            <!-- Left Sidebar End -->

        </div>



        <!-- Start Page Content here -->
        <div class="page-content">

            <!-- ========== Topbar Start ========== -->
            <div class="navbar-custom">

                <!-- Topbar Start -->
                @include('admin.layouts._app.topbar')
                <!-- end Topbar -->
            </div>
            <!-- ========== Topbar End ========== -->

            <div class="px-3">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="py-3 py-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4 class="page-title mb-0">Starter</h4>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-none d-lg-block">
                                    <ol class="breadcrumb m-0 float-end">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Extra Pages</a>
                                        </li>
                                        <li class="breadcrumb-item active">Starter</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    {{ $slot }}

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            @include('admin.layouts._app.footer')
            <!-- end Footer -->

        </div>
        <!-- End Page content -->


    </div>
    <!-- END wrapper -->
    {{-- action::Begin --}}
    @include('admin.layouts._app.actions')
    {{-- action::End --}}

    <!-- App js -->
    <script src="{{ asset('assets/backend/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/backend/libs/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/app.js') }}"></script>
    <x-toastr />

</body>

</html>
