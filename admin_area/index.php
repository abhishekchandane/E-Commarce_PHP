<!-- index.php -->


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
      <?php
        // Dynamic Page Loading
        if (isset($_GET['page'])) {
          $page = $_GET['page']; 
          $allowedPages = ['insert_brand', 'insert_category']; // only allow specific pages 
          if (in_array($page, $allowedPages)) {
            include($page . '.php');
          } else {
            echo "<p>Page not found!</p>";
          }
        } else {
          echo "<h2>Welcome to Admin Dashboard</h2><p>Select an option from the menu to proceed.</p>";
        }
      ?>
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
