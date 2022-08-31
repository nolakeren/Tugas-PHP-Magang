<?php
    require "koneksi.php";

    if(isset($_POST['submit'])) {
        $nama_buah = $_POST['nama_buah'];
        $stock = $_POST['stock'];
        $harga = $_POST['harga'];
        $warna = $_POST['warna'];

        $sql = "UPDATE buah SET nama_buah='$nama_buah',stock='$stock', harga='$harga', warna='$warna' WHERE id_buah='$id_buah'";

        if($sql) {
            echo "Berhasil";
        } else {
            echo "Gagal";
        }
        
    }
    
        if(isset($_GET['id_buah'])) {
        $id_buah = $_GET['id_buah'];

        $sql = "SELECT * FROM buah WHERE id_buah = '$id_buah'";
        $query =mysqli_query($conn, $sql);

        $result = mysqli_fetch_assoc($query);

        $id_buah = $result['id_buah'];
        $nama_buah = $result['nama_buah'];
        $stock = $result['stock'];
        $harga = $result['harga'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Buah| Home</title>

    <!-- bootstrap@5.0.0-beta3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- fontawesome@5.10.0 -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand mb-0 h1" href="./index.php"><span class="far fa-lemon"></span> Toko Buah</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-1 ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php"><span class="fas fa-home"></span> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./tambah.php"><span class="far fa-plus-square"></span> Add</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="mt-5">
        <div class="container">
            <h3><span class="fas fa-edit"></span> Edit</h3>
            <hr>
            <form method="post">
                <label for="id_buah" class="form-label"> Data yang akan diubah </label>
                    <select class="form-select" name="id_buah" id="id_buah">
                        <option value=""> ... </option>
                        <option value=""> ... </option>
                        <option value=""> ... </option>
                    </select> <br>
                <div class="mb-3 row">
                    <label for="nama" class="col-xs-12 col-md-3 form-label">Nama Buah</label>
                    <div class="col-xs-12 col-md-9">
                        <input type="text" class="form-control" name="nama_buah" id="nama_buah">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="penulis" class="col-xs-12 col-md-3 form-label">Stock</label>
                    <div class="col-xs-12 col-md-9">
                        <input type="text" class="form-control" name="stock" id="stock">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="harga" class="col-xs-12 col-md-3 form-label">Harga</label>
                    <div class="col-xs-12 col-md-9">
                        <input type="number" class="form-control" name="harga" id="harga">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="harga" class="col-xs-12 col-md-3 form-label">Warna</label>
                    <div class="col-xs-12 col-md-9">
                        <input type="text" class="form-control" name="warna" id="warna">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-4 offset-md-8 btn-group" role="group">
                        <button onclick="return confirm('Apakah anda yakin?')" type="submit" name="submit" class="btn btn-primary"><span class="fas fa-edit"></span> Edit</button>
                        <button type="reset" class="btn btn-warning"><span class="fas fa-history"></span> Reset</button>
                        <a href="./index.php" class="btn btn-danger"><span class="fas fa-backward"></span> Back</a>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <!-- bootstrap@5.0.0-beta3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>