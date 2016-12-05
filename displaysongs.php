<?php
mysql_connect ("localhost", "root", "m123") or die ("Could not connect");
mysql_select_db ("hiphop") or die ("No database selected");

$sql = "SELECT * FROM songs";

$record = mysql_query($sql);


?>

<html>
<link rel="stylesheet" type="text/css" href="style.css">
<head>



</head>

<body>

    <table width = "100" border = "1" cellpadding = "5" cellspacing = "1">
    <tr>

        <th> Track Name </th>
        <th> Album Name </th>
        <th> Artist Name </th>
        <th> Billbord Peak Position </th>
        <th> Featured Artists </th>
        <th> Link to Song</th>
        <th> Link to lyrics</th>
        <th> Delete </th>
        <th> Update </th>

    </tr>

    <?php

    while($song = mysql_fetch_assoc($record)){

        echo "<tr>";

        echo "<td>".$song['track_name']."</td>";
echo "<td><a href='containsrelation.php?name=" . $song['album_name'] . "'>".$song['album_name']."</td>";
       echo "<td><a href='producesrelation.php?name=" . $song['artist_name'] . "'>".$song['artist_name']."</td>";
        echo "<td>".$song['billboard_peak']."</td>";
        echo "<td>".$song['features']."</td>";
        echo "<td><a href=\"" . $song['song_link'] . "\">Youtube"; 
        echo "<td><a href=\"" . $song['lyric_link'] . "\">RapGenius";
        echo "<td><a href='deletesong.php?id=" . $song['id'] . "'>Delete</td>";
        echo "<td><a href='updatesong.php?id=" . $song['id'] . 
        "&track_name=" . $song['track_name'] . 
        "&billboard_peak=" . $song['billboard_peak'] .
        "&features=" . $song['features'] . 
        "&song_link=" . $song['song_link'] .
        "&lyric_link=" . $song['lyric_link'] . 
        "&artist_name=" . $song['artist_name'] .
        "&album_name=" . $song['album_name'] . "'>Update</td>";
        echo "</tr>";


    }

    ?>


    </table>

</body>

</html>