<?php 

	include 'include/config.php';

	$id = $_GET['id'];

	$hapus = mysqli_query($db, "DELETE FROM siswa WHERE id_siswa='$id' ");
	echo "
		<script>
			window.location.href = '?page=daftar/tampil.php'
		</script>
	";	
