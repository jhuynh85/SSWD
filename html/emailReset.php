<?php
/**
 * Created by PhpStorm.
 * User: JHuynh
 * Date: 5/2/2017
 * Time: 8:27 PM
 */
require 'stdlib.php';
require 'PHPMailerAutoload.php';

$email = $_POST['email'];

try{
    $db = new DB(); //CREATE INSTANCE OF DB CLASS

    //Get user with matching email from DB
    $query = "SELECT * FROM users WHERE emailAddress=:email";
    $arrayParams = array(':email' => $email);
    $results = $db->PDOquery($query, $arrayParams, true);

    foreach ($results as $row) {
        $user = $row;
    }

    // Check if email found
    if ($user != false){

        // Set user's password to random string
        $passStr = random_str(10);

        // Hash string
        $hash_cost_log2 = 8;
        $hash_portable = FALSE;
        $hasher = new PasswordHash($hash_cost_log2, $hash_portable);
        $hash = $hasher->HashPassword($passStr);

        // Update user's password in DB
        $query = "UPDATE users SET password=:password WHERE emailAddress=:email";
        $arrayParams = array(':password' => $hash, ':email' => $email);
        $results = (int)$db->PDOquery($query, $arrayParams, false);

        // Email user with new password
        $mail = new PHPMailer;
        $mail->setFrom('admin@vfteam.com', 'Admin');
        $mail->addAddress((string)($user['emailAddress']), $user['firstName'].' '.$user['lastName']);
        $mail->Subject = "Password has been reset for user '".$user['userName']."'";
        $mail->Body = "The password for user '".$user['userName']."' has been reset.  The new password is ".$passStr;

        if (!$mail->send()) {
            echo json_encode(array('id' => 2, 'message' => 'Mailer error: ' . $mail->ErrorInfo));
        } else {
            echo json_encode(array('id' => 1, 'message' => 'Message has been sent.'));
        }

    } else {
        echo json_encode(array('id' => 3, 'message' => 'Email not found!'));
    }

} catch (Exception $error){
    echo $error->getMessage();
}

/**
 * Generate a random string, using a cryptographically secure
 * pseudorandom number generator (random_int)
 *
 * For PHP 7, random_int is a PHP core function
 * For PHP 5.x, depends on https://github.com/paragonie/random_compat
 *
 * @param int $length      How many characters do we want?
 * @param string $keyspace A string of all possible characters
 *                         to select from
 * @return string
 */
function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
{
    $str = '';
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $str .= $keyspace[random_int(0, $max)];
    }
    return $str;
}

?>