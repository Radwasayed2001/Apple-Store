<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='style.css'>
    <link rel='stylesheet' href='main.css'>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">

    <title>Products</title>
    <style>
        .btn-primary{
            background-color: rgb(90, 200, 150);
            color: white;
            padding: 5px;
            font-family: 'Cairo',sans-serif;
        }
        .content{
    display: flex;
   flex-wrap: wrap;
   justify-content: space-around;
        }
        .btn-danger{
            background-color: brown;
            color: white;
            padding: 5px;
            font-family: 'Cairo',sans-serif;
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
            <a href='#'><img src='images/logo.png' class='logo'></a>
            
            <ul>
                <li><a href='../index.php'>Home</a></li>
                <li><a href='products.php'>Products</a></li>
                <li><a href='add.php'>Add new product</a></li>
                <li><a href='#'>About</a></li>
                <li><a href='#'>Contact</a></li>
            </ul>
        </header>
        <div class='content' id='products'>
            <?php
            include('config.php');
            $result= mysqli_query($conn,'SELECT * FROM products');
            while($row = mysqli_fetch_array($result)){
                echo
                "
                <center>
                    <main>
                        <div class='card' style='width: 18rem;background-color:white;'>
                            <img src='$row[image]' class='card-img-top'>
                                <div class='card-body'>
                                    <h3 class='card-title'>$row[name]</h3>
                                    <p class='card-text'>$row[price]</p>
                                    <a href='update.php?id=$row[id]' class='btn btn-primary'>Edit Product</a>
                                    <a href='delete.php?id=$row[id]' class='btn btn-danger'>Remove Product</a>
                                    
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