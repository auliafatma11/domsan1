
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/<?= $foto; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $nama_nasabah; ?></p>
          <!-- Status -->
           <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> 

      <!-- search form (Optional) -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>  -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">SIDEBAR</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="?hal=dashboard1"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="?hal=riwayat"><i class="fa fa-history"></i> <span>Riwayat</span></a></li>
        <!-- <li><a href="?hal=data_nasabah"><i class="fa fa-map"></i> <span>Data Nasabah</span></a></li>
        
        <li class="treeview">
         <a href="#"><i class="fa fa-user-plus"></i> <span>Akun</span>
         <span class="pull-right-container">
           <i class="fa fa-angle-left pull-right"></i>
         </span>
       </a>
       <ul class="treeview-menu">
         <li><a href="?hal=data_admin"><i class="fa fa-tags"></i> <span>Akun Admin</span></a></li>
        <li><a href="?hal=nasabah_data"><i class="fa fa-tags"></i> <span>Akun Nasabah</span></a></li>
       </ul>
        <li><a href="?hal=riwayat"><i class="fa fa-history"></i> <span>Riwayat</span></a></li>
        <li><a href="https://fahruroziii.github.io/panduan-aplikasi/" target="blank"><i class="fa fa-book"></i> <span>Panduan Aplikasi</span></a></li> -->
        <li><a href="logout.php"><i class="fa fa-arrow-left"></i> <span>Logout</span></a></li>
      </li>
    </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->