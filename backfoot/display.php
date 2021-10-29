
<div style="padding:0px 30px 30px 30px; max-height:500px; overflow:auto; margin-top:50px;">
<div class="tables">
		<table class="table table-bordered">
		<thead>
		<tr style="position:relative;">
			<th style='padding-left:50px;'>Image  </th>
			<th style='padding-left:50px;'>Name  </th>
			<th style='padding-left:50px;'>Unit   </th>
			<th style='padding-left:50px;'>Quantity   </th>
			<th style='padding-left:50px;'>Price   </th>
			<th style='padding-left:50px;'>Discription</th>
			<th>  </th>
		</tr>
		</thead>
		
		<tbody>
		
		<?php
			include("DBModel.php");
			$db=new DemoDBCode;
			$rows=$db->getMealDetails(0);
			while($r=mysqli_fetch_array($rows))
			{
					
					echo "<tr style='padding-left:50px;' ><td style='padding-left:50px ; padding-right:0px;' > <img src='".$r["ImagePath"]."' height='70' width='100' alt='image' ></td>";
					echo " <td style='padding-left:70px'>".$r["Name"]." </td>";
					echo "<td style='padding-left:50px'> ".$r["Unit"]."</td>";
					echo "<td style='padding-left:70px'> ".$r["Quantity"]."</td>";
					echo "<td style='padding-left:50px'> ".$r["Price"]."</td>";
					echo "<td style='padding-left:50px'> ".$r["Description"]."</td>";
					echo "<td style='padding-left:50px'><a href='manage-meal.php?op=edit&id=".$r["mealID"]."&name=".$r["Name"]."&quantity=".$r["Quantity"]."&unit=".$r["Unit"]."&price=".$r["Price"]."&img=".$r["ImagePath"]."&dsicription=".$r["Description"]."'><img src='images/edit.png' height='25' width='25' ></a> <span style='font-size:20px; color:red;'>&ensp;|&ensp;</span><a href='manage-meal-controller.php?op=del&id=".$r["mealID"]." ' style='font-size:20px;'>Delete</a></td>";
					echo "</tr>";
			}
		?>
		
		</tbody>
		
		</table>
		</div>
</div>

