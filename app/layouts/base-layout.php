<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css?ver=1">
    <?php echo $css ?>
    <title><?php echo $title ?></title>
</head>
<body class="d-block">
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light">
    <div class="container-fluid">
        <a href="/" class="h3 text-dark nav-link pl-2">
            Finder admin
        </a>
        <div class="left-menu">
            <ul class="navbar-brand navbar-nav text-left">
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        Главная страница
                    </a>
                </li>
                <li class="nav-link">
                    Управление приложением
                    <ul style="list-style: none;">
                        <li class="nav-item">
                            <a class="nav-link" href="/tariffs">
                                Тарифы
                            </a>
                        </li><li class="nav-item">
                            <a class="nav-link" href="/categories">
                                Категории
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/areas">
                                Зоны геолокации
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-link">
                    Разработчикам
                    <ul style="list-style: none;">
                        <li class="nav-item">
                            <a class="nav-link" href="/dev/idtables">
                                Таблицы соответствий
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/dev/codes">
                                Коды и токены
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/dev/socket">
                                Тестирование сокетов
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/dev/push">
                                Тестирование push-уведомлений
                            </a>
                        </li>
                    </ul>
                <li class="nav-item">
                    <a class="nav-link" href="/dev/user">
                        Анкеты пользователей
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dev/photos">
                        Загруженные фотографии
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">
                        Выход <i class="fas fa-sign-out-alt"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="main-content">
    <!--    <header class="site-header navbar-static-top navbar-light" role="banner">-->
    <!--        <nav class="navbar navbar-light bg-white">-->
    <!--            <div class="container justify-content-end">-->
    <!--                <a class="navbar-brand btn btn-light" href="#"></a>-->
    <!--            </div>-->
    <!--        </nav>-->
    <!--    </header>-->
    <div class="container-fluid" id="container">
        <?php echo $content ?>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<?php echo $scripts ?>
</body>
</html>