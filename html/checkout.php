<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Check Out</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/custom.css"/>
<style type="text/css">
body {margin-top: 20px;}
h1{color:#900;}
#review {color:#999;}
#review:hover {text-decoration:none; color:#F00;}
footer{float: left; margin-left:20%;}
</style>
</head>

<body>
  <div id="checkout">
     <div>
     <a href="cart.php" id="review">Review Order</a><a href="cart.php"><img src="images/cart2.png" alt="" title="Shopping Cart" width="30"></a> </div>
    <div class="row cart-body">
      <form class="form-horizontal" method="post" action="">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="row">
            <h1>Check Out</h1>
          </div>
          <!--SHIPPING METHOD-->
          <div class="panel panel-info">
            <div class="panel-heading">Address</div>
            <div class="panel-body">
              <div class="form-group">
                <div class="col-md-12">
                  <h4>Shipping Address</h4>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12"><strong>Country:</strong></div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="country" value="" required />
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6 col-xs-12"> <strong>First Name:</strong>
                  <input type="text" name="first_name" class="form-control" value="" required />
                </div>
                <div class="span1"></div>
                <div class="col-md-6 col-xs-12"> <strong>Last Name:</strong>
                  <input type="text" name="last_name" class="form-control" value="" required />
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12"><strong>Address:</strong></div>
                <div class="col-md-12">
                  <input type="text" name="address" class="form-control" value="" required />
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12"><strong>City:</strong></div>
                <div class="col-md-12">
                  <input type="text" name="city" class="form-control" value="" required />
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12"><strong>State:</strong></div>
                <div class="col-md-12">
                  <input type="text" name="state" class="form-control" value="" required />
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12"><strong>Zip / Postal Code:</strong></div>
                <div class="col-md-12">
                  <input type="text" name="zip_code" class="form-control" value="" required />
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12"><strong>Phone Number:</strong></div>
                <div class="col-md-12">
                  <input type="text" name="phone_number" class="form-control" value="" required />
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12"><strong>Email Address:</strong></div>
                <div class="col-md-12">
                  <input type="text" name="email_address" class="form-control" value="" required />
                </div>
              </div>
            </div>
          </div>
          <!--SHIPPING METHOD END--> 
          <!--CREDIT CART PAYMENT-->
          <div class="panel panel-info">
            <div class="panel-heading"><span><i class="glyphicon glyphicon-lock"></i></span> Secure Payment</div>
            <div class="panel-body">
              <div class="form-group">
                <div class="col-md-12"><strong>Card Type:</strong></div>
                <div class="col-md-12">
                  <select id="CreditCardType" name="CreditCardType" class="form-control">
                    <option value="5">Visa</option>
                    <option value="6">MasterCard</option>
                    <option value="7">American Express</option>
                    <option value="8">Discover</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12"><strong>Credit Card Number:</strong></div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="car_number" value="" required />
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12"><strong>Card CVV:</strong></div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="car_code" value="" required />
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12"> <strong>Expiration Date</strong> </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" name="">
                    <option value="">Month</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" name="">
                    <option value="">Year</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12"> <span>Pay secure using your credit card.</span> </div>
                <div class="col-md-12"> <img src="images/creditcards.png" alt="" width="50%">
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="form-group">
                <div><a href="#"><img src="https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif" align="left" style="margin-left:10px;"></a></div>
                <div class="clearfix"></div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <button type="submit" class="btn btn-danger btn-lg" style="margin-top:40px;">Place Order</button>
                </div>
              </div>
            </div>
          </div>
          <!--CREDIT CART PAYMENT END--> 
        </div>
      </form>
    </div>
  </div>
  <p>
    <?php
    include_once('footer.php');
?>
</p>
</div>

</body>
</html>
