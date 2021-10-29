<?php
class DemoDBCode
{
	var $con;
	function __construct()
	{
		$this->con=mysqli_connect("localhost", "root","", "BestFoodiesdb");
		
	}
	function insertDayTimeDetails($day, $time)
	{
		$i=mysqli_query($this->con,"insert into dayandtimedetails(Day_Name, Time ) values('$day', '$time')");
		return $i;	
	}
	function getDayTimeDetails($id)
	{
		$data=mysqli_query($this->con,"select * from dayandtimedetails where DayAndTime_ID='$id'");
		return $data;	
	}
	
	function getmanage_meal($name,$qty,$unit,$price,$image,$discr)
	{
		$r=mysqli_query($this->con,"insert into mealDetails(Name, Quantity ,Unit ,ImagePath, Description, Price) values('$name',$qty,'$unit','$image','$discr',$price)");
		return $r;
	}
	function getMealDetails($id)
	{
		$query="select * from mealDetails where display='1'";
		if($id!=0)
		{
			$query=$query." and mealID='$id'";
		}
		$data=mysqli_query($this->con,$query);
		return $data;	
	}
	function checkAdminLogin($user, $pass)
	{
		$rows=mysqli_query($this->con,"select * from adminDetails where userName='$user' and password='$pass'");
		if($row=mysqli_fetch_array($rows))
		{
			return $row;
		}
		else
		{
			return 0;
		}
	}
	function updateManage_meal($id,$name,$qty,$unit,$price,$path,$discr)
	{
		
		$r=mysqli_query($this->con,"update mealDetails set Name='$name', Quantity='$qty' ,Unit='$unit' ,ImagePath='$path', Description='$discr', Price='$price' where mealID='$id'");
		return $r;
	}
	function deleteMealDetails($id)
	{
		$r=mysqli_query($this->con,"delete from daywisemeal_details where Meal_ID=$id");
		$r=mysqli_query($this->con,"update mealDetails set display='0' where mealID=$id");
		return $r;
	}
	function UpdatePassword($user,$newpass)
	{
		$r=mysqli_query($this->con,"update admindetails set password='$newpass' where username='$user'");
		return $r;
	}
	
	function getDayTimeDetails_id($day,$time)
	{
		$data=mysqli_query($this->con,"select * from dayandtimedetails where Day_Name='$day' and Time='$time'");
		return $data;	
	}
	function insertDayWiseMeal_Details($id, $Mid)
	{
		$i=mysqli_query($this->con,"insert into daywisemeal_details(Id,Meal_ID) values('$id','$Mid')");
		return $i;	
	}
	


	function insertBanner($banner, $path)
	{

		$i=mysqli_query($this->con,"insert into banner_details(banner,ImagePath) values('$banner', '$path')");
		return $i;		
	}

	function getBannerDetails($id)
	{
		$query="select * from banner_details";
		if($id!=0)
		{
			$query=$query." where bid='$id'";
		}
		$data=mysqli_query($this->con,$query);
		return $data;
	}
	function deleteBannerDetails($id)
	{
		$r=mysqli_query($this->con,"delete from banner_details where bid=$id");
		return $r;
	}
	function updateBannerDetails($id,$banner,$Image)
	{
		$r=mysqli_query($this->con,"update banner_details set banner='$banner' ,ImagePath='$Image' where bid='$id'");
		return $r;
	}

	
	function checkUserLogin($user, $pass)
	{
		$rows=mysqli_query($this->con,"select * from user_Details where Emai_Id='$user' and Password='$pass'",$this->con);
		if($row=mysqli_fetch_array($rows))
		{
			return $row;
		}
		else
		{
			return 0;
		}
	}
	function UserDetails($id)
	{
		$query="select * from user_details ";
		if($id!=0)
		{
			$query=$query." where User_Id='$id'";
		}
		$data=mysqli_query($this->con,$query);
		return $data;	
	}
	function getUserImage($user)
	{
		$rows=mysqli_query($this->con,"select * from user_image where Email_Id = '$user'");
		if($row=mysqli_fetch_array($rows))
		{
			return $row;
		}
		else
		{
			return 0;
		}
	}
	function getDayTimeId($day,$time)
	{
		$data=mysqli_query($this->con,"select * from dayandtimedetails where Day_Name='$day' and Time='$time'");
		return $data;	
	}
	
	function getDayWiseMealDetails($id)
	{
		$data=mysqli_query($this->con,"select * from daywisemeal_details where ID='$id'");
		return $data;	
	}
	
	function delDMmealDetails($id)
	{
		
		$r=mysqli_query($this->con,"Delete from daywisemeal_details where DM_ID='$id'");
		return $r;	
	}
	function getBookingDetails($id)
	{
		$query="select * from booking_details";
		if($id!=0)
		{
			$query=$query." where Booking_Id='$id'";
		}
		$data=mysqli_query($this->con,$query);
		return $data;
	}	
	function getDaywiseBooking($id)
	{
		$data=mysqli_query($this->con,"select * from day_wise_booking where Booking_Id='$id'");
		return $data;	
	}
	function getFeedbackDetails($id)
	{	
		$query="select * from feedback_details";
		if($id!=0)
		{
			$query=$query." where F_Id='$id'";
		}
		$data=mysqli_query($this->con,$query);
		return $data;
		
	}
	
	
	function UserCount()
	{
		$data=mysqli_query($this->con,"select count(*) from user_Details");
		return $data;
	}
	
	function BookingCount()
	{
		$data=mysqli_query($this->con,"select count(*) from booking_details");
		return $data;
	}
	
	function FeedbackCount()
	{
		$data=mysqli_query($this->con,"select count(*) from feedback_details");
		return $data;
	}
	function mealCount()
	{
		$data=mysqli_query($this->con,"select count(*) from mealDetails");
		return $data;
	}
}
?>