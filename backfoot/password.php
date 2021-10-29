<?php 

$title="Admin | Change Password";
include("header.php"); ?>
<div class="forms-main">
											<div class="graph-form">
												<div class="form-body">
												<?php
												if(isset($_GET["msg"]))
												{
												
												if($_GET["msg"]=="suc")
												{
													?>
													<div style="background-color:#aaffaa; border:solid 2px green;padding:10px; border-radius:5px; margin-bottom:10px">
													Password changed successfully!
													</div>
													<?php
												}
												else if($_GET["msg"]=="failconfirmation")
												{
													?>
													<div style="background-color:pink; border:solid 2px red;padding:10px; border-radius:5px; margin-bottom:10px">
													Password not matched 
													</div>
													<?php
												}
												else if($_GET["msg"]=="invalid")
												{
												?>
													<div style="background-color:pink; border:solid 2px red;padding:10px; border-radius:5px; margin-bottom:10px">
														invalid password
													</div>
												<?php
												}
												}
												?>
												
													
												<form action="change-password.php" method="post"> 
												<div class="form-group"> 																						
												<label for="Current Passwrod"> Current Passwrod</label> 
													<input type="password" class="form-control" name="CurrentPass" id="CurrentPass" placeholder="******"  onfocus="this.value = '';" onblur="checkValidations(this, 'passErr', ' Please Enter the current password!'); if (this.value == '') {this.placeholder = '******';}"> 
													<span id="passErr" style="color:red;"></span>
												</div>
												
												<div class="form-group"> 
													<label for="New password">New password</label> 
													<input type="password" class="form-control" name="NewPass" id="NewPass" placeholder="******" onfocus="this.value = '';" onblur="checkValidations(this, 'newpassErr', ' Please enter the new password!'); if (this.value == '') {this.placeholder = '******';}"> 
													<span id="newPassErr" style="color:red;"></span>
												</div>  
												<div class="form-group"> 
													<label for="Confirm password">Confirm password</label> 
													<input type="password" class="form-control" name="ConfirmPass" id="ConfirmPass" placeholder="******" onfocus="this.value = '';" onblur="checkValidations(this, 'confpassErr', ' Please Enter the confirm password!'); if (this.value == '') {this.placeholder = '******';}"> 
													<span id="conPassErr" style="color:red;"></span>
												</div> 
												
												<button type="submit" class="btn btn-default" onclick="return changePasswordValidate();" >Submit</button> 
												</form> 
																	</div>

															</div>



 <!--footer section start-->
										<footer>
										   <p>&copy 2017 BEST FOODIES . All Rights Reserved</p>
										</footer>
									<!--footer section end-->
							
				<!--//content-inner-->
<?php include("footer.php"); ?>