<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="css/gambar.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/form_duniait.css">
  <title>Form Input Dunia IT</title>

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
            <div class="collapse navbar-collapse menu1 " id="navbarSupportedContent">

              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
            </div>
          </div>
      </div>
    </div>
  </div>
  </nav>
  <!--form input berita-->
  <div class="container-fluid warna">
    <div class="menu1">
      <h5>Form Input Berita | Dunia IT</h5>
    </div>
    <form method="POST" action="simpan_dunia_it.php" enctype="multipart/form-data">
      <br>
      <div class="form-group menu1">
        <label for="judul">Judul Berita</label>
        <input type="text" name="judul" class="form-control">
      </div>
      <!--script untuk upload file gambar-->
      <div class="form-group">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="imgWrap">
                <img src="no-image.png" id="imgView" class="card-img-top img-fluid">
              </div>
              <div class="card-body">
                <div class="custom-file">
                  <input type="file" name="foto" id="inputFile" class="imgFile custom-file-input" aria-describedby="inputGroupFileAddon01">
                  <label class="custom-file-label" for="inputFile">Choose file</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group menu1">
        <label for="artikel">Artikel</label>
        <textarea name="artikel" rows="6" type="text" class="form-control" id="artikel"></textarea>
      </div>
      <!--akhir script upload file gambar-->
      <br>
      <button type="submit" class="btn btn-primary">Simpan</button> 
      <a href="tampil_dunia_it.php "class="btn btn-primary">Edit</a>
    </form>
  </div>
  <!--end form-->


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <!--scrip ajax untuk menampilkan gambar yang dipilih-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>
    $("#inputFile").change(function(event) {
      fadeInAdd();
      getURL(this);
    });

    $("#inputFile").on('click', function(event) {
      fadeInAdd();
    });

    function getURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        var filename = $("#inputFile").val();
        filename = filename.substring(filename.lastIndexOf('\\') + 1);
        reader.onload = function(e) {
          debugger;
          $('#imgView').attr('src', e.target.result);
          $('#imgView').hide();
          $('#imgView').fadeIn(500);
          $('.custom-file-label').text(filename);
        }
        reader.readAsDataURL(input.files[0]);
      }
      $(".alert").removeClass("loadAnimate").hide();
    }

    function fadeInAdd() {
      fadeInAlert();
    }

    function fadeInAlert(text) {
      $(".alert").text(text).addClass("loadAnimate");
    }
  </script>
  <!--akhir scrip ajax menampilkan gambar yang dipilih-->
</body>

</html>