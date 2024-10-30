<?php 
  include('konek.php');


  $username  = $_POST['username'];
  $pass = $_POST['pass'];
  $level  = $_POST['level'];
  

      $insert = mysqli_query($konek,"INSERT INTO user(id_user,username,pass,level) VALUES ('','$username','$pass','$level')");

      ?><script language="JavaScript">alert('Data Berhasil Di Tambahkan!');
         document.location="index-admin.php#team" </script>
    <?php


 ?>
  

