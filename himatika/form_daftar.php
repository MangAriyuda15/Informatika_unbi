<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form Daftar </title>
    <link rel="stylesheet" href="../css/signup_admin.css">
</head>

<body>
    <H4>Form Daftar </H5>

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
<!-- bagian awal card sign up -->
    <div class="card font atur" id="sign up">
        <div class="font">
        <h5 class="card-header text-center ">Silakan Daftar Terlebih Dahulu Sebelum Menuju Ke Form Login</h5>
</div>
        <p>
        <div class="card-body">
            <div class="sign up font1 text-center">
                <form action="proses_daftar.php" method="POST" >
                    Nama: <input type="text" placeholder="nama" name="nama" required /><br>
                    <br>
                    Username: <input type="text" placeholder="username" name="username" required /><br>
                    <br>
                    Password: <input type="password" placeholder="password"name="password" required /><br>
                    <br>
                    Email: <input type="email" placeholder="email" name="email" required /><br>
                    <br>
                    <input type="submit" value="Sign up" class="btn btn-primary" />
                </form>
            </div>
        </div>
    </div>
    
    
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