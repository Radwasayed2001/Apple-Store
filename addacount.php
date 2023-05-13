<?php

include('./admin/config.php');
$username = $_POST['username'];
$userpass = $_POST['userpass'];
$useremail = $_POST['useremail'];
$insert = "INSERT INTO user_info (name,email,password) VALUES ('$username','$useremail','$userpass');";
mysqli_query($conn,$insert);
header('location:signin.php');
?>