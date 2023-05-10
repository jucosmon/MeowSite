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
    <title>MeowSite: Cat Breeds</title>
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
            <li><a href="#">Game</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="account.php"><img src="img/cat-animal.png" alt="Cat Account logo" class="cat-profile"> </a>
            </li>
        </ul>
    </nav>
    <div class="breed-contents">
        <div id="catbreed-body">
            <div class="catbreed-h1">
                <img src="img/cat (10).png" alt="" />
                <h1>Whisker Wizardry!</h1>
            </div>
            <div class="catbreed-maindiv">

                <form action="" method="GET" class="search-form">
                    <input type="text" name="breed" class="input-field" placeholder="Enter a cat breed" />
                    <div class="catbreed-submit"><input type="submit" value="Search" /></div>
                </form>
            </div>
        </div>

        <div class="result">
            <div>
                <?php
                if (isset($_GET['breed'])) {
                    $breed = urlencode($_GET['breed']);

                    $apiUrl = "https://api.thecatapi.com/v1/breeds/search?q={$breed}";
                    $response = file_get_contents($apiUrl);
                    $data = json_decode($response, true);



                    if (!empty($data)) {
                        // Breed found, display the information
                        $breedName = $data[0]['name'];
                        $description = $data[0]['description'];
                        $temperament = $data[0]['temperament'];
                        $origin = $data[0]['origin'];
                        $lifeSpan = $data[0]['life_span'];
                        $adaptability = $data[0]['adaptability'];
                        $affectionLevel = $data[0]['affection_level'];
                        $childFriendly = $data[0]['child_friendly'];
                        $dogFriendly = $data[0]['dog_friendly'];
                        $intelligence = $data[0]['intelligence'];
                        $altNames = $data[0]['alt_names'];

                        $breedId = $data[0]['id'];
                        $imagesEndpoint = "https://api.thecatapi.com/v1/images/search?breed_id=" . $breedId;
                        $response = file_get_contents($imagesEndpoint);
                        $data = json_decode($response, true);

                        $imageUrl = $data[0]['url'];

                        echo "<h2 id=" . 'breedName' . ">{$breedName}</h2>";
                        echo '<img src="' . $imageUrl . '" alt="Cat Breed Image" class= "img-breed">';
                        echo "<p>{$description}</p>";
                        echo "<div class='breed-list'><ul id='breedList'><li>Temperament: {$temperament}</li>
                        <li>Alternative Names: {$altNames}</li>
                        <li>Origin: {$origin}</li>
                        <li>Life Span: {$lifeSpan} years</li>
                        <li>Adaptability Level: {$adaptability}</li>
                        <li>Affectionate Level: {$affectionLevel}</li>
                        <li>Child Friendly Level: {$childFriendly}</li>
                        <li>Dog Friendly Level: {$dogFriendly}</li>
                        <li>Intelligence Level: {$intelligence}</li>
                        
                        </ul>
                        </div>"
                        ;



                    } else {
                        // Breed not found
                        echo "{$breed} cat breed doesn't exist";
                    }
                }
                ?>
            </div>

        </div>
    </div>
</body>

</html>