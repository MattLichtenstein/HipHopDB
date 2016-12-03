<?php

mysql_connect ("localhost", "root", "m123") or die ("Could not connect");
mysql_select_db ("hiphop") or die ("No database selected");

$name = $_GET['name'];
$id = $_GET['id'];


?>

<link rel="stylesheet" type="text/css" href="style.css">

<form action="updateartistdb.php" method = "POST">
  Artist name:<br>
  <input type="text" name="artistname" id = "artistname" value ="<?php echo $name; ?>">
  <br>
  <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
  <input type="submit" value="Update">
</form> 

