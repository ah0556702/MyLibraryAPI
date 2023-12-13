<!-- Audrey Harmon
MyAPI - Final 
BackEnd WebDev 
12/13/2023 -->

<?php
    header('Content-type: application/json');
    // ALLOW CROSS ORIGIN - CORS POLICY ERROR SOLUTION
    header('Access-Control-Allow-Origins: *');
    include "../../Model/database.php";
    global $db;

    $sql = "Select * FROM books";

    if(isset($_GET['id'])){
        $sql .= " WHERE Book_ID = :id";
        // prepare the statement
        $stmt = $db->prepare($sql);
        // bind the id parameter to the value from the $_GET, ensuring its' an integer
        $stmt->bindValue(':id', filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS));
        // execute prepared statement
        $stmt->execute();
        $qry = $stmt->fetchAll(PDO::FETCH_ASSOC); // the fetch assoc is added as a param to ensure that the data is returned unindexed in the json data
    } 
    else { 
        $qry = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    echo json_encode($qry);
    
?>