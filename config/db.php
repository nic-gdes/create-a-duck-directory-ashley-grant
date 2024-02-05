<?php

    // Create connection to DB with mysqli_connect
    // REFERENCE: $conn = mysqli_connect("db:3306","username","password","database name");
    $conn = mysqli_connect("db:3306", "root", "root", "db");

    // Verify connection with my_sqli_connect_errorno nd mysqli_connect_error
    if(mysqli_connect_errno()) {
        echo "Database error: " . mysqli_connect_error();
        exit();
    }
?>