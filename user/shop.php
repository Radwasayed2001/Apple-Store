<?php
            include('../admin/config.php');
            $user_id = $_GET['user_id'];
            $result = mysqli_query($conn,"select * from user_info where id = $user_id;");
            $roww= mysqli_fetch_array($result);
            
            ?>
            
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='../admin/style.css'>
    <link rel='stylesheet' href='../admin/main.css'>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">

    <title>Products</title>
    <style>
        .btn-primary{
            background-color: rgb(90, 200, 150);
            color: white;
            padding: 5px;
            font-family: 'Cairo',sans-serif;
            padding-left: 30px;
            padding-right: 30px;
            margin-bottom: 5px;
        }
        .content{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        }
        h3{
            font-family: 'Cairo',sans-serif;
            font-weight: bold;
        }
        .card{
            height: 450px;
            margin: 10px;
        }
        .card img{
            padding: 10px;
            width: 90%;
            height: 300px;
        }
        main{
            width: 80%;
        }
        p{
            margin: 5px;
            font-weight: 900;
        }
    </style>
</head>
<body>
    <div class='container'>
        <header>
            <a href='#'><img src='../admin/images/logo.png' class='logo'></a>
            
            <ul>
                <li><a href='../index.php'>Home</a></li>
                <li><a href='../register.php'>LogOut</a></li>
                <li><a href='cart.php?user_id=<?php echo $_GET['user_id'] ?>'>MyCart</a></li>
                <li><a href='#' style="font-size: 24px;font-weight:bold;color:blanchedalmond;margin-right:0;"><?php echo $roww['name']; ?></a></li>
            </ul>
        </header>
        <div class='content' id='products'>
            <?php
            $result= mysqli_query($conn,'SELECT * FROM products');
            while($row = mysqli_fetch_array($result)){
                echo
                "
                <center>
                    <main>
                        <div class='card' style='width: 18rem;background-color:white;'>
                            <img src='../admin/$row[image]' class='card-img-top'>
                                <div class='card-body'>
                                    <h3 class='card-title'>$row[name]</h3>
                                    <p class='card-text'>$row[price]</p>
                                    <a href='val.php?id=$row[id]&user_id=$_GET[user_id]' class='btn btn-primary'>Add to card</a>
                                    
                                </div>
                        </div>
                    </main>
                </center>
                ";
            }
            ?>
                
            <?php
            ?>
        </div>
    </div >
    <script src='main.js'></script>
</body>

</html>