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
                                <?=form_input(['type' => 'text', 'name' => 'user', 'id' => 'user', 'class' => session('list.user') ? 'form-control is-invalid' : 'form-control', 'value' => old('user')])?>
                                <div class="invalid-feedback">
                                    <?=session('list.user')?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?=form_label('Correo electronico', 'email', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'email', 'name' => 'email', 'id' => 'email', 'class' => session('list.email') ? 'form-control is-invalid' : 'form-control', 'value' => old('email')])?>
                                <div class="invalid-feedback">
                                    <?=session('list.email')?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?=form_label('Nombre', 'name', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'text', 'name' => 'name', 'id' => 'name', 'class' => session('list.name') ? 'form-control is-invalid' : 'form-control', 'value' => old('name')])?>
                                <div class="invalid-feedback">
                                    <?=session('list.name')?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?=form_label('Apellido paterno', 'apepat', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'text', 'name' => 'apepat', 'id' => 'apepat', 'class' => session('list.apepat') ? 'form-control is-invalid' : 'form-control', 'value' => old('apepat')])?>
                                <div class="invalid-feedback">
                                    <?=session('list.apepat')?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?=form_label('Apellido materno', 'apemat', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'text', 'name' => 'apemat', 'id' => 'apemat', 'class' => session('list.apemat') ? 'form-control is-invalid' : 'form-control', 'value' => old('apemat')])?>
                                <div class="invalid-feedback">
                                    <?=session('list.apemat')?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?=form_label('Contraseña', 'password', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'password', 'name' => 'password', 'id' => 'password', 'class' => session('list.password') ? 'form-control is-invalid' : 'form-control'])?>
                                <div class="invalid-feedback">
                                    <?=session('list.password')?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="horizontal dark">
                    <p class="text-uppercase text-sm">Información de contacto</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <?=form_label('Dirección', 'address', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'text', 'name' => 'address', 'id' => 'address', 'class' => session('list.address') ? 'form-control is-invalid' : 'form-control', 'value' => old('address')])?>
                                <div class="invalid-feedback">
                                    <?=session('list.address')?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?=form_label('Telefono', 'phone', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'tel', 'name' => 'phone', 'id' => 'phone', 'class' => session('list.phone') ? 'form-control is-invalid' : 'form-control', 'value' => old('phone')])?>
                                <div class="invalid-feedback">
                                    <?=session('list.phone')?>
                                </div>
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