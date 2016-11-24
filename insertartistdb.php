<?php 


mysql_connect ("localhost", "root", "m123") or die ("Could not connect");
mysql_select_db ("hiphop") or die ("No database selected");

$artistname = $_POST['artistname'];


mysql_query("INSERT INTO artists VALUES ('','$artistname')") or die ("Query could not be completed");

Echo "'$artistname' has been entered into the database"; 

?>
<br>
<a href="home.php"> Home </a> <br>
<a href="insertform.php"> Insert Again </a>