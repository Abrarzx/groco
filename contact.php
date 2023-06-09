<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="style.css">
<style>
section {
  padding: 3rem 9%;
}
.heading {
  background: url(image/heading-bg.jpg) no-repeat;
  background-size: cover;
  background-position: center;
  text-align: center;
  padding-top: 12rem;
  padding-bottom: 8rem;
}
.heading h1 {
    color: #222;
    font-size: 4rem;
}
.heading p {
    padding-top: 1rem;
    font-size: 2rem;
    color: #666;
}
.heading p a {
  color: #222;
  padding-right: .5rem;
}
.heading p a:hover {
  color: #27ae60;;
}
h3 {
    display: block;
    font-size: 1.17em;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}       

.contact .icons-container {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (minmax(29rem, 1fr))[auto-fit];
      grid-template-columns: repeat(auto-fit, minmax(29rem, 1fr));
  gap: 1.5rem;
}

.contact .icons-container .icons {
  text-align: center;
  border: 0.1rem solid rgba(0, 0, 0, 0.1);
  padding: 2rem;
}

.contact .icons-container .icons i {
  height: 6rem;
  width: 6rem;
  line-height: 6rem;
  font-size: 2.5rem;
  background: #bac34e;
  color: #fff;
  border-radius: 50%;
}

.contact .icons-container .icons h3 {
  color: #222;
  font-size: 2rem;
  padding: 1rem 0;
}

.contact .icons-container .icons p {
  color: #666;
  font-size: 1.5rem;
  line-height: 2;
}

.contact .row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  gap: 1.5rem;
  margin-top: 2rem;
}

.contact .row form {
  padding: 2rem;
  border: 0.1rem solid rgba(0, 0, 0, 0.1);
  -webkit-box-flex: 1;
      -ms-flex: 1 1 40rem;
          flex: 1 1 40rem;
}

.contact .row form h3 {
  font-size: 2.5rem;
  padding-bottom: 1rem;
  color: #222;
}

.contact .row form .inputBox {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}

.contact .row form .inputBox input {
  width: 49%;
}

.contact .row form .inputBox .box,
.contact .row form textarea {
  padding: 1rem 1.2rem;
  font-size: 1.6rem;
  border: 0.1rem solid rgba(0, 0, 0, 0.1);
  color: #222;
  text-transform: none;
  margin: .7rem 0;
}

.contact .row form textarea {
  width: 100%;
  height: 15rem;
  resize: none;
}

.contact .row .map {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 40rem;
          flex: 1 1 40rem;
  width: 100%;
}

.credit {
  text-align: center;
  background: #27ae60;
  color: #fff;
  font-size: 2rem;
}



</style>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' /> 
    <!-- custom css file link  -->


</head>
<body>
    
<!-- header section starts  -->
<header>
        <div class="header-1">
            <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i>grocery Bazaar </a>
         
        </div>
        <div class="header-2">
            <div id="menu-bar" class="fas fa-bars"></div>

            <nav class="navbar">
                <a href="userdashboard.php">home</a>
                <a href="userdashboard.php">category</a>
                <a href="userdashboard.php">product</a>
                <a href="userdashboard.php">deal</a>
                <a href="contact.php">contact</a>
                <a href="aboutus.php">about us</a>
            </nav>
            <div class="icons">
                <a href="login.php" class="fas fa-user-circle"></a>
            </div>
        </div>
    </header>
<!-- header section ends -->

<div class="heading">
    <h1>contact us</h1>
    <p> <a href="index.php">home >></a> contact </p>
</div>

<section class="contact">


    <div class="icons-container">

        <div class="icons">
           <a href="#"> <i class="fas fa-phone"></i></a>
            <h3>our number</h3>
            <p>+91-12345678910</p>
          
        </div>

        <div class="icons">
          <a href="#"><i class="fas fa-envelope"></i></a>  
            <h3>our email</h3>
            <p>grocerybazaar@gmail.com</p>
            
        </div>

        <div class="icons">
           <a href=""> <i class="fas fa-map-marker-alt"></i></a>
            <h3>our address</h3>
            <p>Bangalore, india - 560054</p>
        </div>

    </div>

    <div class="row">

        <form action="feedback.php" method="post" enctype="multipart/form-data">
            <h3>get in touch</h3>
            <div class="inputBox">
                <input type="text" placeholder="enter your name" name="name" class="box">
                <input type="email" placeholder="enter your email" name="email" class="box">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="enter your number"  name="number"class="box">
                <input type="text" placeholder="enter your subject"  name="subject" class="box">
            </div>
            <textarea placeholder="your message"  name="message"cols="30" rows="10"></textarea>
            <input type="submit" value="send message" name="add_feedback" class="btn">
        </form>

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31097.403547044854!2d77.564596!3d13.0244971!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6075bd8d8aed97ab!2sRamaiah%20Institute%20Of%20Technology!5e0!3m2!1sen!2sin!4v1659346269519!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>

</section>























<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>grocery Bazaar</a>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam culpa sit enim nesciunt rerum
                 laborum illum quam error ut alias!</p>
            <div class="share">
                <a href="#" class="btn fab fa-facebook-f"></a>
                <a href="#" class="btn fab fa-twitter"></a>
                <a href="#" class="btn fab fa-instagram"></a>
                <a href="#" class="btn fab fa-linkedin"></a>
            </div>
        </div>
        
        <div class="box">
            <h3>our location</h3>
            <div class="links">
                <a href="#">india</a>
                <a href="#">USA</a>
                <a href="#">france</a>
                <a href="#">japan</a>
                <a href="#">russia</a>
            </div>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <div class="links">
                <a href="#">home</a>
                <a href="#">category</a>
                <a href="#">product</a>
                <a href="#">deal</a>
                <a href="#">contact</a>
            </div>
        </div>

        <div class="box">
            <h3>download app</h3>
            <div class="links">
                <a href="#">google play</a>
                <a href="#">window xp</a>
                <a href="#">app store</a>
            </div>
        </div>

    </div>

<section class="credit">created by abrar ul haq | all rights reserved!</section>

<!-- footer section ends -->


</body>
</html>


