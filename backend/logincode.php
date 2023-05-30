<?php
    // error_reporting(0);
    session_start();
    include "connection.php";
    $email = $_POST['email'];
    $password=$_POST['password'];
    echo $email;
    echo $password;
    $query = "SELECT * from users where email='$email' and password='$password'";
    echo $query;
    $user = mysqli_query($conn,$query);
    // var_dump($user);
    $row = mysqli_fetch_array($user);
    // var_dump($row['email']);
    // echo $user['email'];
    if(mysqli_num_rows($user)>0)
    {
        echo "Users found";
        $_SESSION['loggedin']=$row['email'];
        header("Location: ../dashboard.php");
    }
    else{
        echo "User Not found";
        header("Location: ../loginFailed.php");
    }
?>