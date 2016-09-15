<body>
<br>
<center><font color="#660066" size="+3">Orders</font></center>
<br>
</body>
<?php
include("database.php");
$sel=mysql_query("select * from orders");
while($arr=mysql_fetch_array($sel))
  {
     $i=$arr['car_id'];
	
	echo "<center><fieldset style='width:60%'><table border='0'>
	<tr>
	<td><img src='itempics/$i.jpg' width=200 height=200></td>
	<td><h3>Product Details:</h3><b>Product:</b> ".$arr['carmdel']."<br>
	<b>Car Name:</b> ".$arr['car_name']."<br>
<b>City:</b> ".$arr['city']."<br></td>
	<b>Item No:</b> ".$arr['car_id']."<br>
	<b>Price:</b> ".$arr['price']."<br>
	
	
	<td><h3>Buyer Details:</h3><b>Buyer:</b>  ".$arr['user']."<br><b>Email:</b>".$arr['email']."<br>
	</td>
	</tr>
	</table>
</fieldset><br>
</center>";
}

	
	?>


<center><font color="#660066" size="+3">Orders from upcoming cars</font></center>
<br>
</body>
<?php
include("database.php");
$sel=mysql_query("select * from upcming_rder");
while($arr=mysql_fetch_array($sel))
  {
     $i=$arr['car_id'];
	
	echo "<center><fieldset style='width:60%'><table border='0'>
	<tr>
	<td><img src='upcming/$i.jpg' width=200 height=200></td>
	<td><h3>Product Details:</h3><b>Product:</b> ".$arr['carmdel']."<br>
	<b>Car Name:</b> ".$arr['car_name']."<br>
</td>
	<b>Item No:</b> ".$arr['car_id']."<br>
	<b>Price:</b> ".$arr['price']."<br>
	
	
	<td><h3>Buyer Details:</h3><b>Buyer:</b>  ".$arr['user']."<br><b>Email:</b>".$arr['email']."<br>
	</td>
	</tr>
	</table>
</fieldset><br>
</center>";
}

	
	?>


<center>
<font color="#660066" size="+3">Orders from popular cars</font></center>
<br>
</body>
<?php
include("database.php");
$sel=mysql_query("select * from ppular_rder");
while($arr=mysql_fetch_array($sel))
  {
     $i=$arr['car_id'];
	
	echo "<center><fieldset style='width:60%'><table border='0'>
	<tr>
	<td><img src='ppular/$i.jpg' width=200 height=200></td>
	<td><h3>Product Details:</h3><b>Product:</b> ".$arr['carmdel']."<br>
	
	<b>Item No:</b> ".$arr['car_id']."<br>
	<b>Price:</b> ".$arr['price']."<br>
	
	
	<td><h3>Buyer Details:</h3><b>Buyer:</b>  ".$arr['user']."<br><b>Email:</b>".$arr['email']."<br>
	</td>
	</tr>
	</table>
</fieldset><br>
</center>";
}

	
	?>




