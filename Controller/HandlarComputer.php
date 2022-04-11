<?php

//activating Autoloader which saved in models
require_once ('../models/myAutoLoader.php');
myAutoLoader::register();

// initializing connection with Database "file is saved in models"
$dbconnection= new DatabaseConnect();
$pdo = $dbconnection->connect();


// =========================================INSERT=======================================================

    

$machine_code = '333 999';
$notes = 'letter R done';
$Effective_stock = '6';
$Stock = '10';

$sql = 'INSERT INTO computers (machine_code, notes, Effective_stock, Stock)
                    VALUES ( :machine_code, :notes, :Effective_stock, :Stock)';  



// prepare statement
$statement = $pdo->prepare($sql);
                                           var_dump($statement);

$result = $statement->execute([
                               ':machine_code'=> $machine_code, 
                               ':notes'=>  $notes,
                               ':Effective_stock' => $Effective_stock, 
                               ':Stock'=> $Stock
                             ]);
                        
                                    // $statement->debugDumpParams();
                                    //  var_dump($statement->errorInfo());


                            $dbconnection = null;

// ======================================UPPDATE=========================================================



$Computer25 = ['machine_nr' => 25, 'machine_code'=> 6666666, 'notes' => ' new charger',
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

// =================================================DELETE=================================================================



$machine_nr=49;

$sql = 'DELETE FROM computers
              WHERE machine_nr = :machine_nr';

    // prepare the statement for execution
    $statement = $pdo->prepare($sql);
                                            var_dump($statement);

    // bind params
    $statement->bindParam(':machine_nr', $machine_nr, PDO::PARAM_INT);

    // execute the UPDATE statment
    $result = $statement->execute([
                                ':machine_nr' => $machine_nr,
                                ]); 


                                        $statement->debugDumpParams();
                                        var_dump($statement->errorInfo());
    
                                    
                                $dbconnection = null;

                        
 //==============================READ===============================================================

 $sql = 'SELECT machine_code
		  FROM computers';

// prepare statement
$statement = $pdo->query($sql);

// get all members
$computers = $statement->fetchAll(PDO::FETCH_ASSOC);


if ($computers) {
	// show the members
	foreach ($computers as $computer) {
		echo $computer['machine_code'];
        echo '<br>';
	}


}