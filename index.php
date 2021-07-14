<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FORM PENDAFTARAN</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php 
	require_once 'include/header.php';
	require_once 'include/slider.php';
?>

<!-- CONTENT -->
<div class="container mt-5 content">
	<div class="row">
	<?php 

        if ($_GET) {
            $page=$_GET['page'];
            include 'include/'.$page;
        } else {
            include 'include/content.php';
        }

	?>
	</div>
</div>

<div class="container">
	<p class="text-center">2020 All Reserved By Harapan Medan</p>
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>