<?php

include 'config/config.php';

if(isset($_GET['id_biaya'])){
	if(hapus_biaya($_GET['id_biaya'])){
		echo "<script>document.location.href = 'tambah_biaya.php';</script>";
	}else echo "gagal menghapus data";
}

?>