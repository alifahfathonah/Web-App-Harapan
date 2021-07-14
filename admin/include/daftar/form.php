<div class="row">
  <div class="col-md-6">
    <div class="box box-success box-solid">
      <div class="box-header with-border">
        <h3 class="box-title text-uppercase">
          <i class="fa fa-inbox"></i> Formulir Pendaftaran
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
                
            <form action="?page=daftar/proses.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="span5">
                    <div class="widget-box">
                    <div class="widget-content nopadding">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h3 style="font-weight: bold;" class="text-uppercase">Data Anak (Siswa)</h3> 
                        </div>
                        <div class="control-group">
                            <label class="control-label">Nama Lengkap</label>
                            <div class="form-group">
                                <input type="text" autocomplete="off"  class="form-control" name="naleng" placeholder="Nama Lengkap"  />
                            </div>
                        </div>
                         <div class="control-group">
                            <label class="control-label">Tujuan Sekolah</label>
                            <div class="form-group">
                                <select name="id" class="form-control chosen">
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
                            <label class="control-label">Asal Sekolah</label>
                            <div class="form-group">
                                <select name="asal_sekolah" class="form-control chosen">
                                    <option>Sekolah</option>
                                    <?php
                                        include 'include/config.php';
                                        $sql = "SELECT * FROM asal_sekolah order by id_asal";
                                        $query = mysqli_query($db, $sql);
                                        while ($ambil = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                                            $id_asal = $ambil['id_asal'];
                                            $nama_asal = $ambil['nama_asal'];
                                    ?>
                                    <option value="<?php echo $id_asal ?>"><?php echo $nama_asal ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Tempat Lahir</label>
                            <div class="form-group">
                                <input type="text" autocomplete="off" class="form-control" name="tempat_lahir1" placeholder="Tempat / Tanggal Lahir" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Tanggal Lahir</label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="tgl1" />
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
                                <input type="number" class="form-control" name="anak_no" placeholder="Tempat / Anak No... Dalam Keluarga" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Jumlah Saudara</label>
                            <div class="form-group">
                                <input type="number" class="form-control" name="kandung" placeholder="Kandung" /><br/>
                                <input type="number" class="form-control" name="tiri" placeholder="Tiri" /><br/>
                                <input type="number" class="form-control" name="angkat" placeholder="Angkat" />
                            </div>
                        </div>
<div class="control-group">
                            <label class="control-label">No.STTB</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="nosttb" placeholder="No.STTB" />
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label">Anak Tersebut</label>
                            <div class="form-group">
                                <select name="anak_tsb" class="form-control">
                                    <option value="-">Anak Tersebut</option>
                                    <option value="kandung">Kandung</option>
                                    <option value="tiri">Tiri</option>
                                    <option value="yatim">Yatim</option>
                                    <option value="piatu">Piatu</option>
                                    <option value="yatim-piatu">Yatim - Piatu</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Bahasa Sehari-hari di rumah</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="bahasa" placeholder="Bahasa Sehari-hari di rumah" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Kewarganegaraan</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="warga1" placeholder="Kewarganegaraan" />
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
                                <input type="text" autocomplete="off" name="notel1" placeholder="No. Tlp/Hp" class="form-control">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email</label>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email" class="form-control">
                            </div>
                        </div>
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h3 style="font-weight: bold;" class="text-uppercase">Data Ayah</h3>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Nama Ayah Kandung</label>
                            <div class="form-group">
                                <input type="text" autocomplete="off" class="form-control" name="n_ayah_k" placeholder="Nama Ayah Kandung" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Nama Ayah Tiri / Wali</label>
                            <div class="form-group">
                                <input type="text" autocomplete="off" class="form-control" name="n_ayah_t" placeholder="Nama Ayah Tiri / Wali" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Tempat Lahir</label>
                            <div class="form-group">
                                <input type="text" autocomplete="off" class="form-control" name="tempat_lahir2" placeholder="Tempat Lahir" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Tanggal Lahir</label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="tgl2" />
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
                                <input type="text" autocomplete="off" class="form-control" name="p_ayah" placeholder="Pekerjaan Ayah" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Kewarganegaraan</label>
                            <div class="form-group">
                                <input type="text" autocomplete="off" class="form-control" name="warga2" placeholder="Kewarganegaraan" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Alamat Rumah</label>
                            <div class="form-group">
                                <textarea class="form-control" name="alamat2"></textarea><br/>
                                <input type="text" autocomplete="off" class="form-control" name="notel2" placeholder="No.Tlp/Hp Rumah" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Alamat Kantor</label>
                            <div class="form-group">
                                <textarea class="form-control" name="alamat3"></textarea><br/>
                                <input type="text" autocomplete="off" class="form-control" name="notel3" placeholder="No.Tlp/Hp Kantor" />
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
                                <input type="text" autocomplete="off" class="form-control" name="n_ibu_k" placeholder="Nama Ibu Kandung" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Nama Ibu Tiri / Wali</label>
                            <div class="form-group">
                                <input type="text" autocomplete="off" class="form-control" name="n_ibu_t" placeholder="Nama Ibu Tiri / Wali" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Tempat Lahir</label>
                            <div class="form-group">
                                <input type="text" autocomplete="off" class="form-control" name="tempat_lahir3" placeholder="Tempat Lahir" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Tanggal Lahir</label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="tgl3"/>
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
                                <input type="text" autocomplete="off" class="form-control" name="p_ibu" placeholder="Pekerjaan Ibu" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Kewarganegaraan</label>
                            <div class="form-group">
                                <input type="text" autocomplete="off" class="form-control" name="warga3" placeholder="Kewarganegaraan" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Alamat Rumah</label>
                            <div class="form-group">
                                <textarea class="form-control" name="alamat4"></textarea><br/>
                                <input type="text" autocomplete="off" class="form-control" name="notel4" placeholder="No.Tlp/Hp Rumah" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Alamat Kantor</label>
                            <div class="form-group">
                                <textarea class="form-control" name="alamat5"></textarea><br/>
                                <input type="text" autocomplete="off" class="form-control" name="notel5" placeholder="No.Tlp/Hp Kantor" />
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
                            <div class="form-group">
                                <input type="submit" value="Simpan" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
              </div><!-- /.box-body -->
            </div>
          </div>
        </section>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div><!-- /.row (main row) -->