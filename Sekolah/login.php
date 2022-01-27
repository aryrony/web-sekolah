<?php
session_start();

require 'setting.php';

if (isset($_GET['login'])) {
    $username = $_GET['username'];
    $password = $_GET['password'];

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password  = '$password'");

    if (mysqli_num_rows($query) === 1) {
        header('location:data.php');
        $data = mysqli_fetch_object($query);

        $_SESSION['login'] = true;
        $_SESSION['hak_akses'] = $data->hak_akses;
    }
    //    echo $error = 'Username atau password yang anda masukan salah';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://parsleyjs.org/src/parsley.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://parsleyjs.org/dist/parsley.min.js"></script>
    <script src="https://parsleyjs.org/dist/i18n/id.js"></script>
</head>

<body background="https://www.solidbackgrounds.com/images/1920x1080/1920x1080-deep-sky-blue-solid-color-background.jpg"
    <div class="container">
    <div class="row mt-8">
        <div class="col-12">
            <div
                style="box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);border-radius: 15px; height: 280px;margin: 12rem auto 8.1rem auto;width: 329px; background-color: rgba(0,0,0,.7);">
                <div class="text-center">
                    <br>
                    <h3 style="color: white; text-align: center; font-weight: bold;">Login Form</h3>
                    <br>
                    <form method="GET" id="form" data-parsley-validate>
                        <div class="form-group">

                            <input type="text" class="form-control mb-3" name="username" placeholder="Username"
                                required />
                        </div>
                        <div class="form-group">

                            <input type="password" name="password" placeholder="Password" required
                                data-parsley-trigger="keyup" class="form-control" />
                        </div>
                        <p></p>
                        <div class="form-group mt-3">
                            <input type="submit" id="submit" name="login" value="Submit" class="btn btn-primary" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
$('#form').parsley();
</script>

</html>