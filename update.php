<?php
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);

$username = $user_data['username'];
$newNickname = $_POST['nickname'];

// Update the nickname in the database
$query = "UPDATE users SET nickname = '$newNickname' WHERE username = '$username'";
$result = mysqli_query($con, $query);

if ($result) {
    header("Location: account.php");
    die;
} else {
    echo "Error updating nickname: " . mysqli_error($con);
}