<?php 
$servername = "localhost";
$username="root";
$password="";
$db="task";
$conn = mysqli_connect($servername,$username,$password,$db);
if(!$conn){
    die(mysqli_connect_error());
}
echo "Connected successfully";


// CREATE TABLE IF NOT EXISTS `remainders` (
  //   `id` int(11) NOT NULL AUTO_INCREMENT,
  //   `email` varchar(255) NOT NULL,
  //   `date` date NOT NULL,
  //   `subject` varchar(255) NOT NULL,
  //   `description` text NOT NULL,
  //   `contact_no` bigint(10) NOT NULL,
  //   `sms_no` bigint(10) NOT NULL,
  //   `status` tinyint(1) NOT NULL DEFAULT '1',
  //   PRIMARY KEY (`id`)
  // ) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
  
 " DROP TABLE IF EXISTS remainders";
$sql = "CREATE TABLE IF NOT EXISTS remainders (
id int(11) NOT NULL AUTO_INCREMENT,
email varchar(255) NOT NULL,
date date NOT NULL,
subject varchar(255) NOT NULL,
description text NOT NULL,
contact_no bigint(10) NOT NULL,
sms_no bigint(10) NOT NULL,
status tinyint(1) NOT NULL DEFAULT '1',
PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1";

if($conn->query($sql)){
  echo "CREATEd TABLE IF NOT EXISTS remainders successfully";
}
// --
// -- Dumping data for table `remainders`
// --
// $trun_rem = "truncate table remainders";

// if($conn->query($trun_rem)){
//   echo "trun_rem TABLE reminder EXISTS remainders successfully";
// }
// $insertd = "INSERT INTO remainders (id, email, date, subject, description, contact_no, sms_no, status) VALUES
// (8, 'setu@gmail.com', '2023-03-02', 'CS', 'cfgj', 1223654789, 55664851263, 1)";

// if($conn->query($insertd)){
//   echo "CREATEd TABLE user IF NOT EXISTS remainders successfully";
// }
// -- --------------------------------------------------------

// --
// -- Table structure for table `users`
// --

$dpt = "DROP TABLE IF EXISTS users";
$user = "CREATE TABLE IF NOT EXISTS users (
  id int(11) NOT NULL AUTO_INCREMENT,
  email varchar(191) NOT NULL,
  password varchar(20) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1";


if($conn->query($user)){
  echo "CREATEd TABLE user IF NOT EXISTS remainders successfully";
}
// --
// -- Dumping data for table `users`
// --
$trun = "truncate table users";

if($conn->query($trun)){
  echo "truncate TABLE user 123 successfully";
}

$inserd = "INSERT INTO users (id, email, password) VALUES
(1, 'sami@gmail.com', '123'),
(2, 'zeenat@gmail.com', '1234'),
(3, 'afreen@gmail.com', '123')";
"COMMIT";

if($conn->query($inserd)){
  echo "insert TABLE user 123 successfully";
}

?>