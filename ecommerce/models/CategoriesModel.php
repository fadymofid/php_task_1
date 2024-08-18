<?php
include_once '../includes/db.php';

function get_categories($sortOrder = 'ASC') {
    $conn = connectToDB();
    if ($conn) {
        $stmt = $conn->prepare("SELECT * FROM categories ORDER BY books $sortOrder");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        return [];
    }
}