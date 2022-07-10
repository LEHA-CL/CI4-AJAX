<?= $this->extend('Front/layout/main') ?>

<?= $this->section('content') ?>
<div clas="col 3">
    <a href="<?= base_url('/') ?>" class="btn btn-primary mt-1" type="button">Volver a los registros</a>

</div>
<div class="col ">
    <form id="frm_create" method="post">        
            <div class="form-group" id="divIndicador">
                <label for="inputIndicador" class="form-label">Indicador</label>
                <input type="text" class="form-control" id="inputIndicador" name="inputIndicador" value="UF" readonly>
                <div class="invalid-feedback">

                </div>
            </div>

            <!-- <p class="text-danger" ><?= session('errors.inputIndicador') ?></p> -->
            <div class="form-group" id="Valor">
                <label for="inputValor" class="form-label">Valor UF</label>
                <input type="text" class="form-control" id="inputValor" name="inputValor">
                <div class="invalid-feedback">

                </div>
            </div>
            <!-- <p class="text-danger" ><?= session('errors.inputValor') ?></p> -->
            <div class="mb-3" id="divFecha">
                <label for="inputFecha" class="form-label">Fecha UF</label>
                <input type="date" class="form-control" id="inputFecha" name="inputFecha">
                <div class="invalid-feedback">

                </div>
            </div>
            <!-- <p class="text-danger" ><?= session('errors.inputFecha') ?></p> -->
            <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
<?= $this->endSection('') ?>