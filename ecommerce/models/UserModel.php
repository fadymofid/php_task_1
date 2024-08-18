<?php
include_once '../includes/db.php';

function get_users($sortOrder = 'ASC') {
    $conn = connectToDB();
    if ($conn) {
        $stmt = $conn->prepare("SELECT * FROM user ORDER BY id $sortOrder");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        return [];
    }
}
