<?php
     
     // this site for connection with database 


    class Database 
    {
         public $name;
     //     protected $dsn = 'mysql:host=127.0.0.1';
     //     protected $dbname = 'testing';
     //     protected  $dbuser = 'root';
     //     protected $dbpass = '';
     //     protected $option = array(
     //          PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
     //     );

         public function __construct()
         {
              // use try to connect in database
              try {
                   $conn = new PDO('mysql:host=127.0.0.1;dbname=testing',
                    'root', '', array(
                         PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
                    ));
              } catch (\PDOException $th) {
                   //throw Error if Not Connected
                   print "Faild To Connect into Database" . $th->getMessage();
              }
         }
    }