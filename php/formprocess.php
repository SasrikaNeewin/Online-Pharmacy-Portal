<?php
    require 'connection.php';

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $message = $_POST["message"];

    $sql = "INSERT INTO enquiry(firstName,lastName,email,contact,message)";

    if($con->query($sql))
    {
        echo "Insert Successful!";
    }
    else{
        echo "Error :".$con->error;
    }
    $con->close();
?>

