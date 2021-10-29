<?php
$title="Admin | Manage Booking";
 include("header.php"); ?>


<div class="outter-wp">
					<!--/sub-heard-part-->
						 <div class="sub-heard-part">				   
							</div>	
								<!--/sub-heard-part-->	
									<!--/forms-->
										<div class="forms-main">
											<div>
											<div class="tables">
												<table class="table table-bordered">
													<thead>
														<tr style="position:relative;">
														<th style='padding-left:50px;'>Booking ID </th>
														<th style='padding-left:50px;'>User ID</th>
														<th style='padding-left:50px;'>Order Date </th>
														<th style='padding-left:50px;'>Service Duration </th>
														<th style='padding-left:50px;'>Total Amount</th>
														<th></th>
														</tr>
													</thead>
		
													<tbody>
		
													<?php
													include("DBModel.php");
													$db=new DemoDBCode;
													$rows=$db->getBookingDetails(0);
													
													while($r=mysqli_fetch_array($rows))
													{
															echo"<tr>";
															echo"<td style='color:black;'>".$r["Booking_Id"]."</td>";
															echo"<td style='color:black;'>".$r["User_ID"]."</td>";
															echo"<td style='color:black;'>".$r["Date"]." </td>";
															echo"<td style='color:black;'>".$r["Days"]." Days</td>";
															echo"<td style='color:black;'> Rs.".$r["Toatal_amt"]."/-</td>";
															echo"<td><a href='view-details.php?id=".$r["Booking_Id"]."'>View Details</a></td>";
															echo"</tr>";
													}
			
													?>
		
													</tbody>
		
												</table>
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