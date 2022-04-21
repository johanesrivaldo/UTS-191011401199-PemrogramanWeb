<?php
    include "koneksi.php";

    $query = mysqli_query($conn, "SELECT * FROM pasien");
    $result = array();
    while ($data = mysqli_fetch_array($query)) {
      $result[] = $data; //result dijadikan array
      
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Data Covid19</title>
    <style>
        .table{
            margin-left: 180px;
        }
    </style>

</head>
<body>
    <div class="container">
        <h1 class="alert alert-info text-center">DATA PEMANTAUAN COVID-19 WILAYAH JAWA BARAT</h1> <br>
        <h2 class="alert alert-secondary text-center">
            <?php 
                date_default_timezone_set('Asia/Jakarta'); 
                echo date('l, d/m/Y h:i:sa');
            ?> <br>
            Operator : Yohanes R. Jemadu | 191011401199
            </h2>
        <div class="col-lg-9 d-flex justify-content-center">
            <!-- Table -->
            <table class="table table-bordered">
                 <thead class="thead-dark">
                    <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Positif</th>
                    <th scope="col">Dirawat</th>
                    <th scope="col">Sembuh</th>
                    <th scope="col">Meninggal</th>
                    </tr>
                    <tbody>
                    <?php $no= 1; ?>
                    <?php foreach ($result as $data) : ?>
                        <tr>
                        <th scope="row"><?=$no; ?></th>
                        <td><?=$data['positif']; ?></td>
                        <td><?=$data['rawat']; ?></td>
                        <td><?=$data['sembuh']; ?></td>
                        <td><?=$data['meninggal']; ?></td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach ?>
                    </tbody>
                </thead>
            </table>
        </div>
        <a href="index.php" class="text-primary text-center">Kembali</a>
    </div>
    
    <script src="js/bootstrap.min.js"></script>
</body>
</html>