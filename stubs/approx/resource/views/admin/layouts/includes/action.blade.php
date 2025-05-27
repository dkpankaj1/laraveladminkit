<form action="{{ route('admin.logout') }}" id="logoutForm" class="d-none" method="POST">@csrf</form>
<form action="{{ route('admin.themes.toggle') }}" id="themeToggleForm" class="d-none" method="POST">@csrf</form>
