<!-- Audrey Harmon
MyAPI - Final 
BackEnd WebDev 
12/13/2023 -->

<?php
    include "../Includes/cdnlinks.php";

    session_start(); // start the session

    $frmUser = filter_input(INPUT_POST, 'username'); // post the username entered and store it in a var

    $logOut = filter_input(INPUT_GET, 'lo'); // grab the logout status and store it in a var

    if($logOut){ // if logout is true
        $_SESSION = [];
        // UNSET SESSION COOKIE BY SETTING ITS EXPIRATION TO A PAST TIME
        if(isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time() - 1, '/'); // sets the time to before the start of the session, disposing of cookies
        }

        session_destroy(); // session is terminated and all cookies destroyed, pew pew

        header('Location: ../../index.html'); // once they have logged out they are redirected back to the login page 
    }

    if(!empty($frmUser)){ // checks that a name was input into the username field
        // login valid
        $_SESSION['username'] = $frmUser; // assigns username to the session
        header('Location: loginConfirmation.php'); // redirects to the login confirmation page where the api is pulled from the catalog index page
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/styles.css">
    <title>User Login</title>
</head>
<body>

    <?php
        if($logOut){ // if the user selects the log out button, the session is destroyed, and a message that they have logged out is displayed
            echo "You have successfully logged out.";
        } else {
            include "login.php"; // otherwise they are sent back to the login page
        }
    ?>

    <br>
</body>
</html>