<?php

include ("koneksi/koneksi.php"); //memamnggil koneksi

//memanggil variabel
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=password_hash($_POST['password'],PASSWORD_DEFAULT);
$email=$_POST['email'];
$nim=$_POST['nim'];
$prodi=$_POST['prodi'];

//query kedatabase
$input="INSERT INTO sign_up_mhs(nama,email,nim,prodi)
    VALUES ('$nama','$email','$nim','$prodi')";
$input2="INSERT INTO login_mhs(username,password)
    VALUES('$username','$password')";

$hasil=mysqli_query($koneksi,$input);
$hasil=mysqli_query($koneksi,$input2);

if($hasil){
    header('location:admin.php'); //redirct ke halaman home
}
else {
    echo " GAGAL ";
}

?>