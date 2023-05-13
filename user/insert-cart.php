<?php
include('../admin/config.php');
if (isset($_POST['add'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $user_id = $_POST['user_id'];
    $insert = "INSERT INTO cart(name,price,user_id)VALUES('$name','$price','$user_id');";
    mysqli_query($conn,$insert);
    header("location:cart.php?user_id=$user_id");
}

?>