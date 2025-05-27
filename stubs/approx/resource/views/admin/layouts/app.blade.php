<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="{{ auth()->user()->startbar }}"
    data-bs-theme="{{ auth()->user()->theme }}">

<head>
    <meta charset="utf-8" />
    <title>Starter | Approx - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="{{ asset('assets/static/favicon.ico') }}">

    <link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/libs/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css" />
    {{-- head::Begin --}}
    @stack('head')
    {{-- head::End --}}

</head>

<body>
    {{-- TopBar::End --}}
    <div class="topbar d-print-none">
        @include('admin.layouts.includes.topbar')
    </div>
    {{-- TopBar::End --}}

    <div class="startbar d-print-none">
        <div class="brand">
            @include('admin.layouts.includes.logo')
        </div>

        {{-- Sidebar::Begin --}}
        <div class="startbar-menu">
            <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
                <div class="d-flex align-items-start flex-column w-100">
                    @include('admin.layouts.includes.sidebar')
                </div>
            </div>
        </div>
        {{-- Sidebar::End --}}

    </div>

    <div class="startbar-overlay d-print-none"></div>

    <div class="page-wrapper">
        <div class="page-content">
            <div class="container">
                {{-- breadcrumb::BEGIN --}}
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                            <h4 class="page-title">@yield('page_title','Dashboard')</h4>
                        </div>
                    </div>
                </div>
                {{-- breadcrumb::END --}}


                {{-- Content::Begin --}}
                {{ $slot }}
                {{-- Content::End --}}

            </div>

            {{-- Footer::Begin --}}
            <footer class="footer text-center text-sm-start d-print-none">
                @include('admin.layouts.includes.footer')
            </footer>
            {{-- Footer::End --}}

        </div>
    </div>

    {{-- adminAction::begin --}}
    @include('admin.layouts.includes.action')
    {{-- adminAction::End --}}

    {{-- RequiredScript::Begin --}}
    <script src="{{ asset('assets/backend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/backend/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/app.js') }}"></script>
    {{-- RequiredScript::End --}}

    {{-- OptionalScript::Begin --}}
    @stack('scripts')
    {{-- OptionalScript::End --}}

    {{-- Toastr::Begin --}}
    <script src="{{ asset('assets/backend/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backend/libs/toastr/toastr.min.js') }}"></script>
    <x-toastr />
    {{-- Toastr::End --}}

</body>

</html>
