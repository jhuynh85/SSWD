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
    margin: 0;
}
#register {
    margin-top: 100px;
}
.navbar-brand {
    margin-top: -80px;
}
#loader {
    position: absolute;
    bottom: 10%;
    left: 40%;
    background-image: url('images/ellipsis.svg');
    width: 198px;
    height: 198px;
}
</style>
</head>

    <body>
  <div><a class="navbar-brand animated shake" href="products.php"><img src="images/VF2.png" alt="VF logo" width="40"></a> </div>
  <div id="register">
        <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form id="regForm" action="create_user.php" method="POST">
          <h1>Please Sign Up</h1>
          <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control input-md" tabindex="1" required>
                  </div>
            </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control input-md" tabindex="2" required>
                  </div>
            </div>
              </div>
          <div class="form-group">
                <label for="user_name">User Name</label>
                <input type="text" name="user_name" id="user_name" class="form-control input-md" tabindex="3" required>
              </div>
          <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control input-md" tabindex="4" required>
              </div>
          <div class="form-group">
                <label for="address"> Address</label>
                <input type="address" name="address" id="address" class="form-control input-md" tabindex="5" required />
              </div>
          <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
                    <label for="city">City</label>
                    <input type="city" name="city" class="form-control" tabindex="6" required />
                  </div>
            </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
                    <label for="state">State</label>
                    <input type="state" name="state" class="form-control" tabindex="7" required />
                  </div>
            </div>
              </div>
          <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
                    <label for="zip">Zip / Postal Code</label>
                    <input type="zip" name="zip_code" class="form-control" tabindex="8" required />
                  </div>
            </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="phone" name="phone_number" class="form-control" tabindex="9" required />
                  </div>
            </div>
              </div>
          <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control input-md" tabindex="5" required>
                  </div>
            </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-md" tabindex="6" required>
                  </div>
            </div>
              </div>
          <div class="row">
                <div class="col-xs-4 col-sm-3 col-md-3"> <span class="button-checkbox">
                  <button type="button" class="btn btn-danger" data-color="info" tabindex="7">I Agree</button>
                  <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden"  value="1" required>
                  </span> </div>
                <div class="col-xs-8 col-sm-9 col-md-9">By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="terms.php" target="_blank" style="color:red;">Terms and Conditions</a> set out by this site, including our Cookie Use. </div>
              </div>
          <hr class="colorgraph">
          <div class="row">
                <div class="col-xs-12 col-md-6">
              <input type="submit" id="register_button" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7">
            </div>
                <div class="col-xs-12 col-md-6"><a href="login.php" class="btn btn-success btn-block btn-lg">Login</a></div>
              </div>
        </form>
            <div id="loader"></div>
          </div>
    </div>
        <!-- Modal -->
        
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
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/jquery.form.min.js"></script>
<script src="js/reg.js"></script>
<script type="text/javascript">
    // Hide loader image
    $("#loader").hide();

    $(document).ready(function() {

        var password = $("#password");
        var confirm_password = $("#password_confirmation");
        var valid = false;

        password[0].onchange = validatePassword;
        confirm_password[0].onkeyup = validatePassword;

        // Checks whether passwords are the same
        function validatePassword(){
            if (password.val() != confirm_password.val()){
                confirm_password[0].setCustomValidity("Passwords Don't Match");
                valid = false;
            } else {
                confirm_password[0].setCustomValidity('');
                valid = true;
            }
        }

        $('#regForm').ajaxForm({
            dataType : 'json',
            beforeSubmit: function(){
                if (valid) {
                    // Show loading image
                    $("#loader").show();
                }
                return valid;
            },
            success : function (data) {
                // Hide loader again after processing done
                $("#loader").hide();
                // User inserted successfully
                if (data == 1) {
                    alert(data + "- User: "+$('#user_name').val()+" inserted successfully!");
                } else if (data==2){
                    alert(data+"- Error: Username already exists, please enter a different username.")
                } else if (data==3){
                    alert(data+"- Error: Email address already exists, please enter a different email.");
                }
                // Other error
                else {
                    alert(data+"- Error: User not created!");
                }
            }
        });
    });
</script>
</body>
</html>