<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jadwal</title>
</head>
<body>
    <?php
    include ("koneksi/koneksi.php");
$id=$_GET['id'];
$edit="SELECT * FROM jadwal WHERE id_jadwal='$id'";
$hasil=mysqli_query($koneksi,$edit);
$data=mysqli_fetch_array($hasil);
    ?>



<!---CODING HTML--->
<form method="GET" action=update_download.php>
            <input type="hidden" name="id" value="<?php echo $data['id_jadwal'];?>">
Judul     : <input type="text" name="judul" id="judul" value="<?php echo $data['judul'];?>"><br><br>
Nama File     : <input type="nama_file" name="nama_file" id="nama_file" value="<?php echo $data['nama_file'];?>"><br><br>
<input type="file" name="nama_file" id="nama_file" value="<?php echo $data['nama_file'];?>"><br><br>
    <input type="submit" value="SIMPAN">
</form>
<!----ENDING CODINGAN HTML--->
<?php
?>


</body>

</html>
