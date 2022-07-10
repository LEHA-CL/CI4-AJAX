<?= $this->extend('Front/layout/main') ?>

<?= $this->section('content') ?>

<div clas="col 3">
    <a href="<?= base_url('/') ?>" class="btn btn-primary mt-1" type="button">Volver a los registros</a>

</div>
<div class="col ">
    <form id="frm_update" method="post">
        <input type="hidden" name="idUpdate" value="<?= $update['id'] ?>">
        <div class="form-group" id="indicadorUpdate">
            <label for="inputIndicadorUpdate" class="form-label">Indicador</label>
            <input type="text" value="<?= $update['indicador'] ?>" class="form-control" id="inputIndicadorUpdate" name="inputIndicadorUpdate" readonly>
            <div class="invalid-feedback">

            </div>
        </div>
        <div class="form-group" id="valorUpdate">
            <label for="inputValorUpdate" class="form-label">Valor UF</label>
            <input type="text" class="form-control" id="inputValorUpdate" name="inputValorUpdate" value="<?= $update['valor'] ?>">
            <div class="invalid-feedback">

            </div>
        </div>
        <div class="mb-3" id="fechaUpdate">
            <label for="inputFechaUpdate" class="form-label">Fecha UF</label>
            <input type="date" class="form-control" id="inputFechaUpdate" name="inputFechaUpdate" value="<?= $update['fecha_ingreso'] ?>">
            <div class="invalid-feedback">

            </div>
        </div>        
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>



<?= $this->endSection('') ?>