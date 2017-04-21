<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VF Products 2</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/custom.css" rel="stylesheet" type="text/css">  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->  
</head>

<body>
  <p>
  <?php
    include_once('header.php');    
?>
</p>
  <div class="clearfix"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h1 style="color:#900;">VF</h1>
        <div class="list-group"> <a href="products.php" class="list-group-item">Category 1: &nbsp;&nbspT-shirts </a> <a href="products2.php" class="list-group-item">Category 2: &nbsp;&nbsp;Hats</a> <a href="products3.php" class="list-group-item">Category 3: &nbsp;&nbspJeans </a> </div>
      </div>
      <div class="col-md-9">
        <div class="row carousel-holder">
          <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="item active"> <img class="slide-image" src="images/tshirt.jpg" alt=""> </div>
                <div class="item"> <img class="slide-image" src="images/hat.jpg" alt=""> </div>
                <div class="item"> <img class="slide-image" src="images/jeans.jpg" alt=""> </div>
              </div>
              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail"> <img src="images/JPEG2/hat_01.jpg" alt="" width="200">
              <div class="caption">
                <h4 class="pull-right">$59.99</h4>
                <h4><a href="item.php">Item 1</a></h4>
                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
              <div class="ratings">
                <p class="pull-right">115 reviews</p>
                <p> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span> </p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail"> <img src="images/JPEG2/hat_02.jpg" alt="" width="200">
              <div class="caption">
                <h4 class="pull-right">$66.99</h4>
                <h4><a href="#">Item 2</a> </h4>
                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
              <div class="ratings">
                <p class="pull-right">92 reviews</p>
                <p> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span> </p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail"> <img src="images/JPEG2/hat_03.jpg" alt="" width="200">
              <div class="caption">
                <h4 class="pull-right">$44.99</h4>
                <h4><a href="#">Item 3</a> </h4>
                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
              <div class="ratings">
                <p class="pull-right">214 reviews</p>
                <p> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span> </p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail"> <img src="images/JPEG2/hat_04.jpg" alt="" width="200">
              <div class="caption">
                <h4 class="pull-right">$55.99</h4>
                <h4><a href="#">Item 4</a> </h4>
                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
              <div class="ratings">
                <p class="pull-right">46 reviews</p>
                <p> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart-empty"></span> </p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail"> <img src="images/JPEG2/hat_05.jpg" alt="" width="200">
              <div class="caption">
                <h4 class="pull-right">$57.99</h4>
                <h4><a href="#">Item 5</a> </h4>
                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
              <div class="ratings">
                <p class="pull-right">88 reviews</p>
                <p> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart-empty"></span> </p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail"> <img src="images/JPEG2/hat_06.jpg" alt="" width="200">
              <div class="caption">
                <h4 class="pull-right">$52.19</h4>
                <h4><a href="#">Item 6</a> </h4>
                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
              <div class="ratings">
                <p class="pull-right">72 reviews</p>
                <p> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart"></span> <span class="glyphicon glyphicon-heart-empty"></span> </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
 <p>
<?php
    include_once('footer.php');
?>
</p>

  <!-- jQuery --> 
  <script src="js/jquery.js"></script> 
  
  <!-- Bootstrap Core JavaScript --> 
  <script src="js/bootstrap.min.js"></script> 
  <script src="js/classie.js"></script> 
  <script src="js/search.js"></script>
</body>
</html>
