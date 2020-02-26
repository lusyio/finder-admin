
        <div class="row">
            <div class="alert alert-secondary w-75 mb-0 ml-auto mr-auto mt-3" role="alert">
                Названия здесь являются вспомогательными для разработчиков, отображаемые в приложения названия должны
                быть заложены непосредственно в исходный код приложения.
                <br>
                <i>
                    Стадия разработки: Максимальный ID элементов в категориях "Интересы" и "Как провести время" не
                    должен быть больше 60 (под элементом подразумевается интерес или способ, который не имеет
                    вложенности, например, "Легкая атлетика" или "Посетить зоопарк"). Идентификаторы больше 60 не будут
                    сохраняться при выборе их пользователями приложения, планируется поддержка до 120 элементов
                </i>
            </div>
        </div>
        <div class="row pt-5 pb-3">
            <div class="col">
                <div class="pt-3">
                    <span class="h3 dashed-bottom" data-toggle="collapse" href="#collapseInterests">Интересы</span>
                </div>
            </div>
        </div>
        <div class="collapse" id="collapseInterests">
            <div class="category-list">
                <div class="row">
                    <div class="col border-bottom pb-3">
                        <span style="margin-right: 13px;">ID</span>
                        <span>Название</span>
                    </div>
                </div>
                <?php foreach ($interestList as $categoryId => $interest): ?>
                    <div class="row pt-3 pb-3 border-top">
                        <div class="col">
                            <span class="for-id mr-2"><?= $categoryId ?></span>
                            <span class="h5 category-name dashed-bottom" data-toggle="collapse"
                                  href="#in<?= $categoryId ?>"><?= $interest['name'] ?></span>
                            <input type="text" class="d-none w-50 form-control category-name-input"
                                   value="<?= $interest['name'] ?>">
                            <button class="ml-2 btn btn-sm btn-light category-control edit-category-name"><i
                                        class="fas fa-pencil-alt"></i></button>
                            <button class="ml-2 btn btn-sm btn-outline-danger border-0 category-control remove-category">
                                <i
                                        class="fas fa-minus-circle" title="Удалить категорию"></i></button>
                            <button data-category-id="<?= $categoryId ?>" data-category-type="interest"
                                    class="btn btn-light category-edit-control update-edit-category d-none">
                                Сохранить
                            </button>
                            <button class="btn btn-light category-edit-control cancel-edit-category d-none">
                                Отменить
                            </button>
                            <div class="collapse" id="in<?= $categoryId ?>">
                                <ul class="list-unstyled item-list">
                                    <?php foreach ($interest['items'] as $itemId => $item): ?>
                                        <li class="pt-1 pb-1 mt-1 mb-1 ml-3">
                                            <span class="for-id mr-2"><?= $itemId ?></span>
                                            <span class="item-name"><?= $item['name'] ?></span>
                                            <input type="text" class="d-none w-50 form-control item-name-input"
                                                   value="<?= $item['name'] ?>">
                                            <button class="btn btn-light item-control edit-item-name"><i
                                                        class="fas fa-pencil-alt"></i>
                                            </button>
                                            <button class="btn btn-light item-control remove-item"><i
                                                        class="fas fa-minus-circle"></i>
                                            </button>
                                            <button data-item-id="<?= $itemId ?>"
                                                    data-item-category="<?= $categoryId ?>"
                                                    data-item-type="interest"
                                                    class="btn btn-light item-edit-control update-item-name d-none">
                                                Сохранить
                                            </button>
                                            <button class="btn btn-light item-edit-control cancel-edit-item d-none">
                                                Отменить
                                            </button>
                                        </li>
                                    <?php endforeach; ?>

                                </ul>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control add-item-input"
                                                   placeholder="Название элемента">
                                            <div class="input-group-append">
                                                <button data-category-id="<?= $categoryId ?>"
                                                        data-category-type="interest"
                                                        class="btn btn-outline-secondary add-item" type="button">
                                                    Добавить элемент
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="row mt-3">
                <div class="col-lg-6 offset-lg-3 col-12 offset-0">
                    <div class="input-group">
                        <input type="text" class="form-control add-category-input"
                               placeholder="Название категории">
                        <div class="input-group-append">
                            <button data-category-type="interest" class="btn btn-outline-secondary add-category"
                                    type="button">
                                Добавить категорию
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-3 pb-3 border-top">
            <div class="col">
                <span class="h3 dashed-bottom" data-toggle="collapse" href="#collapsePastime">Как провести время?</span>
            </div>
        </div>
        <div class="collapse" id="collapsePastime">
            <div class="category-list">
                <div class="row">
                    <div class="col border-bottom pb-3">
                        <span style="margin-right: 13px;">ID</span>
                        <span>Название</span>
                    </div>
                </div>
                <?php foreach ($timeSpendList as $categoryId => $timeSpend): ?>
                    <div class="row pt-3 pb-3 border-top">
                        <div class="col">
                            <span class="for-id mr-2"><?= $categoryId ?></span>
                            <span class="h5 category-name dashed-bottom" data-toggle="collapse"
                                  href="#ts<?= $categoryId ?>"><?= $timeSpend['name'] ?></span>
                            <input type="text" class="d-none w-50 form-control category-name-input"
                                   value="<?= $timeSpend['name'] ?>">
                            <button class="ml-2 btn btn-sm btn-light category-control edit-category-name"><i
                                        class="fas fa-pencil-alt"></i></button>
                            <button class="ml-2 btn btn-sm btn-outline-danger border-0 category-control remove-category">
                                <i
                                        class="fas fa-minus-circle" title="Удалить категорию"></i></button>
                            <button data-category-id="<?= $categoryId ?>" data-category-type="timespend"
                                    class="btn btn-light category-edit-control update-edit-category d-none">
                                Сохранить
                            </button>
                            <button class="btn btn-light category-edit-control cancel-edit-category d-none">
                                Отменить
                            </button>
                            <div class="collapse" id="ts<?= $categoryId ?>">
                                <ul class="list-unstyled item-list">
                                    <?php foreach ($timeSpend['items'] as $itemId => $item): ?>
                                        <li class="pt-1 pb-1 mt-1 mb-1 ml-3">
                                            <span class="for-id mr-2"><?= $itemId ?></span>
                                            <span class="item-name"><?= $item['name'] ?></span>
                                            <input type="text" class="d-none w-50 form-control item-name-input"
                                                   value="<?= $item['name'] ?>">

                                            <button class="btn btn-light item-control edit-item-name"><i
                                                        class="fas fa-pencil-alt"></i>
                                            </button>
                                            <button class="btn btn-light item-control remove-item"><i
                                                        class="fas fa-minus-circle"></i>
                                            </button>
                                            <button data-item-id="<?= $itemId ?>"
                                                    data-item-category="<?= $categoryId ?>" data-item-type="timespend"
                                                    class="btn btn-light item-edit-control update-item-name d-none">
                                                Сохранить
                                            </button>
                                            <button class="btn btn-light item-edit-control cancel-edit-item d-none">
                                                Отменить
                                            </button>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control add-item-input"
                                                   placeholder="Название элемента">
                                            <div class="input-group-append">
                                                <button data-category-id="<?= $categoryId ?>"
                                                        data-category-type="interest"
                                                        class="btn btn-outline-secondary" type="button" id="addElement">
                                                    Добавить элемент
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="row mt-3">
                <div class="col-lg-6 offset-lg-3 col-12 offset-0">
                    <div class="input-group">
                        <input type="text" class="form-control add-category-input" placeholder="Название категории">
                        <div class="input-group-append">
                            <button data-category-type="timespend" class="btn btn-outline-secondary add-category"
                                    type="button">
                                Добавить категорию
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--шаблон элемента-->
<li class="pt-1 pb-1 mt-1 mb-1 ml-3 d-none item-template">
    <span class="for-id mr-2">{{itemId}}</span>
    <span class="item-name">{{itemName}}</span>
    <input type="text" class="d-none w-50 form-control item-name-input"
           value="{{itemName}}">
    <button class="btn btn-light item-control edit-item-name"><i
                class="fas fa-pencil-alt"></i>
    </button>
    <button class="btn btn-light item-control remove-item"><i
                class="fas fa-minus-circle"></i>
    </button>
    <button data-item-id="{{itemId}}" data-item-category="{{categoryId}}"
            data-item-type="{{itemType}}"
            class="btn btn-light item-edit-control update-item-name d-none">
        Сохранить
    </button>
    <button class="btn btn-light item-edit-control cancel-edit-item d-none">
        Отменить
    </button>
</li>
<!--шаблон категории -->
<div class="row pt-3 pb-3 border-top d-none category-template">
    <div class="col">
        <span class="for-id mr-2">{{categoryId}}</span>
        <span class="h5 category-name dashed-bottom" data-toggle="collapse"
              href="#in{{categoryId}}">{{categoryName}}</span>
        <input type="text" class="d-none w-50 form-control category-name-input"
               value="{{categoryName}}">
        <button class="ml-2 btn btn-sm btn-light category-control edit-category-name"><i
                    class="fas fa-pencil-alt"></i></button>
        <button class="ml-2 btn btn-sm btn-outline-danger border-0 category-control remove-category"><i
                    class="fas fa-minus-circle" title="Удалить категорию"></i></button>
        <button data-category-id="{{categoryId}}" data-category-type="{{categoryType}}"
                class="btn btn-light category-edit-control update-edit-category d-none">
            Сохранить
        </button>
        <button class="btn btn-light category-edit-control cancel-edit-category d-none">
            Отменить
        </button>
        <div class="collapse" id="in{{categoryId}}">
            <ul class="list-unstyled item-list">
            </ul>
            <div class="row">
                <div class="col-12">
                    <div class="input-group">
                        <input type="text" class="form-control add-item-input"
                               placeholder="Название элемента">
                        <div class="input-group-append">
                            <button data-category-id="{{categoryId}}" data-category-type="{{categoryType}}"
                                    class="btn btn-outline-secondary add-item" type="button">
                                Добавить элемент
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>