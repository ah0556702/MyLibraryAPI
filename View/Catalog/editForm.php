<!-- Audrey Harmon
MyAPI - Final 
BackEnd WebDev 
12/13/2023 -->


<?php $book = getBook($bookID); ?>
<br>
<hr>
<h5>Edit Form</h5>
<form action="" method="post" enctype="multipart/form-data">
    <!-- BOOK ID IS STORED IN HIDDEN FIELD TO BE SUBMITTED WHEN FORM IS -->
    <div><input type="text" name="bookID" value="<?= $bookID ?>"></div>
    <!-- ALL FIELDS ARE PRELOADED WITH VALUES RELATING TO THE SELECTED BOOKS DATA -->
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
        <input type="text" name="title" value="<?= @$book[0]['Title']?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Author First Name</span>
        <input type="text" name="fName" value="<?= @$book[0]['Author_fName']?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Author Last Name</span>
        <input type="text" name="lName" value="<?= @$book[0]['Author_lName']?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
        <input type="text" name="description" value="<?= @$book[0]['Book_Desc']?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>

    <div>
        <?php loadGenreSelect(); ?>
    </div>

    <hr>

    <div>
        <input type="submit" value="Edit Book">
    </div>
</form>

<?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){ // when the form is submitted....
            $bookID = filter_input(INPUT_POST, 'bookID'); // all form fields are filtered and stored in vars...
            $title = filter_input(INPUT_POST, 'title');
            $fName = filter_input(INPUT_POST, 'fName');
            $lName = filter_input(INPUT_POST, 'lName');
            $description = filter_input(INPUT_POST, 'description');
            $genreID = filter_input(INPUT_POST, 'genreID');

            editBook($bookID, $title, $fName, $lName, $description, $genreID); // and passed to the editBook function where entry will be updated in the db
        }

?>