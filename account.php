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
    <div class="account-body">
        <div class="account-subbody">
            <div class="account-h1">
                <img src="img/cat (14).png" alt="">
                <h1>Your meowcount information</h1>
            </div>
            <div class="account-h2">
                <div>
                    <h2>Nickname:
                        <?php echo $user_data['nickname']; ?>
                    </h2>
                    <a href="newnickname.php"><img src="img/edit.png" alt=""></a>
                </div>
                <div>
                    <h2>Meowsername:
                        <?php echo $user_data['username']; ?>
                    </h2>
                    <a href="new_username.php"><img src="img/edit.png" alt=""></a>
                </div>
            </div>


            <div class="delete-button">
                <a href="logout.php"> <button>Logout Account</button> </a>
            </div>
            <div class="delete-button">
                <?php $username = $user_data['username'] ?>
                <a href="deletemessage.php"> <button>Delete Account</button></a>
            </div>
        </div>
    </div>

</body>

</html>