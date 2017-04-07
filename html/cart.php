<!DOCTYPE html>
<html>
<head>
  <title>Shopping Cart</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/cart.css"/>
</head>

<body>
<p>
  <?php
    include_once('header.php');    
?>
</p>
 
  <div class="container text-center">
    <div class="col-md-5 col-sm-12">
      <div class="bigcart"></div>
      <h1>Your Shopping Cart</h1>
      <p>Free shipping with $199+ purchase in the U.S.</p>
    </div>
    <div class="col-md-7 col-sm-12 text-left">
      <ul>
        <li class="row list-inline columnCaptions"> <span>QTY</span> <span>ITEM</span> <span>Price</span> </li>
        <li class="row"> <span class="quantity">1</span> <span class="itemName">Birthday Cake</span> <span class="popbtn"><a class="arrow"></a></span> <span class="price">$45.00</span> </li>
        <li class="row"> <span class="quantity">50</span> <span class="itemName">Party Cups</span> <span class="popbtn"><a class="arrow"></a></span> <span class="price">$5.00</span> </li>
        <li class="row"> <span class="quantity">1</span> <span class="itemName">Bullet-proof vest</span> <span class="popbtn"  data-parent="#asd" data-toggle="collapse" data-target="#demo"><a class="arrow"></a></span> <span class="price">$450.00</span> </li>
        <div class="clearfix"></div>
        <li class="row totals"> <span class="itemName">Total:</span> <span class="price">$500.00</span> </li>
          <div class="checkout"> <a href="checkout.php" class="btn btn-danger"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>Check Out</a> </div>
       
      </ul>
    </div>
  </div>
  
 <p>
<?php
    include_once('footer.php');
?>
</p> 
  <!-- The popover content -->
  
  <div id="popover" style="display: none"> <a href="#"><span class="glyphicon glyphicon-pencil"></span></a> <a href="#"><span class="glyphicon glyphicon-remove"></span></a> </div>
  
  <!-- JavaScript includes --> 
  
  <script src="js/jquery-1.11.0.min.js"></script> 
  <script src="js/bootstrap.min.js"></script> 
  <script src="js/cart.js"></script>
</body>
</html>