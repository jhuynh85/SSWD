<!doctype html>
<html>
  <head>
  <meta charset="utf-8">
  <title>Register</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet" type="text/css">
  <style type="text/css">
body {
		background: url(images/bg06.jpg) no-repeat;
		background-size: cover;
		margin:0;
}
#register {margin-top: 100px;}
.navbar-brand {margin-top:-80px;}
</style>
</head>

  <body>
   <div><a class="navbar-brand animated shake" href="products.php"><img src="images/VF2.png" alt="VF logo" width="40"></a> </div>
  <div id="register">
      <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
          <form action="" method="POST">
          <h1>Please Sign Up</h1>
          <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
                  <label for="first_name">First Name</label>
                  <input type="text" name="first_name" id="first_name" class="form-control input-md" placeholder="First Name" tabindex="1" required>
                </div>
            </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
                  <label for="last_name">Last Name</label>
                  <input type="text" name="last_name" id="last_name" class="form-control input-md" placeholder="Last Name" tabindex="2" required>
                </div>
            </div>
            </div>
          <div class="form-group">
              <label for="user_name">User Name</label>
              <input type="text" name="user_name" id="user_name" class="form-control input-md" placeholder="User Name" tabindex="3" required>
            </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" class="form-control input-md" placeholder="Email Address" tabindex="4" required>
            </div>
          <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" class="form-control input-md" placeholder="Password" tabindex="5" required>
                </div>
            </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
                  <label for="password_confirmation">Confirm Password</label>
                  <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-md" placeholder="Confirm Password" tabindex="6" required>
                </div>
            </div>
            </div>
          <div class="row">
              <div class="col-xs-4 col-sm-3 col-md-3"> <span class="button-checkbox">
                <button type="button" class="btn btn-danger" data-color="info" tabindex="7">I Agree</button>
                <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden"  value="1" required>
                </span> </div>
              <div class="col-xs-8 col-sm-9 col-md-9"> By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#t_and_c_m" data-toggle="modal" data-target="#t_and_c_m" style="color:red;">Terms and Conditions</a> set out by this site, including our Cookie Use. </div>
            </div>
          <hr class="colorgraph">
          <div class="row">
              <div class="col-xs-12 col-md-6">
              <input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7">
            </div>
              <div class="col-xs-12 col-md-6"><a href="login.php" class="btn btn-success btn-block btn-lg">Login</a></div>
            </div>
        </form>
        </div>
    </div>
      <!-- Modal -->
      <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
            </div>
          <div class="modal-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
            </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
            </div>
        </div>
          <!-- /.modal-content --> 
        </div>
      <!-- /.modal-dialog --> 
    </div>
      <!-- /.modal --> 
    </div>
      
<p>
<?php
    include_once('footer.php');
?>
</p>

  <script src="js/reg.js"></script>
</body>
</html>