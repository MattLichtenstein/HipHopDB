<?php 


mysql_connect ("localhost", "root", "m123") or die ("Could not connect");
mysql_select_db ("hiphop") or die ("No database selected");

$albumname = $_POST['albumname'];
$artistname = $_POST['artistname'];
$releasedate = $_POST ['releasedate'];
$runtime = $_POST ['runtime'];
$numoftracks = $_POST ['numoftracks'];



mysql_query("INSERT INTO albums VALUES ('','$albumname', '$releasedate','$runtime','$numoftracks', '$artistname')") or die ("Query could not be completed");

Echo "'$albumname' by '$artistname' has been entered into the database"; 

?>
<link rel="stylesheet" type="text/css" href="style.css">

<br>
<a href="home.php"> Home </a> <br>
<a href="insertform.php"> Insert Again </a>