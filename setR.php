<?php
session_start();
// echo $_SESSION['loggedin']; 
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
    <div class="container" style="width:max-content;padding:20px;height: max-content;margin:auto;border:2px solid black">
       <p>Set a New Remainder</p>
       <div>
           <form method="POST" action="./backend/setrem.php">
            <label>Selcet a Date:</label>
            <input type="date" name="date"><br><br>
            <label>Subject :</label>
            <select name="subject">
                <option value="CS">CS</option>
                <option value="EC">EC</option>
                <option value="CIVIL">Civil</option>
                <option value="ECE">ECE</option>
            </select><br><br>   
            <label>Add description:</label>
            <input type="text" name="description"><br><br>
            <!-- <label>Email Address:</label>
            <input type="hidden" name="email"><br><br> -->
            <label>Contact No:</label>
            <input type="number" name="contact_no"><br><br>
            <label>SMS No::</label>
            <input type="number" name="sms_no"><br><br>
            <button class="btn btn-primary" type="submit">Confirm</button>   
        </form>
           <button class="btn btn-primary mt-4" ><a href="./dashboard.php" style="color:white;text-decoration: none;">Back</a></button>
           
           <a href="./logout.php">Log out</a>
       </div>
    </div>
</body>
</html>