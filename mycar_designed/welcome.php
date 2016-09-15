<?php     
         session_start();
         $name=$_SESSION['login'];     
         echo'welcome :'. $name.'<br>';
         echo'<a href="signout.php">Signout</a>';
?>
