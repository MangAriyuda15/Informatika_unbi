<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data UPLOAD</title>
    <link rel="stylesheet" href="../css/edit_upload.css">
</head>
<body>
    <?php
    include ("koneksi/koneksi.php");
$id=$_GET['id'];
$edit="SELECT * FROM upload WHERE id_upload='$id'";
$hasil=mysqli_query($koneksi,$edit);
$data=mysqli_fetch_array($hasil);
    ?>



<!---CODING HTML--->
<form method="GET" action=update_upload.php>
            <input type="hidden" name="id" value="<?php echo $data['id_upload'];?>">
Nama File : <input type="text" name="nama_file" id="nama_file" value="<?php echo $data['nama_file'];?>"><br>
<input type="file" name="nama_file" id="nama_file" value="<?php echo $data['nama_file'];?>"><br><br>
Deskripsi: <input type="text" name="deskripsi" id="deskripsi" value="<?php echo $data['deskripsi'];?>"><br><br>
Tanggal Upload : <input type="date" name="tgl_upload" id="tgl_upload" value="<?php echo $data['tgl_upload'];?>"><br>
    <input type="submit" value="SIMPAN">
</form>
<!----ENDING CODINGAN HTML--->
<?php
?>


</body>

</html>
