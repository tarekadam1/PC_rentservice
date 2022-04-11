<?php

//activating Autoloader
require_once ('myAutoLoader.php');
myAutoLoader::register();

// initializing connection with Database
$dbconnection= new DatabaseConnect();
$pdo = $dbconnection->connect();

// creating the class "three of three" 
class Renting{

    

    // prperity name are identical as in DB renting
    // property is in private protection within class
   
    private     $operation_nr;
    private     $members_ID;
    private     $machine_code;
    private     $date_rented;
    private     $date_returned;
    

    //the constructor to initialize the properties of the object    
    // types are identical as in DB computers     
    public function __construct(int $operation_nr, int $members_ID, int $machine_code ,DateTime $date_rented, 
                                    DateTime $date_returned){

                $this->operation_nr=$operation_nr;
                $this->members_ID=$members_ID;
                $this->machine_code=$machine_code;  
                $this->date_rented=$date_rented;
                $this->return_date=$date_returned;
                                 

        } 

        //limiting the access to private property only through getter/setter in public method

            public function setOperation_nr($operation_nr){
                $this->operation_nr=$operation_nr;
            }
            public function getOperation_nr(){
                return $this->operation_nr;
            }

            public function setMembers_ID($members_ID){
                $this->members_ID=$members_ID;
            }
            public function getMembers_ID(){
                return $this->members_ID;
            }

            public function setMachine_code($machine_code){
                $this->machine_code=$machine_code;
            }
            public function getMachine_code(){
                return $this->machine_code;
            }

            public function setDate_rented($date_rented){
                $this->date_rented=$date_rented;
            }
            public function getDate_rented(){
                return $this->date_rented;
            }

            public function setDate_returned($date_returned){
                $this->date_returned=$date_returned;
            }
            public function getDate_returned(){
                return $this->date_returned;
            }

//=================================================reading with inner join ========================================================

    
        // reading the table and its quary
        public function read(){

            $sql = 'SELECT * FROM renting 
                    INNER JOIN members on renting.members_ID= members.members_ID 
                    INNER JOIN computers on renting.machine_code= computers.machine_code';

            // $sql = 'SELECT * FROM renting;
            // INNER JOIN computers on renting.machine_code= computers.machine_code';
                                     

            // prepare statement
            $statement = $this->pdo->query($sql);
            var_dump($sql);

            
            // get all members
            $renting = $statement->fetchAll(PDO::FETCH_ASSOC);
            
            
                        
            if ($renting) {
                // show the operations
                foreach ($renting as $renting) {
                    echo $renting['operation_nr'] . ' '. $renting['members_ID'] . ' '.
                    $renting['machine_code'] . ' '.$renting['date_rented'] . ' '.$renting['date_returned'];
                    echo '<br>';
                }
            }

            


    }
        

    
        
     
    }

    

    $sql = 'SELECT * FROM members 
                    JOIN renting USING(members_ID) 
                    JOIN computers USING(machine_nr)';
                                     

            // prepare statement
            $statement = $pdo->query($sql);
            var_dump($statement);


            // get all members
            $renting = $statement->fetchAll(PDO::FETCH_ASSOC);
            
            
                        
            if ($renting) {
                // show the operations
                foreach ($renting as $renting) {
                    echo $renting['operation_nr'] . ' '. $renting['members_ID'] . ' '.
                    $renting['machine_code'] . ' '.$renting['date_rented'] . ' '.$renting['date_returned'];
                    echo '<br>';
                }

            }

            