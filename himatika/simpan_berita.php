<?php

include ("koneksi/koneksi.php");


$judul=$_POST['judul'];
$isi=$_POST['isi'];
$path="gambar/";
$file_name=$_FILES['gambar']['name'];
move_uploaded_file($_FILES['gambar']['tmp_name'],$path.$file_name);


$tampil="INSERT INTO berita(judul,isi,gambar)
    VALUES ('$judul,'$isi','$file_name)";
$hasil=mysqli_query($koneksi,$tampil);
    
if($hasil){
    echo "INPUT DATA SUKSES";

}
else {
    echo "INPUT DATA GAGAL";

}
?>