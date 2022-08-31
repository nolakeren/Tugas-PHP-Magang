<?php
    require "koneksi.php";

    if(isset($_POST['submit'])) {
        $nama_buah = $_POST['nama_buah'];
        $stock = $_POST['stock'];
        $harga = $_POST['harga'];
        $warna = $_POST['warna'];

            
        $sql = "INSERT INTO buah (nama_buah,stock,harga,warna) 
        VALUES ('$nama_buah','$stock','$harga','$warna')";
        $query = mysqli_query($conn, $sql);
        if($query){
            echo 'Berhasil';
        }else{
            echo "gagal";
        }
    }        
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Buah | Add </title>

    <!-- bootstrap@5.0.0-beta3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- fontawesome@5.10.0 -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand mb-0 h1" href="./index.php"><span class=	"far fa-lemon"></span> Toko Buah</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-1 ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php"><span class="fas fa-home"></span> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./tambah.php"><span class="far fa-plus-square"></span> Add</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="mt-5">
        <div class="container">
            <h3><span class="far fa-plus-square"></span> Add</h3>
            <hr>
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3 row">
                    <label for="nama" class="col-xs-12 col-md-3 form-label">Nama Buah</label>
                    <div class="col-xs-12 col-md-9">
                        <input type="text" class="form-control" required name="nama_buah" id="nama_buah">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="penulis" class="col-xs-12 col-md-3 form-label">Stock</label>
                    <div class="col-xs-12 col-md-9">
                        <input type="text" class="form-control" required name="stock" id="stock">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="harga" class="col-xs-12 col-md-3 form-label">Harga</label>
                    <div class="col-xs-12 col-md-9">
                        <input type="number" class="form-control" required name="harga" id="harga">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="cover" class="col-xs-12 col-md-3 form-label">Warna</label>
                    <div class="col-xs-12 col-md-9">
                        <input type="text" class="form-control" required name="warna" id="warna">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-3 offset-md-9 btn-group" role="group">
                        <button onclick="return confirm('Apakah anda yakin?')" type="submit" name="submit" class="btn btn-primary"><span class="far fa-plus-square"></span> Add</button>
                        <button type="reset" class="btn btn-warning"><span class="fas fa-history"></span> Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <footer class="bg-light mt-5 p-3">
        <div class="container">
        </div>
    </footer>

    <!-- bootstrap@5.0.0-beta3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>