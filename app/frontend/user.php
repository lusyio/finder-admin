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
        <?php if ($isUserExist): ?>
            <p class="h3 pl-5 mb-3"><?= $user->name; ?></p>

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
            </ul>
            <div class="tab-content" id="userTabContent">
                <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                    <div class="row mt-3">
                        <div class="col-12">
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
                        <div class="col-6">
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
                        <div id="geo" class="col-12 w-100" style="height: 400px;"></div>
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
    </div>