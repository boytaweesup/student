<?php

        require_once ('connect.php');

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$address = $_POST["address"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$position = $_POST["position"];
$startup = $_POST["startup"];
$file = $_POST["file"];


$sql = "INSERT INTO 
student(firstname, lastname, address, phone, email, position, file, startup)
VALUES ('$firstname', '$lastname', '$address', '$phone', '$email', '$position', '$file', '$startup')";
if ($db->exec($sql)) {
        $insertMsg = "File Uploaded successfully...";
        header('refresh:2;index.php');
    }
?>