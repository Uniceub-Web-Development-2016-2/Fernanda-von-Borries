﻿<?php
class DBConnector extends PDO {
   
    private $engine;
    private $host;
    private $database;
    private $user;
    private $pass;
    private $connector;	
   
    public function __construct(){
        $this->engine = 'mysql';
        $this->host = 'localhost';
        $this->database = 'db_sisref';
        $this->user = 'root';
        $this->pass = 'root';
        $dns = $this->engine.':dbname='.$this->database.";host=".$this->host;
        parent::__construct( $dns, $this->user, $this->pass );
    }	
		
}
$result = (new DBConnector())->query('SELECT * FROM tb_user');
var_dump($result->fetchAll());