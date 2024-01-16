<?php
session_start();

 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
    if(isset($_POST['Add_to_Cart']))
    {
        if(isset($_SESSION['cart']))
        {
           $myitems= array_column($_SESSION['cart'],'item_name');
           if(in_array($_POST['item_name'],$myitems))
           {
             echo"<script> 
             alert('item already added');
             window.history.go(-1);
             </script>";
           }
           else{
           $count=count($_SESSION['cart']);
           $_SESSION['cart'][$count]= array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'Quantity'=>1);
           echo"<script> 
           alert('ITEM SUCCESSFULLY ADDED TO CART');
           window.history.go(-1);
           </script>";
           }
        }
        else
        {
            $_SESSION['cart'][0]= array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'Quantity'=>1);
            echo"<script> 
             alert('ITEM SUCCESSFULLY ADDED TO CART');
             window.history.go(-1);
             </script>";
        }
    }
    if(isset($_POST['Remove_item']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart']= array_values($_SESSION['cart']);
            echo "<script>
            alert('Item Removed');
            window.location.href='mycart.php';
            </script>";
        }
            
    }
 
}

 ?>