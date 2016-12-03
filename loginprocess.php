<?php


mysql_connect ("localhost", "root", "m123") or die ("Could not connect");
mysql_select_db ("hiphop") or die ("No database selected");


    $username = $_POST['user'];
    $password = $_POST['pass'];

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);


    $result = mysql_query("SELECT * FROM users WHERE username = '$username' and password = '$password'")
    or die("Unable to find matching username and password" );

    $row = mysql_fetch_array($result);

    if($row['username'] == $username && $row['password'] == $password) {
        echo "Login Successful!!! Welcome back ".
        $row['username'];
        
    }
    else
        echo "Login Failed";


?>

<link rel="stylesheet" type="text/css" href="style.css">