<?php
  



  //activating Autoloader which saved in models
  require_once ('../models/myAutoLoader.php');
  myAutoLoader::register();

    class DatabaseConnect{

        public $host= "localhost";
        public $username ="root";
        public $password= "Internet=0";
        public $dbName="pcrent";

        public function connect(){

            //operation concern driver mysqal
            $dsn= "mysql:host=$this->host;dbname=$this->dbName";

        try {
         $dbconnection= new PDO($dsn,$this->username, $this->password);
         echo "CONNECTED SUCCESSFULLY";
         echo '<br>';
         return $dbconnection;
         
     } catch (PDOException $e) {
        echo $e;
     }
    
    
    }
}



        

    