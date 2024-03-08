<?=$this->extend('layouts\dashboard');?>
<?=$this->section('titulo');?>
Perfil de usuario
<?=$this->endSection();?>
<?=$this->section('contenido');?>
<div class="container-fluid py-4">
    <?php foreach ($datos as $perfil): ?>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <?=form_open('')?>
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <?=anchor(base_url('dashboard'), 'Regresar', ['class' => 'btn btn-secondary btn-sm ms-auto'])?>
                        <?=form_submit('guardar', 'Editar', ['class' => 'btn btn-info btn-sm ms-3'])?>
                    </div>
                    <?php if (session('success')): ?>
                    <?=$this->include('errors\success')?>
                    <?php endif;?>
                </div>
                <div class="card-body">
                    <p class="text-uppercase text-sm">Información del usuario</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <?=form_label('Usuario', 'user', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'text', 'name' => 'user', 'id' => 'user', 'class' => session('list.user') ? 'form-control is-invalid' : 'form-control', 'value' => set_value('name', $perfil['usuario'])])?>
                                <div class="invalid-feedback">
                                    <?=session('list.user')?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?=form_label('Correo electronico', 'email', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'email', 'name' => 'email', 'id' => 'email', 'class' => session('list.email') ? 'form-control is-invalid' : 'form-control', 'value' => set_value('email', $perfil['email'])])?>
                                <div class="invalid-feedback">
                                    <?=session('list.email')?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?=form_label('Nombre', 'name', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'text', 'name' => 'name', 'id' => 'name', 'class' => session('list.name') ? 'form-control is-invalid' : 'form-control', 'value' => set_value('name', $perfil['nombre'])])?>
                                <div class="invalid-feedback">
                                    <?=session('list.name')?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?=form_label('Apellido paterno', 'apepat', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'text', 'name' => 'apepat', 'id' => 'apepat', 'class' => session('list.apepat') ? 'form-control is-invalid' : 'form-control', 'value' => set_value('apepat', $perfil['apepat'])])?>
                                <div class="invalid-feedback">
                                    <?=session('list.apepat')?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?=form_label('Apellido materno', 'apemat', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'text', 'name' => 'apemat', 'id' => 'apemat', 'class' => session('list.apemat') ? 'form-control is-invalid' : 'form-control', 'value' => set_value('apemat', $perfil['apemat'])])?>
                                <div class="invalid-feedback">
                                    <?=session('list.apemat')?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?=form_label('Nueva contraseña', 'password', ['class' => 'form-control-label'])?>
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
                                <?=form_input(['type' => 'text', 'name' => 'address', 'id' => 'address', 'class' => session('list.address') ? 'form-control is-invalid' : 'form-control', 'value' => set_value('address', $perfil['direccion'])])?>
                                <div class="invalid-feedback">
                                    <?=session('list.address')?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?=form_label('Telefono', 'phone', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'tel', 'name' => 'phone', 'id' => 'phone', 'class' => session('list.phone') ? 'form-control is-invalid' : 'form-control', 'value' => set_value('phone', $perfil['telefono'])])?>
                                <div class="invalid-feedback">
                                    <?=session('list.phone')?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?=form_label('Foto de perfil', 'profile', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'file', 'name' => 'profile', 'id' => 'profile', 'class' => session('list.profile') ? 'form-control is-invalid' : 'form-control', 'value' => old('profile')])?>
                                <div class="invalid-feedback">
                                    <?=session('list.profile')?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?=form_close()?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-profile">
                <img src="../assets/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
                <div class="row justify-content-center">
                    <div class="col-4 col-lg-4 order-lg-2">
                        <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                            <a href="javascript:;">
                                <img src="../assets/img/team-2.jpg"
                                    class="rounded-circle img-fluid border border-2 border-white">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
                </div>
                <div class="card-body pt-0">
                    <div class="text-center mt-4">
                        <h5>
                            <?=$perfil['usuario']?>
                        </h5>
                        <div class="h6 font-weight-300">
                            <i class="ni location_pin mr-2"></i><?=$perfil['email']?>
                        </div>
                        <div class="h6 mt-4">
                            <i class="ni business_briefcase-24 mr-2"></i>
                            <?=$perfil['nombre'] . ' ' . $perfil['apepat'] . ' ' . $perfil['apemat']?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach;?>
</div>
<?=$this->endSection();?>