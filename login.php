<!DOCTYPE html>
<html>
<head>
        <title> Login Page </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <a href="home.php"> Home </a> <br>

</head>

<body>

    <div id="form">
        <form action = "loginprocess.php" method= "POST">
            <p>
                Hello!<br><br>
                <label>Username:</label>
                <input type = "text" id = "user" name = "user" placeholder = "Username" />
            </p>
            <p>
                <label>Password:</label>
                <input type = "password" id = "pass" name = "pass" placeholder = "Password" />
            </p>

                   <!--  Buttons --> 

            <p>
                <input type = "Submit" id = "loginbtn" name = "Submit" value = "Login" />
            </form>

            <form action = "register.php">
                <input type = "Submit" id = "registerbtn" name = "Submit" value = "Register" />
            </form>

            </p>
    </div>


</body>
</html>