<?php require_once 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Test Dumbways</title>
</head>
<body>

<div class="container">    
    <a href="admin.php"><button>Menu Admin</button></a>
    <?php 
    $sql = tampilData("SELECT * FROM news INNER JOIN user ON news.id_user = user.id_user"); 
    foreach ($sql as $data):
    ?>
    
    <div class="magni">
        <div class="kotak">
            
            <img class="img" src="img/<?= $data['gambar'] ?>" alt="" width="100" height="150" alt="gambar">

            <div class="isi">
            <p class="title"><?= $data['title']; ?></p>
            <p class="penulis">Created By : <?= $data['nama']; ?></p>

            <p class="paragraf"><?= $data['deskripsi']; ?></p>
            <a href="bacaberita.php?id=<?= $data['id_news']; ?>"><button class="baca">Baca Berita</button></a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
  
</body>
</html>