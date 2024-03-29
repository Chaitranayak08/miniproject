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
      <img src="https://images.pexels.com/photos/4476376/pexels-photo-4476376.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>Notebook</h3> 
      <p class="price">	&#8377; 250</p>
        <p>Notebook 200pages</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Notebook">
        <input type="hidden" name="price" value="250">
        
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
        <center>
      <img src="https://images.pexels.com/photos/983826/pexels-photo-983826.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>Ball Point pens</h3> 
      <p class="price">&#8377; 60</p>
        <p>Blue ball point pens-6pens</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Ball Point pens">
        <input type="hidden" name="price" value="60">
        
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
      <center><img src="https://images.pexels.com/photos/760710/pexels-photo-760710.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error">
      </center>
      <h3>Annual Planner </h3> 
      <p class="price">&#8377; 1,000</p>
        <p>Annual planner and journal</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Annual Planner">
        <input type="hidden" name="price" value="1000">
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
     <center>
      <img src="https://images.pexels.com/photos/190295/pexels-photo-190295.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>Envelopes</h3> 
      <p class="price">&#8377; 60</p>
        <p>Brown Envelopes-set of 3</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Envelopes">
        <input type="hidden" name="price" value="60">
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
     <center>
      <img src="https://images.pexels.com/photos/7718706/pexels-photo-7718706.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>Stapler</h3> 
      <p class="price">&#8377; 150</p>
        <p>Stapler and 1 set of stapler pins</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Stapler">
        <input type="hidden" name="price" value="150">
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
    <center>
      <img src="https://images.pexels.com/photos/2836955/pexels-photo-2836955.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error">
      </center>
      <h3>Faber castel</h3> 
      <p class="price">&#8377; 200</p>
        <p>Faber castel Color pencils</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Faber Castel">
        <input type="hidden" name="price" value="200">
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
 <center>
      <img src="https://images.pexels.com/photos/157526/pexels-photo-157526.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error">
      </center>
      <h3>Camlin</h3> 
      <p class="price">&#8377; 150</p>
        <p>Camlin Crayons</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Camlin">
        <input type="hidden" name="price" value="150">
      
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
    <center>
      <img src="https://images.pexels.com/photos/6070384/pexels-photo-6070384.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>Craft papers</h3> 
      <p class="price">&#8377; 50</p>
        <p>Colored craft papers-10sheets</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Craft papers">
        <input type="hidden" name="price" value="50">
    </div>
</form>
<form action ="manage_cart.php" method="POST">

    <div class="clothing-shop1">
     <center>
      <img src="https://images.pexels.com/photos/1152666/pexels-photo-1152666.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>Markers</h3> 
      <p class="price">&#8377; 500</p>
        <p>Colored marker pens-6pens</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Markers">
        <input type="hidden" name="price" value="500">
    </div>
</form>
  </div>
  </div>
  

          </body>
          </html>