<?php
session_start();
error_reporting(0);
include "./backend/connection.php";

$query = "SELECT * from remainders";
$res = mysqli_query($conn,$query);

// $rows = mysqli_fetch_array($res);
// var_dump($rows);
if($_SESSION['loggedin']){
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
        <?php 

        if(isset($_GET['deleted'])){
            if($_GET['deleted']==true){
            ?>
            
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Remainder Deleted.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
            <?php
            }
        }
        if(isset($_GET['updateStatus'])){
            if($_GET['updateStatus']==true){
            ?>
            
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Remainder Updated.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
            <?php
            }
        }

        if(isset($_GET['status'])){
            if($_GET['status']=='success'){
            ?>
            
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Remainder Added.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
            <?php
            }
        }
        ?>
            <section class="container my-5">
                <div style="width:max-content;height:max-content;padding: 20px;margin:auto;border:2px solid black">
                    <h1>welcome to the Remainder Application (<?php echo $_SESSION['loggedin'] ?>)</h1>
                    <p id="demo"></p>
                    <p id="p1"></p>
                    <script>
                        var date = new Date();
                        const weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
                        var current_date = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+ date.getDate();
                        document.getElementById("p1").innerHTML = current_date;    
                        const d = new Date();
                        let day = weekday[d.getDay()];
                        document.getElementById("demo").innerHTML = day;
                    </script>
                    <button class="btn btn-primary mx-auto"><a href="./setR.php" style="color:white;text-decoration:none ;">Set Remainder</a> </button>
                    <!-- <button class="btn btn-primary"><a href="./mdrema.html" style="color:white;text-decoration:none ;">Modify Remainder</a></button>
                    <button class="btn btn-primary"><a href="./disablerem.html" style="color:white;text-decoration:none ;">Disable  Remainder</a></button> -->
                    <!-- <button class="btn btn-primary"><a href="./deleterem.html" style="color:white;text-decoration:none ;">Delete Remainder</a> </button>
                    <button class="btn btn-primary"><a href="./enable.html" style="color:white;text-decoration:none ;">Enable  Remainder</a></button> -->
                    <button class="btn btn-primary"><a href="logout.php" style="color:white;text-decoration:none ;">Logout</a></button>
                </div>
            </section>
            <section>
            <div class="container" style="width:100%;padding:20px;height: max-content;margin:auto;border:2px solid black">
            <p>View Remainder</p>
            <table class="table">
                <tr>
                <th>Email</th>
                <th>Subject</th>
                <th>Description</th>
                <th>Date</th>
                <th>Contact No</th>
                <th>SMS No</th>
                <th>Status</th>
                <th>Actions</th>
                </tr>
                <?php while($row = mysqli_fetch_array($res)){ ?>
                <tr>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['subject']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['contact_no']; ?></td>
                    <td><?php echo $row['sms_no']; ?></td>
                    <td><?php echo $row['status'] == 1 ? 'Active' : 'Inactive' ?></td>
                    <td><a href="viewRem.php?id=<?php echo $row['id'] ?>">View</a> <a href="./backend/delete.php?id=<?php echo $row['id'] ?>">delete</a></td>
                </tr>
                <?php } ?>
            </table>
        </div>
            </section>
        </body>
        </html> 
        <?php
}
else{
    echo "You are not loggedin";
    header("Location: /");
}
 ?>