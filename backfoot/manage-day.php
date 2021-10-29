<?php 
$title="Admin | Manage day";
include("header.php"); ?>

			<div class="outter-wp">
					<!--/sub-heard-part-->
						 <div class="sub-heard-part">				   
							</div>	
							
							
								<div style="height:500px; padding:50px;height:200px ">
									<a href="manage-day.php?day=Monday" style="font-size:20px; text-decoration:none; border:solid #898989 2px; <?php if($_GET["day"]=="Monday"){echo"background-color:#3aacec; color:white;";}else{echo"color:#3aacec;";}?>padding:12px; margin-left:0px; border-radius:10px;">Monday</a>
									<a href="manage-day.php?day=Tuesday" style="font-size:20px; text-decoration:none; border:solid #898989 2px; <?php if($_GET["day"]=="Tuesday"){echo"background-color:#3aacec; color:white;";}else{echo"color:#3aacec;";}?> padding:12px; margin:10px; border-radius:10px;">Tuesday</a>
									<a href="manage-day.php?day=Wednesday" style="font-size:20px; text-decoration:none; border:solid #898989 2px; <?php if($_GET["day"]=="Wednesday"){echo"background-color:#3aacec; color:white;";}else{echo"color:#3aacec;";}?> padding:12px; margin:10px; border-radius:10px;">Wednesday</a>
									<a href="manage-day.php?day=Thursday" style="font-size:20px; text-decoration:none; border:solid #898989 2px; <?php if($_GET["day"]=="Thursday"){echo"background-color:#3aacec; color:white;";}else{echo"color:#3aacec;";}?> padding:12px; margin:10px; border-radius:10px;">Thursday</a>
									<a href="manage-day.php?day=Friday" style="font-size:20px; text-decoration:none; border:solid #898989 2px; <?php if($_GET["day"]=="Friday"){echo"background-color:#3aacec; color:white;";}else{echo"color:#3aacec;";}?> padding:12px; margin:10px; border-radius:10px;">Friday</a>
									<a href="manage-day.php?day=Saturday" style="font-size:20px; text-decoration:none; border:solid #898989 2px; <?php if($_GET["day"]=="Saturday"){echo"background-color:#3aacec; color:white;";}else{echo"color:#3aacec;";}?> padding:12px; margin:10px; border-radius:10px;">Saturday</a>
									<a href="manage-day.php?day=Sunday" style="font-size:20px; text-decoration:none; border:solid #898989 2px; <?php if($_GET["day"]=="Sunday"){echo"background-color:#3aacec; color:white;";}else{echo"color:#3aacec;";}?> padding:12px; margin:10px; border-radius:10px;">Sunday</a>
								</div>

		<?php	
		
			include("DBModel.php");
			$db=new DemoDBCode;
		if(isset($_GET["day"]))
		{?>
			<div style="padding-left:10px; margin-top:0px;">
			<div style="width:400px;  float:left; text-align:center; ">
			<h2>Breakfast</h2>
				<table class="table table-bordered">
					<thead>
					
						<th style="text-align:center; font-size:15px; padding:10px; font-size:20px;">Meals</th>
						<th style="text-align:center; font-size:15px; padding:10px; font-size:20px;">select</th>
					</thead>
					<tbody>
						<?php
							$rdti=$db->getDayTimeId($_GET["day"],"Breakfast");
							$rdti1=mysqli_fetch_array($rdti);
							$rdwd=$db->getDayWiseMealDetails($rdti1["DayAndTime_ID"]);
							$id=1;
							
							while($rdwd1=mysqli_fetch_array($rdwd))
							{
								$a=$rdwd1["Meal_ID"];
								$rows=$db->getMealDetails($a);
								$r=mysqli_fetch_array($rows);
								echo"<tr>";
								echo"<td >";
								echo"<div><img src='".$r["ImagePath"]."' style='margin-bottom:20px; height:70px; width:100px;' /> <br> <span style='font-size:15px;'>".$r["Name"]."</span> <br><span style='font-size:15px;'>Rs.".$r["Price"]."/-</span> </div>";
								echo"</td>";
								echo"<td><a href='manage-day-controller.php?id=".$rdwd1["DM_ID"]."' style='font-size:20px;'>Delete</a></td>";
								echo"</tr>";
								$id=$id+1;
							}
						?>
					</tbody>
				</table>
			
			</div>
			<div style="width:400px; float:left; margin-left:5px; text-align:center;">
			<h2>Lunch</h2>
				<table class="table table-bordered">
					<thead>
						<th style="text-align:center; font-size:15px; padding:10px; font-size:20px;">Meals</th>
						<th style="text-align:center; font-size:15px; padding:10px; font-size:20px;">select</th>
					</thead>
					<tbody>
						<?php
							$rdti=$db->getDayTimeId($_GET["day"],"lunch");
							$rdti1=mysqli_fetch_array($rdti);
							$rdwd=$db->getDayWiseMealDetails($rdti1["DayAndTime_ID"]);
							$id=1;
							while($rdwd1=mysqli_fetch_array($rdwd))
							{
								
								$a=$rdwd1["Meal_ID"];
								$rows=$db->getMealDetails($a);
								$r=mysqli_fetch_array($rows);
								echo"<tr>";
								echo"<td >";
								echo"<div><img src='".$r["ImagePath"]."' style='margin-bottom:20px; height:70px; width:100px;'/> <br> <span style='font-size:15px;  '>".$r["Name"]."</span> <br><span style='font-size:15px;'>Rs.".$r["Price"]."/-</span> </div>";
								echo"</td>";
								echo"<td><a href='manage-day-controller.php?id=".$rdwd1["DM_ID"]."' style='font-size:20px;'>Delete</a></td>";
								echo"</tr>";
								$id=$id+1;
							}
						?>
					</tbody>
				</table>
			
			</div>
			<div style="width:400px;float:left; margin-left:5px; text-align:center;">
			<h2> Dinner</h2>
				<table class="table table-bordered">
					<thead>
						<th style="text-align:center; font-size:15px; padding:10px; font-size:20px;">Meals</th>
						<th style="text-align:center; font-size:15px; padding:10px; font-size:20px;">select</th>
					</thead>
					<tbody>
						<?php
							$rdti=$db->getDayTimeId($_GET["day"],"dinner");
							$rdti1=mysqli_fetch_array($rdti);
							$rdwd=$db->getDayWiseMealDetails($rdti1["DayAndTime_ID"]);
							$id=1;
							while($rdwd1=mysqli_fetch_array($rdwd))
							{
								$a=$rdwd1["Meal_ID"];
								$rows=$db->getMealDetails($a);
								$r=mysqli_fetch_array($rows);
								echo"<tr>";
								echo"<td >";
								echo"<div><img src='".$r["ImagePath"]."' style='margin-bottom:20px; height:70px; width:100px;'/> <br> <span style='font-size:15px;'>".$r["Name"]."</span> <br><span style='font-size:15px;'>Rs.".$r["Price"]."/-</span> </div>";
								echo"</td>";
								echo"<td ><a href='manage-day-controller.php?id=".$rdwd1["DM_ID"]."' style='font-size:20px;'>Delete</a></td>";
								echo"</tr>";
								$id=$id+1;
							}
						?>
					</tbody>
				</table>
			</div>
			<div style="clear:both;"></div>
			</div>
			<?php
		}
	?>
	
 <!--footer section start-->
										<footer>
										   <p>&copy 2017 BEST FOODIES . All Rights Reserved</p>
										</footer>
									<!--footer section end-->
							
							</div>
				<!--//content-inner-->
<?php include("footer.php"); ?>