<?php
mysql_connect ("localhost", "root", "m123") or die ("Could not connect");
mysql_select_db ("hiphop") or die ("No database selected");

$sql = "SELECT * FROM artists";

$record = mysql_query($sql);


?>

<html>
<link rel="stylesheet" type="text/css" href="style.css">
<head>



</head>

<body>

    <table width = "100" border = "1" cellpadding = "1" cellspacing = "1">
    <tr>

        <th> Name </th>
        <th> Delete </th>
        <th> Update </th>

    </tr>

    <?php

    while($artist = mysql_fetch_assoc($record)){

        echo "<tr>";

        echo "<td><a href='producesrelation.php?name=" . $artist['name'] . "'>".$artist['name']."</td>";
        echo "<td><a href='deleteartist.php?id=" . $artist['id'] . "'>Delete</td>";
        echo "<td><a href='updateartist.php?id=" . $artist['id'] . "&name=" . $artist['name'] . "'>Update</td>";
       
        echo "</tr>";


    }

    ?>



    </table>

</body>

</html>