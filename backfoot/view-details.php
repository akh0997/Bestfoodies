<?php include("header.php"); ?>


<div class="outter-wp">
					<!--/sub-heard-part-->
						 <div class="sub-heard-part">				   
							</div>	
								<!--/sub-heard-part-->	
									<!--/forms-->
										<div class="forms-main">
										<div>
											<table class="table table-bordered">
													<thead>
														<tr style="position:relative;">
														<th style='padding-left:50px;'>Meal </th>
														<th style='padding-left:50px;'>Name</th>
														<th style='padding-left:50px;'>Day </th>
														<th style='padding-left:50px;'>Timing</th>
														<th style='padding-left:50px;'>Price</th>
														
														</tr>
													</thead>
		
													<tbody>
		
													<?php
													include("DBModel.php");
													$db=new DemoDBCode;
													$id=$_GET["id"];
													$rows=$db->getDaywiseBooking($id);
													while($r=mysqli_fetch_array($rows))
													{
															$dtid=$r["DayTime_Id"];
															$a=$db->getDayTimeDetails($dtid);
															$ar=mysqli_fetch_array($a);
															
															$mid=$r["Meal_Id"];
															$b=$db->getMealDetails($mid);
															$br=mysqli_fetch_array($b);
															echo"<tr>";
															echo"<td><img src='".$br["ImagePath"]."' style='height:100px; width:200px;'></td>";
															echo"<td style='color:black;'>".$br["Name"]."</td>";
															echo"<td style='color:black;'>".$ar["Day_Name"]."</td>";
															echo"<td style='color:black;'>".$ar["Time"]."</td>";
															echo"<td style='color:black;'>Rs.".$br["Price"]."/-</td>";
															echo"</tr>";
													}
													
													
													?>
		
													</tbody>
		
												</table>
											<div style="padding:30px; margin-left:500px;">
												<a href="manage-booking.php" style="font-size:30px;background-color:#3aacec;color:white;padding:10px; border-radius:10px;">Back </a>
												</div>	
										</div>
											 <!--footer section start-->
										<footer>
										   <p>&copy 2017 BEST FOODIES . All Rights Reserved</p>
										</footer>
									<!--footer section end-->
								</div>
							</div>
				<!--//content-inner-->
<?php include("footer.php"); ?>