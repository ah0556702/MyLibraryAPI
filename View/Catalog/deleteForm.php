<!-- Audrey Harmon
MyAPI - Final 
BackEnd WebDev 
12/13/2023 -->


<?php
    include "../../Model/library_db.php";
    include "../Includes/cdnlinks.php";
    include "../nav.php";
?>
<br>
<form action="" method="post" enctype="multipart/form-data">
    <h5>SELECT BOOK TO DELETE</h5>
    <div class="input-group mb-3">
        <?php loadBookSelect() ?>
        <hr>
    </div>
    <div>
        <input type="submit" value="Delete Entry">
    </div>
</form>

<?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){ // when form is submitted...

            $bookID = filter_input(INPUT_POST, 'bookID'); // book id is grabbed from selected option 
            deleteBook($bookID); // and passed as an arg to be deleted
        }
?>