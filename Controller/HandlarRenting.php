<?php

//activating Autoloader which saved in models
require_once ('../models/myAutoLoader.php');
myAutoLoader::register();

// initializing connection with Database "file is saved in models"
$dbconnection= new DatabaseConnect();
$pdo = $dbconnection->connect();

//header('Access-Control-Allow-Origin: *');
//header('Content-Type: application/jeason');

  
        $operation_nr = $_POST['operation_nr'];
         $members_ID;
         $machine_code;
         $date_rented;
         $date_returned;
    

$sql = 'INSERT INTO renting (operation_nr, members_ID, machine_code, date_rented, date_returned)
                    VALUES ( :operation_nr, :members_ID, :machine_code, :date_rented, :date_returned)';  



// prepare statement
$statement = $pdo->prepare($sql);
                                           var_dump($statement);

$result = $statement->execute([
                               ':operation_nr'=> $operation_nr, 
                               ':members_ID'=>  $members_ID,
                               ':machine_code' => $machine_code, 
                               ':date_rented'=> $date_rented,
                               ':date_returned'=> $date_returned,
                             ]);
                        
                                    // $statement->debugDumpParams();
                                    //  var_dump($statement->errorInfo());


                            $dbconnection = null;
