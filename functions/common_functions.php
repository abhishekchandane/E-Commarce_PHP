<?php



include('./includes/connect.php');



    //Getting Products
    function getProducts(){
        global $conn;

        // Condition to check isset or not
        if(!isset($_GET['category'])){
            if(!isset($_GET['brand'])){
                $select_products = "SELECT * FROM `products` ORDER BY rand() limit 0,4";
                $result_products = mysqli_query($conn, $select_products);
                while($row = mysqli_fetch_assoc($result_products)){
                    $product_id = $row['product_id'];
                    $product_title = $row['product_title'];
                    $product_description = $row['product_description'];
                    $product_keywords = $row['product_keywords'];
                    $product_image1 = $row['product_image1'];
                    $product_price = $row['product_price'];
                    $category_id = $row['category_id'];
                    $brand_id = $row['brand_id'];
                    echo "
                            <div class='col-lg-4 col-md-6 mb-4'>
                                <div class='card product-card'>
                                    <img src='./admin_area/product_images/$product_image1' class='product-card' alt='Product Image'>
                                    <div class='card-body'>
                                        <h5 class='card-title'> $product_title</h5>
                                        <p class='card-text'>$product_description</p>
                                        <a href='#' class='btn btn-primary'>Add to Cart</a>
                                        <a href='products_details.php?product_id=$product_id' class='btn btn-warning text-light'>View More</a>
                                    </div>
                                </div>
                            </div> 
                    ";
                    
                }
            }
        }
    }

    // Getting All Products
    function getAllProducts(){
        global $conn;
        // Condition to check isset or not
        if(!isset($_GET['category'])){
            if(!isset($_GET['brand'])){
                $select_products = "SELECT * FROM `products` ORDER BY rand() ";
                $result_products = mysqli_query($conn, $select_products);
                while($row = mysqli_fetch_assoc($result_products)){
                    $product_id = $row['product_id'];
                    $product_title = $row['product_title'];
                    $product_description = $row['product_description'];
                    $product_keywords = $row['product_keywords'];
                    $product_image1 = $row['product_image1'];
                    $product_price = $row['product_price'];
                    $category_id = $row['category_id'];
                    $brand_id = $row['brand_id'];
                    echo "
                            <div class='col-lg-4 col-md-6 mb-4'>
                                <div class='card product-card'>
                                    <img src='./admin_area/product_images/$product_image1' class='product-card' alt='Product Image'>
                                    <div class='card-body'>
                                        <h5 class='card-title'> $product_title</h5>
                                        <p class='card-text'>$product_description</p>
                                        <a href='#' class='btn btn-primary'>Add to Cart</a> 
                                         <a href='products_details.php?product_id=$product_id' class='btn btn-warning text-light'>View More</a>
                                    </div>
                                </div>
                            </div> 
                    ";
                    
                }
            }
        }
    }
 
    // Getting Unique Categories
    function getUniqueCategories(){ 
        global $conn; 
        // Condition to check isset or not
        if(isset($_GET['category'])){
                $category_id = $_GET['category'];
                $select_products = "SELECT * FROM `products` WHERE category_id = $category_id ";
                $result_products = mysqli_query($conn, $select_products);
                $number_of_rows = mysqli_num_rows($result_products);
                if($number_of_rows==0){
                    echo '<h2 class="text-center text-danger">No Stock for This Category</h2>';
                }
                while($row = mysqli_fetch_assoc($result_products)){
                    $product_id = $row['product_id'];
                    $product_title = $row['product_title'];
                    $product_description = $row['product_description'];
                    $product_keywords = $row['product_keywords'];
                    $product_image1 = $row['product_image1'];
                    $product_price = $row['product_price'];
                    $category_id = $row['category_id'];
                    $brand_id = $row['brand_id'];
                    echo "
                            <div class='col-lg-4 col-md-6 mb-4'>
                                <div class='card product-card'>
                                    <img src='./admin_area/product_images/$product_image1' class='product-card' alt='Product Image'>
                                    <div class='card-body'>
                                        <h5 class='card-title'> $product_title</h5>
                                        <p class='card-text'>$product_description</p>
                                        <a href='#' class='btn btn-primary'>Add to Cart</a> 
                                        <a href='products_details.php?product_id=$product_id' class='btn btn-warning text-light'>View More</a>
                                    </div>
                                </div>
                            </div> 
                    ";
                    
                }
        }
    }

    // Getting Unique Brands
    function getUniqueBrands(){ 
        global $conn; 
        // Condition to check isset or not
        if(isset($_GET['brand'])){
                $brand_id = $_GET['brand'];
                $select_products = "SELECT * FROM `products` WHERE brand_id = $brand_id ";
                $result_products = mysqli_query($conn, $select_products);
                $number_of_rows = mysqli_num_rows($result_products);
                if($number_of_rows==0){
                    echo '<h2 class="text-center text-danger">This Brand is Not Availabel for Service</h2>';
                }
                while($row = mysqli_fetch_assoc($result_products)){
                    $product_id = $row['product_id'];
                    $product_title = $row['product_title'];
                    $product_description = $row['product_description'];
                    $product_keywords = $row['product_keywords'];
                    $product_image1 = $row['product_image1'];
                    $product_price = $row['product_price'];
                    $category_id = $row['category_id'];
                    $brand_id = $row['brand_id'];
                    echo "
                            <div class='col-lg-4 col-md-6 mb-4'>
                                <div class='card product-card'>
                                    <img src='./admin_area/product_images/$product_image1' class='product-card' alt='Product Image'>
                                    <div class='card-body'>
                                        <h5 class='card-title'> $product_title</h5>
                                        <p class='card-text'>$product_description</p>
                                        <a href='#' class='btn btn-primary'>Add to Cart</a>
                                        <a href='products_details.php?product_id=$product_id' class='btn btn-warning text-light'>View More</a>
                                    </div>
                                </div>
                            </div> 
                    ";
                    
                }
        }
    }

    // Displaying Brand in Sidenav
    function getBrands(){
        global $conn;
        $select_brands =  "SELECT * FROM `brands` ";
        $result_brands = mysqli_query($conn,$select_brands);
        while($row_data = mysqli_fetch_assoc($result_brands)){
            $brand_id = $row_data['brand_id'];
            $brand_title = $row_data['brand_title'];
            echo"<li class='list-group-item'><a href='index.php?brand=$brand_id'>$brand_title</a></li>";
        }
    }

    // Displaying Category in Sidenav
    function getCategories(){
        global $conn;
        $select_categories = "SELECT * FROM `categories`";
        $result_categories = mysqli_query($conn, $select_categories);
        $row_data = mysqli_fetch_assoc($result_categories);
        while($row_data = mysqli_fetch_assoc($result_categories)){
            $category_id = $row_data['category_id'];
            $category_title = $row_data['category_title'];
            echo"<li class='list-group-item'><a href='index.php?category=$category_id'>$category_title</a></li>";
        }
    }


    // Searching Products
    function search_product(){
        global $conn;
        // Condition to check isset or not
            if(isset($_GET['search_data_product'])){
                    $search_data_value = $_GET['search_data'];                                                            
                    $search_query = "SELECT * FROM `products` WHERE product_keywords LIKE '%$search_data_value%'";
                    $result_search = mysqli_query($conn, $search_query);
                    $number_of_rows = mysqli_num_rows($result_search);
                    if($number_of_rows==0){
                        echo '<h2 class="text-center text-danger">
                        No Result Match ,No Products Found for This Category</h2>';
                        return;
                    }
                    while($row = mysqli_fetch_assoc($result_search)){
                        $product_id = $row['product_id'];
                        $product_title = $row['product_title'];
                        $product_description = $row['product_description'];
                        $product_keywords = $row['product_keywords'];
                        $product_image1 = $row['product_image1'];
                        $product_price = $row['product_price'];
                        $category_id = $row['category_id'];
                        $brand_id = $row['brand_id'];
                        if($row['product_keywords'] == ''){
                            echo '<script>alert("No Stock For This Product")</script>';
                            return;
                        }
                        echo "
                                <div class='col-lg-4 col-md-6 mb-4'>
                                    <div class='card product-card'>
                                        <img src='./admin_area/product_images/$product_image1' class='product-card' alt='Product Image'>
                                        <div class='card-body'>
                                            <h5 class='card-title'> $product_title</h5>
                                            <p class='card-text'>$product_description</p>
                                            <a href='#' class='btn btn-primary'>Add to Cart</a>
                                        <a href='products_details.php?product_id=$product_id' class='btn btn-warning text-light'>View More</a>
                                        </div>
                                    </div>
                                </div> 
                        ";
                        
                    }
            } 
    }


    // View Details of Product Function
    function view_details(){
        global $conn;
        if(isset($_GET['product_id'])){
            if(!isset($_GET['category'])){
            if(!isset($_GET['brand'])){ 

            $product_id = $_GET['product_id'];
            $select_query = "SELECT * FROM `products` WHERE product_id = $product_id";
            $result_query = mysqli_query($conn, $select_query);
            while($row = mysqli_fetch_assoc($result_query)){
                   $product_id = $row['product_id'];
                    $product_title = $row['product_title'];
                    $product_description = $row['product_description'];
                    $product_keywords = $row['product_keywords'];
                    $product_image1 = $row['product_image1'];
                    $product_image2 = $row['product_image2'];
                    $product_image3 = $row['product_image3'];
                    $product_price = $row['product_price'];
                    $category_id = $row['category_id'];
                    $brand_id = $row['brand_id'];
                    echo "
                        <!-- Left: Product Images -->
                        <div class='col-md-4 text-center'>
                            <img src='./admin_area/product_images/$product_image1' class='product-img mb-3' alt='Product Image 1'>
                            <img src='./admin_area/product_images/$product_image2' class='product-img' alt='Product Image 2'>
                            <img src='./admin_area/product_images/$product_image3' class='product-img' alt='Product Image 3'>
                        </div>

                        <!-- Middle: Product Info -->
                        <div class='col-md-8'>
                            <h2 class='product-title'>$product_title</h2> 
                            <p>$product_description</p>
                            <div class='price-tag mb-4'>₹$product_price</div>
                            <a href='index.php' class='btn btn-secondary me-2'>Back to Home</a>
                            <a href='add_to_cart.php?product_id=$product_id' class='btn btn-primary'>Add to Cart</a>
                        </div>
                    ";

            }
          }
         }
        }
    }



?>