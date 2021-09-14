<?php
try {
    $db = new PDO("mysql:dbname=test;host=localhost;charset=utf8","admin2","123456");
}catch (PDOException $err){
    echo "DB error: ". $err->getMessage();
}