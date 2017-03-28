<?php

//ini_set("session.cookie_lifetime",15);
session_start();
session_regenerate_id();

//require_once 'classes/DB.php';
//require_once 'classes/User.php';
spl_autoload_register(function($class){
	require_once 'classes/' . $class . '.php';
});


require_once 'functions/sanitize.php';