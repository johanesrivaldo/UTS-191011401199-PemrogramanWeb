<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>UTS</title>
    <style>
        body{
            height: 50vmax;
            background: blue;
        }
    </style>
</head>
<body>
    <h1 class="alert alert-secondary text-center">DATA COVID-19</h1>
    <div class="container d-flex justify-content-center mt-5">
        <div class="col-lg-5">
                <div class="card">
                    <div class="card-header text-center">Masukan Data</div>
                    <div class="card-body">
                        <form action="proses-input.php" method="post">
                            <select class="form-control mb-3" name="wilayah" id="wilayah">
                                <option value="DKI Jakarta">DKI Jakarta</option>
                                <option value="Jawa Barat">Jawa Barat</option>
                                <option value="Banten">Banten</option>
                                <option value="Jawa Tengah">Jawa Tengah</option>
                            </select>
                            <input type="number" class="form-control mb-3" name="jml_positif" placeholder="Jumlah Positif" >
                            <input type="number" class="form-control mb-3" name="jml_dirawat" placeholder="Jumlah Dirawat" >
                            <input type="number" class="form-control mb-3" name="jml_sembuh" placeholder="Jumlah Sembuh" >
                            <input type="number" class="form-control mb-3" name="jml_meninggal" placeholder="Jumlah Meninggal" >
                            <input type="text" name="operator" class="form-control mb-3" placeholder="Operator">
                            <input type="number" name="nim" class="form-control mb-5" placeholder="No Induk Mhs">
                            <div class="form-inline">
                                <a href="" class="btn btn-danger mr-auto">Batal</a>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>