<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <title>Data Baju</title>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Daftar Baju</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            <a class="nav-link" href="index.php">LOGOUT</a>
          </div>
        </div>
      </div>
    </nav>
    <!--Akhir Navbar-->

    <?php
        include 'config.php';
        $id = $_GET['id'];
        $jualbaju = mysqli_query($koneksi, "select * from baju where id_baju='$id_baju'");
        while ($data = mysqli_fetch_assoc($jualbaju)){
        ?>
            <div class="container mt-5">
                <p><a href="index.php">Home</a> / Detail Baju / <?php echo $data['merek'] ?></p>
                <div class="card">
                    <div class="card-header">
                        <p class="fw-bold">Data Baju</p>
                    </div>
                    <div>
                      <table cellpadding="10">
                        <tr>
                          <td >Merek</td>
                          <td class="fw-bold">: <?php  echo $data['merek'] ?></td>
                        </tr>
                        <tr>
                          <td>Ukuran</td>
                          <td class="fw-bold">: <?php echo $data['ukuran'] ?></td>
                        </tr>
                        <tr>
                          <td>Harga</td>
                          <td class="fw-bold">: <?php echo $data['harga'] ?></td>
                        </tr>
                      </table>
                      <a href="print.php?id=<?php echo $data['id_baju']; ?>" class="btn btn-primary btn-sm text-white">CETAK</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>