<?=$this->extend('layouts/login');?>
<?=$this->section('titulo');?>
Verificación de token
<?=$this->endSection();?>
<?=$this->section('subtitulo');?>
Ingresa el token enviado a tu correo electronico
<?=$this->endSection();?>
<?=$this->section('contenido');?>
<?=form_open('', ['role' => 'form', 'class' => 'needs-validation'])?>
<div class="mb-3">
    <?=form_input(['type' => 'text', 'class' => session('list.token') ? 'form-control form-control-lg is-invalid' : 'form-control form-control-lg', 'placeholder' => 'Token', 'aria-label' => 'user', 'name' => 'token', 'autofocus' => true, 'value' => old('token'), 'required' => true])?>
    <div id="userFeedback" class="invalid-feedback">
        <?=session('list.token')?>
    </div>
</div>
<div class="text-center">
    <?=form_submit('', 'Verificar token enviado', ['class' => 'btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0'])?>
</div>
<?=form_close()?>
</div>
<?=$this->endSection();?>