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
    <?=$this->renderSection('contenido');?>
    <!--   Core JS Files   -->
    <?=script_tag('assets/js/core/popper.min.js')?>
    <?=script_tag('assets/js/core/bootstrap.min.js')?>
    <?=script_tag('assets/js/plugins/perfect-scrollbar.min.js')?>
    <?=script_tag('assets/js/plugins/smooth-scrollbar.min.js')?>
    <?=script_tag('assets/js/argon-dashboard.min.js?v=2.0.4')?>
</body>

</html>