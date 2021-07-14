<link rel="stylesheet" type="text/css" href="print.css">
<?php 
date_default_timezone_set("Asia/Jakarta");
  //include '../../koneksi.php';
 if (isset($_REQUEST['page'])) {
  include "include/config.php"; }
else
{
  include "../../include/config.php";
  echo '<link href="../style_print.css" rel="stylesheet" type="text/css" />';
}

	$start=date('Y-m-d',strtotime($_REQUEST['start']));
  $end=date('Y-m-d',strtotime($_REQUEST['end']));
  function rupiah($angka){
  
  $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
  return $hasil_rupiah;
 
}

list($year1, $month1, $day1) = split('-', $start);
 $tgl1=$day1."-".$month1."-".$year1;
  list($year2, $month2, $day2) = split('-', $end);
  $tgl2=$day2."-".$month2."-".$year2;
?>

<div class="box-body">
    <h1 class="text" align="center">LAPORAN PEMBAYARAN</h1>
    <h3 class="text" align="center">Periode Tanggal <?php echo $tgl1; ?> s/d <?php echo $tgl2; ?> </h3>
   
    <table border="1" class="table table-striped table-striped table-bordered" align="center">
      <thead>
        <tr>
           <th>No</th>
          <th>Tanggal</th>
          <th>Nama Siswa</th>
          <th>Uang Daftar</th>
          <th>Uang Pangkal</th>
          <th>Uang Sekolah</th>
          <th>Uang Sarana</th>
           <th>Total</th>
            <th>Sisa</th>
        </tr>
      </thead>
      <tbody>
        <?php
         $no=1;
$sql = mysqli_query($db,"SELECT * FROM pembayaran p, transaksipsb t, siswa s where p.id_transaksipsb=t.id_transaksipsb and t.id_siswa=s.id_siswa and t.tgl_transaksi >='$start' and t.tgl_transaksi<='$end'");
        
           while ($ambil = mysqli_fetch_array($sql)) {

          $nama = $ambil['nama'];
           $pendaftaran = $ambil['pendaftaran'];
               $tgl_jual = $ambil['tgl_transaksi'];
               $pangkal = $ambil['pangkal'];
               $uangsekolah = $ambil['uangsekolah'];
                $uangsarana = $ambil['uangsarana'];
 
                $sisa = $ambil['sisa'];
                $total = $ambil['total'];
                

                list($year, $month, $day) = split('-', $tgl_jual);

$tgl=$day."-".$month."-".$year;
                 
        ?>
           <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $tgl; ?></td>
              <td><?php echo $nama; ?></td>
              <td><?php echo "Rp. ".number_format($pendaftaran, 0 , ',' , '.' )?></td>
              <td><?php echo "Rp. ".number_format($pangkal, 0 , ',' , '.' )?></td>
              <td><?php echo "Rp. ".number_format($uangsekolah, 0 , ',' , '.' ) ?></td>
              <td><?php echo "Rp. ".number_format($uangsarana, 0 , ',' , '.' ) ?></td>
              <td><?php echo rupiah($total); ?></td>
              <td><?php echo rupiah($sisa); ?></td>
           </tr>
        <?php 

 $total1+=$total;
  $sisa1+=$sisa;

      } ?>
            <tr>
              <?php
             // $o=mysqli_query($db, "select sum(nominal) as total1 from taksasi t where tgl_taksasi>='$start' AND tgl_taksasi<='$end' and status_taksasi='pemasukan'");
            //  $k=mysqli_fetch_array($o);

              ?>
              <th colspan="7" align="center">Total Keseluruhan</th>
             
              <th align="center" class='rupiahformat'><?php echo rupiah($total1); ?></th>
               <th align="center" class='rupiahformat'><?php echo rupiah($sisa1); ?></th>
            </tr>
      </tbody>
    </table>
    
  </div><!-- /.box-body --> 
