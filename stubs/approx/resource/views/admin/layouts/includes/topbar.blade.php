<div class="container-fluid">
    <nav class="topbar-custom d-flex justify-content-between" id="topbar-custom">


        <ul class="topbar-item list-unstyled d-inline-flex align-items-center mb-0">
            <li>
                <button class="nav-link mobile-menu-btn nav-icon" id="togglemenu">
                    <i class="iconoir-menu"></i>
                </button>
            </li>
        </ul>

        <ul class="topbar-item list-unstyled d-inline-flex align-items-center mb-0">

            <li class="topbar-item">
                <button class="nav-link nav-icon"
                    onclick="event.preventDefault(); document.getElementById('themeToggleForm').submit();">
                    @if (auth()->user()->theme == 'dark')
                        <i class="iconoir-half-moon dark-mode"></i>
                    @else
                        <i class="iconoir-sun-light light-mode"></i>
                    @endif
                </button>
            </li>


            <li class="dropdown topbar-item">
                <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false" data-bs-offset="0,19">
                    <img src="{{ auth()->user()->avatar }}" alt="" class="thumb-md rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0">
                    <div class="d-flex align-items-center dropdown-item py-2 bg-secondary-subtle">
                        <div class="flex-shrink-0">
                            <img src="{{ auth()->user()->avatar }}" alt=""
                                class="thumb-md rounded-circle">
                        </div>
                        <div class="flex-grow-1 ms-2 text-truncate align-self-center">
                            <h6 class="my-0 fw-medium text-dark fs-13">{{ auth()->user()->name }}</h6>
                        </div>
                    </div>
                    <div class="dropdown-divider mt-0"></div>
                    <small class="text-muted px-2 pb-1 d-block">Account</small>

                    <a class="dropdown-item" href="{{route('admin.account.index')}}">
                        <i class="las la-user fs-18 me-1 align-text-bottom"></i>
                        Profile
                    </a>

                    <small class="text-muted px-2 py-1 d-block">Settings</small>

                    <a class="dropdown-item" href="{{route('admin.account.update')}}">
                        <i class="las la-cog fs-18 me-1 align-text-bottom"></i>
                        Account Settings
                    </a>

                    <a class="dropdown-item" href="{{route('admin.account.password')}}">
                        <i class="las la-lock fs-18 me-1 align-text-bottom"></i>
                        Change Password
                    </a>


                    <div class="dropdown-divider mb-0"></div>

                    <button class="dropdown-item text-danger"
                        onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                        <i class="las la-power-off fs-18 me-1 align-text-bottom"></i>
                        Logout
                    </button>

                </div>
            </li>
        </ul>
    </nav>

</div>

