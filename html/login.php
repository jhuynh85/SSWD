<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet" type="text/css">
  <style type="text/css">
		body {margin-top: 100px;}	 
		.navbar-brand {margin-top:-80px;}
  </style>
</head>

<body>
<div><a class="navbar-brand animated shake" href="products.php"><img src="images/VF2.png" alt="VF logo" width="40"></a> </div>
  <div id="login">
    <form action=" " method="POST">
      <h2>Please Login</h2>
      <label for="username" >Username</label>
      <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username" required>
      <br>
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" required>
      <br>
      <p>
        <button type="submit" class="btn btn-primary">Login</button>
        <a href="message.php" target="_blank">Forgot Password?</a> </p>
    </form>
    <br>
    <div> New To VF.com? <a href="register.php" class="btn btn-primary" target="_blank">Register</a> </div>
  </div>
  
<p>
<?php
    include_once('footer.php');
?>
</p>
</body>
</html>