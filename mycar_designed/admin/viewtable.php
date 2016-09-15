











<body>
<br>
<center><font color="#660066" size="+3">ALL CARS</font></center>
<br>
</body>
<?php
include("database.php");
$sel=mysql_query("select * from car_details");
$count=mysql_num_rows($sel);

while($arr=mysql_fetch_array($sel))
  {
     $i=$arr['id'];
	
	echo "<center><fieldset style='width:60%'><table border='0'>
	<tr>
	<td><img src='itempics/$i.jpg' width=200 height=200></td>
	<td><h3>Product Details:</h3><b>Product:</b> ".$arr['carmdel']."<br>
	<b>Name:</b> ".$arr['car_name']."<br>
	<b>Price:</b> ".$arr['price']."<br>
	<b>City/highway milage:</b> ".$arr['city_highway-milage']."<br>
	<b>fueltype:</b> ".$arr['fueltype']."<br>
	<b>engine displacement:</b> ".$arr['enginedisplacement']."<br>
	<b>bhp:</b> ".$arr['bhp']."<br>
	<b>torque:</b> ".$arr['trque']."<br>
	<b>gearbx:</b> ".$arr['garbage']."<br>
	<b>steering_ring_type:</b> ".$arr['steering_geer_type']."<br>

</td>



	
	</tr>
	</table>
</fieldset><br>
</center>";
}
  ?>













<br>
<center><font color="#660066" size="+3">ALL UPCOMING CARS</font></center>
<br>
</body>
<?php
include("database.php");
$sel=mysql_query("select * from upcming");
$count=mysql_num_rows($sel);

while($arr=mysql_fetch_array($sel))
  {
     $i=$arr['car_id'];
	
	echo "<center><fieldset style='width:60%'><table border='0'>
	<tr>
	<td><img src='upcming/$i.jpg' width=200 height=200></td>
	<td><h3>Product Details:</h3><b>Product:</b> ".$arr['carmdel']."<br>
	//<b>Name:</b> ".$arr['car_name']."<br>
	<b>Price:</b> ".$arr['price']."<br>
	
</td>



	
	</tr>
	</table>
</fieldset><br>
</center>";
}
  ?>



<br>
<center><font color="#660066" size="+3">ALL POPULAR CARS</font></center>
<br>
</body>
<?php
include("database.php");
$sel=mysql_query("select * from ppular");
$count=mysql_num_rows($sel);

while($arr=mysql_fetch_array($sel))
  {
     $i=$arr['car_id'];
	
	echo "<center><fieldset style='width:60%'><table border='0'>
	<tr>
	<td><img src='ppular/$i.jpg' width=200 height=200></td>
	<td><h3>Product Details:</h3><b>Product:</b> ".$arr['carmdel']."<br>
	//<b>Name:</b> ".$arr['car_name']."<br>
	<b>Price:</b> ".$arr['price']."<br>
	
</td>



	
	</tr>
	</table>
</fieldset><br>
</center>";
}
  ?>



<br>
<center><font color="#660066" size="+3">ALL JUST LAUNCHED CARS</font></center>
<br>
</body>
<?php
include("database.php");
$sel=mysql_query("select * from launched");
$count=mysql_num_rows($sel);

while($arr=mysql_fetch_array($sel))
  {
     $i=$arr['car_id'];
	
	echo "<center><fieldset style='width:60%'><table border='0'>
	<tr>
	<td><img src='launched/$i.jpg' width=200 height=200></td>
	<td><h3>Product Details:</h3><b>Product:</b> ".$arr['carmdel']."<br>
	//<b>Name:</b> ".$arr['car_name']."<br>
	<b>Price:</b> ".$arr['price']."<br>
	
</td>



	
	</tr>
	</table>
</fieldset><br>
</center>";
}
  ?>