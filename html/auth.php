<?php
    require 'stdlib.php';

    session_start();
    $username = $_POST['username'];
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

        //PUT THE DATA INTO DB
        //$query = "insert into rating.rating (FK_productid, FK_uid, rating, comment)
        //values (:pid, :uid, :rating, :comment)";

        //Get data from DB
		$query = "SELECT password FROM users WHERE username=:username";

        $arrayParams = array(':username' => $username);

        $results = $db->PDOquery($query, $arrayParams, true);

        foreach ($results as $row) {
            $db_hash = $row[0];
            // echo $db_hash;
        }

        if ($db_hash != false){
            // Compare plaintext pw with db password
            $valid = $hasher->CheckPassword($pass, $db_hash);

            if ($valid){
                // Set session logged-in state and username
                $_SESSION["logged_in"] = true;
                $_SESSION["userName"] = $username;
                session_write_close();
                echo 1;
            } else {
                $_SESSION["logged_in"] = false;
                session_write_close();
                echo 2;
            }
        } else {
            echo 3;
        }

    } catch (Exception $error){
        echo $error->getMessage();
    }
?>
