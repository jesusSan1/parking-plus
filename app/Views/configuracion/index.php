<?=$this->extend('layouts\dashboard');?>
<?=$this->section('titulo');?>
Configuraciones generales
<?=$this->endSection();?>
<?=$this->section('contenido');?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <?=form_open('')?>
                <?php foreach ($data as $setting): ?>
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <?=anchor(base_url('dashboard'), 'Regresar', ['class' => 'btn btn-secondary btn-sm ms-auto'])?>
                        <?=form_submit('guardar', 'Guardar', ['class' => 'btn btn-primary btn-sm ms-3'])?>
                    </div>
                    <?php if (session('success')): ?>
                    <?=$this->include('errors\success')?>
                    <?php endif;?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <?=form_label('Costo por hora', 'cost', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'text', 'name' => 'cost', 'id' => 'cost', 'class' => session('list.cost') ? 'form-control is-invalid' : 'form-control', 'value' => set_value('cost', $setting['costo_general']), 'required' => true])?>
                                <div class="invalid-feedback">
                                    <?=session('list.cost')?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <?=form_label('Redondear', 'round', ['class' => 'form-control-label'])?>
                                <div class="mb-3">
                                    <select class="form-select" name="round" id="round">
                                        <option selected class="opt" value="<?=$setting['tolerancia']?>">
                                            <?=$setting['tolerancia'] == '0' || $setting['tolerancia'] == null ? 'Seleccionar' : $setting['tolerancia'] . ' minutos'?>
                                        <option value="15" <?=set_select('round', 15)?>>15 minutos</option>
                                        <option value="30" <?=set_select('round', 30)?>>30 minutos</option>
                                        <option value="45" <?=set_select('rond', 45)?>>45 minutos</option>
                                        <option value="60" <?=set_select('round', 60)?>>60 minutos</option>
                                    </select>
                                </div>
                                <div class="invalid-feedback">
                                    <?=session('list.round')?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <?=form_label('Tolerancia', 'tolerance', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'text', 'name' => 'tolerance', 'id' => 'tolerance', 'class' => session('list.tolerance') ? 'form-control is-invalid' : 'form-control', 'value' => set_value('tolerance', $setting['tiempo']), 'required' => true])?>
                                <div class="invalid-feedback">
                                    <?=session('list.tolerance')?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
                <?=form_close()?>
            </div>
        </div>
    </div>
</div>
<?=script_tag('assets/js/ocultarClases.js')?>
<?=$this->endSection();?>