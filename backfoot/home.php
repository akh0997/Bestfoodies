<?php 
$title="Admin | Home";
include("header.php"); ?>


	<div class="outter-wp">
					<!--/sub-heard-part-->
						 <div class="sub-heard-part">				   
							</div>	
								<!--/sub-heard-part-->	
									<!--/forms-->
										<div class="forms-main">
										<div style="padding:100px;">
										<div style="width:400px; height:200px; float:left;margin-left:80px; padding:40px;text-align:center;font-size:40px; color:white;background-color:orange;">
										<?php
											include("DBModel.php");
											$db=new DemoDBCode;
											$rows=$db->UserCount();
											$r=mysqli_fetch_array($rows);
											echo $r["count(*)"];
											
										?>
										</br>Total Customer
										</div>
										
										<div style="width:400px; height:200px; float:right;margin-right:80px;  padding:40px;text-align:center;font-size:40px; color:white;background-color:green;">
										<?php
											
											$rows=$db->BookingCount();
											$r=mysqli_fetch_array($rows);
											echo $r["count(*)"];
											
										?>
										</br>Total Order
										</div>
										
										<div style="width:400px; height:200px;float:left;margin-left:80px; margin-top:30px; padding:40px;text-align:center;font-size:40px; color:white;background-color:#c00c00;">
										<?php
											
											$rows=$db->mealCount();
											$r=mysqli_fetch_array($rows);
											echo $r["count(*)"];
											
										?>
										</br>Total Meals
										</div>
										
										<div style="width:400px; height:200px; float:right;margin-top:30px; margin-right:80px; padding:40px;text-align:center;font-size:40px; color:white;background-color:blue;">
										<?php
											
											$rows=$db->FeedbackCount();
											$r=mysqli_fetch_array($rows);
											echo $r["count(*)"];
											
										?>
										</br>Total Feedback
										</div>
										<div style=" clear:both;"></div>
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