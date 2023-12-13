<!-- Audrey Harmon
MyAPI - Final 
BackEnd WebDev 
12/13/2023 -->

<?php
    include "../../Model/library_db.php";
    include "../Includes/css.php";
    include "../nav.php";
    
?>

<h3>Add Book to API</h3>
<br>
<form action="" method="post" enctype="multipart/form-data">
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
        <input type="text" name="title" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">First Name</span>
        <input type="text" name="fName" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Last Name</span>
        <input type="text" name="lName" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
        <input type="text" name="description" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>

    <div>
        <?php loadGenreSelect(); ?>
    </div>

    <hr>
    <div>
        <input type="submit" value="Add Book">
    </div>
</form>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){ // when the form is submitted...
        $title = filter_input(INPUT_POST, 'title'); // all user input is filtered and stored
        $fName = filter_input(INPUT_POST, 'fName');
        $lName = filter_input(INPUT_POST, 'lName');
        $description = filter_input(INPUT_POST, 'description');
        $genreID = filter_input(INPUT_POST, 'genreID');
    
        addBook($title, $fName, $lName, $description, $genreID); // and passed as args to the addBook function
    }

?>
