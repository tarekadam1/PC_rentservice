<?php
/*

require_once ('myAutoLoader.php');
myAutoLoader::register();

// initializing connection with Database
$dbconnection= new DatabaseConnect();
$pdo = $dbconnection->connect();



$vaio1= new PutInClass($vaio1->machine_nr, $vaio1->machine_code, $vaio1->notes, $vaio1->Effective_stock, $vaio1->Stock);
$vaio1->machine_nr= 77;
$vaio1->machine_code=909707;
$vaio1->notes= "PHP version 8";
$vaio1->Effective_stock= '44';
$vaio1->Stock='789';

//$vaio1->insertcompunit($vaio1->machine_nr, $vaio1->machine_code, $vaio1->notes, $vaio1->Effective_stock, $vaio1->Stock);

          $statement->debugDumpParams();
          var_dump($statement->errorInfo());
                            
                                        // $statement->debugDumpParams();
                                        //  var_dump($statement->errorInfo());


                               

// ======================================UPPDATE=========================================================



$Computer25 = ['machine_nr' => 25, 'machine_code'=> 6611214494, 'notes' => ' no remarks',
'Effective_stock' => ' 7', 'Stock' => ' 11' ];

$sql = ' UPDATE computers
         SET machine_code = :machine_code, notes = :notes, Effective_stock= :Effective_stock, Stock = :Stock 
         WHERE machine_nr = :machine_nr';

         // prepare statement
        $statement = $pdo->prepare($sql);
                                                    var_dump($statement);


// bind params
$statement->bindParam(':machine_nr', $Computer25['machine_nr']);
$statement->bindParam(':machine_code', $Computer25['machine_code']);
$statement->bindParam(':notes', $Computer25['notes']);
$statement->bindParam(':Effective_stock', $Computer25['Effective_stock']);
$statement->bindParam(':Stock', $Computer25['Stock']);



// execute the UPDATE statment
$result = $statement->execute([
                            ':machine_nr' => $Computer25['machine_nr'],
                            ':machine_code'=>  $Computer25['machine_code'], 
                            ':notes'=>  $Computer25['notes'], 
                            ':Effective_stock'=> $Computer25['Effective_stock'],
                            ':Stock'=> $Computer25['Stock'],
                            ]); 

                                                    $statement->debugDumpParams();
                                                    var_dump($statement->errorInfo());
  
                            $dbconnection = null;

*/