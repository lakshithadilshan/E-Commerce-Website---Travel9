<?php
session_start(); 
include 'config.php';

include("login/customer/includes/header.php");
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Travel9</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>




  <!-- Navbar start 
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="index.php"><i class=""></i>&nbsp;&nbsp;Travel9</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" href="http://localhost/project/index.php"><i class=""></i>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/project/campign.php#"><i class="fas fa-th-list mr-2"></i>Campign</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/project/hiking.php"><i class="fas fa-th-list mr-2"></i>Hiking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/project/swimming.php"><i class="fas fa-th-list mr-2"></i>Swimming</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/project/diving.php"><i class="fas fa-th-list mr-2"></i>Diving</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/project/other.php"><i class="fas fa-th-list mr-2"></i>Other</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/project/about.php"><i class="fas fa-th-list mr-2"></i>About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/project/contact/contact.php"><i class="fas fa-th-list mr-2"></i>Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/project/checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </li>
      </ul>
    </div>
  </nav>-->
  
  <section class="categories">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 p-0">
          <div class="categories_item categories_large_item">
            <img src="img/categories/001.jpg" alt="" class="img-fluid">
            <div class="categories_text">
              <h1>Camping Accessories</h1>
              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
              <a href="http://localhost/project/campign.php#">Buy now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12 p-0">
              <div class="categories_item">
                <img src="img/categories/002.jpg" alt="" class="img-fluid">
                <div class="categories_text">
                  <h4>Hiking <br> Accessories</h4>
                  <p>358 items</p>
                  <a href="http://localhost/project/hiking.php">Buy now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 p-0">
              <div class="categories_item">
                <img src="img/categories/003.jpg" alt="" class="img-fluid">
                <div class="categories_text">
                  <h4>Other <br> Accessories</h4>
                  <p>273 items</p>
                  <a href="#">Buy now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 p-0">
              <div class="categories_item">
                <img src="img/categories/004.jpg" alt="" class="img-fluid">
                <div class="categories_text">
                  <h4>Diving <br> Accessories</h4>
                  <p>159 items</p>
                  <a href="http://localhost/project/diving.php">Buy now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 p-0">
              <div class="categories_item">
                <img src="img/categories/005.jpg" alt="" class="img-fluid">
                <div class="categories_text">
                  <h4>Swimming <br> Accessories</h4>
                  <p>792 items</p>
                  <a href="http://localhost/project/swimming.php">Buy now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container">
      
      <h2 align="center">Best offers for You</h2><br />
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon">Search</span>
          <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
        </div>
      </div>
      <br />
      <div id="result"></div>
    </div>
    <div style="clear:both"></div>

  <!-- Displaying Products Start -->
  <div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
      <?php
  			
  			$stmt = $conn->prepare('SELECT * FROM product');
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
                    <input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>">
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
 
  <section class="newsletter-area spad">
    <div class="container">
      <form method="post" action="#">
        <p class="text-center">
          Subscribe to us for mailing list to receive updates on new arrivals, specials offers and other discount information.
        </p>
        <div class="row subscribe-sec">
          <div class="col-md-9">
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email..." required="">
          </div>
          <div class="col-md-3">
            <button type="submit" class="btn submit">
              Subscribe
            </button>
          </div>
        </div>
      </form>
    </div>
  </section>

<section class="footer spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="footer_about">
            <div class="footer_logo">
              <a href="index.html">Travel9<span>.</span></a>
            </div>
            <p>Travel9
              <br>
              Best Offers for You

            </p>
            <div class="footer_social">
              <a href="#">
                <i class="fa fa-facebook"></i>
              </a>
              <a href="#">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fa fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fa fa-linkedin"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-3">
          <div class="footer_widget">
            <h6>Quick Links</h6>
            <ul>
              <li><a href="#">About</a></li>
              <li><a href="#">Blogs</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3">
          <div class="footer_widget">
            <h6>Accounts</h6>
            <ul>
              <li><a href="#">My Account</a></li>
              <li><a href="#">Login</a></li>
              <li><a href="#">Order Tracking</a></li>
              <li><a href="#">Checkout</a></li>
              <li><a href="#">Wishlist</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-3">
          <div class="footer_widget">
            <h6>Support</h6>
            <ul>
              <li><a href="#">Frequently Asked Questions</a></li>
              <li><a href="#">Terms & Conditions</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Report a Payment Issue</a></li>
              <li><a href="#">24/7 Support</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="footer_bottom text-center py-4">
    <p class="mb-0">
      Copyright Reserved 
      <a href="http://localhost/project/team.php">TravelNine Team</a>
    </p>
  </div>


  <!-- Displaying Products End -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.countdown.min.js"></script>
<script type="text/javascript" src="main.js"></script>  
</body>

<script>
$(document).ready(function(){
  load_data();
  function load_data(query)
  {
    if(!query==""){

     $.ajax({
          url:"fetch.php",
          method:"post",
          data:{query:query},
          success:function(data)
          {
            $('#result').html(data);
          }
        });
    }
  
  }
  
  $('#search_text').keyup(function(){
    var search = $(this).val();
    if(search != '')
    {
      load_data(search);
    }
    else
    {
      load_data();      
    }
  });
});
</script>
