<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Admin</title>
  <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
  <div class="container-fluid warna">
    <div class="row">
      <div class="container-fluid color1">
        <!-- warna bagian "color1"  header -->

        <div class="col-12 logo ">
          <a class="navbar-brand" href="admin.php">
            <img src="../gambar/Logo Unbi.png" class="img-fluid" alt="logo" width="90px"> </a>
          <div class="col-sm-4 unbi">
            <b> Universitas Bali Internasional <br>
              Program Studi Informatika </b>
          </div>
        </div>

        <p>

        <nav class="navbar navbar-expand-lg navbar-dark color1">
          <div class="container-fluid color1">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <!-- bagian dropdown menu -->
            <div class="collapse navbar-collapse  " id="navbarSupportedContent">

              <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu1">
              <li class="nav-item">
                  <a class="nav-link" href="form_home.php">form homepage</a>
                </li>

                <li class="nav-item dropdown ">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Tentang Kami
                  </a>
                  <ul class="dropdown-menu drop" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item drop" href="form_univ.php">form universitas</a></li>
                    <li><a class="dropdown-item drop" href="form_prodi.php">form prodi</a></li>
                    <li><a class="dropdown-item drop" href="form_dosen.php">form dosen</a></li>

                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Kegiatan
                  </a>
                  <ul class="dropdown-menu drop" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item drop" href="form_seminar.php">form seminar</a></li>
                    <li><a class="dropdown-item drop" href="form_pengabdian.php">form pengabdian</a></li>
                    <li><a class="dropdown-item drop" href="form_penelitian.php">form penelitian</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Info
                  </a>
                  <ul class="dropdown-menu drop" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item drop" href="form_dunia_it.php">form tentang dunia it</a></li>
                    <li><a class="dropdown-item drop" href="form_tekno.php">form teknologi terkini</a></li>
                    <li><a class="dropdown-item drop" href="form_film.php">form film</a></li>
                    <li><a class="dropdown-item drop" href="form_prospek_kerja.php">form prospek kerja</a></li>

                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="form_pengumuman.php">form pengumuman</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="upload_file.php">form upload</a>
                </li>
              </ul>
                <!-- bagian Sign up data MAHASISWA button-->
                <ul class="navbar-nav turun ">
                  <div class="modal fade" id="signup_mhs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header text-center sign">
                          <h5 class="modal-title w-100 font-weight-bold">Sign Up Data Mahasiswa</h5>
                          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body mx-3">

                        <div class="md-form mb-3">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <form method="POST" action="simpan_signup_mhs.php">
                            <input type="text" id="nama" class="form-control validate" placeholder="Nama" name="nama" required />
                            <label data-bs-error="wrong" data-bs-success="right" for="nama"></label>
                          </div>

                          <div class="md-form mb-3">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <input type="text" id="username" class="form-control validate" placeholder="Username" name="username" required />
                            <label data-bs-error="wrong" data-bs-success="right" for="username"></label>
                          </div>
                          
                          <div class="md-form mb-3">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <input type="password" id="password" class="form-control validate" placeholder="Password" name="password" required />
                            <label data-bs-error="wrong" data-bs-success="right" for="password"></label>
                          </div>                         

                          <div class="md-form mb-3">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <input type="email" id="email" class="form-control validate" placeholder="Email" name="email" required />
                            <label data-bs-error="wrong" data-bs-success="right" for=" email"></label>
                          </div>

                          <div class="md-form mb-3">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <input type="text" id="defaultForm-nim" class="form-control validate" placeholder="NIM" name="nim" required />
                            <label data-bs-error="wrong" data-bs-success="right" for="defaultForm-nim"></label>
                          </div>

                          <div class="md-form mb-3">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <input type="text" id="defaultForm-prodi" class="form-control validate" placeholder="Prodi" name="prodi" required />
                            <label data-bs-error="wrong" data-bs-success="right" for="defaultForm-prodi"></label>
                          </div>

                        </div>
                        <div class="modal-footer d-flex justify-content-center menu1">
                          <button class="btn btn-default">sign up</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="menu1 login">
                    <a href="" class="btn btn-default btn-rounded mb-4" data-bs-toggle="modal" style="color: darkgray;" data-bs-target="#signup_mhs">sign up 1</a>
                  </div>
                </ul>
                <!-- akhir dari sign up  data mahasiswa button -->

                <!-- bagian Sign up data ADMIN button-->
                <ul class="navbar-nav turun ">
                  <div class="modal fade" id="signup_adn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header text-center sign">
                          <h5 class="modal-title w-100 font-weight-bold">Sign Up Data Admin</h5>
                          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body mx-3">

                        <div class="md-form mb-3">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <form method="POST" action="simpan_signup_admin.php">
                            <input type="text" id="nama" class="form-control validate" placeholder="Nama" name="nama" required />
                            <label data-bs-error="wrong" data-bs-success="right" for="nama"></label>
                          </div>

                          <div class="md-form mb-3">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <input type="text" id="username" class="form-control validate" placeholder="Username" name="username" required />
                            <label data-bs-error="wrong" data-bs-success="right" for="username"></label>
                          </div>

                          <div class="md-form mb-3">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <input type="password" id="password" class="form-control validate" placeholder="Password" name="password" required />
                            <label data-bs-error="wrong" data-bs-success="right" for="password"></label>
                          </div>

                          <div class="md-form mb-3">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <input type="email" id="email" class="form-control validate" placeholder="Email" name="email" required />
                            <label data-bs-error="wrong" data-bs-success="right" for="email"></label>
                          </div>

                        </div>
                        <div class="modal-footer d-flex justify-content-center menu1">
                          <button class="btn btn-default">sign up</button>

                        </form>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="menu1 login">
                    <a href="" class="btn btn-default btn-rounded mb-4" data-bs-toggle="modal" style="color: darkgray;" data-bs-target="#signup_adn">sign up 2</a>
                  </div>      
               
  
                </ul>
                <!-- akhir dari sign up admin button -->

                <!-- bagian logout ADMIN button-->
  
                  <div class="menu1 login">
                    <a href="logout.php" class="btn btn-default btn-rounded mb-4"  style="color: darkgray;">Logout </a>
                  </div>      
               
  
                </ul>
                <!-- akhir logout admin button -->

            </div>

          </div>
</div>
        </nav>

        <!--akhir dropdown menu -->


        <!-- bagian pembuka dan isi pembuka -->
        <div class="col selamat text-center color3 ">
          <b> Selamat Datang<br>
            Di Admin Website Program Studi Informatika <b> <br>
              Universitas Bali Internasional </b>

          <p>
            <!-- <p> supaya bagian isi pembuka berada di bawah kalimat pembuka -->

          <div class="row g-0 color3">
            <div class="col-md-12 text-center tentang ">
              <div class="card-body color3 isi">
                <p class="card-text"> 
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
        <!--akhir bagian pembuka -->


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
