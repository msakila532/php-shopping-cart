<?php
$servername = "localhost";
$username = "developer";
$password = "test@123";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=testdb", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?> 