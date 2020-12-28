<?php 
session_start(); 
if (empty($_SESSION)) {
  echo '<script type="text/javascript">alert("Silahkan Login Terlebih Dahulu")</script><script type="text/javascript">window.location.href = "./";
</script>';
}
?>