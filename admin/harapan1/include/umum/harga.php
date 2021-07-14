<div class="row">
  <script type="text/javascript">
        function kembali()
        {
            var total=document.getElementById('total').value;
            var bayar=document.getElementById('bayar').value;
            document.getElementById('kembalian').value=bayar-total;
        }

        function pertama()
        {
            document.getElementById("bayar").focus();
            var kasir=opener.document.getElementById('kasir').value;
            var faktur=opener.document.getElementById('faktur').value;
            var tgl_jual=opener.document.getElementById('tgl_jual').value;
            
            document.getElementById('kasir').value=kasir;
            document.getElementById('faktur').value=faktur;
            document.getElementById('tgl_jual').value=tgl_jual;
        }

        function cicilana()
        {
            var total=document.getElementById('total').value;
            var cicilan=document.getElementById('cicilan').value;
            document.getElementById('sisaq').value=total-cicilan;
        }

        </script>

  <div class="col-md-6">
    <div class="box box-success box-solid">
      <div class="box-header with-border">
        <h3 class="box-title text-uppercase">
          <i class="fa fa-inbox"></i> Transaksi Pembayaran
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
                      $id=$_REQUEST['id'];
                      //echo $id;
                     
                      $query = mysqli_query($db, "SELECT * FROM siswa s, asal_sekolah a, sekolah se where s.id_asal=a.id_asal and s.id_sekolah=se.id_sekolah and s.id_siswa='$id'");
                      $no = 1;
                      $ambil = mysqli_fetch_array($query);
                        $id_siswa = $ambil['id_siswa'];
                        $nama = $ambil['nama'];
                        //echo $nama;
                        $tempat_lahir1 = $ambil['tempat_lahir1'];
                        $tgl1 = $ambil['tgl1'];
                        $alamat1 = $ambil['alamat1'];
                        $agama1 = $ambil['agama1'];
                        $tgl_daftar = $ambil['tgl_daftar'];
                        $id_asal = $ambil['id_asal'];
                        $nama_asal = $ambil['nama_asal'];
                        $nama_sekolah = $ambil['tingpen'];
                        $uang_daftar = $ambil['uang_daftar'];

                        $uang_pangkal = $ambil['uang_pangkal'];
                        $uang_sekolah = $ambil['uang_sekolah'];
                        $uang_sarana = $ambil['uang_sarana'];

                       

                        $pangkal=($uang_pangkal/2);
                        $total=$uang_sekolah+$uang_sarana+$pangkal+$uang_daftar;

                        
                    ?>
            <form action="?page=daftar/harga_proses.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="span5">
                    <div class="widget-box">
                    <div class="widget-content nopadding">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                          
                        </div>
                        <div class="control-group">
                            <label class="control-label">Nama Lengkap</label>
                            <div class="form-group">
                              <input type="hidden"  name="id" value="<?php echo $id; ?>">
                                <input type="text" required autocomplete="off"  class="form-control" name="naleng" placeholder="Nama Lengkap" value="<?php echo $nama; ?>" readonly />
                            </div>
                        </div>
                          <div class="control-group">
                            <label class="control-label">Sekolah Asal</label>
                            <div class="form-group">
                                <input type="text" required autocomplete="off"  class="form-control" name="asal" placeholder="Asal Sekolah" value="<?php echo $nama_asal; ?>" readonly />
                            </div>
                        </div>
                          <div class="control-group">
                            <label class="control-label">Sekolah Tujuan</label>
                            <div class="form-group">
                                <input type="text" required autocomplete="off"  class="form-control" name="sekolah" placeholder="Nama Lengkap" value="<?php echo $nama_sekolah; ?>" readonly />
                            </div>
                        </div>
                         <div class="control-group">
                            <label class="control-label">Uang Pendaftaran</label>
                            <div class="form-group">
                                <input type="text" required autocomplete="off"  class="form-control" name="pendaftaran" placeholder="Nama Lengkap" value="<?php echo "Rp. ".number_format($uang_daftar, 0 , ',' , '.' ); ?>" readonly />
                                <input type="hidden" name="pendaftaran" value="<?php echo $uang_daftar; ?>">
                            </div>
                        </div>
                         <div class="control-group">
                            <label class="control-label">Uang Pangkal</label>
                            <div class="form-group">
                                <input type="text" required autocomplete="off"  class="form-control" name="pangkal" placeholder="Nama Lengkap" value="<?php echo "Rp. ".number_format($pangkal, 0 , ',' , '.' ) ?>" readonly />
                                 <input type="hidden" name="pangkal" value="<?php echo $pangkal; ?>">
                            </div>
                        </div>
                         <div class="control-group">
                            <label class="control-label">Uang Sekolah</label>
                            <div class="form-group">
                                <input type="text" required autocomplete="off"  class="form-control" name="uangsekolah" placeholder="Nama Lengkap" value="<?php echo "Rp. ".number_format($uang_sekolah, 0 , ',' , '.' ) ?>" readonly />
                                 <input type="hidden" name="uangsekolah" value="<?php echo $uang_sekolah; ?>">
                            </div>
                        </div>
                         <div class="control-group">
                            <label class="control-label">Uang Sarana</label>
                            <div class="form-group">
                                <input type="text" required autocomplete="off"  class="form-control" name="uangsarana" placeholder="Nama Lengkap" value="<?php echo "Rp. ".number_format($uang_sarana, 0 , ',' , '.' ) ?>" readonly />
                                 <input type="hidden" name="uangsarana" value="<?php echo $uang_sarana; ?>">
                            </div>
                        </div>
                         <div class="control-group">
                            <label class="control-label">Total</label>
                            <div class="form-group">
                                <input type="text" required autocomplete="off"  class="form-control" name="total" id="total" placeholder="Nama Lengkap" value="<?php echo "Rp. ".number_format($total, 0 , ',' , '.' ) ?>" readonly />
                                 <input type="hidden" name="total" value="<?php echo $total; ?>">
                            </div>
                        </div>
                          <div class="control-group">
                            <label class="control-label">Bayar</label>
                            <div class="form-group">
                                <input type="text" required autocomplete="off"  class="form-control" name="bayar" id="bayar" placeholder="Bayar"  />
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