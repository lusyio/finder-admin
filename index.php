<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Finder Admin</title>
</head>
<body>

<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col">
            <h1 class="text-center">
                Finder Admin
            </h1>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-lg-10 offset-lg-1 col-12 offset-0 bg-light">

            <div class="row pt-3 pb-3 border-top">
                <div class="col">
                    <h3 class="text-center">Профиль</h3>
                </div>
            </div>

            <div class="row pt-3 pb-3 border-top">
                <div class="col">
                    <div class="d-flex justify-content-between">
                        <div>
                            Город:
                        </div>
                        <div class="font-weight-bold">
                            Название города
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-3 pb-3 border-top">
                <div class="col">
                    <div class="d-flex justify-content-between">
                        <div>
                            Возраст:
                        </div>
                        <div class="font-weight-bold">
                            28
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex justify-content-between">
                        <div>
                            Рост:
                        </div>
                        <div class="font-weight-bold">
                            174 см
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex justify-content-between">
                        <div>
                            Телосложение:
                        </div>
                        <div class="font-weight-bold">
                            XS
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-3 pb-3 border-top">
                <div class="col">
                    <div class="d-flex justify-content-between">
                        <div>
                            Цвет волос:
                        </div>
                        <div class="font-weight-bold">
                            Пепельный
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex justify-content-between">
                        <div>
                            Цвет глаз:
                        </div>
                        <div class="font-weight-bold">
                            Карие
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-3 pb-3 border-top">
                <div class="col">
                    <h3 class="text-center">Интересы</h3>
                </div>
            </div>

            <div class="row pt-3 pb-3 border-top">
                <div class="col">
                    <h5 class="text-center">
                        Спорт
                    </h5>
                    <div class="d-flex text-center flex-wrap sport-container">
                        <div class="border p-1 m-1 item__sport">Легкая атлетика</div>
                        <div class="border p-1 m-1 item__sport">Йога</div>
                        <div class="border p-1 m-1 item__sport">Командные виды спорта</div>
                        <div class="border p-1 m-1 item__sport">Шпагат растяжка пилатес</div>
                        <div class="border p-1 m-1 item__sport">Плавание</div>
                        <div class="border p-1 m-1 item__sport">Теннис</div>
                        <div class="border p-1 m-1 item__sport">Зимние виды спорта</div>
                        <div class="border p-1 m-1 item__sport">Единоборства</div>
                        <div class="border p-1 m-1 item__sport">Танцы</div>
                        <div class="border p-1 m-1 item__sport">Workout</div>
                        <div class="border p-1 m-1 item__sport">Фитнес</div>
                        <div class="border p-1 m-1 item__sport">Гимнастика</div>
                        <div class="border p-1 m-1 item__sport">Серфинг</div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 offset-lg-3 col-12 offset-0">
                            <div class="input-group">
                                <input id="sport" type="text" class="form-control" placeholder="Название">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="addSport">
                                        Добавить
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row pt-3 pb-3 border-top">
                <div class="col">
                    <h5 class="text-center">
                        Музыка
                    </h5>
                    <div class="d-flex text-center flex-wrap music-container">
                        <div class="border p-1 m-1 item__music">POP</div>
                        <div class="border p-1 m-1 item__music">Меломан</div>
                        <div class="border p-1 m-1 item__music">Шансон</div>
                        <div class="border p-1 m-1 item__music">Классическая</div>
                        <div class="border p-1 m-1 item__music">Электронная музыка</div>
                        <div class="border p-1 m-1 item__music">Рок</div>
                        <div class="border p-1 m-1 item__music">Рэп</div>
                        <div class="border p-1 m-1 item__music">Металл</div>
                        <div class="border p-1 m-1 item__music">Джаз</div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 offset-lg-3 col-12 offset-0">
                            <div class="input-group">
                                <input id="music" type="text" class="form-control" placeholder="Название">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="addMusic">
                                        Добавить
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-3 pb-3 border-top">
                <div class="col">
                    <h5 class="text-center">
                        Фильмы
                    </h5>
                    <div class="d-flex text-center flex-wrap film-container">
                        <div class="border p-1 m-1 item__film">Комедия</div>
                        <div class="border p-1 m-1 item__film">Триллер</div>
                        <div class="border p-1 m-1 item__film">Мелодрама</div>
                        <div class="border p-1 m-1 item__film">Фантастика</div>
                        <div class="border p-1 m-1 item__film">Сериалы</div>
                        <div class="border p-1 m-1 item__film">Ужасы</div>
                        <div class="border p-1 m-1 item__film">Боевик</div>
                        <div class="border p-1 m-1 item__film">Мультфильмы</div>
                        <div class="border p-1 m-1 item__film">Драма</div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 offset-lg-3 col-12 offset-0">
                            <div class="input-group">
                                <input id="film" type="text" class="form-control" placeholder="Название">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="addFilm">
                                        Добавить
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-3 pb-3 border-top">
                <div class="col">
                    <h5 class="text-center">
                        Путешествия
                    </h5>
                    <div class="d-flex text-center flex-wrap travel-container">
                        <div class="border p-1 m-1 item__travel">Культурно-познавательный туризм</div>
                        <div class="border p-1 m-1 item__travel">Спортивный туризм</div>
                        <div class="border p-1 m-1 item__travel">Приключенческий туризм</div>
                        <div class="border p-1 m-1 item__travel">Деловой туризм</div>
                        <div class="border p-1 m-1 item__travel">Тюлений отдых</div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 offset-lg-3 col-12 offset-0">
                            <div class="input-group">
                                <input id="travel" type="text" class="form-control" placeholder="Название">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="addTravel">
                                        Добавить
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-3 pb-3 border-top">
                <div class="col">
                    <h5 class="text-center">
                        Сфера деятельности
                    </h5>
                    <div class="d-flex text-center flex-wrap work-field-container">
                        <div class="border p-1 m-1 item__work-field">Юриспруденция</div>
                        <div class="border p-1 m-1 item__work-field">Предприниматель</div>
                        <div class="border p-1 m-1 item__work-field">Промышленность</div>
                        <div class="border p-1 m-1 item__work-field">Безопасность</div>
                        <div class="border p-1 m-1 item__work-field">СМИ и Телевидение</div>
                        <div class="border p-1 m-1 item__work-field">Лингвист</div>
                        <div class="border p-1 m-1 item__work-field">Логистика, ВЭД, Торговля</div>
                        <div class="border p-1 m-1 item__work-field">Спорт</div>
                        <div class="border p-1 m-1 item__work-field">Гос. Служащий, политик</div>
                        <div class="border p-1 m-1 item__work-field">Инженер</div>
                        <div class="border p-1 m-1 item__work-field">Красота и мода</div>
                        <div class="border p-1 m-1 item__work-field">Педагогика</div>
                        <div class="border p-1 m-1 item__work-field">Строительство Архитектура</div>
                        <div class="border p-1 m-1 item__work-field">Транспорт</div>
                        <div class="border p-1 m-1 item__work-field">IT-технологии</div>
                        <div class="border p-1 m-1 item__work-field">Студент</div>
                        <div class="border p-1 m-1 item__work-field">Аграрная</div>
                        <div class="border p-1 m-1 item__work-field">Маркетинг, реклама, PR</div>
                        <div class="border p-1 m-1 item__work-field">Менеджмент и Управление</div>
                        <div class="border p-1 m-1 item__work-field">Экономика Финансы</div>
                        <div class="border p-1 m-1 item__work-field">Медицина</div>
                        <div class="border p-1 m-1 item__work-field">Космос, авиация</div>
                        <div class="border p-1 m-1 item__work-field">Военная</div>
                        <div class="border p-1 m-1 item__work-field">Искусство и культура</div>
                        <div class="border p-1 m-1 item__work-field">Сервис и туризм</div>
                        <div class="border p-1 m-1 item__work-field">Наука</div>
                        <div class="border p-1 m-1 item__work-field">Связанная с животными</div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 offset-lg-3 col-12 offset-0">
                            <div class="input-group">
                                <input id="workField" type="text" class="form-control" placeholder="Название">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="addWorkField">
                                        Добавить
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-3 pb-3 border-top">
                <div class="col">
                    <h5 class="text-center">
                        Досуг
                    </h5>
                    <div class="d-flex text-center flex-wrap leisure-container">
                        <div class="border p-1 m-1 item__leisure">Чтение книг</div>
                        <div class="border p-1 m-1 item__leisure">Релакс</div>
                        <div class="border p-1 m-1 item__leisure">Вечеринки</div>
                        <div class="border p-1 m-1 item__leisure">Автомобили</div>
                        <div class="border p-1 m-1 item__leisure">Просмотр фильмов</div>
                        <div class="border p-1 m-1 item__leisure">Встреча с друзьями</div>
                        <div class="border p-1 m-1 item__leisure">Саморазвитие</div>
                        <div class="border p-1 m-1 item__leisure">SPA</div>
                        <div class="border p-1 m-1 item__leisure">Театр</div>
                        <div class="border p-1 m-1 item__leisure">Вкусно поесть</div>
                        <div class="border p-1 m-1 item__leisure">Ночная жизнь</div>
                        <div class="border p-1 m-1 item__leisure">Мотоциклы</div>
                        <div class="border p-1 m-1 item__leisure">Прогулки</div>
                        <div class="border p-1 m-1 item__leisure">Видеоигры</div>
                        <div class="border p-1 m-1 item__leisure">Медитация</div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 offset-lg-3 col-12 offset-0">
                            <div class="input-group">
                                <input id="leisure" type="text" class="form-control" placeholder="Название">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="addLeisure">
                                        Добавить
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-3 pb-3 border-top">
                <div class="col">
                    <h5 class="text-center">
                        Вредные привычки
                    </h5>
                    <div class="d-flex text-center flex-wrap bad-habit-container">
                        <div class="border p-1 m-1 item__bad-habit">Курю</div>
                        <div class="border p-1 m-1 item__bad-habit">Не курю</div>
                        <div class="border p-1 m-1 item__bad-habit">Выпиваю иногда</div>
                        <div class="border p-1 m-1 item__bad-habit">Не пью</div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 offset-lg-3 col-12 offset-0">
                            <div class="input-group">
                                <input id="badHabit" type="text" class="form-control" placeholder="Название">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="addBadHabit">
                                        Добавить
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-3 pb-3 border-top">
                <div class="col">
                    <h3 class="text-center">Как провести время?</h3>
                </div>
            </div>

            <div class="row pt-3 pb-3 border-top">
                <div class="col">
                    <h5 class="text-center">
                        Сезоны
                    </h5>
                    <div class="d-flex text-center flex-wrap season-container">
                        <div class="border p-1 m-1 item__season">В - всесезонно</div>
                        <div class="border p-1 m-1 item__season">Л – лето</div>
                        <div class="border p-1 m-1 item__season">З – зима</div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 offset-lg-3 col-12 offset-0">
                            <div class="input-group">
                                <input id="season" type="text" class="form-control" placeholder="Название">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="addseason">
                                        Добавить
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-3 pb-3 border-top all-season-container">
                <div class="col">
                    <h4 class="text-center" data-toggle="collapse" href="#collapseAllSeason">
                        Внесезон
                    </h4>
                    <div class="collapse" id="collapseAllSeason">
                        <div class="row pt-3 pb-3 border-top">
                            <div class="col">
                                <h5 class="text-center">
                                    Кино
                                </h5>
                                <div class="d-flex text-center flex-wrap film-season-container">
                                    <div class="border p-1 m-1 item__film-season">Сходить в кино</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-6 offset-lg-3 col-12 offset-0">
                                        <div class="input-group">
                                            <input id="filmSeason" type="text" class="form-control"
                                                   placeholder="Название">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                        id="addFilmSeason">
                                                    Добавить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3 pb-3 border-top">
                            <div class="col">
                                <h5 class="text-center">
                                    Романтика
                                </h5>
                                <div class="d-flex text-center flex-wrap romantic-season-container">
                                    <div class="border p-1 m-1 item__romantic-season">Посмотреть в мощный телескоп на
                                        звезды
                                    </div>
                                    <div class="border p-1 m-1 item__romantic-season">Прогуляться по городу с
                                        фотоаппаратом.
                                        Пофоткать друг друга
                                    </div>
                                    <div class="border p-1 m-1 item__romantic-season">Кататься по ночному городу</div>
                                    <div class="border p-1 m-1 item__romantic-season">Покушать вкусного мороженого</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-6 offset-lg-3 col-12 offset-0">
                                        <div class="input-group">
                                            <input id="romanticSeason" type="text" class="form-control"
                                                   placeholder="Название">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                        id="addRomanticSeason">
                                                    Добавить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3 pb-3 border-top">
                            <div class="col">
                                <h5 class="text-center">
                                    Еда и напитки
                                </h5>
                                <div class="d-flex text-center flex-wrap food-season-container">
                                    <div class="border p-1 m-1 item__food-season">Покушать роллы и суши</div>
                                    <div class="border p-1 m-1 item__food-season">Попить кофе</div>
                                    <div class="border p-1 m-1 item__food-season">Продегустировать разное пиво</div>
                                    <div class="border p-1 m-1 item__food-season">Поужинать в ресторане</div>
                                    <div class="border p-1 m-1 item__food-season">Посетить ресторан с живой музыкой
                                    </div>
                                    <div class="border p-1 m-1 item__food-season">Посетить кулинарный мастер-класс</div>
                                    <div class="border p-1 m-1 item__food-season">Поесть бургеров</div>
                                    <div class="border p-1 m-1 item__food-season">Посетить дегустацию вин</div>
                                    <div class="border p-1 m-1 item__food-season">Посетить заведение с видом на город
                                    </div>
                                    <div class="border p-1 m-1 item__food-season">Посетить бар</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-6 offset-lg-3 col-12 offset-0">
                                        <div class="input-group">
                                            <input id="foodSeason" type="text" class="form-control"
                                                   placeholder="Название">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                        id="addFoodSeason">
                                                    Добавить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3 pb-3 border-top">
                            <div class="col">
                                <h5 class="text-center">
                                    Экстрим
                                </h5>
                                <div class="d-flex text-center flex-wrap extreme-season-container">
                                    <div class="border p-1 m-1 item__extreme-season">Прокатиться на спортивном авто
                                    </div>
                                    <div class="border p-1 m-1 item__extreme-season">Пострелять из огнестрельного
                                        оружия
                                    </div>
                                    <div class="border p-1 m-1 item__extreme-season">Покататься на картингах</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-6 offset-lg-3 col-12 offset-0">
                                        <div class="input-group">
                                            <input id="extremeSeason" type="text" class="form-control"
                                                   placeholder="Название">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                        id="addЕxtremeSeason">
                                                    Добавить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3 pb-3 border-top">
                            <div class="col">
                                <h5 class="text-center">
                                    Другое
                                </h5>
                                <div class="d-flex text-center flex-wrap other-season-container">
                                    <div class="border p-1 m-1 item__other-season">Посетить зоопарк</div>
                                    <div class="border p-1 m-1 item__other-season">Сходить в планетарий</div>
                                    <div class="border p-1 m-1 item__other-season">Сходить в аквапарк</div>
                                    <div class="border p-1 m-1 item__other-season">Слепить вазу на гончарном круге</div>
                                    <div class="border p-1 m-1 item__other-season">Посетить океанариум</div>
                                    <div class="border p-1 m-1 item__other-season">Пройти мастер-класс по рисованию
                                        песком
                                    </div>
                                    <div class="border p-1 m-1 item__other-season">Поплавать с дельфинами</div>
                                    <div class="border p-1 m-1 item__other-season">Покурить кальян</div>
                                    <div class="border p-1 m-1 item__other-season">Поиграть в приставку SonyP</div>
                                    <div class="border p-1 m-1 item__other-season">Нарисовать свою картину</div>
                                    <div class="border p-1 m-1 item__other-season">Сходить на танцевальную вечеринку
                                    </div>
                                    <div class="border p-1 m-1 item__other-season">Погулять вместе с собакой</div>
                                    <div class="border p-1 m-1 item__other-season">Посетить выставку животных</div>
                                    <div class="border p-1 m-1 item__other-season">Поиграть в настольные игры в кафе
                                    </div>
                                    <div class="border p-1 m-1 item__other-season">Пойти в цирк</div>
                                    <div class="border p-1 m-1 item__other-season">Поиграть в мафию</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-6 offset-lg-3 col-12 offset-0">
                                        <div class="input-group">
                                            <input id="otherSeason" type="text" class="form-control"
                                                   placeholder="Название">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                        id="addOtherSeason">
                                                    Добавить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3 pb-3 border-top">
                            <div class="col">
                                <h5 class="text-center">
                                    Концерты, театры
                                </h5>
                                <div class="d-flex text-center flex-wrap theatre-season-container">
                                    <div class="border p-1 m-1 item__theatre-season">Сходить на концерт классической
                                        музыки
                                    </div>
                                    <div class="border p-1 m-1 item__theatre-season">Сходить на мюзикл</div>
                                    <div class="border p-1 m-1 item__theatre-season">Сходить на КВН/Stand up</div>
                                    <div class="border p-1 m-1 item__theatre-season">Посмотреть балет в большом театре
                                    </div>
                                    <div class="border p-1 m-1 item__theatre-season">Посетить оперу</div>
                                    <div class="border p-1 m-1 item__theatre-season">Сходить в театр</div>
                                    <div class="border p-1 m-1 item__theatre-season">Сходить на концерт живой музыки
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-6 offset-lg-3 col-12 offset-0">
                                        <div class="input-group">
                                            <input id="theatreSeason" type="text" class="form-control"
                                                   placeholder="Название">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                        id="addTheatreSeason">
                                                    Добавить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3 pb-3 border-top">
                            <div class="col">
                                <h5 class="text-center">
                                    Саморазвитие
                                </h5>
                                <div class="d-flex text-center flex-wrap selfdevelopment-season-container">
                                    <div class="border p-1 m-1 item__selfdevelopment-season">Сходить на тренинг
                                        личностного роста
                                    </div>
                                    <div class="border p-1 m-1 item__selfdevelopment-season">Помедитировать/ Посетить
                                        занятие по медитации
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-6 offset-lg-3 col-12 offset-0">
                                        <div class="input-group">
                                            <input id="selfdevelopmentSeason" type="text" class="form-control"
                                                   placeholder="Название">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                        id="addSelfdevelopmentSeason">
                                                    Добавить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3 pb-3 border-top">
                            <div class="col">
                                <h5 class="text-center">
                                    Музыка
                                </h5>
                                <div class="d-flex text-center flex-wrap music-season-container">
                                    <div class="border p-1 m-1 item__music-season">Сходить в караоке</div>
                                    <div class="border p-1 m-1 item__music-season">Провести вечер в джаз-баре</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-6 offset-lg-3 col-12 offset-0">
                                        <div class="input-group">
                                            <input id="musicSeason" type="text" class="form-control"
                                                   placeholder="Название">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                        id="addMusicSeason">
                                                    Добавить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3 pb-3 border-top">
                            <div class="col">
                                <h5 class="text-center">
                                    Книги и культура
                                </h5>
                                <div class="d-flex text-center flex-wrap books-season-container">
                                    <div class="border p-1 m-1 item__books-season">Сходить на художественную выставку
                                    </div>
                                    <div class="border p-1 m-1 item__books-season">Сходить на поэтические чтения</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-6 offset-lg-3 col-12 offset-0">
                                        <div class="input-group">
                                            <input id="booksSeason" type="text" class="form-control"
                                                   placeholder="Название">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                        id="addBooksSeason">
                                                    Добавить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3 pb-3 border-top">
                            <div class="col">
                                <h5 class="text-center">
                                    Спорт
                                </h5>
                                <div class="d-flex text-center flex-wrap sport-season-container">
                                    <div class="border p-1 m-1 item__sport-season">Сходить на ипподром</div>
                                    <div class="border p-1 m-1 item__sport-season">Научиться кататься на лошади</div>
                                    <div class="border p-1 m-1 item__sport-season">Попрыгать на батутах</div>
                                    <div class="border p-1 m-1 item__sport-season">Поиграть в пейнтбол</div>
                                    <div class="border p-1 m-1 item__sport-season">Сходить на скалодром</div>
                                    <div class="border p-1 m-1 item__sport-season">Покататься на серфе</div>
                                    <div class="border p-1 m-1 item__sport-season">Поиграть в большой теннис</div>
                                    <div class="border p-1 m-1 item__sport-season">Покататься на роликах</div>
                                    <div class="border p-1 m-1 item__sport-season">Поиграть в боулинг</div>
                                    <div class="border p-1 m-1 item__sport-season">Поиграть в бильярд</div>
                                    <div class="border p-1 m-1 item__sport-season">Поиграть в керлинг</div>
                                    <div class="border p-1 m-1 item__sport-season">Сходить на баскетбольную игру</div>
                                    <div class="border p-1 m-1 item__sport-season">Сходить на футбольный матч</div>
                                    <div class="border p-1 m-1 item__sport-season">Сходить на хоккейный матч</div>
                                    <div class="border p-1 m-1 item__sport-season">Посетить спортивный матч</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-6 offset-lg-3 col-12 offset-0">
                                        <div class="input-group">
                                            <input id="sportSeason" type="text" class="form-control"
                                                   placeholder="Название">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                        id="addSportSeason">
                                                    Добавить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-3 pb-3 border-top">
                            <div class="col">
                                <h5 class="text-center">
                                    Мода и красота
                                </h5>
                                <div class="d-flex text-center flex-wrap beauty-season-container">
                                    <div class="border p-1 m-1 item__beauty-season">Провести время в SPA-центре</div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-6 offset-lg-3 col-12 offset-0">
                                        <div class="input-group">
                                            <input id="beautySeason" type="text" class="form-control"
                                                   placeholder="Название">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                        id="addBeautySeason">
                                                    Добавить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>