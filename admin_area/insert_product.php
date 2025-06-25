

<?php
    include('../includes/connect.php');


    if(isset($_POST['insert_product'])){ 

        $product_title = $_POST['product_title'];
        $product_description = $_POST['product_description'];
        $product_keywords = $_POST['product_keywords'];
        $category_id = $_POST['product_category'];
        $brand_id = $_POST['product_brand'];
        $product_price = $_POST['product_price'];
        $product_status = 'true';

        // Accessing the images
        $product_image1 = $_FILES['product_image1']['name'];
        $product_image2 = $_FILES['product_image2']['name'];
        $product_image3 = $_FILES['product_image3']['name'];

        // Accessing the images
        $temp_image1 = $_FILES['product_image1']['tmp_name'];
        $temp_image2 = $_FILES['product_image2']['tmp_name'];
        $temp_image3 = $_FILES['product_image3']['tmp_name'];

        // Checking Empty Condition
        if( $product_title == '' || $product_description == '' || $product_keywords == '' 
          || $category_id == '' || $brand_id  == '' || $product_image1=='' || $product_image2=='' || 
          $product_image3=='' || $product_price=='' ){ 
            echo " <script>alert('Please Fill All the Available Field')</script> ";
            exit();
        }else{
            move_uploaded_file($temp_image1, "./product_images/$product_image1" );
            move_uploaded_file($temp_image2, "./product_images/$product_image2" );
            move_uploaded_file($temp_image3, "./product_images/$product_image3" );

       $insert_products = "INSERT INTO `products`(
            product_title, product_description, product_keywords,
            category_id, brand_id , product_image1,
            product_image2, product_image3, product_price, date, status) VALUES (
            '$product_title', '$product_description', '$product_keywords',
            '$category_id', '$brand_id', '$product_image1',
            '$product_image2', '$product_image3', '$product_price', NOW(), '$product_status')";
            $result_query = mysqli_query($conn,$insert_products);

            if($result_query){
                echo "<script>alert('Product Inserted Successfully !!! ')</script>";

            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Dashboard</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    .main-wrapper {
      display: flex;
      flex: 1;
    }
    .sidebar {
      width: 250px;
      height: 100vh;
      background-color: #f8f9fa;
      padding-top: 1rem;
    }
    .sidebar a {
      display: block;
      padding: 10px 20px;
      color: #000;
      text-decoration: none;
    }
    .sidebar a:hover {
      background-color: #007bff;
      color: white;
    }
    .content-area {
      flex: 1;
      padding: 2rem;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="../index.php">My E-Shop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <form class="d-flex ms-auto">
          <input class="form-control me-2" type="search" placeholder="Search" />
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- Sidebar and Content -->
  <div class="main-wrapper">
    <!-- Sidebar -->
    <div class="sidebar">
      <h5 class="text-center">Admin Menu</h5>
      <a href="index.php?page=insert_category">Insert Categories</a>
      <a href="index.php?page=insert_brand">Insert Brands</a>
            <a href="insert_product.php">Insert Products</a>
      <a href="index.php">Dashboard</a>
    </div>

    <!-- Content Area -->
    <div class="content-area">

        <h3 class="mb-4">Insert New Product</h3>

        <form class="p-2" action="" method="post" enctype="multipart/form-data">
        <!-- Product Title -->
        <div class="mb-3">
            <label for="product_title" class="form-label">Product Title</label>
            <input type="text" class="form-control" id="product_title" name="product_title" >
        </div>

        <!-- Product Description -->
        <div class="mb-3">
            <label for="product_description" class="form-label">Product Description</label>
            <textarea class="form-control" id="product_description" name="product_description" rows="4" ></textarea>
        </div>

        <!-- Product Keywords -->
        <div class="mb-3">
            <label for="product_keywords" class="form-label">Product Keywords</label>
            <input type="text" class="form-control" id="product_keywords" name="product_keywords" >
        </div>

        <!-- Product Category -->
        <div class="mb-3">
            <label for="product_category" class="form-label">Product Category</label>
            <select class="form-select" id="product_category" name="product_category" >
            <option selected disabled value="">Select a Category</option>
            <!-- Add dynamic PHP options here -->
            <?php
                $select_category = "SELECT * FROM `categories` ";
                $result_category = mysqli_query($conn,$select_category);
                while( $row = mysqli_fetch_assoc($result_category) ){
                    $category_id = $row['category_id'];
                    $category_title = $row['category_title'];
                    echo "<option value='$category_id'>   $category_title</option>";
                }
            ?> 
            </select>
        </div>

        <!-- Product Brand -->
        <div class="mb-3">
            <label for="product_brand" class="form-label">Product Brand</label>
            <select class="form-select" id="product_brand" name="product_brand" >
            <option selected disabled value="">Select a Brand</option>
            <!-- Add dynamic PHP options here -->
            <?php
                $select_brand = "SELECT * FROM `brands` ";
                $result_brand = mysqli_query($conn,$select_brand);
                while( $row = mysqli_fetch_assoc($result_brand) ){
                    $brand_id = $row['brand_id'];
                    $brand_title = $row['brand_title'];
                    echo "<option value='$brand_id'>   $brand_title</option>";
                }
            ?> 
            </select>
        </div>

        <!-- Product Images -->
        <div class="mb-3">
            <label for="product_image1" class="form-label">Main Image</label>
            <input type="file" class="form-control" id="product_image1" name="product_image1" >
        </div>

        <div class="mb-3">
            <label for="product_image2" class="form-label">Image 2</label>
            <input type="file" class="form-control" id="product_image2" name="product_image2">
        </div>

        <div class="mb-3">
            <label for="product_image3" class="form-label">Image 3</label>
            <input type="file" class="form-control" id="product_image3" name="product_image3">
        </div>

        <!-- Product Price -->
        <div class="mb-3">
            <label for="product_price" class="form-label">Product Price (₹)</label>
            <input type="number" class="form-control" id="product_price" name="product_price"  step="0.01">
        </div>

        <!-- Submit Button -->
        <input type="submit" name="insert_product" value="Insert Product" class="btn btn-primary">
        </form>


    </div>
  </div>

  <!-- Footer -->
  <footer class="text-light text-center bg-primary mt-auto">
    <div class="container">
      <p>© 2025 My E-Shop. All rights reserved.</p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.0/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
