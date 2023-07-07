<?php

include ("koneksi/koneksi.php"); //memamnggil koneksi

//memanggil variabel
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=password_hash($_POST['password'],PASSWORD_DEFAULT);
$email=$_POST['email'];



//query kedatabase
$input="INSERT INTO sign_up_adn(nama,username,password,email)
    VALUES ('$nama','$username','$password','$email')";

$hasil=mysqli_query($koneksi,$input);

if($hasil){
    header('location:admin.php'); //redirct ke halaman home
}
else {
    echo " GAGAL ";
}


?>