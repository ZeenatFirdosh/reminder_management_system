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
    $status = $_POST['status'] == 'on' ? 1 : 0;
    $id=$_POST['id'];


    $query = "UPDATE remainders set email = '$email', date='$date', subject='$subject',description='$description', contact_no='$contact_no', sms_no='$sms_no',status='$status' where id='$id'";
    echo $query;
    $res = mysqli_query($conn,$query);
    if($res){
        echo 'Updated';
        header('Location: ../dashboard.php?updateStatus=true');
    } else{
        echo 'Something Went Wrong';
    }
?>