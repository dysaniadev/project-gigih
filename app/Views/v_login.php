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

<body class="vh-100 d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 shadow border rounded-left" style="background-color: #005B41dd;">
                <div class="m-5 d-flex">
                    <img src="<?= base_url('assets/images/mts.png') ?>" class="w-75 mx-auto">
                </div>
            </div>
            <div class="col-4 p-4 shadow rounded-right" style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px);">
                <div class="font-weight-bolder text-center" style="font-size:45px;">Selamat Datang</div>
                <div class="text-gray-900 h6 mb-3 text-right mr-3">E-Raport - Login</div>
                <form action="<?= base_url('auth/login') ?>" method="post" class="user">
                    <?php if (session('danger')) : ?>
                        <div class="alert alert-danger my-3" role="alert">
                            <?= session('danger') ?>
                        </div>
                    <?php endif ?>
                    <div class="form-group">
                        <input type="text" class="form-control px-3" name="txtUsername" id="txtUsername" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control px-3" name="txtPassword" id="txtPassword" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-block text-white" style="background-color: #005B41dd;">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script src="<?= base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/assets/dist/js/adminlte.min.js"></script>
</body>

</html>