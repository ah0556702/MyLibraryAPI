<!-- Audrey Harmon
MyAPI - Final 
BackEnd WebDev 
12/13/2023 -->

<?php
    include "database.php"; // include the database

    function getUserKey($username){ // GET USERS API KEY
        global $db;

        $sql = "SELECT API_Key FROM users WHERE `Username` = '$username'"; // grab the api key that matches the users username in the db

        $result = $db->query($sql);
        $data = $result->fetch(PDO::FETCH_ASSOC); // store user information in assoc array

        return $data['API_Key']; // return api key
    }

    function registerUser($firstName, $lastName, $username, $email, $password) // User information is used to register
    {
        global $db; // access db var connection
        $apiKey = bin2hex(random_bytes(32)); // store a random string of binary data

        $sql = "INSERT INTO users (`First_Name`, `Last_Name`, `Username`, `Email`, `Password`, `API_Key`)
                VALUES ('$firstName', '$lastName', '$username', '$email', '$password', '$apiKey')"; // inserts data submitted in the order form pertaining specifically to the customer into the customers table in the db

        $result = $db->query($sql); // execute query using sql statement
    }

    function login($username, $password){ // VERIFIES LOGIN STATUS
        global $db;
 
        $sql = "SELECT Password, First_Name, Last_Name, API_Key FROM users WHERE `Username` = '$username'"; // select password, first/last name and api key from db where the username matches that of the current user

        $result = $db->query($sql);
        $data = $result->fetch(PDO::FETCH_ASSOC); // store it in an assoc array

        if(@$data['Password'] == $password){ // if the password entered matches the password stored in the db
            $fullName = $data['First_Name'] . $data['Last_Name']; // the full name of the user is stored

            header('Location: ../Catalog/index.php'); // the user is redirected to the api page
        } 
        
        return @$data['API_Key']; // api key is returned again
    }

    function userInfo($apikey){ // GRABS USER INFO USING API KEY    
        global $db;

        $sql = "SELECT * FROM users WHERE `API_Key` = '$apikey'"; // selects all related fields where the api key is found within the users table
        $result = $db->query($sql);
        $data = $result->fetch(PDO::FETCH_ASSOC); // fetches it to an assoc array

        return $data; // returns assoc array to be displayed on user info page
    }

    function loadGenreSelect(){ // LOADS GENRE SELECT BOX FOR FORMS 
        global $db;

        $sql = "SELECT * FROM genres"; // select all from genres

        $qry = $db->query($sql);
        $result = $qry->fetchAll();
        
        echo "<select class='form-select' name='genreID'>"; // opening tag for select box

        foreach($result as $genre){ // foreach item in genre array...
            $option = "<option value={$genre[0]}>{$genre[1]}</option>"; // load data in an option tag
            echo $option; // echo that tag
        }

        echo "</select>"; // closing select box tag
    }

    function addBook($title, $fName, $lName, $description, $genreID){ // FUNCTION FOR ADDING BOOKS
        global $db;
        // sql statement for inserting information into appropriate fields
        $sql = "INSERT INTO books(`Title`, `Author_fName`, `Author_lName`, `Book_Desc`, `Genre_ID`) 
                VALUES ('$title', '$fName', '$lName', '$description', '$genreID')";

        $db->query($sql);
    }

    function loadBookSelect(){ // FUNCTION FOR LOADING BOOK SELECT BOX
        global $db;

        $sql = "SELECT * FROM books"; // select all books in db

        $qry = $db->query($sql);
        $result = $qry->fetchAll();
        
        echo "<select class='form-select' name='bookID'>"; // opening tag for select box

        foreach($result as $book){ // for each book in the fetched assoc array...
            $option = "<option value={$book[0]}>{$book[1]}</option>"; // insert book title into option and set its value to the book id
            echo $option; // echo option tag
        }

        echo "</select>"; // echo closing select tag

        return $book; // return book array
    }

    function getBook($bookID){ // GET BOOK BASED ON ID
        global $db;

        $sql = "SELECT * FROM books WHERE `Book_ID` = '$bookID'"; // select all fields relating to the book found with the matching book id in the books db

        $qry = $db->query($sql);

        $result = $qry->fetchAll(PDO::FETCH_ASSOC); // store result in assoc array

        return $result;
    }

    function editBook($bookID, $title, $fName, $lName, $description, $genreID){ // FUNCTION FOR UPDATING BOOK INFORMATION
        global $db;
        // selected book is found within the array and updated when the form is submitted
        $sql = "UPDATE `books` SET `Title` = '$title', `Author_fName` = '$fName', `Author_lName` = '$lName', `Book_Desc` = '$description', `Genre_ID` = '$genreID' WHERE `Book_ID` = '$bookID'";

        $qry = $db->query($sql);
    }

    function deleteBook($bookID){ // FUNCTION FOR DELETING BOOKS 
        global $db;

        $sql = "DELETE FROM books WHERE `Book_ID` = $bookID"; // deletes book from array using book id as parameter

        $qry = $db->query($sql);
    }
?>