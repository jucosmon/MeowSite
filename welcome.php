<?php
session_start();
include("connection.php");
include("functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Galindo&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <title>MeowSite</title>
</head>

<body>
    <h1 class="first-h">Welcome to MeowSite</h1>
    <img src="img/smile (1).png" alt="Smiling Cat" class="first-cat" />
    <h2 class="first-h">Are you a new meowser?</h2>
    <div class="buttons">
        <a href="signup.php"><button id="first_button">Yes</button></a>
        <a href="login.php"><button id="first_button">No</button></a>
    </div>
    <div class="bottom-cats">
        <img src="img/cat (3).png" alt="Cat sitting" id="cat1" />
        <img src="img/cat (3).png" alt="Cat sitting" id="cat2" />
    </div>
</body>

</html>