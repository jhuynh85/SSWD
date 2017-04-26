<?php
require 'stdlib.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$hash_cost_log2 = 8;
$hash_portable = FALSE;

//call phppass
$hasher = new PasswordHash($hash_cost_log2, $hash_portable);


//get hash from database + uid, username, direct permission, access
// SELECT * FROM users WHERE email= :email LIMIT 1;
// $results = dbquery($query);
// foreach ($results as $row){
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
        $query = "INSERT INTO users (userName, password, firstName, lastName, emailAddress) 
		values (:username, :password, :firstname, :lastname, :email)";

        $arrayParams = array(':username' => $user_name,
            ':password' => $hasher->HashPassword($pass),
            ':firstname' => $first_name,
            ':lastname' => $last_name,
            ':email' => $email);

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
