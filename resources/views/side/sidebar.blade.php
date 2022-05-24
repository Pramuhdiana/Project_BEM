
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
          <div class="sidebar-brand-icon">
              <i class="fas fa-university"></i>
          </div>
          <div class="sidebar-brand-text mx-3">Badan Eksekutif Mahasiswa</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
  
        <!-- Divider -->
        <hr class="sidebar-divider">
  
        <!-- Heading -->
        @if (auth()->user()->level=="admin")
        <div class="sidebar-heading">
          Admin
        </div>
  
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="/admin/datauser"  data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data User</span>
          </a>
        </li>
  
        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="/admin/dataform"  aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>List Pendaftaran</span>
          </a>
  
        </li>
  
        <!-- Divider -->
        <hr class="sidebar-divider">
  @endif
        <!-- Heading -->
        <div class="sidebar-heading">
          Mahasiswa
        </div>
  
        <!-- Nav Item - Tables -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="/form">
            <i class="fas fa-fw fa-table"></i>
            <span>Form Pendaftaran</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="/databem">
            <i class="fas fa-fw fa-table"></i>
            <span>List BEM</span></a>
        </li>
  
        
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        <li class="nav-item">
   
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="nav-link btn btn-primary"><center><i class="fas fa-sign-out-alt"></i><span>Logout</span></center></button>
            </form>
        </li>
  
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
  
      </ul>
      <!-- End of Sidebar -->