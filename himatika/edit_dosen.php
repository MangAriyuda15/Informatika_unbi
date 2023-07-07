<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
    <link rel="stylesheet" href="../css/edit_dosen.css"> 
</head>
<body>
    <?php
    include ("koneksi/koneksi.php");
$id=$_GET['id'];
$edit="SELECT * FROM dosen WHERE id_dosen='$id'";
$hasil=mysqli_query($koneksi,$edit);
$data=mysqli_fetch_array($hasil);
    ?>



<!---CODING HTML--->
<form method="GET" action=update_dosen.php>
            <input type="hidden" name="id" value="<?php echo $data['id_dosen'];?>">
Judul : <input type="text" name="judul" id="judul" value="<?php echo $data['judul'];?>"><br></br>
Nama : <input type="text" name="nama" id="nama" value="<?php echo $data['nama'];?>"><br></br>
Foto      :<input type ="file" name="foto" id="foto"><br></br>
<input type ="checkbox" name="ubah_gambar" value="true"> Ceklis Jika ingin mengubah foto<br></br>
<?='<img src="foto/'.$data["foto"].'" alt="foto" style="width:128px;height:128px">'; ?><br></br>
Pendidikan : <input type="text" name="pendidikan" id="pendidikan" value="<?php echo $data['pendidikan'];?>"><br></br>
Nidn :<input type="text" name="nidn" id="nidn" value="<?php echo $data['nidn'];?>"><br></br>
Bidang Keahlian :<input type="text" name="bidang_keahlian" id="bidang_keahlian" value="<?php echo $data['bidang_keahlian'];?>"><br></br>
Email :<input type="text" name="email" id="email" value="<?php echo $data['email'];?>"><br></br>
No Telepon :<input type="text" name="no_telepon" id="no_telepon" value="<?php echo $data['no_telepon'];?>"><br></br>
    <input type="submit" value="SIMPAN">
    
</form>
<!----ENDING CODINGAN HTML--->
<?php
?>


</body>

</html>
