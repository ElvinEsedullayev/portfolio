  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('yonetim.home')}}" class="nav-link">Home</a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
 

  
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>

        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
 
   
          <div class="dropdown-divider"></div>
      
          <a href="{{route('yonetim.logout')}}" class="dropdown-item">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
     
        </div>
      </li>


    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" target="_blank" class="brand-link">
      <img src="{{asset('back')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Portfolio Sayt</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

 
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Admin / Sayt
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('yonetim.home')}}" class="nav-link">
                  <i class="fas fa-solar-panel"></i>
                  <p>Admin Panel</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="/" class="nav-link" target="_blank">
                  <i class="fas fa-globe-europe"></i>
                  <p>Portfolio Sayt</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-users text-info"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('yonetim.user')}}" class="nav-link {{Route::is('yonetim.user')? 'active' : ''}}">
                  <i class="far fa-user"></i>
                  <p>User</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="{{route('create.user')}}" class="nav-link {{Route::is('create.user')? 'active' : ''}}">
                  <i class="fas fa-plus"></i>
                  <p>User Create</p>
                </a>
              </li>
            </ul>
          </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-poll text-info"></i>
              <p>
                Socials
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('yonetim.social')}}" class="nav-link">
                  <i class="fab fa-facebook"></i>
                  <p>Social</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="{{route('create.social')}}" class="nav-link">
                  <i class="fas fa-plus"></i>
                  <p>Social Create</p>
                </a>
              </li>
            </ul>
          </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-photo-video text-info"></i>
              <p>
                Portfolies
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('yonetim.portfolio')}}" class="nav-link {{Route::is('yonetim.portfolio')? 'active' : ''}}">
                  <i class="fas fa-image"></i>
                  <p>Portfolio</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="{{route('create.portfolio')}}" class="nav-link {{Route::is('create.portfolio')? 'active' : ''}}">
                  <i class="fas fa-plus"></i>
                  <p>Portfolio Create</p>
                </a>
              </li>
            </ul>
          </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fab fa-blogger text-info"></i>
              <p>
                Blogs
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('yonetim.blog')}}" class="nav-link {{Route::is('yonetim.blog')? 'active' : ''}}">
                 <i class="fab fa-microblog"></i>
                  <p>Blog</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="{{route('create.blog')}}" class="nav-link {{Route::is('create.blog')? 'active' : ''}}">
                  <i class="fas fa-plus"></i>
                  <p>Blog Create</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Admin Melumatlar</li>
          <li class="nav-item">
            <a href="" class="nav-link">
             
              <i class="fas fa-id-card text-success"></i>
              <p>Profile</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('yonetim.message')}}" class="nav-link {{Route::is('yonetim.message')? 'active' : ''}}">
              <i class="fas fa-envelope text-success"></i>
              <p>Messages</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('yonetim.logout')}}" class="nav-link">
             
              <i class="fas fa-sign-out-alt text-success"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>