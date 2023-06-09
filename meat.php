<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>grocery website</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script> -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <div class="header-1">
            <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i>grocery Bazaar </a>
            <form action="" class="search-box-container">

                <input type="search" id="search-box" placeholder="search here....">
                <label for="search-box" class="fas fa-search"></label>
            </form>
        </div>
        <div class="header-2">
            <div id="menu-bar" class="fas fa-bars"></div>

            <nav class="navbar">
                <a href="#home">home</a>
                <a href="#category">category</a>
                <a href="#product">product</a>
                <a href="#deal">deal</a>
                <a href="#contact">contact</a>
            </nav>
            <div class="icons">
                <a href="login.php" class="fas fa-user-circle"></a>
                
            </div>
        </div>
    </header>

<h1 class="heading"> <span>meats</span></h1>
<div class="container" id="product">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
      <?php
  			include 'config.php';
  			$stmt = $conn->prepare('SELECT * FROM meat');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
        <div class="card-deck">
          <div class="card p-2 border-secondary mb-2">
            <img src="<?= $row['product_image'] ?>" class="card-img-top" height="250">
            <div class="card-body p-1">
              <h4 class="card-title text-center text-info"><?= $row['product_name'] ?></h4>
              <h5 class="card-text text-center text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?>/-</h5>

            </div>
            <div class="card-footer p-1">
              <form action="" class="form-submit">
                <div class="row p-2">
                  <div class="col-md-6 py-1 pl-4">
                    <b>Quantity : </b>
                  </div>
                  <div class="col-md-6">
                    <input type="number" class="form-control pqty" min="1" max="1000" value="<?= $row['product_qty'] ?>">
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                <button class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                  cart</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  <!-- deal section -->

<section class="deal" id="deal">
    <div class="content">
        <h3 class="title">deal of the day</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta,
             totam magni quasi esse autem incidunt! Possimus dolore commodi neque reiciendis quam, 
             doloremque, voluptate mollitia ducimus debitis ipsa sint aut doloribus!</p>
        <div class="count-down">
            <div class="box">
                <h3 id="day">00</h3>
                <span>day</span>
            </div>
            <div class="box">
                <h3 id="hour">00</h3>
                <span>hours</span>
            </div>
            <div class="box">
                <h3 id="minute">00</h3>
                <span>minute</span>
            </div>
            <div class="box">
                <h3 id="second">00</h3>
                <span>seconds</span>
            </div>
        </div>
        <a href="#" class="btn">check the deal</a>
    </div>
</section>
<!-- deal section -->
<!-- contact section -->
<section class="contact" id="contact" >
    <h1 class="heading" >For any support just send your query</h1>
    <form action="feedback.php" method="post" enctype="multipart/form-data">
        <div class="inputbox">
            <input type="text" placeholder="name" name="name"  required>
            <input type="text" placeholder="email" name="email"  required >
        </div>
        <div class="inputbox">
            <input type="number" placeholder="number" name="number">
            <input type="text" placeholder="subject" name="subject">
        </div>
        <textarea placeholder="message" name="message" id="" cols="30" rows="10"  required></textarea>
        <input type="submit" value="send message" name="add_feedback" class="btn">
    </form>
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

    <!-- footer section ends -->
    </section>
<!-- contact section -->
    <script src="script.js"></script>
    
  
  </body>
  </html>