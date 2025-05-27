<ul class="navbar-nav mb-auto w-100">
    <li class="menu-label mt-2">
        <span>Main</span>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="iconoir-report-columns menu-icon"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="menu-label mt-2">
        <small class="label-border">
            <div class="border_left hidden-xs"></div>
            <div class="border_right"></div>
        </small>
        <span>Pages</span>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false"
            aria-controls="sidebarPages">
            <i class="iconoir-page-star menu-icon"></i>
            <span>Pages</span>
        </a>
        <div class="collapse " id="sidebarPages">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Timeline</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Treeview</a>
                </li>

            </ul>
        </div>
    </li>

    {{-- MyAccount::Begin --}}
    <li class="menu-label mt-2">
        <small class="label-border">
            <div class="border_left hidden-xs"></div>
            <div class="border_right"></div>
        </small>
        <span>Pages</span>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#sidebarMyAccount" data-bs-toggle="collapse" role="button" aria-expanded="false"
            aria-controls="sidebarMyAccount">
            <i class="iconoir-fingerprint-lock-circle menu-icon"></i>
            <span>My Account</span>
        </a>
        <div class="collapse " id="sidebarMyAccount">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.account.index') }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.account.update') }}">Account Setting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.account.password') }}">Change Password</a>
                </li>
            </ul>
        </div>
    </li>
    {{-- MyAccount::End --}}

</ul>

{{-- updateMsg::Begin --}}
<div class="update-msg text-center">
    <div class="d-flex justify-content-center align-items-center thumb-lg update-icon-box  rounded-circle mx-auto">
        {{-- <i class="iconoir-lock h3 align-self-center mb-0 text-primary"></i> --}}
        <img src="{{ asset('assets/static/logo-sm.png') }}" alt="" class="" height="25">

    </div>

    <p class="my-2 text-muted"> Admin Dashboard V1.0 </p>

</div>
{{-- updateMsg::End --}}
