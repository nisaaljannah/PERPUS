<?php 
	$konek = mysqli_connect('localhost','root','','perpustakaan');

	if (mysqli_connect_errno()) {
		echo "Gagal".mysqli_connect_error();
	}

 ?>