<?php
	include 'include/config.php';
	$aksi = $_REQUEST['aksi'];
	$id = $_REQUEST['id'];
	$user = htmlentities($_POST['user']);
	$pass = htmlentities($_POST['pass']);
	$admin = htmlentities($_POST['admin']);
	$sekolah = htmlentities($_POST['$sekolah']);
	$user_status = htmlentities($_POST['user_status']);

	if ($aksi == 'tambah') {
		if ($user !=="") {
			$tambah = "INSERT INTO user (username, password, status_user, nama_admin,id_sekolah) VALUES ('$user', '$pass', '$user_status','$admin','$sekolah')";
			$query_tambah = mysqli_query($db, $tambah);
			echo "
				<script>
					alert('Insert Succsess !!');
					window.location ='?page=user/user.php'
				</script>
			";
		} else {
			echo "
				<script>
					alert('Insert Gagal !!');
					window.location ='?page=user/user.php&id=$id'
				</script>
			";
		}
	} else if ($aksi == 'edit') {
		if ($user !=="") {
			$ubah = "UPDATE user SET username = '$user',
									 password = '$pass' 
									 status_user = '$user_status', 
									 WHERE id_user = $id";

			$query_ubah = mysqli_query($db, $ubah);
			echo "
				<script>
					alert('Ubah Data Succsess !!');
					window.location ='?page=user/user.php'
				</script>
			";
		} else {
			echo "
				<script>
					alert('Ubah Data Gagal !!');
					window.location ='?page=user/user.php&id=$id'
				</script>
			";
		}
		
	} else if ($id) {
		$hapus = "DELETE FROM user WHERE id_user = '$id' ";
		$query_del = mysqli_query($db, $hapus);
		echo "
			<script>
				alert('Hapus Data Succsess !!');
				window.location ='?page=user/user.php'
			</script>
		";
	}
	
	mysqli_close($db);
?>