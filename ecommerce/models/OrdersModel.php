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
function search_orders($searchTerm) {
    $conn = connectToDB();
    if ($conn) {
        $stmt = $conn->prepare("SELECT * FROM orders WHERE owner_name LIKE :searchTerm");
        $stmt->execute(['searchTerm' => $searchTerm . '%']);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        return [];
    }
}