<?php
class Helper

{
	private static $_config;
	
	private function __construct()
	{
		self::$_config = config::get('Config/app');
	}
	private function __clone(){}
	
	public static function getHeader($title, $path = 'header')
	
	{
		if($path){
			$file = require_once 'Includes/layout/' . $path . '.php';
			return $file;
		}
		return false;
	}
	public static function getFooter($path = 'footer')
	{
		if($path){
			$file = require_once 'Includes/layout/' . $path .'.php';
			return $file;
		}
		return false;
	}
}
