

<?php
// Sample PHP for e-commerce (dynamic content can be added later)
   include('includes/connect.php');
   include('functions/common_functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Product Details</title>
    <!-- Latest Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
  <style>
    .product-img {
      width: 100%;
      max-height: 280px;
      object-fit: cover;
      margin-bottom: 15px;
      border: 1px solid #ddd;
      border-radius: 8px;
    }
    .product-title {
      font-size: 1.8rem;
      font-weight: 600;
    }
    .price-tag {
      font-size: 1.5rem;
      color: #28a745;
      font-weight: bold;
    } 
  </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary ">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="admin_area/index.php">My E-Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item ">
                        <a class="nav-link active text-light" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light " href="display_all.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light " href="#">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light " href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light " href="#">Cart <i class="fas fa-shopping-cart"></i> <span class="badge bg-danger">1</span></a>
                    </li>
                </ul>
                <form class="d-flex" action="search_product.php" method="get">
                     <!-- Search Input -->
                     <input class="form-control me-2" type="search" placeholder="Search Products" aria-label="Search" name="search_data"> 
                     <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product" >
                </form>
            </div>
        </div>
    </nav> 

    <!-- Calling Cart Function -->
    <?php cart() ?>

<div class="container-fluid my-5">
  <div class="row">
    
    <!-- Main Content: Product -->
    <div class='col-lg-9 col-md-8'>
        <div class='row g-4'>
            <?php
            view_details();
            ?> 
        </div>
    </div>

    <!-- Sidebar: Filters -->
    <div class="col-lg-3 col-md-4">
      
      <!-- Brands -->
      <div class="card mb-3">
        <div class="card-header">
          <h5>Brands</h5>
        </div>
        <div class="card-body">
          <ul class="list-group list-group-flush">
            <?php getBrands(); ?>
          </ul>
        </div>
      </div>

      <!-- Categories -->
      <div class="card">
        <div class="card-header">
          <h5>Categories</h5>
        </div>
        <div class="card-body">
          <ul class="list-group list-group-flush">
            <?php getCategories(); ?>
          </ul>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
