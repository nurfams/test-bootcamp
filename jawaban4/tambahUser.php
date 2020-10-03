<?php 
    require_once 'koneksi.php';
    if (isset($_POST["submit"])) {
		
		if (tambahDataUser($_POST) > 0) {
			echo "<script>
				alert('data berhasil di input');
				document.location.href = 'index.php';
			</script>";
		} else {
			echo "<script>
				alert('data Gagal Di input');
			</script>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data User</title>
</head>
<body>
    <h1>Halaman Tambah Data User</h1>
    <a href="admin.php"><button>Kembali</button></a>
    <form action="" method="post" enctype="multipart/form-data">
        <Ul>
            <li>
                <label for="Nama">Nama : </label>
                <input type="text" name="nama">
            </li>

            <br>

            <li>
            <label for="email">Email : </label>
            <input type="email" name="email">
            </li>

            <br>

            <li>
            <label for="role">Role : </label>
            <input type="text" name="role">
            </li>
            <br>
        <button type="submit" name="submit">Submit</button>
    </form>

    
</body>
</html>