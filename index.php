<!-- create index.php file For My PHP E-commarce Project with morden Nav bar looking Beautiful Responsive , and Attractive using Latest Bootstrap CDN LINKS ,Latest Font Awsome Icon CDN Links,
1. create Responsive Navbar with Logo and Search Input in right side of Navbar , and Links For Home, Products, Register, Contact, Cart link With Cart Symbol, Total Price: 1000/-
2. Create Card For Displaying Products in col-9 and in col-3 create Side bar on Right Side 
3. Create Footer With Some Social Links and Required For Footer -->



<?php
// Sample PHP for e-commerce (dynamic content can be added later)
   include('includes/connect.php');
   include('functions/common_functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My E-Commerce Project</title>
    
    <!-- Latest Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    <style>
        .footer-social-icons a {
            margin: 0 15px;
            font-size: 20px;
            color: #333;
        }

        .footer-social-icons a:hover {
            color: #007bff;
        }
        
        .product-card img {
            height: 300px;
            padding:25px;
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
                        <a class="nav-link active text-light" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light " href="#">Products</a>
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
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search Products" aria-label="Search">
                    <button class="border-light btn btn-outline-success text-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Main Content Section -->
    <div class="container-fluid my-5">
        <div class="row">
            <!-- Product Cards -->
            <div class="col-lg-9 col-md-8">
                <div class="row">
                    <!-- Fetching Products -->
                    <?php
                        getProducts();
                        getUniqueCategories();
                        getUniqueBrands();
                    ?>
                    <!-- Product Card 1 -->

                </div>
            </div>

            <!-- Sidebar (Right Column) -->
            <div class="col-lg-3 col-md-4">
            <div class="card mb-2">
                    <div class="card-header">
                        <h5>Brands</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <?php
                                getBrands();
                            ?> 
                        </ul>
                    </div>
                </div>
                <div class="card ">
                    <div class="card-header">
                        <h5>Categories</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">

                            <?php
                                getCategories();
                            ?> 

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="text-light text-center bg-primary">
        <div class="container">
            <div class="footer-social-icons p-2">
                <a href="#" class="text-light fab fa-facebook"></a>
                <a href="#" class="text-light fab fa-twitter"></a>
                <a href="#" class="text-light fab fa-instagram"></a>
                <a href="#" class="text-light fab fa-linkedin"></a>
            </div>
            <p>© 2025 My E-Shop. All rights reserved.</p>
        </div>
    </footer>

    <!-- Latest Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
