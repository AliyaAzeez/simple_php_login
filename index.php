<?php

session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);



?>

<!DOCTYPE html>
<html>
    <head>
    <title>Test website</title>
    </head>
    <body>
        <a href="logout.php">Logout</a>
        <h1>Welcome to the test website gghhjkl</h1>
        <p>Hello! <?php echo $user_data['user_name'];?></p>
    </body>
</html>