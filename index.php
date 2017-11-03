<?php
$servername = "sql2.njit.edu";
$username = "lvj5";
$password = "mNoRgZ79";

try {
    $conn = new PDO("mysql:host=$servername;dbname=lvj5", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br>"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>