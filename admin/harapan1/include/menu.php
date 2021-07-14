 <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $username ?></p>
              <p class="text-capitalize"><?php echo $status_user; ?></p>
            </div>
          </div>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            
            <li>
              <a href="home.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-book"></i> <span>Pendaftaran</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?page=daftar/tampil.php"><i class="fa fa-book"></i> Siswa Harapan</a></li>
                 <li><a href="?page=umum/tampil.php"><i class="fa fa-book"></i> Siswa Umum</a></li>
               </ul>
            </li>
           
            <li class="treeview">
              <a href="?page=sekolah/sekolah.php">
                <i class="fa fa-list"></i> <span>List Sekolah</span>
              </a>
            </li>
            <li class="treeview">
              <a href="?page=asal_sekolah/sekolah.php">
                <i class="fa fa-list"></i> <span>Asal Sekolah</span>
              </a>
            </li>
             
             <li class="treeview">
              <a href="#">
                <i class="fa fa-book"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?page=pembayaran/pembayaran.php"><i class="fa fa-book"></i> Pembayaran</a></li>
            </li></ul>
            
      <!-- <li class="treeview">
              <a href="#">
                <i class="fa fa-book"></i> <span>Pendaftaran Siswa</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?page=daftar/form.php"><i class="fa fa-book"></i> TK</a></li>
                <li>
                  <a href="?page=daftar/form.php">
                    <i class="fa fa-book"></i> <span> SD</span>
                  </a>
                </li>
              </ul>
            </li> -->
            </ul>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
