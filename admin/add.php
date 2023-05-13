<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
        <header>
            <a href="#"><img src="images/logo.png" class="logo"></a>
            
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="add.php">Add new product</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </header>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
            <img src="download (1).png" alt="" class="front">
            <br>
            <input type = "text" name="name">
            <br>
            <input type = "text" name="price">
            <br>
            <input type = "file" id="file" name="image" style="display: none;">
            <label for="file">Upload image</label>
            <button name ='upload'>Save Product</button>
            <br><br>
            <a href="products.php">Show All products</a>
        </form>
        </div>
    </center>
</div>
</body>
</html>