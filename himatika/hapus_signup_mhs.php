<?php
include ("koneksi/koneksi.php"); //memanggil koneksi

//ambil id dari klik link hapus
$id=$_GET['id'];

//memanggil query hapus
$hapus="DELETE FROM sign_up_mhs where id_mhs='$id'";
$hasil=mysqli_query($koneksi,$hapus);

//mengetes keberhasilan tombol hapus
if($hasil){
    echo"<script>window.alert('DATA TELAH DI HAPUS')
    window.location='tampil_signup_mhs.php'</script>";
}
else{
    echo"<script>window.alert('DATA GAGAL DI HAPUS')
    window.location='tampil_sign_up_mhs.php'</script>";
}
?>
