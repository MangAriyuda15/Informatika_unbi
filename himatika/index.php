<?php 

session_start();

include("koneksi/koneksi.php");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form Login Admin </title>
    <link rel="stylesheet" href="../css/login_admin.css">
</head>

<body>
   

    <div class="container-fluid warna">
        <div class="row">
            <div class="container-fluid ">

                <div class="col-12 logo ">
                        <img src="../gambar/Logo Unbi.png" class="img-fluid" alt="logo" width="90px"> </a>
                    <div class="col-sm-4 unbi">
                        <b> Universitas Bali Internasional <br>
                            Program Studi Informatika </b>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p>
    <p>
<!-- bagian awal card sign up -->
    <div class="card font atur" id="sign up">
        <div class="font">
        <h5 class="card-header text-center ">Silakan Masukan Username Dan Password Anda</h5>
</div>
        <p>
        <div class="card-body">
            <div class="sign up font1 text-center">
<form action="" method="POST">
<table align="center">
    <tr>
        <th colspan="2" height="40"> Form Login Admin </th>
</tr>
<tr>
    <td width="100">Username</td>
    <td> <input type="text" name="username"></td>
</tr>
<tr>
    <td> Password </td>
    <td> <input type="password" name="password"> </td>
</tr>
<tr>
    <td></td>
    <td><input type="submit" class="btn btn-primary" value="LOGIN" name="proseslog"> </td>
    
</tr>
</table>
</form>

<?php 
if(isset($_POST['proseslog'])){
    $sql = mysqli_query($koneksi,"SELECT * FROM login_admin WHERE username='$_POST[username]'
    and password = '$_POST[password]'");

$cek = mysqli_num_rows($sql);
if($cek > 0){
    $_SESSION['username'] = $_POST['username'];
    echo"<script>window.alert('Selamat Anda Sudah Berhasil Login')
    window.location='admin.php'</script>";
 

}else{
    echo"<p align=center><b> Maaf Username Dan Password Anda Salah Mohon Periksa Kembali Username Dan Paasword Anda !!! </b></p>";
    echo "<meta http-equiv=refresh content=2;URL='index.php'>";
    
}
}
?>

<!-- akhir bagian card sign up-->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>


</html>