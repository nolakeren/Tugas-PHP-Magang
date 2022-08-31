<?php
    require "koneksi.php";

    $sql = "SELECT * FROM buah ORDER BY id_buah DESC";
    $query = mysqli_query($conn,$sql);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Buah | Home</title>

    <!-- bootstrap@5.0.0-beta3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- fontawesome@5.10.0 -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Custom Style -->
    <style>
        table td:not(:first-child) {
            min-width: 150px;
        }
        table td.paragraph {
            min-width: 350px;
        }
        .scrolled-content-x {
            overflow-x: scroll;
        }
    </style>
    
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
                        <a class="nav-link active" aria-current="page" href="./index.php"><span class="fas fa-home"></span> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./tambah.php"><span class="far fa-plus-square"></span> Add</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="mt-5">
        <div class="container scrolled-content-x">
            <table class="table">
                <caption style="caption-side: top;">Daftar Buah</caption>
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Buah</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Warna</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($result = mysqli_fetch_assoc($query)): ?>
                        <tr>
                            <td><?php echo $result['id_buah'] ?></td>
                            <td><?php echo $result['nama_buah'] ?></td>
                            <td><?php echo $result['stock'] ?></td>
                            <td><?php echo $result['harga'] ?></td>
                            <td><?php echo $result['warna'] ?></td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="edit.php?id=<?php echo $result['id_buah'] ?>" class="btn btn-warning"><span class="fas fa-edit"></span> Edit</a>
                                    <a href="hapus.php?id=<?php echo $result['id_buah'] ?>" class="btn btn-danger"><span class="fas fa-trash"></span> Delete</a>
                                </div>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </main>

    <!-- bootstrap@5.0.0-beta3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>