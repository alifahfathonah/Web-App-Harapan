<?php 
	session_start();
	include 'include/config.php';

	if ($_POST) {
		$user = mysqli_real_escape_string($db, $_POST['user']);
		$pass = mysqli_real_escape_string($db, $_POST['pass']);

		$sql = mysqli_query($db, "SELECT * FROM user WHERE BINARY username='$user' AND password='$pass' ");

		$cek = mysqli_num_rows($sql);

		if ($cek > 0) {
			$ambil = mysqli_fetch_array($sql);
			$id_user = $ambil['id_user'];
			$username = $ambil['username'];
			$password = $ambil['password'];
			$status_user = $ambil['status_user'];

			$_SESSION['id_user'] = $id_user;
			$_SESSION['username'] = $username;
			$_SESSION['status_user'] = $status_user;

			if ($status_user == "admin") {
				echo "
					<script>
						window.location.href='home.php'
					</script>
				";
			}
			elseif ($status_user == "harapan1") {
				echo "
					<script>
						window.location.href='harapan1/home.php'
					</script>
				";
			}
			elseif ($status_user == "harapan2") {
				echo "
					<script>
						window.location.href='harapan2/home.php'
					</script>
				";
			}
			elseif ($status_user == "harapan3") {
				echo "
					<script>
						window.location.href='harapan3/home.php'
					</script>
				";
			}
		} else {
			echo " 
				<script>
					window.location.href='index.php'
				</script>
			";
		}

	}