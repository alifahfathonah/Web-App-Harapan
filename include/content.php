 <div class="col-sm-4 col-md-3 mb-4">
    <div class="mx-auto box-img">
      	<div class="card-body">
        	<p class="btn btn-info">TK</p>		      
        </div>
    	<a href="?page=tk.php">
      		<img src="img/tk_harapan1.jpg" class="card-img-top">
    	</a>
    </div>
</div>
<div class="col-sm-4 col-md-3 mb-4">
	<div class="mx-auto box-img">
	    <div class="card-body">
	       <p class="btn btn-danger">SD</p>		      
	    </div>
		<a href="?page=sd.php">
	  		<img src="img/sd_harapan1.jpg" class="card-img-top">
		</a>
	</div>
</div>
<div class="col-sm-4 col-md-3 mb-4">
	<div class="mx-auto box-img">
	    <div class="card-body">
	       <p class="btn btn-primary">SMP</p>
	    </div>
		<a href="?page=smp.php">
	  		<img src="img/smp_harapan1.jpg" class="card-img-top">
		</a>
	</div>
</div>
<div class="col-sm-4 col-md-3 mb-4">
	<div class="mx-auto box-img">
	  	<div class="card-body">
	    	<p class="btn btn-custom">SMA</p>
	  	</div>
		<a href="?page=sma.php">
	  		<img src="img/sma_harapan1.jpg" class="card-img-top">
		</a>
	</div>
</div>

<div class="container mt-5 content">
	<div class="row">
		<h2>Berita Terbaru</h2>
		<div class="card-deck mt-3">	
        <?php
          include 'include/config.php';
          $sql = "SELECT * FROM artikel";
          $query = mysqli_query($db, $sql);
          $no = 1;
          while ($ambil = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            $id = $ambil['id_artikel'];
            $judul = $ambil['judul'];
            $isi_artikel = $ambil['isi_artikel'];
            $gambar = $ambil['gambar'];
            $tgl = $ambil['tgl'];
        ?>
		  <div class="col-md-4">
		    <img class="card-img-top" src="img/artikel_img/<?= $gambar ?>" alt="Card image cap" style="width: 150px;">
		    <div class="card-body">
		      <h5 class="card-title"><?= $judul; ?></h5>
		      <p class="card-text">
				<?= substr($isi_artikel,0,250); ?>
		      </p>
		      <a href="include/detail_art.php?id=<?= $id;?>" class="btn btn-primary float-right mb-2">Readmore</a>
		      <p class="card-text" style="clear: both;"><small class="text-muted">Last updated <?= $tgl; ?> ago</small></p>
		    </div>
		  </div>
		 <?php } ?>
		</div>
	</div>
</div>