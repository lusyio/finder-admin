        <div class="row">
            <div class="col-12">
                <p class="h1 mt-3">Фотографии пользователей</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-responsive table-striped mt-3">
                    <thead>
                    <tr>
                        <th scope="col">ID фото</th>
                        <th scope="col">ID пользователя</th>
                        <th scope="col">Время</th>
                        <th scope="col">Порядок</th>
                        <th scope="col">Ссылка</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($photoList as $row): ?>
                        <tr>
                            <th scope="row"><?= $row['photo_id'] ?></th>
                            <td><?= $row['user_id'] ?></td>
                            <td><?= date('d.m.Y H:i:s', $row['upload_date']) ?></td>
                            <td><?= $row['photo_order'] ?></td>
                            <td><a href="http://176.119.156.145/<?= $row['photo_url'] ?>" target="_blank"><?= $row['photo_url'] ?></a></td>

                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>