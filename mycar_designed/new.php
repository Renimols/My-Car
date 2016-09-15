<?php

mysql_connect("localhost","username","password");
mysql_select_db("database");

if(!empty($_GET['q'])){
$query=mysql_real_escape_string(trim($_GET['q']));
$searchSQL="SELECT * FROM links WHERE `title` LIKE '%{$query}%'  LIMIT 8";
$searchResult=mysql_query($searchSQL);

while ($row=mysql_fetch_assoc($searchResult)){
    $results[]="<div class='webresult'><div class='title'><a href='{$row['url']}'>{$row['title']}</a></div><div class='desc'>{$row['description']}</div><div class='url'>{$row['url']}</div></div>";
}

echo implode($results);
}

?>

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
