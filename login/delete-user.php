<?php 
include '../conf/config.php';
include '../act/secure-page.php';
if (isset($_GET['id'])) {
	$id = base64_decode($_GET['id']);
	$sql = mysqli_query($conn, "DELETE FROM `user_login` WHERE id_user='$id'");
	if ($sql) {
		echo '	<script type="text/javascript">
 					alert("Hapus User Berhasil");
				</script>
				<meta http-equiv="refresh" content="1; url='.$base_url.'/login/list-user">';
	} else {
		echo '	<script type="text/javascript">
 					alert("Hapus User Gagal");
				</script>
				<meta http-equiv="refresh" content="1; url='.$base_url.'/login/list-user">';
	}
}
 ?>
