<div class="row">
    <div class="col-12 bg-custom pb-5" >
        <div class="row">
            <div class="col-12">
                <p class="h1 text-center mt-3">Таблицы соответствия идентификаторов</p>
                <div class="alert alert-secondary w-75 mb-0 ml-auto mr-auto mt-5 mb-3" role="alert">
                    <i>
                        Стадия разработки: идентификаторы могут поменяться
                    </i>
                </div>
            </div>

        </div>
        <div class="row p-3">
            <div class="col-6">
                <p class="h3 pl-5">Интересы</p>
                <table class="table table-striped mt-3">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Имя</th>
                        <th scope="col">ID категории</th>
                        <!--                        <th scope="col">Имя категории</th>-->
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($interests as $interest): ?>
                        <tr>
                            <th scope="row"><?= $interest['id'] ?></th>
                            <td><?= $interest['name'] ?></td>
                            <td><?= $interest['catId'] ?></td>
                            <!--                            <td>--><? //= $interest['catName'] ?><!--</td>-->
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-6">
                <p class="h3 pl-5">Категории интересов</p>
                <table class="table table-striped mt-3">
                    <thead>
                    <tr>

                        <th scope="col">ID категории</th>
                        <th scope="col">Имя категории</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($interestsCategory as $category): ?>
                        <tr>
                            <th scope="row"><?= $category['id'] ?></th>
                            <td><?= $category['name'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-5 p-3">
            <div class="col-6">
                <p class="h3 pl-5">Как провести время</p>
                <table class="table table-striped mt-3">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Имя</th>
                        <th scope="col">ID категории</th>
                        <!--                        <th scope="col">Имя категории</th>-->
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($timeSpends as $timeSpend): ?>
                        <tr>
                            <th scope="row"><?= $timeSpend['id'] ?></th>
                            <td><?= $timeSpend['name'] ?></td>
                            <td><?= $timeSpend['catId'] ?></td>
                            <!--                            <td>--><? //= $timeSpend['catName'] ?><!--</td>-->
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-6">
                <p class="h3 pl-5">Категории Как провести время</p>
                <table class="table table-striped mt-3">
                    <thead>
                    <tr>
                        <th scope="col">ID категории</th>
                        <th scope="col">Имя категории</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($timeSpendsCategory as $category): ?>
                        <tr>
                            <th scope="row"><?= $category['id'] ?></th>
                            <td><?= $category['name'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-5 p-3">
            <?php foreach ($simpleEnums as $key => $enum): ?>
                <div class="col-3">
                    <p class="h3 pl-5"><?= $enumNames[$key]; ?></p>
                    <table class="table table-striped mt-3">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Имя</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($enum as $row): ?>
                            <tr>
                                <th scope="row"><?= $row['id'] ?></th>
                                <td><?= $row['name'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>