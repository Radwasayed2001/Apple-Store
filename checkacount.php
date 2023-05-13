<?php
$flag = false;
$user_id;
include('./admin/config.php');
$result = mysqli_query($conn,"select * from user_info;");
if (isset($_POST['signin'])){
    while($row = mysqli_fetch_array($result))
    {
        if ($row['password']==$_POST['password'])
        {
            if ($row['email']==$_POST['email']){
            $flag = true;
            $user_id=$row['id'];
            }
        }
    }
    if ($flag)
        header("location:./user/shop.php?user_id=$user_id");
    else
    {
        header('location:signin.php');
    }
}

?>