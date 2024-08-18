<?php
$base_url = "/ecommerce/pages/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Tables</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">My Database</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>users.php">Users</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>products.php">Products</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>orders.php">Orders</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>categories.php">Categories</a></li>
        </ul>
    </div>
</nav>
<div class="container">
