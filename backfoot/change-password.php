<?php
include("DBModel.php");
session_start();
if(isset($_POST["CurrentPass"] , $_POST["NewPass"] , $_POST["ConfirmPass"] )  )
{
	$db=new DemoDBCode;
	$user=$_SESSION["adminSess"];
	$pass=$_POST["CurrentPass"];
	$r=$db->checkAdminLogin($user, $pass);
	echo $user;
	echo $pass;
	if($r==0)
	{
		header("Location:password.php?msg=invalid");
	}		
	else
	{
		if($_POST["NewPass"] == $_POST["ConfirmPass"])
		{
			$newpass=$_POST["NewPass"];
			$r=$db->UpdatePassword($user,$newpass);
			if($r==0)
			{
				header("Location:password.php?msg=failconfirmation");
			}
			else
			{
				header("Location:password.php?msg=suc");
			}
		}
		else
		{
			header("Location:password.php?msg=failconfirmation");
			
		}
	}

}



?>