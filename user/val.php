
<?php


include('../admin/config.php');
$id = $_GET['id'];
$up = mysqli_query($conn,"SELECT * FROM products WHERE id = $id");
$data = mysqli_fetch_array($up);
$user_id = $_GET['user_id'];
            $result = mysqli_query($conn,"select * from user_info where id = $user_id;");
            $roww= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='../admin/style.css'>
    <link rel='stylesheet' href='../admin/main.css'>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <title>Confirm Page</title>
    <style>
        input{
            display:none;
        }
    </style>
</head>
<body>
<div class='container'>
        <header>
            <a href='#'><img src='../admin/images/logo.png' class='logo'></a>
            
            <ul>
                <li><a href='card.php' class="card" style="background-color:rgb(20,20,20);padding:10px;">Go To MY Card</a></li>
                
                <li><a href='#' style="font-size: 24px;font-weight:bold;color:blanchedalmond;margin-right:0;"><?php echo $roww['name']; ?></a></li>
            </ul>
        </header>
        <center>
            <div class="main">
                <form action="insert-cart.php" method="post">
                    <h2 style="color:white;margin:15px;">Do you really want to buy this Product?</h2>
                    <input type="text" name = "id" value="<?php echo $data['id'] ?>">
                    <input type="text" name = "user_id" value = "<?php echo $_GET['user_id'] ?>">
                    <input type="text" name = "name" value="<?php echo $data['name'] ?>">
                    <input type="text" name = "price" value="<?php echo $data['price'] ?>">
                    <button name="add" type="submit" class="btn btn-warning">Confirm</button>
                    <a href="shop.php?user_id=<?php echo $_GET['user_id'] ?>">Back to Products Page</a>
                </form>
            </div>
        </center>
    </div >
</body>
</html>