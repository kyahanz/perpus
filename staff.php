<?php
include("connect.php");
$query = mysqli_query($db, "SELECT * FROM staff");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Staff</title>
</head>
<body>
    <h1>Daftar Staff</h1>
    <table border="1">
        <tr>
            <td>Nama</td>
            <td>Telepon</td>
            <td>Email</td>
            <td>ACTION</td>
        </tr>
        <?php foreach($query as $staff) {?>
            <tr>
                <td><?php echo $staff["Nama"] ?></td>
                <td><?php echo $staff["Telp"] ?></td>
                <td><?php echo $staff["Email"] ?></td>
                <td><a href=<?php echo "edit-staff.php?id=" . $staff["id"]?>>EDIT</a> |
                <a href=<?php echo "hapus-staff.php?id=" . $staff["id"]?>>HAPUS</a>
            </td>
            </tr>
        
        <?php }    ?>
    </table>

    <a href="tambah-staff.php">Tambahkan staff</a>
    <br>
    <a href="index.php">Kembali</a>
</body>
</html>