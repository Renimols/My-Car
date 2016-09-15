<?php
include("database");
$itemno=$_REQUEST['itemno'];

   $sel=mysql_query("select * from car_details where c_code='$itemno'");
    while($arr=mysql_fetch_array($sel))
   {
   $i=$arr['c_code'];
      echo "<br><form method='post'>
	  <center><h2><font face='Lucida Handwriting' size='+1' color='#CC99CC'>".$arr['description']."</font></h2><br><br>
	<fieldset style='width:80%'><table border='0' >";
  
   echo "<tr>
   <tr><td><img src='$arr['photo']' height='300' width='300'></td>
   <td><b><font face='Comic sans MS' size='+1'>Item name:</b>".$arr['brand_name'].
   "<br><b>Price:</b>Rs&nbsp;".$arr['price'].
   "<br><b>Product Details:<br></b>".$arr['description'].
   " </font><br><br><a href='index.php?con=12 & itemno=$i'><img src='images/MetalPlakDa5new.gif' width='70' height='20'/></a>  </td>
   </tr></table></fieldset></center>";
    }
	?>