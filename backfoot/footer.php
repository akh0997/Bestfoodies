			
									 <!--footer section start-->
										<footer>
										   <p>&copy 2017 Best Foodies. All Rights Reserved | Design by <a href="" target="_blank">B.Tech Students</a></p>
										</footer>
									<!--//footer section end-->
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo"> <h1 style="font-size:18pt;">BestFoodies</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
									  <a href="index.php"><img src="images/logon.png" height="120" width="100"></a>
									  <a href="index.php"><span class=" name-caret">Admisitrator</span></a>
									 <p>Welcome Admin</p>
									<ul>
										<li><a class="tooltips" href="password.php"><span>Change Password</span><i class="lnr lnr-cog"></i></a></li>
										<li><a class="tooltips" href="logout-controller.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
								<div class="menu">
									<ul id="menu" >
										<li><a href="home.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
										 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Manage Meal</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="Manage-day.php?day=Monday"> Manage Day and Time</a></li>
											<li id="menu-academico-boletim" ><a href="Manage-meal.php">Manage Meal</a></li>
											<li id="menu-academico-avaliacoes" ><a href="manage-day-wise-meal.php">Map Day wise Meal</a></li>
											
										  </ul>
										</li>
										 <li id="menu-academico" ><a href="manage-customers.php"><i class="fa fa-file-text-o"></i> <span>Manage Customers</span></a>
										</li>
										 <li id="menu-academico" ><a href="manage-booking.php"><i class="fa fa-file-text-o"></i> <span>Manage Bookings</span></a>
										</li>
									<!--	<li id="menu-academico" ><a href="Banner.php"><i class="fa fa-file-text-o"></i> <span>Add Banner</span></a>-->
										</li>
										<li id="menu-academico" ><a href="feedback-display.php"><i class="fa fa-file-text-o"></i> <span>Feedback Details</span></a>
										</li>
				<?php////////////////////////////////////////?>	<li><a href="password.php"><i class="lnr lnr-pencil"></i> <span>Change Password</span></a></li>
									<li><a href="logout-controller.php"><i class="lnr lnr-pencil"></i> <span>Logout</span></a></li>
									
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>


</html>
