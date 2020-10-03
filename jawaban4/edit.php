<?php 
require_once 'koneksi.php';
if (isset($_POST["submit"])) {
		
    if (editData($_POST) > 0) {
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
    $id = $_GET['id'];
    $sql = tampilData("SELECT * FROM news INNER JOIN user ON news.id_user = user.id_user WHERE id_news = $id"); 
    foreach ($sql as $data):
    ?>
        <Ul>
            <input type="text" name="id" hidden value="<?= $data['id_news']; ?>">
            <li>
                <label for="title">Judul : </label>
                <input type="text" name="title" value="<?= $data['title']; ?>">
            </li>

            <br>

            <li>
            <label for="deskripsi">Deskripsi : </label>
            <textarea name="deskripsi" cols="30" rows="10"><?= $data['deskripsi']; ?></textarea>
            </li>

            <br>

            <li>
            <label for="tanggal">Tanggal Dibuat : </label>
            <input type="date" name="tanggal" value="<?= $data['create_time']; ?>">
            </li>
            <?php endforeach; ?>
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
            
                    <?php 
                     $sql2 = tampilData("SELECT * FROM news INNER JOIN user ON news.id_user = user.id_user WHERE id_news = '$id'"); 
                     foreach ($sql2 as $data1):
                    ?>

            <li>
            <label for="gambar">Gambar : </label>
            <input type="file" name="gambar" value="<?= $data1['gambar']; ?>">
            </li>
        </Ul>

        <button type="submit" name="submit">Submit</button>
    </form>
                     <?php endforeach; ?>
</body>
</html>