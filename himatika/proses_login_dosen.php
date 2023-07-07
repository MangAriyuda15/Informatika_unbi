<?php
include ("koneksi/koneksi.php");

$nama=$_POST['nama'];
$path="foto/";
$file_name=$_FILES['foto']['name'];
move_uploaded_file($_FILES['foto']['tmp_name'],$path.$file_name);
$pendidikan=$_POST['pendidikan'];
$nidn=$_POST['nidn'];
$bidang=$_POST['bidang_keahlian'];
$email=$_POST['email'];

$tampil ="SELECT * FROM dosen WHERE nama='$nama',foto='$file_name',no_hp='$no_hp ,pendidikan='$pendidikan',nidn='$nidn',bidang_keahlian='$bidang',email='$email'";
$hasil =mysqli_query($koneksi,$tampil);


if($hasil){
    echo"<script>window.alert('DATA BERHASIL DI SIMPAN')
    window.location='../dosen.php'</script>";

}
else {
    echo"<script>window.alert('DATA GAGAL DI SIMPAN')
     window.location='form_dosen.php'</script>";

} 

?>