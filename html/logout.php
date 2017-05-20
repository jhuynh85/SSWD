<?php
/**
 * Created by PhpStorm.
 * User: JHuynh
 * Date: 5/19/2017
 * Time: 9:04 PM
 */

session_start();
$_SESSION['logged_in'] = false;
$_SESSION['userName'] = null;
session_write_close();
?>