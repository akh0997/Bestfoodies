<?php
	session_start();
	
	$_SESSION["adminSess"]="";
	session_destroy();
	header("Location:index.php");
?>