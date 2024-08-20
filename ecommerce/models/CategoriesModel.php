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


function search_categories($searchTerm)
{
    $conn = connectToDB();
    if ($conn) {
        $stmt = $conn->prepare("SELECT * FROM categories WHERE furniture LIKE :searchTerm OR electronics LIKE :searchTerm OR books LIKE :searchTerm OR clothes LIKE :searchTerm");
        $stmt->execute(['searchTerm' => $searchTerm . '%']);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        return [];
    }
}



