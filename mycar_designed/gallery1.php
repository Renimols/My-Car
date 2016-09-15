﻿<table border="0">
<tr>
<td>
<?php
$opt=$_POST["option"];
include("database.php");
$result = mysql_query("SELECT * FROM car_details where brand_name='$opt'");
echo "<table border='0'>";
echo"<ul>";
while($row = mysql_fetch_array($result))
{
echo"<li>";
echo  $row['c_code'] ;
echo"</li>";
echo"<li>";
echo $row['brand_name'];
echo"</li>";
echo $row['name_of_car'];
echo"<li>";
echo $row['date_launch'];
echo"</li>";
?>
</td>
<td WIDTH="50%">
	<?php
	$s=$row['photo'];
	echo '<img src="'.$s.'" alt="HTML5 Icon" style="width:128px;height:128px">';
}
	 ?>
</ul>
</td>
	</tr>
</table>


