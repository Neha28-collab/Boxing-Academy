<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<html>
    <head>
        <title > Boxing In Shadow</title>
        <link rel="icon" type="image/x-icon" href="logo.png">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>



<body>
    <div id="home" class="back">
        <div class="overlay"></div>
    </div>
    
    <div class="midd">
        <h2> Where Champions Are Forged:</h2>
        <p>Register at Vijayawada's Exclusive Champion's Ring. </p><br>
        <h1 style="font-size: 3rem; color:#fff">Boxing In Shadow</h1>
    </div>
    
    <div class="mid">
        <div class="btn">
            <a class="simple" href="http://localhost/new_website/login.php" style="margin-left: 80px"> LOGIN </a>
            <a class="border" href="http://localhost/new_website/signup.php"> SIGNUP </a>
        </div>

    </div>


</body>

</html>    