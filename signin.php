<!DOCTYPE html>
<html lang="en">
<head>
<meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='./admin/style.css'>
    <link rel='stylesheet' href='./admin/main.css'>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <title>Confirm Page</title>
    <style>
        
    </style>
</head>
<body>
<div class='container'>
        <header>
            <a href='#'><img src='./admin/images/logo.png' class='logo'></a>
            
            <ul>
                <li><a href='./index.php' class="card" style="background-color:rgb(20,20,20);padding:10px;">Home</a></li>
            </ul>
        </header>
        <center>
            <div class="main">
                <form action="checkacount.php" method="post">
                    <h3 style="color:white;margin:15px;">Enter The Email:</h3>
                    <input type="text" name = "email" >
                    
                    <h3 style="color:white;margin:15px;">Enter The Passward:</h3>
                    <input type="password" name = "password" >

                    <button name="signin" type="submit" class="btn btn-warning">Sign in</button>
                    <a href="register.php"style="margin-left:10px">Sign UP</a>
                </form>
            </div>
        </center>
    </div >
</body>
</html>