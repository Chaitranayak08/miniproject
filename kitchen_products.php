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
                <div class="location-text"><p> Location     </p>   
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
      <img src="https://images.pexels.com/photos/3555618/pexels-photo-3555618.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>Bedsheet</h3> 
      <p class="price">	&#8377; 2000</p>
        <p>Queen size bedsheet</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Bedsheet">
        <input type="hidden" name="price" value="2000">
        
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
        <center>
      <img src="https://images.pexels.com/photos/1038179/pexels-photo-1038179.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>Home lights</h3> 
      <p class="price">&#8377; 1200</p>
        <p>Vintage home lamps</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Home lights">
        <input type="hidden" name="price" value="1200">
        
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
      <center><img src="https://images.pexels.com/photos/1248583/pexels-photo-1248583.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error">
      </center>
      <h3>Pillows</h3> 
      <p class="price">&#8377; 2500</p>
        <p>Couch pillows-set of 3</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Pillows">
        <input type="hidden" name="price" value="2500">
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
     <center>
      <img src="https://images.pexels.com/photos/6213671/pexels-photo-6213671.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>Crockery</h3> 
      <p class="price">&#8377; 3900</p>
        <p>Vintage Crockery set</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Crockery">
        <input type="hidden" name="price" value="3900">
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
     <center>
      <img src="https://cdn.pixabay.com/photo/2016/11/19/12/37/knives-1839061_1280.jpg" alt="error"></center>
      <h3>Knives</h3> 
      <p class="price">&#8377; 1200</p>
        <p>Knives-set of 5</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Knives">
        <input type="hidden" name="price" value="1200">
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
    <center>
      <img src="https://images.pexels.com/photos/4778355/pexels-photo-4778355.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error">
      </center>
      <h3>Storage boxes</h3> 
      <p class="price">&#8377; 1500</p>
        <p>Kitchen storage containers-set of 4</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Storage boxes">
        <input type="hidden" name="price" value="1500">
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
 <center>
      <img src="https://images.pexels.com/photos/5027617/pexels-photo-5027617.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error">
      </center>
      <h3>Hedge Shears</h3> 
      <p class="price">&#8377; 820</p>
        <p>Gardening Hedge Shears</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Hedge Shears">
        <input type="hidden" name="price" value="820">
      
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
    <center>
      <img src="https://images.pexels.com/photos/8266188/pexels-photo-8266188.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>Rake</h3> 
      <p class="price">&#8377; 500</p>
        <p>Gardening Rake</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Rake">
        <input type="hidden" name="price" value="500">
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
     <center>
      <img src="https://images.pexels.com/photos/6508404/pexels-photo-6508404.jpeg?auto=compress&cs=tinysrgb&w=400" alt="error"></center>
      <h3>Watering can</h3> 
      <p class="price">&#8377; 450</p>
        <p>Watering can for plants</p>
        <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
        <input type="hidden" name="item_name" value="Watering can">
        <input type="hidden" name="price" value="450">
    </div>
</form>
  </div>
  </div>
  

          </body>
          </html>