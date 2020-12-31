<?php 
include '../conf/config.php';
include '../act/secure-page.php';

			// print_r($_POST);
if($_POST){
			$nomor = $_POST['no_surat'];
			$perihal = $_POST['perihal'];
			$tgl_diterima = $_POST['tgl_diterima'];
			$jenis_surat = $_POST['jenis_surat'];
			// $jenis_surat = 'Keluar';
			$ekstensi_diperbolehkan	= array('pdf','doc');
			$nama = $_FILES['file']['name'];
			$namafile = base64_encode(date('d-m-Y')).'($)'.$nama;
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	
 
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, 'file/'.$namafile);
					$query = mysqli_query($conn, "INSERT INTO `data_surat`(`no_surat`, `perihal`, `file_surat`, `tgl_diterima`, `jenis_surat`) VALUES ('$nomor','$perihal','$namafile','$tgl_diterima','$jenis_surat')");
					if($query){
						echo '<script type="text/javascript">alert("Upload Data Berhasil");</script>
							<meta http-equiv="refresh" content="1; url='.$base_url.'/login/laporan-surat">';
					}else{
						echo '<script type="text/javascript">alert("Upload Data Gagal");</script>
							<meta http-equiv="refresh" content="1; url='.$base_url.'/login/laporan-surat">';
					}
				}else{
					echo '<script type="text/javascript">alert("Ukuran File Terlalu Besar");</script>
						<meta http-equiv="refresh" content="1; url='.$base_url.'/login/laporan-surat">';
				}
			}else{
				echo '<script type="text/javascript">alert("File Tidak Diperbolehkan !!!");</script>
					<meta http-equiv="refresh" content="1; url='.$base_url.'/login/laporan-surat">';
			}
		}
?>