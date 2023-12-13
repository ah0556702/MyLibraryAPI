<!-- Audrey Harmon
MyAPI - Final 
BackEnd WebDev 
12/13/2023 -->

<?php
    include "../../Model/library_db.php";
    include "../nav.php";

    $apiKey = $_SESSION['apikey']; // grab apikey from session and assign it to var again
    $user = userInfo($apiKey); // use the api key to pull all user info from db
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <h1>User Info</h1>
    <hr>
    <!-- DISPLAY USER INFO  -->
    <table class="table table-bordered">
        <tbody>
            <tr>
            <th scope="row">First Name</th>
            <td><?php echo "{$user['First_Name']}" ?></td>
            </tr>
            <tr>
            <th scope="row">Last Name</th>
            <td><?php echo "{$user['Last_Name']}" ?></td>
            </tr>
            <tr>
            <th scope="row">Username</th>
            <td><?php echo "{$user['Username']}" ?></td>
            </tr>
            <tr>
            <th scope="row">Email</th>
            <td><?php echo "{$user['Email']}" ?></td>
            </tr>
            <tr>
            <th scope="row">Password</th>
            <td><?php echo "{$user['Password']}" ?></td>
            </tr>
            <tr>
            <th scope="row">API Key</th>
            <td><?php echo "{$user['API_Key']}" ?></td>
            </tr>
        </tbody>
    </table>
    <!-- LOG OUT OPTION FOR DESTROYING SESSION AND RETURNING TO ROOT INDEX HTML PAGE -->
    <form action="../User/index.php?lo=y" method="post" class="lo"> 
        <input type="submit" name="lo" value="Log Out">
    </form>
</body>
</html>