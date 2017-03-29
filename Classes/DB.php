<?php

class DB
{
	private static $_instance = null;
	private $_config;
	private $_connection;
	private $_query;
	private $_error = false;
	private $_results;
	private $_count = 0;
	
	public static function getInstance
	{
		if(!self::$_instance){
			self::$_instance = new self();
		}
		return self::$_instance;
	}
}