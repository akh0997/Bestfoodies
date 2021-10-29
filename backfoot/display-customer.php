<div class="outter-wp">
					<!--/sub-heard-part-->
						 <div class="sub-heard-part">
													   
							</div>	<div class="forms-main">
										<div class="graph-form">
<div style="padding:0px 30px 30px 30px; max-height:500px; overflow:auto; margin-top:50px;">
<div class="tables">
		<table class="table table-bordered">
		<thead>
		<tr style="position:relative;">
			<th style='padding-left:50px;'>Image</th>
			<th style='padding-left:50px;'>Name  </th>
			<th style='padding-left:50px;'>Address</th>
			<th style='padding-left:50px;'>City</th>
			<th style='padding-left:50px;'>Pin   </th>
			<th style='padding-left:50px;'>Contact No.</th>
			<th style='padding-left:50px;'>Email Id</th>
		</tr>
		</thead>
		
		<tbody>
		
		<?php
			include("DBModel.php");
			$db=new DemoDBCode;
			$rows=$db->UserDetails(0);
			while($r=mysqli_fetch_array($rows))
			{		
					
					$rb=$db->getUserImage($r["Email_Id"]);
					if($rb==0)
					{
						echo "<tr><td style='padding-left:50px ; padding-right:0px;' ><img src='../images/demo/people.png' height='100' width='100' alt='image' ></td>";
					}
					else
					{
						echo "<tr><td style='padding-left:50px ; padding-right:0px;' > <img src='../".$rb["ImagePath"]."' height='70' width='100' alt='image' ></td>";
					}
					echo "<td style='padding-left:70px'>".$r["Name"]." </td>";
					echo "<td style='padding-left:50px'> ".$r["Address"]."</td>";
					echo "<td style='padding-left:70px'> ".$r["City"]."</td>";
					echo "<td style='padding-left:50px'> ".$r["Pin_Code"]."</td>";
					echo "<td style='padding-left:50px'> ".$r["Contact"]."</td>";
					echo "<td style='padding-left:50px'> ".$r["Email_Id"]."</td>";
					echo "</tr>";
			}
		?>
		
		</tbody>
		</div>
		</table>
		
</div>
</div>
