

<?php

 include('../includes/connect.php');

 if(isset($_POST['insert_brand'])){ 
    $brand_title = $_POST['brand_title']; 
  
    $select_query = "SELECT * FROM `brands` WHERE brand_title='$brand_title'";
    $result_select = mysqli_query($conn, $select_query);
    $number = mysqli_num_rows($result_select); 
    if($number > 0){
      echo "<script>alert('This Brand is Present Inside the Database')</script>";
    }else{
      $insert_query ="INSERT INTO `brands` (brand_title) VALUES('$brand_title') ";
      $result = mysqli_query($conn,$insert_query);
      if($result){
        echo "<script>alert('Brand Has Been Inserted Successfully')</script>";
      }
    }

 }

?>

<h3>Insert Brand</h3>
<form method="post" action="">
  <div class=" mb-3">
    <label for="brand_title" class="form-label">Brand Title</label>
    <input type="text" class="form-control" id="brand_title" name="brand_title" required>
  </div>
  <input type="submit" name="insert_brand" class="btn btn-primary" >
</form>
