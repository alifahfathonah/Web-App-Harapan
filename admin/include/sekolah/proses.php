<?php
	include 'include/config.php';
	$aksi = $_REQUEST['aksi'];
	$id = mysqli_real_escape_string($db, $_REQUEST['id']);
	$nama = mysqli_real_escape_string($db, $_POST['nama']);
	$uang_daftar = mysqli_real_escape_string($db, $_POST['uang_daftar']);
	$uang_pangkal = mysqli_real_escape_string($db, $_POST['uang_pangkal']);
	$uang_sekolah = mysqli_real_escape_string($db, $_POST['uang_sekolah']);
	$uang_sarana = mysqli_real_escape_string($db, $_POST['uang_sarana']);

	if ($aksi == 'tambah') {
		if ($nama !=="") {
			$tambah = "INSERT INTO sekolah (tingpen, uang_daftar, uang_pangkal, uang_sekolah, uang_sarana) VALUES ('$nama','$uang_daftar', '$uang_pangkal', '$uang_sekolah', '$uang_sarana')";
			$query_tambah = mysqli_query($db, $tambah);
			echo "
				<script>
					alert('Insert Succsess !!');
					window.location ='?page=sekolah/sekolah.php'
				</script>
			";
		} else {
			echo "
				<script>
					alert('Insert Gagal !!');
					window.location ='?page=sekolah/form.php'
				</script>
			";
		}
	} else if ($aksi == 'edit') {
		if ($nama !=="") {
			$ubah = "UPDATE sekolah SET tingpen='$nama', uang_daftar='$uang_daftar', uang_pangkal='$uang_pangkal', uang_sekolah='$uang_sekolah', uang_sarana = '$uang_sarana'
									 WHERE id_sekolah = $id";

			$query_ubah = mysqli_query($db, $ubah);
			echo "
				<script>
					alert('Ubah Data Succsess !!');
					window.location ='?page=sekolah/sekolah.php'
				</script>
			";
		} else {
			echo "
				<script>
					alert('Ubah Data Gagal !!');
					window.location ='?page=sekolah/form.php&id=$id'
				</script>
			";
		}
		
	} else if ($id) {
		$hapus = "DELETE FROM sekolah WHERE id_sekolah = '$id' ";
		$query_del = mysqli_query($db, $hapus);
		echo "
			<script>
				alert('Hapus Data Succsess !!');
				window.location ='?page=sekolah/sekolah.php'
			</script>
		";
	}
	
	mysqli_close($db);
?>