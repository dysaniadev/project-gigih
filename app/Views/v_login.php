<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/dist/css/adminlte.min.css">
</head>

<body class="vh-100 d-flex align-items-center justify-content-center" style="background-color: #005B41;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4 p-4 shadow rounded" style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px);">
                <img src="" class="w-100" style="height: 150px; object-fit: contain;">
                <h3 class="text-gray-900 font-weight-bolder mt-3">Login</h3>
                <h6 class="font-weight-bold mb-4 text-uppercase text-gray-700">Buku Induk Siswa</h6>

                <form action="<?= base_url('auth') ?>" method="post" class="user">
                    <div class="form-group">
                        <input type="text" class="form-control px-3" name="txtUsername" id="txtUsername" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control px-3" name="txtPassword" id="txtPassword" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/assets/dist/js/adminlte.min.js"></script>
</body>

</html>