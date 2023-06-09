<?php
  // Create database connection
  $conn = mysqli_connect('localhost','root','','cart_system');
 
  
  if (isset($_POST['add_feedback'])) {

  	// Get text
  	$name = $_POST['name'];
    $email = $_POST['email'];
  	$number= $_POST['number'];
  	$subject =$_POST['subject'];
  	$message =$_POST['message'];

  	$sql = "INSERT INTO feedback (name,email,number,subject,message) VALUES ('$name', '$email','$number','$subject','$message')";

   mysqli_query($conn,$sql);
   die("<span  >Success</span>");

  }

?>
