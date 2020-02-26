        <div class="row">
            <div class="col-12">
                <p class="h1 mt-3">Города</p>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-6">
                <p>
                    <button class="btn btn-outline-primary" type="button" data-toggle="collapse"
                            data-target="#addCityCollapse"
                            aria-expanded="false" aria-controls="addCityCollapse">
                        Добавить город
                    </button>
                </p>
                <div class="collapse" id="addCityCollapse">
                    <div class="form-group">
                        <label for="city" class="form">Город</label>
                        <input type="text" class="form-control" id="city"
                               placeholder="Город">
                    </div>
                    <div class="form-group">
                        <label for="region" class="form">Регион</label>
                        <select name="region" class="form-control" id="region">
                            <option value="0" selected disabled>Выберите регион</option>
                            <?php foreach ($regions as $region): ?>
                                <option value="<?= $region['region_id'] ?>"><?= $region['region_name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="country" class="form">Страна</label>
                        <select name="country" class="form-control" id="country" disabled>
                            <option value="1" selected>Россия</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" id="addCity">Добавить</button>
                    <div class="alert alert-success" role="alert" id="cityAddSuccess" style="display: none">Город успешно добавлен</div>
                </div>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-12">
                <table data-toggle="table" data-pagination="true" data-locale="ru-RU" data-auto-refresh="true" id="citiesTable">
                    <thead>
                    <tr>
                        <th data-sortable="true" data-field="cityId">ID</th>
                        <th data-sortable="true" data-field="cityName">Город</th>
                        <th data-sortable="true" data-field="regionName">Регион</th>
                        <th data-sortable="true" data-field="regionId">ID региона</th>
                    </tr>
                    </thead>
                    <tbody id="citiesTableBody">
                    <?php foreach ($cities as $city): ?>
                        <tr>
                            <td><?= $city['city_id'] ?></td>
                            <td><?= $city['city_name'] ?></td>
                            <td><?= $city['region_name'] ?></td>
                            <td><?= $city['region_id'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-12">
                <button class="btn btn-outline-primary" type="button" data-toggle="collapse"
                        data-target="#csvCitiesCollapse"
                        aria-expanded="false" aria-controls="csvCitiesCollapse">
                    Показать CSV всех городов
                </button>
                <button class="btn btn-outline-primary" type="button" data-toggle="collapse"
                        data-target="#csvRegionsCollapse"
                        aria-expanded="false" aria-controls="csvRegionsCollapse">
                    Показать CSV всех регионов
                </button>
            </div>
        </div>
        <div class="row p-3">
            <div class="collapse col-6" id="csvCitiesCollapse">
                <p>id города, название города, id региона</p>

                <p>
                <button class="btn btn-outline-secondary select-csv" data-id-to-select="csvCities">Выделить всё</button>
                </p>
                <code id="csvCities">
                    <?php foreach ($cities as $city): ?>
                    <?= $city['city_id'] ?>,<?= $city['city_name'] ?>,<?= $city['region_id'] ?><br>
                    <?php endforeach;?>
                </code>
            </div>
            <div class="collapse col-6" id="csvRegionsCollapse">
                <p>id региона, название региона, id страны (Россия - id 1)</p>
                <p>
                <button class="btn btn-outline-secondary select-csv" data-id-to-select="csvRegions">Выделить всё</button>
                </p>
                <code id="csvRegions">
                    <?php foreach ($regions as $region): ?>
                    <?= $region['region_id'] ?>,<?= $region['region_name'] ?>,<?= $region['country_id'] ?><br>
                    <?php endforeach;?>
                </code>
            </div>