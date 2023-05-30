<?php 
session_start();
error_reporting(0);
include "./backend/connection.php";
$id = $_GET['id'];
$query = "SELECT * from remainders where id='$id'";
$res = mysqli_query($conn,$query);
$row = mysqli_fetch_array($res);
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
            
        </div>
        </section>
    <div class="container mt-7" style="width:100%;padding:20px;height: max-content;margin:auto;border:2px solid black">
       <p>View Remainder</p>
       <div>
           <form method="POST" action="./backend/update.php">
            <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
            <labelDate:</label>
            <input type="date" value="<?php echo $row['date'] ?>" name="date">
           
            <!-- <label>Select to  Date:</label>
            <input type="date"> -->
            <br><br> 
            <label>Subject :</label>
    
            <select name="subject">
                <option value="CS" <?php echo $row['subject'] == 'CS' ? 'selected' : '' ?>>CS</option>
                <option value="EC" <?php echo $row['subject'] == 'EC' ? 'selected' : '' ?>>EC</option>
                <option value="CIVIL" <?php echo $row['subject'] == 'CIVIL' ? 'selected' : '' ?>>Civil</option>
                <option value="ECE" <?php echo $row['subject'] == 'ECE' ? 'selected' : '' ?>>ECE</option>
            </select><br><br> 
            <!-- <label>Remainder :</label>
            
            <select id="cars" name="cars">
                <option value="volvo">CS</option>
                <option value="saab">EC</option>
                <option value="fiat">Civil</option>
                <option value="audi">ECE</option>
            </select><br><br>    -->
            <label>Add description:</label>
            <textarea name="description">
                <?php echo $row['description'] ?>
            </textarea><br><br>
            <label>Email Address:</label>
            <input type="email" value="<?php echo $row['email'] ?>" name="email"><br><br>
            <label>Contact No:</label>
            <input type="number" value="<?php echo $row['contact_no'] ?>" name="contact_no"><br><br>
            <label>SMS No::</label>
            <input type="number" value="<?php echo $row['sms_no'] ?>" name="sms_no"><br><br>
            <label>Status:</label>
            <div class="form-check form-switch">
                <input class="form-check-input" name='status' type="checkbox" id="flexSwitchCheckChecked"<?php echo $row['status']==1 ? 'checked' : '' ?> >
                <!-- <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label> -->
            </div>
            <!-- <label>Recurance Frequency::</label>
            <input type="number"><br><br> -->
<!-- 
            <input type="checkbox" id="remainder1" name="remainder1" value="remainder1">
            <label for="vehicle1"> select a remainder for further operations</label><br>
            <input type="checkbox" id="remainder2" name="remainder2" value="remainder2">
            <label for="vehicle2"> select a remainder for further operations</label><br>
            <input type="checkbox" id="remainder3" name="remainder3" value="remainder3">
            <label for="vehicle3"> select a remainder for further operations</label><br><br> -->
            <button class="btn btn-primary" type="submit">Modify Remainder</button>   
        </form>
           
           
           <button class="btn btn-primary"><a onclick="window.history.back()" style="color:white;text-decoration: none;">Back</a></button>
           <button class="btn btn-primary"><a href="logout.php" style="color:white;text-decoration:none ;">Logout</a></button>
       </div>
    </div>
</body>
</html>
<?php 
}
?>