<?=$this->extend('layouts\dashboard');?>
<?=$this->section('titulo');?>
Tipos de vehiculos
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
                    <?php if (session('success')): ?>
                    <?=$this->include('errors\success')?>
                    <?php endif;?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <?=form_label('Tipo de vehiculo', 'type', ['class' => 'form-control-label'])?>
                                <?=form_input(['type' => 'text', 'name' => 'type', 'id' => 'type', 'class' => session('list.type') ? 'form-control is-invalid' : 'form-control', 'value' => old('type'), 'required' => true, 'autofocus' => true])?>
                                <div class="invalid-feedback">
                                    <?=session('list.type')?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?=form_close()?>
                    <div class="card">
                        <div class="table-responsive rounded">
                            <table class="table align-items-center mb-0">
                                <thead class="table-dark">
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Author</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Employed</th>
                                        <th class="text-secondary opacity-7"></th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($tipoVehiculos as $vehiculo): ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">

                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="text-xs text-secondary mb-0"><?=$vehiculo['nombre']?></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold"><?=$vehiculo['fecha_registro']?></span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                Editar
                                            </a>
                                        </td>
                                        <td class="align-middle">
                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                Eliminar
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?=$this->endSection();?>