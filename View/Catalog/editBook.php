<!-- Audrey Harmon
MyAPI - Final 
BackEnd WebDev 
12/13/2023 -->


<?php
    include "../../Model/library_db.php";
    include "../nav.php";
?>

<form action="" method="post" enctype="multipart/form-data">
    <br>
    <h5>SELECT BOOK TO EDIT</h5>
    <br>
    <div class="input-group mb-3">
        <?php loadBookSelect() ?>
        <hr>
    </div>
    <div>
        <input type="submit" value="Submit">
    </div>
</form>

<?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){ // when form is submitted...

            $bookID = filter_input(INPUT_POST, 'bookID'); // book id is grabbed from selected option...
            include "editForm.php"; // the edit book form is included with the selected books data preloaded
        }
?>