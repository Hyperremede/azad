
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url(); ?>Assets/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8; width:50px;">
      <span class="brand-text font-weight-light">আজাদ এন্টারপ্রাইজ</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(); ?>Assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>home" class="nav-link active">
              <i class="nav-icon fa fa-tree"></i>
              <p> ড্যাশবোর্ড</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fa fa-tree"></i>
              <p>কাষ্টমার <i class="right fa fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?php echo base_url(); ?>public/n-customer" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>নতুন কাষ্টমার</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url(); ?>public/customer-l" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>কাষ্টমার লিষ্ট</p>
                    </a>
                </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-tree"></i>
              <p> প্রতিনিধি <i class="fa fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>public/n-s-person" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>নতুন প্রতিনিধি</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>public/n-s-l" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>প্রতিনিধি লিষ্ট</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-tree"></i>
              <p> প্রোডাক্ট <i class="fa fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>public/n-product" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>নতুন প্রোডাক্ট মজুদ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>public/n-s-product-l" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>প্রোডাক্ট লিষ্ট</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-tree"></i>
              <p> ইনভেন্টরি <i class="fa fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>মজুদকৃত প্রোডাক্ট</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>প্রোডাক্ট স্টক</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-tree"></i>
              <p> ইনভয়েস <i class="fa fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>public/invoice" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>নতুন ইনভয়েস তৈরী</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>ইনভয়েস লিষ্ট</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-tree"></i>
              <p> অর্ডার <i class="fa fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>নতুন অর্ডার</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>অর্ডার লিষ্ট</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-tree"></i>
              <p> রির্পোট <i class="fa fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>সেল রির্পোট</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>প্রোডাক্ট সেল রির্পোট</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>প্রতিনিধি রির্পোট</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>কাষ্টমার রির্পোট</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>ইনভয়েস প্যাকেজ</p>
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