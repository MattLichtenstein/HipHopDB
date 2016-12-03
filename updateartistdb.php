<?php

mysql_connect ("localhost", "root", "m123") or die ("Could not connect");
mysql_select_db ("hiphop") or die ("No database selected");

$artistname = $_POST['artistname'];
$id = $_POST['id'];


    $query = "UPDATE artists SET name= '$artistname' WHERE id='$id'";
    $result = mysql_query($query);

echo "Artist data for $artistname has been update" 


?>

<link rel="stylesheet" type="text/css" href="style.css">

<br>
<a href="home.php"> Home </a> <br>
<a href="displayartists.php"> Back to Artists </a>