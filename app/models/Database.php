<?php
     
     // this site for connection with database 


    class Database 
    {
         public $name;
         protected $host = 'localhost';
         protected $dbname = 'testing';
         protected  $dbuser = 'root';
         protected $dbpass = '';
         protected $options = array(
              PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
         );

         public function __construct()
         {
              // use try to connect in database
              try {
                   $conn = new PDO('mysql:host'.$this->host.';dbname='.$this->dbname, $this->dbuser, $dbpass, $this->options);
              } catch (\PDOException $th) {
                   //throw Error if Not Connected
                   print "Faild To Connect into Database" . $th->getMessage();
              }
         }
    }
