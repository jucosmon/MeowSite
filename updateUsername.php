<?php
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);

$username = $user_data['username'];
$newUsername = $_POST['username'];

//
$query = "SELECT * FROM users WHERE username = '$newUsername'";
$result = mysqli_query($con, $query);

//checking if the new username already exist
if ($result->num_rows > 0) {
    echo "<br><a href=" . 'account.php' . ">Go back</a>";
    echo "<br><br><center>Sorry <b>$newUsername</b> meowsername already exists :< </center>";
    echo "<br><br><center><a href=" . 'new_username.php' . ">Enter again </a></center>";


} else {
    // Username is valid and unique

    // Update the nickname in the database
    $query = "UPDATE users SET username = '$newUsername' WHERE username = '$username'";
    $result = mysqli_query($con, $query);


    if ($result) {
        $_SESSION['username'] = $newUsername;
        header("Location: account.php");
        die;
    } else {
        echo "Error updating nickname: " . mysqli_error($con);
    }
}