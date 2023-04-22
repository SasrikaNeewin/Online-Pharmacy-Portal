<?php
    $con = new mysqli("localhost","root","","contactus");

    if($con->connect_error){
        die("Connection Failed! :".$con->connect_error);
    }
    else{
        echo "Connected Successfully !";
    }

?>