<?php
include_once '../includes/db.php';

function get_orders($sortOrder = 'ASC') {
    $conn = connectToDB();
    if ($conn) {
        $stmt = $conn->prepare("SELECT * FROM orders ORDER BY id $sortOrder");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        return [];
    }
}