<?php 
error_reporting(0);
session_start();
require "connection.php";

    $email = $_SESSION['loggedin'];
    $date = $_POST['date'];
    $subject = $_POST['subject'];
    $description = $_POST['description'];
    $contact_no = $_POST['contact_no'];
    $sms_no = $_POST['sms_no'];

$query = "INSERT into remainders(email,date,subject,description,contact_no,sms_no) VALUES('$email','$date','$subject','$description',$contact_no,$sms_no)";
// echo $query;
$res = mysqli_query($conn,$query);
if($res){
    header("Location: ../dashboard.php?status=success");
}else{
    echo "Something Went Wrong";
}
?>