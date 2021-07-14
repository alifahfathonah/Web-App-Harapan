<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Detail Artikel</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<!-- HEADER -->
<div class="container-fluid header">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<img src="../img/logo.png" class="rounded float-left" style="width: 100px; padding: 10px 0px;">
			</div>
			<div class="col-md-3 mt-4">
				<nav class="navbar navbar-expand-lg navbar-light">
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto my-2 my-lg-0">
				      <li class="nav-item active">
				        <a class="nav-link" href="../index.php">Home <span class="sr-only"></span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="artikel.php">Berita</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Contact</a>
				      </li>
				    </ul>
				  </div>
				</nav>
			</div>
		</div>
	</div>
</div>

<!-- CONTENT -->
<div class="container mt-5 content">
	<div class="row">
		<!-- <h2>Berita Terbaru</h2> -->
		<div class="card-deck mt-3">	
        <?php
          include 'config.php';
          $id = $_GET['id'];
          $sql = "SELECT * FROM artikel WHERE id_artikel='$id'";
          $query = mysqli_query($db, $sql);
          $no = 1;
          while ($ambil = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            $id = $ambil['id_artikel'];
            $judul = $ambil['judul'];
            $isi_artikel = $ambil['isi_artikel'];
            $gambar = $ambil['gambar'];
            $tgl = $ambil['tgl'];
        ?>
		<div class="col-md-12 mb-3">
		  <img class="card-img-top" src="../img/artikel_img/<?= $gambar; ?>" alt="Card image cap" style="width: 150px;">
		  <div class="card-body">
		    <h5 class="card-title text-capitalize"><?= $judul ?></h5>
		    <p class="card-text">
		    	<?= $isi_artikel; ?>
		    </p>
			<!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
		  </div>
		</div>
		 <?php } ?>
		</div>
	</div>
</div>

<div class="container">
	<p class="text-center">2020 All Reserved By Harapan Medan</p>
</div>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>