<div class="row">
  <div class="col-md-12">
    <div class="box box-success box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">
          <i class="fa fa-inbox"></i> Data User
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
                    $sql = "SELECT * FROM user WHERE id_user='$id' ";
                    $query = mysqli_query($db, $sql);
                    $ambil = mysqli_fetch_array($query, MYSQL_ASSOC);
                      $id = $ambil['id_user'];
                      $user = $ambil['username'];
                      $password = $ambil['password'];
                      $status_user = $ambil['status_user'];

                    echo "
                      <form action='?page=user/proses.php' method='post'>
                        <input type='hidden' name='aksi' value='$aksi'>
                        <input type='hidden' name='id' value='$id'>

                        <div class='form-group'>
                          <label>Username</label>
                          <input type='text' name='user' class='form-control' placeholder='Username' value='$user'>
                        </div>
                        <div class='form-group'>
                          <label>Password</label>
                          <input type='password' name='pass' class='form-control' placeholder='Password' value='$password'>
                        </div>
                        <div class='form-group'>
                          <label>User Status</label>
                          <input type='text' name='user_status' class='form-control' placeholder='User Status' value='$user_status'>
                        </div>
                        <button type='submit' class='btn btn-default'>Simpan</button>
                        <button type='reset' class='btn btn-primary' onclick=self.history.back()>Kembali</button>
                      </form>
                    ";
                  } else {
                    $aksi = 'tambah';
                    echo "
                      <form action='?page=user/proses.php' method='post'>
                        <input type='hidden' name='aksi' value='$aksi'>
<div class='form-group'>
                          <label>Nama Lengkap</label>
                          <input type='text' name='admin' class='form-control' placeholder='Nama Lengkap'>
                        </div>

                        <div class='form-group'>
                          <label>Username</label>
                          <input type='text' name='user' class='form-control' placeholder='Username'>
                        </div>
                        <div class='form-group'>
                          <label>Password</label>
                          <input type='password' name='pass' class='form-control' placeholder='Password'>
                        </div>
                        <div class='form-group'>
                          <label>User Status</label>
                         <select name='user_status' class='form-control'>
                                    <option value='admin'>Admin</option>
                                    <option value='harapan1'>Harapan 1</option>
                                    <option value='harapan2'>Harapan 2</option>
                                    <option value='harapan3'>Harapan 3</option>
                         </select>
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