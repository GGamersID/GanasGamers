<div class="side-menu" >
  <aside class="sidebar-menu is-hidden-touch" id="sidebar">
    <div class="m-t-10 m-l-5">
      <p class="menu-label">
        General
      </p>
      <ul class="menu-list">
        <li><a href="{{route('manage.dashboard')}}" class="{{Nav::isRoute('manage.dashboard')}}">Dashboard</a></li>
      </ul>
      <p class="menu-label">
        Content
      </p>
      <ul class="menu-list">
        <li><a href="#">Blog Posts</a></li>
      </ul>
      <p class="menu-label">
        Administration
      </p>
      <ul class="menu-list">
        <li><a href="{{route('users.index')}}" class="{{Nav::isRoute('users')}}">Manage Users</a></li>
        <li>
          <a class="has-submenu" {{Nav::hasSegment(['roles', 'permissions'], 2)}}>Roles &amp; Permissions</a>
          <ul class="submenu">
            <li><a href="{{route('roles.index')}}">Roles</a></li>
            <li><a href="{{route('permissions.index')}}">Permissions</a></li>
          </ul>
          <a class="has-submenu">Example Accordion</a>
          <ul class="submenu">
            <li><a href="{{route('roles.index')}}">Menus</a></li>
            <li><a href="{{route('permissions.index')}}">Images</a></li>
          </ul>
          <a class="has-submenu">Another Example</a>
          <ul class="submenu">
            <li><a href="{{route('roles.index')}}">Public</a></li>
            <li><a href="{{route('permissions.index')}}">Private</a></li>
          </ul>
        </li>
      </ul>
    </div>

  </aside>
</div>
