<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <title><?= getenv('APP_NAME') ?></title>
    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/img/favicon.png') ?>">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800|PT+Mono:300,400,500,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="<?= base_url('assets/css/nucleo-icons.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/nucleo-svg.css') ?>" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/349ee9c857.js" crossorigin="anonymous"></script>
    
    <!--<link rel="stylesheet" href="<?= base_url('assets/libs/data-table/css/jquery.datatables.min.css') ?>">-->
    <link rel="stylesheet" href="<?= base_url('assets/libs/data-table/css/dataTables.bootstrap5.min.css') ?>">
    <!--<link rel="stylesheet" href="<?= base_url('assets/libs/data-table/css/responsive.datatables.min.css') ?>">-->
    <!--<link rel="stylesheet" href="<?= base_url('assets/libs/data-table/css/buttons.dataTables.min.css') ?>">-->
    <link rel="stylesheet" href="<?= base_url('assets/libs/data-table/css/buttons.bootstrap5.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/libs/data-table/css/responsive.bootstrap5.min.css') ?>">

    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url('assets/css/corporate-ui-dashboard.css?v=1.0.0') ?>" rel="stylesheet" />

</head>

<body>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!--<header id="header" class="header" style="height: 100px; background-color: #d1a52d;">-->
        <!--<div class="container">-->

        <!--<div id="logo" class="pull-left mt-0">
                < !--<h1><a href="#body" class="scrollto"><span>e</span>Startup</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
        <!--<a href="/users"><img src="<?= base_url('public/app/img/logo-mini.png') ?>" alt="homepage" width="70" height="82" class="light-logo" /></a>
-->
    </div>
    <!-- Sidenav Top -->
    <nav class="navbar bg-slate-900 navbar-expand-lg flex-wrap top-0 px-0 py-0">
        <div class="container py-2">
            <nav aria-label="breadcrumb">
                <div class="d-flex align-items-center">
                    <a class="navbar-brand text-white font-weight-bolder ms-lg-0" href="/users"><strong><?= getenv('APP_NAME') ?></strong></a>
                </div>
            </nav>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav mx-auto ms-xl-auto">
                    <li class="nav-item px-3 py-3 border-radius-sm  d-flex align-items-center"><a href="/users" class="nav-link text-white p-0"><i class="fa fa-area-chart"></i>
                            Convocatorias</a></li>
                    <?php
                    if ($this->session->userdata('user_rol') == 'estudiante') {
                        echo '<li class="nav-item px-3 py-3 border-radius-sm  d-flex align-items-center">';
                        echo '<a class="nav-link text-white p-0" href="/users/postulaciones">';
                        echo '   <i class="fa fa-id-badge"></i>';
                        echo '    Mis postulaciones';
                        echo '</a>';
                        echo '</li>';

                        echo '<li class="nav-item px-3 py-3 border-radius-sm  d-flex align-items-center">';
                        echo '<a class="nav-link text-white p-0" href="/users/perfil">';
                        echo '    <i class="fa fa-id-card-o"></i>';
                        echo '    Mi perfil</a>';
                        echo '</li>';
                    } else {
                    }
                    ?>
                    
                </ul>
                <ul class="navbar-nav justify-content-end">
                    <!--<li class="nav-item dropdown dropdown-hover pe-2 mx-2 d-flex align-items-center">-->
                    <div class="pe-md-3 d-flex align-items-center">
                        <li class="mx-2 py-2 nav-item dropdown dropdown-hover">
                            <!--<a href="#">-->
                            <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <!--<a class="nav-link dropdown-toggle text-white" id="navbarDropdownMenuLink" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
                                <i class="fa fa-user fa-fw"></i>
                                <!--<svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="opacity-6 me-1">
                                <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
                            </svg>-->
                                <strong><?= $this->session->userdata('user_condicion') . ' ' . $this->session->userdata('user_name') . ' ' . $this->session->userdata('user_paterno') ?></strong>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end user-dd animated flipInY" id="dropdownMenuButton">
                            <!--<ul class="dropdown-menu mt-1 py-0 px-1 me-sm-n4" aria-labelledby="dropdownMenuButton">-->
                                <a class="dropdown-item py-2 ps-3 rounded-2" href="/users/credenciales"><i class="fa fa-key" aria-hidden="true"></i>&nbsp;Cambiar clave</a>
                                <a class="dropdown-item py-2 ps-3 rounded-2" href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Cerrar sesión</a>
                            <!--</ul>-->
                            </div>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </nav><!-- #nav-menu-container -->
    <!--</div>-->
    <!--</header>< !-- #header -->
    </div>



    <!--==========================
    Datatables Section
  ============================-->
    <main id="content_app" class="padd-section mt-5">

        <div class="container">

            <?php $this->load->view($pagina); ?>
        </div>
    </main>


    <!--==========================
    Footer
  ============================-->
    <!--<footer class="footer align-bottom">-->
    <div class="footer fixed-bottom">
        <div class="container p-2 mt-0">
            <p class="text-white">&copy; Copyrights <?= getenv('APP_NAME') ?>. All rights reserved.</p>
        </div>

    </div>

    <!--   Core JS Files   -->
    <script src="<?= base_url('assets/libs/data-table/js/jquery-3.7.0.js') ?>"></script>
    <script src="<?= base_url('assets/js/core/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/core/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/smooth-scrollbar.min.js') ?>"></script>

    
    <script src="<?= base_url('assets/libs/data-table/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/data-table/js/dataTables.bootstrap5.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/data-table/js/dataTables.responsive.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/data-table/js/dataTables.buttons.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/data-table/js/buttons.bootstrap5.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/data-table/js/buttons.colVis.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/data-table/js/responsive.bootstrap5.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/data-table/js/buttons.html5.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/data-table/js/buttons.print.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/data-table/js/jszip.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/data-table/js/pdfmake.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/data-table/js/vfs_fonts.js') ?>"></script>
    <script>
        $(document).ready(function() {
            //$.noConflict();
            $('#datatablesSimple').DataTable({
                pageLength: 7,
                order: [],
                //responsive: true,
                scrollX: true,
                language: {
                    "url": "//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json",
                    "paginate": {
                        "previous": "<<",
                        "next": ">>",
                        "first": "<",
                        "last": ">"
                    },
                },
                dom: 'Bfrtip',
                buttons: ['copy', 'pdf',
                    {
                        extend: 'excelHtml5',
                        text: 'Excel',
                        customize: function(xlsx) {
                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                            //Para ver los estilos de formato https://datatables.net/reference/button/excelHtml5
                            $('row c[r^="B"]', sheet).attr('s', '57');
                            //Para que la columna se muestre como texto https://datatables.net/forums/discussion/73814/export-to-excel-with-format-text-for-column-b-c-and-d
                            $('row c[r^="C"]', sheet).attr('s', '50');
                        }
                    }
                ]
            });
        });
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Corporate UI Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url('assets/js/corporate-ui-dashboard.min.js?v=1.0.0') ?>"></script>

</body>

</html>