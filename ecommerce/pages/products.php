<?php
include_once('../includes/header.php');
include_once('../includes/db.php');
include('../models/ProductModel.php');


$sortOrder = isset($_POST['sort']) ? $_POST['sort'] : 'ASC';

$searchTerm = isset($_POST['search']) ? $_POST['search'] : '';

if ($searchTerm) {
    $data = search_products($searchTerm);
} else {
    $data = get_products($sortOrder);
}


echo '<form method="POST" action="" class="mb-3">';
echo '<input type="text" name="search" value="' . $searchTerm . '" placeholder="Search by name" class="form-control" style="width: 300px; display: inline-block; margin-right: 10px;">';
echo '<button type="submit" class="btn btn-primary">Search</button>';
echo '</form>';


echo '<form method="POST" action="" class="mb-3">';
echo '<input type="hidden" name="search" value="' . $searchTerm . '">'; // Maintain the search term if present
echo '<button type="submit" name="sort" value="ASC" class="btn btn-primary">Ascending</button> ';
echo '<button type="submit" name="sort" value="DESC" class="btn btn-secondary">Descending</button>';
echo '</form>';

if (!empty($data)) {
    echo '<table class="table table-striped">';
    echo '<thead><tr><th>ID</th><th>Name</th><th>Producer</th><th>Price</th></tr></thead><tbody>';
    foreach ($data as $row) {
        echo '<tr><td>'.$row['id'].'</td><td>'.$row['Name'].'</td><td>'.$row['producer'].'</td><td>'.$row['price'].'</td></tr>';
    }
    echo '</tbody></table>';
} else {
    echo '<p>No products found</p>';
}

include('../includes/footer.php');
?>
