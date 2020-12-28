<?php 
if (isset($_POST['username'])) {
	$username = addslashes($_POST['username']);
	$password = addslashes(md5($_POST['password']));
	
	$data = mysqli_query($conn,"SELECT * from user_login where username='$username' and password='$password'");
	$cek = mysqli_num_rows($data);
	if ($cek > 0) {
		$sql = mysqli_query($conn,"SELECT * from user_login where username='$username'");
		$data = mysqli_fetch_assoc($sql);

		$_SESSION['username'] = base64_encode($username);
		$_SESSION['tingkat'] = base64_encode($data['tingkat']);
		$print = '<div class="card-header text-center" style="background-color: blue;color: #fff"><span class="splash-description">Login Berhasil, redirect ke dashboard</span></div><meta http-equiv="refresh" content="1; url='.$base_url.'/login/dashboard">';
	} else {
		$print = '<div class="card-header text-center" style="background-color: red;color: #fff"><span class="splash-description">Login Gagal !</span></div>';
	}
}
 ?>