<?php include("header.php"); ?>
	<div class="outter-wp">
					<!--/sub-heard-part-->
						 <div class="sub-heard-part">				   
							</div>	
								<!--/sub-heard-part-->	
									<!--/forms-->
										<div class="forms-main">
											<div class="graph-form">
												<div class="form-body">
												<form action="manage-day-wise-meal-controller.php" method="post" enctype="multipart/form-data"> 
												<div class="form-group"> 
												<label for="Dayname">DayName</label> 
												<select style="margin-left:50px; " name="dayNameText" id="dayName" >	
												<option selected disabled hidden >Day</option>
												<option >Monday</option>
												<option>Tuesday</option>
												<option>Wednesday</option>
												<option>Thursday</option>
												<option>Friday</option>
												<option>Saturday</option>
												<option>Sunday</option>
												</select> 
												<span id="dayErr" style="color:red;"></span>
												</div>
												<div class="form-group"> 
												<label for="Mealtime">Meal Time</label> 
												<select style="margin-left:45px; " name="timeNameText" id="timeName">	
												<option selected disabled hidden >Meal Timing</option>
												<option >Breakfast</option>
												<option>Lunch</option>
												<option>Dinner</option>
												</select>
												<span id="timeErr" style="color:red;"></span>												
												</div>  
												 
											</div>

										</div>
												
												<?php include("display1.php");?>
												<div style="margin:30px auto;">
												<button type="submit" class="btn btn-default" onclick="return dayWiseMealValidation();" >Submit</button>
												</div>
										</form> 

<!--footer section start-->
										<footer>
										   <p>&copy 2017 BEST FOODIES . All Rights Reserved</p>
										</footer>
									<!--footer section end-->
								</div>
							</div>
				<!--//content-inner-->
<?php include("footer.php"); ?>