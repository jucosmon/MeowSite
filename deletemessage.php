<?php
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);
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
    <link rel="stylesheet" type="text/css" href="style.css?v=1" />
    <title>MeowSite: About</title>
</head>

<body>
    <nav>
        <div class="logo">
            <a href="index.php">
                <div>
                    <img src="img/smile (1).png" alt="Smiling Cat">
                    <p>MeowSite</p>
                </div>
            </a>
        </div>
        <ul class="nav-list">
            <li><a href="breeds.php">Breeds</a></li>

            <li><a href="about.php">About</a></li>
            <li><a href="account.php"><img src="img/cat-animal.png" alt="Cat Account logo" class="cat-profile"> </a>
            </li>
        </ul>
    </nav>
    <div class="delete-message">
        <div>
            <h1>Are you sure you want to delete your account?</h1>
            <div><a href="delete.php">
                    <h2>Yes</h2>
                </a>
                <a href="account.php">
                    <h2>No</h2>
                </a>
            </div>
        </div>
    </div>
</body>

</html>