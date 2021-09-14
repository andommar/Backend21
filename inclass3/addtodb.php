<?php
require_once ("dbcon.php");
$fName = $_POST['fname'];
$lName = $_POST['lname'];
$age = $_POST['age'];

$query = "INSERT INTO `names` (`ID`, `fname`, `lname`, `age`) 
VALUES (NULL, '$fName', '$lName', '$age'); ";

if(!mysqli_query($conn, $query)){
    die("DB error:". mysqli_error($conn));
}
