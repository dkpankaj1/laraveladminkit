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
