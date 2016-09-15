<?php

         session_start();
         $name1=$_SESSION['login']; 

?>
<!DOCTYPE html>
<html>
<head>
<title>LIST</title>
<link rel="stylesheet" type="text/css" href="liststyle.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <table class="responsive-stacked-table">
	
	<tbody>
		<tr class="row1">

<?php

$opt=$_POST["option"];

//$p=$_POST["price"];
include("database.php");
$result = mysql_query("SELECT * FROM car_details where city='$opt'");

while($row = mysql_fetch_array($result)) {

    $date = $row['carmdel'];
$y=$row['city'];
    $link = $row['city_highway-milage'];
    $title = stripslashes($row['fueltype']);
    $description = stripslashes($row['enginedisplacement']);
    $bhp=$row['bhp'];
    $trque=$row['trque'];
$p=$row['price'];
$i=$row['id'];
$cm=$row['carmdel'];
$cn=$row['car_name'];
    $gearbx=$row['garbage'];
    $s=$row['steering_geer_type'];
    $image_link = $row['PHT'];
    

?>

<td><?php echo"<img class='imglist' src='$image_link' width='300';height='300'/>"?></td>
<td><ul><li><?php echo $title; ?></li>
<li><?php echo $date; ?></li>
<li><?php echo$link; ?></li>
<li><?php echo $description ?></li>
<li><?php echo $bhp ?></li>
<li><?php echo $trque ?></li>
<li><?php echo $gearbx ?></li>
<li><?php echo $s ?></li>
<li><?php echo $opt ?></li>
<li>
<?php
echo"<input type='checkbox' name='c1[]' value='$row[id]'/><b>Delete</b>";
?>
</li>

</ul></td>
<?php



} 
echo"<form method='post'><center><input type='submit' name='del' value='Delete'/></center></form>";
?>
</tr>

</body>
</table>
    </body>
    </html>
<?php
if(isset($_POST['del']))
  {
echo 'hi';
    $c=$_REQUEST['c1'];
	if($c!=NULL)
	  {
	    $flag=0;
		foreach($c as $c1)
		  {
echo 'hiii';
$res="delete from car_details where id='$c1'";
		mysql_query($res);
		   $flag=1;
		   }
		   if($flag==1)
		     {
echo 'hi0000';
			   echo "<font size='+2'>item deleted successfully</font>";
			  }
			  else
			   {
			     echo "<font size='+2'>item is not deleted</font>";
				 }
		  }
		  else
		    {
			  echo "<font size='+2'>please select a checkbox</font>";
			 }
	 }	
 
  ?>