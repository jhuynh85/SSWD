<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Thank You</title>
  <link rel="stylesheet" type="text/css" href="css/payment.css">
</head>

<body>
  <?php
    require 'stdlib.php';
    session_start();
    $sessionID = session_id();
    $userName=$_SESSION['userName'];
    try {
      $db = new DB(); //CREATE INSTANCE OF DB CLASS
      $query = "SELECT * FROM users WHERE userName=:userName";
      $arrayParams = array(':userName' => $userName);
      $user = $db->PDOquery($query, $arrayParams, true);
    } catch (Exception $error) {
      echo $error->getMessage();
    }    
    $to = $user[0]['emailAddress'];
    $subject = "VF Order Confirmation";
    
    // Put the whole message to be sent in a string
    $msg ="<!doctype html>\n<html>\n<head></head>\n<body>\n";
    $msg.= "Dear $userName,<br><br>";
    $msg.= "thank you very much for shopping with VF.<br>";
    $msg.= "You have ordered the following items:<br><br>";
    
    $msg.= "<table style='width:50%'>\n";
    $msg.= "<tr>\n";
    $msg.= "<th>Item</th>\n";
    $msg.= "<th align='right'>Price</th>\n";
    $msg.= "<th align='right'>Quantity</th>\n";
    $msg.= "<th align='right'>Total</th>\n";
    $msg.= "</tr>\n";
    try {
      $db = new DB(); //CREATE INSTANCE OF DB CLASS
      $query = "SELECT * FROM cartItems WHERE sessionID=:sessionID";
      $arrayParams = array(':sessionID' => $sessionID);
      $cartItems = $db->PDOquery($query, $arrayParams, true);
    } catch (Exception $error) {
      echo $error->getMessage();
    }
    $sum=0;
    foreach ($cartItems as $cartItem) {
      $productName=$cartItem['productName'];
      $listPrice=$cartItem['listPrice'];
      $quantity=$cartItem['quantity'];
      $total=$listPrice*$quantity;
      $sum+=$total;
      $msg.= "<tr>\n";
      $msg.= "<td>$productName</td>\n";
      $fnum=sprintf("\$%.2f",$listPrice);
      $msg.= "<td align='right'>$fnum</td>\n";
      $msg.= "<td align='right'>$quantity</td>\n";
      $fnum=sprintf("\$%.2f",$total);
      $msg.= "<td align='right'>$fnum</td>\n";
      $msg.= "</tr>\n";
    }
    $msg.= "</table>\n";
    $msg.= "<hr align='left' style='width:50%; margin:0'>\n";
    $msg.= "<table style='width:50%'>\n";
    $msg.= "<tr>\n";
    $msg.= "<td>Subtotal:</td>\n";
    $fnum=sprintf("\$%.2f",$sum);
    $msg.= "<td align='right'>$fnum</td>\n";
    $msg.= "</tr>\n";
    $tax =8;
    $sum = round($sum*((100+$tax)/100),2);
    $msg.= "<tr>\n";
    $msg.= "<td>Tax (8%):</td>\n";
    $fnum=sprintf("\$%.2f",$sum);
    $msg.= "<td align='right'>$fnum</td>\n";
    $msg.= "</tr>\n";
    $shipping =15.00;
    $fnum=sprintf("\$%.2f",$shipping);
    $msg.= "<tr>\n";
    $msg.= "<td>Shipping:</td>\n";
    $msg.= "<td align='right'>$fnum</td>\n";
    $msg.= "</tr>\n";
    $sum+= $shipping;
    $msg.= "<tr>\n";
    $msg.= "<td>Grand Total:</td>\n";
    $fnum=sprintf("\$%.2f",$sum);
    $msg.= "<td align='right'>$fnum</td>\n";
    $msg.= "</tr>\n";
    $msg.="</table>\n";
    $msg.="<br> $fnum have been charged to your credit card.<br>";
    
    $msg.="<br>Happy shopping! Hope to see you again soon.<br>";
    $msg.="</body>\n";
    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);
    $headers = "From: info@vfworld.com";

    // send email
    mail($to,$subject,$msg,$headers);
  ?>
  <div id="pay">
    <form method="post" action="index.php">
      <div class="row">
        <h1>Thank you very much for your purchase with VF</h1>
        <h3>A confirmation email of your order has been sent to <?php echo $to ?>.</h3>
      </div>
      <div class="form-group">
         <button type="submit" class="btn1">Ok</button>
      </div>
    </form>
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
