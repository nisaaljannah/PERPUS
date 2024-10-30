<?php 
include('konek.php');

	$id_user = $_GET['id_user'];
	$delete = mysqli_query($konek,"DELETE FROM user WHERE id_user= '$id_user' ");
 ?>
 {
 <script language="JavaScript">alert('Data User Berhasil Dihapus!!!');
		     document.location='index-admin.php#team'</script>
		 }