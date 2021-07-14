<?php 

	include 'include/config.php';

	if ($_POST) {
		
		$id = mysqli_real_escape_string($db, $_POST['id']);
		$naleng = mysqli_real_escape_string($db, $_POST['naleng']);
		$tempat_lahir1 = mysqli_real_escape_string($db, $_POST['tempat_lahir1']);
		$tgl1 = mysqli_real_escape_string($db, $_POST['tgl1']);
		$jk = mysqli_real_escape_string($db, $_POST['jk']);
		$gol_darah1 = mysqli_real_escape_string($db, $_POST['gol_darah1']);
		$alamat1 = mysqli_real_escape_string($db, $_POST['alamat1']);
		$anak_no = mysqli_real_escape_string($db, $_POST['anak_no']);
		$kandung = mysqli_real_escape_string($db, $_POST['kandung']);
		$tiri = mysqli_real_escape_string($db, $_POST['tiri']);
		$angkat = mysqli_real_escape_string($db, $_POST['angkat']);
		$anak_tsb = mysqli_real_escape_string($db, $_POST['anak_tsb']);
		$bahasa = mysqli_real_escape_string($db, $_POST['bahasa']);
		$warga1 = mysqli_real_escape_string($db, $_POST['warga1']);
		$agama1 = mysqli_real_escape_string($db, $_POST['agama1']);
		$notel1 = mysqli_real_escape_string($db, $_POST['notel1']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$n_ayah = mysqli_real_escape_string($db, $_POST['n_ayah_k']);
		$n_ayah_t = mysqli_real_escape_string($db, $_POST['n_ayah_t']);
		$tempat_lahir2 = mysqli_real_escape_string($db, $_POST['tempat_lahir2']);
		$tgl2 = mysqli_real_escape_string($db, $_POST['tgl2']);
		$agama2 = mysqli_real_escape_string($db, $_POST['agama2']);
		$p_ayah = mysqli_real_escape_string($db, $_POST['p_ayah']);
		$warga2 = mysqli_real_escape_string($db, $_POST['warga2']);
		$alamat2 = mysqli_real_escape_string($db, $_POST['alamat2']);
		$notel2 = mysqli_real_escape_string($db, $_POST['notel2']);
		$alamat3 = mysqli_real_escape_string($db, $_POST['alamat3']);
		$notel3 = mysqli_real_escape_string($db, $_POST['notel3']);
		$gol_darah2 = mysqli_real_escape_string($db, $_POST['gol_darah2']);
		$n_ibu = mysqli_real_escape_string($db, $_POST['n_ibu_k']);
		$n_ibu_t = mysqli_real_escape_string($db, $_POST['n_ibu_t']);
		$tempat_lahir3 = mysqli_real_escape_string($db, $_POST['tempat_lahir3']);
		$tgl3 = mysqli_real_escape_string($db, $_POST['tgl3']);
		$agama3 = mysqli_real_escape_string($db, $_POST['agama3']);
		$p_ibu = mysqli_real_escape_string($db, $_POST['p_ibu']);
		$warga3 = mysqli_real_escape_string($db, $_POST['warga3']);
		$alamat4 = mysqli_real_escape_string($db, $_POST['alamat4']);
		$notel4 = mysqli_real_escape_string($db, $_POST['notel4']);
		$alamat5 = mysqli_real_escape_string($db, $_POST['alamat5']);
		$notel5 = mysqli_real_escape_string($db, $_POST['notel5']);
		$gol_darah3 = mysqli_real_escape_string($db, $_POST['gol_darah3']);
		$asal_sekolah = mysqli_real_escape_string($db, $_POST['asal_sekolah']);
		$nosttb = mysqli_real_escape_string($db, $_POST['nosttb']);
		$date = date('Y-m-d');
		if ($naleng !="") {

			$sql = mysqli_query($db, "INSERT INTO siswa (id_sekolah, nosttb, nama, tempat_lahir1, tgl1, jk, gol_darah1, alamat1, anak_no, kandung, tiri, angkat, anak_tsb, bahasa, warga1, agama1, notel1, email, n_ayah, n_ayah_t, tempat_lahir2, tgl2, agama2, p_ayah, warga2, alamat2, notel2, alamat3, notel3, gol_darah2, n_ibu, n_ibu_t, tempat_lahir3, tgl3, agama3, p_ibu, warga3, alamat4, notel4, alamat5, notel5, gol_darah3, tgl_daftar,id_asal,note_sekolah) VALUES ('$id','$nosttb', '$naleng', '$tempat_lahir1', '$tgl1', '$jk', '$gol_darah1', '$alamat1', '$anak_no', '$kandung', '$tiri', '$angkat', '$anak_tsb', '$bahasa', '$warga1', '$agama1', '$notel1', '$email', '$n_ayah', '$n_ayah_t', '$tempat_lahir2', '$tgl2', '$agama2', '$p_ayah', '$warga2', '$alamat2', '$notel2', '$alamat3', '$notel3', '$gol_darah2', '$n_ibu', '$n_ibu_t', '$tempat_lahir3', '$tgl3', '$agama3', '$p_ibu', '$warga3', '$alamat4', '$notel4', '$alamat5', '$notel5', '$gol_darah3', '$date','$asal_sekolah','')");
			$jk=mysqli_insert_id($db);
			
			echo "
				<script>
					window.location.href = '?page=daftar/harga.php&id=$jk'
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