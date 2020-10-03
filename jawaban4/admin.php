<?php require_once 'koneksi.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php"><button>Kembali</button></a>
    <a href="tambah.php"><button>Tambah Berita</button></a>
    <a href="tambahUser.php"><button>Tambah Data User</button></a>

    <h1>Tabel News</h1>

    <table border="1">
        <tr>
            <td>No</td>
            <td>Judul</td>
            <td>deskripsi</td>
            <td>Tanggal Pembuatan</td>
            <td>Nama Pembuat</td>
            <td>Gambar</td>
            <td>Aksi</td>
        </tr>
        <?php 
            $no = 1;
            $sql = tampilData("SELECT * FROM news INNER JOIN user ON news.id_user = user.id_user"); 
            foreach ($sql as $data):
        ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['title']; ?></td>
            <td><?= $data['deskripsi']; ?></td>
            <td><?= $data['create_time']; ?></td>
            <td><?= $data['nama']; ?></td>
            <td><img src="img/<?= $data['gambar']; ?>" width="80" height="100" alt="gambar"></td>
            <td><a href="edit.php?id_news=<?= $data['id_news'] ?>"><button>Edit Data</button></a><br>
                <a href="hapus.php?id_news=<?= $data['id_news'] ?>"><button>Hapus Data</button></a>
            </td>
        </tr>

            <?php 
                endforeach; 
            ?>
            
    </table>

    <h1>Tabel User</h1>

    <table border="1">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Email</td>
            <td>Role</td>
            <td>Aksi</td>
        </tr>
            <?php 
                $no = 1;
                $sql1 = tampilData("SELECT * FROM user");
                foreach($sql1 as $data1):
            ?>
        <tr>   
            <td><?= $no++; ?></td>
            <td><?= $data1['nama']; ?></td>
            <td><?= $data1['email']; ?></td>
            <td><?= $data1['rolee']; ?></td>
            <td><a href="edituser.php?id_user=<?= $data1['id_user'] ?>"><button>Edit Data</button></a><br>
                <a href="hapus.php?id_user=<?= $data1['id_user'] ?>"><button>Hapus Data</button></a>
            </td>
        </tr>

            <?php endforeach; ?>
    </table>
</body>
</html>