<?php
/*

//activating Autoloader



require_once ('myAutoLoader.php');
myAutoLoader::register();

// initializing connection with Database
$dbconnection= new DatabaseConnect();
$pdo = $dbconnection->connect();


// creating the class "two of three" 
class PutInClass{

    // prperity notes are identical as in DB computers 
    // property is in public protection within class
    public     $machine_nr;
    public     $machine_code;
    public     $notes;
    public     $Effective_stock;
    public     $Stock;

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
        
                //limiting the access to public property only through getter/setter in public method
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
                public function getnotes(){
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


            //public function insertcompunit($machine_nr, $machine_code, $notes, $Effective_stock, $Stock)
            public function insertVaio($sql)                
                                {

                                   // $this->machine_nr= $machine_nr;
                                   // $this->machine_code=$machine_code;
                                   // $this->notes=$notes;
                                   // $this->Effective_stock=$Effective_stock;
                                   // $this->Stock=$Stock;
        
                                $sql = 'INSERT INTO computers (machine_code, notes, Effective_stock, Stock)
                                             VALUES           ( :machine_code, :notes, :Effective_stock, :Stock)';  

                                // prepare statement
                                $statement = $this->pdo->prepare($sql);
                                var_dump($statement);


                                // bind params
                                //$statement->bindParam(':machine_nr', $machine_nr);
                                //$statement->bindParam(':machine_code', $machine_code);
                               // $statement->bindParam(':notes', $notes);
                                //$statement->bindParam(':Effective_stock', $Effective_stock);
                               // $statement->bindParam(':Stock', $Stock);

                               
 
 
                                 $dbconnection = null;

                                }

                                

            }

 /*                        // =====================INSERT==================           

            public function compregist($machine_code, $Effective_stock,$notes, $Stock) {
                
                $query = $this->pdo->prepare ('INSERT INTO computers (machine_code, notes, Effective_stock, Stock)
                                                    VALUES           ( :machine_code, :notes, :Effective_stock, :Stock)'); 
                

                $query->bindParam(':machine_code', $machine_code);
                $query->bindParam(':notes', $notes);
                $query->bindParam(':Effective_stock', $Effective_stock);
                $query->bindParam(':Stock', $Stock);
                
                

                $result = $this->statement->execute([
                                               ':machine_code'=> $machine_code, 
                                               ':notes'=> $notes,
                                               ':Effective_stock' => $Effective_stock, 
                                               ':Stock'=> $Stock
                                             ]);
                                        
                                                     $this->statement->debugDumpParams();
                                                     var_dump($this->statement->errorInfo());
            
            
                                            $dbconnection = null;
            
            }


    



    

    

            $computer=new PutInClass(
                                         2,
                                         '987654321',
                                        'NEW SCREEN ',
                                        '60',
                                        '100',
            );
            var_dump($computer);

                               

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




