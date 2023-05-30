<?php 
session_start();
include 'connection.php';
$id=$_GET['id'];
$query = "Delete from remainders WHERE id=$id";
$res = mysqli_query($conn,$query);
if($res){
    header('Location: ../dashboard.php?deleted=true');
}else{
    echo 'something Went Wrong';
}
?>