<?php
session_start();
// Проверка аутентификации - загружаем страницу входа если не аутентифицирован
if (!isset($_SESSION['auth']) || !$_SESSION['auth']) {
    include '../app/frontend/login.php';
    exit();
}

require __DIR__ . '/../../vendor/autoload.php';

// Загрузка параметров подключения к базе данных
$dbConfig = parse_ini_file("../app/config/db.ini");

// Создаем экземпляр класса работы с базой данных
require_once '../app/Classes/Db.php';
$db = new Db($dbConfig['name'], $dbConfig['host'], $dbConfig['user'], $dbConfig['password']);

// Маршруты страниц: ключи массива окончание строки запроса, значения название страницы, используется далее при подключении файлов
$routes = [
    '/logout' => 'logout',
    '/dev/idtables' => 'idtables',
    '/dev/codes' => 'codes',
    '/dev/user' => 'user',
    '/dev/photos' => 'photos',
    '/dev/socket' => 'socket',
    '/dev/push' => 'push',
    '/categories' => 'categories',
    '/cities' => 'cities',
    '/areas' => 'areas',
    '/tariffs' => 'tariffs',
    '/' => 'dashboard'
];

// Заголовки страниц: ключи массива - название страницы из $routes, значения - текст. кторый будет подставлен в шаблон
$titles = [
    'categories' => 'Категории',
    'idtables' => 'Таблицы идентификаторов',
    'codes' => 'Коды, токены',
    'user' => 'Анкета пользователя',
    'dashboard' => 'Рабочий стол',
    'photos' => 'Фотографии пользователей',
    'cities' => 'Города',
    'areas' => 'Зоны геолокации',
    'socket' => 'Тестирование веб-сокетов',
    'push' => 'Тестирование push-уведомлений',
    'tariffs' => 'Тарифы',
];

// Шаблоны страниц: ключи массива - название страницы из $routes, значения - название шаблона
$layouts = [
    'categories' => 'base-layout',
    'idtables' => 'base-layout',
    '404' => 'base-layout',
    'dashboard' => 'base-layout',
    'codes' => 'base-layout',
    'user' => 'base-layout',
    'photos' => 'base-layout',
    'cities' => 'base-layout',
    'areas' => 'base-layout',
    'socket' => 'base-layout',
    'push' => 'base-layout',
    'tariffs' => 'base-layout',
];

// получаем строку запроса
$uri = explode('?', $_SERVER['REQUEST_URI'])[0];

// Ищем совпадение строки запроса с ключом массива $routes и присваиваем значение переменной названия страницы,
// если не найдено, то название страницы 404
$page = '404';
foreach ($routes as $key => $value) {
    if (preg_match("~{$key}[/]{0,1}$~", $uri)) {
        $page = $value;
        break;
    }
}

$title = 'The Finder Admin';
if (key_exists($page, $titles)) {
    $title .= ' - ' . $titles[$page];
}

// Подключаем страницу с html-кодом объявления дополнительных скриптов
$scripts = '';
$scriptsPath = '../app/scripts/' . $page . '.php';
ob_start();
if (file_exists($scriptsPath)) {
    include $scriptsPath;
    $scripts = ob_get_clean();
}
// Подключаем страницу с html-кодом объявления дополнительных таблиц стилей
$css = '';
$cssPath = '../app/css/' . $page . '.php';
ob_start();
if (file_exists($cssPath)) {
    include $cssPath;
    $css = ob_get_clean();
}

//Подключаем бэкенд страницы
$content = '';
$backendPath = '../app/backend/' . $page . '.php';
if (file_exists($backendPath)) {
    include $backendPath;
}

//Подключаем содержимое страницы - фронтенд
$frontendPath = '../app/frontend/' . $page . '.php';
ob_start();
if (file_exists($frontendPath)) {
    include $frontendPath;
}
$content = ob_get_clean();

// Выводим шаблон в который подставятся заголовок, стили, фронт и скрипты
$layoutPath = '';
if (key_exists($page, $layouts)) {
    $layoutPath = '../app/layouts/' . $layouts[$page] . '.php';
}
if (file_exists($layoutPath)) {
    include $layoutPath;
}
