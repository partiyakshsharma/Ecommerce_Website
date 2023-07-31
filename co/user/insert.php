<?php
session_start();
session_destroy();
   if(isset($_POST['addcart'])){
     $product_name=$_POST['pname'];
     $product_price=$_POST['price'];
     $product_quantity=$_POST['quan'];
     $_SESSION['cart'][] = array('productname'=> $product_name,
                                  'productprice'=>$product_price,
                                  'quantity'=>$product_quantity );
                            
}

?>