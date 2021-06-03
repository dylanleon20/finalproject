<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Creative Tim
      </a></div>
    <div class="sidebar-wrapper">
      <ul class="nav">

        @if(Request::is('admin*'))

        <li class="nav-item active  ">
          <a class="nav-link" href="{{ route('admin.role.index') }}">
            <i class="material-icons">Roles</i>
            <p>Roles</p>
          </a>
        </li>
        <li class="nav-item active  ">
          <a class="nav-link" href="{{ route('admin.trainer-shift.index') }}">
            <i class="material-icons">Trainer Shifts</i>
            <p>Trainer Shift</p>
          </a>
        </li>

        <li class="nav-item active  ">
          <a class="nav-link" href="{{ route('admin.members.index') }}">
            <i class="material-icons">Members</i>
            <p>Members</p>
          </a>
        </li>



        
        <li class="nav-item active  ">
          <a class="nav-link" href="./dashboard.html">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ route('admin.user.index') }}">
            <i class="material-icons">person</i>
            <p>User Profile</p>
          </a>
        </li>

        <li class="nav-item ">
          <a class="nav-link" href="{{ route('admin.shift.index') }}">
            <i class="material-icons">person</i>
            <p>Shifts</p>
          </a>
        </li>



        <li class="nav-item ">
          <a class="nav-link" href="./tables.html">
            <i class="material-icons">content_paste</i>
            <p>Table List</p>
          </a>
        </li>
        @endif




        @if(Request::is('trianer*'))
        <li class="nav-item ">
          <a class="nav-link" href="./typography.html">
            <i class="material-icons">library_books</i>
            <p>Typography</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="./icons.html">
            <i class="material-icons">bubble_chart</i>
            <p>Icons</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="./map.html">
            <i class="material-icons">location_ons</i>
            <p>Maps</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="./notifications.html">
            <i class="material-icons">notifications</i>
            <p>Notifications</p>
          </a>
        </li>
        @endif

        @if(Request::is('member*'))
        <li class="nav-item ">
          <a class="nav-link" href="./rtl.html">
            <i class="material-icons">language</i>
            <p>RTL Support</p>
          </a>
        </li>
        <li class="nav-item active-pro ">
          <a class="nav-link" href="./upgrade.html">
            <i class="material-icons">unarchive</i>
            <p>Upgrade to PRO</p>
          </a>
        </li>

        @endif
      </ul>
    </div>
  </div>