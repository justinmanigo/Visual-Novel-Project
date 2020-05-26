<?php
    $conn = mysqli_connect("localhost", "root", "", "datingsim");

    if(!$conn){
        echo "Error connecting to database";
        exit();
    }
?>