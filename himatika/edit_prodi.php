<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="../css/edit_prodi.css">
</head>
<body>
    <?php
    include ("koneksi/koneksi.php");
$id=$_GET['id'];
$edit="SELECT * FROM prodi WHERE id_prodi='$id'";
$hasil=mysqli_query($koneksi,$edit);
$data=mysqli_fetch_array($hasil);
    ?>



<!---CODING HTML--->
<form method="GET" action=update_prodi.php>
            <input type="hidden" name="id" value="<?php echo $data['id_prodi'];?>">
Judul :      <input type="text" name="judul" id="judul" value="<?php echo $data['judul'];?>"><br></br>
Artikel:    <input type="text" name="artikel" id="artikel" value="<?php echo $data['artikel'];?>"><br></br>
    <input type="submit" value="SIMPAN">
</form>
<!----ENDING CODINGAN HTML--->
<?php
?>


</body>

</html>
