<?=$this->extend('layouts/dashboard');?>
<?=$this->section('titulo');?>
Perfil de usuario
<?=$this->endSection();?>
<?=$this->section('contenido');?>
<?=link_tag('assets/css/btn-custom.css')?>
<div class='container-fluid py-4'>
    <div class="card">
        <div class="card-body">
            <?php if (session('success')): ?>
            <?=$this->include('errors/success')?>
            <?php endif;?>
            <?php foreach ($users as $user): ?>
            <?=form_open(base_url('update-profile/') . $user['id'])?>
            <?=form_hidden('_method', 'PUT')?>
            <p class="text-uppercase text-sm">Información del usuario</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <?=form_label('Nombre(s)', 'name', ['class' => 'form-control-label'])?>
                        <?=form_input(['type' => 'text', 'class' => session('list.name') ? 'form-control is-invalid' : 'form-control', 'id' => 'name', 'value' => old('name', $user['nombre']), 'name' => 'name'])?>
                        <div id="userFeedback" class="invalid-feedback">
                            <?=session('list.name')?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?=form_label('Apellido paterno', 'paternal-name', ['class' => 'form-control-label'])?>
                        <?=form_input(['type' => 'text', 'class' => session('list.paternal-name') ? 'form-control is-invalid' : 'form-control', 'id' => 'paternal-name', 'name' => 'paternal-name', 'value' => old('paternnal-name', $user['apepat'])])?>
                        <div id="userFeedback" class="invalid-feedback">
                            <?=session('list.paternal-name')?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?=form_label('Apellido materno', 'maternal-name', ['class' => 'form-control-label'])?>
                        <?=form_input(['type' => 'text', 'class' => session('list.maternal-name') ? 'form-control is-invalid' : 'form-control', 'id' => 'maternal-name', 'name' => 'maternal-name', 'value' => old('maternal-name', $user['apemat'])])?>
                        <div id="userFeedback" class="invalid-feedback">
                            <?=session('list.maternal-name')?>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="horizontal dark">
            <p class="text-uppercase text-sm">Información de la cuenta</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <?=form_label('Nombre de usuario', 'username', ['class' => 'form-control-label'])?>
                        <?=form_input(['type' => 'text', 'class' => session('list.username') ? 'form-control is-invalid' : 'form-control', 'id' => 'username', 'name' => 'username', 'value' => old('username', $user['usuario'])])?>
                        <div id="userFeedback" class="invalid-feedback">
                            <?=session('list.user')?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <?=form_label('Correo electronico', 'email', ['class' => 'form-control-label'])?>
                        <?=form_input(['type' => 'text', 'class' => session('list.email') ? 'form-control is-invalid' : 'form-control', 'id' => 'email', 'name' => 'email', 'value' => old('email', $user['email'])])?>
                        <div id="userFeedback" class="invalid-feedback">
                            <?=session('list.email')?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <?=form_label('Contraseña', 'password', ['class' => 'form-control-label'])?>
                        <?=form_input(['type' => 'password', 'class' => session('list.password') ? 'form-control is-invalid' : 'form-control', 'id' => 'password', 'name' => 'password'])?>
                        <div id="userFeedback" class="invalid-feedback">
                            <?=session('list.password')?>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="horizontal dark">
            <p class="text-uppercase text-sm">Información de contacto</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <?=form_label('Direccion', 'address', ['class' => 'form-control-label'])?>
                        <?=form_input(['type' => 'text', 'class' => session('list.address') ? 'form-control is-invalid' : 'form-control', 'id' => 'address', 'name' => 'address', 'value' => old('address', $user['direccion'])])?>
                        <div id="userFeedback" class="invalid-feedback">
                            <?=session('list.address')?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?=form_label('Telefono', 'phone', ['class' => 'form-control-label'])?>
                        <?=form_input(['type' => 'tel', 'class' => session('list.phone') ? 'form-control is-invalid' : 'form-control', 'id' => 'phone', 'name' => 'phone', 'value' => old('phone', $user['telefono'])])?>
                        <div id="userFeedback" class="invalid-feedback">
                            <?=session('list.phone')?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4"></div>
                <div class="col-md-4 text-center">
                    <div class="mb-3">
                        <?=form_submit('send', 'Guardar los datos', ['class' => 'btn-custom btn bg-gradient-primary rounded-pill rounded-5 btn-sm shadow-lg px-4 py-2'])?>
                    </div>

                </div>
                <div class="col-md-4"></div>
            </div>
            <?=form_close()?>
            <?php endforeach;?>
        </div>
    </div>
</div class='container'>
<?=$this->endSection();?>