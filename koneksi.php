<?php

$conn = mysqli_connect("localhost", "root", "", "db_covid19");

if(mysqli_connect_errno()){
    echo "Koneksi database gagal!";
    die();
}

?>