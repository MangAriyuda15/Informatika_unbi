<?php

include ("koneksi/koneksi.php");

$judul=$_GET['judul'];
$info=$_GET['info'];


$tampil="SELECT * FROM pengumuman WHERE judul='$judul', info='$info'";
$hasil=mysqli_query($koneksi,$tampil);

if($tampil){
    echo "INPUT DATA SUKSES";

}
else {
    echo "INPUT DATA GAGAL";

}

?>