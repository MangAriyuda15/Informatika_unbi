<?php

include ("koneksi/koneksi.php"); //memamnggil koneksi

//memanggil variabel
$judul=$_POST['judul'];
$path="foto/";
$file_name=$_FILES['foto']['name'];
move_uploaded_file($_FILES['foto']['tmp_name'],$path.$file_name);
$path="foto/";
$file_name2=$_FILES['foto2']['name'];
move_uploaded_file($_FILES['foto2']['tmp_name'],$path.$file_name2);
$path="foto/";
$file_name3=$_FILES['foto3']['name'];
move_uploaded_file($_FILES['foto3']['tmp_name'],$path.$file_name3);
$artikel=$_POST['artikel'];
//query kedatabase
$input="INSERT INTO pengabdian(judul,foto,foto2,foto3,artikel)
    VALUES ('$judul','$file_name','$file_name2','$file_name3','$artikel')";

$hasil=mysqli_query($koneksi,$input);

if($hasil){
    echo"<script>window.alert('DATA BERHASIL DI SIMPAN')
    window.location='form_pengabdian.php'</script>";
}
else{
    echo"<script>window.alert('DATA GAGAL DI SIMPAN')
    window.location='form_pengabdian.php'</script>";
}




?>