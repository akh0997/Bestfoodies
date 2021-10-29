<?php
include("DBModel.php");

	if(isset($_GET["id"]))
	{
	
		$id=$_GET["id"];
		$db=new DemoDBCode;
		$r=$db->delDMmealDetails($id);
		if($r>0)
		{
			header("Location:manage-day.php?msg=suc");
		}
		else
		{
			header("Location:manage-day.php?msg=fail");
		}
	}
	else
	{
		header("Location:manage-day.php");
	}
?>