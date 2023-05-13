<?php

include('config.php');

if (isset($_POST['update'])){
$NAME = $_POST['name'];
$PRICE = $_POST['price'];
$IMAGE = $_FILES['image'];
$image_location = $_FILES['image']['tmp_name'];
$image_name = $_FILES['image']['name'];
$image_up = 'images/'.$image_name;
$id = $_GET['id'];
$update = "UPDATE `products` SET `name`='$NAME',`price`='$PRICE',`image`='$image_up' WHERE id = $id";
mysqli_query($conn,$update);
if (move_uploaded_file($image_location,'images/'.$image_name)){
    echo "<script>alert('uploded successfully')</script>";
    header('location: products.php');
}
else{
    echo "<script>alert('uploded failed')</script>";
}
}
?>