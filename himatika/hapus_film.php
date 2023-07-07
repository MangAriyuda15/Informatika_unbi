<?php
include("koneksi/koneksi.php");

// mengagambil id dari klik link hapus
$id=$_GET['id'];

//query hapus
$hapus="DELETE FROM film where id_film='$id'";
$hasil=mysqli_query($koneksi,$hapus);

// mengetes keberhasilan tombol hapus
if($hasil){
    echo"<script>window.alert('DATA SUDAH BERHASIL DI HAPUS')
    window.location='tampil_film.php'</script>";

}
else {
    echo"<script>window.alert('DATA GAGAL DI UPDATE')
    window.location='tampil_film.php'</script>";
}

?>