<?php

mysql_connect ("localhost", "root", "m123") or die ("Could not connect");
mysql_select_db ("hiphop") or die ("No database selected");

$id = $_GET['id'];
$name = $_GET['name'];
$releasedate = $_GET['release_date'];
$runtime = $_GET['runtime'];
$tracks = $_GET['tracks'];
$artistname = $_GET['artist_name'];


?>

<link rel="stylesheet" type="text/css" href="style.css">


<form action="updatealbumdb.php" method = "POST">
    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
      Album Name:
    <input type="text" name="albumname" id = "albumname" value ="<?php echo $name; ?>">
    <br>
    Artist Name:
    <input type="text" name="artistname" id = "artistname" value ="<?php echo $artistname; ?>">
    <br>
    Release Date:
    <input type="text" name="releasedate" id = "releasedate" value ="<?php echo $releasedate; ?>">
    <br>
    Runtime:
    <input type="text" name="runtime" id = "runtime" value ="<?php echo $runtime; ?>">
    <br>
    # of Tracks:
    <input type="text" name="tracks" id = "tracks" value ="<?php echo $tracks; ?>">
    <br>


  <input type="submit" value="Update">
</form> 