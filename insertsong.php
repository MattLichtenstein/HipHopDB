<link rel="stylesheet" type="text/css" href="style.css">


<form action="insertsongdb.php" method = "POST">
  Song Name:
  <input type="text" name="trackname" id = "trackname">
  <br>
  Album Name:
  <input type="text" name="albumname" id = "albumname">
  <br>
  Artist Name:
  <input type="text" name="artistname" id = "artistname">
  <br>
  BillBoard Peak Position:
  <input type="text" name="bbpeak" id = "bbpeak">
  <br>
  Features:
  <input type="text" name="features" id = "features">
  <br>
  Song Link:
  <input type="text" name="songlink" id = "songlink">
  <br>
  Lyrics Link:
  <input type="text" name="lyricslink" id = "lyricslink">
  <br>
  <input type="submit" value="Insert into database">
</form> 