
<div class="row">
  <div class="col-md-12">
    <div class="box box-success box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">
          <i class="fa fa-inbox"></i> Data Siswa Harapan
        </h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
      </div><!-- /.box-header -->
      <div class="box-body">
        <section class="content">
          <div class="row">
            <div class="col-md-12">
                <a href="?page=daftar/form.php">
                  <button type="submit" class="btn btn-primary tambah">Formulir Pendaftaran</button>
                </a>
              <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Lengkap</th>
                      <th>Tempat / Tanggal Lahir</th>
                      <th>Alamat</th>
                      <th>Agama</th>

                      <th>Asal Sekolah</th>
                      <th>Tanggal Daftar</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      include 'include/config.php';
                      $sql = "SELECT * FROM siswa s, asal_sekolah a where s.id_asal=a.id_asal and s.note_sekolah=''";
                      $query = mysqli_query($db, $sql);
                      $no = 1;
                      while ($ambil = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                        $id_siswa = $ambil['id_siswa'];
                        $nama = $ambil['nama'];
                        $tempat_lahir1 = $ambil['tempat_lahir1'];
                        $tgl1 = $ambil['tgl1'];
                        $alamat1 = $ambil['alamat1'];
                        $agama1 = $ambil['agama1'];
                        $nama_asal = $ambil['nama_asal'];
                        $tgl_daftar = $ambil['tgl_daftar'];
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $nama; ?></td>
                      <td><?php echo $tempat_lahir1." / ".$tgl1; ?></td>
                      <td><?php echo $alamat1; ?></td>
                      <td><?php echo $agama1; ?></td>
                      <td><?php echo $nama_asal; ?></td>
                      <td><?php echo $tgl_daftar; ?></td>
                      <td>
                        <div class="dropdown">
                          <button id="dLabel" class="btn btn-success" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pilih Aksi
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <li><a href="?page=daftar/edit.php&id=<?php echo $id_siswa; ?>">Edit</a></li>
                            <li><a href="?page=daftar/delete.php&id=<?php echo $id_siswa; ?>">Delete</a></li>
                            <li><a href="?page=daftar/detail.php&id=<?php echo $id_siswa; ?>">Detail</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <?php 
                      } 
                      mysqli_close($db); 
                    ?>
                  </tbody>
                </table>
              </div><!-- /.box-body -->
            </div>
          </div>
        </section>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div><!-- /.row (main row) -->