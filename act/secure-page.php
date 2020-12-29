<?php 
session_start();
include '../conf/config.php'; 
if (empty($_SESSION)) {
  echo '<script type="text/javascript">alert("Silahkan Login Terlebih Dahulu")</script><script type="text/javascript">window.location.href = "'.$base_url.'";
</script>';
}
?>