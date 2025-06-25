

<?php

 include('../includes/connect.php');

  if(isset($_POST['insert_category'])){ 
     echo "<script>alert('insert_category variable is SET')</script>";
      $category_title = $_POST['category_title'];

      $select_query = "SELECT * FROM `categories` WHERE category_title = '$category_title' ";
      $result_select = mysqli_query($conn,$select_query);
      $number = mysqli_num_rows($result_select);
      if($number > 0){
        echo "<script>alert('This Category is Present Inside The Database')</script>";
      }else{ 
        $insert_query =  "INSERT INTO `categories` (category_title) VALUES('$category_title') ";
        $result = mysqli_query( $conn, $insert_query);
        if($result){
          echo "<script>alert('Category Has Been Inserted Successfully')</script>";  
        }
      } 
  }

?>


<h3>Insert Category</h3>
<form method="post" action="">
  <div class="mb-3">
    <label for="category_title" class="form-label">Category Title</label>
    <input type="text" class="form-control" id="category_title" name="category_title" required>
  </div>
  <input type="submit" value="Insert Category" name="insert_category" class="btn btn-primary" >
</form>
