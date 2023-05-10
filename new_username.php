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
    <title>MeowSite: Log in</title>
</head>

<body>

    <div id="signup-body">

        <div class="second-maindiv">
            <a href="account.php">
                <h1>Cancel</h1>
            </a>
            <div class="second-mainh2">
                <div class="second-h2">
                    <h2>What's your meowsername?</h2>
                    <img src="img/cozy.png" alt="" />
                </div>
            </div>
            <form action="updateUsername.php" method="post">
                <input type="text" name="username" class="input-field" />
                <div class="second-submit"><input type="submit" value="Submit" /></div>
            </form>
        </div>
    </div>
</body>

</html>