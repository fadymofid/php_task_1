<?php
include_once '../includes/db.php';

function get_products($sortOrder = 'ASC') {
    $conn = connectToDB();
    if ($conn) {
        $stmt = $conn->prepare("SELECT * FROM products ORDER BY id $sortOrder");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        return [];
    }
}