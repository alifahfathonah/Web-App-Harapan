<?php 
date_default_timezone_set("Asia/Jakarta");

	include 'include/config.php';

	if ($_POST) {
		
		$id = mysqli_real_escape_string($db, $_POST['id']);
		$nama = mysqli_real_escape_string($db, $_POST['nama']);
		$pendaftaran = mysqli_real_escape_string($db, $_POST['pendaftaran']);
		$pangkal = mysqli_real_escape_string($db, $_POST['pangkal']);
		$uangsarana = mysqli_real_escape_string($db, $_POST['uangsarana']);
		$uangsekolah = mysqli_real_escape_string($db, $_POST['uangsekolah']);
		$total = mysqli_real_escape_string($db, $_POST['total']);
		$bayar = mysqli_real_escape_string($db, $_POST['bayar']);
		$sisa = ($total-$bayar);
		//echo $sisa;
		
		$date = date('Y-m-d');
		if ($bayar !="") {

			$sql = mysqli_query($db, "INSERT INTO transaksipsb (id_siswa, pendaftaran, pangkal, uangsekolah, uangsarana, total, bayar, sisa, tgl_transaksi) VALUES ('$id', '$pendaftaran', '$pangkal', '$uangsekolah', '$uangsarana', '$total', '$bayar','$sisa', '$date')");
			$jk1=mysqli_insert_id($db);

			$x=mysqli_query($db,"INSERT INTO pembayaran(id_transaksipsb, nominal) VALUES ('$jk1','$bayar')");
			
			echo "
				<script>
					window.location.href = 'include/kwitansi/cetak_kwitansi.php?id=$jk1&siswa=$id'
				</script>
			";	
		} else {
			echo "
				<script>
					alert('Maaf silahkan input kembali!');
					window.location.href = '?page=daftar/form.php'
				</script>
			";	
		}
		

	}
	?>