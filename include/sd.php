<div class="row justify-content-center">
	<?php 
		include 'include/config.php';
		$sql = mysqli_query($db, "SELECT * FROM sekolah WHERE nama_sekolah = 'SD' ");
		$no=1;
		while ($ambil = mysqli_fetch_array($sql)) {
			$id_sekolah = $ambil['id_sekolah'];
			$nama_sekolah = $ambil['nama_sekolah'];
	?>	
	<div class="col-sm-4 col-md-3 mb-4">
		<div class="mx-auto box-img">
		    <div class="card-body">
		       <p class="btn btn-danger"><?= $nama_sekolah ?><?=$no++;  ?></p>		      
		    </div>
			<a href="include/daftar/form.php?id=<?= $id_sekolah; ?>">
		  		<img src="img/sd.png" class="card-img-top">
			</a>
		</div>
	</div>
	<?php } ?>
</div>