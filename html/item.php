<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Item Details</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!--<link href="css/custom.css" rel="stylesheet" type="text/css">-->
  <link href="css/item.css" rel="stylesheet" type="text/css">
  
</head>

<body>
<p>
  <?php
    include_once('header.php');    
?>
</p>
  <div id="item">
    <div class="row">
      <div class="col-xs-4 item-photo"> <img style="max-width:100%;" src="images/T-shirt_01.jpg" alt=""> </div>
      <div class="col-xs-5" style="border:0px solid #eee">
        <h3>Item 1</h3>
        <h5 style="color:#337ab7">Availability: in stock</h5>
        <div class="ratings">
          <p><span class="glyphicon glyphicon-heart"></span><span class="glyphicon glyphicon-heart"></span><span class="glyphicon glyphicon-heart"></span><span class="glyphicon glyphicon-heart"></span><span class="glyphicon glyphicon-heart"></span> &nbsp;115 reviews</p>
        </div>
        <h6 class="title-price"><small>Price</small></h6>
        <h3 style="margin-top:0px;">US$ 59.99</h3>
        <div class="section">
          <h6 class="title-attr"><small>Color</small></h6>
          <div>
            <div class="attr" style="width:25px;background:black;"></div>
            <div class="attr" style="width:25px;background:white;"></div>
          </div>
        </div>
        <div class="section">
          <h6 class="title-attr"><small>Size</small></h6>
          <div>
            <div class="attr2">S</div>
            <div class="attr2">M</div>
            <div class="attr2">L</div>
          </div>
        </div>
        <div class="section">
          <h6 class="title-attr"><small>Quantity</small></h6>
          <div>
            <div class="btn-minus"><span class="glyphicon glyphicon-minus"></span></div>
            <input value="1" />
            <div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>
          </div>
        </div>
        <div class="section">
          <div> <a href="cart.php" class="btn btn-primary btn-lg"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a> </div>
          <h6><a href="#"><span class="glyphicon glyphicon-heart-empty" style="cursor:pointer;"></span> Write a review</a></h6>
        </div>
      </div>
      <div class="col-xs-10">
        <ul class="menu-items">
          <li class="active">Description</li>
          <li><a href="#">Shipping</a></li>
          <li><a href="#">Returns</a></li>
          <li><a href="#">Reviews</a></li>
        </ul>
        <div style="width:100%;border-top:1px solid silver">
          <p style="padding:15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mauris sem, finibus et quam vel, placerat condimentum tellus. Nunc vehicula dolor metus, vitae condimentum justo iaculis ac. Curabitur porta enim sed arcu congue scelerisque. Nam eget eros ullamcorper, eleifend est in, posuere lectus.</p>
          <ul>
            <li>Orci varius natoque penatibus et magnisurient</li>
            <li>Mauris non diam non lacus ornare sodales</li>
            <li>Class aptent taciti sociosqu ad litora</li>
            <li>Aenean id varius ex</li>
            <li>Fusce ut bibendum enim</li>
            <li>Vestibulum magna ipsum et nisl</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
    
<p>
<?php
    include_once('footer.php');
?>
</p>
  <script src="js/item.js"></script>
</body>
</html>