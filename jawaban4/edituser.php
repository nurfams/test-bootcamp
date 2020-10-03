<?php 
require_once 'koneksi.php';
if (isset($_POST["submit"])) {
		
    if (editDataUser($_POST) > 0) {
        echo "<script>
            alert('data berhasil di Edit');
            document.location.href = 'admin.php';
        </script>";
    } else {
        echo "<script>
            alert('data Gagal Di Edit');
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
<h1>Halaman Edit Data</h1>
    <a href="admin.php"><button>Kembali</button></a>
    <form action="" method="post" enctype="multipart/form-data">
    <?php 
    $id = $_GET['id_user'];
    $sql = tampilData("SELECT * FROM user WHERE id_user = $id"); 
    foreach ($sql as $data):
    ?>
        <Ul>
            <input type="text" name="id" hidden value="<?= $data['id_user']; ?>">
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" value="<?= $data['nama']; ?>">
            </li>

            <br>

            <li>
            <label for="email">Email : </label>
            <input type="email" name="email" value="<?= $data['email']; ?>">
            </li>

            <br>

            <li>
            <label for="role">Role : </label>
            <input type="text" name="role" value="<?= $data['rolee']; ?>">
            </li>
            <?php endforeach; ?>
            
        </Ul>

        <button type="submit" name="submit">Submit</button>
    </form>

</body>
</html>