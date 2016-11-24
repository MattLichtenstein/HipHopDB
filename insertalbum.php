
<form action="insertalbumdb.php" method = "POST">
  Album name:
  <input type="text" name="albumname" id = "albumname">
  <br>
  Release Date:
  <input type="text" name="releasedate" id = "releasedate" placeholder = "MM/DD/YYYY">
  <br>
  Runtime:
  <input type="text" name="runtime" id = "runtime" placeholder = "HH:MM:SS">
  <br>
  # of Tracks:
  <input type="text" name="numoftracks" id = "numoftracks">
  <br>
  <input type="submit" value="Insert into database">
</form> 