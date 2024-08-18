<?php
function connectToDB() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce"; // Make sure the database name is correct

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return null;
    }
}