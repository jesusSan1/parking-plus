<?= $this->extend('layouts\dashboard'); ?>
<?= $this->section('titulo'); ?>
Editar tipo de vehiculo
<?= $this->endSection(); ?>
<?= $this->section('contenido'); ?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <?=form_open('')?>
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <?=anchor(base_url('dashboard'), 'Regresar', ['class' => 'btn btn-secondary btn-sm ms-auto'])?>
                        <?=form_submit('guardar', 'Editar', ['class' => 'btn btn-success btn-sm ms-3'])?>
                    </div>
                    <?php if (session('success')): ?>
                    <?=$this->include('errors\success')?>
                    <?php endif;?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <?php foreach($data as $tipoVehiculo): ?>
                                <?=form_label('Tipo de vehiculo', 'type', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'text', 'name' => 'type', 'id' => 'type', 'class' => session('list.type') ? 'form-control is-invalid' : 'form-control', 'value' => set_value('type', $tipoVehiculo['nombre']), 'required' => true, 'autofocus' => true])?>
                                <div class="invalid-feedback">
                                    <?=session('list.type')?>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <?=form_close()?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>