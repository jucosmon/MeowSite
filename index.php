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
  <link rel="stylesheet" href="style.css" />
  <title>MeowSite</title>
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
      <li><a href="#">Breeds</a></li>
      <li><a href="#">Game</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#"><img src="img/cat-animal.png" alt="Cat Account logo" class="cat-profile"> </a></li>
    </ul>
  </nav>
  <div class="homepage-h1">
    <div>
      <h1 class="first-h">Good meowmeow
        <?php echo $user_data['nickname']; ?>!
      </h1>
      <img src="img/cat (11).png" alt="Cat cute pic">
    </div>
  </div>

  <a href="logout.php">Logout</a>

</body>

</html>