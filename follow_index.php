<?php  
session_start();
require_once "config.php";
$user_id = (int)$_SESSION["username_id"];
$user_not_follow = $_GET['id'];
$sql="INSERT INTO followers_following VALUES ($user_id, $user_not_follow)";
mysqli_query($conn,$sql);
header("location:index.php");
 ?> 