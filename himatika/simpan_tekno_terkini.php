<?php

include ("koneksi/koneksi.php"); //memamnggil koneksi

//memanggil variabel
$judul=$_POST['judul'];
$path="foto/";
$file_name=$_FILES['foto']['name'];
move_uploaded_file($_FILES['foto']['tmp_name'],$path.$file_name);
$artikel=$_POST['artikel'];

//query kedatabase
$input="INSERT INTO tekno_terkini(judul,foto,artikel)
    VALUES ('$judul','$file_name','$artikel')";

$hasil=mysqli_query($koneksi,$input);

if($input){
     echo"<script>window.alert('DATA BERHASIL DI SIMPAN')
     window.location='form_tekno.php'</script>";
}
else{
     echo"<script>window.alert('DATA GAGAL DI SIMPAN')
     window.location='form_tekno.php'</script>";
}




?>