<?php 
$title="Admin | Banner";
include("header.php"); ?>

<div class="outter-wp">
					
		 <div class="sub-heard-part">
													   
		</div>	
		<div class="forms-main">
			<div class="graph-form">
					
					<div class="form-body">
							<?php
										if(isset($_GET["op"]))
										{
											$id=$_GET["id"];
											$name=$_GET["banner"];
											$image=$_GET["img"];
											
								?>
											
											<form method="post" action="banner-controller.php?op=update" enctype="multipart/form-data" >
											<input type="hidden" value="<?php echo $id; ?>" id="Bid" name="Bid"/>
											<div class="form-group"> <label for="name"> Banner </label> 
											<input type="text" class="form-control" id="Banner" name="Banner" value="<?php echo $name?>" placeholder="Banner"   onfocus="this.value = '';" onblur=" if (this.value == '') {this.placeholder = 'Banner';}">
											<span id="NameErr" style="color:red;"></span>
											</div>   
											<div class="form-group"> <label for="Quantity"> Image </label> 
											<input type="hidden" value="<?php echo $image; ?>" id="imgid" name="imgid"/>
											<input type="file" class="form-control" id="BImage" name="Image" placeholder="Images" onfocus="this.value = '';" onblur=" if (this.value == '') {this.placeholder = 'Image';}">
											<span id="QuantityErr" style="color:red;"></span>
											</div>
											<button type="submit" class="btn btn-default" >Update</button>
											</form>
									<?php
										
										}
										else
										{
										?>
											<form method="post" action="banner-controller.php?op=add" enctype="multipart/form-data" >
											<div class="form-group"> <label for="name"> Banner </label> 
											<input type="text" class="form-control" id="Banner" name="Banner" placeholder="Banner"   onfocus="this.value = '';" onblur=" if (this.value == '') {this.placeholder = 'Banner';}">
											<div style="text-align:left; font-size:20px;"><span id="BannerErr"></span></div>
											</div>   
											
											<div class="form-group"> <label for="Quantity"> Image </label> 
											<input type="file" class="form-control" id="BImage" name="Image" placeholder="Images" onfocus="this.value = '';" onblur=" if (this.value == '') {this.placeholder = 'Image';}">
											<div style="text-align:left; font-size:20px;"><span id="ImageErr"></span></div>
											</div>
											<button type="submit" class="btn btn-default" onclick="return checkBannerValidations();" >Submit</button>
											</form>
											
										<?php
										}
										?>
					</div>
				</div>
			</div>
		</div>
		
						<?php include("display2.php");?>

 <!--footer section start-->
										<footer>
										   <p>&copy 2017 BEST FOODIES . All Rights Reserved</p>
										</footer>
									<!--footer section end-->
								
				<!--//content-inner-->
<?php include("footer.php"); ?>