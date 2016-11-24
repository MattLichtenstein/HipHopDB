<?php

session_start();

mysql_connect ("localhost", "root", "m123") or die ("Could not connect");
mysql_select_db ("hiphop") or die ("No database selected");

$username = $_POST['username'];
$password = $_POST['password'];
$first = $_POST['first_name'];
$last = $_POST['last_name'];

$sql = "INSERT INTO users (username, password, first_name, last_name) VALUES ('$username', '$password', '$first', '$last')";

$result = mysql_query($sql);

header("Location: login.php");

?>