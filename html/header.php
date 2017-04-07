<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Header</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" type="text/css"> 
  <link href="css/custom.css" rel="stylesheet" type="text/css"> 
<style type="text/css">
*{margin:0; padding:0;}
.nav{margin: 0 0 0 60px;}
.nav a{font-size:1.1em;}
#logcart{float:right; margin-right:5%;}
#logcart img{margin-left:40px; width:25%;}
</style>
</head>

<body>  
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand animated shake" href="products.php"><img src="images/VF2.png" alt="VF logo" width="30"></a> </div>
          <div class="clearfix"></div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <div class="clearfix"></div>
      
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li> <a href="about.php">About</a> </li>
          <li><a href="products.php">Products</a></li>
          <li> <a href="contact.php">Contact</a> </li>
        </ul>
        <div id="logcart"> <a class="btn btn-default" href="login.php">Login</a><a href="cart.php"><img src="images/cart2.png" alt="" title="Shopping Cart" /></a> </div>
      </div>
    </nav>
   
  <script src="js/jquery.js"></script> 
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
