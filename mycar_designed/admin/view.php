<?php
session_start();
$name=$_SESSION['eid'];
include("database.php");
{
echo "<script>location.href='home.php?view=$catg & view1=$subcatg'</script>";
}

?>