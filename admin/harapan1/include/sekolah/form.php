<div class="row">
  <div class="col-md-12">
    <div class="box box-success box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">
          <i class="fa fa-inbox"></i> Form Sekolah
        </h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
      </div><!-- /.box-header -->
      <div class="box-body">
        <section class="content">
          <div class="row">
            <div class="col-md-5">
              <div class="box-body">
                <?php 
                  include 'include/config.php';
                  $id = $_REQUEST['id'];
                  if (isset($id)) {
                    $aksi = 'edit';
                    $sql = "SELECT * FROM sekolah WHERE id_sekolah='$id' ";
                    $query = mysqli_query($db, $sql);
                    $ambil = mysqli_fetch_array($query, MYSQL_ASSOC);
                      $id_sekolah = $ambil['id_sekolah'];
                      $nama = $ambil['nama'];
                      $tingpen = $ambil['tingpen'];
                      $uang_daftar = $ambil['uang_daftar'];
                      $uang_pangkal = $ambil['uang_pangkal'];
                      $uang_sekolah = $ambil['uang_sekolah'];
                      $uang_sarana = $ambil['uang_sarana'];


                    echo "
                      <form action='?page=sekolah/proses.php' method='post'>
                        <input type='hidden' name='aksi' value='$aksi'>
                        <input type='hidden' name='id' value='$id'>

                        <div class='form-group'>
                          <label>Nama Sekolah</label>
                          <input type='text' name='nama' class='form-control' placeholder='Username' value='$tingpen'>
                        </div>
                        <div class='form-group'>
                          <label>Uang Pendaftaran</label>
                          <input type='text' name='uang_daftar' class='form-control' placeholder='Username' value='$uang_daftar'>
                        </div>
                        <div class='form-group'>
                          <label>Uang Pangkal</label>
                          <input type='text' name='uang_pangkal' class='form-control' placeholder='Username' value='$uang_pangkal'>
                        </div>
                        <div class='form-group'>
                          <label>Uang Sekolah</label>
                          <input type='text' name='uang_sekolah' class='form-control' placeholder='Username' value='$uang_sekolah'>
                        </div>
                        <div class='form-group'>
                          <label>Uang Sarana</label>
                          <input type='text' name='uang_sarana' class='form-control' placeholder='Username' value='$uang_sarana'>
                        </div>
                        
                        <button type='submit' class='btn btn-default'>Simpan</button>
                        <button type='reset' class='btn btn-primary' onclick=self.history.back()>Kembali</button>
                      </form>
                    ";
                  } else {
                    $aksi = 'tambah';
                    echo "
                      <form action='?page=sekolah/proses.php' method='post'>
                        <input type='hidden' name='aksi' value='$aksi'>

                        <div class='form-group'>
                          <label>Nama Sekolah</label>
                          <input type='text' name='nama' class='form-control' placeholder='Nama Sekolah'>
                        </div>
                        <button type='submit' class='btn btn-default'>Simpan</button>
                        <button type='reset' class='btn btn-primary' onclick=self.history.back()>Kembali</button>
                      </form>
                    ";
                  }

                  mysqli_close($db);
                ?>
              </div><!-- /.box-body -->
            </div>
          </div>
        </section>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div><!-- /.row (main row) -->