<?php

mysql_connect ("localhost", "root", "m123") or die ("Could not connect");
mysql_select_db ("hiphop") or die ("No database selected");

$id = $_GET['id'];


    $query = "DELETE FROM albums WHERE id = '$id' ";
    $result = mysql_query($query);

     echo "Row deleted from table";

?>

<br>
<a href="home.php"> Home </a> <br>
<a href="displayalbums.php"> Back to Albums </a>