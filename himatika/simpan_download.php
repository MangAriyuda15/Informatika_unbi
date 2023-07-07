<?php

include ("koneksi/koneksi.php"); //memamnggil koneksi

//memanggil variabel
$judul=$_POST['judul'];
$lokasi_file = $_FILES['nama_file']['tmp_name'];
$nama_file   = $_FILES['nama_file']['name'];
$folder = "../nama_file/$nama_file";

// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")){ 
    echo "Nama File : <b>$nama_file</b><script>window.alert('DATA TELAH DI UPLOAD')
    window.location='form_download.php'</script>";
    
//query kedatabase
$input="INSERT INTO jadwal(judul,nama_file)
    VALUES ('$judul','$nama_file')";

$hasil=mysqli_query($koneksi,$input);
}
else{
    echo"<script>window.alert('DATA GAGAL DI SIMPAN')
    window.location='form_download.php'</script>";
}


?>