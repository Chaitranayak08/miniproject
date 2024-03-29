<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local-E</title> v

  
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
<script src="product_search.js"></script>
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
                          <input class="autosearch-input" type="text" value="" size="50" placeholder="Search by product..." name="search_keyword" id="search_keyword" required="" autocomplete="off" fdprocessedid="rqv00a" style="height: 20%;"onkeyup="search()">	
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
                <div class="location-text"><p> Benjanapadavu    </p>   
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
      <img src="https://images.pexels.com/photos/144206/pexels-photo-144206.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>Onion</h3> 
      <p class="price">	&#8377; 40</p>
        <p>1KG onion</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Onion">
        <input type="hidden" name="price" value="40">
        
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
        <center>
      <img src="https://images.pexels.com/photos/144248/potatoes-vegetables-erdfrucht-bio-144248.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>Potato</h3> 
      <p class="price">&#8377; 35</p>
        <p>1KG potato</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Potato">
        <input type="hidden" name="price" value="35">
        
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
      <center><img src="https://images.pexels.com/photos/10048317/pexels-photo-10048317.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error">
      </center>
      <h3>Coriander leaves</h3> 
      <p class="price">&#8377; 15</p>
        <p>1 bunch Coriander leaves</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Coriander">
        <input type="hidden" name="price" value="15">
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
     <center>
      <img src="https://images.pexels.com/photos/672101/pexels-photo-672101.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>Apples</h3> 
      <p class="price">&#8377; 150</p>
        <p>1 dozen apples</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Apple">
        <input type="hidden" name="price" value="150">
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
     <center>
      <img src="https://images.pexels.com/photos/70746/strawberries-red-fruit-royalty-free-70746.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>Strawberries</h3> 
      <p class="price">&#8377; 130</p>
        <p>1 box strawberry</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Strawberries">
        <input type="hidden" name="price" value="130">
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
    <center>
      <img src="https://images.pexels.com/photos/51958/oranges-fruit-vitamins-healthy-eating-51958.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error">
      </center>
      <h3>Oranges</h3> 
      <p class="price">&#8377; 70</p>
        <p>1 dozen oranges</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Oranges">
        <input type="hidden" name="price" value="70">
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
 <center>
      <img src="https://images.pexels.com/photos/8108170/pexels-photo-8108170.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error">
      </center>
      <h3>Rice</h3> 
      <p class="price">&#8377; 400</p>
        <p>1KG rice</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Rice">
        <input type="hidden" name="price" value="400">
      
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
    <center>
      <img src="https://images.pexels.com/photos/5618033/pexels-photo-5618033.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>Butter</h3> 
      <p class="price">&#8377; 80</p>
        <p>500gm Butter </p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Butter">
        <input type="hidden" name="price" value="80">
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
     <center>
      <img src="https://images.pexels.com/photos/209206/pexels-photo-209206.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>Bun </h3> 
      <p class="price">&#8377; 100</p>
        <p>2 loaf bun</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Bun">
        <input type="hidden" name="price" value="100">
    </div>
</form>
  </div>
  </div>
  

          </body>
          </html>