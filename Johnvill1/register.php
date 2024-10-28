<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form class="form" action="register_account.php" method="post">
    <p class="title">Register </p>
    <p class="message">Signup now and get full access to our app. </p>
    <?php
        if(isset($_GET['message']))
        {
            echo $_GET['message'];
        }
    ?>
        <form action="register_add.php" method="post">
        <input type="text" name="firstname" id="" placeholder="Enter Firstname" required>
        <br><br>
        <input type="text" name="lastname" id="" placeholder="Enter Lastname" required>
        <br><br>
        <input type="text" name="username" id="" placeholder="Enter Username" required>
        <br><br>
        <input type="password" name="password" id="" placeholder="Enter Password" required>
        <br><br>
        <input type="submit" name="register" id="" value="Register">
        <br><br>
        <p>Have An Account? <a href="index.php" style="text-decoration:none; color:green;">Login</a></p>
    </form>
</form>
</body>
</html>