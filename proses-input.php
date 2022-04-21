<?php

    include "koneksi.php";

    $wilayah = $_POST['wilayah'];
    $positif = $_POST['jml_positif'];
    $rawat = $_POST['jml_dirawat'];
    $sembuh = $_POST['jml_sembuh'];
    $meninggal = $_POST['jml_meninggal'];
    $operator = $_POST['operator'];
    $nim    = $_POST['nim'];

    $sql = "INSERT INTO pasien(wilayah, positif, rawat, sembuh, meninggal, operator, nim) VALUES
            ('$wilayah', '$positif', '$rawat', '$sembuh', '$meninggal', '$operator', '$nim')";
    $query = mysqli_query($conn, $sql);

    if($query){
        header("location:dashboard.php?simpan=sukses");
    } else{
        echo "Data Gagal Disimpan!";
    }

?>