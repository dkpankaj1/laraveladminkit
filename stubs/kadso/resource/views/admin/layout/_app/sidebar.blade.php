<div class="app-sidebar-menu">
    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <div class="logo-box">
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('assets/kadso/images/logo-sm.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('assets/kadso/images/logo-light.png')}}" alt="" height="24">
                    </span>
                </a>
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{asset('assets/kadso/images/logo-sm.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('assets/kadso/images/logo-dark.png')}}" alt="" height="24">
                    </span>
                </a>
            </div>

            <ul id="side-menu">

                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{route('admin.dashboard')}}">
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
                                <a href="{{route('admin.account.index')}}">My Account</a>
                            </li>
                            <li>
                                <a href="{{route('admin.account.update')}}">Update Profile</a>
                            </li>
                            <li>
                                <a href="{{route('admin.account.password')}}">Change Password</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
</div>