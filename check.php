<?php
include('../admin/config.php');
if (isset($_POST['add'])){
    if ($_POST['pass']=="123456")
        header('location:./admin/products.php');
    else
    {
        header('location:index.php');
    }
}

?>