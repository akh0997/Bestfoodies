<?php
include("DBModel.php");
if(isset($_GET["op"]))
{
	$db=new DemoDBCode;
	$check=$_GET["op"];
	if($check==add)
	{
		if(isset($_POST["Nameid"], $_POST["Quantityid"],$_POST["Unitid"],$_POST["Priceid"],$_POST["Discriptionid"],$_FILES["Imageid"]))
		{
			$name=$_POST["Nameid"];
			$qty=$_POST["Quantityid"];
			$unit=$_POST["Unitid"];
			$price=$_POST["Priceid"];
			$discr=$_POST["Discriptionid"];		
			$fileName=$_FILES["Imageid"]["name"];
			$temp=$_FILES["Imageid"]["tmp_name"];
			$path="images/".$fileName;
			move_uploaded_file($temp, $path);
		
			$r=$db->getmanage_meal($name,$qty,$unit,$price,$path,$discr);
			if($r==0)
			{
				header("Location:manage-meal.php?msg=invalid");
			}
			else
			{
				header("Location:manage-meal.php?msg=suc");
			}
		}
		else
		{
			header("Location:manage-meal.php");
		}
	}
	else if($check=="del")
	{
		$id=$_GET["id"];
		$r=$db->deleteMealDetails($id);
		if($r>0)
		{
			header("Location:manage-meal.php?msg=delsuc");
		}
		else
		{
			header("Location:manage-meal.php?msg=delfail");
		}
	}
	else if($check=="update")
	{
			$id=$_POST["Mid"];
			$name=$_POST["Nameid"];
			$qty=$_POST["Quantityid"];
			$unit=$_POST["Unitid"];
			$price=$_POST["Priceid"];
			$discr=$_POST["Discriptionid"];	
			
	if($_FILES["Imageid"]["name"]!="")
			{
					
				$fileName=$_FILES["Imageid"]["name"];
				$temp=$_FILES["Imageid"]["tmp_name"];
				$path="images/".$fileName;
				move_uploaded_file($temp, $path);
			}
			else
			{
				$path=$_POST["imgid"];
			}
			
			$r=$db->updateManage_meal($id,$name,$qty,$unit,$price,$path,$discr);
			if($r==0)
			{
				header("Location:manage-meal.php?msg=invalid");
			}
			else
			{
				header("Location:manage-meal.php?msg=suc");
			}
	}
}
?>