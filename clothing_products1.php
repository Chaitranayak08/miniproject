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
                    <a href="home.html" title="Local-E"><img src="images/logo-final1.png" alt="Local-E"></a>
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
                <div class="location-text"><p> Benjanapadavu   </p>   
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
      <img src="https://images.pexels.com/photos/985635/pexels-photo-985635.jpeg?auto=compress&cs=tinysrgb&w=600" alt="error"></center>
      <h3>Zara</h3> 
      <p class="price">	&#8377; 1580</p>
        <p>Women's Green Midi Dress</p>
          <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
          <input type="hidden" name="item_name" value="dress-1">
          <input type="hidden" name="price" value="1580">
        
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
       
        <center>
      <img src="https://images.pexels.com/photos/7691089/pexels-photo-7691089.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="error"></center>
      <h3>Forever 21</h3> 
      <p class="price">&#8377; 2100</p>
        <p>Women's pink and grey blazer combo</p>
  <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
  <input type="hidden" name="item_name" value="dress-2">
          <input type="hidden" name="price" value="2100">

    </div>
    </form>
    <form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
      <center><img src="https://images.pexels.com/photos/9558695/pexels-photo-9558695.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt="error">
      </center>
      <h3>Adidas</h3> 
      <p class="price">&#8377; 700</p>
        <p>Women's basic black top</p>
  <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
  <input type="hidden" name="item_name" value="dress-3">
          <input type="hidden" name="price" value="700">
    </div>
    </form>
    <form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
     <center>
      <img src="https://images.pexels.com/photos/4963371/pexels-photo-4963371.jpeg?auto=compress&cs=tinysrgb&w=600" alt="error"></center>
      <h3>Van Huesen</h3> 
      <p class="price">&#8377; 900</p>
        <p>Men's basic white shirt</p>
  <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
  <input type="hidden" name="item_name" value="dress-4">
          <input type="hidden" name="price" value="900">
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
     <center>
      <img src="https://images.pexels.com/photos/6311390/pexels-photo-6311390.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt="error"></center>
      <h3>Adidas</h3> 
      <p class="price">&#8377; 660</p>
        <p>Men's beige hoodie</p>
  <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
  <input type="hidden" name="item_name" value="dress-5">
          <input type="hidden" name="price" value="660">
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
    <center>
      <img src="https://images.pexels.com/photos/983497/pexels-photo-983497.jpeg?auto=compress&cs=tinysrgb&w=600" alt="error">
      </center>
      <h3>Ralph Lauren</h3> 
      <p class="price">&#8377; 1580</p>
        <p>Men's black leather jacket</p>
  <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
  <input type="hidden" name="item_name" value="dress-6">
          <input type="hidden" name="price" value="1580">
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
 <center>
      <img src="https://images.pexels.com/photos/3771644/pexels-photo-3771644.jpeg?auto=compress&cs=tinysrgb&w=600" alt="error">
      </center>
      <h3>GAP</h3> 
      <p class="price">&#8377; 550</p>
        <p>Girls fit and flare dress</p>
  <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
  <input type="hidden" name="item_name" value="dress-7">
          <input type="hidden" name="price" value="550">
      
    </div>
</form>
    <form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
    <center>
      <img src="https://images.pexels.com/photos/5560059/pexels-photo-5560059.jpeg?auto=compress&cs=tinysrgb&w=600" alt="error"></center>
      <h3>Max</h3> 
      <p class="price">&#8377; 470</p>
        <p>Boys red tshirt</p>
  <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
  <input type="hidden" name="item_name" value="dress-8">
          <input type="hidden" name="price" value="470">
    </div>
</form>
<form action ="manage_cart.php" method="POST">
    <div class="clothing-shop1">
     <center>
      <img src="https://images.pexels.com/photos/9511311/pexels-photo-9511311.jpeg?auto=compress&cs=tinysrgb&w=600" alt="error"></center>
      <h3>Zara</h3> 
      <p class="price">&#8377; 500</p>
        <p>Boys beige hoodie</p>
  <center><p><button type="submit" name="Add_to_Cart">Add to Cart</button></p></center>
  <input type="hidden" name="item_name" value="dress-9">
          <input type="hidden" name="price" value="500">
    </div>
</form>
  </div>
  </div>
  

          </body>
          </html>
        
