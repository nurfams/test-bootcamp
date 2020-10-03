<?php 
    $koneksi = mysqli_connect('localhost', 'root', '', 'berita_digital');

    function tampilData($data) {
        global $koneksi;

        $datas = [];
        $sql = mysqli_query($koneksi, $data);
        while ($data = mysqli_fetch_assoc($sql)) {
            $datas[] = $data;
        }
        return $datas;

    }

    function tambahData($data) {
        global $koneksi;

        $title = $data["title"];
        $deskripsi = $data["deskripsi"];
        $tanggal = $data["tanggal"];
        $nama = $data["name"];
        
        $temp   = $_FILES['gambar']['tmp_name'];
        $name   = $_FILES['gambar']['name'];
        $size   = $_FILES['gambar']['size'];
        
        if ($size > 10000000) {
			echo "<script>
				alert('ukuran gambar terlalu besar');
			</script>";
			return false;
        }
        
        move_uploaded_file($temp, 'img/'. $name);

        $sql = "INSERT INTO news VALUES ('', '$title', '$name', '$deskripsi', '$tanggal', '$nama')";
        mysqli_query($koneksi, $sql);

        return mysqli_affected_rows($koneksi);
    }

    function hapusData($id) {
		global $koneksi;
		mysqli_query($koneksi, "DELETE FROM news WHERE id_news = $id");
		return mysqli_affected_rows($koneksi);
    }

    function hapusDataUser($id) {
		global $koneksi;
		mysqli_query($koneksi, "DELETE FROM user WHERE id_user = $id");
		return mysqli_affected_rows($koneksi);
    }
    
    function editData($data) {
		global $koneksi;

        $id = $data["id"];
		$title = $data["title"];
        $deskripsi = $data["deskripsi"];
        $tanggal = $data["tanggal"];
        $nama = $data["name"];
        
        $temp   = $_FILES['gambar']['tmp_name'];
        $name   = $_FILES['gambar']['name'];
        $size   = $_FILES['gambar']['size'];
        
        if ($size > 10000000) {
			echo "<script>
				alert('ukuran gambar terlalu besar');
			</script>";
			return false;
        }
        
        move_uploaded_file($temp, 'img/'. $name);

		$sql = "UPDATE news SET 
		title = '$title', 
		gambar = '$name', 
		deskripsi = '$deskripsi', 
		create_time = '$tanggal', 
        id_user = '$nama'
        WHERE id_news = '$id'";
		mysqli_query($koneksi, $sql);
		return mysqli_affected_rows($koneksi);
    }

    function editDataUser($data) {
		global $koneksi;

        $id = $data["id"];
		$nama = $data["nama"];
        $email = $data["email"];
        $role = $data["role"];

		$sql = "UPDATE user SET 
		nama = '$nama', 
		email = '$email', 
		rolee = '$role'
        WHERE id_user = '$id'";
		mysqli_query($koneksi, $sql);
		return mysqli_affected_rows($koneksi);
    }
    
    function tambahDataUser($data) {
        global $koneksi;

        $nama = $data["nama"];
        $email = $data["email"];
        $role = $data["role"];

        $sql = "INSERT INTO user VALUES ('', '$nama', '$email', '$role')";
        mysqli_query($koneksi, $sql);

        return mysqli_affected_rows($koneksi);
    }
?>