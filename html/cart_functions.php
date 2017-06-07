<?php
/**
 * Created by PhpStorm.
 * User: JHuynh
 * Date: 5/29/2017
 * Time: 7:39 PM
 */
require 'stdlib.php';

$type = $_POST['type'];
$productID = $_POST['productID'];
$sessionID = $_POST['sessionID'];
$quantity = $_POST['quantity'];

if ($type == 'remove') {
    removeFromCart($productID, $sessionID);
} else {
    updateQuantity($productID, $sessionID, $quantity);
}

function removeFromCart($pid, $sessionID)
{
    try {
        $db = new DB(); //CREATE INSTANCE OF DB CLASS

        //Delete item from cart
        $query = "DELETE FROM cartItems WHERE sessionID=:sessionID AND productID=:productID";

        $arrayParams = array(':sessionID' => $sessionID, ':productID' => $pid);
        $db->PDOquery($query, $arrayParams, false);
        echo "Deleted ".$pid;
    } catch (Exception $error) {
        echo $error->getMessage();
    }
}

function updateQuantity($pid, $sessionID, $quantity)
{
    try {
        $db = new DB(); //CREATE INSTANCE OF DB CLASS

        //Update quantity in cart
        $query = "UPDATE cartItems SET quantity=:quantity WHERE sessionID=:sessionID AND productID=:productID";
        $arrayParams = array(':quantity' => $quantity, ':sessionID' => $sessionID, ':productID' => $pid);
        $db->PDOquery($query, $arrayParams, false);
    } catch (Exception $error) {
        echo $error->getMessage();
    }
}

?>