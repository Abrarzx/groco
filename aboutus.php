<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
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
 .about {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  gap: 1.5rem;
}

.about .image {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 40rem;
          flex: 1 1 40rem;
}

.about .image img {
  width: 100%;
}

.about .content {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 40rem;
          flex: 1 1 40rem;
}

.about .content span {
  color: #bac34e;
  font-size: 2.5rem;
}

.about .content h3 {
  color: #222;
  font-size: 3rem;
  padding-top: .5rem;
}

.about .content p {
  color: #666;
  font-size: 1.4rem;
  line-height: 2;
  padding: 1rem 0;
}

.gallery .box-container {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (minmax(30rem, 1fr))[auto-fit];
      grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
  gap: 1.5rem;
}

.gallery .box-container .box {
  height: 25rem;
  overflow: hidden;
  position: relative;
}

.gallery .box-container .box img {
  height: 100%;
  width: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}

.gallery .box-container .box:hover img {
  -webkit-transform: scale(1.2);
          transform: scale(1.2);
}

.gallery .box-container .box:hover .icons {
  bottom: 0;
}

.gallery .box-container .box .icons {
  text-align: center;
  background: rgba(0, 0, 0, 0.7);
  padding: 1.5rem 0;
  position: absolute;
  bottom: -6rem;
  left: 0;
  right: 0;
  z-index: 10;
}

.gallery .box-container .box .icons a {
  font-size: 2.5rem;
  color: #fff;
  margin: 0 1.5rem;
}

.gallery .box-container .box .icons a:hover {
  color: #bac34e;
}

</style>
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
                <a href="logout.php" class="fa fa-sign-out"></a>
            </div>
        </div>
    </header>
<!-- header section ends -->

<div class="heading">
    <h1>about us</h1>
    <p> <a href="userdashboard.php">home >></a> about </p>
</div>

<section class="about">

    <div class="image">
        <img src="image/about-img.jpg" alt="">
    </div>

    <div class="content">
        <span>welcome to grocery bazaar</span>
        <h3>fresh and organic groceries</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vel sequi nostrum quae nobis non quaerat nisi voluptatibus recusandae reprehenderit tempore eligendi, eum quibusdam perferendis dicta, incidunt dolores nemo ex.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem cumque molestiae blanditiis deleniti aspernatur, ab tempora quisquam sapiente commodi hic.</p>
        <a href="#" class="btn">read more</a>
    </div>

</section>

<section class="gallery">

    <h1 class="title"> our <span>gallery</span> <a href="#">view all >></a> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/gallery-img-1.jpg" alt="">
            <div class="icons">
                <a href="#" class="fas fa-eye"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share-alt"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/gallery-img-2.jpg" alt="">
            <div class="icons">
                <a href="#" class="fas fa-eye"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share-alt"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/gallery-img-3.jpg" alt="">
            <div class="icons">
                <a href="#" class="fas fa-eye"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share-alt"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/gallery-img-4.jpg" alt="">
            <div class="icons">
                <a href="#" class="fas fa-eye"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share-alt"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/gallery-img-5.jpg" alt="">
            <div class="icons">
                <a href="#" class="fas fa-eye"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share-alt"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/gallery-img-6.jpg" alt="">
            <div class="icons">
                <a href="#" class="fas fa-eye"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share-alt"></a>
            </div>
        </div>

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













<!-- custom css file link  -->
<script src="js/script.js"></script>

</body>
</html>