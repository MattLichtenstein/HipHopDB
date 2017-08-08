<?php

$usern = 'root';
$passw = 'm123';
$db = 'hiphop';
$host = 'localhost';

$connect = mysqli_connect("$host","$usern","$passw") or die ("Could not connect to MySQL");
//@mysql_select_db("$db") or die ("no database");

?>
