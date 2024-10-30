<?php 
include('konek.php');

	$id_buku = $_GET['id_buku'];
	$delete = mysqli_query($konek,"DELETE FROM buku WHERE id_buku= '$id_buku' ");
 ?>
 {
 <script language="JavaScript">alert('Data Buku Berhasil Dihapus!!!');
		     document.location='index-admin.php#about'</script>
		 }