<?php 
	include('konek.php');

	$nama               = $_POST['nama'];
	$username			= $_POST['username'];
	$email              = $_POST['email'];
	$pass				= $_POST['pass'];
	$level              = $_POST['level'];


	
	
    	$insert = mysqli_query($konek,"INSERT INTO user2(id_user2,nama,username,email,pass,level) VALUES ('','$nama','$username','$email','$pass','$level')");
    	?><script language="JavaScript">alert('Anda Berhasil Melakukan Login!!!');
		     document.location='lihatuser.php#services'</script>
   

 ?>