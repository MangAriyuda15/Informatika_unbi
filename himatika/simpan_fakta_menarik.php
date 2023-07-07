<?php

include ("koneksi/koneksi.php"); //memamnggil koneksi

//memanggil variabel
$judul=$_POST['judul'];
$artikel=$_POST['artikel'];
$path="foto/";
$file_name=$_FILES['foto']['name'];
move_uploaded_file($_FILES['foto']['tmp_name'],$path.$file_name);

//query kedatabase
$input="INSERT INTO fakta_menarik(judul,artikel,foto)
    VALUES ('$judul','$artikel','$file_name')";

$hasil=mysqli_query($koneksi,$input);

if($hasil){
    echo"<script>window.alert('DATA SUDAH BERHASIL DI SIMPAN')
    window.location='form_fakta_menarik.php'</script>";

}
else {
    echo"<script>window.alert('DATA GAGAL DI SIMPAN')
    window.location='form_fakta_menarik.php'</script>";

}




?>