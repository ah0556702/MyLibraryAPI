<!-- Audrey Harmon
MyAPI - Final 
BackEnd WebDev 
12/13/2023 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // CHECK IF THE COOKIE USERNAME EXISTS
    if(isset($_COOKIE["username"])){
        echo "Welcome " . $_COOKIE["username"] . "!<br>";
    } else {
        echo "Cookie name 'Username' is not set!";
    }
    

    ?>
</body>
</html>