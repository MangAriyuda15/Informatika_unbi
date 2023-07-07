<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP MAHASISWA</title>
</head>
<body>
    <?php
    include ("koneksi/koneksi.php");
$id=$_GET['id'];
$edit="SELECT * FROM sign_up_mhs WHERE id_mhs='$id'";
$hasil=mysqli_query($koneksi,$edit);
$data=mysqli_fetch_array($hasil);
    ?>



<!---CODING HTML--->
<form method="GET" action=update_signup_mhs.php>
            <input type="hidden" name="id" value="<?php echo $data['id_dosen'];?>">
Nama : <input type="text" name="nama" id="nama" value="<?php echo $data['nama'];?>">
Username : <input type="text" name="username" id="username" value="<?php echo $data['username'];?>">
Password :<input type="text" name="password" id="password" value="<?php echo $data['password'];?>">
Email     :<input type ="text" name="email" id="email"> value="<?php echo $data['email'];?>">
NIM :<input type="text" name="nim" id="nim" value="<?php echo $data['nim'];?>">
Prodi :<input type="text" name="prodi" id="prodi" value="<?php echo $data['prodi'];?>">
    <input type ="checkbox" name="ubah_gambar" value="true"> Ceklis Jika ingin mengubah foto<br>
<?='<img src="foto/'.$data["foto"].'" alt="foto" style="width:128px;height:128px">'; ?>
    <input type="submit" value="SIMPAN">
</form>
<!----ENDING CODINGAN HTML--->
<?php
?>


</body>

</html>
