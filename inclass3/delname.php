<?php
require_once ("dbcon.php");
if(isset($_GET['id'])){
    $query = "DELETE FROM `names` WHERE ID=".$_GET['id'];
    mysqli_query($conn, $query);
}