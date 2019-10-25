<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="/style.css">

    <title>Finder Admin</title>
</head>
<body class="d-block">
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light">
    <div class="container-fluid">
        <a href="/" class="h3 text-dark nav-link pl-2">
            Finder admin
        </a>
        <div class="left-menu pt-5">
            <ul class="navbar-brand navbar-nav text-left">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Параметры
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Параметры
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Выход <i class="fas fa-sign-out-alt"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="main-content">
    <header class="site-header navbar-static-top navbar-light" role="banner">
        <nav class="navbar navbar-light bg-light">
            <div class="container justify-content-end">
                <a class="navbar-brand btn btn-light" href="#">Создать отчет</a>
            </div>
        </nav>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bg-light pb-5" style="min-height: 100vh">
                <div class="row pt-5 pb-3">
                    <div class="col">
                        <div class="row">
                            <div class="col border-bottom pb-3">
                                <span style="margin-right: 13px;">ID</span>
                                <span>Название</span>
                            </div>
                        </div>
                        <div class="pt-3">
                            <span class="for-id mr-2">23</span>
                            <span class="h3" data-toggle="collapse" href="#collapseInterests">Интересы</span>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="collapseInterests">
                    <div class="row pt-3 pb-3 border-top">
                        <div class="col">
                            <span class="for-id mr-2">23</span>
                            <span class="h5" data-toggle="collapse" href="#collapseSport">
                        Спорт
                        </span>
                            <button class="ml-2 btn btn-sm btn-light change">
                                Изменить
                            </button>
                            <button class="ml-2 btn btn-sm btn-danger delete">
                                Удалить
                            </button>
                            <div class="collapse" id="collapseSport">
                                <ul class="sport-container list-unstyled">
                                    <li class="pt-1 pb-1 mt-1 mb-1 item__sport">
                                        <span class="for-id mr-2">23</span>
                                        Легкая атлетика
                                        <button class="btn btn-light change-item"><i class="fas fa-pencil-alt"></i>
                                        </button>
                                        <button class="btn btn-light delete-item"><i class="fas fa-minus-circle"></i>
                                        </button>
                                    </li>
                                    <li class="pt-1 pb-1 mt-1 mb-1 item__sport">
                                        <span class="for-id mr-2">23</span>
                                        Йога
                                        <button class="btn btn-light change-item"><i class="fas fa-pencil-alt"></i>
                                        </button>

                                        <button class="btn btn-light delete-item"><i class="fas fa-minus-circle"></i>
                                        </button>

                                    </li>
                                    <li class="pt-1 pb-1 mt-1 mb-1 item__sport">
                                        <span class="for-id mr-2">23</span>
                                        Командные виды спорта
                                        <button class="btn btn-light change-item"><i class="fas fa-pencil-alt"></i>
                                        </button>

                                        <button class="btn btn-light delete-item"><i class="fas fa-minus-circle"></i>
                                        </button>

                                    </li>
                                    <li class="pt-1 pb-1 mt-1 mb-1 item__sport">
                                        <span class="for-id mr-2">23</span>
                                        Шпагат растяжка пилатес
                                        <button class="btn btn-light change-item"><i class="fas fa-pencil-alt"></i>
                                        </button>

                                        <button class="btn btn-light delete-item"><i class="fas fa-minus-circle"></i>
                                        </button>

                                    </li>
                                </ul>
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
                    </div>

                    <div class="row pt-3 pb-3 border-top">
                        <div class="col">
                            <span class="for-id mr-2">23</span>

                            <span class="h5" data-toggle="collapse" href="#collapseMusic">
                        Музыка
                    </span>
                            <button class="ml-2 btn btn-sm btn-light change">
                                Изменить
                            </button>
                            <button class="ml-2 btn btn-sm btn-danger delete">
                                Удалить
                            </button>
                            <div class="collapse" id="collapseMusic">
                                <ul class="list-unstyled music-container">
                                    <li class="pt-1 pb-1 mt-1 mb-1 item__music"><span class="for-id mr-2">23</span>
                                        POP
                                    </li>
                                    <li class="pt-1 pb-1 mt-1 mb-1 item__music"><span class="for-id mr-2">23</span>
                                        Меломан
                                    </li>
                                    <li class="pt-1 pb-1 mt-1 mb-1 item__music"><span class="for-id mr-2">23</span>
                                        Шансон
                                    </li>
                                </ul>
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
                    </div>

                    <div class="row pt-3 pb-3 border-top">
                        <div class="col">
                            <span class="for-id mr-2">23</span>
                            <span class="h5" data-toggle="collapse" href="#collapseFilm">
                        Фильмы
                    </span>
                            <button class="ml-2 btn btn-sm btn-light change">
                                Изменить
                            </button>
                            <button class="ml-2 btn btn-sm btn-danger delete">
                                Удалить
                            </button>
                            <div class="collapse" id="collapseFilm">
                                <ul class="list-unstyled film-container">
                                    <li class="pt-1 pb-1 mt-1 mb-1 item__film"><span class="for-id mr-2">23</span>
                                        Комедия
                                    </li>
                                    <li class="pt-1 pb-1 mt-1 mb-1 item__film"><span class="for-id mr-2">23</span>
                                        Триллер
                                    </li>
                                    <li class="pt-1 pb-1 mt-1 mb-1 item__film"><span class="for-id mr-2">23</span>
                                        Мелодрама
                                    </li>
                                </ul>
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
                    </div>

                    <div class="row pt-3 pb-3 border-top">
                        <div class="col">
                            <span class="for-id mr-2">23</span>

                            <span class="h5" data-toggle="collapse" href="#collapseTravel">
                        Путешествия
                    </span>
                            <button class="ml-2 btn btn-sm btn-light change">
                                Изменить
                            </button>
                            <button class="ml-2 btn btn-sm btn-danger delete">
                                Удалить
                            </button>
                            <div class="collapse" id="collapseTravel">
                                <ul class="list-unstyled travel-container">
                                    <li class="pt-1 pb-1 mt-1 mb-1 item__travel"><span class="for-id mr-2">23</span>
                                        Культурно-познавательный туризм
                                    </li>
                                    <li class="pt-1 pb-1 mt-1 mb-1 item__travel"><span class="for-id mr-2">23</span>
                                        Спортивный туризм
                                    </li>
                                    <li class="pt-1 pb-1 mt-1 mb-1 item__travel"><span class="for-id mr-2">23</span>
                                        Приключенческий туризм
                                    </li>
                                    <li class="pt-1 pb-1 mt-1 mb-1 item__travel"><span class="for-id mr-2">23</span>
                                        Деловой туризм
                                    </li>
                                    <li class="pt-1 pb-1 mt-1 mb-1 item__travel"><span class="for-id mr-2">23</span>
                                        Тюлений отдых
                                    </li>
                                </ul>
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
                    </div>

                    <div class="row pt-3 pb-3 border-top">
                        <div class="col">
                            <span class="for-id mr-2">23</span>
                            <span class="h5" data-toggle="collapse" href="#collapseWorkField">
                        Сфера деятельности
                    </span>
                            <button class="ml-2 btn btn-sm btn-light change">
                                Изменить
                            </button>
                            <button class="ml-2 btn btn-sm btn-danger delete">
                                Удалить
                            </button>
                            <div class="collapse" id="collapseWorkField">
                                <ul class="list-unstyled work-field-container">
                                    <li class="pt-1 pb-1 mt-1 mb-1 item__work-field"><span class="for-id mr-2">23</span>
                                        Юриспруденция
                                    </li>
                                    <li class="pt-1 pb-1 mt-1 mb-1 item__work-field"><span class="for-id mr-2">23</span>
                                        Предприниматель
                                    </li>
                                    <li class="pt-1 pb-1 mt-1 mb-1 item__work-field"><span class="for-id mr-2">23</span>
                                        Промышленность
                                    </li>
                                </ul>
                                <div class="row mt-3">
                                    <div class="col-lg-6 offset-lg-3 col-12 offset-0">
                                        <div class="input-group">
                                            <input id="workField" type="text" class="form-control"
                                                   placeholder="Название">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                        id="addWorkField">
                                                    Добавить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row pt-3 pb-3 border-top">
                        <div class="col">
                            <span class="for-id mr-2">23</span>
                            <span class="h5" data-toggle="collapse" href="#collapseLeisure">
                        Досуг
                    </span>
                            <button class="ml-2 btn btn-sm btn-light change">
                                Изменить
                            </button>
                            <button class="ml-2 btn btn-sm btn-danger delete">
                                Удалить
                            </button>
                            <div class="collapse" id="collapseLeisure">
                                <ul class="list-unstyled leisure-container">
                                    <li class="pt-1 pb-1 mt-1 mb-1 item__leisure"><span class="for-id mr-2">23</span>
                                        Чтение книг
                                    </li>
                                    <li class="pt-1 pb-1 mt-1 mb-1 item__leisure"><span class="for-id mr-2">23</span>
                                        Релакс
                                    </li>
                                    <li class="pt-1 pb-1 mt-1 mb-1 item__leisure"><span class="for-id mr-2">23</span>
                                        Вечеринки
                                    </li>
                                </ul>
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
                    </div>

                    <div class="row pt-3 pb-3 border-top">
                        <div class="col">
                            <span class="for-id mr-2">23</span>
                            <span class="h5" data-toggle="collapse" href="#collapseBadHabit">
                            Вредные привычки
                        </span>
                            <button class="ml-2 btn btn-sm btn-light change">
                                Изменить
                            </button>
                            <button class="ml-2 btn btn-sm btn-danger delete">
                                Удалить
                            </button>
                            <div class="collapse" id="collapseBadHabit">
                                <ul class="list-unstyled bad-habit-container">
                                    <li class="pt-1 pb-1 mt-1 mb-1 item__bad-habit"><span class="for-id mr-2">23</span>
                                        Курю
                                    </li>
                                    <li class="pt-1 pb-1 mt-1 mb-1 item__bad-habit"><span class="for-id mr-2">23</span>
                                        Не курю
                                    </li>
                                    <li class="pt-1 pb-1 mt-1 mb-1 item__bad-habit"><span class="for-id mr-2">23</span>
                                        Выпиваю иногда
                                    </li>
                                    <li class="pt-1 pb-1 mt-1 mb-1 item__bad-habit"><span class="for-id mr-2">23</span>
                                        Не пью
                                    </li>
                                </ul>
                                <div class="row mt-3">
                                    <div class="col-lg-6 offset-lg-3 col-12 offset-0">
                                        <div class="input-group">
                                            <input id="badHabit" type="text" class="form-control"
                                                   placeholder="Название">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"
                                                        id="addBadHabit">
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

                <div class="row pt-3 pb-3 border-top">
                    <div class="col">
                        <span class="for-id mr-2">23</span>
                        <span class="h3" data-toggle="collapse" href="#collapsePastime">Как провести время?</span>
                    </div>
                </div>
                <div class="collapse" id="collapsePastime">
                    <div class="row pt-3 pb-3 border-top">
                        <div class="col">
                            <span class="for-id mr-2">23</span>
                            <span class="h5" data-toggle="collapse" href="#collapseSeason">
                            Сезоны
                        </span>
                            <button class="ml-2 btn btn-sm btn-light change">
                                Изменить
                            </button>
                            <button class="ml-2 btn btn-sm btn-danger delete">
                                Удалить
                            </button>
                            <div class="collapse" id="collapseSeason">
                                <ul class="list-unstyled season-container">
                                    <li class="pt-1 pb-1 mt-1 mb-1 item__season"><span class="for-id mr-2">23</span>
                                        В - всесезонно
                                    </li>
                                    <li class="pt-1 pb-1 mt-1 mb-1 item__season"><span class="for-id mr-2">23</span>
                                        Л – лето
                                    </li>
                                    <li class="pt-1 pb-1 mt-1 mb-1 item__season"><span class="for-id mr-2">23</span>
                                        З – зима
                                    </li>
                                </ul>
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
                    </div>

                    <div class="row pt-3 pb-3 border-top all-season-container">
                        <div class="col">
                            <span class="for-id mr-2">23</span>
                            <span class="h5" data-toggle="collapse" href="#collapseAllSeason">
                            Вcесезон
                        </span>
                            <button class="ml-2 btn btn-sm btn-light change">
                                Изменить
                            </button>
                            <button class="ml-2 btn btn-sm btn-danger delete">
                                Удалить
                            </button>
                            <div class="collapse" id="collapseAllSeason">
                                <div class="row pt-3 pb-3 border-top">
                                    <div class="col">
                                        <span class="for-id mr-2">23</span>
                                        <span class="h5" data-toggle="collapse" href="#collapseAllSeasonFilm">
                                        Кино
                                    </span>
                                        <button class="ml-2 btn btn-sm btn-light change">
                                            Изменить
                                        </button>
                                        <button class="ml-2 btn btn-sm btn-danger delete">
                                            Удалить
                                        </button>
                                        <div class="collapse" id="collapseAllSeasonFilm">
                                            <ul class="list-unstyled film-season-container">
                                                <li class="pt-1 pb-1 mt-1 mb-1 item__film-season"><span
                                                            class="for-id mr-2">23</span>
                                                    Сходить в кино
                                                </li>
                                            </ul>
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
                                </div>
                                <div class="row pt-3 pb-3 border-top">
                                    <div class="col">
                                        <span class="for-id mr-2">23</span>
                                        <span class="h5" data-toggle="collapse" href="#collapseAllSeasonRomantic">
                                        Романтика
                                    </span>
                                        <button class="ml-2 btn btn-sm btn-light change">
                                            Изменить
                                        </button>
                                        <button class="ml-2 btn btn-sm btn-danger delete">
                                            Удалить
                                        </button>
                                        <div class="collapse" id="collapseAllSeasonRomantic">
                                            <ul class="list-unstyled romantic-season-container">
                                                <li class="pt-1 pb-1 mt-1 mb-1 item__romantic-season"><span
                                                            class="for-id mr-2">23</span>
                                                    Посмотреть в мощный
                                                    телескоп
                                                    на
                                                    звезды
                                                </li>
                                                <li class="pt-1 pb-1 mt-1 mb-1 item__romantic-season"><span
                                                            class="for-id mr-2">23</span>
                                                    Прогуляться по городу
                                                    с
                                                    фотоаппаратом.
                                                    Пофоткать друг друга
                                                </li>
                                            </ul>
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
                                </div>
                                <div class="row pt-3 pb-3 border-top">
                                    <div class="col">
                                        <span class="for-id mr-2">23</span>
                                        <span class="h5" data-toggle="collapse" href="#collapseAllSeasonFood">
                                        Еда и напитки
                                    </span>
                                        <button class="ml-2 btn btn-sm btn-light change">
                                            Изменить
                                        </button>
                                        <button class="ml-2 btn btn-sm btn-danger delete">
                                            Удалить
                                        </button>
                                        <div class="collapse" id="collapseAllSeasonFood">
                                            <ul class="list-unstyled food-season-container">
                                                <li class="pt-1 pb-1 mt-1 mb-1 item__food-season"><span
                                                            class="for-id mr-2">23</span>
                                                    Покушать роллы и суши
                                                </li>
                                                <li class="pt-1 pb-1 mt-1 mb-1 item__food-season"><span
                                                            class="for-id mr-2">23</span>
                                                    Попить кофе
                                                </li>
                                                <li class="pt-1 pb-1 mt-1 mb-1 item__food-season"><span
                                                            class="for-id mr-2">23</span>
                                                    Продегустировать разное
                                                    пиво
                                                </li>
                                            </ul>
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
                                </div>
                                <div class="row pt-3 pb-3 border-top">
                                    <div class="col">
                                        <span class="for-id mr-2">23</span>
                                        <span class="h5" data-toggle="collapse" href="#collapseAllSeasonExtreme">
                                        Экстрим
                                    </span>
                                        <button class="ml-2 btn btn-sm btn-light change">
                                            Изменить
                                        </button>
                                        <button class="ml-2 btn btn-sm btn-danger delete">
                                            Удалить
                                        </button>
                                        <div class="collapse" id="collapseAllSeasonExtreme">
                                            <ul class="list-unstyled extreme-season-container">
                                                <li class="pt-1 pb-1 mt-1 mb-1 item__extreme-season"><span
                                                            class="for-id mr-2">23</span>
                                                    Прокатиться на
                                                    спортивном
                                                    авто
                                                </li>
                                                <li class="pt-1 pb-1 mt-1 mb-1 item__extreme-season"><span
                                                            class="for-id mr-2">23</span>
                                                    Пострелять из
                                                    огнестрельного
                                                    оружия
                                                </li>
                                                <li class="pt-1 pb-1 mt-1 mb-1 item__extreme-season"><span
                                                            class="for-id mr-2">23</span>
                                                    Покататься на картингах
                                                </li>
                                            </ul>
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
                                </div>
                                <div class="row pt-3 pb-3 border-top">
                                    <div class="col">
                                        <span class="for-id mr-2">23</span>
                                        <span class="h5" data-toggle="collapse" href="#collapseAllSeasonOther">
                                        Другое
                                    </span>
                                        <button class="ml-2 btn btn-sm btn-light change">
                                            Изменить
                                        </button>
                                        <button class="ml-2 btn btn-sm btn-danger delete">
                                            Удалить
                                        </button>
                                        <div class="collapse" id="collapseAllSeasonOther">
                                            <ul class="list-unstyled other-season-container">
                                                <li class="pt-1 pb-1 mt-1 mb-1 item__other-season"><span
                                                            class="for-id mr-2">23</span>
                                                    Посетить зоопарк
                                                </li>
                                                <li class="pt-1 pb-1 mt-1 mb-1 item__other-season"><span
                                                            class="for-id mr-2">23</span>
                                                    Сходить в планетарий
                                                </li>
                                                <li class="pt-1 pb-1 mt-1 mb-1 item__other-season"><span
                                                            class="for-id mr-2">23</span>
                                                    Сходить в аквапарк
                                                </li>
                                                <li class="pt-1 pb-1 mt-1 mb-1 item__other-season"><span
                                                            class="for-id mr-2">23</span>
                                                    Слепить вазу на гончарном
                                                    круге
                                                </li>
                                            </ul>
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
                                </div>
                                <div class="row pt-3 pb-3 border-top">
                                    <div class="col">
                                        <span class="for-id mr-2">23</span>
                                        <span class="h5" data-toggle="collapse" href="#collapseAllSeasonTheatre">
                                        Концерты, театры
                                    </span>
                                        <button class="ml-2 btn btn-sm btn-light change">
                                            Изменить
                                        </button>
                                        <button class="ml-2 btn btn-sm btn-danger delete">
                                            Удалить
                                        </button>
                                        <div class="collapse" id="collapseAllSeasonTheatre">
                                            <ul class="list-unstyled theatre-season-container">
                                                <li class="pt-1 pb-1 mt-1 mb-1 item__theatre-season"><span
                                                            class="for-id mr-2">23</span>
                                                    Сходить на концерт
                                                    классической
                                                    музыки
                                                </li>
                                                <li class="pt-1 pb-1 mt-1 mb-1 item__theatre-season"><span
                                                            class="for-id mr-2">23</span>
                                                    Сходить на мюзикл
                                                </li>
                                                <li class="pt-1 pb-1 mt-1 mb-1 item__theatre-season"><span
                                                            class="for-id mr-2">23</span>
                                                    Сходить на КВН/Stand up
                                                </li>
                                            </ul>
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
                                </div>
                                <div class="row pt-3 pb-3 border-top">
                                    <div class="col">
                                        <span class="for-id mr-2">23</span>
                                        <span class="h5" data-toggle="collapse"
                                              href="#collapseAllSeasonSelfdevelopment">
                                        Саморазвитие
                                    </span>
                                        <button class="ml-2 btn btn-sm btn-light change">
                                            Изменить
                                        </button>
                                        <button class="ml-2 btn btn-sm btn-danger delete">
                                            Удалить
                                        </button>
                                        <div class="collapse" id="collapseAllSeasonSelfdevelopment">
                                            <ul class="list-unstyled selfdevelopment-season-container">
                                                <li class="pt-1 pb-1 mt-1 mb-1 item__selfdevelopment-season"><span
                                                            class="for-id mr-2">23</span>
                                                    Сходить на
                                                    тренинг
                                                    личностного роста
                                                </li>
                                                <li class="pt-1 pb-1 mt-1 mb-1 item__selfdevelopment-season"><span
                                                            class="for-id mr-2">23</span>
                                                    Помедитировать/
                                                    Посетить
                                                    занятие по медитации
                                                </li>
                                            </ul>
                                            <div class="row mt-3">
                                                <div class="col-lg-6 offset-lg-3 col-12 offset-0">
                                                    <div class="input-group">
                                                        <input id="selfdevelopmentSeason" type="text"
                                                               class="form-control"
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
                                </div>
                                <div class="row pt-3 pb-3 border-top">
                                    <div class="col">
                                        <span class="for-id mr-2">23</span>
                                        <span class="h5" data-toggle="collapse" href="#collapseAllSeasonMusic">
                                        Музыка
                                    </span>
                                        <button class="ml-2 btn btn-sm btn-light change">
                                            Изменить
                                        </button>
                                        <button class="ml-2 btn btn-sm btn-danger delete">
                                            Удалить
                                        </button>
                                        <div class="collapse" id="collapseAllSeasonMusic">
                                            <ul class="list-unstyled music-season-container">
                                                <li class="pt-1 pb-1 mt-1 mb-1 item__music-season"><span
                                                            class="for-id mr-2">23</span>
                                                    Сходить в караоке
                                                </li>
                                                <li class="pt-1 pb-1 mt-1 mb-1 item__music-season"><span
                                                            class="for-id mr-2">23</span>
                                                    Провести вечер в
                                                    джаз-баре
                                                </li>
                                            </ul>
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
                                </div>
                                <div class="row pt-3 pb-3 border-top">
                                    <div class="col">
                                        <span class="for-id mr-2">23</span>
                                        <span class="h5" data-toggle="collapse" href="#collapseAllSeasonBooks">
                                        Книги и культура
                                    </span>
                                        <button class="ml-2 btn btn-sm btn-light change">
                                            Изменить
                                        </button>
                                        <button class="ml-2 btn btn-sm btn-danger delete">
                                            Удалить
                                        </button>
                                        <div class="collapse" id="collapseAllSeasonBooks">
                                            <ul class="list-unstyled books-season-container">
                                                <li class="pt-1 pb-1 mt-1 mb-1 item__books-season"><span
                                                            class="for-id mr-2">23</span>
                                                    Сходить на
                                                    художественную
                                                    выставку
                                                </li>
                                                <li class="pt-1 pb-1 mt-1 mb-1 item__books-season"><span
                                                            class="for-id mr-2">23</span>
                                                    Сходить на
                                                    поэтические чтения
                                                </li>
                                            </ul>
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
                                </div>
                                <div class="row pt-3 pb-3 border-top">
                                    <div class="col">
                                        <span class="for-id mr-2">23</span>
                                        <span class="h5" data-toggle="collapse" href="#collapseAllSeasonSport">
                                        Спорт
                                    </span>
                                        <button class="ml-2 btn btn-sm btn-light change">
                                            Изменить
                                        </button>
                                        <button class="ml-2 btn btn-sm btn-danger delete">
                                            Удалить
                                        </button>
                                        <div class="collapse" id="collapseAllSeasonSport">
                                            <ul class="list-unstyled sport-season-container">
                                                <li class="pt-1 pb-1 mt-1 mb-1 item__sport-season"><span
                                                            class="for-id mr-2">23</span>
                                                    Сходить на ипподром
                                                </li>
                                                <li class="pt-1 pb-1 mt-1 mb-1 item__sport-season"><span
                                                            class="for-id mr-2">23</span>
                                                    Научиться кататься на
                                                    лошади
                                                </li>
                                                <li class="pt-1 pb-1 mt-1 mb-1 item__sport-season"><span
                                                            class="for-id mr-2">23</span>
                                                    Попрыгать на
                                                    батутах
                                                </li>
                                            </ul>
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
                                </div>
                                <div class="row pt-3 pb-3 border-top">
                                    <div class="col">
                                        <span class="for-id mr-2">23</span>
                                        <span class="h5" data-toggle="collapse" href="#collapseAllSeasonBeauty">
                                        Мода и красота
                                    </span>
                                        <button class="ml-2 btn btn-sm btn-light change">
                                            Изменить
                                        </button>
                                        <button class="ml-2 btn btn-sm btn-danger delete">
                                            Удалить
                                        </button>
                                        <div class="collapse" id="collapseAllSeasonBeauty">
                                            <ul class="list-unstyled beauty-season-container">
                                                <li class="pt-1 pb-1 mt-1 mb-1 item__beauty-season"><span
                                                            class="for-id mr-2">23</span>
                                                    Провести время в
                                                    SPA-центре
                                                </li>
                                            </ul>
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
        </div>
    </div>
</div>


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