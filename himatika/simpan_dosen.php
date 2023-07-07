<?php

include ("koneksi/koneksi.php");

$judul=$_POST['judul'];
$nama=$_POST['nama'];
$path="foto/";
$file_name=$_FILES['foto']['name'];
move_uploaded_file($_FILES['foto']['tmp_name'],$path.$file_name);
$pendidikan=$_POST['pendidikan'];
$nidn=$_POST['nidn'];
$bidang=$_POST['bidang_keahlian'];
$email=$_POST['email'];
$no_telepon=$_POST['no_telepon'];

$simpan="INSERT INTO dosen (judul,nama,foto,pendidikan,nidn,bidang_keahlian,email,no_telepon)
     VALUES ('$judul','$nama','$file_name','$pendidikan','$nidn','$bidang','$email','$no_telepon')";
$hasil=mysqli_query($koneksi,$simpan);

if($simpan){
     echo"<script>window.alert('DATA BERHASIL DI SIMPAN')
     window.location='form_dosen.php'</script>";
}
else{
     echo"<script>window.alert('DATA GAGAL DI SIMPAN')
     window.location='form_dosen.php'</script>";
}



?>