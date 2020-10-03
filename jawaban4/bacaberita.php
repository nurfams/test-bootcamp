<?php require_once 'koneksi.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Baca Berita</title>
</head>
<body>
    <?php 
        $id_news = $_GET['id'];
        $sql = tampilData("SELECT * FROM news INNER JOIN user ON news.id_user = user.id_user WHERE id_news = $id_news");
        foreach ($sql as $data):
    ?>
    <div class="container">
    <a href="index.php"><button>Kembali</button></a>
        <div class="magni">
            <div class="kotak">
                
                <p class="title center"><?= $data['title']; ?></p>
                <p class="penulis center">Created By : <?= $data['name']; ?></p>

                <p class="paragraf1"><?= $data["deskripsi"]; ?></p>
            </div>
        </div>
    </div>


        <?php endforeach; ?>
</body>
</html>