<?php

include 'konek.php';

$username	= $_POST['username'];
$pass		= $_POST['pass'];


$query = mysqli_query($konek,"select * from user2 where username='$username' and pass='$pass'");
$cek = mysqli_num_rows($query);

$row =mysqli_fetch_array($query);
	$pemilik= $row['level'];
	
if ($cek == 1) 
{
	if ($pemilik == "User") 
	    {
			?>
			<script language="JavaScript">alert('Selamat Datang User');
		     document.location='index-user.php'</script>
		   <?php
		}	
}
else
{
	?>
			<script language="JavaScript">alert('Login Gagal');
		     document.location='index.php#sevices'</script>
		   <?php
}

 ?>
