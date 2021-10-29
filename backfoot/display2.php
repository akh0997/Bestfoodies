
<div style="padding:0px 30px 30px 30px; max-height:500px; overflow:auto; margin-top:50px; margin-bottom:100px; ">
<div class="tables">

		<table class="table table-bordered">
		<thead>
		<tr style="position:relative;">
			<th style='padding-left:50px;'>Image  </th>
			<th style='padding-left:50px;'>Banner </th>
			<th>  </th>
		</tr>
		</thead>
		
		<tbody>		
		<?php
			include("DBModel.php");
			$db=new DemoDBCode;
			$rows=$db->getBannerDetails(0);
			
			while($r=mysqli_fetch_array($rows))
			{	
					echo "<tr style='padding-left:50px;' ><td style='padding-left:50px ; padding-right:0px;' > <img src='".$r["ImagePath"]."' height='70' width='100' alt='image' ></td>";
					echo " <td style='padding-left:70px'>".$r["banner"]." </td>";
					echo "<td style='padding-left:50px'><a href='banner.php?op=edit&id=".$r["bid"]."&banner=".$r["banner"]."&img=".$r["ImagePath"]."'><img src='images/edit.png' height='25' width='25' ></a> <span style='font-size:20px; color:red;'>&ensp;|&ensp;</span><a href='banner-controller.php?op=del&id=".$r["bid"]." ' style='font-size:20px;'>Delete</a></td>";
					echo "</tr>";
			}
		?>
		
		</tbody>
		
		</table>
		
	</div>
</div>