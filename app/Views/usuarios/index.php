<?=$this->extend('layouts\dashboard');?>
<?=$this->section('titulo');?>
Crear usuarios gerentes
<?=$this->endSection();?>
<?=$this->section('contenido');?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <?=form_open('')?>
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <?=anchor(base_url('dashboard'), 'Regresar', ['class' => 'btn btn-secondary btn-sm ms-auto'])?>
                        <?=form_submit('guardar', 'Guardar', ['class' => 'btn btn-primary btn-sm ms-3'])?>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-uppercase text-sm">Información del usuario</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <?=form_label('Usuario', 'user', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'text', 'name' => 'user', 'id' => 'user', 'class' => 'form-control', 'value' => old('user')])?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?=form_label('Correo electronico', 'email', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'email', 'name' => 'email', 'id' => 'email', 'class' => 'form-control', 'value' => old('email')])?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?=form_label('Nombre', 'name', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'text', 'name' => 'name', 'id' => 'name', 'class' => 'form-control', 'value' => old('name')])?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?=form_label('Apellido paterno', 'apepat', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'text', 'name' => 'apepat', 'id' => 'apepat', 'class' => 'form-control', 'value' => old('apepat')])?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?=form_label('Apellido materno', 'apemat', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'text', 'name' => 'apemat', 'id' => 'apemat', 'class' => 'form-control', 'value' => old('apemat')])?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?=form_label('Contraseña', 'password', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'password', 'name' => 'password', 'id' => 'password', 'class' => 'form-control'])?>
                            </div>
                        </div>
                    </div>
                    <hr class="horizontal dark">
                    <p class="text-uppercase text-sm">Información de contacto</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <?=form_label('Dirección', 'address', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'text', 'name' => 'address', 'id' => 'address', 'class' => 'form-control', 'value' => old('address')])?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?=form_label('Telefono', 'phone', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'tel', 'name' => 'phone', 'id' => 'phone', 'class' => 'form-control', 'value' => old('phone')])?>
                            </div>
                        </div>
                    </div>
                </div>
                <?=form_close()?>
            </div>
        </div>
    </div>
</div>
<?=$this->endSection();?>