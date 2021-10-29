<?php
include("DBModel.php");
$a=1;
$id=0;
$db=new DemoDBCode;
	if(isset($_POST["dayNameText"]) && isset($_POST["timeNameText"]))
	{
		$day=$_POST["dayNameText"];
		$time=$_POST["timeNameText"];
		
		$rows=$db->getDayTimeDetails_id($day,$time);
		if($r=mysqli_fetch_array($rows))
		{
			$id=$r["DayAndTime_ID"];
		}
		else
		{
			header("Location:manage-day-wise-meal.php?msg=NoResultFound");
		}
		
	}
	else
	{
		header("Location:manage-day-wise-meal.php?msg=DayTimeError");
	}
	
	while(isset($_POST["$a"]))
	{
		if($_POST["checkbox".$a]=="on")
		{
			$Mid=$_POST["$a"];
			$r1=$db->insertDayWiseMeal_Details($id, $Mid);
			if($r1>0)
			{
				header("Location:manage-day-wise-meal.php?msg=suc");
			}
			else
			{
				header("Location:manage-day-wise-meal.php?msg=fail");
			}
		}
		else
		{
			
		}
		$a=$a+1;
	}
?>