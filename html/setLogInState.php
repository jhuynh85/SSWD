<?php
/**
 * Created by PhpStorm.
 * User: JHuynh
 * Date: 5/16/2017
 * Time: 6:58 PM
 */
$status = session_status();
if ($status == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION["logged_in"])) {
    $_SESSION["logged_in"] = false;
    session_write_close();
}

?>