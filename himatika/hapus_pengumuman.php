<?php
include("koneksi/koneksi.php");

// mengagambil id dari klik link hapus
$id=$_GET['id'];

//query hapus
$hapus="DELETE FROM pengumuman where id_pengumuman='$id'";
$hasil=mysqli_query($koneksi,$hapus);

// mengetes keberhasilan tombol hapus
if($hasil){
    echo"<script>window.alert('DATA BERHASIL DI HAPUS')
    window.location='tampil_pengumuman.php'</script>";

}
else {
    echo"<script>window.alert('DATA GAGAL DI HAPUS')
    window.location='tampil_pengumuman.php'</script>";
}

?>