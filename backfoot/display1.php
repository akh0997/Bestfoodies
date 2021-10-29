<div style="padding:0px 30px 30px 30px; max-height:500px; overflow:auto; margin-top:50px; border:solid #efefef 3px; padding:10px;">
<div class="tables">
		<table class="table table-bordered">
		<thead>
		<tr>
			<th style='padding-left:50px;'>Image  </th>
			<th style='padding-left:50px;'>Name   </th>
			
			<th style='padding-left:50px;'>Quantity   </th>
			<th style='padding-left:50px;'>Unit   </th>
			<th style='padding-left:50px;'>Price   </th>
			
			<th style='padding-left:50px;'>Discription</th>
			<th style='padding-left:50px'></th>
			
			
		</tr>
		</thead>
		<tbody>
		<?php
			include("DBModel.php");
			$db=new DemoDBCode;
			$rows=$db->getMealDetails(0);
			$id=1;
			while($r=mysqli_fetch_array($rows))
			{
					echo "<tr style='padding-left:50px;' ><td style='padding-left:50px ; padding-right:0px;' > <img src='".$r["ImagePath"]."' height='70' width='100' alt='image' ></td>";
					echo "<td style='padding-left:70px;'>".$r["Name"]."</td>";
					echo "<td style='padding-left:70px;'> ".$r["Quantity"]."</td>";
					echo "<td style='padding-left:50px;'> ".$r["Unit"]."</td>";
					echo "<td style='padding-left:50px;'> ".$r["Price"]."</td>";
					echo "<td style='padding-left:50px;'> ".$r["Description"]."</td>";
					echo "<td style='padding-left:50px;'><input type='checkbox' name='checkbox".$id."' id='checkbox".$id."'  style='height:20px; width:20px;'></td>";
					
					echo "</tr>";
					echo"<input type='hidden' value='".$r["mealID"]."' id='".$id."' name='".$id."'/>";
					$id=$id+1;
			}
		?>
		
		</tbody>
		</table>
		
</div>
</div>