<?php

//activating Autoloader which saved in models
require_once ('../models/myAutoLoader.php');
myAutoLoader::register();

// initializing connection with Database "file is saved in models"
$dbconnection= new DatabaseConnect();
$pdo = $dbconnection->connect();



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
$members_ID= 7;
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

}

