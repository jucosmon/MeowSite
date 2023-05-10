<?php
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);

$username = $user_data['username'];

$query = "delete from users where username='$username'";
$result = mysqli_query($con, $query);

if ($result) {
    header("Location: welcome.php");
    die;

} else {
    die;
}