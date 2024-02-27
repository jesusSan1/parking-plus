<?=$this->extend('layouts\login');?>
<?=$this->section('titulo');?>
Ingresar nueva contraseña
<?=$this->endSection();?>
<?=$this->section('subtitulo');?>
Crea una nueva contraseña para tu usuario
<?=$this->endSection();?>
<?=$this->section('contenido');?>
<?=form_open('', ['role' => 'form', 'class' => 'needs-validation'])?>
<div class="mb-3">
    <?=form_input(['type' => 'password', 'class' => session('list.password') ? 'form-control form-control-lg is-invalid' : 'form-control form-control-lg', 'placeholder' => 'Nueva contraseña', 'aria-label' => 'user', 'name' => 'password', 'autofocus' => true, 'value' => old('password'), 'required' => true])?>
    <div id="userFeedback" class="invalid-feedback">
        <?=session('list.password')?>
    </div>
</div>
<div class="text-center">
    <?=form_submit('', 'Crear nueva contraseña', ['class' => 'btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0'])?>
</div>
<?=form_close()?>
</div>
<?=$this->endSection();?>