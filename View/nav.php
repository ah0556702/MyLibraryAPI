<!-- Audrey Harmon
MyAPI - Final 
BackEnd WebDev 
12/13/2023 -->

<?php 
    include "Includes/cdnlinks.php";
    session_start(); // start the session

    @$apiKey = $_SESSION['apikey']; // retrieve the users api key and set it in a var, @ symbol keeps a warning from showing when the login file loads and there hasn't been a successful login yet
?>
<nav class="navbar justify-content-end navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="../Catalog/index.php">Library API</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            API Data
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="addForm.php">Add Entry</a></li>
            <li><a class="dropdown-item" href="editBook.php">Edit Entry</a></li>
            <li><a class="dropdown-item" href="deleteForm.php">Delete Entry</a></li>
            <hr>
            <li><a class="dropdown-item" href="libraryapi.php?api_key=<?php echo $apiKey ?>">View JSON</a></li> <!-- api key is passed to the libraryapi filepath to validate that it is present -->
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../User/userInfo.php">Profile</a>
        </li>
      </ul>
    </div>
  </div>
</nav>