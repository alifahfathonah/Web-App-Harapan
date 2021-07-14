<?php
	include 'include/config.php';
	if ($_POST) {
		$aksi = $_REQUEST['aksi'];
		$id = $_REQUEST['id'];
		$judul = $_POST['judul'];
		$isi_artikel = $_POST['isi_artikel']; 

		$lokasi_file = $_FILES['upload']['tmp_name'];
        $tipe_file   = $_FILES['upload']['type'];
        $nama_file   = $_FILES['upload']['name'];
        $size        = $_FILES['upload']['size'];
        $direktori   = "../img/artikel_img/$nama_file";
        $tgl = date("Y-m-d");

		if ($aksi == 'tambah') {
			if ($judul !=="") {
				move_uploaded_file($lokasi_file, $direktori);
				$tambah = "INSERT INTO artikel (judul, isi_artikel, gambar, tgl) VALUES ('$judul', '$isi_artikel', '$nama_file', '$tgl')";
				$query_tambah = mysqli_query($db, $tambah);
				echo "
					<script>
						alert('Insert Succsess !!');
						window.location ='?page=artikel/artikel.php'
					</script>
				";
			} else {
				echo "
					<script>
						alert('Insert Gagal !!');
						window.location ='?page=artikel/form.php'
					</script>
				";
			}
		} else if ($aksi == 'edit') {
			if ($judul !=="") {
				move_uploaded_file($lokasi_file, $direktori);
				$ubah = "UPDATE artikel SET judul = '$judul', 
											isi_artikel = '$isi_artikel', 
											gambar = '$nama_file', 
											tgl = '$tgl' WHERE id_artikel = '$id' ";

				$query_ubah = mysqli_query($db, $ubah);
				echo "
					<script>
						alert('Ubah Data Succsess !!');
						window.location ='?page=artikel/artikel.php'
					</script>
				";
			} else {
				echo "
					<script>
						alert('Ubah Data Gagal !!');
						window.location ='?page=artikel/form.php&id=$id'
					</script>
				";
			}
			
		} else if ($id) {
			$hapus = "DELETE FROM artikel WHERE id_artikel = '$id' ";
			$query_del = mysqli_query($db, $hapus);
			echo "
				<script>
					alert('Hapus Data Succsess !!');
					window.location ='?page=artikel/artikel.php'
				</script>
			";
		}
	}
	
	mysqli_close($db);
?>