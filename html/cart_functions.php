<?php
/**
 * Created by PhpStorm.
 * User: JHuynh
 * Date: 5/29/2017
 * Time: 7:39 PM
 */
require 'stdlib.php';

$productID = $_POST['productID'];
$sessionID = $_POST['sessionID'];

removeFromCart($productID, $sessionID);

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

function updateItem($pid, $quantity)
{

}

?>