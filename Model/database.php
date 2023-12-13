<!-- Audrey Harmon
MyAPI - Final 
BackEnd WebDev 
12/13/2023 -->

<?php
    $dsn = "mysql:host=localhost;dbname=library"; // db name is stored referencing library
    $username = "root";
    $password = "";

    try{
        $db = new PDO($dsn, $username, $password); // instance for connecting to db is created and stored
    }
    catch(PDOException $e){ // if connection fails
        echo("not connected"); // error message is displayed
        echo "Database Connection Error: " . $e->getMessage();
    }
?>