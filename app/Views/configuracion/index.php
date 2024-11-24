<?=$this->extend('layouts/dashboard');?>
<?=$this->section('titulo');?>
Configuración
<?=$this->endSection();?>
<?=$this->section('contenido');?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php if (session('success')): ?>
                    <?=$this->include('errors/success')?>
                    <?php endif;?>
                    <?php foreach ($configuraciones as $configuracion): ?>
                    <?=form_open(base_url('update-configuracion/') . $configuracion['id'])?>
                    <?=form_hidden('_method', 'PUT')?>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <?=form_label('Costo general ($)', 'general-cost', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'text', 'class' => session('list.general-cost') ? 'form-control is-invalid' : 'form-control', 'value' => old('general-cost', $configuracion['costo_general']), 'id' => 'general-cost', 'name' => 'general-cost'])?>
                                <div id="userFeedback" class="invalid-feedback">
                                    <?=session('list.general-cost')?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?=form_label('Tiempo (minutos)', 'time', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'text', 'class' => session('list.time') ? 'form-control is-invalid' : 'form-control', 'value' => old('time', $configuracion['tiempo']), 'id' => 'time', 'name' => 'time'])?>
                                <div id="userFeedback" class="invalid-feedback">
                                    <?=session('list.time')?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?=form_label('Tolerancia (minutos)', 'tolerance', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'text', 'id' => 'tolerance', 'class' => session('list.tolerance') ? 'form-control is-invalid' : 'form-control', 'value' => old('tolerance', $configuracion['tolerancia']), 'name' => 'tolerance'])?>
                                <div id="userFeedback" class="invalid-feedback">
                                    <?=session('list.tolerance')?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4 text-center">
                            <div class="form-group">
                                <?=form_submit('send', 'Guardar los datos', ['class' => 'btn bg-gradient-primary rounded-pill rounded-5 btn-sm shadow-lg'])?>
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    <?=form_close()?>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</div>
<?=$this->endSection();?>