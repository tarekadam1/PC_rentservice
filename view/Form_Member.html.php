<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Form.css">
        <title>Form Membes</title>
    </head>
            <body>
           
        
                <form action="HandlarMember.php" method="post">

                    
                    <input   type="text"   name="members_ID" placeholder="members_ID"/> <br>

                    <input   type="text"   name="Forname"  placeholder="Fornamee"/> <br>

                    <input   type="text" id="Aftername" name="email"  placeholder="Aftername"/> <br>

                    <input   type="text"   name="Deposite"  placeholder="Deposite"/> <br>

                    <input   type="text"  name="Email_adresse"    placeholder="Email_adresse"/> <br>

                    <input   type="text"   name="Post_adresse"  placeholder="Post_adresse"/> <br>

                

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

                /*
                
                if ( isset( $_POST['SUBMIT'] ) ) {

                    $familyname=$_REQUEST['familyname'];
                    $username=$_POST['username'];
           


                    $name= array($familyname, $username, );
                    print_r($name);

                }
                */



                ?>
                
                
                
            </body>

</html>