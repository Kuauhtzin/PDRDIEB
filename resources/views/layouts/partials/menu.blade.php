      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">MENÚ</li>
    @if(session()->get('auth.acceso')==0)
        <li><a href="{{route('admin.users.index')}}" class="trigger-loader"><i class="fa fa-users"></i> <span>GESTIÓN USUARIOS</span></a></li>
        <li><a href="{{route('admin.bitacora.index')}}" class="trigger-loader"><i class="fa fa-book"></i> <span>BITÁCORA</span></a></li>
        <li><a href="{{route('ordenes.admin.index')}}" class="trigger-loader"><i class="fa fa-exclamation"></i> <span>ORDENES</span></a></li>
    @elseif(session()->get('auth.acceso')==1)
        <li><a href="{{route('ordenes.soporte.index')}}" class="trigger-loader"><i class="fa fa-exclamation"></i> <span>ORDENES</span></a></li>
    @elseif(session()->get('auth.acceso')==2)
        
    @elseif(session()->get('auth.acceso')==3)
        <li><a href="{{route('ordenes.user.index')}}" class="trigger-loader"><i class="fa fa-exclamation"></i> <span>ORDENES</span></a></li>
    @endif

        <!--<li class="treeview">
          <a href="#">
            <i class="fa fa-suitcase"></i>
            <span>Dirección Comercial</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('/')}}"><i class="fa fa-black-tie"></i> <span>BACK ORDER</span></a></li>
            
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Otro Link</span></a></li>-->
      </ul>
      <!-- /.sidebar-menu -->