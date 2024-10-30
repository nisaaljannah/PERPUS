<?php 
	include('konek.php');

	if(isset($_POST['upload'])){
		$nama_buku			= $_POST['nama_buku'];
		$jenis_buku         = $_POST['jenis_buku'];
		$nama_penerbit		= $_POST['nama_penerbit'];
		$tahun_terbit       = $_POST['tahun_terbit'];
	
	
	//pengecekan tipe harus pdf
	$tipe_file = $_FILES['nama_file']['type']; //mendapatkan mime type
	if ($tipe_file == "application/pdf") //mengecek apakah file tersebu pdf atau bukan
	{
	
	 $nama_file = trim($_FILES['nama_file']['name']);
	
	
	
	 //mengganti nama pdf
	 $nama_baru = "file_".$nama_buku.date('H'.'s').".pdf"; //hasil contoh: file_1.pdf
	 $file_temp = $_FILES['nama_file']['tmp_name']; //data temp yang di upload
	 $folder    = "uploadbuku"; //folder tujuan
	
	 move_uploaded_file($file_temp, "$folder/$nama_baru"); //fungsi upload
	 //update nama file di database
	 $insert = mysqli_query($konek,"INSERT INTO buku(id_buku,nama_buku,gambar,jenis_buku,nama_penerbit,tahun_terbit) 
	
	
	 VALUES ('','$nama_buku','$nama_baru','$jenis_buku','$nama_penerbit','$tahun_terbit')");
	
	echo"<script>alert('Data Buku Berhasil Di Tambahkan!!!');
	document.location='index-admin.php#about'</script>";
	
	
	} else
	{
	 echo "Gagal Upload File Bukan PDF! <a href='index-admin.php'> Kembali </a>";
	}	
		
		
	}
	
   
    	?>
   
