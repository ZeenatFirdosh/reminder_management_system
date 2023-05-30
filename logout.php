<?php 
 session_start();
//  echo $_SESSION['loggedin'];
 unset($_SESSION["loggedin"]);
//  header('Location: ./login.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div style="width:500px;height:500px;margin: auto;border:2px solid black;text-align:center;">
        <h1 style="color:red;margin-top: 40%;" >You Are Logout</h1>
        <button class="btn btn-primary"><a href="./" style="color:white;text-decoration:none ;">Login</a></button>
    
    </div>
</body>
</html>