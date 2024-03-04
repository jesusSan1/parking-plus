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
                        <?=form_submit('guardar', 'Guardar', ['class' => 'btn btn-primary btn-sm ms-auto'])?>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-uppercase text-sm">Información del usuario</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Usuario</label>
                                <input class="form-control" type="text" value="lucky.jesse">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Correo electronico</label>
                                <input class="form-control" type="email" value="jesse@example.com">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Nombre</label>
                                <input class="form-control" type="text" value="Jesse">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Apellido paterno</label>
                                <input class="form-control" type="text" value="Lucky">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Apellido materno</label>
                                <input class="form-control" type="text" value="Lucky">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Contraseña</label>
                                <input class="form-control" type="text" value="Lucky">
                            </div>
                        </div>
                    </div>
                    <hr class="horizontal dark">
                    <p class="text-uppercase text-sm">Información de contacto</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Dirección</label>
                                <input class="form-control" type="text"
                                    value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Telefono</label>
                                <input class="form-control" type="tel" value="">
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