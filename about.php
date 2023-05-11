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
    <div id="catsleep">
        <img src="img/cat-99.png" alt="Cat sleeping">
    </div>
    <div class="about">
        <div>
            <h1>Welcome to our cat-themed website!</h1>
            <p> Get ready to dive into the fascinating world of cats with our diverse
                collection of content. Our cat website is a meow-gical destination that offers an abundance of
                delightful
                content for cat enthusiasts. Experience the joy of discovering random cat facts that will expand your
                knowledge and entertain you. Enjoy endless amusement with hilarious cat gifs and videos that are
                guaranteed to make you smile. But that's not all – our website also allows you to explore specific cat
                breeds. Simply search for a breed of your choice, and we'll provide you with detailed information about
                that
                breed. Whether you're seeking entertainment, education, or simply indulging your love for felines, our
                cat
                website has it all. <br><span>Get ready for an adventure filled with cat-related fun!</span></p>
        </div>
    </div>
    <div id="github">
        <a href="https://github.com/jucosmon/MeowSite" target="_blank"><img src="img/github.png" alt="Github Link"></a>
    </div>
</body>

</html>