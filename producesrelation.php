<?php

mysql_connect ("localhost", "root", "m123") or die ("Could not connect");
mysql_select_db ("hiphop") or die ("No database selected");

$artistname = $_GET['name'];


$query = "SELECT * FROM ALBUMS WHERE artist_name= '$artistname'";
$result = mysql_query($query);


?>



<html>
<link rel="stylesheet" type="text/css" href="style.css">
<head>



</head>

<body>

    <table width = "200" border = "1" cellpadding = "1" cellspacing = "1">
    <tr>

        <th> Album Name </th>
        <th> Artist Name </th>
        <th> Release Date </th>
        <th> Runtime </th>
        <th> # of Tracks</th>
        <th> Delete </th>
        <th> Update </th>

    </tr>

    <?php

    while($album = mysql_fetch_assoc($result)){

        echo "<tr>";

        echo "<td><a href='containsrelation.php?name=" . $album['name'] . "'>".$album['name']."</td>";
        echo "<td>".$album['artist_name']."</td>";
        echo "<td>".$album['release_date']."</td>";
        echo "<td>".$album['runtime']."</td>";
        echo "<td>".$album['tracks']."</td>";
        echo "<td><a href='deletealbum.php?id=" . $album['id'] . "'>Delete</td>";
        echo "<td><a href='updatealbum.php?id=" . $album['id'] . 
        "&name=" . $album['name'] . 
        "&release_date=" . $album['release_date'] .
        "&runtime=" . $album['runtime'] .
        "&tracks=" . $album['tracks'] . 
        "&artist_name=" . $album['artist_name'] . "'>Update</td>";

        echo "</tr>";


    }

    ?>


    </table>

</body>

</html>