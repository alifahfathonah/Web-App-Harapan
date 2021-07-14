<?php 

	include '../config.php';

	if ($_POST) {
		$secret = '6LcOvdQUAAAAAL7Zz07muB6FILA_kKU1-71lSIpx';
		$verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
		$data = json_decode($verify);
		echo $id = mysqli_real_escape_string($db, $_POST['id']);
		$naleng = mysqli_real_escape_string($db, $_POST['naleng']);
		$tempat_lahir = mysqli_real_escape_string($db, $_POST['tempat_lahir']);
		$ttl = mysqli_real_escape_string($db, $_POST['ttl']);
		$jk = mysqli_real_escape_string($db, $_POST['jk']);
		$gol_darah = mysqli_real_escape_string($db, $_POST['gol_darah']);
		$kg = mysqli_real_escape_string($db, $_POST['kg']);
		$bb = mysqli_real_escape_string($db, $_POST['cm']);
		$alamat1 = mysqli_real_escape_string($db, $_POST['alamat1']);
		$agama1 = mysqli_real_escape_string($db, $_POST['agama1']);
		$asal_sekolah = mysqli_real_escape_string($db, $_POST['asal_sekolah']);
		$notel1 = mysqli_real_escape_string($db, $_POST['notel1']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$n_ayah = mysqli_real_escape_string($db, $_POST['n_ayah']);
		$n_ibu = mysqli_real_escape_string($db, $_POST['n_ibu']);
		$notel2 = mysqli_real_escape_string($db, $_POST['notel2']);
		$p_ayah = mysqli_real_escape_string($db, $_POST['p_ayah']);
		$p_ibu = mysqli_real_escape_string($db, $_POST['p_ibu']);
		$alamat2 = mysqli_real_escape_string($db, $_POST['alamat2']);
		$agama2 = mysqli_real_escape_string($db, $_POST['agama2']);
		$n_wali = mysqli_real_escape_string($db, $_POST['n_wali']);
		$notel3 = mysqli_real_escape_string($db, $_POST['notel3']);
		$p_wali = mysqli_real_escape_string($db, $_POST['p_wali']);
		$agama3 = mysqli_real_escape_string($db, $_POST['agama3']);
		$alamat3 = mysqli_real_escape_string($db, $_POST['alamat3']);
		if ($data -> success) {

			$sql = mysqli_query($db, "INSERT INTO siswa (id_sekolah, nama, tempat_lahir, tgl_lahir, jk, goldar, bb, tb, alamat1, agama1, asal_sek, notel1, email, n_ayah, n_ibu, notel2, p_ayah, p_ibu, alamat2, n_wali, notel3, p_wali, agama, alamat3) VALUES ('$id', '$naleng', '$tempat_lahir', '$ttl', '$jk', '$gol_darah', '$kg', '$bb', '$alamat1', '$agama1', '$asal_sekolah', '$notel1', '$email', '$n_ayah', '$n_ibu', '$notel2', '$p_ayah', '$p_ibu', '$alamat2', '$n_wali', '$notel3', '$p_wali', '$agama3', '$alamat3')");

			echo "
				<script>
					window.location.href = '../../index.php'
				</script>
			";	
		} else {
			echo "
				<script>
					alert('Maaf silahkan klik captcha yang ada!');
					window.location.href = 'form.php?id=$id'
				</script>
			";	
		}
		

	}