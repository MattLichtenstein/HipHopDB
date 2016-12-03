<?php

mysql_connect ("localhost", "root", "m123") or die ("Could not connect");
mysql_select_db ("hiphop") or die ("No database selected");

$id = $_POST['id'];
$albumname = $_POST['albumname'];
$releasedate = $_POST['releasedate'];
$runtime = $_POST['runtime'];
$tracks = $_POST['tracks'];
$artistname = $_POST['artistname'];


    $query = "UPDATE albums SET name= '$albumname' , release_date='$releasedate' , runtime='$runtime' , tracks='$tracks' , artist_name='$artistname' WHERE id='$id'";
    $result = mysql_query($query);

    echo "Album data for $albumname has been update" 


?>

<link rel="stylesheet" type="text/css" href="style.css">

<br>
<a href="home.php"> Home </a> <br>
<a href="displayalbums.php"> Back to Albums </a>