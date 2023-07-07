<?php

include ("koneksi/koneksi.php");

$username=$_POST['username'];
$password=password_hash($_POST['password'],PASSWORD_DEFAULT);

$daftar="INSERT INTO login_admin (username,password)
    VALUES ('$username','$password')";
$hasil=mysqli_query($koneksi,$daftar);

if($hasil){
    echo"<script>window.alert( 'DATA SUDAH BERHASIL DI DAFTARKAN')
    window.location='admin.php'</script>";
}
else
    {
    echo"<script>window.alert('DATA SUDAH GAGAL DI DAFTARKAN')
    window.location='index.php'</script>";
}
?>