<?php
include("DBModel.php");

	if(isset($_POST["userNameText"]) && isset($_POST["passwordText"]))
	{
		$user=$_POST["userNameText"];
		$pass=$_POST["passwordText"];
		
		$db=new DemoDBCode;
		$r=$db->checkAdminLogin($user, $pass);
		if($r==0)
		{
			header("Location:index.php?msg=invalid");
		}
		else
		{
			session_start();
			$_SESSION["adminSess"]=$user;
			header("Location:home.php");
		}
	}
	else
	{
		header("Location:index.php");
	}
?>