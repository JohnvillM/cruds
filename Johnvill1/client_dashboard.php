<?php
//start session
    session_start();
    if(!isset($_SESSION['username']) || $_SESSION['role'] != 'client')
    {
        header("location:index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>CLIENT DASHBOARD</title>
</head>
<body>
    <?php
    echo "Welcome Client ".$_SESSION['username'];
    ?>
    <br><a href="logout.php">Logout</a>
</body>
</html>