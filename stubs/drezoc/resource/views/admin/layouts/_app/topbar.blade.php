<div class="topbar">
    <div class="topbar-menu d-flex align-items-center gap-lg-2 gap-1">

        <!-- Brand Logo -->
        @include('admin.layouts._app.logo')

        <!-- Sidebar Menu Toggle Button -->
        <button class="button-toggle-menu waves-effect waves-dark rounded-circle">
            <i class="mdi mdi-menu"></i>
        </button>
    </div>

    <ul class="topbar-menu d-flex align-items-center gap-2">

        <li class="d-none d-md-inline-block">
            <a class="nav-link waves-effect waves-dark" href="#" data-bs-toggle="fullscreen">
                <i class="mdi mdi-fullscreen font-size-24"></i>
            </a>
        </li>

        @if (Session::get('theme', 'light') == 'dark')
            <li class="nav-link waves-effect waves-dark"
                onclick="document.getElementById('themesToggleForm').submit();">
                <i class="bx bx-sun font-size-24"></i>
            </li>
        @else
            <li class="nav-link waves-effect waves-dark"
                onclick="document.getElementById('themesToggleForm').submit();">
                <i class="bx bx-moon font-size-24"></i>
            </li>
        @endif


        <li class="dropdown">
            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-dark" data-bs-toggle="dropdown"
                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="{{ auth()->user()->avatar }}" alt="user-image" class="rounded-circle">
                <span class="ms-1 d-none d-md-inline-block">
                    {{ auth()->user()->name }} <i class="mdi mdi-chevron-down"></i>
                </span>
            </a>

            <div class="dropdown-menu dropdown-menu-end profile-dropdown"
                style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 82px);"
                data-popper-placement="bottom-end">
                <!-- item-->
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                </div>

                <!-- item-->
                <a href="{{ route('admin.account.index') }}" class="dropdown-item notify-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" data-lucide="user" class="lucide lucide-user font-size-16 me-2">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span>My Account</span>
                </a>

                <!-- item-->
                <a href="{{ route('admin.account.update') }}" class="dropdown-item notify-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" data-lucide="settings" class="lucide lucide-settings font-size-16 me-2">
                        <path
                            d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z">
                        </path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                    <span>Proile Update</span>
                </a>

                <!-- item-->
                <a href="{{ route('admin.account.password') }}" class="dropdown-item notify-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" data-lucide="lock" class="lucide lucide-lock font-size-16 me-2">
                        <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                    </svg>
                    <span>Change Password</span>
                </a>

                <div class="dropdown-divider"></div>

                <!-- item-->
                <button class="dropdown-item notify-item"
                    onclick="document.getElementById('adminLogoutForm').submit();">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" data-lucide="log-out" class="lucide lucide-log-out font-size-16 me-2">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" x2="9" y1="12" y2="12"></line>
                    </svg>
                    <span>Logout</span>
                </button>

            </div>

        </li>

    </ul>
</div>
