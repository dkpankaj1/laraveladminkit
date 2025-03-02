<div class="topbar-custom">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">
                <li>
                    <button class="button-toggle-menu nav-link">
                        <i data-feather="menu" class="noti-icon"></i>
                    </button>
                </li>
            </ul>
            <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">

                <li class="dropdown notification-list topbar-dropdown">
                    <a class="nav-link dropdown-toggle nav-user me-0" data-bs-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <img src="{{asset('assets/kadso/images/users/user-11.jpg')}}" alt="user-image"
                            class="rounded-circle">
                        <span class="pro-user-name ms-1">
                            {{auth()->user()->name}} <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>

                        <!-- item-->
                        <a href="{{route('admin.account.index')}}" class="dropdown-item notify-item">
                            <i class="mdi mdi-account-circle-outline fs-16 align-middle"></i>
                            <span>My Account</span>
                        </a>

                        <!-- item-->
                        <a href="{{route('admin.account.update')}}" class="dropdown-item notify-item">
                            <i class="mdi mdi-lock-outline fs-16 align-middle"></i>
                            <span>Profile Update</span>
                        </a>

                        <!-- item-->
                        <a href="{{route('admin.account.password')}}" class="dropdown-item notify-item">
                            <i class="mdi mdi-lock-outline fs-16 align-middle"></i>
                            <span>Change Password</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <button class="dropdown-item notify-item"
                            onclick="document.getElementById('adminLogoutForm').submit();">
                            <i class="mdi mdi-logout fs-16 align-middle"></i>

                            <span>Logout</span>
                        </button>

                    </div>
                </li>

            </ul>
        </div>

        <form action="{{route('admin.logout')}}" method="post" id="adminLogoutForm">
            @csrf
        </form>
    </div>

</div>