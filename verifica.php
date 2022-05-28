<?php
  ob_start();
  session_start();

  if(isset($_SESSION["username"])){
	echo "<script>window.location='index.php';</script>";
	exit;
  }
?>