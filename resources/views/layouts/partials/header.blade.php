<!-- Logo -->
    <a href="{{route('/')}}" class="logo trigger-loader">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">
        <img src="{{asset('images/austromex/austromex-logo.jpg')}}" alt="Austromex" class="img-responsive center-block" style="max-width:40px; padding-top: 15px;">
      </span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
        <img src="{{asset('images/austromex/austromex-logo.jpg')}}" alt="Austromex" class="img-responsive center-block" style="max-height:40px; padding-top: 10px;">
      </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user"></i>
              <span class="hidden-xs">{{session()->get('auth.nomusr')}}</span>
            </a>
            <ul class="dropdown-menu">
             <!-- Menu Footer-->
              <li class="user-footer">
                <div class="text-center">
                  <a href="{{route('logout')}}" class="btn btn-default btn-flat">Cerrar sesión</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    