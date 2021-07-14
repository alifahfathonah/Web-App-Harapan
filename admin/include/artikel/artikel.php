
<div class="row">
  <div class="col-md-12">
    <div class="box box-success box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">
          <i class="fa fa-inbox"></i> Artikel
        </h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
      </div><!-- /.box-header -->
      <div class="box-body">
        <section class="content">
          <div class="row">
            <div class="col-md-12">
                <a href="?page=artikel/form.php">
                  <button type="submit" class="btn btn-primary tambah">Tambah Data</button>
                </a>
              <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul Artikel</th>
                      <th>Isi Artikel</th>
                      <th>Image</th>
                      <th>Tanggal</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      include 'include/config.php';
                      $sql = "SELECT * FROM artikel";
                      $query = mysqli_query($db, $sql);
                      $no = 1;
                      while ($ambil = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                        $id = $ambil['id_artikel'];
                        $judul = $ambil['judul'];
                        $isi_artikel = $ambil['isi_artikel'];
                        $gambar = $ambil['gambar'];
                        $tgl = $ambil['tgl'];
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $judul; ?></td>
                      <td><?php echo $isi_artikel; ?></td>
                      <td>
                        <img src="../img/artikel_img/<?php echo $gambar; ?>" style="width: 60px;">
                      </td>
                      <td><?php echo $tgl; ?></td>
                      <td>
                        <div class="dropdown">
                          <button id="dLabel" class="btn btn-success" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pilih Aksi
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <li><a href="?page=artikel/form.php&id=<?php echo $id; ?>">Edit</a></li>
                            <li><a href="?page=artikel/proses.php&id=<?php echo $id; ?>">Delete</a></li>
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
