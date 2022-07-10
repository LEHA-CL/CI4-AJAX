<?= $this->extend('Front/layout/main') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col 6">
        <a href="<?= base_url('/nuevoRegistro') ?>" class="btn btn-primary mt-1 mb-1" type="button">Nuevo registro</a>
        <table class="table table-light mt-1">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Indicador</th>
                    <th>Valor</th>
                    <th>fecha </th>
                    <th>Acciones </th>
                </tr>
            </thead>
            <tbody id="t-body">
                 <?php foreach ($indicadores as $datos) : ?>
                    <tr>
                        <td id = 'id'><?= $datos['id']; ?></td>
                        <td id = 'indicador'><?= $datos['indicador']; ?></td>
                        <td id = 'valor'><?= $datos['valor']; ?></td>
                        <td id = 'fecha'><?= $datos['fecha_ingreso']; ?></td>
                        <td><a href="<?= base_url('edit/' . $datos['id']) ?>" class="btn btn-warning" type="button">Editar</a> /
                            <button class="btn btn-danger" id="btn-delete" data-id="<?=$datos['id']?>"type="button">Borrar</button>
                        </td>
                    </tr>
                <?php endforeach; ?> 
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection('') ?>