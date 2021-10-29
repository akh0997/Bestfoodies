<?php 
$title="Admin | Feedback";
include("header.php"); ?>


	<div class="outter-wp">
					<!--/sub-heard-part-->
						 <div class="sub-heard-part">				   
							</div>	
								<!--/sub-heard-part-->	
									<!--/forms-->
										<div class="forms-main">

	<div style="padding:0px 30px 30px 30px; max-height:500px; overflow:auto; margin-top:50px;">
		<div class="tables">
		<table class="table table-bordered">
		<thead>
		<tr style="position:relative;">
			<th style='padding-left:50px;'>Name</th>
			<th style='padding-left:50px;'>Email</th>
			<th style='padding-left:50px;'>Contact </th>
			<th style='padding-left:50px;'>Date</th>
		
			<th style='padding-left:50px;'>Feedback</th>
		</tr>
		</thead>
		
		<tbody>
		
		<?php
			include("DBModel.php");
			$db=new DemoDBCode;
			$rows=$db->getFeedbackDetails(0);
			while($r=mysqli_fetch_array($rows))
			{
				$uid=$r["User_ID"];
				$a=$db->UserDetails($uid);
				$ab=mysqli_fetch_array($a);
				echo"<tr>";
				echo"<td style='color:black;'>".$ab["Name"]."</td>";
				echo"<td style='color:black;'>".$ab["Email_Id"]."</td>";
				echo"<td style='color:black;'>".$ab["Contact"]."</td>";
				echo"<td style='color:black;'>".$r["Date"]."</td>";
				echo"<td style='color:black;'><div style='width:400px;'>".$r["feedback"]."</div> </td>";
				echo"</tr>";
				
				
			}
			
		?>
		
		</tbody>
		</div>
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