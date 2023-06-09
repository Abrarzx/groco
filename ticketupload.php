<html>
    <body>
        <?php
        if (isset($_POST['tsubmit']) && isset($_FILES['uploadedFile']))
        {
        $name=$_POST["tname"];
        $subject=$_POST["tsubject"];
        $email=$_POST["temail"];
        $tcatagory=$_POST["tcatagory"];
        $tcomment=$_POST["tcomment"];   
        $submit=$_POST["tsubmit"];
        $image1 = $_FILES['uploadedFile']['name'];
        $target1= "images/ticket".basename($image1);
         $conn = mysqli_connect('localhost','root','','cart_system');
         $sql = "INSERT INTO ticket (email,name,subject,department,attachment,comments) VALUES ('$email','$name','$subject','$tcatagory','$image1','$tcomment')";
         if(mysqli_query($conn, $sql) && move_uploaded_file($_FILES['uploadedFile']['tmp_name'], $target1))
         {
            echo "Data Inserted";
         }  
         else
         {
            echo "Error : ".mysqli_error($conn);
         }
        }
        else{
            echo "connection errorr";
        }
    ?>
         </body>
</html>