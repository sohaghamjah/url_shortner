  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Notifications Dropdown Menu -->
       <!--  Profile -->
       <li class="nav-item dropdown profile">
        <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)">
          <img src="{{ asset('public/asset') }}/img/user1-128x128.jpg" alt="User Avatar" class="profile-image">
        </a>
        <div class="dropdown-menu dropdown-menu-sm">

          <div class="dropdown-divider"></div>
          <a href="javascript:void(0)" class="dropdown-item logout-btn">
            <i class="fas fa-users mr-2"></i> Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->