<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Arief Satria Nugraha | Code Igniter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?= base_url('') ?>/Assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url('') ?>/Assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('') ?>/Assets/dist/css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href=""><img src="<?= base_url() ?>/Assets/dist/img/Logo.png" alt=""></a>
        </div>

        <div class="card">
            <div class="card-body login-card-body">
            <p class="login-box-msg"><strong>REGISTER</strong></p>

            <?php 
                $input = session()->getFlashData('input');
                $errors = session()->getFlashData('errors');
                if(!empty($errors)){ 
            ?>
                    <div class="alert alert-danger">
                        Anda melakukan kesalahan :
                        <ul>
                            <?php foreach($errors as $error) { ?>
                                <li><?= esc($error); ?></li> 
                            <?php } ?>
                        </ul>
                    </div>
            <?php  
                }
            ?>

            <form action="<?= base_url('login/submit_register'); ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_lengkap">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" name="username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center">- - -</p>
                        <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                    </div>
                </div>
            </form>

            <br><br>

            <p class="mb-0 text-center">
                <a href="<?= base_url('login') ?>" class="text-center">I already have a membership</a>
            </p>
        </div>
    </div>

    <script src="<?= base_url('') ?>/Assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url('') ?>/Assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('') ?>/Assets//dist/js/adminlte.min.js"></script>

</body>
</html>
