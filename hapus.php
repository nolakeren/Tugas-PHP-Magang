<?php
    require "koneksi.php";
    
    $id_buah= $_GET['id_buah'];

    $sql = "DELETE FROM buah WHERE id_buah='$id_buah'";
    $queri = mysqli_query($conn, $sql);

        if(queri){
            echo "gagal menghapus data";

        } else{
            header('location: index.php');
        }
?>