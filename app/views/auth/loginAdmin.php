<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= getenv('APP_NAME') ?></title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/img/favicon.png') ?>">

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800|PT+Mono:300,400,500,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/349ee9c857.js" crossorigin="anonymous"></script>
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="assets/css/corporate-ui-dashboard.css?v=1.0.0" rel="stylesheet" />

</head>

<body class="text-center">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="col-xl-4 col-md-6 d-flex flex-column mx-auto">

            <div class="card card-plain mt-5 border mb-3">
                <div>
                    <img class="mb-4 mt-3" src="<?= base_url('assets/img/theme/slack.png') ?>" width="200" height="230" id="logo">
                </div>
                <div class="card-header pb-0 text-left bg-transparent">
                    <h3 class="font-weight-black text-dark display-6">Bienvenido(a)</h3>
                    <p class="mb-0">Por favor, ingresa tus credenciales.</p>
                    <hr>

                </div>

                <div class="card-body">
                    <?php if ($this->session->flashdata('flashSuccess')) : ?>
                        <div class="d-grid gap-2 px-3">
                            <p class='mt-1 alert alert-success'> <?= $this->session->flashdata('flashSuccess') ?> </p>
                        </div>
                    <?php endif ?>

                    <?php if ($this->session->flashdata('flashError')) : ?>
                        <div class="d-grid gap-2 px-3">
                            <p class='mt-1 alert alert-danger'> <?= $this->session->flashdata('flashError') ?> </p>
                        </div>
                    <?php endif ?>

                    <?php if ($this->session->flashdata('flashInfo')) : ?>
                        <div class="d-grid gap-2 px-3">
                            <p class='mt-1 alert alert-info'> <?= $this->session->flashdata('flashInfo') ?> </p>
                        </div>
                    <?php endif ?>

                    <?php if ($this->session->flashdata('flashWarning')) : ?>
                        <div class="d-grid gap-2 px-3">
                            <p class='mt-1 alert alert-warning'> <?= $this->session->flashdata('flashWarning') ?> </p>

                        <?php endif ?>

                        <?= form_open('authcontroller/loginAdmin',  ['class' => 'form-signin']) ?>
                        <div class="form-row">
                            <label for="inputEmail" class="sr-only">Usuario</label>
                            <input class="form-control" id="username" name="username" type="text" placeholder="Usuario" value="<?= set_value('username') ?>" size="50" required />
                        </div><br>
                        <div class="form-row">
                            <label for="inputPassword" class="sr-only">Contraseña</label>
                            <input class="form-control" id="password" name="password" type="password" placeholder="Contraseña" value="<?= set_value('password') ?>" size="50" required />
                        </div>
                        <div class="form-row">
                            <div class="text-center mt-3">
                                <input class="btn btn-danger w-100 mb-1" id="btnLogin" type="submit" value="Ingresar"></input>
                                <a class="btn btn-white w-100 mt-1 mb-1" href="/">Regresar</a>&nbsp;&nbsp;
                            </div>
                        </div>
                        <?= form_close() ?>
                        </div>
                        <!-- -------------------------------------------------------------- -->
                        <!-- Login box.scss -->
                        <!-- -------------------------------------------------------------- -->
                </div>

                <!-- -------------------------------------------------------------- -->
                <!-- All Required js -->
                <!-- -------------------------------------------------------------- -->
                <!--   Core JS Files   -->
            <script src="assets/js/core/popper.min.js"></script>
            <script src="assets/js/core/bootstrap.min.js"></script>
            <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
            <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
            
            <!-- Github buttons -->
            <script async defer src="https://buttons.github.io/buttons.js"></script>
            <!-- Control Center for Corporate UI Dashboard: parallax effects, scripts for the example pages etc -->
            <script src="assets/js/corporate-ui-dashboard.min.js?v=1.0.0"></script>

</body>

</html>