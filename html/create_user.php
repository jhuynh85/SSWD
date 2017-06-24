<?php
require 'stdlib.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip_code = $_POST['zip_code'];
$phone_number = $_POST['phone_number'];
$pass = $_POST['password'];

$hash_cost_log2 = 8;
$hash_portable = FALSE;

//call phppass
$hasher = new PasswordHash($hash_cost_log2, $hash_portable);

try{
    $db = new DB(); //CREATE INSTANCE OF DB CLASS
    $status = 0; // Initialize status code

    // Search for username/email, if not found then insert
    $query = "SELECT * FROM users WHERE userName=:username";
    $arrayParams = array(':username' => $user_name);
    $results = $db->PDOquery($query, $arrayParams, true);

    foreach ($results as $row){
        if ($row[0] != false){
            // Username already exists, set status code=2
            $status = 2;
        }
    }

    // Check email
    $query = "SELECT * FROM users WHERE emailAddress=:email";
    $arrayParams = array(':email' => $email);
    $results = $db->PDOquery($query, $arrayParams, true);

    foreach ($results as $row){
        if ($row[0] != false){
            // Email already exists, set status code=3
            $status = 3;
        }
    }

    if ($status != 2 && $status != 3) {
        //Get data from DB
        $query = "INSERT INTO users (userName, password, firstName, lastName, emailAddress, address, city, state, zip, phone) 
		values (:username, :password, :firstname, :lastname, :email, :address, :city, :state, :zip, :phone)";

        $arrayParams = array(':username' => $user_name,
            ':password' => $hasher->HashPassword($pass),
            ':firstname' => $first_name,
            ':lastname' => $last_name,
            ':email' => $email,
            ':address' => $address,
            ':city' => $city,
            ':state' => $state,
            ':zip' => $zip_code,
            ':phone' => $phone_number);

        $results = (int)$db->PDOquery($query, $arrayParams, false);

        if ($results > 0) {
            $status=1;
        } else {
            $status=0;
        }
    }

    header('Content-Type: application/json');
    echo json_encode($status);

} catch (Exception $error){
    echo $error->getMessage();
}
?>
