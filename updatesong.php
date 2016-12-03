<?php

mysql_connect ("localhost", "root", "m123") or die ("Could not connect");
mysql_select_db ("hiphop") or die ("No database selected");

$id = $_GET['id'];
$songname = $_GET['track_name'];
$albumname = $_GET['album_name'];
$artistname = $_GET['artist_name'];
$billboard = $_GET['billboard_peak'];
$features = $_GET['features'];
$songlink = $_GET['song_link'];
$lyriclink = $_GET['lyric_link'];


?>

<link rel="stylesheet" type="text/css" href="style.css">

<form action="updatesongdb.php" method = "POST">
    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
    Song Name:
    <input type="text" name="songname" id = "songname" value ="<?php echo $songname; ?>">
    <br>
    Album Name:
    <input type="text" name="albumname" id = "albumnam" value ="<?php echo $albumname; ?>">
    <br>
    Artist Name:
    <input type="text" name="artistname" id = "artistname" value ="<?php echo $artistname; ?>">
    <br>
    Billboard Peak Position:
    <input type="text" name="billboard" id = "billboard" value ="<?php echo $billboard; ?>">
    <br>
    Featured Artists:
    <input type="text" name="features" id = "features" value ="<?php echo $features; ?>">
    <br>
    Link to Song:
    <input type="text" name="songlink" id = "songlink" value ="<?php echo $songlink; ?>">
    <br>
    Link to Lyrics:
    <input type="text" name="lyriclink" id = "lyriclink" value ="<?php echo $lyriclink; ?>">
    <br>


  <input type="submit" value="Update">
</form> 