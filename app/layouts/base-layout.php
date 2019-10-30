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
    <link rel="stylesheet" href="/css/style.css">
    <?php echo $css ?>
    <title><?php echo $title ?></title>
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
                    <a class="nav-link" href="/">
                        Главная страница
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories">
                        Управление категориями
                    </a>
                </li>
                <li class="nav-link">
                    Разработчикам
                    <ul style="list-style: none;">
                        <li class="nav-item">
                            <a class="nav-link" href="/dev/idtables">
                                Таблицы соответствий
                            </a>
                        <li class="nav-item">
                        </li>
                        <a class="nav-link" href="/dev/users">
                                Данные пользователей
                            </a>
                        </li>
                    </ul>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script>
    $(function () {
        var location = window.location.href;
        var cur_url = '/' + location;

        $('.menu li').each(function () {
            var link = $(this).find('a').attr('href');

            if (cur_url === link) {
                $(this).addClass('active');
            }
        });
    });
</script>
<?php echo $scripts ?>
</body>
</html>