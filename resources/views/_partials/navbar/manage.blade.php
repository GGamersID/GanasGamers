<div class="side-menu" >
  <aside class="sidebar-menu is-hidden-touch" id="sidebar">
    <div class="m-t-10">
      <p class="menu-label">
        General
      </p>
      <ul class="menu-list">
        <li><a href="{{route('manage.dashboard')}}">Dashboard</a></li>
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
        <li><a href="{{route('users.index')}}">Manage Users</a></li>
        <li>
          <a href="{{route('permissions.index')}}">Roles &amp; Permissions</a>
          <ul class="m-l-20">
            <li><a href="{{route('roles.index')}}">Roles</a></li>
            <li><a href="{{route('permissions.index')}}">Permissions</a></li>
          </ul>
        </li>
      </ul>
    </div>

  </aside>
</div>
