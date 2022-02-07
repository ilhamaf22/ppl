<!-- Main Sidebar Container -->
<aside class="main-sidebar">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <div class="brand d-flex align-items-center">
        <img src="/assets/dist/img/LogoPKL.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="ml-2 brand-text" style="font-size: 1.4em;">PKL 61</span>
      </div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar mt-4">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/umum/dashboard" class="nav-link <?= $menuActive == 'Home' ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-home" style="font-size:22px;"></i>
              <p style="margin-left:10px; font-size:16px; font-weight:bold;">
                Home
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <p style="margin-left:25px;">Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <p style="margin-left:25px;">Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <p style="margin-left:25px;">Dashboard v3</p>
                </a>
              </li>
            </ul> -->
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link <?= $menuActive == 'Hasil Kajian' ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-chart-pie" style="font-size:22px;"></i>
              <p style="margin-left:10px; font-size:16px; font-weight:bold;">
                Hasil Kajian
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/umum/dashboard/kajian1" class="nav-link <?= $subMenuActive == 'Kajian 1' ? 'active' : ''; ?>">
                  <!-- <i class="far fa-circle nav-icon" style="margin-left:15px; font-size:15px;"></i> -->
                  <p style="margin-left:25px;">Kajian 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/umum/dashboard/kajian2" class="nav-link <?= $subMenuActive == 'Kajian 2' ? 'active' : ''; ?>">
                  <!-- <i class="far fa-circle nav-icon" style="margin-left:15px; font-size:15px;"></i> -->
                  <p style="margin-left:25px;">Kajian 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon" style="margin-left:15px; font-size:15px;"></i> -->
                  <p style="margin-left:25px;">Lorem ipsum</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link <?= $menuActive == 'Peta Tematik' ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-map" style="font-size:22px;"></i>
              <p style="margin-left:10px; font-size:16px; font-weight:bold;">
                Peta Tematik
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/umum/dashboard/peta1" class="nav-link <?= $subMenuActive == 'Peta 1' ? 'active' : ''; ?>">
                  <!-- <i class="far fa-circle nav-icon" style="margin-left:15px; font-size:15px;"></i> -->
                  <p style="margin-left:25px;">Peta 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/umum/dashboard/peta2" class="nav-link <?= $subMenuActive == 'Peta 2' ? 'active' : ''; ?>">
                  <!-- <i class="far fa-circle nav-icon" style="margin-left:15px; font-size:15px;"></i> -->
                  <p style="margin-left:25px;">Peta 2</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="/umum/dashboard/tabeldinamis" class="nav-link <?= $menuActive == 'Tabel Dinamis' ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-light fa-table" style="font-size:22px;"></i>
              <!-- <i class="nav-icon fas fa-table-list" style="font-size:22px;"></i> -->
              <p style="margin-left:10px; font-size:16px; font-weight:bold;">
                Tabel Dinamis
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/umum" class="nav-link <?= $menuActive == 'Tentang Bidang Umum' ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-chevron-circle-left" style="font-size:22px;"></i>
              <!-- <i class="nav-icon fas fa-table-list" style="font-size:22px;"></i> -->
              <p style="margin-left:10px; font-weight:bold;" id="about-bidum">
                Tentang Bid. Umum
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      <div class="position-absolute" style="left: 0; bottom:70px">
        <img src="/assets/dist/img/ornamen-sidebar.png" alt="ornamen" style="width: 1.8em;">
      </div>
    </div>
    <!-- /.sidebar -->
  </aside>