<?php 

     //Connection to database
     
    $con = new mysqli('localhost', 'root', '', 'lost_and_found');

    if(!$con) {
    die(mysqli_error($con));
    }

?>