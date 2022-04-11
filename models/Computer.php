<?php


//activating Autoloader
require_once ('myAutoLoader.php');
myAutoLoader::register();

// initializing connection with Database
$dbconnection= new DatabaseConnect();
$pdo = $dbconnection->connect();


// creating the class "two of three" 
class Computer{

    // prperity notes are identical as in DB computers 
    // property is in private protection within class
    private     $machine_nr;
    private     $machine_code;
    private     $notes;
    private     $Effective_stock;
    private     $Stock;

        //the constructor to initialize the properties of the object    
        // types are identical as in DB computers 
        public function __construct(int $machine_nr, string $machine_code , 
                                    string $notes, int $Effective_stock, int $Stock){
            
        $this->machine_nr=$machine_nr;
        $this->machine_code=$machine_code;
        $this->notes=$notes;
        $this->Effective_stock=$Effective_stock;
        $this->Stock=$Stock;
        }
        
                //limiting the access to private property only through getter/setter in public method
                public function setMachine_nr($machine_nr){
                    $this->machine_nr=$machine_nr;
                }
                public function getMachine_nr(){
                    return $this->machine_nr;        
                }

                public function setMachine_code($machine_code){
                    $this->machine_code=$machine_code;
                }
                public function getMachine_code(){
                    return $this->machine_nr;
                }

                public function setNotes($general_notes){
                    $this->general_notes=$general_notes;
                }
                public function getNotes(){
                    return $this->general_notes;
                }

                public function setEffective_stock($Effective_stock){
                    $this->Effective_stock=$Effective_stock;
                }
                public function Effective_stock(){
                    return $this->Effective_stock;
                }

                public function setStock($Stock){
                    $this->Stock=$Stock;
                }
                public function Stock(){
                    return $this->Stock;
                }

    }

    // =========================================INSERT=======================================================

    

    $machine_code = '333 555';
    $notes = 'letter T done';
    $Effective_stock = '22';
    $Stock = '12';

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
/*
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

// =================================================DELETE=================================================================

    

    $machine_nr=22;

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


*/

