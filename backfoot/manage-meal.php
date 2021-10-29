<?php
$title="Admin | Manage meal";
 include("header.php"); ?>

		<!-- //header-ends -->
			<!--//outer-wp-->
				<div class="outter-wp">
					<!--/sub-heard-part-->
						 <div class="sub-heard-part">
													   
							</div>	
								<!--/sub-heard-part-->	
									<!--/forms-->
									<div class="forms-main">
										<div class="graph-form">
											<?php
											if(isset($_GET["op"]))
											{
												$id=$_GET["id"];
												$name=$_GET["name"];
												$quantity=$_GET["quantity"];
												$unit=$_GET["unit"];
												$price=$_GET["price"];
												$image=$_GET["img"];
												$discr=$_GET["dsicription"];
											?>
											<form method="post" action="manage-meal-controller.php?op=update" enctype="multipart/form-data">
											<input type="hidden" value="<?php echo $id; ?>" id="Mid" name="Mid"/>
											<div class="form-group"> <label for="name">NAME</label> <input type="text" class="form-control" id="Name1" name="Nameid" value="<?php echo $name; ?>" placeholder="name"> </div>   
											<div class="form-group"> <label for="Quantity">QUANTITY</label> <input type="text" class="form-control" id="Name2" name="Quantityid" value="<?php echo $quantity; ?>" placeholder="quaantity"> 
											<div class="form-group"> <label for="Unit">UNIT</label> <input type="text" class="form-control" id="Name3" name="Unitid" value="<?php echo $unit; ?>"  placeholder="unit"> </div>  
											<div class="form-group"> <label for="Price">PRICE</label> <input type="text" class="form-control" id="Name4" name="Priceid" value="<?php echo $price; ?>"  placeholder="price"> </div>  
											<input type="hidden" value="<?php echo $image; ?>" id="imgid" name="imgid"/>
											<div class="form-group"> <label for="Image">IMAGE</label> <input type="file" class="form-control" id="Name5" name="Imageid" value="<?php echo $image; ?>" placeholder="image"> </div>  
											<div class="form-group"> <label for="Description">DESCRIPTION</label> <input type="text" class="form-control" id="Name6" name="Discriptionid"value="<?php echo $discr; ?>"  placeholder="description"> </div>  
											<button type="submit" class="btn btn-default">update</button>
											</form>
										<?php
										}
										else
										{
										?>

											<div class="form-body">
											<form method="post" action="manage-meal-controller.php?op=add" enctype="multipart/form-data" >
											<div class="form-group"> <label for="name"> NAME </label> 
											<input type="text" class="form-control" id="Name1" name="Nameid" placeholder="Name"   onfocus="this.value = '';" onblur=" if (this.value == '') {this.placeholder = 'Name';}">
											<span id="NameErr" style="color:red;"></span>
											</div>   
											<div class="form-group"> <label for="Quantity"> QUANTITY </label> 
											<input type="text" class="form-control" id="Name2" name="Quantityid" placeholder="Quantity" onfocus="this.value = '';" onblur=" if (this.value == '') {this.placeholder = 'Quantity';}">
											<span id="QuantityErr" style="color:red;"></span>
											</div>
											<div class="form-group"> <label for="Unit"> UNIT </label> 
											<input type="text" class="form-control" id="Name3" name="Unitid" placeholder="Unit"  onfocus="this.value = '';" onblur=" if (this.value == '') {this.placeholder = 'Unit';}">
											<span id="UnitErr" style="color:red;"></span>
											</div>  
											<div class="form-group"> <label for="Price"> PRICE </label>
											<input type="text" class="form-control" id="Name4" name="Priceid" placeholder="Price"  onfocus="this.value = '';" onblur=" if (this.value == '') {this.placeholder = 'Price';}">
											<span id="PriceErr" style="color:red;"></span>
											</div>  
											<div class="form-group"> <label for="Image"> IMAGE </label>
											
											<input type="file" class="form-control" id="Name5" name="Imageid" placeholder="Image"  onfocus="this.value = '';" onblur=" if (this.value == '') {this.placeholder = 'Image';}">
											<span id="ImageErr" style="color:red;" ></span>
											</div>  
											<div class="form-group"> <label for="Description"> DESCRIPTION </label> 
											<input type="text" class="form-control" id="Name6" name="Discriptionid" placeholder="Description"  onfocus="this.value = '';" onblur=" if (this.value == '') {this.placeholder = 'Discription';}">
											<span id="DescriptionErr" style="color:red;"></span>
											</div>  
											<button type="submit" class="btn btn-default" onclick="return manageMealValidation();" >Submit</button>
											</form>
											</div>
										<?php
										}
										?>

							</div>
							<?php include("display.php");?>
																
									
								</div>
							</div>
				<!--//content-inner-->
<?php include("footer.php"); ?>			