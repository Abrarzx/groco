<?php
//require_once("backend/dbconnection.php");
  // Create database connection
  $conn = mysqli_connect('localhost','root','','cart_system');
 
  // If upload button is clicked ...
  if (isset($_POST['add_product'])) {
  	// Get image name
  	$images = $_FILES['images']['name'];
  	// Get text
  	$product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
  	$product_qty= $_POST['product_qty'];
  	$product_code =$_POST['product_code'];

    // image file directory
  	$target1= "images/".basename($images);

  	$sql = "INSERT INTO product_table (product_name,product_price,product_qty,product_image,product_code) VALUES ('$product_name', '$product_price','$product_qty','$images',$product_code)";
//   mysqli_query($conn,$sql);
   mysqli_query($conn,$sql);

   if (move_uploaded_file($_FILES['images']['tmp_name'], $target1))
   {
      $msg = "Image uploaded successfully";
   }else
   {
      $msg = "Failed to upload image";
   }

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container">

   <div class="admin-product-form-container">

      <form action="upload.php" method="post" enctype="multipart/form-data">
         <h3>add a new product</h3>
         <input type="text" placeholder="enter product name" name="product_name" class="box" required>
         <input type="number" placeholder="enter product price" name="product_price" class="box" required>
         <input type="number" placeholder="enter product stock" name="product_qty" class="box" required> 
         <input type="number" placeholder="enter product discount" name="product_code" class="box" required>
         <input type="file" name="images"> 
         <input type="submit" class="btn" name="add_product" value="add product">

      </form>
      

   </div>

  
</div>


</body>
</html>