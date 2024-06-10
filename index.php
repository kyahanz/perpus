<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan</title>
</head>

<body>
    <div class="container">
        <h1>Aplikasi Perpustakaan V.2</h1>
        <a href="buku.php">Lihat Daftar buku</a>
        <br>
        <a href="staff.php">Lihat daftar Staff</a>
        <br>
        <br>
        <form action="logout.php" method="POST">
            <button name="logout" id="logout">Logout</button>
        </form>
    </div>
</body>
</html>