<?php

include_once('../includes/header.php');
include_once('../includes/db.php');
include('../models/ProductModel.php');

// Determine the sort order
$sortOrder = isset($_GET['sort']) ? $_GET['sort'] : 'ASC';

// Fetch the data with the selected sort order
$data = get_products($sortOrder);

// Display buttons for sorting
echo '<div class="mb-3">';
echo '<a href="?sort=ASC" class="btn btn-primary">Ascending</a> ';
echo '<a href="?sort=DESC" class="btn btn-secondary">Descending</a>';
echo '</div>';


if (!empty($data)) {
    echo '<table class="table table-striped">';
    echo '<thead><tr><th>ID</th><th>Name</th><th>Producer</th><th>Price</th></tr></thead><tbody>';
    foreach ($data as $row) {
        echo '<tr><td>'.$row['id'].'</td><td>'.$row['Name'].'</td><td>'.$row['producer'].'</td><td>'.$row['price'].'</td></tr>';
    }
    echo '</tbody></table>';
} else {
    echo '<p>No users found</p>';
}

include('../includes/footer.php');
?>



