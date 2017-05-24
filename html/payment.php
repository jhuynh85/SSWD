<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Payment</title>
    <link rel="stylesheet" type="text/css" href="css/payment.css">
</head>

<body>
<div id="pay">
    <div><a href="cart.php" id="review">Review Order</a> <a href="cart.php"><img src="images/cart2.png" alt=""
                                                                                 title="Shopping Cart" width="30"></a>
    </div>
    <form method="post" action=" ">
        <div class="row">
            <h1>Check Out</h1>
            <h3>After you complete your payment, you will receive an email to confirm your order immediately.</h3>
        </div>
        <div id="toL">
            <div class="payment">
                <h4>Pay with your credit card.</h4>
            </div>
            <div class="col-md-12"><img src="images/creditcards.png" alt="" width="150"></div>

            <!--CREDIT CART PAYMENT-->

            <div class="form-group">
                <div class="payment"><strong>Card Type:</strong></div>
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
                <div class="payment"><strong>Credit Card Number:</strong></div>
                <div>
                    <input type="text" class="form-control" name="car_number" value="" required/>
                </div>
            </div>
            <div class="form-group">
                <div class="payment"><strong>Card CVV:</strong> <a href="https://www.cvvnumber.com/cvv.html"
                                                                   target="_blank" style="font-size:11px">What is my CVV
                        code?</a></div>
                <div>
                    <input type="text" class="form-control" name="car_code" value="" required/>
                </div>
            </div>
            <div class="form-group">
                <div class="payment"><strong>Expiration Date</strong></div>
                <div>
                    <select class="form-control" name="month">
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
                <div>
                    <select class="form-control" name="year">
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
                <div>
                    <button type="submit" class="btn1">Pay Now</button>
                </div>
            </div>
            <!--CREDIT CART PAYMENT END-->
        </div>
    </form>
    <div id="toR">
        <div class="payment">
            <h4>Pay with your PayPal.</h4>
        </div>
        <div><a href="https://www.paypal.com/signin?country.x=US&locale.x=en_US" target="_blank"><img
                        src="https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif" alt=""></a></div>
    </div>
    <div class="clearfix"></div>
    <p>
        <?php
        include_once('footer.php');
        ?>
    </p>
</div>
</body>
</html>
