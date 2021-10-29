<?php
include("DBModel.php");
if(isset($_GET["op"]))
{	
	$db=new DemoDBCode;
	$check=$_GET["op"];
	if($check=="add")
	{
		if(isset($_POST["Banner"])&& isset($_FILES["Image"]))
		{
			$banner=$_POST["Banner"];

			$name=$_FILES["Image"]["name"];
			$temp=$_FILES["Image"]["tmp_name"];
			$path="images/".$name;
			move_uploaded_file($temp,$path);


			$r=$db->insertBanner($banner, $path);
			if($r>0)
			{
				header("Location:banner.php?msg=suc");
			}
			else
			{
				header("Location:banner.php?msg=fail");
			}
		}
		else
		{
			header("Location:banner.php");
		}
	}
	else if($check=="del")
	{
		$id=$_GET["id"];
		$r=$db->deleteBannerDetails($id);
		if($r>0)
		{
			header("Location:banner.php?msg=delsuc");
		}
		else
		{
			header("Location:banner.php?msg=delfail");
		}
	}
	else if($check=="update")
	{
			$id=$_POST["Bid"];
			$banner=$_POST["Banner"];
			
	if($_FILES["Image"]["name"]!="")
			{
					
				$name=$_FILES["Image"]["name"];
				$temp=$_FILES["Image"]["tmp_name"];
				$path="images/".$name;
				move_uploaded_file($temp, $path);
			}
			else
			{
				$path=$_POST["imgid"];
			}
			
			$r=$db->updateBannerDetails($id,$banner,$path);
			if($r==0)
			{
				header("Location:banner.php?msg=invalid");
			}
			else
			{
				header("Location:banner.php?msg=suc");
			}

	}
}
?>