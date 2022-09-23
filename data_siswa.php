<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Siswa</title>
</head>
<body>
    <div class="container" style="margin-top: 80px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    Data Siswa
                </div>
                <?php
                    session_start();
                    ?>

                    Selamat Datang <?php echo $_SESSION['username']?>
                <div class="card-body">
                    <a href="tambah_siswa.php" class="btn btn-success" style="margin-bottom: 10px">Tambah Data</a>
                    <a href="logout.php" class="btn btn-danger" style="margin-bottom: 10px">Log Out</a>
                    <table class="table table-border" id="mytable">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NISN</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include('config.php');
                                $no=1;
                                $query=mysqli_query($conn, "select * from tbl_siswa");
                                while($row=mysqli_fetch_array($query))
                                {
                            ?>

                            <tr>
                                <td><?php echo$no++ ?></td>
                                <td><?php echo$row['nisn'] ?></td>
                                <td><?php echo$row['nama_lengkap'] ?></td>
                                <td><?php echo$row['alamat'] ?></td>
                                <td class="text-center">
                                    <a href="edit_siswa.php?id=<?php echo$row['id_siswa']?>" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="hapus_siswa.php?id=<?php echo$row['id_siswa']?>" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>

</body>
</html>