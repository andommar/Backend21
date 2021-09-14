<?php
require_once ("dbcon.php");
$query = "SELECT * FROM `names`";
$result = mysqli_query($conn, $query) or die("nada joy!");
mysqli_set_charset($conn, "utf8");
while($row = mysqli_fetch_array($result)){
    echo
        $row["ID"]. " - ".
        $row["fname"]. " - ".
        $row["lname"]. " - ".
        $row["age"].
        "<a href='delname.php?id=".$row['ID']."'>delete</a><br>";
}