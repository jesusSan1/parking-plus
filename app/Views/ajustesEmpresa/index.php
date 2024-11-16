<?=$this->extend('layouts/dashboard');?>
<?=$this->section('titulo');?>
Ajustes de empresa
<?=$this->endSection();?>
<?=$this->section('contenido');?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?=form_open()?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <?=form_label('Nombre', 'name', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'text', 'class' => session('list.name') ? 'form-control is-invalid' : 'form-control', 'value' => old('name'), 'id' => 'name', 'name' => 'name'])?>
                                <div id="userFeedback" class="invalid-feedback">
                                    <?=session('list.name')?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?=form_label('Correo electronico', 'email', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'email', 'class' => session('list.email') ? 'form-control is-invalid' : 'form-control', 'value' => old('email'), 'id' => 'email', 'name' => 'email'])?>
                                <div id="userFeedback" class="invalid-feedback">
                                    <?=session('list.email')?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?=form_label('Telefono', 'phone', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'text', 'id' => 'phone', 'class' => session('list.phone') ? 'form-control is-invalid' : 'form-control', 'value' => old('phone'), 'name' => 'phone'])?>
                                <div id="userFeedback" class="invalid-feedback">
                                    <?=session('list.phone')?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?=form_label('Dirección', 'address', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'text', 'id' => 'address', 'class' => session('list.address') ? 'form-control is-invalid' : 'form-control', 'value' => old('address'), 'name' => 'address'])?>
                                <div id="userFeedback" class="invalid-feedback">
                                    <?=session('list.address')?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-4"></div>
                        <div class="col-md-4 text-center">
                            <div class="form-group">
                                <?= form_submit('send', 'Guardar los datos', ['class' => 'btn bg-gradient-primary rounded-pill rounded-5 btn-sm shadow-lg']) ?>
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    <?=form_close()?>
                </div>
            </div>
        </div>
    </div>
</div>
<?=$this->endSection();?>