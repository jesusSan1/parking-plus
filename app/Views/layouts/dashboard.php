<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?=link_tag('assets/img/icon.jpg', 'icon', 'image/png')?>
    <title>
        Parking Plus
    </title>
    <!--     Fonts and icons     -->
    <?=link_tag('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet')?>
    <!-- Nucleo Icons -->
    <?=link_tag('assets/css/nucleo-icons.css')?>
    <?=link_tag('assets/css/nucleo-svg.css')?>
    <!-- Font Awesome Icons -->
    <?=script_tag('https://kit.fontawesome.com/42d5adcbca.js')?>
    <?=link_tag('assets/css/nucleo-svg.css')?>
    <!-- CSS Files -->
    <?=link_tag(['id' => 'pagestyle', 'href' => 'assets/css/argon-dashboard.css?v=2.0.4', 'rel' => 'stylesheet'])?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>


    <!-- Scripts -->
    <?=script_tag('assets/js/core/popper.min.js')?>
    <?=script_tag('assets/js/core/bootstrap.min.js')?>
    <?=script_tag('assets/js/plugins/perfect-scrollbar.min.js')?>
    <?=script_tag('assets/js/plugins/smooth-scrollbar.min.js')?>
    <?=script_tag('assets/js/plugins/chartjs.min.js')?>
</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="<?=base_url('dashboard')?>">
                <img src="assets/img/icon.jpg" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">Parking Plus</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?=basename(uri_string()) == 'dashboard' ? 'bg-dark rounded active' : ''?>"
                        href="<?=base_url('dashboard')?>">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i
                                class="ni ni-tv-2 <?=basename(uri_string()) == 'dashboard' ? 'text-light' : 'text-primary'?> text-sm opacity-10"></i>
                        </div>
                        <span
                            class="nav-link-text ms-1 <?=basename(uri_string()) == 'dashboard' ? 'text-white' : ''?>">Menú
                            principal</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?=basename(uri_string()) == 'ajuste-empresa' ? 'bg-dark rounded active' : ''?>"
                        href="<?=base_url('ajuste-empresa')?>">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i
                                class="ni ni-settings <?=basename(uri_string()) == 'ajuste-empresa' ? 'text-light' : 'text-primary'?> text-sm opacity-10"></i>
                        </div>
                        <span
                            class="nav-link-text ms-1 <?=basename(uri_string()) == 'ajuste-empresa' ? 'text-white' : ''?>">Ajuste
                            de empresa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?=basename(uri_string()) == 'configuracion' ? 'bg-dark rounded active' : ''?>"
                        href="<?=base_url('configuracion')?>">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i
                                class="ni ni-settings-gear-65 <?=basename(uri_string()) == 'configuracion' ? 'text-light' : 'text-primary'?> text-sm opacity-10"></i>
                        </div>
                        <span
                            class="nav-link-text ms-1 <?=basename(uri_string()) == 'configuracion' ? 'text-white' : ''?>">Configuración</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?=basename(uri_string()) == 'perfil' ? 'bg-dark rounded active' : ''?>"
                        href="<?=base_url('perfil')?>">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i
                                class="ni ni-single-02 <?=basename(uri_string()) == 'perfil' ? 'text-light' : 'text-primary'?> text-sm opacity-10"></i>
                        </div>
                        <span
                            class="nav-link-text ms-1 <?=basename(uri_string()) == 'perfil' ? 'text-white' : ''?>">Perfil
                            de usuario</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidenav-footer mx-3 ">
            <a href="#" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">Cerrar sesión</a>
            <a class="btn btn-primary btn-sm mb-0 w-100" href="#" type="button">Cerrar sesión</a>
        </div>
    </aside>
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
            data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <h6 class="font-weight-bolder text-white mb-0">
                        <?=$this->renderSection('titulo')?></h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                        </div>
                    </div>
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <ul class="navbar-nav justify-content-end">
                                <li class="nav-item d-flex align-items-center">
                                    <a href="<?=base_url('perfil')?>" class="nav-link text-white font-weight-bold px-0">
                                        <i class="ni ni-single-02"></i>
                                        <span class="d-sm-inline d-none">Perfil de usuario</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="<?=base_url('salir')?>" class="nav-link text-white font-weight-bold px-0">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                <span class="d-sm-inline d-none">Cerrar sesión</span>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <?=$this->renderSection('contenido')?>
        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © <script>
                            document.write(new Date().getFullYear())
                            </script>,
                            Hecho con <i class="fa fa-heart"></i> por
                            <a href="#" class="font-weight-bold" target="_blank">Jesus Sanchez.</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        </div>
    </main>
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2" href="#">
            <i class="fa fa-cog py-2"> </i>
        </a>
    </div>
    <!-- Github buttons -->
    <?=script_tag(['src' => 'https://buttons.github.io/buttons.js', 'defer' => null, 'async' => null])?>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <?=script_tag('assets/js/argon-dashboard.min.js?v=2.0.4')?>
    <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script>
</body>

</html>