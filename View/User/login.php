<!-- Audrey Harmon
MyAPI - Final 
BackEnd WebDev 
12/13/2023 -->


<?php
    include "../Includes/cdnlinks.php";
    include "../../Model/library_db.php";
?>

<h1>USER LOGIN</h1>

<form action="" method="post"> 

  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="userEmail" name="username">
  </div>

  <div class="mb-3"> <!-- this is not a secure password field and no hashing function was used -->
    <label for="password" class="form-label">Password</label>
    <input type="text" class="form-control" id="password" name='password'>
  </div>

  <div>
    <button type="submit" class="btn btn-primary">Login</button>
  </div>

</form>

<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){ // if the form is submitted
    $username = $_POST['username']; // retrieve the form input data
    $password = $_POST['password'];

    $apikey = login($username, $password); // pass the input data as args to be checked against existing user data

    if($apikey) { // if it is correct and an api key is associated with the user
      session_start(); // start the session again

      $_SESSION['apikey'] = $apikey; // store the api key in the session
    }
    // echo "<script>var apikey = '$apikey';</script>";
  }

?>