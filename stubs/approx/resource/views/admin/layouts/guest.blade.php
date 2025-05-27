<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="dark" data-bs-theme="light">

<head>


    <meta charset="utf-8" />
    <title>Login | Approx - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="assets/images/favicon.ico">


    <link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/libs/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css" />

</head>



<body>
    <div class="container-xxl">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="card-body">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/backend/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backend/libs/toastr/toastr.min.js') }}"></script>
    <x-toastr />
</body>

</html>
