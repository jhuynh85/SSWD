<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Header</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" type="text/css"><link href="css/custom.css" rel="stylesheet" type="text/css">
  <style type="text/css">
* {
    margin: 0;
    padding: 0;
}
h3 {
    color: #ffffff;
    font-weight: bold;
}
.nav {
    margin: 0 0 0 60px;
}
.nav a {
    font-size: 1.1em;
}
#logcart {
    float: right;
    margin-right: 5%;
    padding-top: 10px;
}
#logcart img {
    margin-left: 40px;
    width: 20%;
}
</style>
</head>

<body>
  <?php
session_start();

// Check if user is logged in
if (!$_SESSION["logged_in"]) {
    // Display login button if not
    $logged_in = '<a class="btn btn-default" href="login.php">Login</a>';
} else {
    // Display "Hello, [username]!" if logged in
    $logged_in = '<h3>Hello, ' . $_SESSION['userName'] . '!</h3> <a class="btn btn-default" id="logoutBtn" type="button">Logout</a>';
}

// Set the lastPage session variable (to load after user logs in)
$_SESSION["lastPage"] = $_SERVER['REQUEST_URI'];
session_write_close();

?>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
    </div>
    <div class="clearfix"></div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> <a class="navbar-brand animated shake" href="products.php"><img src="images/VF2.png" alt="VF logo" width="30"></a>
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <div id="logcart"> <?php echo $logged_in; ?><a href="cart.php"><img src="images/cart2.png" alt="Shopping cart icon"
                                                                            title="Shopping Cart"/></a><span id="numItems"></span></div>
    </div>
  </nav>
  <script src="js/jquery.js"></script> 
  <script src="js/bootstrap.min.js"></script> 
  <script>
    // Refresh the page after logging user out
    $(document).on("click", "#logoutBtn", function () {
        $.post("logout.php").done(function (data) {
            location.reload();
        });
    });
</script>
</body>
</html>
