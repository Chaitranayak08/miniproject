<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local-E</title>

  
<!--  font awesome cdn link -->
<link rel="icon" href="images/logo-final1.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet'>
<link rel="stylesheet" href=" https://fontawesome.com/">
<link rel="stylesheet" href="https://fonts.google.com/">

<!-- custom css file link-->
    <link rel="stylesheet" href="clothing_styles.css"> 
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <style>
      a{
        color: white;
        text-decoration: none;
      }
    </style>
</head>
<style>.theiaStickySidebar:after {content: ""; display: table; clear: both;}</style>
<script async="" src="https://www.googletagmanager.com/gtag/js?id=G-Q9KZND01P8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-Q9KZND01P8');

  var lat = '';
  var long = '';
</script>
<body>
    <!-- head section starts -->
<header>
    <a id="scroll-up" class="button_2" href="javascript:void()" title="Go to Top" style="display: block;"><i class="fa fa-angle-up"></i></a>
        <header class="header main_header stricky_up">
          <div class="topbar">
            <div class="top-header">
                          <div class="col-lg-2 col-md-2 col-xs-6">
                  <div class="logo border">
                    <a href="home.html" title="Local-"><img src="images/logo-final1.png" alt="Local-E"></a>
                  </div>
                </div>
                
              <div class="col-lg-2 col-md-2 hidden-xs">
                <div class="header_category_1 border">
                           Shop by Category 
                </div>
                </div>
                
                <div class="col-lg-4 col-md-3  col-lg-pull-4 col-md-pull-5 col-xs-10">
                  <div class="search-top">
                    <form method="get" action="home.html/search">
                      <div id="sw_search" class="search">
                        <div class="content-search border">
                          <input class="autosearch-input" type="text" value="" size="50" placeholder="Search by product..." name="search_keyword" id="search_keyword" required="" autocomplete="off" fdprocessedid="rqv00a" style="height: 20%;">	
                          <span class="input-group-btn">
                            <button type="submit" class="fa fa-search button-search-pro form-button" fdprocessedid="usip3"></button>
                          </span>
                          <div class="serachListingHeader"></div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

                <div class="location border">
                <!-- <a href="javascript:void();" data-toggle="modal" data-target="#location" title="Choose Location"> -->
                  <img src="images/location-pin.png" alt="error">
                <div class="location-text"><p> Benjanapadavu     </p>   
                 </div>                
            </div>
                

                <div class="border"><a href="login.html">Login/Sign-up</a></div>
                
                <div class="shopping-cart border">
                <img src="images/carts.png" alt="error">
                <div class="shopping-cart-text">
              <?php
                        $count=0;
                        if(isset($_SESSION['cart']))
                        {
                            $count=count($_SESSION['cart']);
                        }
                    ?>

                    <a href="mycart.php">
                  Cart (<?php echo $count; ?>)</a>
                </div>
                </div>
                
          </div>
          </div>
        

          
          <!-- 2nd navbar starts -->                                                                
         <div class="navbar2">
          <div class="home second">
          <a href="clothing.html"  >CLOTHING</a>
          </div>
          <div class="furni second">
         <a href="supermarket.html">SUPERMARKET</a>
         </div>
         <div class="custom second">
         <a href="kitchen_needs.html" >HOME,KITCHEN AND GARDEN</a>
         </div>
         <div class="about second">
         <a href="electronics.html" >ELECTRONICS</a>
         </div>
         <div class="contact second">
         <a href="stationery.html" >STATIONERY</a>
         </div>
         
         
       </div>
        <!-- 2nd navbar ends -->
          </div>
          </header>
          </header>
         
<!-- 
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
           -->
            
<div class="clothing-shops">
    <h4>Order Online</h4>
    <div class="cloth-shops">
      <form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
        <center>
      <img src="https://images.pexels.com/photos/18973701/pexels-photo-18973701/free-photo-of-young-woman-in-a-traditional-pink-saree-dress-posing-outside.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>BIBA</h3> 
      <p class="price">	&#8377; 2500</p>
        <p>Women's pink saree</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="BIBA">
        <input type="hidden" name="price" value="2500">
        
    </div>
    </form>
    <form action ="manage_cart.php" method="POST">

    <div class="clothing-shop1">
        <center>
      <img src="https://images.pexels.com/photos/8819340/pexels-photo-8819340.jpeg?auto=compress&cs=tinysrgb&w=400https://images.pexels.com/photos/8819340/pexels-photo-8819340.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>Max</h3> 
      <p class="price">&#8377; 1200</p>
        <p>Women's yellow and blue lehenga</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Max">
        <input type="hidden" name="price" value="1200">
        
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
      <center><img src="https://images.pexels.com/photos/9558246/pexels-photo-9558246.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error">
      </center>
      <h3>Adidas</h3> 
      <p class="price">&#8377; 500</p>
        <p>Women's basic lavender top</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Adidas">
        <input type="hidden" name="price" value="500">
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
     <center>
      <img src="https://images.pexels.com/photos/6311139/pexels-photo-6311139.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>Van Huesen</h3> 
      <p class="price">&#8377; 900</p>
        <p>Men's basic grey t-shirt</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Van_huesan">
        <input type="hidden" name="price" value="900">
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
     <center>
      <img src="https://images.pexels.com/photos/8818641/pexels-photo-8818641.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>Manyavar</h3> 
      <p class="price">&#8377; 1660</p>
        <p>Men's indian kurta</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Manyavar">
        <input type="hidden" name="price" value="1660">
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
    <center>
      <img src="https://images.pexels.com/photos/6625950/pexels-photo-6625950.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error">
      </center>
      <h3>Ralph Lauren</h3> 
      <p class="price">&#8377; 2500</p>
        <p>Men's blue and biege jeans combo</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Ralph_Lauren">
        <input type="hidden" name="price" value="2500">
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
 <center>
      <img src="https://images.pexels.com/photos/2253892/pexels-photo-2253892.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error">
      </center>
      <h3>GAP</h3> 
      <p class="price">&#8377; 450</p>
        <p>Girls fit and flare dress</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="GAP">
        <input type="hidden" name="price" value="450">
      
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
    <center>
      <img src="https://images.pexels.com/photos/2136050/pexels-photo-2136050.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>Max</h3> 
      <p class="price">&#8377; 470</p>
        <p>Girls blue frock</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Max">
        <input type="hidden" name="price" value="470">
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
     <center>
      <img src="https://images.pexels.com/photos/4144173/pexels-photo-4144173.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>Zara</h3> 
      <p class="price">&#8377; 500</p>
        <p>Boys basic yellow t-shirt</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Zara">
        <input type="hidden" name="price" value="500">
    </div>
</form>
  </div>
  </div>
  

          </body>
          </html>