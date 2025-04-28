<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="validador.php" method="post">
        <label for="">usuario</label>
        <input type="text" name="user" id="user">
        <label for="">senha</label>
        <input type="password" name="pass" id="pass">
<input type="submit" value="login" id="bnt" name="submit">




    </form>
    
</body>
</html>