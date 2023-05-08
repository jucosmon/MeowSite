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
  <h1 class="first-h">Good meowmeow
    <?php echo $user_data['nickname']; ?>!
  </h1>
  <a href="logout.php">Logout</a>
</body>

</html>