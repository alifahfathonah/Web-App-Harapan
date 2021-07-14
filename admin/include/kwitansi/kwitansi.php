<table>
  <tr>
    <td rowspan="2">    
      <img src="logo.jpg" width="100" height="100">     
    </td>
    <td width="550">
      <h3 align="center">
        YAYASAN PENDIDIKAN HARAPAN<br>
        Jln. Imam Bonjol No.35 Medan<br><br>
        T.P<br/>2020 / 2021
      </h3>
    </td>
  </tr> 
</table>

<hr>
        
<p align="center" >
  <strong>PROMO ULANG TAHUN BULAN FEBRUARY 2020 DISKON 50% DARI UANG PANGKAL</strong>
</p>
<?php
  include "../../include/config.php"; 
  $id=$_REQUEST['id'];
  $siswa=$_REQUEST['siswa'];
  $x=mysqli_query($db,"select * from siswa s, sekolah ss, asal_sekolah ass, transaksipsb t where s.id_siswa=t.id_siswa and s.id_sekolah=ss.id_sekolah and s.id_asal=ass.id_asal and s.id_siswa='$siswa'");
  $zz=mysqli_fetch_array($x);
  $nama=$zz['nama'];
  $jk=$zz['jk'];
  $nama_sekolah=$zz['tingpen'];
  $nama_asal=$zz['nama_asal'];
  $pangkal=$zz['pangkal'];
  $pendaftaran=$zz['pendaftaran'];
  $uangsekolah=$zz['uangsekolah'];
  $uangsarana=$zz['uangsarana'];
  $total=$zz['total'];
  $biaya=$zz['biaya'];
  $sisa=$zz['sisa'];
?>

<p>Uang Masuk Siswa Baru <?php echo $nama_sekolah ?> </p>
<table>
  <tr>
    <td>1. UNIT SEKOLAH </td>
    <td> :</td>
    <td><?php echo $nama_sekolah; ?></td>
  </tr>
  <tr>
    <td>2. NAMA SISWA </td>
    <td> :</td>
    <td><?php echo $nama; ?></td>
  </tr>
  <tr>
    <td>3. JENIS KELAMIN </td>
    <td> :</td>
    <td><?php echo $jk; ?></td>
  </tr>

  <tr>
    <td>5. UNTUK PEMBAYARAN </td>
    <td> :</td>
    <td></td>
  </tr>
</table>


<table align="center" style="margin-left: 150px;">
  <tr>
    <td width="200">1. UANG PENDAFTARAN </td>
    <td> :</td>
    <td><?php echo "Rp. ".number_format($pendaftaran, 0 , ',' , '.' ) ?></td>
  </tr>
  <tr>
    <td>2. UANG PANGKAL </td>
    <td> :</td>
    <td><?php echo "Rp. ".number_format($pangkal, 0 , ',' , '.' ) ?></td>
  </tr>
  <tr>
    <td>3. UANG SEKOLAH </td>
    <td> :</td>
    <td><?php echo "Rp. ".number_format($uangsekolah, 0 , ',' , '.' ) ?></td>
  </tr>
  <tr>
    <td>4. UANG SARANA PENDIDIKAN </td>
    <td> :</td>
    <td><?php echo "Rp. ".number_format($uangsarana, 0 , ',' , '.' ) ?></td>
  </tr>
  <tr>
  <td colspan="2"><hr style="width: 600px;"></td> 
  </tr>
  <tr>
    <th>JUMLAH </th>
    <td> :</td>
    <td><b><?php echo "Rp. ".number_format($total, 0 , ',' , '.' ) ?></b></td>
  </tr>
  <tr>
    <th>SUDAH DIBAYARKAN </th>
    <td> :</td>
    <td><b><?php echo "Rp. ".number_format($bayar, 0 , ',' , '.' ) ?></b></td>
    </tr>
  <tr>
    <th>SISA PEMBAYARAN </th>
    <td> :</td>
    <td><b><?php echo "Rp. ".number_format($sisa, 0 , ',' , '.' ) ?></b></td>
  </tr>
</table>

<p>
  <strong>NB</strong> : Maaf Semua Uang Yang Sudah Dibayarkan<br/> Tidak Bisa Di Ambi Kembali, Terimakasih.
</p>
<p style="margin-top: 60px;">(Tanda Tangan Wali Murid)</p>
<div style="margin-top: -120px;">
  <p align="right">MEDAN, 00 FEBRUARY 2020<br/>T.U.SMP HARAPAN 1</p>
  <p align="right" style="margin-top: 50px;">(FAUZIAH LUBIS, SS)</p>
</div>