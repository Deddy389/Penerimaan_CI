<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="<?php echo base_url('index.php/dashboard');?>">
            <i class="fa fa-dashboard text-success"></i> <span>Dashboard</span>
            <span class="pull-right-container"></span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-book text-aqua"></i> <span>TBP</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('index.php/control_tbp/list_tbp');?>">
              <i class="fa fa-stack-overflow fa-1x"></i> <span>Pengajuan / Persetujuan</span></a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-book text-green"></i> <span>STS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-stack-overflow fa-1x"></i> <span>Pengajuan / Persetujuan</span></a></li>
          </ul>
        </li> 

        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text-o fa-1x text-yellow"></i> <span>Cetak</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-file-text-o fa-1x"></i> <span>Register TBP</span></a></li>
            <li><a href="#"><i class="fa fa-file-text-o fa-1x"></i> <span>Register STS</span></a></li>
          </ul>
        </li> 

            <li><a href="#"><i class="ion ion-ios-gear-outline"></i> <span>Setting</span></a></li>
      </ul>
  </section>
  <!-- /.sidebar -->
</aside>