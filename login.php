<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  //something was posted
  $username = $_POST['username'];

  if (!empty($username) && !is_numeric($username)) {

    //READ  DATABASE
    $query = "Select * from users where username = '$username' limit 1";

    $result = mysqli_query($con, $query);
    if ($result) {
      if ($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);
        if ($user_data['username'] === $username) {
          $_SESSION['username'] = $user_data['username'];
          header("Location: index.php");
          die;
        }
      }
    }
    echo "Wrong meowsername";
  } else {
    echo "Please enter some valid information!";
  }
}
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
  <title>MeowSite: Log in</title>
</head>

<body>
  <div id="signup-body">
    <div class="second-maindiv">
      <div class="second-h1">
        <img src="img/work-from-home.png" alt="" />
        <h1>Welcome back meowser!</h1>
      </div>
      <div class="second-mainh2">
        <div class="second-h2">
          <h2>What's your meowsername?</h2>
          <img src="img/what.png" alt="" />
        </div>
      </div>
      <form method="post">
        <input type="text" name="username" class="input-field" />
        <div class="second-submit"><input type="submit" value="Submit" /></div>
      </form>
    </div>
  </div>
</body>

</html>