<?=$this->extend('layouts/login');?>
<?=$this->section('titulo');?>
Inicio de sesión
<?=$this->endSection();?>
<?=$this->section('subtitulo');?>
Ingresa tu usuario y contraseña
<?=$this->endSection();?>
<?=$this->section('contenido');?>
<?=form_open('', ['role' => 'form', 'class' => 'needs-validation'])?>
<div class="mb-3">
    <?=form_input(['type' => 'text', 'class' => session('list.user') ? 'form-control form-control-lg is-invalid' : 'form-control form-control-lg', 'placeholder' => 'Usuario', 'aria-label' => 'user', 'name' => 'user', 'autofocus' => true, 'value' => old('user'), 'required' => true])?>
    <div id="userFeedback" class="invalid-feedback">
        <?=session('list.user')?>
    </div>
</div>
<div class="mb-3">
    <?=form_input(['type' => 'password', 'class' => session('list.password') ? 'form-control form-control-lg is-invalid' : 'form-control form-control-lg', 'placeholder' => 'Contraseña', 'aria-label' => 'password', 'name' => 'password', 'required' => true])?>
    <div id="passwordFeedback" class="invalid-feedback">
        <?=session('list.password')?>
    </div>
</div>
<div class="text-center">
    <?=form_submit('', 'Iniciar sesion', ['class' => 'btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0'])?>
</div>
<?=form_close()?>
</div>
<div class="card-footer text-center pt-0 px-lg-2 px-1">
    <p class="mb-4 text-sm mx-auto">
        Olvidé mi contraseña
        <?=anchor(base_url('recuperar'), 'Recuperar', ['class' => 'text-primary text-gradient font-weight-bold'])?>
    </p>
</div>
<?=$this->endSection();?>