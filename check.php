<?php
include('../admin/config.php');
if (isset($_POST['add'])){
    if ($_POST['pass']=="")
        header('location:./admin/products.php');
    else
    {
        header('location:index.php');
    }
}

?>
