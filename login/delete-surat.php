<?php 
include '../conf/config.php';
include '../act/secure-page.php';

if (isset($_GET['surat'])) {
	$id = base64_decode($_GET['surat']);
	$sql = mysqli_query($conn, "DELETE FROM `data_surat` WHERE id_surat='$id'");
	if ($sql) {
		echo '	<script type="text/javascript">
 					alert("Hapus Surat Berhasil");
				</script>
				<meta http-equiv="refresh" content="1; url='.$base_url.'/login/laporan-surat">';
	} else {
		echo '	<script type="text/javascript">
 					alert("Hapus Surat Gagal");
				</script>
				<meta http-equiv="refresh" content="1; url='.$base_url.'/login/laporan-surat">';
	}
}
 ?>