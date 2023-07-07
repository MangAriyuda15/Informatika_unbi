<?php

include ("koneksi/koneksi.php");

$judul=$_GET['judul'];
$path="fupload/";
$file_name=$_FILES['nama_file']['name'];
move_uploaded_file($_FILES['nama_file']['tmp_name'],$path.$file_name);


$tampil="SELECT * FROM jadwal WHERE judul='$judul',nama_file='$file_name";
$hasil=mysqli_query($koneksi,$tampil);

if($tampil){
    echo "INPUT DATA SUKSES";
}

 else {
    echo "INPUT DATA GAGAL";

    }

?>