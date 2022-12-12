<aside class="main-sidebar sidebar-dark-primary elevation-4" style="height: 100vh;">
  <!-- Brand Logo -->
  <a href="{{ route('HomePage')}}" class="brand-link">
    <img src="{{ asset('src/img/barokah.jfif') }}" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Toko Barokah</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <div class="nav-link user-panel mt-3 p-0 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('storage/'.auth()->user()->foto) }}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{ auth()->user()->name }}</a>
          </div>
        </div>
        <ul class="nav nav-treeview">
          <li class="nav-item bg-warning">
            <a href="{{ route('ProfilePageAdmin') }}" class="nav-link">
              <i class=" fas fa-edit"></i>
              <p>Edit Profil</p>
            </a>
          </li>
          <li class="nav-item bg-danger">
            <a href="{{ route('logout') }}" class="nav-link">
              <i class=" bi bi-box-arrow-in-left"></i>
              <p>Keluar</p>
            </a>
          </li>
        </ul>
      </li>
    </ul>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <li class="nav-item">
          <a href="{{ route('HomePage') }} " class="nav-link {{ ($tittle === "Home Page") ? 'active' : ''}}">
            <i class="bi bi-house-door"></i>
            <p>
              Halaman Utama</p>
          </a>
        </li>
        <!-- <li class="nav-item">
                <a href="{{ route('ProfilePage') }}" class="nav-link {{ ($tittle === "Profile Page") ? 'active' : ''}}">
                <i class="bi bi-person-circle"></i>
                  <p> Halaman Profile</p>
                </a>
          </li> -->

        <li class="nav-item">
          <a href="{{ route('GalleryPage') }}" class="nav-link {{ ($tittle === "Gallery Page") ? 'active' : ''}}">
            <i class="bi bi-caret-right-square"></i>
            <p>Produk Kami
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('PurchasePage') }}" class="nav-link {{ ($tittle === "Purchase Page") ? 'active' : ''}}">
            <i class="bi bi-receipt"></i>
            <p>
              Pembelian Anda
            </p>
          </a>
        </li>
      </ul>

    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>