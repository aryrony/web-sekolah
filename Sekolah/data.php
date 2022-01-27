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
    <div class="container mt-2">
        <?php
        include 'navbar.php';
        ?>

        <h2 style="text-align: center;" class="alert alert-info mt-3 "> DATA SISWA</h2>
        </table>
        <a href="tambah.php" class="btn"> TAMBAH DATA</a>
        </br>

        <table class="table table-bordered ">
            <thead class="rgba(0,0,0,.7">
                <tr>

                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="rgba(0,0,0,.7">
                <?php
                require 'setting.php';
                $query = "SELECT * FROM siswa";
                $sql = mysqli_query($koneksi, $query);
                $no = 1;
                while ($data = mysqli_fetch_object($sql)) {
                ?>
                <tr>
                    <td> <?= $no++ ?> </td>
                    <td> <?php echo $data->nama_siswa; ?> </td>
                    <td> <?php echo $data->jenis_kelamin; ?> </td>
                    <td> <?php echo $data->kelas; ?> </td>
                    <td> <?php echo $data->jurusan; ?> </td>
                    <td> <a href="gambar/<?= $data->gambar; ?>"><?= $data->gambar; ?></a></td>
                    <td>
                        <a href="edit.php?id=<?php echo $data->id; ?>">
                            <input type="submit" value="Edit" class="btn btn-warning">
                        </a>
                        <a href="hapus.php?id=<?= $data->id; ?>">
                            <input type="submit" value="Hapus" class="btn btn-danger"
                                onclick="return confirm('Yakin Hapus Data?')">
                        </a>
                    </td>
                </tr>
                <?php
                }
                ?>

            </tbody>
        </table>



        <?php
        include 'footer.php';
        ?>
    </div>
</body>

</html>