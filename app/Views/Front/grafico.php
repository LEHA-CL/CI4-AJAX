<?= $this->extend('Front/layout/main2') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col">
        <h2>Grafico</h2>
        <select id="mySelect" class="form-select form-select-sm" aria-label=".form-select-sm example" onchange="myFunction()">
            <option selected>Seleccionar indicador</option>
            <option value="uf">UF</option>
            <option value="dolar">DOLAR</option>
            <option value="euro">EURO</option>
            <option value="utm">UTM</option>
            <option value="ivp">IPV</option>
            <option value="dolar_intercambio">Dolar intercambio</option>
            <option value="ipc">IPC</option>
            <option value="tpm">TPM</option>
            <option value="imacec">IMACEC</option>
            <option value="libra_cobre">Libra cobre</option>
            <option value="tasa_desempleo">Tasa de desemplo</option>
            <option value="bitcoin">BITCOIN</option>
        </select>
        <canvas id="myChart" style="position: relative; height: 40vh; width: 80vw;"></canvas>
    </div>
</div>
<?= $this->endSection() ?>