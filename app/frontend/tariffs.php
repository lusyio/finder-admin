<div class="row">
    <div class="col-12 bg-custom pb-5 base-frame">
        <div class="row">
            <div class="col-12">
                <p class="h1 text-center mt-3">Тарифы</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6 col-12">
                <?php foreach ($tariffs as $tariff): ?>
                <div class="mb-3">
                <p class="m-0"><?= $tariff['tariff_name'] ?></p>
                <label for="tariffCost<?= $tariff['id'] ?>">Стоимость (руб)</label><input class="form-control w-50 tariff-cost-input" id="tariffCost<?= $tariff['id'] ?>" type="number" data-tariff-name="<?= $tariff['tariff_name'] ?>" data-tariff-id="<?= $tariff['id'] ?>" data-current-cost="<?= $tariff['cost'] ?>" value="<?= $tariff['cost'] ?>">
                </div>
                <?php endforeach; ?>
                <button id="saveTariffs" class="btn btn-outline-primary">Сохранить</button>
            </div>
        </div>
    </div>
</div>