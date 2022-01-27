<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Pon-Pes Nurul-Bayan</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <?php
        include 'navbar.php';
        
        
        ?>

        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="gambar/gambar.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">


                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="gambar/foto4.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="gambar/foto3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <h2 style="text-align: center;" class="alert alert-info mt-3 "> DATA SISWA</h2>
        <div class="row mt-3">
            <?php
            
            require 'setting.php';
            $query = "SELECT * FROM siswa";
            $sql = mysqli_query($koneksi, $query);
            while ($data = mysqli_fetch_object($sql)) {
            ?>

            <div class="col mb-3">
                <div class="card" style="width: 18rem;">

                    <img src="gambar/<?= $data->gambar; ?>" class="card-img-top" style="height: 13rem;">
                    <div class="card-body">
                        <p class="text-center"><?= $data->nama_siswa; ?></p>
                        <hr>
                        <p class="text-center"><?= $data->jenis_kelamin; ?></p>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>

        <?php
        include 'footer.php';
        ?>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>

</html>

</html>