<?php
session_start();
$name=$_SESSION['eid'];
include("database.php");

$catg=$_REQUEST['cat'];
$subcatg=$_REQUEST['subcat'];
$img=$_FILES['file']['tmp_name'];
$city=$_REQUEST['t1'];
$price=$_REQUEST['t2'];
$fuel=$_REQUEST['t3'];
$engine=$_REQUEST['t4'];
$bhp=$_REQUEST['t5'];
$torq=$_REQUEST['t6'];
$gb=$_REQUEST['t7'];
$sgt=$_REQUEST['t8'];
$c=$_REQUEST['t9'];
$desc=$_REQUEST['text'];

if($_REQUEST['sub'])
  {
    if(mysql_query("insert into car_details  values('','$catg','$subcatg','$city','$price','$fuel','$engine','$bhp','$torq','$gb','$sgt','$img','$desc','$c') "))
	   {
	    move_uploaded_file($_FILES['file']['tmp_name'],"images/$img.jpg");
		
	    echo "<script type='text/javascript'>alert('inserted successfully!')</script>";
		}
	else
	 {
	   echo "<script type='text/javascript'>alert('failed!')</script>";
	   }
	
}   
		 
?><head>
<script>
function showUser(str)
{
if (str=="")
{
document.getElementById("txtHint").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}



xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("subcat").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("GET","dd.php?q="+str,true);
xmlhttp.send();
}
</script>

</head>


<style type="text/css">
<!--
.style3 {font-size: 18px; font-weight: bold; }
-->
</style>
<body>
<br><br><br>
<center><font color="#660066" size="+3">Add newcar</font></center>
<br><br>
<center><fieldset style="width:50%">
<form  name="testform" method="post" enctype="multipart/form-data" >
<table align="center">
<tr>
  <td><span class="style3">Brand:</span></td>
  <td><label>
  <input name="catg" type="text" id="catg">
  </label></td>
</tr>

<tr>
  <td><span class="style3">Model:</span></td>
  <td><label>
  <input name="subcatg" type="text" id="subcatg">
  </label></td>
</tr>



<tr>
<td><span class="style3">Image:</span></td>
<td><input name="file" type="file"></td></tr>
<tr>
  <td><span class="style3">City/Highway/milage: </span></td>
  <td><label>
    <input name="t1" type="text" id="t1">
  </label></td>
</tr>
<tr>
  <td><span class="style3">Price:</span></td>
  <td><label>
  <input name="t2" type="text" id="t2">
  </label></td>
</tr>


<tr>
  <td><span class="style3">Fuel Type:</span></td>
  <td><label>
  <input name="t3" type="text" id="t3">
  </label></td>
</tr>


<tr>
  <td><span class="style3">Engine Displacement:</span></td>
  <td><label>
  <input name="t4" type="text" id="t4">
  </label></td>
</tr>


<tr>
  <td><span class="style3">BHP:</span></td>
  <td><label>
  <input name="t5" type="text" id="t5">
  </label></td>
</tr>


<tr>
  <td><span class="style3">Torque:</span></td>
  <td><label>
  <input name="t6" type="text" id="t6">
  </label></td>
</tr>


<tr>
  <td><span class="style3">gear box:</span></td>
  <td><label>
  <input name="t7" type="text" id="t7">
  </label></td>
</tr>


<tr>
  <td><span class="style3">Stearing-Gear-Type:</span></td>
  <td><label>
  <input name="t8" type="text" id="t8">
  </label></td>
</tr>
<tr>
  <td><span class="style3">City:</span></td>
  <td><label>
  <input name="t9" type="text" id="t8">
  </label></td>
</tr>
<tr>
<td><span class="style3">Description:</span></td>
<td><textarea name="text" cols="35" rows="6"></textarea></td></tr>
<tr><td  colspan="2" align="center"><input name="sub" type="submit" value="Submit"></td></tr>
</table>
</form>
</fieldset></center>
</body>
