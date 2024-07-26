<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">Bettex</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="dropdown {{ Route::is('dashboard')  ? 'active' : '' }}">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
          </ul>
        </li>
        <li class="menu-header">User Management</li>
        <li class="dropdown {{ Route::is('users.*') || Route::is('roles.*')||Route::is('permissions.*') ? 'active' : '' }}">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-user"></i> <span>User</span></a>
          <ul class="dropdown-menu">
            @can('index-user')
            <li class="{{ Route::is('users.*')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('users.index') }}">Users List</a></li>
            @endcan
            @can('index-role')
            <li class="{{ Route::is('roles.*')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('roles.index') }}">Roles List</a></li>
            @endcan
            @can('index-permission')
            <li class="{{ Route::is('permissions.*')  ? 'active' : '' }}"><a class="nav-link" href="{{ route('permissions.index') }}">Permissions List</a></li>
            @endcan
          </ul>
        </li>
    </aside>
</div>
