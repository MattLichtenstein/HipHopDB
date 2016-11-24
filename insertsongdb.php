<?php 

mysql_connect ("localhost", "root", "m123") or die ("Could not connect");
mysql_select_db ("hiphop") or die ("No database selected");

$trackname = $_POST['trackname'];
$bbpeak = $_POST ['bbpeak'];
$features = $_POST ['features'];
$songlink = $_POST ['songlink'];
$lyricslink = $_POST ['lyricslink'];


mysql_query("INSERT INTO songs VALUES ('','$trackname', '$bbpeak','$features','$songlink', '$lyricslink')") or die ("Query could not be completed");

Echo "'$trackname' has been entered into the database"; 

?>

<br>
<a href="home.php"> Home </a> <br>
<a href="insertform.php"> Insert Again </a>