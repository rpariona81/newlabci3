<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, material pro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, material dashboard bootstrap 5 dashboard template" />
    <meta name="description" content="Material Pro is powerful and clean admin dashboard template" />
    <meta name="robots" content="noindex,nofollow" />
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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="<?= base_url('assets/tinymce/tinymce.min.js') ?>"></script>
    <script>
        tinymce
            .init({
                selector: 'textarea#detail',
                plugins: "textcolor, lists code",
                toolbar: " undo redo | bold italic | alignleft aligncenter alignright alignjustify \n\
		              | bullist numlist outdent indent | forecolor backcolor table code"
            });
    </script>

</head>

<body class="g-sidenav-show  bg-gray-100">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 bg-slate-900 fixed-start " id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand d-flex align-items-center m-0" href="/admin">
                <span class="font-weight-bold text-lg">RONALD PARIONA</span>
            </a>
        </div>
        <div class="collapse navbar-collapse px-3 w-auto h-auto ps" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <i class="fa fa-home"></i>
                    <span class="hide-menu">WebApp Bolsa laboral</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/" aria-expanded="false">
                        <i class="fa fa-table"></i>
                        <span class="hide-menu">Panel de control </span>
                    </a>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/estudiantes" aria-expanded="false"><i class="fa fa-address-book"></i><span class="hide-menu">Estudiantes</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/docentes" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Docentes</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/convocatorias" aria-expanded="false"><i class="fa fa-area-chart"></i><span class="hide-menu">Convocatorias</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/postulaciones" aria-expanded="false"><i class="fa fa-list-ul"></i><span class="hide-menu">Postulaciones</span></a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/perfil" aria-expanded="false"><i class="fa fa-user-secret"></i><span class="hide-menu">Mi perfil</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout" aria-expanded="false"><i class="fa fa-sign-out" aria-hidden="true"></i><span class="hide-menu">Cerrar sesión</span></a>
                </li>
            </ul>

            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ps ps--active-y">
    <!--<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">-->
        <!-- -------------------------------------------------------------- -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- -------------------------------------------------------------- -->
<nav class="px-0 mx-5 rounded z-index-2 navbar navbar-main navbar-expand-lg position-sticky top-1 z-index-sticky blur shadow-blur left-auto">
        <!--<nav class="navbar navbar-main navbar-expand-lg mx-5 px-0 shadow-none rounded position-sticky blur shadow-blur mt-4 left-auto top-1 z-index-sticky" id="navbarBlur" navbar-scroll="true">-->
            <div class="container px-2 py-1 min-w-100">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <nav aria-label="breadcrumb">
                    <a class="navbar-brand" href="/admin">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <img src="<?= base_url('assets/img/logos/LOGO_BANDA_OJM24D0.png') ?>" alt="Bolsa laboral prueba" class="light-logo" height="50" /> &nbsp; Bolsa Laboral Ejemplo
                        </b>
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </nav>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!--<div class="navbar-collapse collapse" id="navbarSupportedContent">-->
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                    </div>
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ulc>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                    </ulc>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= $this->session->userdata('user_rol_title') ?>&nbsp;<i class="fa fa-user fa-fw"></i>
                                <!--<img src="<?= base_url('assets/img/users/1.jpg') ?>" alt="user" width="30" class="profile-pic rounded-circle" />-->
                            </a>
                            <div class="dropdown-menu dropdown-menu-end user-dd animated flipInY">
                                <div class="d-flex no-block align-items-center p-3 bg-info text-white mb-2">
                                    <!--<div class="">
                                        <img src="<?= base_url('public/admin/assets/images/users/1.jpg') ?>" alt="user" class="rounded-circle" width="60" />
                                    </div>-->
                                    <div class="ms-2">
                                        <h6 class="mb-0 text-white"><?= $this->session->userdata('user_name') . ' ' . $this->session->userdata('user_paterno') ?></h6>
                                        <p class="mb-0"><?= $this->session->userdata('user_email') ?></p>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="/admin/perfil"><i class="fa fa-user-secret"></i>
                                    Mi perfil</a>
                                <a class="dropdown-item" href="/admin/claves"><i class="fa fa-key" aria-hidden="true"></i>
                                    Cambio de clave</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i>
                                    Cerrar sesión</a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <!-- -------------------------------------------------------------- -->
        <!-- End Topbar header -->
        <!-- -------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------- -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- -------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------- -->
        <!-- Page wrapper  -->
        <!-- -------------------------------------------------------------- -->
        <div class="container-fluid py-4 px-5">

            
                <?php $this->load->view($contenido); ?>

                <!-- -------------------------------------------------------------- -->
                <!-- End PAge Content -->
                <!-- -------------------------------------------------------------- -->
            
        </div>
        <!-- -------------------------------------------------------------- -->
        <!-- End Page wrapper  -->
        <!-- -------------------------------------------------------------- -->
        </div>
    </main>
    <!-- -------------------------------------------------------------- -->
    <!-- End Wrapper -->
    <!-- -------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------- -->

    <!-- -------------------------------------------------------------- -->
    <!-- All Jquery -->
    <!-- -------------------------------------------------------------- -->

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