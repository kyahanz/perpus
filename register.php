<?php
session_start();
if(isset($_SESSION["email"])){
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register Form</h2>
    <form method="POST" action="register_proses.php">
        <label for="email">EMAIL:</label>
        <input type="text" name="email" id="email">
        <label for="password">PASSWORD:</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" name="submit" id="submit">
    </form>


</body>
</html>