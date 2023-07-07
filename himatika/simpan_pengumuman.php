<?php

include ("koneksi/koneksi.php"); //memamnggil koneksi

//memanggil variabel
$judul=$_POST['judul'];
$info=$_POST['info'];

$input="INSERT INTO pengumuman(judul,info)
    VALUES ('$judul','$info')";

$hasil=mysqli_query($koneksi,$input);

if($input){
    echo"<script>window.alert('DATA BERHASIL DI SIMPAN')
    window.location='form_pengumuman.php'</script>";

}
else {
    echo"<script>window.alert('DATA GAGAL DI SIMPAN')
    window.location='form_pengumuman.php'</script>";

}
?>