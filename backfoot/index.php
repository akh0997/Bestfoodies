<!DOCTYPE HTML>
<html>
<head>
<title>Admin Login :: Best Foodies</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Food, Meal" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/validations.js"></script>
<script src="js/jquery-1.10.2.min.js"></script>
<!--clock init-->


</head> 
<body>
								<!--/login-->
								
									   <div class="error_page">
												<!--/login-top-->
												
													<div class="error-top">
													<h2 class="inner-tittle page">Best Foodies</h2>
													    <div class="login">
														<h3 class="inner-tittle t-inner">Admin Login</h3>
														<?php 
														if(isset($_GET["msg"]))
														{
															?>
															<div style="background-color:pink;border:solid red 1px;">
																<p style="color:red;">invalid Username/Password!!!</p>
															
															</div>
														<?php
														}		
															?>
															<form  method="post" action="login-controller.php" >
																		<input type="text" class="text" value="" name="userNameText"  id="userNameText" placeholder=" E-Mail-address" onfocus="if(this.value=='E-mail address'){this.value = ''};" onblur=" if (this.value == '') {this.value = 'E-mail address';}" >
																		<div style="text-align:left; font-size:10px;"><span id="emailErr"></span></div>
																		<input type="password" value=""  name="passwordText" id="passwordText" placeholder=" Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
																		<div style="text-align:left; font-size:10px;"><span  id="passErr" ></span></div>
																		<div class="submit"><input type="submit"  value="Login"  onclick="return checkValidations();" /></div>
																		<div class="clearfix"></div>
																		</div>
																	</form>
														</div>

														
													</div>
													
													
												<!--//login-top-->
										   </div>
						
										  	<!--//login-->
										    <!--footer section start-->
										<div class="footer">
												
										   <p>&copy 2017 &ensp;Best Foodies . All Rights Reserved  </p>
										</div>
									<!--footer section end-->
									<!--/404-->
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>