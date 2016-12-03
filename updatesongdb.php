<?php

mysql_connect ("localhost", "root", "m123") or die ("Could not connect");
mysql_select_db ("hiphop") or die ("No database selected");

$id = $_POST['id'];
$songname = $_POST['songname'];
$albumname = $_POST['albumname'];
$artistname = $_POST['artistname'];
$billboard = $_POST['billboard'];
$features = $_POST['features'];
$songlink = $_POST['songlink'];
$lyriclink = $_POST['lyriclink'];

    $query = "UPDATE songs SET track_name= '$songname' , billboard_peak='$billboard' , features='$features' , song_link='$songlink' , lyric_link='$lyriclink' , album_name='$albumname' , artist_name='$artistname' WHERE id='$id'";
    $result = mysql_query($query);

    echo "Song data for $songname has been update" 


?>



<br>
<a href="home.php"> Home </a> <br>
<a href="displaysongs.php"> Back to Songs </a><link rel="stylesheet" type="text/css" href="style.css">