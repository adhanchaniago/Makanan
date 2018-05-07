<?php 
$koneksi = mysqli_connect('localhost','root','','hewan');
	if (isset($_POST['sumbit'])) {
		$user = $_POST['username'];
		$pass = $_POST['password'];

		$query = "INSERT INTO login VALUES ('', 'username', 'password')";

		$sql = mysqli_query($koneksi, $query);

		if (mysqli_query($koneksi)) {
			echo "
			<script>
			alert('Yesssss Dadi')
			document.location.href = 'index.php';
			</script>";
		}else {echo"
			<script>
			alert('Ra daadi modar')
			document.location.href = 'index.php';
			</script>";
		}
	}



?>