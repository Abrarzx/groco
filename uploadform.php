<?php

$servername = "localhost";
$database = "cart_system";
$username = "root";
$password = "";
$port = 3306;

$conn = new mysqli($servername,$username,$password,$database);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }
 echo "Connected successfully";

if(isset($_GET['add_product'])){

   $product_name = $_GET['product_name'];
   $product_price = $_GET['product_price'];
   $product_stock = $_GET['product_stock'];
   


   if(empty($product_name) || empty($product_price) ){
      $message = 'please fill out all';

   }else{
      
      
      $insert = "INSERT INTO product_table (product_name,prise,stock) VALUES('$product_name','$product_price','$product_stock')";
      $upload = mysqli_query($conn,$insert);

      
      if ($upload) {
        echo "product uploaded successfully";
         // while($row = $result->fetch_assoc()) {
         //   echo "id: " . $row["id"]. " - Name: " . $row["product_name"]. "-prise " . $row["prise"]. "-stock " . $row["stock"]. "<br>";
         // }
       } else {
         echo "0 results";
         }
      
   }

};
?>

