<?php

include ("koneksi/koneksi.php");

$username=$_POST['username'];
$password=password_hash($_POST['password'],PASSWORD_DEFAULT);

$daftar="INSERT INTO login_mhs (username,password)
    VALUES ('$username','$password')";
$hasil=mysqli_query($koneksi,$daftar);

if($hasil){
    echo"<script>window.alert('DATA SUDAH BERHASIL DI DAFTARKAN')
    window.location='form_daftar.php'</script>";
}
else {
    echo"<script>window.alert('DATA GAGAL DI DAFTARKAN')
    window.location='form_daftar.php'</script>";
}
?>