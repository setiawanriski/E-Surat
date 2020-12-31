<?php 
include '../conf/config.php';
include '../act/secure-page.php';

if (isset($_POST['kata_sandi1'])) {
	// print_r($_POST);
	$sandi1 = $_POST['kata_sandi1'];
	$sandi2 = $_POST['kata_sandi2'];
	if ($sandi1 == $sandi2) {
		$password = md5($sandi1);
		$nama = base64_decode($_SESSION['username']);
		$sql = mysqli_query($conn,"UPDATE `user_login` SET `password`='$password' WHERE username='$nama'");
		if ($sql) {
			echo '	<script type="text/javascript">
 					alert("Ganti Kata Sandi Berhasil");
				</script>
				<meta http-equiv="refresh" content="1; url='.$base_url.'/login/dashboard">';
		} else {
			echo '	<script type="text/javascript">
 					alert("Ganti Kata Sandi Gagal");
				</script>
				<meta http-equiv="refresh" content="1; url='.$base_url.'/login/dashboard">';
		}
	} else {
		echo '	<script type="text/javascript">
 					alert("Konfirmasi Kata sandi salah !!");
				</script>
				<meta http-equiv="refresh" content="1; url='.$base_url.'/login/dashboard">';
	}

}
 ?>