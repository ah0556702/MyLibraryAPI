<!-- Audrey Harmon
MyAPI - Final 
BackEnd WebDev 
12/13/2023 -->


<?php
    include "../Includes/cdnlinks.php";
    include "../../Model/library_db.php";
?>

<h1>USER REGISTRATION</h1>

<form action="" method="post">
    <div class="mb-3">
        <span label for="firstName" enctype="multipart/form-data" class="form-label">First Name</span>
        <input type="text" class="form-control" name="firstName" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="mb-3">
        <span label for="lastName" class="form-label">Last Name</span>
        <input type="text" class="form-control" name="lastName" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="mb-3">
        <span label for="username" class="form-label">Username</span>
        <input type="text" class="form-control" name="username" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="text" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    
    <div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){ // if the form is submitted...
        global $db;
        $firstName = filter_input(INPUT_POST, 'firstName'); // grab user input and store it in variables...
        $lastName = filter_input(INPUT_POST, 'lastName');
        $username = filter_input(INPUT_POST, 'username');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');

        registerUser($firstName, $lastName, $username, $email, $password); // pass user input as args to insert user data into the db
    }
?>