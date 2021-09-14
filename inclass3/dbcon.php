<?php
require_once ("constants.php");
$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
if(!$conn){
    die("no joy!");
}