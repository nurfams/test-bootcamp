<?php 
	require_once 'koneksi.php';

	if (hapusData($_GET['id_news']) > 0) {
			echo "
				<script>
				alert('data Berhasil dihapus');
				document.location.href = 'admin.php';
				</script>
			";
		} else {
			echo "
				<script>
				alert('data Gagal dihapus');
			
				</script>
			";
		}


	if (hapusDataUser($_GET['id_user']) > 0) {
		echo "
			<script>
			alert('data Berhasil dihapus');
			document.location.href = 'admin.php';
			</script>
		";
	} else {
		echo "
			<script>
			alert('data Gagal dihapus');
			document.location.href = 'admin.php';
			</script>
		";
	}

	

 ?>