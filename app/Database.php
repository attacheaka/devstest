<?php

namespace App;
use \PDO ; 


class Database{

	private $db_name;
	private $db_user;
	private $db_pass;
	private $db_host;
	private $pdo;


	public function __construct(){

	  $config = Config::getInstance();

      $this->db_name = $config->get('db_name') ;
      $this->db_user = $config->get('db_user') ;
      $this->db_pass = $config->get('db_pass') ;
      $this->db_host = $config->get('db_host') ;

	}

   public function getPDO(){
       
	 if ($this->pdo === null) {
	 	// mysql:host=localhost;dbname=forum;charset=utf8', 'root', 'root'
	    	$pdo = new PDO("mysql:host=$this->db_host;dbname=$this->db_name;charset=utf8", $this->db_user , $this->db_pass) ;
	        
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
          $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

	      $this->pdo = $pdo ;   
	    	
	    } 

	  return $this->pdo ;
   }


    
  public function query($statment){

    $req  = $this->getPDO()->query($statment);
	return $req ;

   }	


}
