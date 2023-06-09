<?php
//require_once("backend/dbconnection.php");
  // Create database connection
  $conn = mysqli_connect('localhost','root','','cart_system');
 
  // If upload button is clicked ...
  if (isset($_POST['add_product'])) {
  	// Get image name
  	$juice = $_FILES['juice']['name'];
  	// Get text
  	$product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
  	$product_qty= $_POST['product_qty'];
  	$product_code =$_POST['product_code'];

    // image file directory
  	$target1= "juice/".basename($juice);

  	$sql = "INSERT INTO juice (product_name,product_price,product_qty,product_image,product_code) VALUES ('$product_name', '$product_price','$product_qty','$juice',$product_code)";
//   mysqli_query($conn,$sql);
   mysqli_query($conn,$sql);

   if (move_uploaded_file($_FILES['juice']['tmp_name'], $target1))
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

      <form action="uploadjuice.php" method="post" enctype="multipart/form-data">
         <h3>add a new product</h3>
         <input type="text" placeholder="enter product name" name="product_name" class="box" required>
         <input type="number" placeholder="enter product price" name="product_price" class="box" required>
         <input type="number" placeholder="enter product quantity" name="product_qty" class="box" required> 
         <input type="number" placeholder="enter product code" name="product_code" class="box" required>
         <input type="file" name="juice" name="juice" name="meat" name="juice"> 
         <input type="submit" class="btn" name="add_product" value="add juice ">
      </form>
      

   </div>

  
</div>


</body>
</html>