<?php
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);

// Fetch random cat GIF from the Cat API
$endpoint = "https://api.thecatapi.com/v1/images/search?mime_types=gif";
$catGifData = file_get_contents($endpoint);
$catGifData = json_decode($catGifData, true);

// Extract the GIF URL
$gifUrl = $catGifData[0]['url'];
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

  <div class="random-facts">
    <div>
      <img src="img/anal-gland-expression.png" alt="Funny cat back">
      <h2>Kitty Trivia</h2>
    </div>
    <p>
      <?php
      // Fetch random cat fact from the API
      $apiEndpoint = "https://meowfacts.herokuapp.com/";
      $catFactData = file_get_contents($apiEndpoint);

      // Decode the JSON response
      $catFact = json_decode($catFactData, true);

      // Extract the cat fact text
      $factText = $catFact['data'][0];

      // Display the cat fact
      echo $factText;
      ?>
    </p>
    <img src="<?php echo $gifUrl; ?>" alt="Random Cat gif" id="cat-gif">

    <div class="buttons">
      <a href="#"><button id="paw"> <img src="img/pets.png" alt="Paw" id="paw-img"> </button></a>
      <a href="index.php"><button id="first_button">Next</button></a>
    </div>
  </div>

  <a href="logout.php">Logout</a>

</body>

</html>