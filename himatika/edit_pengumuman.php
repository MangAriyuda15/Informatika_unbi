<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengumuman</title>
    <link rel="stylesheet" href="../css/edit_pengumuman.css">
</head> 
<body>
    <?php
    include ("koneksi/koneksi.php");
$id=$_GET['id'];
$edit="SELECT * FROM pengumuman WHERE id_pengumuman='$id'";
$hasil=mysqli_query($koneksi,$edit);
$data=mysqli_fetch_array($hasil);
    ?>



<!---CODING HTML--->
<form method="GET" action=update_pengumuman.php>
            <input type="hidden" name="id" value="<?php echo $data['id_pengumuman'];?>">
Judul : <input type="text" name="judul" id="judul" value="<?php echo $data['judul'];?>"><br><br>
Info: <input type="text" name="info" id="info" value="<?php echo $data['info'];?>"><br></br>
    <input type="submit" value="SIMPAN">
</form>
<!----ENDING CODINGAN HTML--->
<?php
?>


</body>

</html>
