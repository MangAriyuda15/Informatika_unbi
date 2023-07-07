<?php

include ("koneksi/koneksi.php");

//query kedatabase

$judul=$_POST['judul'];
$artikel=$_POST['artikel'];
$path="foto/";
$file_name=$_FILES['foto']['name'];
move_uploaded_file($_FILES['foto']['tmp_name'],$path.$file_name);

$tampil="SELECT FROM fakta_menarik WHERE judul='$judul',artikel='$artikel',foto='$file_name'";
$hasil=mysqli_query($koneksi,$tampil);

if($hasil){
    echo "BERHASIL DI TAMPILKAN";
}
    else{
        echo "GAGAL DI TAMPILKAN";
    }
?>