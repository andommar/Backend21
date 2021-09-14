<?php
$email = $_POST["email"];
$message = $_POST["message"];

if(!isset($_POST["email"])){
    header("Location: http://localhost/Backend21/inclass2/form.php");
}elseif (empty($email) || empty($message)){
    header("Location: http://localhost/Backend21/inclass2/form.php");
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "wrong mail";
}
else{
    mail("kt@easv.dk","Jo Dude!", $message, "From: $email");
    echo "thanks man!";
}