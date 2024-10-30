<?php

include 'konek.php';

$username	= $_POST['username'];
$pass		= md5($_POST['pass']);


$query = mysqli_query($konek,"select * from user where username='$username' and pass='$pass'");
$cek = mysqli_num_rows($query);

$row =mysqli_fetch_array($query);
	$pemilik= $row['level'];
	
if ($cek == 1) 
{	
	if ($pemilik == "Admin") 
	    {
			?>
			<script language="JavaScript">alert('Selamat Datang Admin');
		     document.location='index-admin.php'</script>
		   <?php
		}	
}
else
{
	?>
			<script language="JavaScript">alert('Login Gagal');
		     document.location='index.php'</script>
		   <?php
}

 ?>
