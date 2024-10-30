<?php 
include('konek.php');

	$id_user2 = $_GET['id_user2'];
	$delete = mysqli_query($konek,"DELETE FROM user2 WHERE id_user2= '$id_user2' ");
 ?>
 {
 <script language="JavaScript">alert('Data User Berhasil Dihapus!!!');
		     document.location='index-admin.php#services'</script>
		 }