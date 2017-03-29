<?php

//ini_set("session.cookie_lifetime",15);
session_start();
session_regenerate_id();

spl_autoload_register(function ($class){
	require_once 'Classes/' . $class . '.php';
});

require_once 'Functions/sanitize.php';