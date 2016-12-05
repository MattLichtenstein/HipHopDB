<?php
mysql_connect ("localhost", "root", "m123") or die ("Could not connect");
mysql_select_db ("hiphop") or die ("No database selected");

$searchquery = $_POST['search'];

echo "Showing Results For: \"$searchquery\"" . "<br><br><br>";


$sqlartist = "SELECT * FROM artists WHERE name LIKE '%$searchquery%'";
$recordartist = mysql_query($sqlartist);


$sqlalbum = "SELECT * FROM albums WHERE name LIKE '%$searchquery%' UNION SELECT * FROM albums WHERE artist_name LIKE '%$searchquery%'";
$recordalbum = mysql_query($sqlalbum);


$sqlsong = "SELECT * FROM songs WHERE track_name LIKE '%$searchquery%' UNION SELECT * FROM songs WHERE artist_name LIKE '%$searchquery%' UNION SELECT * FROM songs WHERE album_name LIKE '%$searchquery%' ";
$recordsong = mysql_query($sqlsong);

$sqlfeature = "SELECT * FROM songs WHERE features LIKE '%$searchquery%'";
$recordfeature = mysql_query($sqlfeature);

$songandalbum = "SELECT track_name, name, runtime, tracks FROM songs INNER JOIN albums ON (name = album_name)  WHERE track_name LIKE '%$searchquery%'";
$recordsongandalbum = mysql_query($songandalbum)

?>



<link rel="stylesheet" type="text/css" href="style.css">

<form action="searchdb.php" method = "POST">
         <strong>Search Again</strong> <br>
          <input type="text" name="search" id = "search" placeholder= "i.e. Kanye West, Yeezus">
          <input type="submit" value="Search">
        </form><br>

<br>
<div style="text-align: right;">
<a href="home.php"> Home </a> <br>
</div>
<br>

<html>

<strong>Artists:</strong>

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

    while($artist = mysql_fetch_assoc($recordartist)){

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




<html>

<br><strong>Albums:</strong>

<head>



</head>

<body>

    <table width = "500" border = "1" cellpadding = "1" cellspacing = "1">
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

    while($album = mysql_fetch_assoc($recordalbum)){

        echo "<tr>";

echo "<td><a href='containsrelation.php?name=" . $album['name'] . "'>".$album['name']."</td>";
       echo "<td><a href='producesrelation.php?name=" . $album['artist_name'] . "'>".$album['artist_name']."</td>";
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




<html>

<br><strong>Songs:</strong>

<head>



</head>

<body>

    <table width = "800" border = "1" cellpadding = "5" cellspacing = "1">
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

    while($song = mysql_fetch_assoc($recordsong)){

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

<html>

<br><strong>Features:</strong>

<head>



</head>

<body>

    <table width = "800" border = "1" cellpadding = "5" cellspacing = "1">
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

    while($song = mysql_fetch_assoc($recordfeature)){

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



<html>

<br><strong>Songs with Album Information:</strong>

<head>



</head>

<body>

    <table width = "800" border = "1" cellpadding = "5" cellspacing = "1">
    <tr>

        <th> Track Name </th>
        <th> Album Name </th>
        <th> Runtime </th>
        <th> # of Tracks </th>
    
    </tr>

    <?php

    while($songandalbums = mysql_fetch_assoc($recordsongandalbum)){

        echo "<tr>";

        echo "<td>".$songandalbums['track_name']."</td>";
echo "<td><a href='containsrelation.php?name=" . $songandalbums['name'] . "'>".$songandalbums['name']."</td>";
        echo "<td>".$songandalbums['runtime']."</td>";
        echo "<td>".$songandalbums['tracks']."</td>";
  
         echo "</tr>";


    }

    ?>


    </table>

</body>

</html>







<html>
<br><br>
<form action="searchdb.php" method = "POST">
         <strong>Search Again</strong> <br>
          <input type="text" name="search" id = "search" placeholder= "i.e. Kanye West, Yeezus">
          <input type="submit" value="Search">
        </form><br>

<br><br>
Didn't find what you were looking for? Search the Web!
<br><br>


<table class="tborder" cellpadding="$stylevar[cellpadding]" cellspacing="$stylevar[cellspacing]" border="0" width="100%" align="center">
 <tr>
  <td class="thead" width="100%">
   <div style="text-align: left;">
    <strong>YouTube Search</strong>
   </div>
  </td>
 </tr>
 <tr>
  <td class="alt1" width="100%">
  <div class="smallfont" style="text-align: left;">
   <form id="vb_yt_search-form" action="http://www.youtube.com/results" method="get" target="_blank">
    <input id="vb_yt_search-term" name="search_query" type="text" value ="<?php echo $searchquery; ?>" />
    <select name="search_type">
     <option value="" >Videos</option>
     <option value="search_users">Channels</option>
    </select>
    <input type="submit" value="Search" />
   </form>
  </div>
  </td>
 </tr>

</table>
</html>


<html>

<form action= "http://www.wikipedia.org/search-redirect.php" method="get" target="_blank">
<div style="text-align: left;">
    <strong>Wikipedia Search</strong>
   </div>
<input type="hidden" name="language" value="en" />
<input type="text" name="search" size="20" value= "<?php echo $searchquery ?>" />
<input type="submit" value=" Search " />
</form>

</html>



<html>
<div style="text-align: left;">
<strong>Google Search</strong>
   </div>
<form target="_blank" action="http://www.google.com/search"> <input type="text" name="q" value="<?php echo $searchquery ?>" <div style="text-align: left;"> <input type="submit" value="Search" /> 
</form>


</html>





