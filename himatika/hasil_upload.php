<?php
// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['fupload']['tmp_name'];
$file_name  = $_FILES['fupload']['name'];
// Tentukan folder untuk menyimpan file
$folder = "../upload/$file_name";
// tanggal sekarang
$tgl_upload = date("Ymd");
// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")){ 
  echo "Nama File : <b>$file_name</b><script>window.alert('DATA TELAH DI UPLOAD')
  window.location='upload_file.php'</script>";
  
  // Masukkan informasi file ke database
 include ("koneksi/koneksi.php");

  $query = "INSERT INTO upload (nama_file, deskripsi, tgl_upload)
            VALUES('$file_name', '$_POST[deskripsi]', '$tgl_upload')";
            
  mysqli_query($koneksi, $query);
}
else{
  echo "File gagal di upload";
}
?>
