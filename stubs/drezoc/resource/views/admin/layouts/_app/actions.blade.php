  <form action="{{ route('admin.logout') }}" method="post" id="adminLogoutForm">
      @csrf
  </form>
  <form action="{{ route('admin.themes.toggle') }}" method="post" id="themesToggleForm">
      @csrf
  </form>
