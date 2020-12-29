<?php 
include '../conf/config.php';
include '../act/secure-page.php';

if (isset($_POST['username'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$tingkat = $_POST['tingkat'];
	$sql = mysqli_query($conn, "INSERT INTO `user_login`(`username`, `password`, `tingkat`) VALUES ('$username','$password','$tingkat')");
	if ($sql) {
		echo '	<script type="text/javascript">
 					alert("Tambah User Berhasil");
				</script>
				<meta http-equiv="refresh" content="1; url='.$base_url.'/login/list-user">';
	} else {
		echo '	<script type="text/javascript">
 					alert("Tambah User Gagal");
				</script>
				<meta http-equiv="refresh" content="1; url='.$base_url.'/login/list-user">
				';

	}
	
}
 ?>