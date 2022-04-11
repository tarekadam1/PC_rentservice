<?php
/*

//activating Autoloader
require_once ('myAutoLoader.php');
myAutoLoader::register();

// initializing connection with Database
$dbconnection= new DatabaseConnect();
$pdo = $dbconnection->connect();

// creating the class "one of three" 
class Putmember{

    // prperity name are identical as in DB table members
    // property is in private protection within class
    private 	$Member_ID;
    private 	$Forname;
    private 	$Aftername;
    private     $Deposite;
    private 	$Email_adresse;
    private 	$Post_adresse;
    private     $table= "members";
    private     $pdo;

   
   

        //the constructor to initialize the properties of the object    
        // types are identical as in DB table members        
        public function __construct($pdo, int $Member_ID, string	$Forname, string $Aftername,int $Deposite,
                                   string $Email_adresse, string $Post_adresse){

                                    $pdo= $this->dbconnection->connect();    
                                    $Member_ID=$this->Member_ID;
                                       $Forname=$this->Forname;
                                        $Aftername=$this->Aftername;
                                        $Deposite=$this->Deposite;
                                        $Email_adresse=$this->Email_adresse;
                                        $Post_adresse=$this->Post_adresse;
        }

                //limiting the access to private property only through getter/setter in public method      
                //public function setMembers_ID($Member_ID){            
                //$this->$Member_ID;            
                //}
                public function getMember_ID(){
                return $this->Member_ID;
                }

                public function setForname($Forname){
                    $this->Forname=$Forname;
                }
                public function getForname(){
                    return $this->Forname;
                }

                public function setAftername($Aftername){
                    $this->Aftername=$Aftername;
                }
                public function getAftername(){
                    return $this->Aftername;
                }

                public function setDeposite($Deposite){
                    $this->Deposite=$Deposite;
                }
                public function getDeposite(){
                    return $this->Deposite;
                }

                public function setEmail_adresse($Email_adresse){
                    $this->Email_adresse=$Email_adresse;
                }                
                public function getEmail_adresse(){
                    return $this->Email_adresse;
                }

                public function setPost_adresse($Post_adresse){
                    $this->Post_adresse=$Post_adresse;
                }
                public function getPost_adresse(){
                    return $this->Post_adresse;
                }


    function read(){

        $sql = "SELECT * FROM " . $this->table . " WHERE Email_adresse=". $this->Email_adresse;

         // initializing connection with Databas
            $dbconnection= new DatabaseConnect();
            $pdo = $dbconnection->connect();        
              
        // prepare statement
            $statement = $pdo->query($sql);

        // get all members
            $members = $statement->fetchAll(PDO::FETCH_ASSOC);
                }
                           }

    
        
       




                                    


    

 
//=================================INSERT===================================================
/*    

    $Forname = 'second';
    $Aftername = 'PERSON';
    $Deposite = 100;
    $Email_adresse = 'person@email.com';
    $Post_adresse = '23 bd CANNES';



$sql = 'INSERT INTO members (Forname, Aftername, Deposite, Email_adresse, Post_adresse)
        VALUES (:Forname, :Aftername, :Deposite, :Email_adresse, :Post_adresse)';




    $statement = $pdo->prepare($sql);
    var_dump($statement);

    $result = $statement->execute([
                                ':Forname' => $Forname, 
                                ':Aftername' => $Aftername,
                                ':Deposite' => $Deposite, 
                                ':Email_adresse' => $Email_adresse, 
                                ':Post_adresse' => $Post_adresse    
                                ]);

                                                    //($statement->errorInfo());


                                                    $dbconnection = null;

//=================================READ===================================================


$sql = 'SELECT members_ID, Forname, Aftername
		  FROM members';

// prepare statement
$statement = $pdo->query($sql);

// get all members
$members = $statement->fetchAll(PDO::FETCH_ASSOC);


if ($members) {
	// show the members
	foreach ($members as $member) {
		echo $member['Forname'] . ' '.$member['Aftername'];
        echo '<br>';
	}
//-------------------------------------------------------------------
}
echo "<hr>";
$members_ID= 4;
$sql = 'SELECT members_ID, Forname, Aftername
		  FROM members WHERE members_ID = :members_ID';

// prepare statement
$statement = $pdo->prepare($sql);
$statement->execute([":members_ID" => $members_ID]);
// get all members
$member = $statement->fetch(PDO::FETCH_ASSOC);


if ($members) {
	// show the members
	//foreach ($members as $member) {
		echo $member['Forname'] . ' '.$member['Aftername'];
        echo '<br>';
	//}
*/
