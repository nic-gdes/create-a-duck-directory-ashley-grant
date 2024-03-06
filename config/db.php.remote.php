<?php

    // Create connection to DB with mysqli_connect
    // REFERENCE: $conn = mysqli_connect("hostname","username","password","database name");
    $conn = mysqli_connect("127.0.0.1:3308", "2024agrant", "agrant494", "welearnd_gdes261_2024_agrant");

    // Verify connection with mysqli_connect_errno and mysqli_connect_error
    if(mysqli_connect_errno()) {
        echo "Database error: " . mysqli_connect_error();
        exit();
    }
?>