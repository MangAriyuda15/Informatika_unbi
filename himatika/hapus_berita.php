<?php
include("koneksi/koneksi.php");

// mengagambil id dari klik link hapus
$id=$_GET['id'];

//query hapus
$hapus="DELETE FROM berita where id_berita='$id'";
$hasil=mysqli_query($koneksi,$hapus);

// mengetes keberhasilan tombol hapus
if($hasil){
    echo "BERHASIL";

}
else {
    echo "GAGAL";
}

?>