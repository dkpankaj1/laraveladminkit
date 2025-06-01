{{-- <div class="app-sidebar-menu">
    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <div class="logo-box">
                <a href="{{ route('admin.dashboard') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/backend/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/backend/images/logo-light.png') }}" alt="" height="24">
                    </span>
                </a>
                <a href="{{ route('admin.dashboard') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/backend/images/logo-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/backend/images/logo-dark.png') }}" alt="" height="24">
                    </span>
                </a>
            </div>

            <ul id="side-menu">

                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i data-feather="home"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li class="menu-title">Pages</li>

                <li>
                    <a href="#sidebarAuth" data-bs-toggle="collapse">
                        <i data-feather="grid"></i>
                        <span> Pages </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">Menu 1</a>
                            </li>
                            <li>
                                <a href="#">Menu 2</a>
                            </li>
                            <li>
                                <a href="#">Menu 2</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{ route('admin.settings.edit') }}">
                        <i data-feather="settings"></i>
                        <span> setting </span>
                    </a>
                </li>

                <li class="menu-title">Accounts</li>

                <li>
                    <a href="#sidebarMyAccount" data-bs-toggle="collapse">
                        <i data-feather="user"></i>
                        <span> Account </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarMyAccount">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('admin.account.index') }}">My Account</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.account.update') }}">Update Profile</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.account.password') }}">Change Password</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
</div> --}}


<div data-simplebar>
    <ul class="app-menu">

        <li class="menu-title">Menu</li>

        <li class="menu-item">
            <a href="{{ route('admin.dashboard') }}" class="menu-link waves-effect">
                <span class="menu-icon"><i data-lucide="airplay"></i></span>
                <span class="menu-text"> Dashboards </span>
            </a>
        </li>

        <li class="menu-title">Pages</li>


        <li class="menu-item">
            <a href="#menuPages" data-bs-toggle="collapse" class="menu-link waves-effect">
                <span class="menu-icon"><i data-lucide="copy"></i></span>
                <span class="menu-text"> Extra Pages </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="menuPages">
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <span class="menu-text">Menu 1</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <span class="menu-text">Menu 2</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <span class="menu-text">Menu 3</span>
                        </a>
                    </li>

                </ul>
            </div>
        </li>


        <li class="menu-title">Settings</li>

        <li class="menu-item">
            <a href="{{ route('admin.settings.edit') }}" class="menu-link waves-effect">
                <span class="menu-icon"><i data-lucide="settings"></i></span>
                <span class="menu-text"> Setting </span>
            </a>
        </li>

        <li class="menu-title">Accounts</li>

        <li class="menu-item">
            <a href="#menuAccount" data-bs-toggle="collapse" class="menu-link waves-effect">
                <span class="menu-icon"><i data-lucide="copy"></i></span>
                <span class="menu-text"> My Account </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="menuAccount">
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="{{ route('admin.account.index') }}" class="menu-link">
                            <span class="menu-text">My Account</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.account.update') }}" class="menu-link">
                            <span class="menu-text">Update Profile</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.account.password') }}" class="menu-link">
                            <span class="menu-text">Change Password</span>
                        </a>
                    </li>

                </ul>
            </div>
        </li>

    </ul>
</div>
