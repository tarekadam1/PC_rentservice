<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Form.css">
    <title>Form Computer</title>
</head>
<body>

<body>
           
        
                <form action="HandlarComputer.php" method="post">

                    <input   type="text"   name="machine_nr"  placeholder="machine_nr"/> <br>

                    <input   type="text" id="machine_code" name="email"  placeholder="machine_code"/> <br>

                    <input   type="text"  name="notes"    placeholder="notes"/> <br>

                    <input   type="text"   name="Effective_stock"  placeholder="Effective_stock"/> <br>

                    <input   type="text"   name="Stock"  placeholder="Stock"/> <br>

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


                ?>

    
</body>
</html>

