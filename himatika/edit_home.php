<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Homepage</title>
    <link rel="stylesheet" href="../css/edit_home.css">
</head>
<body>
    <?php
    include ("koneksi/koneksi.php");
$id=$_GET['id'];
$edit="SELECT * FROM home WHERE id_home='$id'";
$hasil=mysqli_query($koneksi,$edit);
$data=mysqli_fetch_array($hasil);
    ?>



<!---CODING HTML--->
<form method="GET" action=update_home.php>
            <input type="hidden" name="id" value="<?php echo $data['id_home'];?>">
Foto      :<input type ="file" name="foto" id="foto">
<input type ="checkbox" name="ubah_gambar" value="true"><br>
  Ceklis Jika ingin mengubah foto<br>
<?='<img src="foto/'.$data["foto"].'" alt="foto" style="width:128px;height:128px">'; ?><br>
Foto      :<input type ="file" name="foto2" id="foto2">
<input type ="checkbox" name="ubah_gambar" value="true"><br>
  Ceklis Jika ingin mengubah foto<br><br>
  Artikel : <input type="text" name="artikel" id="artikel" value="<?php echo $data['artikel'];?>"><br><br>
<?='<img src="foto/'.$data["foto2"].'" alt="foto2" style="width:128px;height:128px">'; ?><br>
Foto      :<input type ="file" name="foto3" id="foto3">
<input type ="checkbox" name="ubah_gambar" value="true"><br>
  Ceklis Jika ingin mengubah foto<br><br>
  Artikel : <input type="text" name="artikel2" id="artikel2" value="<?php echo $data['artikel2'];?>"><br><br>
<?='<img src="foto/'.$data["foto3"].'" alt="foto3" style="width:128px;height:128px">'; ?><br>
Artikel : <input type="text" name="artikel3" id="artikel3" value="<?php echo $data['artikel3'];?>"><br><br>
Foto      :<input type ="file" name="foto4" id="foto4"><br>
<input type ="checkbox" name="ubah_gambar" value="true"><br>
  Ceklis Jika ingin mengubah foto<br>
<?='<img src="foto/'.$data["foto4"].'" alt="foto4" style="width:128px;height:128px">'; ?><br><br>
Artikel : <input type="text" name="artikel4" id="artikel4" value="<?php echo $data['artikel4'];?>"><br><br>
Judul : <input type="text" name="judul" id="judul" value="<?php echo $data['judul'];?>"><br><br>
Artikel : <input type="text" name="artikel" id="artikel5" value="<?php echo $data['artikel'];?>"><br><br>
Foto      :<input type ="file" name="foto5" id="foto5"><br><br>
<input type ="checkbox" name="ubah_gambar" value="true"><br>
  Ceklis Jika ingin mengubah foto<br>
<?='<img src="foto/'.$data["foto5"].'" alt="foto5" style="width:128px;height:128px">'; ?><br>
    <input type="submit" value="SIMPAN">
</form>
<!----ENDING CODINGAN HTML--->
<?php
?>


</body>

</html>
