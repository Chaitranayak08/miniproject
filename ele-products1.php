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
                <div class="location-text"><p> Benjanapadavu      </p>   
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
      <img src="https://images.pexels.com/photos/6608247/pexels-photo-6608247.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>Iphone 12</h3> 
      <p class="price">	&#8377; 70,500</p>
        <p>Apple Iphone 12-256GB</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
          <input type="hidden" name="item_name" value="IPhone 12">
          <input type="hidden" name="price" value="70500">
        
    </div>
                      </form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
        <center>
      <img src="https://images.pexels.com/photos/13302159/pexels-photo-13302159.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>Samsung S20</h3> 
      <p class="price">&#8377; 34,000</p>
        <p>Samsung S20-128GB</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
          <input type="hidden" name="item_name" value="Samsung S20">
          <input type="hidden" name="price" value="34000">
        
    </div>
                      </form>
                      <form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
      <center><img src="https://cdn.pixabay.com/photo/2020/03/16/11/07/xiaomi-4936657_640.jpg" alt="error">
      </center>
      <h3>Redmi Note 11 pro </h3> 
      <p class="price">&#8377; 20,000</p>
        <p>Redmi Note 11 pro-128GB</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
          <input type="hidden" name="item_name" value="Redmi Note 11 pro">
          <input type="hidden" name="price" value="20000">
    </div>
                      </form>
                      <form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
     <center>
      <img src="https://images.pexels.com/photos/434346/pexels-photo-434346.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>Macbook Pro</h3> 
      <p class="price">&#8377; 2,49,900</p>
        <p>Macbook Pro-16 inch</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
          <input type="hidden" name="item_name" value="Macbook Pro">
          <input type="hidden" name="price" value="249900">
    </div>
                      </form>
                      <form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
     <center>
      <img src="https://images.pexels.com/photos/11129922/pexels-photo-11129922.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>HP laptop</h3> 
      <p class="price">&#8377; 63,900</p>
        <p>HP laptop-35.6 cm</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
          <input type="hidden" name="item_name" value="HP Laptop">
          <input type="hidden" name="price" value="63900">
    </div>
                      </form>
                      <form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
    <center>
      <img src="https://images.pexels.com/photos/1266982/pexels-photo-1266982.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error">
      </center>
      <h3>Dell Laptop</h3> 
      <p class="price">&#8377; 60,250</p>
        <p>Dell laptop-35.6cm</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
          <input type="hidden" name="item_name" value="Dell laptop">
          <input type="hidden" name="price" value="60250">
    </div>
                      </form>
                      <form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
 <center>
      <img src="https://images.pexels.com/photos/1646704/pexels-photo-1646704.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error">
      </center>
      <h3>Airpods</h3> 
      <p class="price">&#8377; 20,900</p>
        <p>Apple airpods-3rd Gen</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
          <input type="hidden" name="item_name" value="Airpods">
          <input type="hidden" name="price" value="20900">
      
    </div>
                      </form>
                      <form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
    <center>
      <img src="https://images.pexels.com/photos/1334597/pexels-photo-1334597.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>iPad</h3> 
      <p class="price">&#8377; 1,12,900</p>
        <p>Apple iPad-6th Gen</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
          <input type="hidden" name="item_name" value="iPad">
          <input type="hidden" name="price" value="112900">
    </div>
                      </form>
                      <form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
     <center>
      <img src="https://images.pexels.com/photos/1649771/pexels-photo-1649771.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>Heaphones</h3> 
      <p class="price">&#8377; 1500</p>
        <p>Bluetooth headphones</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
          <input type="hidden" name="item_name" value="Headphone">
          <input type="hidden" name="price" value="1500">
    </div>
                      </form>
  </div>
  </div>
  

          </body>
          </html>