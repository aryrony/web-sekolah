<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap\bootstrap/css/bootstrap.min.css" />
</head>

<body>
    <div class="container">
        <h3 class="alert alert-info"> Edit Data Siswa</h3>
        <?php
        require 'setting.php';
        //menampilan data dalam table
        if (isset($_GET['id'])) {
            $input_id = $_GET['id'];
            $query = "SELECT * FROM siswa WHERE id = $input_id ";
            $result = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_object ($result);
        }
        //simpan data yang telah dirubah dalam table
        if (isset($_POST['simpan'])) {
            $txtnama_siswa = $_POST['txtnama_siswa'];
            $txtjenis_kelamin = $_POST['txtjenis_kelamin'];
            $txtkelas = $_POST['txtkelas'];
            $txtjurusan = $_POST['txtjurusan'];
            $txtgambar = $_POST['txtgambar'];
            //update syntax dalam mysql
            $sql = "UPDATE siswa SET 
                        nama_siswa='$txtnama_siswa', jenis_kelamin='$txtjenis_kelamin',kelas='$txtkelas',Jurusan='$txtjurusan',gambar='$txtgambar' WHERE id = $input_id";
            $result = mysqli_query($koneksi, $sql);
            //perulangan jika dia berhasil maka ke index dan data diperbarui
            if ($result) {
                header('location:index.php');
                //jika salah data tidak berhasil diperbarui dan menghasilkan error
            } else {
                echo 'Query Error' . mysqli_error($koneksi);
            }
        }
        ?>

        <form action="" method="post">
            <input type="hidden" name="txtid" value="<?=$id;?>">
            <div class="mb-3">
                <label>Nama Siswa</label>
                <input type="text" name="$txtnama_siswa" class="form-control" value="<?=$data->nama_siswa;?>">
            </div>

            <div class="mb-3">
                <label style="font-weight: bold;">Jenis Kelamin</label><br>
                <input type="radio" name="txtjenis_kelamin" value="Laki-laki"> Laki-laki<br>
                <input type="radio" name="txtjenis_kelamin" value="Perempuan"> Perempuan<br>
            </div>

            <div class="mb-3">
                <label>Kelas</label>
                <input type="text" name="txtkelas" class="form-control" value="<?=$data->kelas;?>">
            </div>

            <div class="mb-3">
                <label>Jurusan</label>
                <input type="text" name="txtjurusan" class="form-control" value="<?=$data->jurusan;?>">
            </div>

            <div class="mb-3">
                <label>Gambar</label>
                <input type="file" name="txtgambar" class="form-control" value="<?=$data->gambar;?>">
            </div>

            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>

</html>