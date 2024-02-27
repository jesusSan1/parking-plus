<?=$this->extend('layouts\login');?>
<?=$this->section('titulo');?>
Recuperación de contraseña
<?=$this->endSection();?>
<?=$this->section('subtitulo');?>
Ingresa tu correo electronico
<?=$this->endSection();?>
<?=$this->section('contenido');?>
<?=form_open('', ['role' => 'form', 'class' => 'needs-validation'])?>
<div class="mb-3">
    <?=form_input(['type' => 'email', 'class' => session('list.email') ? 'form-control form-control-lg is-invalid' : 'form-control form-control-lg', 'placeholder' => 'Correo electronico', 'aria-label' => 'email', 'name' => 'email', 'autofocus' => true, 'value' => old('email'), 'required' => true])?>
    <div id="userFeedback" class="invalid-feedback">
        <?=session('list.email')?>
    </div>
</div>
<div class="text-center">
    <?=form_submit('', 'Recuperar contraseña', ['class' => 'btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0'])?>
</div>
<?=form_close()?>
</div>
<div class="card-footer text-center pt-0 px-lg-2 px-1">
    <p class="mb-4 text-sm mx-auto">
        <?=anchor(base_url('/'), 'Regresar', ['class' => 'text-primary text-gradient font-weight-bold'])?>
    </p>
</div>
<?=$this->endSection();?>