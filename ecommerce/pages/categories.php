<?php
include_once('../includes/header.php');
include_once('../includes/db.php');
include('../models/CategoriesModel.php');
// Determine the sort order
$sortOrder = isset($_GET['sort']) ? $_GET['sort'] : 'ASC';

// Fetch the data with the selected sort order
$data = get_categories($sortOrder);

// Display buttons for sorting
echo '<div class="mb-3">';
echo '<a href="?sort=ASC" class="btn btn-primary">Ascending</a> ';
echo '<a href="?sort=DESC" class="btn btn-secondary">Descending</a>';
echo '</div>';


if (!empty($data)) {
    echo '<table class="table table-striped">';
    echo '<thead><tr><th>furniture</th><th>electronics</th><th>books</th><th>clothes</th></tr></thead><tbody>';
    foreach ($data as $row) {
        echo '<tr><td>'.$row['furniture'].'</td><td>'.$row['electronics'].'</td><td>'.$row['books'].'</td><td>'.$row['clothes'].'</td></tr>';
    }
    echo '</tbody></table>';
} else {
    echo '<p>No users found</p>';
}

include('../includes/footer.php');
?>
