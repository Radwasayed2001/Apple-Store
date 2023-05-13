<?php
            include('../admin/config.php');
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
    <title>MyCart</title>
    <style>
        h1{
            font-family:'Cairo' , sans-serif;
            font-weight: bold;
            color:white;
        }
        .main{
            width: 40%;
            margin-top: 30px;
            color:white;
        }
        .table{
            width: 100%;
            align-items: center;
            color:white;
            padding: 3px;
            font-family: 'Cairo',sans-serif;
            font-size: 20px;
            font-weight: bold;
        }
        th, td {
            text-align: center;
        }
        .btn-danger{
            background-color: brown;
            color: white;
            padding: 5px;
            margin: 5px;
            font-family: 'Cairo',sans-serif;
            
        }
        thead{
            margin: 10px;
        }
    </style>
</head>
<body>
    <?php
    $User_id = $_GET['user_id'];
    $result = mysqli_query($conn,"SELECT * FROM cart WHERE user_id=$User_id;");
    ?>
    <div class='container'>
        <header>
            <a href='#'><img src='../admin/images/logo.png' class='logo'></a>
            
            <ul>
                
                <li><a href="shop.php?user_id=<?php echo $_GET['user_id']?>" style="background-color:none;color:brown;padding:10px;font-family: 'Cairo',sans-serif;font-size:30px;font-weight:bold;">Back</a></li>
                <li><a href='#' style="font-size: 24px;font-weight:bold;color:blanchedalmond;margin-right:0;"><?php echo $roww['name']; ?></a></li>
            
            </ul>
        </header>
        <center>
        <h1>Products</h1>
                <?php
                while($row = mysqli_fetch_array($result)){
                ?>
        <div class="main">
            <table class="table">
                <thead style="font-size: 25px;font-weight:bold;color:antiquewhite;">
                    <tr>
                        <th>Product Name <hr ></th>
                        <th>Product Price <hr></th>
                        <th>Delete Product <hr></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['price'];?></td>
                        <td class="btn btn-danger"><a href="delete.php?id=<?php echo $row['id'];?>&user_id=<?php echo $row['user_id'];?>"style="color:white;">Delete</a></td>
                    </tr>
                </tbody>
                
            </table>
                </div><?php }?>
    </center>
    </div >
    
</body>
</html>