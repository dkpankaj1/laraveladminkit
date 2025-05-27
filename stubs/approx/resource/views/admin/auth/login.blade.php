<x-guest-layout>

    <div class="row">
        <div class="col-lg-4 mx-auto">
            <div class="card">
                <div class="card-body p-0 bg-black auth-header-box rounded-top">
                    <div class="text-center p-3">
                        <a href="/" class="logo logo-admin">
                            <img src="{{ asset('assets/static/logo-sm.png') }}" height="50" alt="logo"
                                class="auth-logo">
                        </a>
                        <h4 class="mt-3 mb-1 fw-semibold text-white fs-18">Let's Get Started Approx</h4>
                        <p class="text-muted fw-medium mb-0">Sign in to continue to Approx.</p>
                    </div>
                </div>
                <div class="card-body pt-0">

                    <form class="my-4" action="{{ route('admin.login') }}" method="POST">
                        @csrf

                        <div class="form-group mb-2">
                            <x-input-label name="email" text="Email" />
                            <x-input-field type="text" name="email" placeholder="example@gmail.com" />
                        </div>

                        <div class="form-group">
                            <x-input-label name="password" text="Password" />
                            <x-input-field type="text" name="password" placeholder="Enter password" />
                        </div>

                        <div class="form-group row mt-3">
                            <div class="col-sm-6">
                                <div class="form-check form-switch form-switch-success">
                                    <input class="form-check-input" type="checkbox" id="customSwitchSuccess" name="remember">
                                    <label class="form-check-label" for="customSwitchSuccess">Remember
                                        me</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-0 row">
                            <div class="col-12">
                                <div class="d-grid mt-3">
                                    <button class="btn btn-primary" type="submit">
                                        Log In
                                        <i class="fas fa-sign-in-alt ms-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
