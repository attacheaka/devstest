<?php

namespace App;

/**
 * 
 */
class Config
{
	
	private $settings = [];
	private static $_instance ;


	public static function getInstance(){
		if (is_null(self::$_instance)) {
			self::$_instance = new config();
		}

		return self::$_instance;	
	}

	public function __construct(){
		$this->settings = require 'Config/config.php';
	}
	

	public function get($key){
		if (!isset($this->settings[$key])) {
			return null;
		}

		return $this->settings[$key];

	}
}