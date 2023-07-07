<?php

include ("koneksi/koneksi.php"); //memamnggil koneksi

//memanggil variabel
$judul=$_POST['judul'];
$artikel=$_POST['artikel'];

//query kedatabase
$input="INSERT INTO univ(judul,artikel)
    VALUES ('$judul','$artikel')";

$hasil=mysqli_query($koneksi,$input);

if($hasil){
    echo"<script>window.alert('DATA BERHASIL DI SIMPAN')
    window.location='form_univ.php'</script>";
}
else{
    echo"<script>window.alert('DATA GAGAL DI SIMPAN')
    window.location='form_univ.php'</script>";
}



?>




