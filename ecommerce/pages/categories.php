<?php
include_once('../includes/header.php');
include_once('../includes/db.php');
include('../models/CategoriesModel.php');

// Determine the sort order from the POST request
$sortOrder = isset($_POST['sort']) ? $_POST['sort'] : 'ASC';

// Get the search term from the form submission
$searchTerm = isset($_POST['search']) ? $_POST['search'] : '';

// Fetch the data based on search term and sort order
if ($searchTerm) {
    $data = search_categories($searchTerm);
} else {
    $data = get_categories($sortOrder);
}

// Display the search form
echo '<form method="POST" action="" class="mb-3">';
echo '<input type="text" name="search" value="' . $searchTerm . '" placeholder="Search by category" class="form-control" style="width: 300px; display: inline-block; margin-right: 10px;">';
echo '<button type="submit" class="btn btn-primary">Search</button>';
echo '</form>';

// Display buttons for sorting using a form
echo '<form method="POST" action="" class="mb-3">';
echo '<input type="hidden" name="search" value="' . $searchTerm . '">'; // Maintain the search term if present
echo '<button type="submit" name="sort" value="ASC" class="btn btn-primary">Ascending</button> ';
echo '<button type="submit" name="sort" value="DESC" class="btn btn-secondary">Descending</button>';
echo '</form>';

if (!empty($data)) {
    echo '<table class="table table-striped">';
    echo '<thead><tr><th>Furniture</th><th>Electronics</th><th>Books</th><th>Clothes</th></tr></thead><tbody>';
    foreach ($data as $row) {
        echo '<tr><td>'.$row['furniture'].'</td><td>'.$row['electronics'].'</td><td>'.$row['books'].'</td><td>'.$row['clothes'].'</td></tr>';
    }
    echo '</tbody></table>';
} else {
    echo '<p>No categories found</p>';
}

include('../includes/footer.php');
?>
