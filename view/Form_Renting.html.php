<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet" href="Form.css">
    <title>Form Renting</title>
</head>
<body>

<body>
           
        
                            <form action="../Controller/HandlarRenting.php" method="post">

                    
                    <input   type="text"   name="operation_nr" placeholder="operation_nr"/> <br>

                    <input   type="text"   name="members_ID"  placeholder="members_ID"/> <br>

                    <input   type="text" id="machine_code" name="email"  placeholder="machine_code"/> <br>

                    <input   type="text"  name="date_rented"    placeholder="date_rented"/> <br>

                    <input   type="text"   name="date_returned"  placeholder="date_returned"/> <br>

                    <input   type="text"   name="renting_notes"  placeholder="renting_notes"/> <br>

                

                    <input type="SUBMIT"  name="SUBMIT" /><br>

                    <input type="RESET"   value="RESET"/><br    >

                </form> 

    <?php

    //activating Autoloader which saved in models
        require_once ('../models/myAutoLoader.php');
        myAutoLoader::register();

    // initializing connection with Database "file is saved in models"
        $dbconnection= new DatabaseConnect();
        $pdo = $dbconnection->connect();


                

//=================================READ MEMBERS===================================================


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

}}
//---------------------------------------READ COMPUTERS----------------------------

echo "<hr>";
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
	}}




                ?>

    
</body>
</html>

