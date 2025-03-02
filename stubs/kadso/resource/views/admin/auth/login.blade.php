<x-guest-layout>
    <div class="container-fluid" style="background-color: #ccc">
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="card" style="width: 400px">
                <div class="card-body">

                    <div class="p-0">
                        <div class="text-center">
                            <div class="mb-4">
                                <a href="index.html" class="auth-logo">
                                    <img src="{{asset('assets/kadso/images/logo-dark.png')}}" alt="logo-dark"
                                        class="mx-auto" height="28">
                                </a>
                            </div>

                            <div class="auth-title-section mb-3">
                                <h3 class="text-dark fs-20 fw-medium mb-2">Welcome back</h3>
                                <p class="text-dark text-capitalize fs-14 mb-0">Please enter your details.</p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-0">
                        <form action="{{route('admin.login')}}" class="my-4" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input class="form-control" type="email" placeholder="Enter your email" name="email"
                                    value="{{old('email')}}">
                                @error('email')
                                    <div class="invalid-feedback d-block">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input class="form-control" type="password" placeholder="Enter your password"
                                    name="password">
                                @error('password')
                                    <div class="invalid-feedback d-block">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group d-flex mb-3">
                                <div class="col-sm-6">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox-signin"
                                            name="remember" checked="">
                                        <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-0 row">
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button class="btn btn-primary" type="submit"> Log In
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-guest-layout>