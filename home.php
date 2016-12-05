<!doctype html>
<link rel="stylesheet" type="text/css" href="style.css">
<html>
    
    <head>
        <title> HipHopDB </title>
    </head>


    

        <h2> HIP HOP DATABASE  </h2>

         <div id = "loginalign">
            <a href="login.php"> Login </a>
        </div> 

        <br><br>

        Edit Database:
        <div id = "insertalign">
            <a href="insertform.php"> Insert into database </a>
        </div> 

        <br>
        <br>

        View Data:

        <div id = "artistalign">
            <a href="displayartists.php"> List of Artists </a>
        </div>    

        <div id = "albumalign">
            <a href="displayalbums.php"> List of Albums </a>
        </div>    

        <div id = "songalign">
            <a href="displaysongs.php"> List of Songs </a>
        </div>    

        <br><br>

    
        <form action="searchdb.php" method = "POST">
          Search:<br>
          <input type="text" name="search" id = "search" placeholder= "i.e. Kanye West, Yeezus">
          <br>
          <input type="submit" value="Search">
        </form>



    </body>
    



</html>