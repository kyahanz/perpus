<?php
include_once("connect.php");

$id = $_GET["id"];
$query_get_data = mysqli_query($db, "SELECT * FROM staff WHERE id=$id");
$staff = mysqli_fetch_assoc($query_get_data);
if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $telp = $_POST["telp"];
    $email = $_POST["email"];

    $query = mysqli_query($db, "UPDATE staff SET nama='$nama', telp='$telp', email='$email' WHERE id=$id");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form EDIT staff</title>
</head>
<body>
    <h1>FORM EDIT DATA STAFF</h1>
    <form action="" method="POST">
        <label for="nama">NAMA</label>
        <input value="<?php echo $staff['Nama']?>"type="text" id="nama" name="nama">
        <br>
        <br>
        <label for="telp">ISBN</label>
        <input value="<?php echo $staff['Telp']?> "type="text" id="telp" name="telp">
        <br>
        <br>
        <label for="email">UNIT</label>
        <input value="<?php echo $staff['Email']?>"type="email" id="email" name="email">
        <br>
        <br>
        <button type="submit" name="submit">SUBMIT</button>
    </form>

    <a href="staff.php">Kembali</a>
</body>
</html>