<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Data Tables Prodi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" />

    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="../css/update_prodi.css">

</head>

<body>


    <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">



        <thead>
            <tr>
                <th>Judul</th>
                <th>Artikel</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Judul</th>
                <th>Artikel</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
        <tbody>
            <?php
            include("koneksi/koneksi.php");
            $tampil="SELECT * FROM prodi ORDER BY id_prodi";
            $hasil=mysqli_query($koneksi,$tampil);
            $jml=mysqli_num_rows($hasil);
            if($jml>0){
                while($row=mysqli_fetch_assoc($hasil)){
            ?>
            <tr>
                <td><?php echo $row['judul']?></td>
                <td><?php echo $row['artikel']?></td>
                <td><a href="edit_prodi.php?id=<?php echo $row['id_prodi']; ?>">
                        <button type="button" class="btn btn-warning btn-sm">Edit</button></a> |
                        <a href="hapus_prodi.php?id=<?php echo $row['id_prodi']; ?>">
                        <button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
                </td>
            </tr>
            <?php
                }
            }
           ?>

        </tbody>
    </table>

    <script>
    $(document).ready(function() {
        $('#tabel-data').DataTable();
    });
    </script>


</body>

</html>