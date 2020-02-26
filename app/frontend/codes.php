
        <div class="row">
            <div class="col-12">
                <p class="h1 mt-3">Данные авторизации пользователей</p>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-6">
                <p class="h3 pl-5">Смс-коды регистрации</p>
                <table class="table table-striped mt-3">
                    <thead>
                    <tr>
                        <th scope="col">Телефон</th>
                        <th scope="col">Код</th>
                        <th scope="col">Время</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($registerCodes as $row): ?>
                        <tr>
                            <th scope="row"><?= $row['phone'] ?></th>
                            <td><?= $row['code_value'] ?></td>
                            <td><?= date('d.m.Y H:i:s', $row['sent_at']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-6">
                <p class="h3 pl-5">Смс-коды восстановления пароля</p>
                <table class="table table-striped mt-3">
                    <thead>
                    <tr>
                        <th scope="col">Телефон / email</th>
                        <th scope="col">Код</th>
                        <th scope="col">Время</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($restoreCodes as $row): ?>
                        <tr>
                            <th scope="row"><?= $row['login'] ?></th>
                            <td><?= $row['code_value'] ?></td>
                            <td><?= date('d.m.Y H:i:s', $row['sent_at']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-6">
                <p class="h3 pl-5">Смс-коды изменения телефона</p>
                <table class="table table-striped mt-3">
                    <thead>
                    <tr>
                        <th scope="col">Телефон</th>
                        <th scope="col">ID ользователя</th>
                        <th scope="col">Код</th>
                        <th scope="col">Время</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($updateCodes as $row): ?>
                        <tr>
                            <th scope="row"><?= $row['phone'] ?></th>
                            <th scope="row"><?= $row['user_id'] ?></th>
                            <td><?= $row['code_value'] ?></td>
                            <td><?= date('d.m.Y H:i:s', $row['sent_at']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-12">
                <p class="h3 pl-5">Токены авторизации</p>
                <table class="table table-striped table-responsive mt-3">
                    <thead>
                    <tr>
                        <th scope="col">ID пользователя</th>
                        <th scope="col">Токен авторизации</th>
                        <th scope="col">Токен сокетов</th>
                        <th scope="col">Токен FCM</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($usersAuth as $row): ?>
                        <tr>
                            <th scope="row"><?= $row['user_id'] ?></th>
                            <td><?= $row['auth_token'] ?></td>
                            <td><?= $row['socket_token'] ?></td>
                            <td><?= $row['fcm_token'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>