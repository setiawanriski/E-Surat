<?php 
include '../act/secure-page.php';
include '../conf/config.php';
session_destroy();
session_unset();

echo '  <script type="text/javascript">
             alert("Logout Berhasil");
        </script>
        <meta http-equiv="refresh" content="1; url='.$base_url.'/">';
 ?>