<?=$this->extend('layouts\login');?>
<?=$this->section('contenido');?>
<main class="main-content  mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-start">
                                <h4 class="font-weight-bolder">Inicio de sesión</h4>
                                <p class="mb-0">Ingresa tu usuario y contraseña</p>
                            </div>
                            <div class="card-body">
                                <?=form_open('', ['role' => 'form'])?>
                                <div class="mb-3">
                                    <?=form_input(['type' => 'text', 'class' => 'form-control form-control-lg', 'placeholder' => 'Usuario', 'aria-label' => 'user', 'name' => 'user', 'autofocus' => true])?>
                                </div>
                                <div class="mb-3">
                                    <?=form_input(['type' => 'password', 'class' => 'form-control form-control-lg', 'placeholder' => 'Contraseña', 'aria-label' => 'password', 'name' => 'password'])?>
                                </div>
                                <div class="text-center">
                                    <?=form_submit('', 'Iniciar sesion', ['class' => 'btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0'])?>
                                </div>
                                <?=form_close()?>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-sm mx-auto">
                                    Olvidé mi contraseña
                                    <a href="javascript:;"
                                        class="text-primary text-gradient font-weight-bold">Recuperar</a>
                                </p>
                            </div>
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
<?=$this->endSection();?>