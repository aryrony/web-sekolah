<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>

<body>

    <div class="container mb-5">
        <?php
    include 'navbar.php';
    ?>
        <h2 class="alert alert-info mt-3"> DATA SISWA </h2>
        <?php
                require 'setting.php';
                if (isset($_POST['simpan'])) {
                    $txtnama_siswa = $_POST['txtnama_siswa'];
                    $txtjenis_kelamin = $_POST['txtjenis_kelamin'];
                    $txtkelas = $_POST['txtkelas'];
                    $txtjurusan = $_POST['txtjurusan'];
                    $txtgambar =$_POST['txtgambar'];
                    $sql = "INSERT INTO siswa VALUES (NULL, '$txtnama_siswa', '$txtjenis_kelamin', '$txtkelas', '$txtjurusan','$txtgambar')";
                    $query = mysqli_query($koneksi, $sql);
                    if ($query){
                        header('location: data.php');
                    }else {
                        echo 'Query Error : ' . mysqli_error($koneksi);
                    }
                }
    
                ?>
        <form action="#" method="POST">

            <div class="mb-3">
                <label>Nama siswa</label>
                <input type="text" name="txtnama_siswa" class="form-control">
            </div>

            <div class="mb-3">
                <label style="font-weight: bold;">Jenis Kelamin</label><br>
                <input type="radio" name="txtjenis_kelamin" value="Laki-laki"> Laki-laki<br>
                <input type="radio" name="txtjenis_kelamin" value="Perempuan"> Perempuan<br>
            </div>

            <div class="mb-3">
                <label>Kelas</label>
                <input type="text" name="txtkelas" class="form-control">
            </div>

            <div class="mb-3">
                <label>jurusan</label>
                <select class="form-select" aria-label="Default select example" name="txtjurusan">
                    <option selected>Pilih jurusan</option>
                    <option value="ips">ips</option>
                    <option value="ipa">ipa</option>
                    <option value="bahasa">bahasa</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Gambar</label>
                <input type="file" name="txtgambar">
            </div>

            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
            <a href="index.php" class="btn btn-secondary"> HOME </a>

        </form>
        <?php
    include 'footer.php';
    ?>

</body>

</html>