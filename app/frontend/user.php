        <div class="row">
            <div class="col-12">
                <p class="h1 mt-3">Пользователи</p>
            </div>
        </div>
        <?php if (!$isUserProfile): ?>
        <div class="row ">
            <div class="col-12">
                <table
                        id="usersTable"
                        data-toggle="table"
                        data-locale="ru-RU"
                        data-ajax="ajaxRequest"
                        data-search="true"
                        data-side-pagination="server"
                        data-classes="table table-hover"
                        data-pagination="true">
                    <thead>
                    <tr>
                        <th data-field="id">ID</th>
                        <th data-field="name" data-formatter="nameFormatter">Имя пользователя</th>
                        <th data-field="phone">Телефон</th>
                        <th data-field="email">E-mail</th>
                        <th data-field="city">Город</th>
                        <th data-field="block">Бан</th>
                    </tr>
                    </thead>
                </table>
        </div>
        <?php endif; ?>
        <?php if ($isUserExist): ?>
            <p class="h3"><a class="mr-3" href="/dev/user">←</a><?= $user->name; ?><?= ($user->isBlocked) ? '<span class=" ml-3 badge badge-danger">Заблокирован</span>' : '' ?></p>

            <ul class="nav nav-tabs" id="userTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="true">Личные данные</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#map" role="tab" aria-controls="map" aria-selected="false">Карта</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#photos" role="tab" aria-controls="photos" aria-selected="false">Фотографии</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#payments" role="tab" aria-controls="payments" aria-selected="false">Платежи</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" id="log-tab" data-toggle="tab" href="#log" role="tab" aria-controls="log" aria-selected="false">История действий</a>
                </li>
            </ul>
            <div class="tab-content" id="userTabContent">
                <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                    <div class="row mt-3">
                        <div class="col-lg-7 col-12">
                            <p class="mb-1">Телефон: <?= $user->phone ?></p>
                            <p class="mb-3">Email: <?= $user->email ?></p>
                            <p class="mb-1">Пол: <?= $user->sex ?></p>
                            <p class="mb-1">Дата рождения: <?= $user->birthDate ?> (возраст: <?= $user->getAge() ?>)</p>
                            <p class="mb-1">Рост: <?= $user->height ?></p>
                            <p class="mb-1">Цвет волос: <?= $user->hairColor ?></p>
                            <p class="mb-1">Цвет глаз: <?= $user->eyeColor ?></p>
                            <p class="mb-3">Телосложение: <?= $user->bodyStructure ?></p>
                            <p class="mb-1">Интересы: <?= implode(',', finder\User::decodeBitString($user->interests)) ?></p>
                            <p class="mb-3">Провести время: <?= implode(',', finder\User::decodeBitString($user->spendTime)) ?></p>
                            <p class="mb-1">Город: <?= $cityName ?> (id: <?= $user->cityId ?>)</p>
                            <p class="mb-1">Широта: <?= $user->lat ?></p>
                            <p class="mb-3">Долгота: <?= $user->lng ?></p>
                        </div>
                        <div class="col-lg-5 col-12">
                            <button class="btn btn-outline-danger w-100" type="button" data-toggle="collapse" data-target="#collapseBlock" aria-expanded="false" aria-controls="collapseBlock">
                                <?= ($user->isBlocked) ? 'Разблокировать' : 'Заблокировать' ?> пользователя
                            </button>
                            <div class="collapse" id="collapseBlock">
                                 <div class="card card-body">
                                    <label for="blockReason">Причина <?= ($user->isBlocked) ? 'разблокировки' : 'блокировки' ?>*</label><textarea id="blockReason" class="form-control" rows="5"></textarea>
                                    <button id="blockUser" class="btn btn-danger disabled mt-3" data-user-id="<?= $user->userId ?>" data-block-action="<?= ($user->isBlocked) ? 'unblock' : 'block' ?>"><?= ($user->isBlocked) ? 'Разблокировать' : 'Заблокировать' ?></button>
                                 </div>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="photos" role="tabpanel" aria-labelledby="map-tab">
                    <?php if (count($user->photos) == 0): ?>
                    <div class="row">
                        <div class="col-12 mt-3">
                            <p class="h5 text-center">
                                Нет загруженных фотографий
                            </p>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="row mt-3">
                        <?php foreach ($user->photos as $photo): ?>
                        <div class="col-lg-6 col-12">
                            <figure class="text-center">
                                <a target="_blank" href="https://finderdating.ru/<?= $photo['url'] ?>">
                                    <img class="w-100" src="https://finderdating.ru/<?= $photo['url'] ?>">
                                </a>
                                <figcaption class="text-center">id:<?= $photo['id'] ?> | порядок: <?= $photo['order'] ?> | <?= $photo['url'] ?></figcaption>
                            </figure>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="map" role="tabpanel" aria-labelledby="photos-tab">
                    <div class="row">
                        <div id="noGeo" class="col-12 mt-3">
                            <p class="h5 text-center">
                                Нет данных о геолокации пользователя
                            </p>
                        </div>
                        <div id="geo" class="col-12 w-100" style="min-height: 400px; height:70vh"></div>
                    </div>
                </div>
                <div class="tab-pane fade" id="payments" role="tabpanel" aria-labelledby="payments-tab">
                    <div class="row">
                        <div  class="col-12 mt-3">
                        <?php if (count($payments) == 0): ?>
                            <p class="h5 text-center">
                                Нет платежей
                            </p>
                        <?php else: ?>
                            <table class="table mt-3"
                                data-toggle="table"
                                data-show-columns="true"
                                data-detail-view="true"
                                data-detail-formatter="detailFormatter"
                                data-classes="table">
                                <thead>
                                <tr>
                                    <th scope="col">ID заказа</th>
                                    <th scope="col">Тариф</th>
                                    <th scope="col">Сумма</th>
                                    <th scope="col">ID платежа</th>
                                    <th scope="col">Статус платежа</th>
                                    <th scope="col">Статус в банке</th>
                                    <th scope="col">Дата создания</th>
                                    <th scope="col">Дата последнего обновления</th>
                                    <th scope="col" data-visible="false" data-field="payment-log">История заказа</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($payments as $payment): ?>
                                    <tr>
                                        <th scope="row"><?= $payment['order']['orderId'] ?></th>
                                        <th><?= $payment['order']['tariff_id'] ?></th>
                                        <th><?= $payment['order']['amount'] / 100 ?> руб.</th>
                                        <th><?= $payment['order']['paymentId'] ?></th>
                                        <th><?= $payment['order']['finder_status'] ?></th>
                                        <th><?= $payment['order']['bank_status'] ?></th>
                                        <th><?= date ('d.m.y H:i', $payment['order']['create_date']) ?></th>
                                        <th><?= date ('d.m.y H:i', $payment['order']['update_date']) ?></th>
                                        <th>
                                            <?php foreach ($payment['log'] as $paymentLog): ?>
                                            <p><?= date('d.m.y', $paymentLog['log_date']) ?> <?= $paymentLog['log_comment'] ?></p>
                                            <?php endforeach; ?>
                                        </th>
                                    </tr>
                            <?php endforeach; ?>
                                </tbody>
                            </table>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="log" role="tabpanel" aria-labelledby="log-tab">
                    <div class="row">
                        <div  class="col-12 mt-3">
                            <table class="table mt-3"
                                data-toggle="table"
                                data-classes="table"
                                data-locale="ru-RU">
                                <thead>
                                    <tr>
                                        <th scope="col" data-width="100">Дата</th>
                                        <th scope="col">Действие</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if (is_array($log)): ?>
                                    <?php foreach ($log as $logEntity): ?>
                                    <tr>
                                        <th scope="row"><?= date ('d.m.y H:i', $logEntity['log_date']) ?></th>
                                        <th><?= $logEntity['log_comment'] ?></th>
                                    </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
<?php if ($user->lat && $user->lng): ?>
            <script>
                Element.prototype.remove = function() {
                    this.parentElement.removeChild(this);
                };
                NodeList.prototype.remove = HTMLCollection.prototype.remove = function() {
                    for(var i = this.length - 1; i >= 0; i--) {
                        if(this[i] && this[i].parentElement) {
                            this[i].parentElement.removeChild(this[i]);
                        }
                    }
                };
                document.getElementById("noGeo").remove();
                function initMap() {
                    var geoPoint = {
                        lat:<?php echo $user->lat;?>,
                        lng:<?php echo $user->lng;?>
                    };
                    var mapOptions = {
                        center:geoPoint,
                        scrollwheel:true,
                        zoom:12
                    };
                    map = new google.maps.Map(document.getElementById('geo'),mapOptions);
                    markers = [];
                    var marker = new google.maps.Marker(
                        {position:{lat:<?php echo $user->lat;?>,lng:<?php echo $user->lng;?>},map:map}
                    );
                }

                function detailFormatter(index, row) {
                    return row['payment-log'];
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?&libraries=drawing&key=AIzaSyCleZZMKiDEY1pMVIEhXD8LgMvM0uKHYbI&callback=initMap"></script>
<?php endif; ?>
        <?php elseif (isset($userId)): ?>
            <div class="row text-center">
                <div class="col-12 text-center">
                <p class="h2">Пользователь с id <?= $userId ?> не найден</p>
                </div>
            </div>
        <?php endif; ?>
        <?php if (!$isUserProfile): ?>
        <script>
            function nameFormatter(value, data) {
                return '<a href ="?user=' + data.id + '">' + value + '</a>'
            }
            function ajaxRequest(params) {
                console.log(params);
                var url = '/ajax';
                // $.get(url + '?' + $.param(params.data)).then(function (res) {
                //     params.success(res)
                // });
                params.data.action = 'users';
                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    url: "/ajax",
                    data: params.data,
                    success: function (response) {

                    }
                }).then(function (res) {
                    console.log(res);
                    params.success(res);
                });
            }
        </script>
        <?php endif;?>