<?php
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if (!$con) {
    die("connection to this database failed due to " . mysqli_connect_error());
}
echo "Successfully connected with Database";

$name =  $_POST['name'];
$age =  $_POST['age'];
$phone =  $_POST['phone'];
$email =  $_POST['email'];
$other =  $_POST['other'];

$sql = "INSERT INTO `placement details` (`Name`, `Age`, `Phone Number`, `Email ID`, `Other Information`, `dt`) VALUES ($name, $age', $gender, $email, $other, current_timestamp());";

echo $sql;
?>

