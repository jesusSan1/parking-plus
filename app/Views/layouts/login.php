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
    <?=link_tag('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700')?>
    <!-- Nucleo Icons -->
    <?=link_tag('assets/css/nucleo-icons.css')?>
    <?=link_tag('assets/css/nucleo-svg.css')?>
    <!-- Font Awesome Icons -->
    <?=script_tag('https://kit.fontawesome.com/42d5adcbca.js')?>
    <?=link_tag('assets/css/nucleo-svg.css')?>
    <!-- CSS Files -->
    <?=link_tag(['id' => 'pagestyle', 'href' => 'assets/css/argon-dashboard.css?v=2.0.4', 'rel' => 'stylesheet'])?>
</head>

<body class="">
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <?php if (session()->get('errors')): ?>
                            <?=$this->include('errors/errors')?>
                            <?php endif;?>
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder"><?=$this->renderSection('titulo')?></h4>
                                    <p class="mb-0"><?=$this->renderSection('subtitulo')?></p>
                                </div>
                                <div class="card-body">
                                    <?=$this->renderSection('contenido');?>
                                </div>
                            </div>
                            <div
                                class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                                <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                                    style="background-image: url('assets/img/bg.jpg');
          background-size: cover;">
                                    <span class="mask bg-gradient-primary opacity-6"></span>
                                    <h4 class="mt-5 text-white font-weight-bolder position-relative">"Tu solución de
                                        estacionamiento inteligente"</h4>
                                    <p class="text-white position-relative">Gestiona tu estacionamiento con facilidad en
                                        Parking Plus donde cada minuto cuenta y cada espacio importa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </main>
    <!--   Core JS Files   -->
    <?=script_tag('assets/js/core/popper.min.js')?>
    <?=script_tag('assets/js/core/bootstrap.min.js')?>
    <?=script_tag('assets/js/plugins/perfect-scrollbar.min.js')?>
    <?=script_tag('assets/js/plugins/smooth-scrollbar.min.js')?>
    <?=script_tag('assets/js/argon-dashboard.min.js?v=2.0.4')?>
</body>

</html>