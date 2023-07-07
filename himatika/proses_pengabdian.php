<?php

include ("koneksi/koneksi.php");

$judul=$_GET['judul'];
$artikel=$_GET['artikel'];
$path="foto/";
$file_name=$_FILES['foto']['name'];
move_uploaded_file($_FILES['foto']['tmp_name'],$path.$file_name);

$tampil="SELECT * FROM pengabdian WHERE judul='$judul',artikel='$artikel',foto='$path'";
$hasil=mysqli_query($koneksi,$tampil);

if($tampil){
    echo "INPUT DATA SUKSES";

}
else {
    echo "INPUT DATA GAGAL";

}
?>