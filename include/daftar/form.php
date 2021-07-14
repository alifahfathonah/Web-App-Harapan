<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <title>Formulir Pendaftaran</title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="box-shadow: 0px 0px 3px black;">
        <div class="container">
          <a class="navbar-brand" href="#">
              <img src="../../img/logo.png" class="rounded float-left" style="width: 80px; padding: 0px 0px;">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse text-uppercase" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="../../index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pengumuman</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Info</span></a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="row mt-5">
        <div  class="col-md-6 offset-md-3 mt-5">
            <form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">
                <?php 
                    $id = $_GET['id'];
                ?>
                <input type="hidden" name="id" value="<?= $id; ?>">
                <div class="span5">
                    <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <!-- <a href="../../index.php">&laquo; Back to Website</a> -->
                        <h5 class="mt-3 text-center text-uppercase">formulir pendaftaran siswa baru</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <p style="font-weight: bold;" class="text-uppercase">Biodata siswa</p>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Nama Lengkap</label>
                            <div class="form-group">
                                <input type="text" required autocomplete="off"  class="form-control" name="naleng" placeholder="Nama Lengkap"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Tempat</label>
                            <div class="form-group">
                                <input type="text" required autocomplete="off" class="form-control" name="tempat_lahir" placeholder="Tempat / Tanggal Lahir" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Tanggal Lahir</label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="ttl" placeholder="Tempat / Tanggal Lahir" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Jenis Kelamin</label>
                            <div class="form-group">
                                <select name="jk" class="form-control">
                                    <option value="-">Jenis Kelamin</option>
                                    <option value="L">Laki - Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Golongan Darah</label>
                            <div class="form-group">
                                <select name="gol_darah" class="form-control col-md-2">
                                    <option value="a">A</option>
                                    <option value="b">B</option>
                                    <option value="ab">AB</option>
                                    <option value="o">O</option>
                                    <option value="0">Tidak Tahu</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row mb-2">
                                <label class="control-label ml-3">Berat / Tinggi Badan</label>
                                <div class="w-100"></div>
                                <div class="col-md-6 mt-1">
                                  <input type="text" required autocomplete="off" name="kg" class="form-control" placeholder="kg">
                                </div>
                                <div class="col-md-6 mt-1">
                                  <input type="text" required autocomplete="off" name="cm" class="form-control" placeholder="cm">
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Alamat Lengkap</label>
                            <div class="form-group">
                                <textarea name="alamat1" class="form-control" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Agama</label>
                            <div class="form-group">
                                <select name="agama1" class="form-control">
                                    <option value="-">Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Katolik">Katolik</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Asal Sekolah</label>
                            <div class="form-group">
                                <input type="text" required autocomplete="off" name="asal_sekolah" placeholder="Asal Sekolah" class="form-control">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Pilih Sekolah</label>
                            <div class="form-group">
                                <select name="jk" class="form-control select2">
                                    <option value="-">Pilih Sekolah</option>
                                    <?php 
                                        include '../../admin/include/config.php';
                                        $sql = mysqli_query($db, "SELECT * FROM sekolah");
                                        while($ambil = mysqli_fetch_array($sql)){
                                        $id_sekolah = $ambil['id_sekolah'];
                                        $nama_sekolah = $ambil['tingpen'];
                                    ?>
                                    <option value="<?= $id_sekolah ?>"><?= $nama_sekolah ?></option>}
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">No. Tlp/Hp</label>
                            <div class="form-group">
                                <input type="text" required autocomplete="off" name="notel1" placeholder="No. Tlp/Hp" class="form-control">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email</label>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email" class="form-control">
                            </div>
                        </div>
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <p style="font-weight: bold;" class="text-uppercase">Biodata orang tua</p>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Nama Ayah</label>
                            <div class="form-group">
                                <input type="text" required autocomplete="off" class="form-control" name="n_ayah" placeholder="Nama Ayah" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Nama Ibu</label>
                            <div class="form-group">
                                <input type="text" required autocomplete="off" class="form-control" name="n_ibu" placeholder="Nama Ibu" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">No. Telepon</label>
                            <div class="form-group">
                                <input type="text" required autocomplete="off" class="form-control" name="notel2" placeholder="No. Telepon" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Pekerjaan Ayah</label>
                            <div class="form-group">
                                <input type="text" required autocomplete="off" class="form-control" name="p_ayah" placeholder="Pekerjaan Ayah" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Pekerjaan Ibu</label>
                            <div class="form-group">
                                <input type="text" required autocomplete="off" class="form-control" name="p_ibu" placeholder="Pekerjaan Ibu" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Alamat Orang Tua</label>
                            <div class="form-group">
                                <textarea class="form-control" name="alamat2"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Agama</label>
                            <div class="form-group">
                                <select name="agama2" class="form-control">
                                    <option value="-">Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Katolik">Katolik</option>
                                </select>
                            </div>
                        </div>
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <p style="font-weight: bold;" class="text-uppercase">Formulir Wali Siswa</p>
                        </div><div class="control-group">
                            <label class="control-label">Nama Wali</label>
                            <div class="form-group">
                                <input type="text" required autocomplete="off" class="form-control" name="n_wali" placeholder="Nama Wali" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">No. Telepon</label>
                            <div class="form-group">
                                <input type="text" required autocomplete="off" class="form-control" name="notel3" placeholder="No. Telepon" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Pekerjaan Wali</label>
                            <div class="form-group">
                                <input type="text" required autocomplete="off" class="form-control" name="p_wali" placeholder="Pekerjaan Wali" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Agama</label>
                            <div class="form-group">
                                <select name="agama3" class="form-control">
                                    <option value="-">Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Katolik">Katolik</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Alamat Wali</label>
                            <div class="form-group">
                                <textarea class="form-control" name="alamat3"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <!-- <label class="control-label">Kode</label> -->
                            <div class="form-group">
                                 <div class="g-recaptcha" data-sitekey="6LcOvdQUAAAAAH4IpmeGDh6fm6ARf1xUZRIQL-CV"></div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group">
                                <input type="submit" value="Simpan" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script>
        $(".select2").select2({
            tags: true
        });
    </script>
</body>
</html>

