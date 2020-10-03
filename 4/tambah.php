<?php 
    require_once 'koneksi.php';
    if (isset($_POST["submit"])) {
		
		if (tambahData($_POST) > 0) {
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
    <title>Tambah Data</title>
</head>
<body>
    <h1>Halaman Tambah Data</h1>
    <a href="admin.php"><button>Kembali</button></a>
    <form action="" method="post" enctype="multipart/form-data">
        <Ul>
            <li>
                <label for="title">Judul : </label>
                <input type="text" name="title">
            </li>

            <br>

            <li>
            <label for="deskripsi">Deskripsi : </label>
            <textarea name="deskripsi" cols="30" rows="10"></textarea>
            </li>

            <br>

            <li>
            <label for="tanggal">Tanggal Dibuat : </label>
            <input type="date" name="tanggal">
            </li>

            <br>
            
            <li>
            <label for="nama">Nama Pembuat : </label>
            <select name="name">
            <?php 
                $sql = tampilData("SELECT * FROM user"); 
                foreach ($sql as $data):
            ?>
                <option value="<?= $data['id_user']; ?>"><?= $data['name']; ?></option>
                <?php endforeach; ?>
            </select>
            </li>
            <br>

            <li>
            <label for="gambar">Gambar : </label>
            <input type="file" name="gambar">
            </li>
        </Ul>

        <button type="submit" name="submit">Submit</button>
    </form>

    
</body>
</html>