  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light text-uppercase">Radix Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Dinomanh</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link  <?php echo activeMenuSidebar('') ? 'active': false?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Tổng quan
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview <?php echo activeMenuSidebar('blog')? 'menu-open': false?>">
            <a href="#" class="nav-link  <?php echo activeMenuSidebar('blog')? 'active': false?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Quản lý Blog
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo _WEB_HOST_ROOT_ADMIN.'/?module=blog'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo _WEB_HOST_ROOT_ADMIN.'/?module=blog&action=add'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm mới blog</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">