<!-- create index.php file For My PHP E-commarce Project with morden Nav bar looking Beautiful Responsive , and Attractive using Latest Bootstrap CDN LINKS ,Latest Font Awsome Icon CDN Links,
1. create Responsive Navbar with Logo and Search Input in right side of Navbar , and Links For Home, Products, Register, Contact, Cart link With Cart Symbol, Total Price: 1000/-
2. Create Card For Displaying Products in col-9 and in col-3 create Side bar on Right Side 
3. Create Footer With Some Social Links and Required For Footer -->



<?php
// Sample PHP for e-commerce (dynamic content can be added later)
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
            height: 250px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My E-Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cart <i class="fas fa-shopping-cart"></i> <span class="badge bg-danger">1</span></a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search Products" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
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
                    <!-- Product Card 1 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card product-card">
                            <img src="https://via.placeholder.com/350x250" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Product Name</h5>
                                <p class="card-text">Description of the product goes here.</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Card 2 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card product-card">
                            <img src="https://via.placeholder.com/350x250" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Product Name</h5>
                                <p class="card-text">Description of the product goes here.</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Card 3 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card product-card">
                            <img src="https://via.placeholder.com/350x250" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Product Name</h5>
                                <p class="card-text">Description of the product goes here.</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
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
                            <li class="list-group-item"><a href="#">Brand 1</a></li>
                            <li class="list-group-item"><a href="#">Brand 2</a></li>
                            <li class="list-group-item"><a href="#">Brand 3</a></li>
                            <li class="list-group-item"><a href="#">Brand 4</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card ">
                    <div class="card-header">
                        <h5>Categories</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="#">Category 1</a></li>
                            <li class="list-group-item"><a href="#">Category 2</a></li>
                            <li class="list-group-item"><a href="#">Category 3</a></li>
                            <li class="list-group-item"><a href="#">Category 4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="bg-light text-center py-4">
        <div class="container">
            <div class="footer-social-icons mb-3">
                <a href="#" class="fab fa-facebook"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <p>© 2025 My E-Shop. All rights reserved.</p>
        </div>
    </footer>

    <!-- Latest Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
