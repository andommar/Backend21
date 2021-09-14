<?php
require_once ("dbpdo.php");
$query = "SELECT * FROM `names`";
$result1 = $db->query($query, PDO::FETCH_ASSOC);
foreach ($result1 as $row){
    echo
        $row["ID"]. " - ".
        $row["fname"]. " - ".
        $row["lname"]. " - ".
        $row["age"]. "<br>";
}
$result2 = $db->query($query);

while ($row = $result2->fetch(PDO::FETCH_ASSOC)){
    echo
        $row["ID"]. " - ".
        $row["fname"]. " - ".
        $row["lname"]. " - ".
        $row["age"]. "<br>";
}
$db = null;