<div class="row">
    <div class="col-12 bg-custom pb-5 base-frame">
        <div class="row">
            <div class="col-12">
                <p class="h1 text-center mt-3">Анкета пользователя</p>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-6">
                <form method="get">
                    <div class="form-group">
                        <label for="userIdInput" class="form">ID пользователя</label>
                        <input type="text" name="user" class="form-control" id="userIdInput"
                               placeholder="id пользователя">
                    </div>
                    <button type="submit" class="btn btn-primary">Перейти</button>
                </form>
            </div>
        </div>
        <?php if (!is_null($userData)): ?>
            <div class="row p-3">
                <div class="col-6">
                    <p class="h3 pl-5"><?= $userData['user_name'] ?></p>
                    <table class="table table-striped mt-3">
                        <tbody>
                        <tr>
                            <th scope="row">Телефон</th>
                            <td><?= $userData['user_phone'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td><?= $userData['user_email'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Пол</th>
                            <td><?= $userData['user_sex'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Дата рождения</th>
                            <td><?= $userData['user_birthdate'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Рост</th>
                            <td><?= $userData['user_height'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Цвет волос</th>
                            <td><?= $userData['user_hair_color'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Цвет глаз</th>
                            <td><?= $userData['user_eye_color'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Телосложение</th>
                            <td><?= $userData['user_body_type'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Интересы</th>
                            <td><?= implode(',', decodeBitString($userData['user_interests'])) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Провести время</th>
                            <td><?= implode(',', decodeBitString($userData['user_timespend'])) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Город</th>
                            <td><?= $userData['user_city'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Широта</th>
                            <td><?= $userData['lat'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Долгота</th>
                            <td><?= $userData['lng'] ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-6">
                    <p class="h3 pl-5">Фотографии</p>
                    <table class="table table-striped mt-3">
                        <thead>
                        <tr>
                            <th scope="col">Имя файла</th>
                            <th scope="col">Путь</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($userPhotos as $photo): ?>
                            <tr>
                                <th scope="row"><?= $photo['photo_name'] ?></th>
                                <td><?= $photo['photo_url'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php endif; ?>
    </div>