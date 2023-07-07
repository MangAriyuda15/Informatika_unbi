<?php

include ("koneksi/koneksi.php"); //memamnggil koneksi

//memanggil variabel
$path="foto/";
$file_name=$_FILES['foto']['name'];
move_uploaded_file($_FILES['foto']['tmp_name'],$path.$file_name);
$artikel=$_POST['artikel'];
$path="foto/";
$file_name2=$_FILES['foto2']['name'];
move_uploaded_file($_FILES['foto2']['tmp_name'],$path.$file_name2);
$artikel2=$_POST['artikel2'];
$path="foto/";
$file_name3=$_FILES['foto3']['name'];
move_uploaded_file($_FILES['foto3']['tmp_name'],$path.$file_name3);
$artikel3=$_POST['artikel3'];
$path="foto/";
$file_name4=$_FILES['foto4']['name'];
move_uploaded_file($_FILES['foto4']['tmp_name'],$path.$file_name4);
$artikel4=$_POST['artikel4'];
$judul=$_POST['judul'];
$artikel5=$_POST['artikel5'];
$path="foto/";
$file_name5=$_FILES['foto5']['name'];
move_uploaded_file($_FILES['foto5']['tmp_name'],$path.$file_name5);

//query kedatabase
$input="INSERT INTO home(foto,artikel,foto2,artikel2,foto3,artikel3,foto4,artikel4,judul,artikel5,foto5)
    VALUES ('$file_name','$artikel','$file_name2','$artikel2','$file_name3','$artikel3','$file_name4','$artikel4','$judul','$artikel5','$file_name5')";
$hasil=mysqli_query($koneksi,$input);


if($hasil){
    echo"<script>window.alert('DATA BERHASIL DI SIMPAN')
    window.location='form_home.php'</script>";
}
else{
    echo"<script>window.alert('DATA GAGAL DI SIMPAN')
    window.location='form_home.php'</script>";
}




?>