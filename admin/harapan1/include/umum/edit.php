<div class="row">
  <div class="col-md-6">
    <div class="box box-success box-solid">
      <div class="box-header with-border">
        <h3 class="box-title text-uppercase">
          <i class="fa fa-inbox"></i> Formulir Edit Pendaftaran
        </h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
      </div><!-- /.box-header -->
      <div class="box-body">
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box-body">
                
            <?php
              include 'include/config.php';
              $sql = "SELECT * FROM siswa";
              $query = mysqli_query($db, $sql);
              $no = 1;
              while ($ambil = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                $id_siswa = $ambil['id_siswa'];
                $naleng = $ambil['nama'];
                $tempat_lahir1 = $ambil['tempat_lahir1'];
                $tgl1 = $ambil['tgl1'];
                $jk = $ambil['jk'];
                $gol_darah1 = $ambil['gol_darah1'];
                $alamat1 = $ambil['alamat1'];
                $anak_no = $ambil['anak_no'];
                $kandung = $ambil['kandung'];
                $tiri = $ambil['tiri'];
                $angkat = $ambil['angkat'];
                $anak_tsb = $ambil['anak_tsb'];
                $bahasa = $ambil['bahasa'];
                $warga1 = $ambil['warga1'];
                $agama1 = $ambil['agama1'];
                $notel1 = $ambil['notel1'];
                $email = $ambil['email'];
                $n_ayah = $ambil['n_ayah'];
                $n_ayah_t = $ambil['n_ayah_t'];
                $tempat_lahir2 = $ambil['tempat_lahir2'];
                $tgl2 = $ambil['tgl2'];
                $agama2 = $ambil['agama2'];
                $p_ayah = $ambil['p_ayah'];
                $warga2 = $ambil['warga2'];
                $alamat2 = $ambil['alamat2'];
                $notel2 = $ambil['notel2'];
                $alamat3 = $ambil['alamat3'];
                $notel3 = $ambil['notel3'];
                $gol_darah2 = $ambil['gol_darah2'];
                $n_ibu = $ambil['n_ibu'];
                $n_ibu_t = $ambil['n_ibu_t'];
                $tempat_lahir3 = $ambil['tempat_lahir3'];
                $tgl3 = $ambil['tgl3'];
                $agama3 = $ambil['agama3'];
                $p_ibu = $ambil['p_ibu'];
                $warga3 = $ambil['warga3'];
                $alamat4 = $ambil['alamat4'];
                $notel4 = $ambil['notel4'];
                $alamat5 = $ambil['alamat5'];
                $notel5 = $ambil['notel5'];
                $gol_darah3 = $ambil['gol_darah3'];
            ?>
            <form action="?page=daftar/edit_pro.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                <input type="hidden" name="id_siswa" value="<?php echo $id_siswa ?>">
                <div class="span5">
                    <div class="widget-box">
                    <div class="widget-content nopadding">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h3 style="font-weight: bold;" class="text-uppercase">Data Anak (Siswa)</h3> 
                        </div>
                        <div class="control-group">
                            <label class="control-label">Nama Lengkap</label>
                            <div class="form-group">
                                <input value="<?php echo $naleng ?>" type="text" required autocomplete="off"  class="form-control" name="naleng" placeholder="Nama Lengkap"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Tempat Lahir</label>
                            <div class="form-group">
                                <input value="<?php echo $tempat_lahir1 ?>" type="text" required autocomplete="off" class="form-control" name="tempat_lahir1" placeholder="Tempat / Tanggal Lahir" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Tanggal Lahir</label>
                            <div class="form-group">
                                <input value="<?php echo $tgl1 ?>" type="date" class="form-control" name="tgl1" />
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
                                <select name="gol_darah1" class="form-control col-md-2">
                                    <option value="a">A</option>
                                    <option value="b">B</option>
                                    <option value="ab">AB</option>
                                    <option value="o">O</option>
                                    <option value="0">Tidak Tahu</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Alamat Lengkap</label>
                            <div class="form-group">
                                <textarea name="alamat1" class="form-control" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Anak No... Dalam Keluarga</label>
                            <div class="form-group">
                                <input value="<?php echo $anak_tsb ?>" type="number" class="form-control" name="anak_no" placeholder="Tempat / Anak No... Dalam Keluarga" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Jumlah Saudara</label>
                            <div class="form-group">
                                <input value="<?php echo $kandung ?>" type="number" class="form-control" name="kandung" placeholder="Kandung" /><br/>
                                <input value="<?php echo $tiri ?>" type="number" class="form-control" name="tiri" placeholder="Tiri" /><br/>
                                <input value="<?php echo $angkat ?>" type="number" class="form-control" name="angkat" placeholder="Angkat" />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Sekolah</label>
                            <div class="form-group">
                                <select name="id" class="form-control">
                                    <option>Sekolah</option>
                                    <?php
                                        include 'include/config.php';
                                        $sql = "SELECT * FROM sekolah";
                                        $query = mysqli_query($db, $sql);
                                        while ($ambil = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                                            $id_sekolah = $ambil['id_sekolah'];
                                            $tingpen = $ambil['tingpen'];
                                    ?>
                                    <option value="<?php echo $id_sekolah ?>"><?php echo $tingpen ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Anak Tersebut</label>
                            <div class="form-group">
                                <select name="anak_tsb" class="form-control">
                                    <option value="-">Anak Tersebut</option>
                                    <option value="yatim">Yatim</option>
                                    <option value="piatu">Piatu</option>
                                    <option value="yatim-piatu">Yatim - Piatu</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Bahasa Sehari-hari di rumah</label>
                            <div class="form-group">
                                <input value="<?php echo $bahasa ?>" type="text" class="form-control" name="bahasa" placeholder="Bahasa Sehari-hari di rumah" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Kewarganegaraan</label>
                            <div class="form-group">
                                <input value="<?php echo $warga1 ?>" type="text" class="form-control" name="warga1" placeholder="Kewarganegaraan" />
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
                            <label class="control-label">No. Tlp/Hp</label>
                            <div class="form-group">
                                <input value="<?php echo $notel1 ?>" type="text" required autocomplete="off" name="notel1" placeholder="No. Tlp/Hp" class="form-control">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email</label>
                            <div class="form-group">
                                <input value="<?php echo $email ?>" type="email" name="email" placeholder="Email" class="form-control">
                            </div>
                        </div>
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h3 style="font-weight: bold;" class="text-uppercase">Data Ayah</h3>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Nama Ayah Kandung</label>
                            <div class="form-group">
                                <input value="<?php echo $n_ayah ?>" type="text" required autocomplete="off" class="form-control" name="n_ayah_k" placeholder="Nama Ayah Kandung" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Nama Ayah Tiri / Wali</label>
                            <div class="form-group">
                                <input value="<?php echo $n_ayah_t ?>" type="text" required autocomplete="off" class="form-control" name="n_ayah_t" placeholder="Nama Ayah Tiri / Wali" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Tempat Lahir</label>
                            <div class="form-group">
                                <input value="<?php echo $tempat_lahir2 ?>" type="text" required autocomplete="off" class="form-control" name="tempat_lahir2" placeholder="Tempat Lahir" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Tanggal Lahir</label>
                            <div class="form-group">
                                <input value="<?php echo $tgl2 ?>" type="date" class="form-control" name="tgl2" />
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
                        <div class="control-group">
                            <label class="control-label">Pekerjaan / Jabatan</label>
                            <div class="form-group">
                                <input value="<?php echo $p_ayah ?>" type="text" required autocomplete="off" class="form-control" name="p_ayah" placeholder="Pekerjaan Ayah" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Kewarganegaraan</label>
                            <div class="form-group">
                                <input value="<?php echo $warga2 ?>" type="text" required autocomplete="off" class="form-control" name="warga2" placeholder="Kewarganegaraan" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Alamat Rumah</label>
                            <div class="form-group">
                                <textarea class="form-control" name="alamat2"></textarea><br/>
                                <input value="<?php echo $notel2 ?>" type="text" required autocomplete="off" class="form-control" name="notel2" placeholder="No.Tlp/Hp Rumah" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Alamat Kantor</label>
                            <div class="form-group">
                                <textarea class="form-control" name="alamat3"></textarea><br/>
                                <input value="<?php echo $notel3 ?>" type="text" required autocomplete="off" class="form-control" name="notel3" placeholder="No.Tlp/Hp Kantor" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Golongan Darah</label>
                            <div class="form-group">
                                <select name="gol_darah2" class="form-control col-md-2">
                                    <option value="a">A</option>
                                    <option value="b">B</option>
                                    <option value="ab">AB</option>
                                    <option value="o">O</option>
                                    <option value="0">Tidak Tahu</option>
                                </select>
                            </div>
                        </div>
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h3 style="font-weight: bold;" class="text-uppercase">Data Ibu</h3>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Nama Ibu Kandung</label>
                            <div class="form-group">
                                <input value="<?php echo $n_ibu ?>" type="text" required autocomplete="off" class="form-control" name="n_ibu_k" placeholder="Nama Ibu Kandung" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Nama Ibu Tiri / Wali</label>
                            <div class="form-group">
                                <input value="<?php echo $n_ibu_t ?>" type="text" required autocomplete="off" class="form-control" name="n_ibu_t" placeholder="Nama Ibu Tiri / Wali" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Tempat Lahir</label>
                            <div class="form-group">
                                <input value="<?php echo $tempat_lahir3 ?>" type="text" required autocomplete="off" class="form-control" name="tempat_lahir3" placeholder="Tempat Lahir" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Tanggal Lahir</label>
                            <div class="form-group">
                                <input value="<?php echo $tgl3 ?>" type="date" class="form-control" name="tgl3"/>
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
                            <label class="control-label">Pekerjaan / Jabatan</label>
                            <div class="form-group">
                                <input value="<?php echo $p_ibu ?>" type="text" required autocomplete="off" class="form-control" name="p_ibu" placeholder="Pekerjaan Ibu" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Kewarganegaraan</label>
                            <div class="form-group">
                                <input value="<?php echo $warga3 ?>" type="text" required autocomplete="off" class="form-control" name="warga3" placeholder="Kewarganegaraan" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Alamat Rumah</label>
                            <div class="form-group">
                                <textarea class="form-control" name="alamat4"></textarea><br/>
                                <input value="<?php echo $notel4 ?>" type="text" required autocomplete="off" class="form-control" name="notel4" placeholder="No.Tlp/Hp Rumah" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Alamat Kantor</label>
                            <div class="form-group">
                                <textarea class="form-control" name="alamat5"></textarea><br/>
                                <input value="<?php echo $notel5 ?>" type="text" required autocomplete="off" class="form-control" name="notel5" placeholder="No.Tlp/Hp Kantor" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Golongan Darah</label>
                            <div class="form-group">
                                <select name="gol_darah3" class="form-control col-md-2">
                                    <option value="a">A</option>
                                    <option value="b">B</option>
                                    <option value="ab">AB</option>
                                    <option value="o">O</option>
                                    <option value="0">Tidak Tahu</option>
                                </select>
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
            <?php } ?>
              </div><!-- /.box-body -->
            </div>
          </div>
        </section>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div><!-- /.row (main row) -->