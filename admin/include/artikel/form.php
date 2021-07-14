<div class="row">
  <div class="col-md-12">
    <div class="box box-success box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">
          <i class="fa fa-inbox"></i> Form Artikel
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
                    $sql = "SELECT * FROM artikel WHERE id_artikel='$id' ";
                    $query = mysqli_query($db, $sql);
                    $ambil = mysqli_fetch_array($query, MYSQL_ASSOC);
                      $id_artikel = $ambil['id_artikel'];
                      $judul = $ambil['judul'];
                      $isi_artikel = $ambil['isi_artikel'];
                      $gambar = $ambil['gambar'];
                      $tgl = $ambil['tgl'];

                    echo "
                      <form action='?page=artikel/proses.php' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='aksi' value='$aksi'>
                        <input type='hidden' name='id' value='$id'>

                        <div class='form-group'>
                          <label>Judul Artikel</label>
                          <input type='text' name='judul' class='form-control' placeholder='Judul Artikel' value='$judul'>
                        </div>
                        <div class='form-group'>
                          <label>Isi Artikel</label>
                          <textarea name='isi_artikel' rows='16' class='form-control'>$isi_artikel</textarea>
                        </div>
                        <div class='form-group'>
                          <label>Image / Foto</label>
                          <input type='file' name='upload' class='form-control' id='file' onchange='return validasiFile()'>
                        </div>
                        
                        <button type='submit' class='btn btn-default'>Simpan</button>
                        <button type='reset' class='btn btn-primary' onclick=self.history.back()>Kembali</button>
                      </form>
                    ";
                  } else {
                    $aksi = 'tambah';
                    echo "
                      <form action='?page=artikel/proses.php' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='aksi' value='$aksi'>

                        <div class='form-group'>
                          <label>Judul Artikel</label>
                          <input type='text' name='judul' class='form-control' placeholder='Judul Artikel' value='$judul'>
                        </div>
                        <div class='form-group'>
                          <label>Isi Artikel</label>
                          <textarea name='isi_artikel' rows='16' class='form-control'>$isi_artikel</textarea>
                        </div>
                        <div class='form-group'>
                          <label>Image / Foto</label>
                          <input type='file' name='upload' class='form-control' id='file' onchange='return validasiFile()'>
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