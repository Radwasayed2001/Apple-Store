<?php

include('../admin/config.php');
$id = $_GET['id'];
$user =$_GET['user_id'];
$del = "DELETE FROM cart WHERE id = $id";
mysqli_query($conn,$del);
header("location:cart.php?user_id=$user");

?>