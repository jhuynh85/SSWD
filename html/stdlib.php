<?php
    //AUTOLOAD CLASSES
    spl_autoload_register(function ($class_name) {
        include 'classes/class.'.$class_name . '.php';
    });

	//DB CONFIG SETTINGS
	require_once('../config/config.php');
?>