<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tekno Terkini</title>
    <link rel="stylesheet" href="../css/edit_tekno_terkini.css">
</head>
<body>
    <?php
    include ("koneksi/koneksi.php");
$id=$_GET['id'];
$edit="SELECT * FROM tekno_terkini WHERE id_tekno='$id'";
$hasil=mysqli_query($koneksi,$edit);
$data=mysqli_fetch_array($hasil);
    ?>



<!---CODING HTML--->
<form method="GET" action=update_tekno_terkini.php>
            <input type="hidden" name="id" value="<?php echo $data['id_tekno'];?>">
Judul : <input type="text" name="judul" id="judul" value="<?php echo $data['judul'];?>"><br></br>
Artikel : <input type="text" name="artikel" id="artikel" value="<?php echo $data['artikel'];?>"><br></br>
Foto      :<input type ="file" name="foto" id="foto"><br></br>
    <input type ="checkbox" name="ubah_gambar" value="true"> Ceklis Jika ingin mengubah foto<br>
<?='<img src="foto/'.$data["foto"].'" alt="foto" style="width:128px;height:128px">'; ?><br></br>
    <input type="submit" value="SIMPAN">
</form>
<!----ENDING CODINGAN HTML--->
<?php
?>


</body>

</html>
