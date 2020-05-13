<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="<?= base_url('home') ?>" class="navbar-brand">
                    <img src="<?= base_url() ?>/Assets/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">Home</span>
                </a>
            
                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="<?= base_url('jurusan') ?>" class="nav-link">Jurusan</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('mahasiswa') ?>" class="nav-link">Mahasiswa</a>
                        </li>
                    </ul>       
                </div>

                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <button class="btn btn-danger">
                        <a href="<?= base_url('login/logout') ?>" style="color:white;">Logout</a>
                    </button>
                </ul>
            </div>
        </nav>

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"><?= $judul ?></h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="#"><?= $nama ?></a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>


